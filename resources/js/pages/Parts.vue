<script setup lang="ts">
import { ref, watch } from 'vue'
import { Head, Link, router } from '@inertiajs/vue3'
import AppLayout from '@/layouts/AppLayout.vue'
import { type BreadcrumbItem } from '@/types'
import { parts } from '@/routes'
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
import {
  Table,
  TableBody,
  TableCell,
  TableHead,
  TableHeader,
  TableRow,
} from '@/components/ui/table'

const props = defineProps<{
  parts: Array<{
    id: number
    name: string
    serial_number: string | null
    car: { name: string } | null
  }>
  cars: Array<{ id: number; name: string }>
  filters?: {
    name?: string
    serial_number?: string
    car_id?: string
  }
}>()

const filterName = ref(props.filters?.name ?? '')
const filterSerialNumber = ref(props.filters?.serial_number ?? '')
const filterCarId = ref(props.filters?.car_id ?? 'all')

watch(
  () => props.filters,
  (f) => {
    filterName.value = f?.name ?? ''
    filterSerialNumber.value = f?.serial_number ?? ''
    filterCarId.value = f?.car_id ?? 'all'
  },
  { deep: true }
)

const breadcrumbs: BreadcrumbItem[] = [
  {
    title: 'Parts',
    href: parts().url,
  },
]

function applyFilters() {
  router.get(parts().url, {
    name: filterName.value || undefined,
    serial_number: filterSerialNumber.value || undefined,
    car_id: filterCarId.value === 'all' ? undefined : filterCarId.value,
  }, { preserveState: true })
}

function clearFilters() {
  filterName.value = ''
  filterSerialNumber.value = ''
  filterCarId.value = 'all'
  router.get(parts().url, {}, { preserveState: true })
}

function deletePart(partId: number, partName: string) {
  if (!confirm(`Are you sure you want to delete part "${partName}"?`)) return
  router.delete(`/parts/${partId}`)
}
</script>

<template>
    <Head title="Parts" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="flex h-full flex-1 flex-col gap-4 overflow-x-auto rounded-xl p-4">
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
                    <Label for="filter-serial">Serial number</Label>
                    <Input
                        id="filter-serial"
                        v-model="filterSerialNumber"
                        type="text"
                        placeholder="Serial number"
                        class="min-w-[10rem]"
                        @keydown.enter="applyFilters"
                    />
                </div>
                <div class="space-y-2">
                    <Label for="filter-car">Car</Label>
                    <Select v-model="filterCarId">
                        <SelectTrigger id="filter-car" class="min-w-[10rem]">
                            <SelectValue placeholder="All" />
                        </SelectTrigger>
                        <SelectContent>
                            <SelectItem value="all">All</SelectItem>
                            <SelectItem
                                v-for="car in props.cars"
                                :key="car.id"
                                :value="String(car.id)"
                            >
                                {{ car.name }}
                            </SelectItem>
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

            <Table>
                <TableHeader>
                    <TableRow>
                        <TableHead class="w-1/4">Name</TableHead>
                        <TableHead class="w-1/4">Serial number</TableHead>
                        <TableHead class="w-1/4">Car name</TableHead>
                        <TableHead class="w-1/4 text-right"></TableHead>
                    </TableRow>
                </TableHeader>
                <TableBody>
                    <TableRow v-for="part in props.parts" :key="part.id">
                        <TableCell class="font-medium">{{ part.name }}</TableCell>
                        <TableCell>{{ part.serial_number ?? '–' }}</TableCell>
                        <TableCell>{{ part.car?.name ?? '–' }}</TableCell>
                        <TableCell class="text-right">
                            <div class="flex justify-end gap-2">
                                <!--
                                <Button variant="outline" size="icon" as-child>
                                    <Link
                                        :href="`/parts/${part.id}`"
                                        aria-label="Zobraziť"
                                        class="inline-flex items-center justify-center"
                                    >
                                        <Eye class="size-4" />
                                    </Link> 
                                </Button> -->
                                <Button variant="outline" size="icon" as-child>
                                    <Link
                                        :href="`/parts/${part.id}/edit`"
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
                                    @click="deletePart(part.id, part.name)"
                                >
                                    <Trash2 class="size-4" />
                                </Button>
                            </div>
                        </TableCell>
                    </TableRow>
                </TableBody>
            </Table>
        </div>
    </AppLayout>
</template>
