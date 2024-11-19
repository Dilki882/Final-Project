<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Workout - Health & Fitness Tracker</title>
    <link rel="stylesheet" href="workout.css">
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
    background
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
                    <li><a href="metrics.php">Metrics</a></li>
                    <li><a href="health.php">Health</a></li>
                    <li><a href="profile.php">Profile</a></li>
                    <li><a href="activity.php">Activity</a></li>
                    <li><a href="workout.php"class="workout">Workout</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Workout Section -->
    <section class="workout-section">
        <div class="container">
            <h2>Your Workout</h2>
            <p>Track your workout routines, log your exercises, and stay fit!</p>

            <!-- Workout Overview -->
            <div class="workout-overview">
                <div class="workout-card">
                    <h3>Today's Workout</h3>
                    <p>Duration: 60 min</p>
                    <p>Calories Burned: 500 kcal</p>
                    <p>Exercises: 5</p>
                </div>

                <div class="workout-card">
                    <h3>Workout Goal</h3>
                    <p>Target: 4x per week</p>
                    <div class="progress">
                        <div class="progress-bar" style="width: 50%"></div>
                    </div>
                    <span>2/4 Workouts Completed</span>
                </div>
            </div>

            <!-- Workout Log -->
            <div class="workout-log">
                <h3>Workout Log</h3>
                <table>
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Workout Type</th>
                            <th>Duration (min)</th>
                            <th>Calories Burned</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>2024-11-17</td>
                            <td>Running</td>
                            <td>30</td>
                            <td>300 kcal</td>
                        </tr>
                        <tr>
                            <td>2024-11-16</td>
                            <td>Strength Training</td>
                            <td>45</td>
                            <td>400 kcal</td>
                        </tr>
                        <tr>
                            <td>2024-11-15</td>
                            <td>Cycling</td>
                            <td>60</td>
                            <td>500 kcal</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Add New Workout -->
            <div class="add-workout">
                <h3>Add New Workout</h3>
                <form action="#" method="post">
                    <label for="workout-type">Workout Type</label>
                    <input type="text" id="workout-type" placeholder="e.g., Running, Cycling, Strength Training" required>

                    <label for="workout-duration">Duration (minutes)</label>
                    <input type="number" id="workout-duration" placeholder="e.g., 30" required>

                    <label for="calories-burned">Calories Burned</label>
                    <input type="number" id="calories-burned" placeholder="e.g., 300" required>

                    <button type="submit" class="btn">Log Workout</button>
                </form>
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
