
   <template>
    <router-link
      :to="to"
      class="flex items-center gap-3 px-4 py-2 rounded-md transition-all duration-150"
      :class="isActive
        ? 'bg-white text-black font-semibold shadow-sm'
        : 'text-gray-300 hover:bg-gray-800 hover:text-white'"
    >
      <FontAwesomeIcon :icon="icon" />
      <span>{{ title }}</span>
    </router-link>
  </template>
  
  <script setup lang="ts">  
  import { defineProps } from 'vue'
  import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
  
  defineProps({
    title: String,
    icon: Object, // Pass an icon component like from lucide-vue or heroicons
    to: String,
    isActive: Boolean
  })
  </script>
  