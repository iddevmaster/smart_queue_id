<script setup>
import { Head } from "@inertiajs/vue3";
import { ref, onMounted, onBeforeUnmount } from 'vue'

const ad_img = [
    "/images/ads/ad1.jpg" ,
    "/images/ads/ad2.jpg" ,
    "/images/ads/ad3.jpg" ,
    "/images/ads/ad4.jpg" ,
]

const currentDate = new Date();
const result = currentDate.toLocaleDateString('th-TH', {
  year: 'numeric',
  month: 'long',
  day: 'numeric',
  weekday: 'long',
})

const interval = ref(null)
const time = ref(null)

onMounted(() => {
  interval.value = setInterval(() => {
    time.value = new Date().toLocaleTimeString('th-TH', {
      hour: 'numeric',
      minute: 'numeric',
      second: 'numeric'
    })
  }, 1000)
})

onBeforeUnmount(() => {
  clearInterval(interval.value)
})
</script>

<template>
    <Head title="Queue Display" />
    <div class="min-h-screen bodybg h-100">
        <main class="flex p-2 sm:p-4 justify-center">
            <div class=" p-6 flex-1 rounded-xl m-6 hidden xl:block">
                <header class="text-center mb-6">
                    <h1 class="xl:text-5xl lg:text-4xl md:text-3xl text-xl text-white font-bold">ศูนย์ตรอ.ไอดี สาขาศรีจันทร์</h1>
                </header>
                <div id="default-carousel" class="relative w-full flex justify-center" data-carousel="slide">
                    <!-- Carousel wrapper -->
                    <div class="relative overflow-hidden rounded-lg carousel-wrapper">
                        <!-- Carousel Item -->
                        <div v-for="imgUrl in ad_img" class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img :src="imgUrl" class="absolute block w-full" alt="...">
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap xl:flex-nowrap h-full justify-center">
                <div class="bg-gray-400 rounded-xl my-6 w-full xl:w-fit">
                    <header class="text-center py-3 bg-green-400 rounded-t-xl">
                        <h1 class="text-4xl text-white font-bold">คิว - เข้ารับบริการ</h1>
                    </header>
                    <section class="flex flex-col justify-center items-center gap-y-4 p-4">
                        <div class="bg-white grid grid-cols-1 sm:grid-cols-2 p-3 rounded-lg">
                            <div class="bg-sky-500 flex flex-col justify-center pb-2 px-4 rounded-xl overflow-hidden self-center justify-self-center border-black border-4 tabien">
                                <div class="flex justify-center md:text-7xl sm:text-6xl text-4xl tabien-text gap-x-4">
                                    <p>ทส</p>
                                    <p>1234</p>
                                </div>
                                <p class="text-center font-bold tabien-text">ศูนย์ตรอ.ไอดี - SIT</p>
                            </div>
                            <div class="p-2 text-center">
                                <h2 class="text-xl sm:text-4xl font-bold">ตรวจสภาพรถ</h2>
                                <p class="sm:text-xl text-md font-bold">เวลานัด  10:00 - 11:00</p>
                            </div>
                        </div>

                        <div class="bg-white grid grid-cols-1 sm:grid-cols-2 p-3 rounded-lg">
                            <div class="bg-sky-500 flex flex-col justify-center pb-2 px-4 rounded-xl overflow-hidden self-center justify-self-center border-black border-4 tabien">
                                <div class="flex justify-center md:text-7xl sm:text-6xl text-4xl tabien-text gap-x-4">
                                    <p>ทส</p>
                                    <p>1234</p>
                                </div>
                                <p class="text-center font-bold tabien-text">ศูนย์ตรอ.ไอดี - SIT</p>
                            </div>
                            <div class="p-2 text-center">
                                <h2 class="text-xl sm:text-4xl font-bold">ตรวจสภาพรถ</h2>
                                <p class="sm:text-xl text-md font-bold">เวลานัด  10:00 - 11:00</p>
                            </div>
                        </div>
                    </section>
                </div>
                <div class=" rounded-xl my-6 mx-4 w-full xl:w-fit">
                    <div>
                        <div class="bg-white py-4 rounded-lg text-center">
                            <h3 class="text-xl font-bold">{{ result }}</h3>
                        </div>
                        <div class="bg-white py-3 rounded-lg text-center my-2 flex justify-center items-center">
                            <h3 class="text-4xl font-bold">{{ time }}</h3>
                            <svg class="w-8 h-8 ms-2 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                            </svg>
                        </div>
                        <div class="bg-gray-700 rounded-lg text-center h-full">
                            <header class="text-center py-3 rounded-t-lg bg-gray-300">
                                <h1 class="text-xl font-bold">คิว - รอเข้ารับบริการ</h1>
                            </header>
                            <section class="flex flex-col justify-center items-center p-2">
                                <div class="bg-white grid grid-cols-12 gap-x-2 rounded-lg p-2 my-2">
                                    <div class="bg-sky-500 col-span-5 flex flex-col justify-center pb-2 px-2 rounded-xl overflow-hidden self-center justify-self-center border-black border-2 tabien">
                                        <div class="flex justify-center text-xl tabien-text gap-x-2">
                                            <p>ทส</p>
                                            <p>1234</p>
                                        </div>
                                        <p class="text-center font-bold text-sm tabien-text">ศูนย์ตรอ.ไอดี - SIT</p>
                                    </div>
                                    <div class="text-center col-span-7">
                                        <h2 class="text-xl font-bold">ตรวจสภาพรถ</h2>
                                        <p class="text-md font-bold">เวลานัด  10:00 - 11:00</p>
                                    </div>
                                </div>

                                <div class="bg-white grid grid-cols-12 gap-x-2 rounded-lg p-2 my-2">
                                    <div class="bg-sky-500 col-span-5 flex flex-col justify-center pb-2 px-2 rounded-xl overflow-hidden self-center justify-self-center border-black border-2 tabien">
                                        <div class="flex justify-center text-xl tabien-text gap-x-2">
                                            <p>ทส</p>
                                            <p>1234</p>
                                        </div>
                                        <p class="text-center font-bold text-sm tabien-text">ศูนย์ตรอ.ไอดี - SIT</p>
                                    </div>
                                    <div class="text-center col-span-7">
                                        <h2 class="text-xl font-bold">ตรวจสภาพรถ</h2>
                                        <p class="text-md font-bold">เวลานัด  10:00 - 11:00</p>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</template>

<style scoped>
    .bodybg {
        background-image: url('/images/tabien-background.jpg');
        background-size: cover;
        background-position: center;
    }

    .carousel-wrapper{
        min-width: 600px;
        max-height: 100vh;
        width: 80%;
    }

    @media only screen and (min-width: 600px) {
        .carousel-wrapper{
            height: 700px;
        }
    }

    @media only screen and (max-width: 595px) {
        .carousel-wrapper{
            height: 350px;
        }
    }
</style>
