

<template>
  <Head title="Dashboard" />
  <Authenbackend>



    <div class="container mx-auto p-4 crdfr">
      <hr class="hr-text" data-content="เพิ่มข้อมูลองค์กร">
      <section class="bg-white dark:bg-gray-900">
  <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
     
      <form @submit.prevent="submit">
          <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
              <div class="sm:col-span-2">
                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ชื่อองค์กร</label>
                  <input type="text" name="name" id="name"
                  v-model="form.name"
                  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="ชื่อ" required="">
              </div>
          
              <div class="sm:col-span-2">
                  <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ที่อยู่</label>
                  <textarea id="addr" rows="2" 
                       v-model="form.addr"
                  class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="ที่อยู่" required></textarea>
              </div>
           
              <div class="sm:col-span-2">
                  <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ข้อมูลติดต่อ</label>
                  <textarea id="contact"
                      v-model="form.contact"
                  rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="ข้อมูลติดต่อ" required></textarea>
              </div>

              <div class="w-full sm:col-span-2 md:w-auto flex flex-col space-y-2 md:space-y-0 items-stretch justify-end md:space-x-3 flex-shrink-0">
                <button type="submit" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">เพิ่ม</button>

              </div>

        
          </div>

      </form>
  </div>
</section>
    </div>

    <br />
  </Authenbackend>
</template>
<script>
import Authenbackend from "../../../../Layouts/Authenbackend.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";
import InputError from "@/Components/InputError.vue";

export default {
  components: {
    Authenbackend,
    useForm,
    InputError,
    Head,
    Link,
  },
  props: {
 
  },

  data() {
    return {
      form: {
      name:null,
      addr:null,
      contact:null
        // Initialize other form fields as necessary
      },
    };
  },
  methods: {
    submit() {

      
      this.$inertia.post(`/cms/manageorganize`, this.form, {
        onSuccess: () => {
         console.log('ok');
        },
        onError: () => {
          console.log('onError');
        }
      });


   
    },
  },
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
