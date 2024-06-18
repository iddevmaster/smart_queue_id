<script setup>
import Authenbackend from "@/Layouts/Authenbackend.vue";
import { Head } from "@inertiajs/vue3";
</script>

<template>
  <Head title="Dashboard" />
  <Authenbackend>
    <div
      class="container mx-auto p-4 crdfr" 
      
    >
      <h1 class="text-3xl font-bold mb-6">ข้อมูลสาขา</h1>
      <div class="grid gap-1  md:grid-cols-6 sm:grid-cols-12 xl:grid-cols-6">
        <div class="col-span-2">
          <div
            class="card bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700"
          >
            <a href="#">
              <img
                class="rounded-t-lg"
                src="https://flowbite.com/docs/images/blog/image-1.jpg"
                alt=""
              />
            </a>
          </div>
        </div>
        <!-- ... -->
        <div class="col-span-4">
          <div class="branch-dd">
            <a href="#">
              <h5
                class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"
              >
                ศูนย์ตรอ.ไอดี สาขาศรีจันทร์
              </h5>
            </a>

            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
              ตรวจสภาพรถยนต์ รถจักรยานยนต์ พรบ. ปร
            </p>

            <a
              href="#"
              class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white"
            >
            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15a6 6 0 1 0 0-12 6 6 0 0 0 0 12Zm0 0v6M9.5 9A2.5 2.5 0 0 1 12 6.5"/>
</svg>

              <span class="flex-1 ms-3 whitespace-nowrap text-lg">
                29/11 หมู่ 4 ถนนศรีจันทร์ ตำบลในเมือง อำเภอเมือง จังหวัดขอนแก่น
                40000 </span
              >
            </a>

            <a
              href="#"
              class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white"
            >
              <svg
                class="w-6 h-6 text-gray-800 dark:text-white"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                fill="none"
                viewBox="0 0 24 24"
              >
                <path
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M18.427 14.768 17.2 13.542a1.733 1.733 0 0 0-2.45 0l-.613.613a1.732 1.732 0 0 1-2.45 0l-1.838-1.84a1.735 1.735 0 0 1 0-2.452l.612-.613a1.735 1.735 0 0 0 0-2.452L9.237 5.572a1.6 1.6 0 0 0-2.45 0c-3.223 3.2-1.702 6.896 1.519 10.117 3.22 3.221 6.914 4.745 10.12 1.535a1.601 1.601 0 0 0 0-2.456Z"
                />
              </svg>

              <span class="flex-1 ms-3 whitespace-nowrap text-lg">
                (043) 223300, (043) 271600, (043) 223300 </span
              >
            </a>

            <a
              href="#"
              class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white"
            >
              <svg
                class="w-6 h-6 text-gray-800 dark:text-white"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                fill="currentColor"
                viewBox="0 0 24 24"
              >
                <path
                  fill-rule="evenodd"
                  d="M13.135 6H15V3h-1.865a4.147 4.147 0 0 0-4.142 4.142V9H7v3h2v9.938h3V12h2.021l.592-3H12V6.591A.6.6 0 0 1 12.592 6h.543Z"
                  clip-rule="evenodd"
                />
              </svg>

              <span class="flex-1 ms-3 whitespace-nowrap text-lg">
                ตรอ พรบ ต่อทะเบียน ศูนย์ตรอ.ไอดี สาขาศรีจันทร์ </span
              >

              
            </a>
       
       

              <a
              href="#"
              class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white"
            >
          

              <span class="flex-1 ms-3 whitespace-nowrap">
                - จองล่วงหน้าสูงสุด  30 วัน</span
              >
              <span class="flex-1 ms-3 whitespace-nowrap">
               - ยกเลิกล่วงหน้าขั้นต่ำ  1 วัน</span
              >

              
            </a>
              
          </div>
        </div>
      </div>
    </div>

    <div class="p-4 border-2 border-gray-200 dark:border-gray-700 mt-14">
      <div class="grid grid-cols-3 gap-4 mb-4">
        <div
          class="flex items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800"
        >
          <p class="text-2xl text-gray-400 dark:text-gray-500">
            <svg
              class="w-3.5 h-3.5"
              aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 18 18"
            >
              <path
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M9 1v16M1 9h16"
              />
            </svg>
          </p>
        </div>
        <div
          class="flex items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800"
        >
          <p class="text-2xl text-gray-400 dark:text-gray-500">
            <svg
              class="w-3.5 h-3.5"
              aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 18 18"
            >
              <path
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M9 1v16M1 9h16"
              />
            </svg>
          </p>
        </div>
        <div
          class="flex items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800"
        >
          <p class="text-2xl text-gray-400 dark:text-gray-500">
            <svg
              class="w-3.5 h-3.5"
              aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 18 18"
            >
              <path
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M9 1v16M1 9h16"
              />
            </svg>
          </p>
        </div>
      </div>
    </div>
  </Authenbackend>
</template>

<style scoped>

.branch-dd {
    padding: 20px;

}
.crdfr {
    border: 1px solid rgba(0, 0, 0, .125);
    border-radius: .25rem;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

.text-lg {
  font-size: 1.5rem; /* Default font size */
}

/* Media query for smaller screens */
@media (max-width: 768px) {
  .text-lg {
    font-size: 1.2rem; /* Adjust font size for smaller screens */
  }
}

/* Media query for even smaller screens */
@media (max-width: 576px) {
  .text-lg {
    font-size: 0.6rem; /* Adjust font size for even smaller screens */
  }

  .branch-dd {
    padding: 1px;

}
}
</style>
