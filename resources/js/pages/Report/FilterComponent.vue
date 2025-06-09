<template>
  <div class="p-1 rounded-xl flex flex-wrap justify-between gap-4 mb-4">
    <!-- Left Filters -->
    <div class="flex w-full gap-6 justify-between">
      <!-- Project -->
      <div class="flex flex-col w-[20%]">
        <label class="text-sm font-medium mb-1">Project</label>
        <select class="form-select border border-gray-300 rounded-xl px-3 py-2 text-sm text-gray-700 bg-white focus:outline-none focus:ring-2 focus:ring-blue-500">
          <option selected>The Crest</option>
          <option>Crest Grande</option>
          <option>Waves Opulence</option>
        </select>
      </div>

      <!-- Date Range -->
      <div class="flex flex-col w-[15%]">
        <label class="text-sm font-medium mb-1">Date Range</label>
        <input
          type="date"
          value="2025-01-01"
          class="text-sm border border-gray-300 rounded-xl px-3 py-2 bg-white focus:outline-none focus:ring-2 focus:ring-blue-500"
        />
      </div>

      <!-- Division/Sub-Division -->
      <div class="flex flex-col w-[20%]">
        <label class="text-sm font-medium mb-1">Division, Sub-Divison</label>
        <select class="form-select text-sm border border-gray-300 rounded-xl px-3 py-2 bg-white focus:outline-none focus:ring-2 focus:ring-blue-500">
          <option selected>Any</option>
          <option>Division A</option>
          <option>Division B</option>
        </select>
      </div>

      <!-- Activity/Sub-Activity -->
      <div class="flex flex-col w-[20%]">
        <label class="text-sm font-medium mb-1">Activity / Sub-Activity</label>
        <select class="form-select text-sm border border-gray-300 rounded-xl px-3 py-2 bg-white focus:outline-none focus:ring-2 focus:ring-blue-500">
          <option selected>Any</option>
          <option>External Painting</option>
          <option>Final Coat Paint</option>
          <option>Floor Tiling</option>
        </select>
      </div>

      <!-- Typology -->
      <div class="flex flex-col w-[10%]">
        <label class="text-sm font-medium mb-1">Typology</label>
        <select class="form-select text-sm border border-gray-300 rounded-xl px-3 py-2 bg-white focus:outline-none focus:ring-2 focus:ring-blue-500">
          <option selected>All</option>
          <option>1 BHK Type A</option>
          <option>2 BHK Type A</option>
          <option>3 BHK Type A</option>
        </select>
      </div>

      <div class="flex items-end ml-auto w-[15%]">
        <button class="bg-[#173675] text-white font-bold px-4 py-2 text-sm rounded-md hover:bg-blue-800">
          Download PDF
        </button>
      </div>
    </div>

    <!-- Right Search & PDF -->
    
  </div>
</template>
