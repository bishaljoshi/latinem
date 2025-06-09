<template>
  <div class="overflow-x-auto bg-white rounded-xl shadow-sm border border-gray-200">
    <table class="min-w-full text-sm text-gray-800 border-collapse">
      <thead>
        <tr class="bg-gray-50 text-left text-xs text-gray-500 uppercase tracking-wide border-b border-gray-200">
          <th class="px-5 py-3">Tower</th>
          <th class="px-5 py-3">Unit</th>
          <th class="px-5 py-3">Apartment</th>
          <th class="px-5 py-3">Typology</th>
          <th class="px-5 py-3">Quantity</th>
          <th class="px-5 py-3">Priority</th>
          <th class="px-5 py-3">Configured</th>
          <th class="px-5 py-3">Last Updated</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="item in rows" :key="item.apartment" class="border-t border-gray-200">
          <td class="px-5 py-3">{{ item.tower }}</td>
          <td class="px-5 py-3">{{ item.unit }}</td>
          <td class="px-5 py-3">{{ item.apartment }}</td>
          <td class="px-5 py-3">{{ item.typology }}</td>
          <td class="px-5 py-3">{{ item.quantity }}</td>
          <td class="px-5 py-3">{{ item.priority }}</td>
          <td class="px-5 py-3">
            <component
              :is="item.configured ? CircleCheck : CircleCheck"
              :class="item.configured ? 'text-green-500' : 'text-red-500'"
              class="w-5 h-5"
            />
          </td>
          <td class="px-5 py-3">{{ item.lastUpdated }}</td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script setup lang="ts">
import {
  CircleCheck
} from 'lucide-vue-next'
const rows = [
  {
    tower: 'A',
    unit: 1,
    apartment: 'A101',
    typology: '2 BHK Type B',
    quantity: '95 m²',
    priority: 'High',
    configured: true,
    lastUpdated: '08-Apr-2025'
  },
  {
    tower: 'A',
    unit: 2,
    apartment: 'A208',
    typology: '3 BHK Type A',
    quantity: '125 m²',
    priority: 'Medium',
    configured: false,
    lastUpdated: ''
  },
  {
    tower: 'B',
    unit: 1,
    apartment: 'B204',
    typology: '1 BHK Type A',
    quantity: '55 m²',
    priority: 'Low',
    configured: true,
    lastUpdated: '07-Apr-2025'
  }
]
</script>
