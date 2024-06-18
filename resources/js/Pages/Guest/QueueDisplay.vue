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
    <div class="font-sans leading-normal tracking-normal min-h-screen bodybg">
        <div class="flex flex-col h-full">
            <!-- Header -->
            <!-- <div class=" text-white p-4">
                <h1 class="text-center text-4xl font-bold">ศูนย์ตรอ.ไอดี สาขาศรีจันทร์</h1>
            </div> -->

            <!-- Main Content -->
            <div class="flex flex-1 flex-wrap lg:flex-nowrap justify-center p-6">
                <!-- Left Column -->
                <div class="w-1/2 xl:m-4 m-2 rounded-md flex-col hidden lg:flex">
                    <div class=" text-white p-4 rounded-md mb-4 text-center">
                        <h2 class="text-5xl font-bold">ศูนย์ตรอ.ไอดี สาขาศรีจันทร์</h2>
                    </div>
                    <div class="text-center mb-4 flex-grow">
                        <div id="default-carousel" class="relative flex justify-center" data-carousel="slide">
                            <!-- Carousel wrapper -->
                            <div class="relative overflow-hidden rounded-lg carousel-wrapper">
                                <!-- Carousel Item -->
                                <div v-for="imgUrl in ad_img" class="hidden duration-700 ease-in-out" data-carousel-item>
                                    <img :src="imgUrl" class="absolute block w-full" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Center Column -->
                <div class="w-full sm:w-2/4 lg:w-1/3 bg-gray-300 xl:m-4 m-2 rounded-xl shadow-md">
                    <header class="text-center py-3 bg-green-500 rounded-t-xl">
                        <h1 class="text-4xl text-white font-bold">คิว - เข้ารับบริการ</h1>
                    </header>
                    <section class="flex flex-col justify-center items-center gap-y-4 py-4 px-2">
                        <div class="bg-white flex p-2 rounded-lg">
                            <div class="bg-sky-500 flex flex-col justify-center pb-2 px-4 rounded-xl overflow-hidden self-center justify-self-center border-black border-4 tabien">
                                <div class="flex justify-center xl:text-6xl md:text-5xl sm:text-4xl text-3xl tabien-text gap-x-4">
                                    <p>ทส</p>
                                    <p>1234</p>
                                </div>
                                <p class="text-center font-bold tabien-text">ศูนย์ตรอ.ไอดี - SIT</p>
                            </div>
                            <div class="p-2 text-center">
                                <h2 class="text-xl sm:text-xl xl:text-2xl font-bold">ตรวจสภาพรถ</h2>
                                <p class="xl:text-lg text-md font-bold">เวลานัด</p>
                                <p class="xl:text-lg text-md font-bold">10:00 - 11:00</p>
                            </div>
                        </div>

                        <div class="bg-white flex p-2 rounded-lg">
                            <div class="bg-sky-500 flex flex-col justify-center pb-2 px-4 rounded-xl overflow-hidden self-center justify-self-center border-black border-4 tabien">
                                <div class="flex justify-center xl:text-6xl md:text-5xl sm:text-4xl text-3xl tabien-text gap-x-4">
                                    <p>ทส</p>
                                    <p>1234</p>
                                </div>
                                <p class="text-center font-bold tabien-text">ศูนย์ตรอ.ไอดี - SIT</p>
                            </div>
                            <div class="p-2 text-center">
                                <h2 class="text-xl sm:text-xl xl:text-2xl font-bold">ตรวจสภาพรถ</h2>
                                <p class="xl:text-lg text-md font-bold">เวลานัด</p>
                                <p class="xl:text-lg text-md font-bold">10:00 - 11:00</p>
                            </div>
                        </div>
                    </section>
                </div>

                <!-- Right Column -->
                <div class="w-full sm:w-1/4 lg:w-1/6 xl:m-4 m-2 rounded-md shadow-md overflow-hidden">
                    <div class="bg-white py-4 px-1 rounded-lg text-center">
                        <h3 class="text-xl font-bold">{{ result }}</h3>
                    </div>
                    <div class="bg-white py-3 rounded-lg text-center my-4 flex justify-center items-center">
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
                            <div class="bg-white flex flex-wrap justify-center gap-2 rounded-lg p-2 my-2">
                                <div class="bg-sky-500 flex flex-col justify-center pb-2 px-2 rounded-xl overflow-hidden self-center justify-self-center border-black border-2 tabien">
                                    <div class="flex justify-center text-xl tabien-text gap-x-1">
                                        <p>ทส</p>
                                        <p>1234</p>
                                    </div>
                                    <p class="text-center font-bold text-xs tabien-text">ศูนย์ตรอ.ไอดี</p>
                                </div>
                                <div class="text-center">
                                    <h2 class="font-bold">ตรวจสภาพรถ</h2>
                                    <p class="text-xs">เวลานัด 10:00 - 11:00</p>
                                </div>
                            </div>

                            <div class="bg-white flex flex-wrap justify-center rounded-lg gap-2 p-2 my-2">
                                <div class="bg-sky-500 flex flex-col justify-center pb-2 px-2 rounded-xl overflow-hidden self-center justify-self-center border-black border-2 tabien">
                                    <div class="flex justify-center text-xl tabien-text gap-x-1">
                                        <p>ทส</p>
                                        <p>1234</p>
                                    </div>
                                    <p class="text-center font-bold text-xs tabien-text">ศูนย์ตรอ.ไอดี</p>
                                </div>
                                <div class="text-center">
                                    <h2 class="font-bold">ตรวจสภาพรถ</h2>
                                    <p class="text-xs">เวลานัด 10:00 - 11:00</p>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>

            <!-- Date and Time -->
            <!-- <div class="bg-white p-4">
                <div class="flex justify-between items-center">
                    <p class="text-gray-600">จันทร์ 12 มีนาคม 2567</p>
                    <p class="text-2xl font-bold text-blue-500">10:30:12 ⏰</p>
                </div>
            </div> -->
        </div>
    </div>
</template>

<style scoped>
    .bodybg {
        background-image: url('/images/tabien-background.jpg');
        background-size: cover;
        background-position: center;
    }

    .carousel-wrapper{
        min-width: 450px;
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
