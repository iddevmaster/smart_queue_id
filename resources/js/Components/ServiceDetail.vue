<script setup>
import QueueDetail from "./QueueDetail.vue";
import { Link } from "@inertiajs/vue3";

const props = defineProps({
    queue: {
        type: [Array],
        required: true,
    },
});
</script>

<template>
    <div class="flex justify-center">
        <div
            class="relative mt-6 md:p-4 p-2 bg-white shadow-md overflow-hidden rounded-xl"
        >
            <div
                class="absolute inline-flex items-center justify-center font-bold text-white bg-green-500 border-2 border-white rounded-ee-2xl p-1 md:p-2 px-2 text-xs -top-1 -start-1 dark:border-gray-900"
            >
                ชำระเงินแล้ว
            </div>
            <div class="grid grid-cols-2">
                <div
                    class="bg-sky-500 flex flex-col justify-center gap-y-2 pb-2 px-4 rounded-xl overflow-hidden self-center justify-self-center border-black border-4 tabien"
                >
                    <div
                        class="flex justify-center md:text-7xl sm:text-6xl text-4xl tabien-text gap-x-4"
                    >
                        <p>ทส</p>
                        <p>1234</p>
                    </div>
                    <p class="text-center font-bold tabien-text">
                        ศูนย์ตรอ.ไอดี - SIT
                    </p>
                </div>
                <div class="md:px-4 px-2">
                    <h2 class="md:text-2xl font-bold">บริการตรวจสภาพรถ</h2>
                    <div class="flex gap-x-2">
                        <svg
                            class="w-5 h-5 text-gray-800 dark:text-white"
                            aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            fill="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M11.906 1.994a8.002 8.002 0 0 1 8.09 8.421 7.996 7.996 0 0 1-1.297 3.957.996.996 0 0 1-.133.204l-.108.129c-.178.243-.37.477-.573.699l-5.112 6.224a1 1 0 0 1-1.545 0L5.982 15.26l-.002-.002a18.146 18.146 0 0 1-.309-.38l-.133-.163a.999.999 0 0 1-.13-.202 7.995 7.995 0 0 1 6.498-12.518ZM15 9.997a3 3 0 1 1-5.999 0 3 3 0 0 1 5.999 0Z"
                                clip-rule="evenodd"
                            />
                        </svg>
                        <p class="text-xs md:text-md">
                            ศูนย์ตรอ.ไอดี สาขาศรีจันทร์
                        </p>
                    </div>
                    <div class="flex gap-x-2">
                        <svg
                            class="w-5 h-5 text-gray-800 dark:text-white"
                            aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            fill="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z"
                                clip-rule="evenodd"
                            />
                        </svg>
                        <p class="text-xs md:text-md">นายXXXX XXXXXXXX</p>
                    </div>
                    <div class="flex gap-x-2">
                        <svg
                            class="w-5 h-5 text-gray-800 dark:text-white"
                            aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            fill="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                d="M7.978 4a2.553 2.553 0 0 0-1.926.877C4.233 6.7 3.699 8.751 4.153 10.814c.44 1.995 1.778 3.893 3.456 5.572 1.68 1.679 3.577 3.018 5.57 3.459 2.062.456 4.115-.073 5.94-1.885a2.556 2.556 0 0 0 .001-3.861l-1.21-1.21a2.689 2.689 0 0 0-3.802 0l-.617.618a.806.806 0 0 1-1.14 0l-1.854-1.855a.807.807 0 0 1 0-1.14l.618-.62a2.692 2.692 0 0 0 0-3.803l-1.21-1.211A2.555 2.555 0 0 0 7.978 4Z"
                            />
                        </svg>
                        <p class="text-xs md:text-md">098-XXX-XXXX</p>
                    </div>
                    <div v-if="queue.status">
                        <div class="flex gap-x-2">
                            <svg
                                class="w-5 h-5 text-gray-800 dark:text-white"
                                aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                fill="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M5 5a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1 2 2 0 0 1 2 2v1a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V7a2 2 0 0 1 2-2ZM3 19v-7a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Zm6.01-6a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm-10 4a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                            <p class="text-xs md:text-md">วันที่ 12 มีนาคม 2567</p>
                        </div>
                        <div class="flex gap-x-2">
                            <svg
                                class="w-5 h-5 text-gray-800 dark:text-white"
                                aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                fill="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                            <p class="text-xs md:text-md">
                                ช่วงเวลา 11:00 - 12:00
                            </p>
                        </div>
                    </div>
                    <div v-else class="flex relative">
                        <div v-if="queue.status == 0" class="text-white animate-flash bg-orange-500 text-sm px-5 py-1 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                            ยังไม่ได้จองคิว
                        </div>
                    </div>
                </div>
            </div>
            <div class="inline-flex items-center justify-center w-full">
                <hr
                    class="w-full h-px my-6 bg-gray-400 border-0 dark:bg-gray-700"
                />
                <span
                    class="absolute px-3 font-medium text-gray-900 -translate-x-1/2 bg-white left-1/2 dark:text-white dark:bg-gray-900"
                    >ข้อมูลคิว</span
                >
            </div>

            <QueueDetail v-if="queue.status" />

            <div v-else class="mb-2">
                <p class="text-xs text-center text-yellow-700">
                    คุณยังไม่ได้จองคิวสำหรับบริการนี้
                    กรุณาจองคิวเพื่อความสะดวกในการเข้ารับบริการ
                </p>
                <div class="flex justify-center my-4">
                    <Link
                        :href="route('booking')"
                        class="focus:outline-none text-white bg-green-500 hover:bg-green-600 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-6 py-2.5 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
                    >
                        จองคิว
                    </Link>
                </div>
            </div>

            <div class="flex justify-between mb-2">
                <p class="text-xs mt-1">รับคิวเมื่อ 10/03/2567 10:27:30</p>
                <div class="flex gap-1">
                    <button
                        type="button"
                        class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-xs px-2 py-1 dark:bg-blue-600 dark:hover:bg-blue-700"
                    >
                        ไปที่หน้าจอคิว
                    </button>
                    <button
                        type="button"
                        class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 font-medium rounded-lg text-xs px-2 py-1 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900"
                        :class="{ 'hidden': !queue.status }"
                    >
                        ขอเลื่อนคิว
                    </button>
                    <button
                        type="button"
                        class="focus:outline-none text-white bg-red-700 hover:bg-red-800 font-medium rounded-lg text-xs px-2 py-1 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"
                        :class="{ 'hidden': !queue.status }"
                    >
                        ขอยกเลิกคิว
                    </button>
                </div>
            </div>
            <p class="text-xs text-center text-yellow-500">***กรณีท่านไม่อยู่รับบริการในช่วงเรียกคิว ศูนย์ตรอ.ไอดี ขอสงวนสิทธิ์ในการข้ามคิวของท่าน***</p>
            <p class="text-xs text-center text-yellow-500">***หากคิวถูกยกเลิก ท่านสามารถติดต่อเจ้าหน้าที่เพื่อขอจองคิวใหม่***</p>
        </div>
    </div>
</template>

<style scoped>
.tabien {
    background-image: url("/images/tabien-background.jpg");
    background-size: cover;
    background-position: center;
}
</style>
