

<template>
  <div class="flex items-center">
 
   

    <div>
              <button type="button" @click="toggleDropdown" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                <span class="sr-only">Open user menu</span>
                <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
              </button>
            </div>
    <div v-if="dropdownOpen" @click.away="closeDropdown" class="absolute-ex z-10 w-48 bg-white border border-gray-200 rounded-md shadow-lg dark:bg-gray-800 dark:border-gray-600">
      <!-- <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700">Logout</a> -->

      <DropdownLink :href="route('logout')" method="post" as="button">
                                            Log Out
                                        </DropdownLink>
    </div>
    
  </div>

  
</template>
<script setup>
import DropdownLink from '@/Components/DropdownLink.vue';
</script>

<script>


export default {
  name: 'AdminProfile',
  data() {
    return {
      dropdownOpen: false,
      user: {
        name: 'John Doe',
        avatar: 'https://via.placeholder.com/150'
      }
    };
  },
  methods: {
    toggleDropdown() {
      this.dropdownOpen = !this.dropdownOpen;
    },
    closeDropdown() {
      this.dropdownOpen = false;
    }
  }
}
</script>

<style scoped>
/* Add your styles here */

.absolute-ex {
  position: absolute;
  top: 50px;
  right: 5px;

  background-color: #ffffff;
  border: 1px solid #ccc;
}
</style>