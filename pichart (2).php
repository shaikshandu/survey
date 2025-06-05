<section class="table-section">
  <div class="table-container">
    <link rel="stylesheet" href="survey.css">
   <a href="index.html" class="back-icon" title="Back to Home">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="28" height="28">
    <defs>
      <linearGradient id="a" x1="362.18" x2="170.968" y1="99.09" y2="430.28" gradientUnits="userSpaceOnUse">
        <stop offset="0" stop-color="#f8ba16"></stop>
        <stop offset="1" stop-color="#e93728"></stop>
      </linearGradient>
    </defs>
    <path fill="url(#a)" d="M242.839,469.839c-2.951,0-5.868-1.044-8.186-3.051L3.095,266.253c-2.742-2.374-4.317-5.822-4.317-9.449s1.575-7.075,4.317-9.449L234.654,46.819c3.7-3.202,8.927-3.953,13.377-1.92,4.451,2.033,7.306,6.477,7.306,11.37v119.292h235.941c6.903,0,12.5,5.597,12.5,12.5v137.487c0,6.903-5.597,12.5-12.5,12.5H255.337v119.291c0,4.894-2.855,9.336-7.306,11.37-1.662,.759-3.433,1.13-5.192,1.13ZM30.372,256.804l199.965,173.174v-104.43c0-6.903,5.597-12.5,12.5-12.5h235.941v-112.487H242.837c-6.903,0-12.5-5.597-12.5-12.5V83.63L30.372,256.804Z"></path>
  </svg>
</a>
 <link rel="stylesheet" href="style121.css">
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>House Ownership Visualization</title>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4e1d2;
      margin: 0;
      padding: 40px;
      text-align: center;
    }

    h2 {
      margin-bottom: 40px;
      font-size: 28px;
    }

    .chart-container {
      display: flex;
      justify-content: center;
      align-items: flex-start;
      gap: 40px;
      flex-wrap: wrap;
    }

    .chart-box {
      flex: 1;
      min-width: 300px;
      max-width: 600px;
    }

    .chart-box img {
      width: 70%;
      height: auto;
      border: 2px solid #ccc;
      border-radius: 8px;
    }

    canvas {
      width: 100% !important;
      height: auto !important;
      background-color: #fff;
      border: 1px solid #ccc;
      border-radius: 8px;
    }

    @media (max-width: 768px) {
      .chart-container {
        flex-direction: column;
        align-items: center;
      }
    }
  </style>
</head>
<body>

  <h2>House Ownership: Own vs Rent (Visualization)</h2>

  <div class="chart-container">
    <!-- Pie Chart Image (Left) -->
    <div class="chart-box">
      <img src="chart.png" alt="Pie Chart of Own vs Rent House" />
    </div>

    <!-- Line Chart (Right) -->
    <div class="chart-box">
      <canvas id="lineChart"></canvas>
    </div>
  </div>

  <script>
    const ctx = document.getElementById('lineChart').getContext('2d');
    new Chart(ctx, {
      type: 'line',
      data: {
        labels: ['Own House', 'Rent House'],
        datasets: [{
          label: 'Percentage',
          data: [90, 10],
          borderColor: 'rgba(255, 99, 132, 1)',
          backgroundColor: 'rgba(255, 99, 132, 0.2)',
          tension: 0.4,
          fill: true,
          pointBackgroundColor: '#000',
          pointRadius: 6
        }]
      },
      options: {
        plugins: {
          legend: {
            display: true
          },
          title: {
            display: true,
            text: 'Line Graph Representation of Housing Data'
          }
        },
        scales: {
          y: {
            beginAtZero: true,
            max: 100,
            title: {
              display: true,
              text: 'Percentage (%)'
            }
          },
          x: {
            title: {
              display: true,
              text: 'Type of House'
            }
          }
        }
      }
    });
  </script>

</body>
</html>
