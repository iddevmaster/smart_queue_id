<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";
import ServiceCard from "@/Components/ServiceCard.vue"
import '../../../css/services.css';

const queues = [
    {
        "id" : 1,
        "status" : 1
    },
    {
        "id" : 1,
        "status" : 0
    },
]

</script>

<template>
    <GuestLayout>
        <Head title="Search Service" />

        <div class="flex justify-between">
            <Link :href="route('search')">
                <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm md:px-5 px-2 md:py-2.5 py-2 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg class="rotate-180 w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </button>
            </Link>
            <div class="p-2 bg-white rounded-xl"><p class="text-center">
                ผลการค้นหาสำหรับ
                <span class="bg-purple-100 text-purple-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-purple-900 dark:text-purple-300">0986321173</span>
                <span class="bg-purple-100 text-purple-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-purple-900 dark:text-purple-300">ทส-1234</span></p></div>
            <Link :href="route('service.history')" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm md:px-5 px-2 md:py-2.5 py-2 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                ประวัติ
            </Link>
        </div>

        <div class="mt-4 rounded-2xl">
            <h1 class="text-center sm:text-2xl text-xl font-bold">บริการที่ท่านลงทะเบียนไว้</h1>
            <ServiceCard v-for="queue in queues" :queue="queue" />
        </div>

        <div class="w-full mt-6 px-6 py-4 overflow-hidden text-sm md:text-md" >
            <p>หากไม่พบข้อมูลที่ค้นหา สามารถดำเนินการได้ดังนี้</p>
            <ul class="ms-4 space-y-1 text-gray-500 list-disc list-inside dark:text-gray-400">
                <li>
                    กรณีที่ท่านได้ยื่นความประสงค์เข้ารับบริการกับศูนย์ตรอ.ไอดีแล้ว แต่<span class="text-red-600">ไม่พบ</span>ข้อมูลการค้นหากรุณาติดต่อ <a href="/search" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">@LineOA</a>
                </li>
                <li>
                    หากท่าน<span class="text-red-600">ยังไม่ได้</span>ยื่นความประสงค์เข้ารับบริการกับศูนย์ตรอ.ไอดี กรุณา<a href="/search" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">ติดต่อเจ้าหน้าที่</a> เพื่อยื่นความประสงค์เข้ารับบริการกับศูนย์ตรอ.ไอดี
                </li>
            </ul>
        </div>
    </GuestLayout>
</template>
