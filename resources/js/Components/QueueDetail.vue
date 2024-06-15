<script setup>

</script>

<template>
    <div class="flex flex-wrap justify-center gap-1 sm:justify-between mb-2">
        <p>วันที่นัดหมาย: <span class="bg-purple-100 text-purple-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-purple-400 border border-purple-400">12 มีนาคม 2567</span></p>
        <p>ช่วงเวลา: <span class="bg-purple-100 text-purple-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-purple-400 border border-purple-400">11:00 - 12:00</span></p>
    </div>
    <div class="bg-cyan-100 rounded p-4 text-center mb-3 shadow-sm">
        <p class="text-fuchsia-600">หมายเลขคิวของคุณคือ</p>
        <hr class="w-1/2 mx-auto h-px my-1 bg-gray-300 border-0 dark:bg-gray-700">
        <p class="text-5xl font-bold font-mono">00012</p>
    </div>
    <div class="grid grid-cols-2 gap-2 text-center mb-3">
        <div class="bg-cyan-100 py-2 shadow-sm">
            <p class="text-xs">จำนวนคิวก่อนหน้า</p>
            <hr class="w-1/2 mx-auto h-px my-1 bg-gray-300 border-0 dark:bg-gray-700">
            <p class="text-md font-bold font-mono">10</p>
        </div>
        <div class="bg-cyan-100 py-2 shadow-sm">
            <p class="text-xs">เวลารอโดยประมาณ</p>
            <hr class="w-1/2 mx-auto h-px my-1 bg-gray-300 border-0 dark:bg-gray-700">
            <p class="font-bold font-mono">1 ชม. 15 นาที</p>
        </div>
    </div>
    <div class="bg-cyan-100 rounded p-4 text-center mb-3 shadow-sm">
        <p class="text-sm text-fuchsia-600">หมายเลขคิวที่กำลังรับบริการ</p>
        <hr class="w-1/2 mx-auto h-px my-1 bg-gray-300 border-0 dark:bg-gray-700">
        <p class="text-3xl font-bold font-mono">0001</p>
    </div>
</template>
