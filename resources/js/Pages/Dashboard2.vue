<script setup>
import Authenbackend from '@/Layouts/Authenbackend.vue';
import ChartComponent from '@/Components/ChartComponent.vue';

import { Head } from '@inertiajs/vue3';
</script>




<script>
import ApexCharts from 'vue3-apexcharts';
export default {
    components: {
    apexchart: ApexCharts
  },
  data() {
    return {
        options: {
        chart: {
          id: 'vuechart-example'
        },
        xaxis: {
          categories: [1991, 1992, 1993, 1994, 1995, 1996, 1997, 1998]
        }
      },
      series: [{
        name: 'series-1',
        data: [30, 40, 45, 50, 49, 60, 70, 91]
      }]
    };
  },

}
</script>

<template>
    <Head title="Dashboard" />
    <Authenbackend>

      

        <div class="p-4 border-2 border-gray-200 dark:border-gray-700 mt-14">
 
 <div class="flex items-center justify-center h-48 mb-4 rounded bg-gray-50 dark:bg-gray-800">
    <p class="text-2xl text-gray-400 dark:text-gray-500">
       <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
       </svg>
    </p>
 </div>

 <div class="flex items-center justify-center h-48 mb-4 rounded bg-gray-50 dark:bg-gray-800">
    <p class="text-2xl text-gray-400 dark:text-gray-500">
       <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
       </svg>
    </p>
 </div>

 <apexchart width="500" type="line" :options="options" :series="series"></apexchart>
</div>


 
    </Authenbackend>
</template>
