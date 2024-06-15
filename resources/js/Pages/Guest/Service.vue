<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import ServiceDetail from "@/Components/ServiceDetail.vue"
import { Head, Link} from "@inertiajs/vue3";
import '../../../css/services.css';

const queue = {
    "status" : 1
}
</script>

<template>
    <GuestLayout>
        <Head title="Service 1" />
        <div class="flex justify-between">
            <Link :href="route('services')">
                <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm md:px-5 px-2 md:py-2.5 py-2 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg class="rotate-180 w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </button>
            </Link>
            <div class="p-2">
                <p class="text-center text-xl font-bold">รายละเอียดบริการ</p>
            </div>
            <div></div>
            <!-- <div class="p-2 bg-white rounded-xl"><p class="text-center">
                ผลการค้นหาสำหรับ
                <span class="bg-purple-100 text-purple-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-purple-900 dark:text-purple-300">0986321173</span>
                <span class="bg-purple-100 text-purple-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-purple-900 dark:text-purple-300">ทส-1234</span></p></div>
            <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm md:px-5 px-2 md:py-2.5 py-2 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                ประวัติ
            </button> -->
        </div>

        <ServiceDetail :queue="queue" />

        <div class="w-full mt-6 px-6 py-4 overflow-hidden" >
            <a href="https://maps.app.goo.gl/pJo8XVk2UvZ9Nqvd7" target="_blank" class="flex justify-center"><img src="/images/mapcover.jpg" class=" w-1/2" alt=""></a>
        </div>

        <div class="w-full mt-6 px-6 py-4 overflow-hidden text-sm md:text-md" >
            <p>สิ่งที่ต้องเตรียมในการเข้ารับการตรวจสภาพรถ</p>
            <ul class="ms-4 space-y-1 text-gray-500 list-decimal list-inside dark:text-gray-400">
                <li>
                    รถที่ต้องการตรวจสภาพ
                </li>
                <li>
                    สมุดเล่มทะเบียนรถ หากไม่มีเล่มทะเบียนรถตัวจริงสามารถใช้สำเนาแทนได้
                </li>
                <li>
                    เพื่อความรวดเร็วในการเข้ารับการตรวจสภาพรถ ท่านสามารถตรวจเช็ครถของท่านตาม<a href="#" class=" text-blue-600 dark:text-blue-500 hover:underline">แบบฟอร์มการตรวจเช็ครถเบื้องต้น</a>ก่อนเข้ารับบริการได้
                </li>
            </ul>
        </div>
    </GuestLayout>
</template>
