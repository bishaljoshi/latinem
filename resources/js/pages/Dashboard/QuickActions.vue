<template>
    <div class="absolute bottom-4 text-sm text-gray-600 w-full">
      <p class="text-xs uppercase text-gray-400 tracking-wide">Quick Actions</p>
      <NavItem title="New Configuration" :icon="faPlus" to="/new-config" />
      <NavItem title="Bulk Import" :icon="faCloud" to="/bulk-import" />
      <NavItem title="Reports" :icon="faChartBar" to="/reports" />
    </div>
  </template>
  
  <script setup lang="ts">
  import NavItem from './NavItem.vue'
  import { faPlus, faCloud, faChartBar } from '@fortawesome/free-solid-svg-icons'
  </script>
  