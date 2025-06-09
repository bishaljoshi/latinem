<template>
    <button
      class="w-full h-[100px] border rounded-lg font-semibold text-base text-center px-5 py-3 transition-all duration-200"
      :class="isActive
        ? 'bg-white text-black border-gray-400 shadow-sm'
        : 'bg-white text-gray-600 border-gray-300 hover:bg-white hover:text-black'"
    >
      {{ title }}
    </button>
  </template>
  
  <script setup lang="ts">
  defineProps({
    title: String,
    isActive: Boolean
  })
  </script>
  