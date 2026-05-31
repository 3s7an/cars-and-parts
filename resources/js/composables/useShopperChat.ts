import { computed, ref, watch } from 'vue';

export type ShopperChatMessage = {
    id: string;
    role: 'user' | 'assistant';
    content: string;
    createdAt: string;
};

const STORAGE_SESSION_KEY = 'shopper-chat-session-id';
const STORAGE_MESSAGES_KEY = 'shopper-chat-messages';
const STORAGE_OPEN_KEY = 'shopper-chat-open';

function loadSessionId(): string {
    const existing = localStorage.getItem(STORAGE_SESSION_KEY);

    if (existing) {
        return existing;
    }

    const id = crypto.randomUUID();
    localStorage.setItem(STORAGE_SESSION_KEY, id);

    return id;
}

function loadMessages(): ShopperChatMessage[] {
    try {
        const raw = localStorage.getItem(STORAGE_MESSAGES_KEY);

        if (!raw) {
            return [];
        }

        const parsed = JSON.parse(raw) as ShopperChatMessage[];

        return Array.isArray(parsed) ? parsed : [];
    } catch {
        return [];
    }
}

function loadOpenState(): boolean {
    return localStorage.getItem(STORAGE_OPEN_KEY) === '1';
}

export function useShopperChat() {
    const isOpen = ref(loadOpenState());
    const sessionId = ref(loadSessionId());
    const messages = ref<ShopperChatMessage[]>(loadMessages());
    const draft = ref('');
    const isLoading = ref(false);
    const error = ref<string | null>(null);

    const hasMessages = computed(() => messages.value.length > 0);

    watch(
        messages,
        (value) => {
            localStorage.setItem(STORAGE_MESSAGES_KEY, JSON.stringify(value));
        },
        { deep: true },
    );

    watch(isOpen, (value) => {
        localStorage.setItem(STORAGE_OPEN_KEY, value ? '1' : '0');
    });

    watch(sessionId, (value) => {
        localStorage.setItem(STORAGE_SESSION_KEY, value);
    });

    function toggleOpen(): void {
        isOpen.value = !isOpen.value;
    }

    function close(): void {
        isOpen.value = false;
    }

    function clearConversation(): void {
        messages.value = [];
        error.value = null;
        sessionId.value = crypto.randomUUID();
    }

    async function sendMessage(): Promise<void> {
        const text = draft.value.trim();

        if (!text || isLoading.value) {
            return;
        }

        error.value = null;
        draft.value = '';

        const userMessage: ShopperChatMessage = {
            id: crypto.randomUUID(),
            role: 'user',
            content: text,
            createdAt: new Date().toISOString(),
        };

        messages.value.push(userMessage);
        isLoading.value = true;

        try {
            const csrf = document.querySelector<HTMLMetaElement>('meta[name="csrf-token"]')?.content;

            const response = await fetch('/api/shopper-chat', {
                method: 'POST',
                headers: {
                    Accept: 'application/json',
                    'Content-Type': 'application/json',
                    ...(csrf ? { 'X-CSRF-TOKEN': csrf } : {}),
                },
                credentials: 'same-origin',
                body: JSON.stringify({
                    message: text,
                    session_id: sessionId.value,
                }),
            });

            const data = (await response.json()) as {
                reply?: string;
                session_id?: string;
                message?: string;
            };

            if (!response.ok) {
                throw new Error(data.message ?? 'Nepodarilo sa odoslať správu.');
            }

            if (data.session_id) {
                sessionId.value = data.session_id;
            }

            if (!data.reply) {
                throw new Error('Chat nevrátil odpoveď.');
            }

            messages.value.push({
                id: crypto.randomUUID(),
                role: 'assistant',
                content: data.reply,
                createdAt: new Date().toISOString(),
            });
        } catch (e) {
            error.value = e instanceof Error ? e.message : 'Nastala neočakávaná chyba.';
        } finally {
            isLoading.value = false;
        }
    }

    return {
        isOpen,
        sessionId,
        messages,
        draft,
        isLoading,
        error,
        hasMessages,
        toggleOpen,
        close,
        clearConversation,
        sendMessage,
    };
}
