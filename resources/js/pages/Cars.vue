<script setup lang="ts">
import { ref, watch } from 'vue'
import { Head, Link, router } from '@inertiajs/vue3'
import AppLayout from '@/layouts/AppLayout.vue'
import { type BreadcrumbItem } from '@/types'
import { Button } from '@/components/ui/button'
import { Input } from '@/components/ui/input'
import { Label } from '@/components/ui/label'
import {
  Select,
  SelectContent,
  SelectItem,
  SelectTrigger,
  SelectValue,
} from '@/components/ui/select'
import { Pencil, Trash2, Search, X } from 'lucide-vue-next'
import { cars } from '@/routes'

const props = defineProps<{
  cars: Array<{
    id: number
    name: string
    registration_number: string | null
    is_registered: boolean
    parts?: unknown[]
  }>
  filters?: {
    name?: string
    is_registered?: string
    registration_number?: string
  }
}>()

const filterName = ref(props.filters?.name ?? '')
const filterRegistrationNumber = ref(props.filters?.registration_number ?? '')
const filterIsRegistered = ref(props.filters?.is_registered ?? 'all')

watch(
  () => props.filters,
  (f) => {
    filterName.value = f?.name ?? ''
    filterRegistrationNumber.value = f?.registration_number ?? ''
    filterIsRegistered.value = f?.is_registered ?? 'all'
  },
  { deep: true }
)

const breadcrumbs: BreadcrumbItem[] = [
  {
    title: 'Cars',
    href: cars().url,
  },
]

function applyFilters() {
  router.get(cars().url, {
    name: filterName.value || undefined,
    is_registered: filterIsRegistered.value === 'all' ? undefined : filterIsRegistered.value,
    registration_number: filterRegistrationNumber.value || undefined,
  }, { preserveState: true })
}

function clearFilters() {
  filterName.value = ''
  filterRegistrationNumber.value = ''
  filterIsRegistered.value = 'all'
  router.get(cars().url, {}, { preserveState: true })
}

function deleteCar(carId: number, carName: string) {
  if (!confirm(`Are you sure you want to delete car "${carName}"?`)) return
  router.delete(`/cars/${carId}`)
}
</script>

<template>
    <Head title="Cars" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div
            class="flex h-full flex-1 flex-col gap-4 overflow-x-auto rounded-xl p-4"
        >
            <div class="flex flex-wrap items-end gap-4 rounded-xl border border-sidebar-border/70 bg-card p-4 dark:border-sidebar-border">
                <div class="space-y-2">
                    <Label for="filter-name">Name</Label>
                    <Input
                        id="filter-name"
                        v-model="filterName"
                        type="text"
                        placeholder="Search by name..."
                        class="min-w-[12rem]"
                        @keydown.enter="applyFilters"
                    />
                </div>
                <div class="space-y-2">
                    <Label for="filter-registration">Registration number</Label>
                    <Input
                        id="filter-registration"
                        v-model="filterRegistrationNumber"
                        type="text"
                        placeholder="Reg. number"
                        class="min-w-[8rem]"
                        @keydown.enter="applyFilters"
                    />
                </div>
                <div class="space-y-2">
                    <Label for="filter-registered">Registered</Label>
                    <Select v-model="filterIsRegistered">
                        <SelectTrigger id="filter-registered" class="min-w-[8rem]">
                            <SelectValue placeholder="All" />
                        </SelectTrigger>
                        <SelectContent>
                            <SelectItem value="all">All</SelectItem>
                            <SelectItem value="true">Yes</SelectItem>
                            <SelectItem value="false">No</SelectItem>
                        </SelectContent>
                    </Select>
                </div>
                <div class="flex gap-2">
                    <Button type="button" @click="applyFilters">
                        <Search class="mr-2 size-4" />
                        Filter
                    </Button>
                    <Button type="button" variant="outline" @click="clearFilters">
                        <X class="mr-2 size-4" />
                        Clear filters
                    </Button>
                </div>
            </div>

            <div class="grid auto-rows-min gap-4 md:grid-cols-3">
                <div
                    v-for="car in props.cars"
                    :key="car.id"
                    class="relative flex h-full flex-col overflow-hidden rounded-xl border border-sidebar-border/70 bg-card dark:border-sidebar-border"
                >
                    <div class="aspect-[16/10] w-full shrink-0 overflow-hidden bg-muted">
                        <img
                            src="/images/default-car.png"
                            :alt="car.name"
                            class="h-full w-full object-cover"
                        />
                    </div>
                    <div class="flex flex-1 flex-col p-5">
                        <h3 class="text-lg font-semibold tracking-tight">
                            {{ car.name }}
                        </h3>
                        <div class="mt-2 space-y-1 text-sm text-muted-foreground">
                            <p>Registration number: {{ car.registration_number ?? '–' }}</p>
                            <p>Is registered: {{ car.is_registered ? 'Yes' : 'No' }}</p>
                            <p v-if="car.parts?.length !== undefined">
                                Number of parts: {{ car.parts.length }}
                            </p>
                        </div>
                        <div class="mt-4 flex shrink-0 gap-2 border-t border-sidebar-border/70 pt-4 dark:border-sidebar-border">
                        <!--
                        <Button variant="outline" size="icon" as-child>
                            <Link
                                :href="`/cars/${car.id}`"
                                aria-label="Zobraziť"
                                class="inline-flex items-center justify-center"
                            >
                                <Eye class="size-4" />
                            </Link>
                        </Button> -->
                        <Button variant="outline" size="icon" as-child>
                            <Link
                                :href="`/cars/${car.id}/edit`"
                                aria-label="Upraviť"
                                class="inline-flex items-center justify-center"
                            >
                                <Pencil class="size-4" />
                            </Link>
                        </Button>
                        <Button
                            variant="outline"
                            size="icon"
                            aria-label="Zmazať"
                            @click="deleteCar(car.id, car.name)"
                        >
                            <Trash2 class="size-4" />
                        </Button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
