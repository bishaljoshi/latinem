<template>
    <div class="flex min-h-screen bg-gray-100 text-gray-800">
        <!-- Sidebar -->
        <aside class="top-0 left-0 w-[15%] bg-white flex flex-col justify-between shadow">
            <div class="p-4">
                <div class="mt-2">
                    <img src="/SobhaConstruction.png" alt="Sobha Logo" class="mx-auto h-auto mb-6" />
                </div>
                <!-- Top section with nav items -->
                <div class="flex-1">
                    <NavItem title="Dashboard" :icon="faHouse" to="/dashboard" />
                    <NavItem title="Reports" :icon="faFileUpload" to="/start-config" :isActive="true" />
                    <NavItem title="Bulk Import" :icon="faFileImport" to="/existing" />
                </div>
            </div>
                
            <!-- Bottom section (Help & Support) -->
            <div class="absolute bottom-4 p-4 pl-6 text-sm text-gray-600 w-full">
                <p class="mb-6 font-semibold">HELP & SUPPORT</p>
                <div class="flex items-center gap-2 cursor-pointer hover:text-blue-600 transition">
                    <FontAwesomeIcon :icon="faCircleQuestion" />
                    <span>Help</span>
                </div>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 left-50 pl-10 py-8 pr-7 space-y-6">
          <!-- Header Section with Search & Profile -->
          <div class="flex items-center justify-between mb-6">
            <!-- Heading -->
            <h1 class="text-2xl font-semibold text-gray-800">
              Configuration Reports
            </h1>

            <!-- Right-side: Search + Profile -->
            <div class="flex items-center gap-4">
                <!-- Search bar -->
                <div class="relative">
                <!-- Add left padding to accommodate icon -->
                <select
                class="form-select border border-gray-300 rounded-xl pl-10 pr-3 py-2 text-sm text-gray-700 w-48 bg-white focus:outline-none focus:ring-2 focus:ring-blue-500"
                >
                    <option>Sortipure.IScrat</option>
                </select>

                <!-- Search icon -->
                <FontAwesomeIcon class="w-4 h-4 text-gray-500 absolute left-3 top-1/2 transform -translate-y-1/2 pointer-events-none" :icon="faSearch" />
                </div>
            </div>

          </div>

          <!-- Filters -->
          <FilterComponent />

          <div class="grid grid-cols-3 gap-6 mt-6">
            <ChartDonut />
            <ChartBar />
            <ChartQuantity />
          </div>
          <div>
            <TableComponent :headers="headers" :rows="rows" />
          </div>
        </main>
    </div>
</template>
  
<script setup lang="ts">
import NavItem from './NavItem.vue'
import TableComponent from './TableComponent.vue'
import FilterComponent from './FilterComponent.vue'
import ChartDonut from './ChartDonut.vue';
import ChartBar from './ChartBar.vue';
import ChartQuantity from './ChartQuantity.vue';
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
import { faHouse, faFileUpload, faFileImport, faCircleQuestion, faSearch } from '@fortawesome/free-solid-svg-icons'
const headers = [
  'Date', 'Project', 'Activity', 'Typology', 'Action', 'Quantity', 'Priority', 'User'
]

const rows = [
  {
    date: '08.04.2025',
    project: 'The Crest',
    activity: 'External Painting - Primer',
    typology: '1 BHK Type A',
    action: 'Added',
    quantity: '50',
    priority: '70',
    user: 'Mohan K.'
  },
  {
    date: '08.04.2025',
    project: 'The Crest',
    activity: 'Shadow Angle Fixing - Dry',
    typology: '2 BHK Type A',
    action: 'Modified',
    quantity: '60 >',
    priority: '70',
    user: 'Rajesh N.'
  },
  {
    date: '08.04.2025',
    project: 'Waves Opulence',
    activity: 'Final Coat Paint',
    typology: '3 BHK Type A',
    action: 'Added',
    quantity: '120',
    priority: '30',
    user: 'Anju R.'
  },
  {
    date: '08.04.2025',
    project: 'Crest Grande',
    activity: 'Gypsum Ceiling Framing -We',
    typology: '2 BHK Type A',
    action: 'Removed',
    quantity: '–',
    priority: '',
    user: 'Akshat P.'
  },
  {
    date: '08.04.2025',
    project: 'Crest Grande',
    activity: 'Floor Tiling',
    typology: '1 BHK Type B',
    action: 'Added',
    quantity: '140',
    priority: '140',
    user: 'Akshat P.'
  }
]
</script>
  