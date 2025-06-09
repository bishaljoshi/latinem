<template>
    <div class="bg-white p-4 rounded shadow">
      <h3 class="font-semibold mb-2">% Typologies Configured</h3>
      <canvas ref="pieChart"></canvas>
    </div>
  </template>
  
  <script setup lang="ts">
  import { onMounted, ref } from 'vue';
  import { Chart, PieController, ArcElement, Tooltip, Legend } from 'chart.js';
  Chart.register(PieController, ArcElement, Tooltip, Legend);
  
  const pieChart = ref(null);
  
  onMounted(() => {
    new Chart(pieChart.value, {
      type: 'pie',
      data: {
        labels: ['Modified', 'Config', 'Pending'],
        datasets: [{
          data: [20, 30, 10],
          backgroundColor: ['#FACC15', '#3B82F6', '#10B981']
        }]
      },
      options: {
        responsive: true,
        plugins: { legend: { position: 'bottom' } }
      }
    });
  });
  </script>