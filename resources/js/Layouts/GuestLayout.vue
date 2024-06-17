<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div class="min-h-screen flex flex-col items-center bg-gray-100 bodybg">
        <div class="container max-w-3xl">
            <header class="md:shadow-lg md:rounded-b-xl">
                <img src="/images/cover/sit_cover.jpg" class="md:rounded-b-xl" alt="">
            </header>
            <main class=" w-full p-2 sm:p-4">
                <slot />
            </main>
        </div>
        <footer class="mt-auto w-full max-w-3xl flex justify-between p-4 sm:px-5 px-3 bg-orange-500 rounded-t-xl">
            <div>
                <p class="text-gray-200">พบปัญหา กรุณาติดต่อ</p>
                <p class="text-xl text-center"><a href="https://www.iddriver.com/our-branches/" target="_blank" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">ศูนย์ตรอ.ไอดี</a></p>
            </div>
            <div>
                <p class="text-gray-200">© {{ (new Date()).getFullYear() }} Smart Queue ID</p>
                <p class="text-gray-200">Powered By <a href="https://iddrives.co.th/web/" target="_blank" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">ID Drives</a></p>
            </div>
        </footer>
    </div>
</template>

<style>
    .bodybg {
        background-image: url('/images/cover/cover5.webp');
        background-size: cover;
        background-position: center;
    }
</style>
