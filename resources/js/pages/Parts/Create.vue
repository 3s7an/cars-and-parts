<script setup lang="ts">
import { computed } from 'vue'
import { Head, useForm } from '@inertiajs/vue3'
import AppLayout from '@/layouts/AppLayout.vue'
import { Input } from '@/components/ui/input'
import { Label } from '@/components/ui/label'
import { Button } from '@/components/ui/button'
import { type BreadcrumbItem } from '@/types'
import { parts } from '@/routes'
import { create, edit, update } from '@/routes/parts'
import {
  Select,
  SelectContent,
  SelectItem,
  SelectTrigger,
  SelectValue,
} from '@/components/ui/select'

const props = defineProps<{
  cars: Array<{
    id: number
    name: string
    registration_number: string | null
    is_registered: boolean
  }>
  part?: {
    id: number
    name: string
    serial_number: string | null
    car_id: number
  } | null
}>()

const isEdit = computed(() => !!props.part)

const breadcrumbs = computed<BreadcrumbItem[]>(() => [
  { title: 'Parts', href: parts().url },
  {
    title: isEdit.value ? 'Edit Part' : 'Create Part',
    href: isEdit.value && props.part ? edit.url({ part: props.part.id }) : create().url,
  },
])

const form = useForm({
  name: props.part?.name ?? '',
  serial_number: props.part?.serial_number ?? '',
  car_id: props.part?.car_id ?? (null as number | null),
})

function submit() {
  form.clearErrors()
  let hasErrors = false

  const nameLength = (form.name ?? '').trim().length
  if (nameLength < 2 || nameLength > 100) {
    form.setError('name', 'Name must be 2 to 100 characters')
    hasErrors = true
  }

  const serialNum = (form.serial_number ?? '').trim()
  if (serialNum.length !== 8) {
    form.setError('serial_number', 'Serial number must be exactly 8 characters')
    hasErrors = true
  }

  if (form.car_id == null) {
    form.setError('car_id', 'Please select a car')
    hasErrors = true
  }

  if (!hasErrors) {
    if (isEdit.value && props.part) {
      form.put(update.url({ part: props.part.id }))
    } else {
      form.post('/parts')
    }
  }
}
</script>

<template>
  <Head :title="isEdit ? 'Edit part' : 'Add a part'" />
  <AppLayout :breadcrumbs="breadcrumbs">
    <div class="mt-4 flex w-full justify-center px-4">
      <form
        @submit.prevent="submit"
        class="fs-32 w-full min-w-[min(100%,20rem)] max-w-4xl space-y-8 rounded-xl border border-border bg-card p-8 shadow-sm"
      >
        <h1 class="text-center text-2xl font-semibold tracking-tight">
          {{ isEdit ? 'Edit part' : 'Add a part' }}
        </h1>

        <div class="space-y-2">
          <Label for="name">Name</Label>
          <Input
            id="name"
            v-model="form.name"
            type="text"
            placeholder="Enter value here"
            :disabled="form.processing"
          />
          <p v-if="form.errors.name" class="text-sm text-destructive">
            {{ form.errors.name }}
          </p>
        </div>

        <div class="space-y-2">
          <Label for="serial_number">Serial number</Label>
          <Input
            id="serial_number"
            v-model="form.serial_number"
            type="text"
            placeholder="8 characters"
            maxlength="8"
            :disabled="form.processing"
          />
          <p v-if="form.errors.serial_number" class="text-sm text-destructive">
            {{ form.errors.serial_number }}
          </p>
        </div>

        <div class="space-y-2">
          <Label for="car_id">Select car where part belongs</Label>
          <Select
            :model-value="form.car_id != null ? String(form.car_id) : undefined"
            @update:model-value="(v) => (form.car_id = v ? Number(v) : null)"
            :disabled="form.processing"
          >
            <SelectTrigger id="car_id">
              <SelectValue placeholder="Select a car" />
            </SelectTrigger>
            <SelectContent>
              <SelectItem
                v-for="car in props.cars"
                :key="car.id"
                :value="String(car.id)"
              >
                {{ car.name }}
              </SelectItem>
            </SelectContent>
          </Select>
          <p v-if="form.errors.car_id" class="text-sm text-destructive">
            {{ form.errors.car_id }}
          </p>
        </div>

        <Button type="submit" variant="outline" aria-label="Submit" :disabled="form.processing">
          {{ form.processing ? (isEdit ? 'Ukladám...' : 'Odosielam...') : isEdit ? 'Update' : 'Submit' }}
        </Button>
      </form>
    </div>
  </AppLayout>
</template>
