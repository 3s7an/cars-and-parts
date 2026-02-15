<script setup lang="ts">
import Breadcrumbs from '@/components/Breadcrumbs.vue';
import { SidebarTrigger } from '@/components/ui/sidebar';
import type { BreadcrumbItem } from '@/types';
import { computed } from 'vue';
import { Link } from '@inertiajs/vue3';

const props = withDefaults(
    defineProps<{
        breadcrumbs?: BreadcrumbItem[];
    }>(),
    {
        breadcrumbs: () => [],
    },
);

const showBackButton = computed(() => {
    if (!props.breadcrumbs || props.breadcrumbs.length < 2) return false;
    const last = props.breadcrumbs[props.breadcrumbs.length - 1].title;
    return ['Create', 'Create Car', 'Edit Car', 'Create Part', 'Edit Part'].includes(last);
});

const backHref = computed(() => {
    if (!props.breadcrumbs || props.breadcrumbs.length < 2) return '#';
    return props.breadcrumbs[props.breadcrumbs.length - 2].href;
});

const addButtonText = computed(() => {
    if (!props.breadcrumbs || props.breadcrumbs.length === 0) {
        return 'Add';
    }
    const lastBreadcrumb = props.breadcrumbs[props.breadcrumbs.length - 1];
    const title = lastBreadcrumb.title;
    return `Add ${title.slice(0, -1)}`;
});

const createUrl = computed(() => {
    if (!props.breadcrumbs || props.breadcrumbs.length === 0) {
        return '#';
    }
    const lastBreadcrumb = props.breadcrumbs[props.breadcrumbs.length - 1];
    const title = lastBreadcrumb.title.toLowerCase();
    
    return `/${title}/create`;
});

</script>

<template>
    <header
        class="flex h-16 shrink-0 items-center justify-between gap-2 border-b border-sidebar-border/70 px-6 transition-[width,height] ease-linear group-has-data-[collapsible=icon]/sidebar-wrapper:h-12 md:px-4"
    >
        <div class="flex items-center gap-2">
            <SidebarTrigger class="-ml-1" />
            <template v-if="breadcrumbs && breadcrumbs.length > 0">
                <Breadcrumbs :breadcrumbs="breadcrumbs" />
            </template>
        </div>
        <div class="flex items-center gap-2">
            <template v-if="showBackButton">
                <Link :href="backHref" class="rounded-md border border-sidebar-border bg-white px-4 py-1.5 text-black hover:bg-gray-100">Back</Link>
            </template>
            <template v-else-if="breadcrumbs && breadcrumbs.length > 0">
                <Link :href="createUrl" class="rounded-md border border-sidebar-border bg-white px-4 py-1.5 text-black hover:bg-gray-100">{{ addButtonText }}</Link>
            </template>
        </div>
    </header>
</template>