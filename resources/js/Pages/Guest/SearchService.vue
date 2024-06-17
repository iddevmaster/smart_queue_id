<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";
import Checkbox from '@/Components/Checkbox.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import Dropdown from '@/Components/Dropdown.vue';
import provinces from '../../data/provinces.js';

defineProps({
    canResetPassword: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});

const form = useForm({
    phone: '',
    number_platef: '',
    number_plateb: '',
    province: '',
    remember: true,
});

const submit = () => {
    form.get('/search');
};

</script>

<template>
    <GuestLayout>
        <Head title="Search Service" />

        <div class="w-full mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg" >
            <div class="text-center mb-4">
                <p class="text-xl font-bold">ค้นหาบริการ</p>
                <p class="text-md">ค้นหาบริการที่ท่านลงทะเบียนไว้</p>
            </div>
            <div>
                <form @submit.prevent="submit">
                    <div>
                        <InputLabel for="phone" value="เบอร์โทรศัพท์" />

                        <TextInput
                            id="phone"
                            type="text"
                            class="mt-1 block w-full"
                            v-model="form.phone"
                            placeholder="เบอร์โทรศัพท์ที่ท่านลงทะเบียนไว้"
                            required
                            autofocus

                        />

                        <InputError class="mt-2" :message="form.errors.phone" />
                    </div>

                    <div class="mt-4">
                        <InputLabel for="number_plate" value="หมายเลขทะเบียนรถ" />

                        <div class="grid grid-cols-5">
                            <TextInput
                                id="number_platef"
                                type="text"
                                class="mt-1 block col-span-2"
                                v-model="form.number_platef"
                                placeholder="เลขหน้า"
                                maxlength="6"
                                required
                            />
                            <p class="mx-2 self-center text-center col-span-1">-</p>
                            <TextInput
                                id="number_plateb"
                                type="text"
                                class="mt-1 block col-span-2"
                                placeholder="เลขหลัง"
                                maxlength="6"
                                v-model="form.number_plateb"
                                required
                            />
                        </div>

                        <InputError class="mt-2" :message="form.errors.number_plate" />
                    </div>

                    <div class="mt-4">
                        <InputLabel for="Province" value="จังหวัด" />

                        <div class="relative mt-1.5">
                            <input
                            type="text"
                            list="ProvinceList"
                            id="Province"
                            class="w-full rounded-lg border-gray-300 pe-10 text-gray-700 sm:text-sm [&::-webkit-calendar-picker-indicator]:opacity-0"
                            placeholder="กรุณาเลือกจังหวัดบนป้ายทะเบียนรถของท่าน"
                            />

                            <span class="absolute inset-y-0 end-0 flex w-8 items-center">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                class="size-5 text-gray-500"
                            >
                                <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9"
                                />
                            </svg>
                            </span>
                        </div>

                        <datalist name="Province" id="ProvinceList">
                            <option v-for="province in provinces" :value="province.th">{{ province.en }}</option>
                        </datalist>
                    </div>

                    <div class="block mt-4">
                        <label class="flex items-center">
                            <Checkbox name="remember" v-model:checked="form.remember" disabled />
                            <span class="ms-2 text-sm text-gray-600">ฉันยอมรับ<a href="/search" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">ข้อกำหนดในการให้บริการ</a>และ<a href="/search" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">นโยบายความเป็นส่วนตัว</a></span>
                        </label>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <Link
                            class="text-center group w-full md:w-auto relative hover:bg-indigo-700 inline-flex items-center overflow-hidden rounded bg-indigo-600 px-8 py-3 text-white focus:outline-none focus:ring active:bg-indigo-500"
                            :href="route('services')"
                        >
                            <span class="absolute -start-full transition-all group-hover:start-4">
                                <svg
                                class="size-5 rtl:rotate-180"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                >
                                <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
                                </svg>
                            </span>
                            <span class="w-full text-sm font-medium transition-all group-hover:ms-4"> ค้นหา </span>
                        </Link>
                    </div>
                </form>
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
