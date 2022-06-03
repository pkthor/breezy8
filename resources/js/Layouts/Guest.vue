<script setup>
import BreezeApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/inertia-vue3';
</script>

<template>
<!-- This page is seen prior to signing in. -->
    <div class="relative bg-gradient-to-b from-blue-500 to-blue-100 p-12 min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">

<!-- This is the Christus logo, with link to home page. -->
        <div class="w-6/12 h-6/12 fill-current items-center">
            <Link href="/">
                <BreezeApplicationLogo />
            </Link>
        </div>

<!-- This is allows the signin card -->
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 shadow-md overflow-hidden sm:rounded-lg">
            <slot />
        </div>
    </div>
</template>
