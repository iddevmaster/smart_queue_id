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
    number_plate: '',
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
                            required
                            autofocus

                        />

                        <InputError class="mt-2" :message="form.errors.phone" />
                    </div>

                    <div class="mt-4">
                        <InputLabel for="number_plate" value="หมายเลขทะเบียนรถ" />

                        <div class="flex align-middle">
                            <TextInput
                                id="number_platef"
                                type="text"
                                class="mt-1 block w-full"
                                v-model="form.number_plate"
                                required
                            />
                            <p class="mx-2">-</p>
                            <TextInput
                                id="number_plateb"
                                type="text"
                                class="mt-1 block w-full"
                                v-model="form.number_plate"
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
                            <span class="ms-2 text-sm text-gray-600">ฉันยอมรับ<a href="/search" class="text-blue-600 underline ">ข้อกำหนดในการให้บริการ</a>และ<a href="/search" class="text-blue-600 underline ">นโยบายความเป็นส่วนตัว</a></span>
                        </label>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <!-- <Link
                            v-if="canResetPassword"
                            :href="route('password.request')"
                            class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        >
                            Forgot your password?
                        </Link> -->

                        <PrimaryButton class="ms-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                            Log in
                        </PrimaryButton>
                    </div>
                </form>
            </div>
        </div>
    </GuestLayout>
</template>
