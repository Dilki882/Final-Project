<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health and Fitness Tracking Dashboard</title>
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">

    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        /* Header Section */
        header {
            background-color: #90EE90;
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        header img {
            max-width: 150px;
            max-height: 150px;
            display: block;
            margin: 0 auto 20px auto;
            border-radius: 8px;
        }

        header h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
        }

        nav ul li {
            margin: 0 15px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 1.1rem;
            transition: color 0.3s;
        }

        nav ul li a:hover {
            color: #f39c12;
        }

        /* Dashboard Section */
        #dashboard {
            padding: 40px 20px;
            background-color: white;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            margin: 30px 0;
            border-radius: 8px;
        }

        #dashboard h2 {
            font-size: 2rem;
            text-align: center;
            margin-bottom: 20px;
        }

        .card {
            background-color: #fff;
            padding: 20px;
            margin-bottom: 30px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .card h3 {
            font-size: 1.8rem;
            margin-bottom: 15px;
        }

        .card p {
            font-size: 1.1rem;
            margin-bottom: 10px;
        }

        canvas {
            width: 100%;
            height: 300px;
        }

        /* Footer Section */
        footer {
            background-color: #333;
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        footer p {
            margin: 0;
        }

        /* Mobile Responsiveness */
        @media (max-width: 768px) {
            header h1 {
                font-size: 2rem;
            }

            nav ul {
                flex-direction: column;
                align-items: center;
            }

            nav ul li {
                margin: 10px 0;
            }

            #dashboard h2 {
                font-size: 1.8rem;
            }

            .card {
                padding: 15px;
                margin-bottom: 20px;
            }

            .card h3 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>

    <!-- Header Section -->
    <header>
        <div class="container">
            <img src="../images/main-logo.jpeg" alt="Health and Fitness Logo">
            <h1>Health and Fitness Tracking Dashboard</h1>
            <nav>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="dashboard.html">Dashboard</a></li>
                    <li><a href="profile.html">Profile</a></li>
                    <li><a href="metrics.html">Metrics</a></li>
                    <li><a href="goal.html">Goals</a></li>
                    <li><a href="health.html">Health</a></li>
                    <li><a href="workout.html">Workouts</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Dashboard Section -->
    <section id="dashboard">
        <div class="container">
            <h2>Your Health Dashboard</h2>

            <!-- Health Overview -->
            <div class="card">
                <h3>Today's Health Overview</h3>
                <p><strong>Steps:</strong> 8,500 steps</p>
                <p><strong>Calories Burned:</strong> 450 kcal</p>
                <p><strong>Water Intake:</strong> 2.5 L</p>
            </div>

            <!-- Progress Chart -->
            <div class="card">
                <h3>Progress Chart</h3>
                <canvas id="progressChart"></canvas>
            </div>

        </div>
    </section>

    <!-- Footer Section -->
    <footer>
        <div class="container">
            <p>&copy; 2024 Health and Fitness Tracking System. All rights reserved.</p>
        </div>
    </footer>

    <!-- Chart.js Script for Progress Chart -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('progressChart').getContext('2d');
        const progressChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
                datasets: [{
                    label: 'Steps Walked (in 1000s)',
                    data: [7, 8, 6, 7, 9, 8, 10],
                    borderColor: 'rgba(75, 192, 192, 1)',
                    tension: 0.1,
                    fill: false
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
