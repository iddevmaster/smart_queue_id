<script setup>
import Authenbackend from "@/Layouts/Authenbackend.vue";
import { Head } from "@inertiajs/vue3";
import Modal from '@/Components/ModalDelete.vue';
</script>
<script>
export default {
  name: "AdminBranch",
  data() {
    return {
      query: this.query || "",
      showModal: false,
      itemToDelete: null
    };
  },
  props: {
    items: Object,
    branch: Array,
  },
  methods: {
    search() {
      this.$inertia.get(route("managebranch.index"), { query: this.query });
    },
    editItem(id) {
      console.log("editItem", id);
    },
    deleteItem(id) {
     
      this.showModal = false;
      // if (confirm('Are you sure you want to delete this item?')) {
      //   Inertia.delete(route('items.destroy', id), {
      //     onSuccess: () => {
      //       // You can show a success message here if needed
      //     }
      //   });
      // }
    },
    confirmDelete(item) {
      this.itemToDelete = item;
      this.showModal = true;
    },
    prevPage() {
      if (this.items.prev_page_url) {
        this.$inertia.get(this.items.prev_page_url);
      }
    },
    nextPage() {
      if (this.items.next_page_url) {
        this.$inertia.get(this.items.next_page_url);
      }
    },
  },
};
</script>



<template>
  <Head title="Dashboard" />
  <Authenbackend>
    <!-- Start block -->
    <div class="container mx-auto px-4 sm:px-8">
    <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5 antialiased">
      <div class="mx-auto px-4 lg:px-12">
        <h1
          class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-4xl dark:text-white"
        >
          สาขาทั้งหมด
        </h1>
        <!-- Start coding here -->
        <div
          class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden"
        >
          <form @submit.prevent="search">
            <div
              class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4"
            >
              <div class="w-full md:w-1/2">
                <label for="simple-search" class="sr-only">Search</label>
                <div class="relative w-full">
                  <div
                    class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none"
                  >
                    <svg
                      aria-hidden="true"
                      class="w-5 h-5 text-gray-500 dark:text-gray-400"
                      fill="currentColor"
                      viewbox="0 0 20 20"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                        clip-rule="evenodd"
                      />
                    </svg>
                  </div>

                  <input
                    v-model="query"
                    id="simple-search"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="Search"
                  />
                </div>
              </div>
              <div
                class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0"
              >
                <button
                  type="submit"
                  class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                >
                  ค้นหา
                </button>
              </div>
            </div>
          </form>
          <div class="overflow-x-auto">
            <table
              class="w-full text-sm text-left text-gray-500 dark:text-gray-400"
            >
              <thead
                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400"
              >
                <tr>
                  <th scope="col" class="px-4 py-4">#</th>
                  <th scope="col" class="px-4 py-4">ชื่อสาขา</th>
                  <th scope="col" class="px-4 py-3">จองล่วงหน้าสูงสุด</th>
                  <th scope="col" class="px-4 py-3">ยกเลิกล่วงหน้าขั้นต่ำ</th>
                  <th scope="col" class="px-4 py-3">ภาพ</th>
                  <th scope="col" class="px-4 py-3">
                    <span class="sr-only">จัดการ</span>
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr
                  class="border-b dark:border-gray-700"
                  v-for="(branchs, index) in items.data"
                  :key="branchs.id"
                >
                  <th
                    scope="row"
                    class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                  >
                    {{ index + 1 }}
                  </th>
                  <td class="px-4 py-3">{{ branchs.name }}</td>
                  <td class="px-4 py-3">{{ branchs.reserve_day }}</td>
                  <td class="px-4 py-3">{{ branchs.cancel_day }}</td>
                  <td class="px-4 py-3">
                    <img
                      src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/content-gallery-3.png"
                      alt="item image"
                      class="w-16 h-16 object-cover"
                    />
                  </td>
                  <td class="px-4 py-3 flex items-center justify-end">
                    <div class="flex item-center justify-center">
                      <button
                        @click="editItem(branchs.id)"
                        class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke="currentColor"
                          class="w-4 h-4 text-blue-600"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M15 12h3m4 0h-4m4 0v-4m0 4v4M3 6h6M3 6v6m0-6L19 18M3 6l16 16M21 12a9 9 0 10-18 0 9 9 0 0018 0z"
                          />
                        </svg>
                      </button>
                      <button
                        @click="confirmDelete(branchs.id)"
                        class="w-4 mr-2 transform hover:text-red-500 hover:scale-110"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke="currentColor"
                          class="w-4 h-4 text-red-600"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M6 18L18 6M6 6l12 12"
                          />
                        </svg>
                      </button>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>

          <div
            class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between"
          >
            <span class="text-xs xs:text-sm text-gray-900">
              Showing {{ items.from }} to {{ items.to }} of
              {{ items.total }} Entries
            </span>
            <div class="inline-flex mt-2 xs:mt-0">
              <button
                @click="prevPage"
                :disabled="!items.prev_page_url"
                class="text-sm bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-l"
              >
                Prev
              </button>
              <button
                @click="nextPage"
                :disabled="!items.next_page_url"
                class="text-sm bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-r"
              >
                Next
              </button>
            </div>
          </div>
        </div>
      </div>

    </section>
    <!-- End block -->
    <!-- Create modal -->
    </div>
    <!-- Update modal -->
  </Authenbackend>

  
      <Modal
      :show="showModal"
      title="Delete Item"
      body="Are you sure you want to delete this item?"
      confirmButtonText="Delete"
      cancelButtonText="Cancel"
      @confirm="deleteItem"
      @close="showModal = false"
    />
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
  filter: blur(2px) brightness(60%);
}
</style>
