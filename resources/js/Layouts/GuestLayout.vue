<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div class="min-h-screen flex flex-col items-center pt-6 sm:pt-0 bg-gray-100">
        <div class="container max-w-3xl">
            <div>
                <img src="/images/cover/sit_cover.jpg" alt="">
            </div>
            <div class="bg-green-400 w-full p-4">
                <slot />
            </div>
        </div>
    </div>
</template>
