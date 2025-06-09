<template>
    <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-6 w-full h-[120px] items-center">
      <div class="flex gap-4">
        <!-- Icon -->
        <div
          class="w-10 h-10 rounded-md flex items-center justify-center text-white"
          :class="iconBg"
        >
          <component :is="icon" class="w-5 h-5" />
        </div>
    
        <p class="text-xl font-semibold text-gray-900 leading-none mt-2">{{ value }}</p>
      </div>

      <p class="text-md text-gray-600 mt-4 font-bold">{{ label }}</p>
    </div>
    
  </template>
  
  <script setup lang="ts">
  defineProps({
    icon: Object, // imported icon component
    iconBg: String, // Tailwind bg color class
    value: [String, Number],
    label: String
  })
  </script>
  