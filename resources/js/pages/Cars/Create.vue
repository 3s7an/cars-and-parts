<script setup lang="ts">
import { computed } from 'vue'
import { Head, useForm } from '@inertiajs/vue3'
import AppLayout from '@/layouts/AppLayout.vue'
import { Input } from '@/components/ui/input'
import { Label } from '@/components/ui/label'
import { Button } from '@/components/ui/button'
import {
  Select,
  SelectContent,
  SelectItem,
  SelectTrigger,
  SelectValue,
} from '@/components/ui/select'
import { type BreadcrumbItem } from '@/types'
import { cars } from '@/routes'
import { create, edit, update } from '@/routes/cars'

const props = defineProps<{
  car?: {
    id: number
    name: string
    registration_number: string | null
    is_registered: boolean
  } | null
}>()

const isEdit = computed(() => !!props.car)

const breadcrumbs = computed<BreadcrumbItem[]>(() => [
  { title: 'Cars', href: cars().url },
  {
    title: isEdit.value ? 'Edit Car' : 'Create Car',
    href: isEdit.value && props.car ? edit.url({ car: props.car.id }) : create().url,
  },
])

const form = useForm({
  name: props.car?.name ?? '',
  is_registered: props.car?.is_registered ?? false,
  registration_number: props.car?.registration_number ?? '',
})

function submit() {
  form.clearErrors()
  let hasErrors = false

  const name_length = (form.name ?? '').trim().length
  if (name_length < 2 || name_length > 100) {
    form.setError('name', 'Name should be from 2 to 100 characters long')
    hasErrors = true
  }

  if (form.is_registered) {
    const registration_num = form.registration_number == null ? '' : String(form.registration_number)
    if (registration_num.length !== 8) {
      form.setError('registration_number', 'Registration number must be exactly 8 characters long')
      hasErrors = true
    }
  }

  if (!hasErrors) {
    if (isEdit.value && props.car) {
      form.put(update.url({ car: props.car.id }))
    } else {
      form.post('/cars')
    }
  }
}
</script>

<template>
  <Head :title="isEdit ? 'Edit car' : 'Add a car'" />
  <AppLayout :breadcrumbs="breadcrumbs">
    <div class="mt-4 flex justify-center px-4">
      <form
        @submit.prevent="submit"
        class="fs-32 w-full min-w-[min(100%,20rem)] max-w-4xl space-y-8 rounded-xl border border-border bg-card p-8 shadow-sm"
      >
        <h1 class="text-center text-2xl font-semibold tracking-tight">
          {{ isEdit ? 'Edit car' : 'Add a car' }}
        </h1>

        <div class="space-y-2">
          <Label for="name">Name</Label>
          <Input
            id="name"
            v-model="form.name"
            type="text"
            placeholder="Car name"
            :disabled="form.processing"
          />
          <p v-if="form.errors.name" class="text-sm text-destructive">
            {{ form.errors.name }}
          </p>
        </div>

        <div class="space-y-2">
          <Label for="is_registered">Is car registered</Label>
          <Select
            :model-value="form.is_registered ? 'true' : 'false'"
            @update:model-value="(v) => (form.is_registered = v === 'true')"
            :disabled="form.processing"
          >
            <SelectTrigger id="is_registered">
              <SelectValue placeholder="Select..." />
            </SelectTrigger>
            <SelectContent>
              <SelectItem value="true">Yes</SelectItem>
              <SelectItem value="false">No</SelectItem>
            </SelectContent>
          </Select>
          <p v-if="form.errors.is_registered" class="text-sm text-destructive">
            {{ form.errors.is_registered }}
          </p>
        </div>

        <div v-if="form.is_registered" class="space-y-2">
          <Label for="registration_number">Registration number</Label>
          <Input
            id="registration_number"
            v-model="form.registration_number"
            type="text"
            placeholder="Registration number"
            :disabled="form.processing"
          />
          <p v-if="form.errors.registration_number" class="text-sm text-destructive">
            {{ form.errors.registration_number }}
          </p>
        </div>

        <Button type="submit" variant="outline" aria-label="Submit" :disabled="form.processing">
          {{ form.processing ? (isEdit ? 'Ukladám...' : 'Odosielam...') : isEdit ? 'Update' : 'Submit' }}
        </Button>
      </form>
    </div>
  </AppLayout>
</template>
