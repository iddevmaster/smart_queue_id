<script setup>
import Authenbackend from "@/Layouts/Authenbackend.vue";
import { Head } from "@inertiajs/vue3";
</script>

<template>
  <Head title="Dashboard" />
  <Authenbackend>
    <div class="container mx-auto p-4 crdfr">
      <div class="grid grid-cols-4 gap-4">
        <div class="col-span-3">
          <h1 class="text-3xl font-bold pl-5">ข้อมูลสาขา</h1>
        </div>

        <div style="padding-right: 1.2rem; text-align: -webkit-right">
          <svg class="w-[37px] h-[37px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M21 13v-2a1 1 0 0 0-1-1h-.757l-.707-1.707.535-.536a1 1 0 0 0 0-1.414l-1.414-1.414a1 1 0 0 0-1.414 0l-.536.535L14 4.757V4a1 1 0 0 0-1-1h-2a1 1 0 0 0-1 1v.757l-1.707.707-.536-.535a1 1 0 0 0-1.414 0L4.929 6.343a1 1 0 0 0 0 1.414l.536.536L4.757 10H4a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h.757l.707 1.707-.535.536a1 1 0 0 0 0 1.414l1.414 1.414a1 1 0 0 0 1.414 0l.536-.535 1.707.707V20a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-.757l1.707-.708.536.536a1 1 0 0 0 1.414 0l1.414-1.414a1 1 0 0 0 0-1.414l-.535-.536.707-1.707H20a1 1 0 0 0 1-1Z"/>
  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
</svg>

        </div>
      </div>

      <div class="grid gap-1 md:grid-cols-6 sm:grid-cols-6 xl:grid-cols-6">
        <div class="col-span-4 lg:col-span-2" style="padding: 1.2rem">
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
        <div class="col-span-4 sm:col-span-4" style="padding: 1.2rem">
          <div>
            <a href="#">
              <h5
                class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"
              >
                ศูนย์ตรอ.ไอดี สาขาศรีจันทร์
              </h5>
            </a>

            <p class="mb-3 font-bold text-gray-700 dark:text-gray-400">
              ตรวจสภาพรถยนต์ รถจักรยานยนต์ พรบ. ปร
            </p>

            <a
              href="#"
              class="flex items-center p-3 text-base font-normal text-gray-900 rounded-lg hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white"
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
                  d="M12 15a6 6 0 1 0 0-12 6 6 0 0 0 0 12Zm0 0v6M9.5 9A2.5 2.5 0 0 1 12 6.5"
                />
              </svg>

              <span class="flex-1 ms-3 whitespace-nowrap text-lg">
                29/11 หมู่ 4 ถนนศรีจันทร์ ตำบลในเมือง อำเภอเมือง จังหวัดขอนแก่น
                40000 </span
              >
            </a>

            <a
              href="#"
              class="flex items-center p-3 text-base font-normal text-gray-900 rounded-lg hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white"
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
              class="flex items-center p-3 text-base font-normal text-gray-900 rounded-lg hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white"
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
              class="flex items-center p-3 text-base font-normal text-gray-900 rounded-lg hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white"
            >
              <span class="flex-1 ms-3 whitespace-nowrap text-sm">
                - จองล่วงหน้าสูงสุด 30 วัน</span
              >
              <span class="flex-1 ms-3 whitespace-nowrap text-sm">
                - ยกเลิกล่วงหน้าขั้นต่ำ 1 วัน</span
              >
            </a>
          </div>
        </div>
      </div>
    </div>

    <br />

   
    <div class="container mx-auto p-4 crdfr">
      <div class="grid grid-cols-4 gap-4">
        <div class="col-span-3">
          <h1 class="text-3xl font-bold pl-5">ข้อมูลบริการ</h1>
        </div>

        <div style="padding-right: 1.2rem; text-align: -webkit-right">
      
          <button type="button" class="px-3 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
       +

เพิ่มบริการ
</button>
        </div>
      </div>

      <div class="grid gap-1 md:grid-cols-6 sm:grid-cols-6 xl:grid-cols-6" style="
    padding: 20px;
">
        <div class="col-span-4 lg:col-span-2" >
          <div
            class="card w-full max-w-md bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700"
          >
            <div class="px-6 pb-6 pt-6 as">
              <a href="#">
                <h5
                  class="text-2xl font-semibold tracking-tight text-gray-900 dark:text-white"
                  style="text-align: center"
                >
                  ตรวจสภาพรถยนต์
                </h5>
              </a>
              <div class="flex items-center mt-2.5 mb-2">
                <div
                  class="flex items-center space-x-1 rtl:space-x-reverse"
                ></div>
              </div>
              <div class="flex items-center justify-between">
                <span class="font-bold text-gray-900 dark:text-white"
                  >วันทำการ:
                </span>
                <span class="font-normal text-gray-900 dark:text-white">
                  จ อ พ พฤ ศ</span
                >
              </div>
              <div class="flex items-center justify-between">
                <span class="font-bold text-gray-900 dark:text-white"
                  >เวลาทำการ:
                </span>
                <span class="font-normal text-gray-900 dark:text-white">
                  08:00 ถึง 18:00</span
                >
              </div>
              <div class="flex items-center justify-between">
                <span class="font-bold text-gray-900 dark:text-white"
                  >เวลาพักกลางวัน:
                </span>
                <span class="font-normal text-gray-900 dark:text-white">
                  12:00 ถึง 13:00</span
                >
              </div>
              <div class="flex items-center justify-between">
                <span class="font-bold text-gray-900 dark:text-white"
                  >จำนวนคิว / วัน:
                </span>
                <span class="font-normal text-gray-900 dark:text-white">
                  45 คิว</span
                >
              </div>
              <div class="flex items-center justify-between">
                <span class="font-bold text-gray-900 dark:text-white"
                  >เวลา / คิว :
                </span>
                <span class="font-normal text-gray-900 dark:text-white">
                  20 นาท</span
                >
              </div>
             
            </div>
            <div class="card-hover">
            <p class="text-lg" style="color: white;font-size: 24px;">ตั้งค่าบริการ</p>
        </div>
          </div>
        </div>

      

        <div class="col-span-4 lg:col-span-2" >
          <div
            class="card w-full max-w-md bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700"
          >
            <div class="px-6 pb-6 pt-6 as">
              <a href="#">
                <h5
                  class="text-2xl font-semibold tracking-tight text-gray-900 dark:text-white"
                  style="text-align: center"
                >
                  ตรวจสภาพรถยนต์
                </h5>
              </a>
              <div class="flex items-center mt-2.5 mb-2">
                <div
                  class="flex items-center space-x-1 rtl:space-x-reverse"
                ></div>
              </div>
              <div class="flex items-center justify-between">
                <span class="font-bold text-gray-900 dark:text-white"
                  >วันทำการ:
                </span>
                <span class="font-normal text-gray-900 dark:text-white">
                  จ อ พ พฤ ศ</span
                >
              </div>
              <div class="flex items-center justify-between">
                <span class="font-bold text-gray-900 dark:text-white"
                  >เวลาทำการ:
                </span>
                <span class="font-normal text-gray-900 dark:text-white">
                  08:00 ถึง 18:00</span
                >
              </div>
              <div class="flex items-center justify-between">
                <span class="font-bold text-gray-900 dark:text-white"
                  >เวลาพักกลางวัน:
                </span>
                <span class="font-normal text-gray-900 dark:text-white">
                  12:00 ถึง 13:00</span
                >
              </div>
              <div class="flex items-center justify-between">
                <span class="font-bold text-gray-900 dark:text-white"
                  >จำนวนคิว / วัน:
                </span>
                <span class="font-normal text-gray-900 dark:text-white">
                  45 คิว</span
                >
              </div>
              <div class="flex items-center justify-between">
                <span class="font-bold text-gray-900 dark:text-white"
                  >เวลา / คิว :
                </span>
                <span class="font-normal text-gray-900 dark:text-white">
                  20 นาท</span
                >
              </div>
             
            </div>
            <div class="card-hover">
            <p class="text-lg" style="color: white;font-size: 24px;">ตั้งค่าบริการ</p>
        </div>
          </div>
        </div>

        <div class="col-span-4 lg:col-span-2" >
          <div
            class="card w-full max-w-md bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700"
          >
            <div class="px-6 pb-6 pt-6 as">
              <a href="#">
                <h5
                  class="text-2xl font-semibold tracking-tight text-gray-900 dark:text-white"
                  style="text-align: center"
                >
                  ตรวจสภาพรถยนต์
                </h5>
              </a>
              <div class="flex items-center mt-2.5 mb-2">
                <div
                  class="flex items-center space-x-1 rtl:space-x-reverse"
                ></div>
              </div>
              <div class="flex items-center justify-between">
                <span class="font-bold text-gray-900 dark:text-white"
                  >วันทำการ:
                </span>
                <span class="font-normal text-gray-900 dark:text-white">
                  จ อ พ พฤ ศ</span
                >
              </div>
              <div class="flex items-center justify-between">
                <span class="font-bold text-gray-900 dark:text-white"
                  >เวลาทำการ:
                </span>
                <span class="font-normal text-gray-900 dark:text-white">
                  08:00 ถึง 18:00</span
                >
              </div>
              <div class="flex items-center justify-between">
                <span class="font-bold text-gray-900 dark:text-white"
                  >เวลาพักกลางวัน:
                </span>
                <span class="font-normal text-gray-900 dark:text-white">
                  12:00 ถึง 13:00</span
                >
              </div>
              <div class="flex items-center justify-between">
                <span class="font-bold text-gray-900 dark:text-white"
                  >จำนวนคิว / วัน:
                </span>
                <span class="font-normal text-gray-900 dark:text-white">
                  45 คิว</span
                >
              </div>
              <div class="flex items-center justify-between">
                <span class="font-bold text-gray-900 dark:text-white"
                  >เวลา / คิว :
                </span>
                <span class="font-normal text-gray-900 dark:text-white">
                  20 นาท</span
                >
              </div>
             
            </div>
            <div class="card-hover">
            <p class="text-lg" style="color: white;font-size: 24px;">ตั้งค่าบริการ</p>
        </div>
          </div>
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
  border: 1px solid rgba(0, 0, 0, 0.125);
  border-radius: 0.25rem;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

.text-lg {
  font-size: 0.9rem; /* Default font size */
}

/* Media query for smaller screens */
@media (max-width: 768px) {
  .text-lg {
    font-size: 1.2rem; /* Adjust font size for smaller screens */
  }

  .text-sm {
    font-size: 0.7rem; /* Adjust font size for smaller screens */
  }
}

/* Media query for even smaller screens */
@media (max-width: 576px) {
  .text-lg {
    font-size: 0.6rem; /* Adjust font size for even smaller screens */
  }

  .text-sm {
    font-size: 0.7rem; /* Adjust font size for smaller screens */
  }

  .branch-dd {
    padding: 1px;
  }
}

.card {
            position: relative;
         
         
            color: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card-content {
            padding: 20px;
            text-align: center;
            z-index: 1;
        }

        .card-hover {
            position: absolute;
            top: 100%;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            color: white;
            padding: 20px;
            box-sizing: border-box;
            transition: top 0.3s;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            opacity: 0;
        }

        .card:hover .card-hover {
            top: 0;
            opacity: 1;
            
        }

        .as:hover {
       filter:blur(2px) brightness(60%);
        }

</style>
