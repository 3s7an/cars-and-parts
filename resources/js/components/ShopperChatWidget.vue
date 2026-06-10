<script setup lang="ts">
import { usePage } from '@inertiajs/vue3';
import { MessageCircle, Send, Trash2, X } from 'lucide-vue-next';
import { computed, nextTick, ref, watch } from 'vue';
import { Button } from '@/components/ui/button';
import { useShopperChat } from '@/composables/useShopperChat';

const page = usePage();
const showWidget = computed(() => Boolean(page.props.auth?.user));

const {
    isOpen,
    messages,
    draft,
    isLoading,
    error,
    hasMessages,
    toggleOpen,
    close,
    clearConversation,
    sendMessage,
} = useShopperChat();

const messagesContainer = ref<HTMLElement | null>(null);

watch(
    () => messages.value.length,
    async () => {
        await nextTick();
        messagesContainer.value?.scrollTo({
            top: messagesContainer.value.scrollHeight,
            behavior: 'smooth',
        });
    },
);

function handleSubmit(): void {
    void sendMessage();
}
</script>

<template>
    <Teleport to="body">
        <div
            v-if="showWidget"
            class="fixed right-5 bottom-5 z-[100] flex flex-col items-end gap-3"
        >
            <div
                v-if="isOpen"
                class="flex h-[min(32rem,calc(100vh-6rem))] w-[min(24rem,calc(100vw-2rem))] flex-col overflow-hidden rounded-2xl border bg-background shadow-2xl"
            >
                <div
                    class="flex items-center justify-between border-b bg-primary px-4 py-3 text-primary-foreground"
                >
                    <div>
                        <p class="text-sm font-semibold">Personal Shopper</p>
                        <p class="text-xs opacity-80">Cars and parts</p>
                    </div>
                    <div class="flex items-center gap-1">
                        <Button
                            variant="ghost"
                            size="icon"
                            class="size-8 text-primary-foreground hover:bg-primary-foreground/10 hover:text-primary-foreground"
                            title="Vymazať konverzáciu"
                            @click="clearConversation"
                        >
                            <Trash2 class="size-4" />
                        </Button>
                        <Button
                            variant="ghost"
                            size="icon"
                            class="size-8 text-primary-foreground hover:bg-primary-foreground/10 hover:text-primary-foreground"
                            title="Zavrieť"
                            @click="close"
                        >
                            <X class="size-4" />
                        </Button>
                    </div>
                </div>

                <div
                    ref="messagesContainer"
                    class="flex-1 space-y-3 overflow-y-auto p-4"
                >
                    <p
                        v-if="!hasMessages && !isLoading"
                        class="rounded-xl bg-muted px-3 py-2 text-sm text-muted-foreground"
                    >
                        Ahoj! Ako ti môžem pomôcť?
                    </p>

                    <div
                        v-for="message in messages"
                        :key="message.id"
                        class="flex"
                        :class="
                            message.role === 'user'
                                ? 'justify-end'
                                : 'justify-start'
                        "
                    >
                        <div
                            class="max-w-[85%] rounded-2xl px-3 py-2 text-sm whitespace-pre-wrap"
                            :class="
                                message.role === 'user'
                                    ? 'bg-primary text-primary-foreground'
                                    : 'bg-muted text-foreground'
                            "
                        >
                            {{ message.content }}
                        </div>
                    </div>

                    <div v-if="isLoading" class="flex justify-start">
                        <div
                            class="rounded-2xl bg-muted px-3 py-2 text-sm text-muted-foreground"
                        >
                            Píšem odpoveď…
                        </div>
                    </div>
                </div>

                <div
                    v-if="error"
                    class="border-t px-4 py-2 text-sm text-destructive"
                >
                    {{ error }}
                </div>

                <form
                    class="flex items-end gap-2 border-t p-3"
                    @submit.prevent="handleSubmit"
                >
                    <textarea
                        v-model="draft"
                        rows="2"
                        placeholder="Napíš, čo hľadáš…"
                        class="max-h-28 min-h-10 flex-1 resize-none rounded-xl border bg-background px-3 py-2 text-sm outline-none focus-visible:ring-2 focus-visible:ring-ring"
                        :disabled="isLoading"
                        @keydown.enter.exact.prevent="handleSubmit"
                    />
                    <Button
                        type="submit"
                        size="icon"
                        class="shrink-0 rounded-xl"
                        :disabled="isLoading || !draft.trim()"
                    >
                        <Send class="size-4" />
                    </Button>
                </form>
            </div>

            <Button
                size="icon"
                class="size-14 rounded-full shadow-lg"
                :aria-expanded="isOpen"
                aria-label="Otvoriť chat"
                @click="toggleOpen"
            >
                <MessageCircle class="size-6" />
            </Button>
        </div>
    </Teleport>
</template>
