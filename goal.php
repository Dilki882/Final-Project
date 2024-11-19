<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set and Track Your Goals - Health and Fitness Tracking</title>
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
    background-color: #90EE90;
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

/* Goal Section */
main {
    padding: 40px 0;
}

.goal-section {
    background-color: white;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.goal-section h2 {
    font-size: 2.5rem;
    margin-bottom: 30px;
    text-align: center;
}

/* Current Goals Summary */
.goal-summary {
    margin-bottom: 30px;
}

.goal-summary h3 {
    font-size: 1.8rem;
    margin-bottom: 15px;
}

.goal-summary ul {
    list-style-type: none;
    padding: 0;
}

.goal-summary li {
    font-size: 1.2rem;
    margin: 10px 0;
}

.goal-summary li strong {
    font-weight: bold;
}

/* Goal Setting Form */
.goal-form h3 {
    font-size: 1.8rem;
    margin-bottom: 15px;
}

.goal-form form {
    display: flex;
    flex-direction: column;
}

.goal-form form label {
    font-size: 1.2rem;
    margin: 10px 0 5px;
}

.goal-form form input[type="number"],
.goal-form form select {
    padding: 10px;
    font-size: 1rem;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-bottom: 15px;
}

.goal-form form button {
    padding: 10px 20px;
    font-size: 1.2rem;
    background-color: #333;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.goal-form form button:hover {
    background-color: #f39c12;
}

/* Goal Insights Section */
.goal-insights {
    margin-top: 30px;
}

.goal-insights h3 {
    font-size: 1.8rem;
    margin-bottom: 15px;
}

.goal-insights p {
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

    .goal-section h2 {
        font-size: 2rem;
    }

    .goal-summary li {
        font-size: 1rem;
    }

    .goal-form form input[type="number"],
    .goal-form form select {
        font-size: 1rem;
    }

    .goal-form form button {
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
        <section class="goal-section">
            <div class="container">
                <h2>Your Fitness Goals</h2>

                <!-- Current Goals Summary -->
                <div class="goal-summary">
                    <h3>Current Goals</h3>
                    <ul>
                        <li>Goal Type: Weight Loss</li>
                        <li>Target Weight: 70 kg</li>
                        <li>Goal Deadline: 3 months</li>
                        <li>Progress: 50% achieved</li>
                    </ul>
                </div>

                <!-- Goal Setting Form -->
                <div class="goal-form">
                    <h3>Set New Goal</h3>
                    <form action="goal.php" method="POST">
                        <label for="goal-type">Goal Type:</label>
                        <select id="goal-type" name="goal_type" required>
                            <option value="weight-loss">Weight Loss</option>
                            <option value="muscle-gain">Muscle Gain</option>
                            <option value="fitness">General Fitness</option>
                        </select><br>

                        <label for="target-weight">Target Weight (kg):</label>
                        <input type="number" id="target-weight" name="target_weight" step="0.1" required><br>

                        <label for="deadline">Goal Deadline (Months):</label>
                        <input type="number" id="deadline" name="deadline" required><br>

                        <label for="current-weight">Current Weight (kg):</label>
                        <input type="number" id="current-weight" name="current_weight" step="0.1" required><br>

                        <button type="submit">Set Goal</button>
                    </form>
                </div>

                <!-- Goal Insights -->
                <div class="goal-insights">
                    <h3>Goal Insights</h3>
                    <p>It’s great to see you setting goals! Track your progress regularly and adjust your routine as necessary to stay on track. Make sure to consult with a professional to tailor your goals to your fitness level.</p>
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
