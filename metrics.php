<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Metrics - Health & Fitness Tracker</title>
    <link rel="stylesheet" href="metrics.css">
    <style>
        /* Global Styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Arial', sans-serif;
}

body {
    background-color: #f4f4f4;
    color: #333;
}

/* Header Section */
header {
    background-color: #4CAF50;
    padding: 20px 0;
}

header .container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

header h1 {
    color: #fff;
    font-size: 2.5em;
}

header nav ul {
    list-style-type: none;
}

header nav ul li {
    display: inline;
    margin: 0 15px;
}

header nav ul li a {
    color: #fff;
    text-decoration: none;
    font-weight: bold;
}

header nav ul li a:hover {
    text-decoration: underline;
}

header nav ul li a.active {
    text-decoration: underline;
}

/* Metrics Section */
.metrics-section {
    padding: 60px 20px;
    background-color: #fff;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.metrics-section .container {
    max-width: 1200px;
    margin: 0 auto;
}

h2 {
    text-align: center;
    font-size: 2.5em;
    margin-bottom: 20px;
}

p {
    text-align: center;
    font-size: 1.2em;
    color: #777;
    margin-bottom: 40px;
}

/* Metrics Dashboard */
.metrics-dashboard {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 20px;
    margin-bottom: 40px;
}

.metric-card {
    background-color: #f9f9f9;
    padding: 30px;
    width: 22%;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    text-align: center;
    transition: all 0.3s ease;
}

.metric-card:hover {
    transform: translateY(-10px);
}

.metric-card h3 {
    font-size: 1.8em;
    margin-bottom: 15px;
}

.metric-card p {
    font-size: 1.5em;
    color: #333;
    margin-bottom: 15px;
}

.metric-progress {
    background-color: #ddd;
    border-radius: 5px;
    height: 10px;
    width: 100%;
    margin-bottom: 10px;
}

.progress-bar {
    background-color: #4CAF50;
    height: 100%;
    border-radius: 5px;
}

.metric-card span {
    font-size: 1.1em;
    color: #555;
}

/* Add New Metric Section */
.add-metric {
    background-color: #f9f9f9;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    margin-top: 40px;
}

.add-metric h3 {
    font-size: 2em;
    margin-bottom: 20px;
}

.add-metric form {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.add-metric label {
    font-size: 1.2em;
    color: #555;
}

.add-metric input {
    padding: 10px;
    font-size: 1.1em;
    border: 1px solid #ddd;
    border-radius: 5px;
}

.add-metric input:focus {
    border-color: #4CAF50;
}

footer {
    background-color: #333;
    color: #fff;
    padding: 20px;
    text-align: center;
}

footer p {
    font-size: 1em;
}

        </style>
</head>
<body>
    <!-- Header Section -->
    <header>
        <div class="container">
            <h1>Health & Fitness Tracker</h1>
            <nav>
                <ul>
                    <li><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="goals.php">Goals</a></li>
                    <li><a href="metrics.php" class="active">Metrics</a></li>
                    <li><a href="health.php">Health</a></li>
                    <li><a href="profile.php">Profile</a></li>
                    <li><a href="activity.php">Activity</a></li>
                    <li><a href="workout.php">Workout</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Metrics Section -->
    <section class="metrics-section">
        <div class="container">
            <h2>Your Fitness Metrics</h2>
            <p>Track and monitor your health metrics to measure progress and stay motivated!</p>

            <!-- Metrics Dashboard -->
            <div class="metrics-dashboard">
                <!-- Metric Card: Weight -->
                <div class="metric-card">
                    <h3>Weight</h3>
                    <p>75 kg</p>
                    <div class="metric-progress">
                        <div class="progress-bar" style="width: 80%"></div>
                    </div>
                    <span>Target: 70 kg</span>
                </div>

                <!-- Metric Card: Body Fat -->
                <div class="metric-card">
                    <h3>Body Fat</h3>
                    <p>22%</p>
                    <div class="metric-progress">
                        <div class="progress-bar" style="width: 50%"></div>
                    </div>
                    <span>Target: 18%</span>
                </div>

                <!-- Metric Card: Steps -->
                <div class="metric-card">
                    <h3>Steps</h3>
                    <p>8,000 steps</p>
                    <div class="metric-progress">
                        <div class="progress-bar" style="width: 90%"></div>
                    </div>
                    <span>Target: 10,000 steps</span>
                </div>

                <!-- Metric Card: Calories Burned -->
                <div class="metric-card">
                    <h3>Calories Burned</h3>
                    <p>1,500 kcal</p>
                    <div class="metric-progress">
                        <div class="progress-bar" style="width: 60%"></div>
                    </div>
                    <span>Target: 2,500 kcal</span>
                </div>
            </div>

            <!-- Add New Metric -->
            <div class="add-metric">
                <h3>Add New Metric</
