<script setup>
import { ref } from 'vue';

import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';

import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

import Header from '@/Components/Header.vue';
import Sidebar from '@/Components/Sidebar.vue';

const showingNavigationDropdown = ref(false);


const logout = () => {
   Inertia.post('/logout');
};


</script>


<script>


export default {
  name: 'AdminLayout',
  data() {
    return {
      sidebarOpen: false
    };
  },
  methods: {
    toggleSidebar() {
   
      this.sidebarOpen = !this.sidebarOpen;
    }
  }
}
</script>

<template>

   
    <!-- <div>
      
     
      <Sidebar :sidebarOpen="sidebarOpen" />
  
<div class="p-1 sm:ml-64">
       <Header   @toggle-sidebar="toggleSidebar" />
   <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-7">
      
   </div>
   <main>
                <slot />
            </main>
</div>
      
    </div> -->


    
    <Header   @toggle-sidebar="toggleSidebar" />
<Sidebar :sidebarOpen="sidebarOpen" />

<div class="p-4 sm:ml-64 mt-14">


   <main>
                <slot />
            </main>

</div>
</template>

<style scoped>
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: red;
   color: white;
   text-align: center;
}
</style>