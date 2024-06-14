<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";
import '../../../css/services.css';

</script>

<template>
    <GuestLayout>
        <Head title="Search Service" />

        <h1 class="text-center text-2xl font-bold">บริการที่ท่านลงทะเบียนไว้</h1>

        <!-- จองคิวแล้ว -->
        <div class="transition ease-in-out hover:-translate-y-1 hover:scale-105 duration-300 relative mt-6 md:px-6 px-2 py-4 bg-white shadow-md overflow-hidden rounded-xl" >
            <div class="absolute inline-flex items-center justify-center  font-bold text-white bg-green-500 border-2 border-white rounded-es-2xl p-1 md:p-2 px-2 text-xs -top-1 -end-1 dark:border-gray-900">ชำระเงินแล้ว</div>
            <div class="grid grid-cols-2">
                <div class="bg-sky-500 flex flex-col justify-center gap-y-2 pb-2 w-full h-full rounded-xl overflow-hidden self-center justify-self-center border-black border-4" id="tabien">
                    <div class="flex justify-center md:text-7xl sm:text-6xl text-4xl tabien-text gap-x-4">
                        <p>ทส</p>
                        <p>1234</p>
                    </div>
                    <p class="text-center font-bold tabien-text">ศูนย์ตรอ.ไอดี - SIT</p>
                </div>
                <div class="md:p-4 p-2">
                    <h2 class="md:text-2xl font-bold">บริการตรวจสภาพรถ</h2>
                    <div class="flex gap-x-2">
                        <svg class="w-5 h-5 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M11.906 1.994a8.002 8.002 0 0 1 8.09 8.421 7.996 7.996 0 0 1-1.297 3.957.996.996 0 0 1-.133.204l-.108.129c-.178.243-.37.477-.573.699l-5.112 6.224a1 1 0 0 1-1.545 0L5.982 15.26l-.002-.002a18.146 18.146 0 0 1-.309-.38l-.133-.163a.999.999 0 0 1-.13-.202 7.995 7.995 0 0 1 6.498-12.518ZM15 9.997a3 3 0 1 1-5.999 0 3 3 0 0 1 5.999 0Z" clip-rule="evenodd"/>
                        </svg>
                        <p class="text-xs md:text-md">ศูนย์ตรอ.ไอดี สาขาศรีจันทร์</p>
                    </div>
                    <div class="flex gap-x-2">
                        <svg class="w-5 h-5 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z" clip-rule="evenodd"/>
                        </svg>
                        <p class="text-xs md:text-md">นายXXXX XXXXXXXX</p>
                    </div>
                    <div class="flex gap-x-2">
                        <svg class="w-5 h-5 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M7.978 4a2.553 2.553 0 0 0-1.926.877C4.233 6.7 3.699 8.751 4.153 10.814c.44 1.995 1.778 3.893 3.456 5.572 1.68 1.679 3.577 3.018 5.57 3.459 2.062.456 4.115-.073 5.94-1.885a2.556 2.556 0 0 0 .001-3.861l-1.21-1.21a2.689 2.689 0 0 0-3.802 0l-.617.618a.806.806 0 0 1-1.14 0l-1.854-1.855a.807.807 0 0 1 0-1.14l.618-.62a2.692 2.692 0 0 0 0-3.803l-1.21-1.211A2.555 2.555 0 0 0 7.978 4Z"/>
                        </svg>
                        <p class="text-xs md:text-md">098-XXX-XXXX</p>
                    </div>
                    <!-- <div class="flex gap-x-2">
                        <svg class="w-5 h-5 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M5 5a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1 2 2 0 0 1 2 2v1a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V7a2 2 0 0 1 2-2ZM3 19v-7a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Zm6.01-6a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm-10 4a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Z" clip-rule="evenodd"/>
                        </svg>
                        <p>วันที่ 12 มีนาคม 2567</p>
                    </div>
                    <div class="flex gap-x-2">
                        <svg class="w-5 h-5 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z" clip-rule="evenodd"/>
                        </svg>
                        <p>ช่วงเวลา  11:00 - 12:00  (คิวที่ 2)</p>
                    </div> -->
                </div>
            </div>
        </div>

        <!-- ยังไม่ได้จองคิว -->
        <div class="transition ease-in-out hover:-translate-y-1 hover:scale-105 duration-300 relative mt-6 md:px-6 px-2 py-4 bg-red-200 shadow-md overflow-hidden rounded-xl" >
            <div class="absolute inline-flex items-center justify-center  font-bold text-white bg-green-500 border-2 border-white rounded-es-2xl p-1 md:p-2 px-2 text-xs -top-1 -end-1 dark:border-gray-900">ชำระเงินแล้ว</div>
            <div class="grid grid-cols-2">
                <div class="bg-sky-500 flex flex-col justify-center gap-y-2 pb-2 w-full h-full rounded-xl overflow-hidden self-center justify-self-center border-black border-4" id="tabien">
                    <div class="flex justify-center md:text-7xl sm:text-6xl text-4xl tabien-text gap-x-4">
                        <p>ทส</p>
                        <p>1234</p>
                    </div>
                    <p class="text-center font-bold tabien-text">ศูนย์ตรอ.ไอดี - SIT</p>
                </div>
                <div class="md:p-4 p-2">
                    <h2 class="md:text-2xl font-bold">บริการตรวจสภาพรถ</h2>
                    <div class="flex gap-x-2">
                        <svg class="w-5 h-5 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M11.906 1.994a8.002 8.002 0 0 1 8.09 8.421 7.996 7.996 0 0 1-1.297 3.957.996.996 0 0 1-.133.204l-.108.129c-.178.243-.37.477-.573.699l-5.112 6.224a1 1 0 0 1-1.545 0L5.982 15.26l-.002-.002a18.146 18.146 0 0 1-.309-.38l-.133-.163a.999.999 0 0 1-.13-.202 7.995 7.995 0 0 1 6.498-12.518ZM15 9.997a3 3 0 1 1-5.999 0 3 3 0 0 1 5.999 0Z" clip-rule="evenodd"/>
                        </svg>
                        <p class="text-xs md:text-md">ศูนย์ตรอ.ไอดี สาขาศรีจันทร์</p>
                    </div>
                    <div class="flex gap-x-2">
                        <svg class="w-5 h-5 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z" clip-rule="evenodd"/>
                        </svg>
                        <p class="text-xs md:text-md">นายXXXX XXXXXXXX</p>
                    </div>
                    <div class="flex gap-x-2">
                        <svg class="w-5 h-5 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M7.978 4a2.553 2.553 0 0 0-1.926.877C4.233 6.7 3.699 8.751 4.153 10.814c.44 1.995 1.778 3.893 3.456 5.572 1.68 1.679 3.577 3.018 5.57 3.459 2.062.456 4.115-.073 5.94-1.885a2.556 2.556 0 0 0 .001-3.861l-1.21-1.21a2.689 2.689 0 0 0-3.802 0l-.617.618a.806.806 0 0 1-1.14 0l-1.854-1.855a.807.807 0 0 1 0-1.14l.618-.62a2.692 2.692 0 0 0 0-3.803l-1.21-1.211A2.555 2.555 0 0 0 7.978 4Z"/>
                        </svg>
                        <p class="text-xs md:text-md">098-XXX-XXXX</p>
                    </div>
                    <div class="flex relative">
                        <!-- <div class="animate-ping opacity-75 absolute bg-red-600 text-sm px-5 py-1 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                            ยังไม่ได้จองคิว
                        </div> -->
                        <!-- <div class="animate-ping absolute inline-flex h-full w-full rounded-full bg-sky-400 opacity-75"></div> -->
                        <div class="text-white animate-flash bg-red-600 text-sm px-5 py-1 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                            ยังไม่ได้จองคิว
                        </div>
                    </div>
                </div>
            </div>
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

<style scoped>
    #tabien {
        background-image: url('/images/tabien-background.jpg');
        background-size: cover;
        background-position: center;
        max-width: 340px;
        max-height: 150px;
    }
</style>
