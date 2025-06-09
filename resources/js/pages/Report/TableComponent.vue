<template>
    <div class="bg-white p-4 rounded shadow overflow-x-auto border border-gray-200">
      <table class="min-w-full text-sm border-collapse">
        <thead>
          <tr class="text-left text-xs text-gray-500 uppercase tracking-wide border-b border-gray-200">
            <th v-for="(header, index) in headers" :key="index" class="px-4 py-2">
              {{ header }}
            </th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="(row, index) in rows" :key="index" class="border-t border-gray-200">
            <td class="px-4 py-2">{{ row.date }}</td>
            <td class="px-4 py-2">{{ row.project }}</td>
            <td class="px-4 py-2">{{ row.activity }}</td>
            <td class="px-4 py-2">{{ row.typology }}</td>
            <td class="px-4 py-2">{{ row.action }}</td>
            <td class="px-4 py-2 text-right">{{ row.quantity }}</td>
            <td class="px-4 py-2 text-right">{{ row.priority }}</td>
            <td class="px-4 py-2">{{ row.user }}</td>
          </tr>
        </tbody>
      </table>
    </div>
  </template>
  
  <script setup lang="ts">
  defineProps({
    headers: Array,
    rows: Array
  })
  </script>
  