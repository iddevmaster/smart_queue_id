<script setup>



const showingNavigationDropdown = ref(false);


const logout = () => {
   Inertia.post('/logout');
};


</script>


<script>

import { ref } from 'vue';
import Header from '@/Components/Header.vue';
import Sidebar from '@/Components/Sidebar.vue';
import FlashMessage from '@/Components/FlashMessage.vue';
import { Inertia } from '@inertiajs/inertia'

export default {
  name: 'AdminLayout',
  data() {
    return {
      sidebarOpen: false
    };
  },
  components: {
    FlashMessage,
  },
  props: {
    flash: {
      type: Object,
      default: () => ({
        type: '',
        message: ''
      }),
    },
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


    <FlashMessage v-if="$page.props.flash.success"  :type="$page.props.flash.type" :message="$page.props.flash.message" />
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