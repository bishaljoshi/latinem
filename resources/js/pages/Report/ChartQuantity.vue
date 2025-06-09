<template>
    <div class="bg-white p-4 rounded shadow">
      <h3 class="font-semibold mb-2">Quantity Configured per Activity</h3>
      <div class="h-60 mx-auto relative">
        <canvas ref="qtyChart" class="w-full h-full"></canvas>
      </div>
    </div>
  </template>
  
  <script setup lang="ts">
  import { onMounted, ref } from 'vue';
  import { Chart, BarController, BarElement, CategoryScale, LinearScale, Tooltip, Legend } from 'chart.js';
  Chart.register(BarController, BarElement, CategoryScale, LinearScale, Tooltip, Legend);
  
  const qtyChart = ref(null);
  
  onMounted(() => {
    new Chart(qtyChart.value, {
      type: 'bar',
      data: {
        labels: ['Gypsum Ceiling', 'Final Coat Paint', 'External painting', 'Floor Tiling', 'Floor Tiling'],
        datasets: [{
          label: 'Quantity',
          data: [360, 270, 200, 180, 170],
          backgroundColor: '#2563EB'
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
            beginAtZero: false,
            ticks: {
              stepSize: 100
            }
          } 
        }
      }
    });
  });
  </script>
  