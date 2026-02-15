<script setup lang="ts">
import { computed } from 'vue';
import { usePage } from '@inertiajs/vue3';
import AppContent from '@/components/AppContent.vue';
import AppShell from '@/components/AppShell.vue';
import AppSidebar from '@/components/AppSidebar.vue';
import AppSidebarHeader from '@/components/AppSidebarHeader.vue';
import { Alert, AlertDescription, AlertTitle } from '@/components/ui/alert';
import { CheckCircle, XCircle } from 'lucide-vue-next';
import type { BreadcrumbItem } from '@/types';

type Props = {
    breadcrumbs?: BreadcrumbItem[];
};

withDefaults(defineProps<Props>(), {
    breadcrumbs: () => [],
});

const page = usePage();
const flash = computed(() => (page.props.flash as { success?: string; error?: string }) ?? {});
const showSuccess = computed(() => !!flash.value.success);
const showError = computed(() => !!flash.value.error);
</script>

<template>
    <AppShell variant="sidebar">
        <AppSidebar />
        <AppContent variant="sidebar" class="overflow-x-hidden">
            <AppSidebarHeader :breadcrumbs="breadcrumbs" />
            <div v-if="showSuccess" class="px-4 pt-2">
                <Alert class="border-green-500/50 bg-green-500/10 text-green-700 dark:text-green-400">
                    <CheckCircle class="size-4" />
                    <AlertTitle>Success</AlertTitle>
                    <AlertDescription>{{ flash.success }}</AlertDescription>
                </Alert>
            </div>
            <div v-if="showError" class="px-4 pt-2">
                <Alert variant="destructive">
                    <XCircle class="size-4" />
                    <AlertTitle>Error</AlertTitle>
                    <AlertDescription>{{ flash.error }}</AlertDescription>
                </Alert>
            </div>
            <slot />
        </AppContent>
    </AppShell>
</template>
