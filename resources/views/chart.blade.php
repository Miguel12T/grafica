<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chart</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
  <canvas id="myChart" width="200" height="50"></canvas>
  <canvas id="myChart2" width="200" height="50"></canvas>
  <canvas id="myChart3" width="200" height="50"></canvas>
    <script>
        const ctx     = document.getElementById('myChart').getContext('2d');
        const ctx2     = document.getElementById('myChart2').getContext('2d');
        const ctx3     = document.getElementById('myChart3').getContext('2d');
        const columns = @json($columns);
        const values  = @json($values);
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: columns.slice(1), // Assume the first row is the header
                datasets: [{
                    label: values[1][0],
                    data: values[1], // Random data for example
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
        new Chart(ctx2, {
            type: 'line',
            data: {
                labels: columns.slice(1), // Assume the first row is the header
                datasets: [{
                    label: values[2][0],
                    data: values[2], // Random data for example
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
        new Chart(ctx3, {
            type: 'line',
            data: {
                labels: columns.slice(1), // Assume the first row is the header
                datasets: [{
                    label: values[3][0],
                    data: values[3], // Random data for example
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>
</html>
