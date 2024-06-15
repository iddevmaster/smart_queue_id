<script setup>
import { Link } from "@inertiajs/vue3";

const time_slots = [
    {
        id: 1,
        slot_time: "08:00 - 09:00",
        status: 0, // Status 0 = เต็ม ; status 1 = ว่าง
    },
    {
        id: 2,
        slot_time: "09:00 - 10:00",
        status: 1, // Status 0 = เต็ม ; status 1 = ว่าง
    },
    {
        id: 3,
        slot_time: "10:00 - 11:00",
        status: 1, // Status 0 = เต็ม ; status 1 = ว่าง
    },
];
</script>

<template>
    <div class="flex justify-center">
        <div
            class="w-full mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg"
        >
            <div class="text-center mb-4">
                <p class="text-xl font-bold">จองคิว</p>
            </div>
            <div>
                <form>
                    <div class="mb-4">
                        <label
                            for="queue_date"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                            >วันที่ต้องการจองคิว</label
                        >
                        <input
                            type="date"
                            id="queue_date"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required
                        />
                    </div>
                    <div class="mb-4">
                        <p
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                        >
                            เวลาที่ต้องการจองคิว
                        </p>
                        <ul
                            class="grid w-full gap-2 sm:grid-cols-2 md:grid-cols-3"
                        >
                            <li v-for="slot in time_slots">
                                <input
                                    type="radio"
                                    :disabled="!slot.status"
                                    :id="'slot' + slot.id"
                                    name="selectSlot"
                                    :value="slot.id"
                                    class="hidden peer"
                                />
                                <label
                                    :for="'slot' + slot.id"
                                    class="inline-flex items-center justify-between w-full p-2 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:bg-blue-600 peer-checked:text-white dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700"
                                    :class="{
                                        'border-red-500 text-red-500':
                                            !slot.status,
                                        'border-green-500 text-green-500 hover:text-gray-600 hover:bg-gray-100':
                                            slot.status,
                                    }"
                                >
                                    <div class="block">
                                        <div class="w-full font-semibold">
                                            {{ slot.slot_time }}
                                        </div>
                                    </div>
                                    <p v-if="slot.status">ว่าง</p>
                                    <p v-else>เต็ม</p>
                                </label>
                            </li>
                        </ul>
                    </div>

                    <div class="flex items-center justify-between mt-4">
                        <Link
                            href=""
                            class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"
                        >
                            ยกเลิก
                        </Link>
                        <Link
                            href=""
                            class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
                        >
                            บันทึก
                        </Link>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>
