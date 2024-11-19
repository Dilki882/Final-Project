<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Health - Health & Fitness Tracker</title>
    <link rel="stylesheet" href="health.css">
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

/* Health Section */
.health-section {
    padding: 60px 20px;
    background-color: #fff;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.health-section .container {
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

/* Health Dashboard */
.health-dashboard {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 20px;
    margin-bottom: 40px;
}

.health-card {
    background-color: #f9f9f9;
    padding: 30px;
    width: 22%;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    text-align: center;
    transition: all 0.3s ease;
}

.health-card:hover {
    transform: translateY(-10px);
}

.health-card h3 {
    font-size: 1.8em;
    margin-bottom: 15px;
}

.health-card p {
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

.health-card span {
    font-size: 1.1em;
    color: #555;
}

/* Add New Health Metric Section */
.add-health {
    background-color: #f9f9f9;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    margin-top: 40px;
}

.add-health h3 {
    font-size: 2em;
    margin-bottom: 20px;
}

.add-health form {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.add-health label {
    font-size: 1.2em;
    color: #555;
}

.add-health input {
    padding: 10px;
    font-size: 1.1em;
    border: 1px solid #ddd;
    border-radius: 5px;
}

.add-health input:focus {
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
                <<ul>
                    <li><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="goals.php">Goals</a></li>
                    <li><a href="metrics.php">Metrics</a></li>
                    <li><a href="health.php"class="health">Health</a></li>
                    <li><a href="profile.php">Profile</a></li>
                    <li><a href="activity.php">Activity</a></li>
                    <li><a href="workout.php">Workout</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Health Section -->
    <section class="health-section">
        <div class="container">
            <h2>Your Health Status</h2>
            <p>Monitor and track key health parameters to stay on top of your well-being!</p>

            <!-- Health Dashboard -->
            <div class="health-dashboard">
                <!-- Heart Rate -->
                <div class="health-card">
                    <h3>Heart Rate</h3>
                    <p>78 bpm</p>
                    <div class="progress">
                        <div class="progress-bar" style="width: 60%"></div>
                    </div>
                    <span>Target: 70 bpm</span>
                </div>

                <!-- Blood Pressure -->
                <div class="health-card">
                    <h3>Blood Pressure</h3>
                    <p>120/80 mmHg</p>
                    <div class="progress">
                        <div class="progress-bar" style="width: 80%"></div>
                    </div>
                    <span>Target: 120/80 mmHg</span>
                </div>

                <!-- Sleep Quality -->
                <div class="health-card">
                    <h3>Sleep Quality</h3>
                    <p>7 hours</p>
                    <div class="progress">
                        <div class="progress-bar" style="width: 70%"></div>
                    </div>
                    <span>Target: 8 hours</span>
                </div>

                <!-- Blood Sugar -->
                <div class="health-card">
                    <h3>Blood Sugar</h3>
                    <p>95 mg/dL</p>
                    <div class="progress">
                        <div class="progress-bar" style="width: 90%"></div>
                    </div>
                    <span>Target: 90 mg/dL</span>
                </div>
            </div>

            <!-- Add New Health Metric -->
            <div class="add-health">
                <h3>Add New Health Metric</h3>
                <form action="#" method="post">
                    <label for="health-name">Health Metric</label>
                    <input type="text" id="health-name" placeholder="e.g., Heart Rate, Blood Pressure" required>

                    <label for="health-value">Metric Value</label>
                    <input type="text" id="health-value" placeholder="e.g., 78 bpm, 120/80 mmHg" required>

                    <label for="health-target">Target Value</label>
                    <input type="text" id="health-target" placeholder="e.g., 70 bpm, 120/80 mmHg" required>

                    <button type="submit" class="btn">Add Metric</button>
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
