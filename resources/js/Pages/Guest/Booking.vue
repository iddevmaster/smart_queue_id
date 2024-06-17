<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import { Head } from "@inertiajs/vue3";
import BookingCard from "@/Components/BookingCard.vue";

</script>

<template>
    <GuestLayout>
        <Head title="Service 1" />

        <BookingCard />

        <div class="w-full mt-6 px-6 py-4 overflow-hidden text-sm md:text-md">
            <p>สิ่งที่ต้องเตรียมในการเข้ารับการตรวจสภาพรถ</p>
            <ul
                class="ms-4 space-y-1 text-gray-500 list-decimal list-inside dark:text-gray-400"
            >
                <li>รถที่ต้องการตรวจสภาพ</li>
                <li>
                    สมุดเล่มทะเบียนรถ
                    หากไม่มีเล่มทะเบียนรถตัวจริงสามารถใช้สำเนาแทนได้
                </li>
                <li>
                    เพื่อความรวดเร็วในการเข้ารับการตรวจสภาพรถ
                    ท่านสามารถตรวจเช็ครถของท่านตาม<a
                        href="/"
                        class="text-blue-600 dark:text-blue-500 hover:underline"
                        >แบบฟอร์มการตรวจเช็ครถเบื้องต้น</a
                    >ก่อนเข้ารับบริการได้
                </li>
            </ul>
        </div>
    </GuestLayout>
</template>
