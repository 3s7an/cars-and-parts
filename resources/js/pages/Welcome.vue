<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3'
import { dashboard, login, register } from '@/routes'

withDefaults(
  defineProps<{
    canRegister: boolean
  }>(),
  {
    canRegister: true,
  }
)
</script>

<template>
  <Head title="Welcome" />
  <div
    class="flex min-h-screen flex-col items-center bg-[#FDFDFC] p-6 text-[#1b1b18] dark:bg-[#0a0a0a] dark:text-[#EDEDEC]"
  >
    <header class="w-full max-w-4xl py-4">
      <nav class="flex items-center justify-end gap-4">
        <Link
          v-if="$page.props.auth.user"
          :href="dashboard()"
          class="inline-block rounded-sm border border-[#19140035] px-5 py-1.5 text-sm leading-normal hover:border-[#1915014a] dark:border-[#3E3E3A] dark:hover:border-[#62605b]"
        >
          Dashboard
        </Link>
        <template v-else>
          <Link
            :href="login()"
            class="inline-block rounded-sm border border-transparent px-5 py-1.5 text-sm leading-normal hover:border-[#19140035] dark:hover:border-[#3E3E3A]"
          >
            Log in
          </Link>
          <Link
            v-if="canRegister"
            :href="register()"
            class="inline-block rounded-sm border border-[#19140035] px-5 py-1.5 text-sm leading-normal hover:border-[#1915014a] dark:border-[#3E3E3A] dark:hover:border-[#62605b]"
          >
            Register
          </Link>
        </template>
      </nav>
    </header>

    <main class="flex flex-1 items-center justify-center">
      <h1 class="text-5xl font-semibold tracking-tight sm:text-6xl lg:text-7xl">
        Welcome
      </h1>
    </main>
  </div>
</template>
