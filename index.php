<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Health & Fitness Tracker</title>
    <link rel="stylesheet" href="styles.css">
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

/* Welcome Section */
.welcome-section {
    background-color: #fff;
    text-align: center;
    padding: 60px 20px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.welcome-section h2 {
    font-size: 2.5em;
    margin-bottom: 20px;
}

.welcome-section p {
    font-size: 1.2em;
    margin-bottom: 30px;
    color: #555;
}

.cta-button {
    background-color: #4CAF50;
    color: #fff;
    padding: 10px 25px;
    text-decoration: none;
    border-radius: 5px;
    font-size: 1.1em;
}

.cta-button:hover {
    background-color: #45a049;
}

/* Features Section */
.features {
    background-color: #fff;
    padding: 60px 20px;
}

.features h2 {
    text-align: center;
    font-size: 2.2em;
    margin-bottom: 40px;
}

.feature-cards {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    max-width: 1200px;
    margin: 0 auto;
}

.card {
    background-color: #f9f9f9;
    padding: 30px;
    width: 30%;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    text-align: center;
    margin-bottom: 20px;
    transition: all 0.3s ease;
}

.card:hover {
    transform: translateY(-10px);
}

.card h3 {
    font-size: 1.8em;
    margin-bottom: 15px;
}

.card p {
    font-size: 1.1em;
    color: #777;
}

/* Footer Section */
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
                    <li><a href="metrics.php">Metrics</a></li>
                    <li><a href="health.php">Health</a></li>
                    <li><a href="profile.php">Profile</a></li>
                    <li><a href="activity.php">Activity</a></li>
                    <li><a href="workout.php">Workout</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Welcome Section -->
    <section class="welcome-section">
        <div class="container">
            <h2>Welcome to Your Fitness Dashboard!</h2>
            <p>Track your fitness progress, monitor health metrics, and stay on top of your goals.</p>
            <a href="#" class="cta-button">Get Started</a>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features">
        <div class="container">
            <h2>Explore Features</h2>
            <div class="feature-cards">
                <div class="card">
                    <h3>Goals</h3>
                    <p>Set and track your fitness and health goals to stay motivated.</p>
                </div>
                <div class="card">
                    <h3>Metrics</h3>
                    <p>Monitor key health metrics like weight, heart rate, and more.</p>
                </div>
                <div class="card">
                    <h3>Health</h3>
                    <p>Keep track of your overall health and wellness.</p>
                </div>
                <div class="card">
                    <h3>Profile</h3>
                    <p>View and manage your personal information and fitness profile.</p>
                </div>
                <div class="card">
                    <h3>Activity</h3>
                    <p>Track your daily activities and log your workouts.</p>
                </div>
                <div class="card">
                    <h3>Workout</h3>
                    <p>Explore different workouts and create your personalized training plan.</p>
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
