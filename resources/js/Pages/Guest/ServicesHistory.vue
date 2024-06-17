<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";
import ServiceCard from "@/Components/ServiceCard.vue"
import '../../../css/services.css';

const queues = [
    {
        "id" : 1,
        "status" : 2
    },
    {
        "id" : 2,
        "status" : 3
    },
]

</script>

<template>
    <GuestLayout>
        <Head title="Search Service" />

        <div class="flex justify-between">
            <Link :href="route('services')">
                <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm md:px-5 px-2 md:py-2.5 py-2 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg class="rotate-180 w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </button>
            </Link>
            <div class="p-2 rounded-xl">
                ศูนย์ตรอ.ไอดี ขอขอบคุณที่ท่านไว้วางใจ มาใช้บริการ
            </div>
            <div></div>
        </div>

        <div class="mt-4 rounded-2xl">
            <h1 class="text-center sm:text-2xl text-xl font-bold">ประวัติการเข้าใช้บริการ</h1>
            <ServiceCard v-for="queue in queues" :queue="queue" />
        </div>
    </GuestLayout>
</template>
