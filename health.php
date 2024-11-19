<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Information - Health and Fitness Tracking</title>
    <link rel="stylesheet" href="styles.css">
    
    <style>
        /* General Styles */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    color: #333;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

/* Header Section */
header {
    background-color: #333;
    color: white;
    padding: 20px 0;
    text-align: center;
}

header .logo {
    width: 120px;
    height: auto;
    margin-bottom: 10px;
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

nav ul li a.active {
    color: #f39c12;
}

/* Main Content Section */
main {
    padding: 40px 0;
}

.health-section {
    background-color: white;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.health-section h2 {
    font-size: 2.5rem;
    margin-bottom: 30px;
    text-align: center;
}

/* Health Summary Section */
.health-summary {
    margin-bottom: 30px;
}

.health-summary h3 {
    font-size: 1.8rem;
    margin-bottom: 15px;
}

.health-summary ul {
    list-style-type: none;
    padding: 0;
}

.health-summary li {
    font-size: 1.2rem;
    margin: 10px 0;
}

.health-summary li strong {
    font-weight: bold;
}

/* Health Data Update Form */
.health-data-form h3 {
    font-size: 1.8rem;
    margin-bottom: 15px;
}

.health-data-form form {
    display: flex;
    flex-direction: column;
}

.health-data-form form label {
    font-size: 1.2rem;
    margin: 10px 0 5px;
}

.health-data-form form input[type="number"],
.health-data-form form input[type="text"] {
    padding: 10px;
    font-size: 1rem;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-bottom: 15px;
}

.health-data-form form button {
    padding: 10px 20px;
    font-size: 1.2rem;
    background-color: #333;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.health-data-form form button:hover {
    background-color: #f39c12;
}

/* Health Insights Section */
.health-insights {
    margin-top: 30px;
}

.health-insights h3 {
    font-size: 1.8rem;
    margin-bottom: 15px;
}

.health-insights p {
    font-size: 1.2rem;
    color: #666;
}

/* Footer Section */
footer {
    background-color: #333;
    color: white;
    padding: 10px 0;
    text-align: center;
}

footer p {
    margin: 0;
}

/* Mobile responsiveness */
@media (max-width: 768px) {
    header h1 {
        font-size: 2rem;
    }

    nav ul {
        flex-direction: column;
    }

    nav ul li {
        margin: 10px 0;
    }

    .health-section h2 {
        font-size: 2rem;
    }

    .health-summary li {
        font-size: 1rem;
    }

    .health-data-form form input[type="number"],
    .health-data-form form input[type="text"] {
        font-size: 1rem;
    }

    .health-data-form form button {
        font-size: 1rem;
        padding: 10px 15px;
    }
}

        </style>
</head>
<body>

    <!-- Header Section -->
    <header>
        <div class="container">
            <img src="../images/main-logo-black.png" alt="Health and Fitness Logo" class="logo">
            <h1>Health and Fitness Tracking</h1>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="profile.php">Profile</a></li>
                    <li><a href="metrics.php">Metrics</a></li>
                    <li><a href="goal.php">Goal</a></li>
                    <li><a href="health.php">Health</a></li>
                    <li><a href="workout.php">Workout</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        <section class="health-section">
            <div class="container">
                <h2>Your Health Information</h2>

                <!-- Health Summary -->
                <div class="health-summary">
                    <h3>Current Stats</h3>
                    <ul>
                        <li>Weight: 75 kg</li>
                        <li>Height: 180 cm</li>
                        <li>Body Mass Index (BMI): 23.1</li>
                        <li>Resting Heart Rate: 70 bpm</li>
                        <li>Blood Pressure: 120/80 mmHg</li>
                    </ul>
                </div>

                <!-- Health Data Form -->
                <div class="health-data-form">
                    <h3>Update Your Health Information</h3>
                    <form action="health.php" method="POST">
                        <label for="weight">Update Weight (kg):</label>
                        <input type="number" id="weight" name="weight" step="0.1" required><br>

                        <label for="height">Update Height (cm):</label>
                        <input type="number" id="height" name="height" required><br>

                        <label for="heart-rate">Heart Rate (bpm):</label>
                        <input type="number" id="heart-rate" name="heart_rate" required><br>

                        <label for="blood-pressure">Blood Pressure (mmHg):</label>
                        <input type="text" id="blood-pressure" name="blood_pressure" placeholder="e.g., 120/80" required><br>

                        <button type="submit">Update Health Information</button>
                    </form>
                </div>

                <!-- Health Insights Section -->
                <div class="health-insights">
                    <h3>Health Insights</h3>
                    <p>Based on your current data, your BMI is within the normal range. Keep up the good work!</p>
                    <p>It's important to track your progress regularly. Make sure to incorporate balanced nutrition and regular exercise into your daily routine.</p>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer Section -->
    <footer>
        <div class="container">
            <p>&copy; 2024 Health and Fitness Tracking System. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
