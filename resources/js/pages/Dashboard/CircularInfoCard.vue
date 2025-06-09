<template>
  <div class="bg-white rounded-xl border border-gray-200 shadow-sm px-5 py-4 w-full h-[190px] flex items-center justify-center">
    <div class="flex flex-col items-center">
      <div class="relative w-16 h-16">
        <svg class="w-full h-full rotate-[-90deg]">
          <circle cx="50%" cy="50%" r="22" stroke="#E5E7EB" stroke-width="6" fill="none" />
          <circle
            cx="50%" cy="50%" r="22"
            :stroke="color"
            stroke-width="6"
            fill="none"
            :stroke-dasharray="circumference"
            :stroke-dashoffset="dashOffset"
            stroke-linecap="round"
          />
        </svg>
        <div class="absolute inset-0 flex items-center justify-center text-sm font-semibold text-gray-800">
          {{ percentage }}%
        </div>
      </div>
      <p class="text-sm text-gray-600 mt-2">{{ label }}</p>
    </div>
  </div>
</template>
  
<script setup lang="ts">
  const props = defineProps({
    percentage: Number,
    label: String,
    color: {
      type: String,
      default: '#3B82F6' // Tailwind blue-500
    }
  })
  
  const circumference = 2 * Math.PI * 22
  const dashOffset = circumference - (props.percentage / 100) * circumference
</script>
  