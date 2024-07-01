

<template>
  <Head title="Dashboard" />
  <Authenbackend>



    <div class="container mx-auto p-4 crdfr">
      <hr class="hr-text" data-content="เพิ่มข้อมูลสาขา">
      <form @submit.prevent="submit">
      <div class="grid gap-1 md:grid-cols-6 sm:grid-cols-6 xl:grid-cols-6">
        <div class="col-span-4 lg:col-span-2" style="padding: 1.2rem">
          <div
            class="card bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700"
          >
            <a href="#">
              <img
                class="rounded-t-lg"
                src="../../../../../../public/images/no_photo.jpg"
                alt=""
              />
            </a>
          </div>
        </div>
        <!-- ... -->
        <div class="col-span-4 sm:col-span-4" style="padding: 1.2rem">
          <div>
            <div class="col-span-full">
              <div class="mt-2">
                <textarea
                  id="name"
                  name="name"
                  rows="3"
                  placeholder="ชื่อสาขา"
                 v-model="form.name"
                 required
                  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                ></textarea>
                <InputError class="mt-2" :message="form.errors.name" />
              </div>
            </div>

            <div class="col-span-full mb-3">
              <div class="mt-2">
                <textarea
                  id="detail"
                  name="detail"
                  rows="3"
                      v-model="form.detail"
                    placeholder="รายละเอียด"
                    required
                  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                ></textarea>
              </div>
            </div>

           
            <div class="flex  mb-3">
              <span
                class="inline-flex items-center px-3 text-sm border border-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600"
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
              </span>
              <input
                type="text"
                id="tel"
                 v-model="form.tel"
                 required
                class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Phone"
              />
            </div>


            <div class="flex mb-3">
              <span
              class="inline-flex items-center px-3 text-sm border border-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600"
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
              </span>
              <input
                type="text"
                id="address"
                name="adress"
                  v-model="form.address"
                  required
                class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Address"
              />
            </div>


            <div class="flex mb-3">
              <span
              class="inline-flex items-center px-3 text-sm border border-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600"
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

              </span>
              <input
                type="text"
                id="social"
                name="social"
                  v-model="form.social"
                  required
                class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Facebook"
              />
            </div>

       
          
          </div>
        </div>
  
      </div>
      <hr class="hr-text" data-content="การจองคิว">
      <div class="grid gap-1 md:grid-cols-12 sm:grid-cols-12 xl:grid-cols-2">
        <div class="col-span-3 lg:col-span-1">
          <div class="mb-1">
            <div class="flex items-center" style="
    justify-content: center;
">
              <label for="terms" class="mr-2 block text-sm text-gray-900"
                >จองล่วงหน้าสูงสุด  </label
              >
              <input
                type="text"
                id="reserve_day"
                name="reserve_day"
                v-model="form.reserve_day"
                required
                class="mt-1 block px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-opacity-50 focus:ring-blue-300"
              />
              <label for="terms" class="ml-2 block text-sm text-gray-900"
                > วัน</label
              >
            </div>
          </div>
        </div>

        <div class="col-span-3 lg:col-span-1">
          <div class="mb-1">
            <div class="flex items-center" style="
    justify-content: center;
">
              <label for="terms" class="mr-2 block text-sm text-gray-900"
                >ยกเลิกล่วงหน้าขั้นต่ำ</label
              >
              <input
                type="text"
                id="cancel_day"
                name="cancel_day"
                  v-model="form.cancel_day"
                  required
                class="mt-1 block px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-opacity-50 focus:ring-blue-300"
              />
              <label for="terms" class="ml-2 block text-sm text-gray-900"
                >วัน</label
              >
            </div>
          </div>
        </div>
      </div>

      <div class="grid gap-1 md:grid-cols-12 sm:grid-cols-12 xl:grid-cols-2">
        <div class="col-span-3 lg:col-span-12">
          <div class="flex items-center" style="
    justify-content: center;
">
         <button type="button"  class="text-white bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">ยกเลิก</button>
              <button type="submit"  class="text-white bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">บันทึก</button>
          </div>
        </div>

     
      </div>
      </form>
    </div>

    <br />
  </Authenbackend>
</template>
<script setup>
import Authenbackend from "@/Layouts/Authenbackend.vue";
import { Head, Link, useForm } from '@inertiajs/vue3';
import InputError from '@/Components/InputError.vue';

const form = useForm({
    name: '',
    detail: '',
    tel: '',
    address: '',
    social: '',
    reserve_day: '',
    cancel_day: '',
});



const submit = () => {
 form.post(route('managebranch.store'), {
   
  });
  
};
</script>

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
.hr-text {
  line-height: 1em;
  position: relative;
  outline: 0;
  border: 0;
  color: black;
  text-align: center;
  height: 1.5em;
  opacity: .5;
}

.hr-text::before {
    content: "";
    background: linear-gradient(to right, transparent, #818078, transparent);
    position: absolute;
    left: 0;
    top: 50%;
    width: 100%;
    height: 1px;
}

.hr-text::after {
  content: attr(data-content);
    position: relative;
    display: inline-block;
    color: black;

    padding: 0 .5em;
    line-height: 1.5em;
    color: #818078;
    background-color: #fcfcfa;
}

</style>
