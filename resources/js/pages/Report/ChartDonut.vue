<template>
  <div class="bg-white p-4 rounded-xl shadow w-full max-w-md">
    <h3 class="font-semibold text-gray-700 mb-4 text-sm tracking-wide">
      % Typologies Configured
    </h3>
    <!-- Custom dimensions here -->
    <div class="w-60 h-60 mx-auto relative">
      <canvas ref="donutChart" class="w-full h-full"></canvas>
    </div>
  </div>
</template>

<script setup lang="ts">
import { ref, onMounted } from 'vue'
import { Chart, ArcElement, Tooltip, Legend, DoughnutController } from 'chart.js'
import ChartDataLabels from 'chartjs-plugin-datalabels'

// Register needed components
Chart.register(DoughnutController, ChartDataLabels, ArcElement, Tooltip, Legend)

const donutChart = ref(null)

onMounted(() => {
  new Chart(donutChart.value, {
    type: 'doughnut',
    data: {
      labels: ['Modified', 'Config', 'Pending'],
      datasets: [
        {
          data: [33, 50, 17],
          backgroundColor: ['#FACC15', '#3B82F6', '#10B981'],
          borderWidth: 0,
        }
      ]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      cutout: '60%', // makes it a donut
      plugins: {
        legend: {
          position: 'bottom',
          labels: {
            color: '#4B5563', // Tailwind gray-600
            font: {
              size: 12
            },
            boxWidth: 12,
            padding: 16
          }
        },
        tooltip: {
          backgroundColor: '#1F2937', // gray-800
          titleColor: '#F9FAFB',
          bodyColor: '#F9FAFB',
          cornerRadius: 4,
          padding: 10
        },
        datalabels: {
          color: '#fff',
          formatter: (value, context) => {
            const data = context.chart.data.datasets[0].data;
            const total = data.reduce((a, b) => a + b, 0);
            const percentage = ((value / total) * 100).toFixed(0);
            return `${percentage}%`;
          },
          font: {
            weight: 'bold'
          }
        }
      }
    }
  })
})
</script>
