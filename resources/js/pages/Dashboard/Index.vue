<template>
    <div class="flex min-h-screen bg-gray-100">
        <!-- Sidebar -->
        <aside class="top-0 w-64 bg-[#2b2829] text-white px-6 py-4 flex flex-col justify-between">
            <div class="p-2">
                <div class="mb-6">
                  <img src="/SobhaConstructionBlack.png" alt="Sobha Logo" class="mx-auto h-auto" />
                </div>
                <!-- Top section with nav items -->
                <div class="flex-1">
                  <NavItem title="Dashboard" :icon="faHouse" to="/dashboard" :isActive="true" />
                  <NavItem title="Start New Configuration" :icon="faGear" to="/start-config" />
                  <NavItem title="View Existing Configurations" :icon="faToolbox" to="/existing" />
                  <NavItem title="Bulk Import" :icon="faFileImport" to="/bulk-import" />
                  <NavItem title="Reports" :icon="faFileUpload" to="/reports" />
                </div>
            </div>
                
            <QuickActions />
        </aside>

        <!-- Main Content -->
        <main class="flex-1 pl-10 py-8 pr-7 space-y-6">
          <!-- Header Section with Search & Profile -->
          <div class="flex items-center justify-between mb-6">
            <!-- Heading -->
            <h1 class="text-2xl font-semibold text-gray-800">
              Welcome to Project Control
            </h1>

            <!-- Right-side: Search + Profile -->
            <div class="flex items-center gap-4">
              <!-- Search bar -->
              <div class="relative w-64">
                <input
                  type="text"
                  placeholder="Search"
                  class="w-full pl-10 pr-4 py-2 rounded-full bg-white shadow-sm border border-gray-300 text-sm focus:outline-none focus:ring-2 focus:ring-violet-500"
                />
                <FontAwesomeIcon class="w-4 h-4 text-gray-500 absolute left-3 top-1/2 transform -translate-y-1/2" :icon="faSearch" />
              </div>

              <!-- Profile circle -->
              <!-- <FontAwesomeIcon class="w-4 h-4 text-gray-500 absolute left-3 top-1/2 transform -translate-y-1/2" :icon="faUserCircle" /> -->
              <div class="rounded-full bg-gray-200 flex items-center justify-center font-semibold">
                <!-- <img src="/avatar.png" alt="User Avatar" class="w-full h-full object-cover" /> -->
                <FontAwesomeIcon class="w-full h-full object-cover" style="height: 2em !important;" :icon="faUserCircle" />
              </div>
            </div>
          </div>

            <!-- Tabs -->
            <div class="flex gap-4">
              <Tab title="The Crest" />
              <Tab title="Crest Grande" />
              <Tab title="Waves Opulence" />
            </div>

            <!-- Summary Cards -->
            <div class="flex items-center justify-between mt-6 mb-4">
              <div class="grid grid-cols-2 md:grid-cols-3 gap-5 w-[80%]">
                <InfoCard :icon="LayersIcon" iconBg="bg-violet-500" label="Divisions" value="4" />
                <InfoCard :icon="Building2Icon" iconBg="bg-cyan-600" label="Sub-divisions" value="10" />
                <InfoCard :icon="BuildingIcon" iconBg="bg-blue-500" label="Towers" value="4" />

                <InfoCard :icon="ListIcon" iconBg="bg-orange-400" label="Activities" value="245" />
                <InfoCard :icon="ListTodoIcon" iconBg="bg-red-400" label="Sub-activities" value="384" />
                <InfoCard :icon="HomeIcon" iconBg="bg-teal-400" label="Apartments" value="96" />

                <InfoCard :icon="DoorOpenIcon" iconBg="bg-yellow-400" label="Apontmets" value="98" />
                <InfoCard :icon="ListTodoIcon" iconBg="bg-green-500" label="Typologies" value="420" />
                <InfoCard :icon="ShieldCheckIcon" iconBg="bg-violet-400" label="% Configured" value="25" />
              </div>

              <div class="flex self-start items-center justify-center flex-col gap-5 w-[20%] ml-5">
                <InfoCard :icon="PanelTopIcon" iconBg="bg-yellow-500" label="Levels" value="32" />
                <CircularInfoCard :percentage="78" label="Ponfigured" />
              </div>
            </div>

            
    
            <!-- Table -->
            <div>
                <h3 class="font-medium mt-8 mb-4">Table Preview</h3>
                <DashboardTable />
            </div>
        </main>
    </div>
</template>
  
<script setup lang="ts">
import NavItem from './NavItem.vue'
import Tab from './Tab.vue'
import InfoCard from './InfoCard.vue'
import CircularInfoCard from './CircularInfoCard.vue'
import DashboardTable from './DashboardTable.vue'
import QuickActions from './QuickActions.vue'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
import { faHouse, faGear, faToolbox, faFileImport, faFileUpload, faSearch, faUserCircle } from '@fortawesome/free-solid-svg-icons'

// Lucide icons
import {
  LayersIcon,
  Building2Icon,
  BuildingIcon,
  PanelTopIcon,
  ListIcon,
  ListTodoIcon,
  HomeIcon,
  DoorOpenIcon,
  ShieldCheckIcon
} from 'lucide-vue-next'

</script>
  