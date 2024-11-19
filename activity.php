<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Activity - Health & Fitness Tracker</title>
    <link rel="stylesheet" href="activity.css">
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

/* Activity Section */
.activity-section {
    padding: 60px 20px;
    background-color: #fff;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.activity-section .container {
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

/* Activity Overview */
.activity-overview {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 20px;
    margin-bottom: 40px;
}

.activity-card {
    background-color: #f9f9f9;
    padding: 30px;
    width: 22%;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    text-align: center;
    transition: all 0.3s ease;
}

.activity-card:hover {
    transform: translateY(-10px);
}

.activity-card h3 {
    font-size: 1.8em;
    margin-bottom: 15px;
}

.activity-card p {
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

.activity-card span {
    font-size: 1.1em;
    color: #555;
}

/* Activity History */
.activity-history {
    margin-top: 40px;
}

.tabs {
    text-align: center;
    margin-bottom: 20px;
}

.tab-button {
    background-color: #4CAF50;
    color: white;
    border: none;
    padding: 10px 20px;
    margin: 0 10px;
    cursor: pointer;
    font-size: 1.2em;
    border
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
                    <li><a href="activity.php" class="active">Activity</a></li>
                    <li><a href="workout.php">Workout</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Activity Section -->
    <section class="activity-section">
        <div class="container">
            <h2>Your Activity</h2>
            <p>Track your daily activity progress and stay on top of your fitness goals!</p>

            <!-- Activity Overview -->
            <div class="activity-overview">
                <!-- Steps Taken -->
                <div class="activity-card">
                    <h3>Steps Taken</h3>
                    <p>10,350 Steps</p>
                    <div class="progress">
                        <div class="progress-bar" style="width: 85%"></div>
                    </div>
                    <span>Target: 12,000 Steps</span>
                </div>

                <!-- Calories Burned -->
                <div class="activity-card">
                    <h3>Calories Burned</h3>
                    <p>350 kcal</p>
                    <div class="progress">
                        <div class="progress-bar" style="width: 70%"></div>
                    </div>
                    <span>Target: 500 kcal</span>
                </div>

                <!-- Active Minutes -->
                <div class="activity-card">
                    <h3>Active Minutes</h3>
                    <p>45 mins</p>
                    <div class="progress">
                        <div class="progress-bar" style="width: 90%"></div>
                    </div>
                    <span>Target: 50 mins</span>
                </div>
            </div>

            <!-- Activity History (Daily, Weekly, Monthly) -->
            <div class="activity-history">
                <h3>Activity History</h3>
                <div class="tabs">
                    <button class="tab-button active" onclick="showTab('daily')">Daily</button>
                    <button class="tab-button" onclick="showTab('weekly')">Weekly</button>
                    <button class="tab-button" onclick="showTab('monthly')">Monthly</button>
                </div>

                <div id="daily" class="tab-content active">
                    <h4>Daily Activity</h4>
                    <ul>
                        <li>Steps: 10,350</li>
                        <li>Calories: 350 kcal</li>
                        <li>Active Minutes: 45 mins</li>
                    </ul>
                </div>
                <div id="weekly" class="tab-content">
                    <h4>Weekly Activity</h4>
                    <ul>
                        <li>Steps: 72,500</li>
                        <li>Calories: 2,450 kcal</li>
                        <li>Active Minutes: 315 mins</li>
                    </ul>
                </div>
                <div id="monthly" class="tab-content">
                    <h4>Monthly Activity</h4>
                    <ul>
                        <li>Steps: 300,000</li>
                        <li>Calories: 10,000 kcal</li>
                        <li>Active Minutes: 1,350 mins</li>
                    </ul>
                </div>
            </div>

            <!-- Add Activity Entry -->
            <div class="add-activity">
                <h3>Add New Activity</h3>
                <form action="#" method="post">
                    <label for="activity-type">Activity Type</label>
                    <input type="text" id="activity-type" placeholder="e.g., Running, Walking, Cycling" required>

                    <label for="activity-duration">Duration (minutes)</label>
                    <input type="number" id="activity-duration" placeholder="e.g., 30 minutes" required>

                    <label for="activity-calories">Calories Burned</label>
                    <input type="number" id="activity-calories" placeholder="e.g., 200 kcal" required>

                    <button type="submit" class="btn">Add Activity</button>
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

    <script>
        function showTab(tabName) {
            var tabs = document.querySelectorAll('.tab-content');
            tabs.forEach(function(tab) {
                tab.classList.remove('active');
            });
            var buttons = document.querySelectorAll('.tab-button');
            buttons.forEach(function(button) {
                button.classList.remove('active');
            });
            document.getElementById(tabName).classList.add('active');
            event.target.classList.add('active');
        }
    </script>
</body>
</html>
