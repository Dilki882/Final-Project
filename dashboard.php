<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard - Health & Fitness Tracker</title>
    <link rel="stylesheet" href="dashboard.css">
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

/* Workout Section */
.workout-section {
    padding: 60px 20px;
    background-color: #fff;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.workout-section .container {
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

/* Workout Overview */
.workout-overview {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 20px;
    margin-bottom: 40px;
}

.workout-card {
    background-color: #f9f9f9;
    padding: 30px;
    width: 22%;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    text-align: center;
    transition: all 0.3s ease;
}

.workout-card:hover {
    transform: translateY(-10px);
}

.workout-card h3 {
    font-size: 1.8em;
    margin-bottom: 15px;
}

.workout-card p {
    font-size: 1.5em;
    color: #333;
    margin-bottom: 15px;
}

.progress {
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

.workout-card span {
    font-size: 1.1em;
    color: #555;
}

/* Workout Log */
.workout-log {
    margin-top: 40px;
}

.workout-log table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 30px;
}

.workout-log table th, .workout-log table td {
    padding: 12px;
    text-align: center;
    border: 1px solid #ddd;
}

.workout-log table th {
    background-color: #f4f4f4;
    color: #333;
}

.workout-log table td {
    color: #555;
}

/* Add New Workout Form */
.add-workout {
    background-color: #f9f9f9;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    margin-top: 40px;
}

.add-workout h3 {
    font-size: 2em;
    margin-bottom: 20px;
}

.add-workout form {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.add-workout label {
    font-size: 1.2em;
    color: #555;
}

.add-workout input {
    padding: 10px;
    font-size: 1.1em;
    border: 1px solid #ddd;
    border-radius: 5px;
}

.add-workout input:focus {
    border-color: #4CAF50;
}

.add-workout .btn {
    background-color: #4CAF50;
    color: #fff;
    font-size: 1.1em;
    padding: 12px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.add-workout .btn:hover {
    background-color: #45a049;
}

/* Footer Section */
footer {
    background-color: #4CAF50;
    padding: 20px 0;
    text-align: center;
    color: #fff;
}

footer p {
    font-size: 1.2em;
}

        </style>
</head>
<body>
    <!-- Header Section -->
    <header>
        <div class="container">
            <h1>Health & Fitness Tracker</h1>
            <nav>
            <<ul>
                    <li><a href="dashboard.php"class="dashboard">Dashboard</a></li>
                    <li><a href="goals.php">Goals</a></li>
                    <li><a href="metrics.php">Metrics</a></li>
                    <li><a href="health.php">Health</a></li>
                    <li><a href="profile.php">Profile</a></li>
                    <li><a href="activity.php">Activity</a></li>
                    <li><a href="workout.php">Workout</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Dashboard Section -->
    <section class="dashboard-section">
        <div class="container">
            <h2>Welcome to Your Dashboard</h2>
            <p>Stay motivated! Track your fitness progress, goals, and activity here.</p>

            <!-- Stats Overview -->
            <div class="stats-overview">
                <div class="stat-card">
                    <h3>Steps Today</h3>
                    <p>10,350 Steps</p>
                    <div class="progress-bar">
                        <div class="progress" style="width: 85%;"></div>
                    </div>
                    <span>Target: 12,000 Steps</span>
                </div>
                <div class="stat-card">
                    <h3>Calories Burned</h3>
                    <p>350 kcal</p>
                    <div class="progress-bar">
                        <div class="progress" style="width: 70%;"></div>
                    </div>
                    <span>Target: 500 kcal</span>
                </div>
                <div class="stat-card">
                    <h3>Active Minutes</h3>
                    <p>45 mins</p>
                    <div class="progress-bar">
                        <div class="progress" style="width: 90%;"></div>
                    </div>
                    <span>Target: 50 mins</span>
                </div>
            </div>

            <!-- Activity Summary -->
            <div class="activity-summary">
                <h3>Recent Activity</h3>
                <div class="activity-card">
                    <h4>Running</h4>
                    <p>30 minutes, 300 kcal</p>
                </div>
                <div class="activity-card">
                    <h4>Strength Training</h4>
                    <p>45 minutes, 400 kcal</p>
                </div>
                <div class="activity-card">
                    <h4>Cycling</h4>
                    <p>60 minutes, 500 kcal</p>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="quick-actions">
                <h3>Quick Actions</h3>
                <div class="action-card">
                    <h4>Track New Activity</h4>
                    <a href="activity.html" class="btn">Log Activity</a>
                </div>
                <div class="action-card">
                    <h4>View Goals</h4>
                    <a href="goals.html" class="btn">View Goals</a>
                </div>
                <div class="action-card">
                    <h4>Start a Workout</h4>
                    <a href="workout.html" class="btn">Start Workout</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer>
        <div class="container">
            <p>&copy; 2024 Health & Fitness Tracker. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
