<template>
    <div class="mt-6 bg-white p-4 rounded shadow">
      <h3 class="font-semibold mb-4">Configuration Summary</h3>
      <table class="w-full table-auto border-collapse">
        <thead>
          <tr class="bg-gray-100 text-left">
            <th class="p-2 border">Activity</th>
            <th class="p-2 border">Project</th>
            <th class="p-2 border">Units Configured</th>
            <th class="p-2 border">Modified</th>
            <th class="p-2 border">Final</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="(item, index) in rows" :key="index" class="hover:bg-gray-50">
            <td class="p-2 border">{{ item.activity }}</td>
            <td class="p-2 border">{{ item.project }}</td>
            <td class="p-2 border">{{ item.units }}</td>
            <td class="p-2 border">{{ item.modified }}</td>
            <td class="p-2 border">{{ item.final }}</td>
          </tr>
        </tbody>
      </table>
    </div>
  </template>
  
  <script setup lang="ts">
  import { ref } from 'vue';
  
  const rows = ref([
    { activity: 'Gypsum Ceiling', project: 'The Crest', units: 150, modified: 30, final: 120 },
    { activity: 'Painting', project: 'Crest Grande', units: 120, modified: 20, final: 100 },
    { activity: 'Tiling', project: 'Waves Opulence', units: 100, modified: 10, final: 90 },
  ]);
  </script>