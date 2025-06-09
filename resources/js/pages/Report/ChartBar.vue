<template>
  <div class="bg-white p-4 rounded shadow">
    <h3 class="font-semibold mb-2">Configured Typologies per Project</h3>
    <div class="h-60 mx-auto relative">
      <canvas ref="barChart" class="w-full h-full"></canvas>
    </div>
  </div>
</template>
  
<script setup lang="ts">
  import { onMounted, ref } from 'vue';
  import { Chart, BarController, BarElement, CategoryScale, LinearScale, Tooltip, Legend } from 'chart.js';
  Chart.register(BarController, BarElement, CategoryScale, LinearScale, Tooltip, Legend);
  
  const barChart = ref(null);
  
  onMounted(() => {
    new Chart(barChart.value, {
      type: 'bar',
      data: {
        labels: ['The Crest', 'Crest Grande', 'Waves Opulence'],
        datasets: [{
          label: 'Typologies',
          data: [280, 200, 100],
          backgroundColor: '#3B82F6'
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: { 
          legend: { display: false },
          datalabels: {
            display: false
          }
        },
        scales: { 
          x: {
            grid: {
              display: false,
            }
          },
          y: { 
            beginAtZero: true,
            ticks: {
              stepSize: 100
            }  
          }
        }
      }
    });
  });
  </script>
  