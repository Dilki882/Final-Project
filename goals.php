<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Goals - Health & Fitness Tracker</title>
    <link rel="stylesheet" href="goals.css">
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

/* Goals Section */
.goals-section {
    padding: 60px 20px;
    background-color: #fff;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.goals-section .container {
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

/* Goals List */
.goals-list {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    margin-bottom: 40px;
}

.goal-card {
    background-color: #f9f9f9;
    padding: 30px;
    width: 30%;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    text-align: center;
    margin-bottom: 20px;
    transition: all 0.3s ease;
}

.goal-card:hover {
    transform: translateY(-10px);
}

.goal-card h3 {
    font-size: 1.8em;
    margin-bottom: 15px;
}

.goal-card p {
    font-size: 1.2em;
    color: #555;
    margin-bottom: 20px;
}

.progress {
    background-color: #ddd;
    border-radius: 5px;
    height: 10px;
    width: 100%;
    margin-bottom: 15px;
}

.progress-bar {
    background-color: #4CAF50;
    height: 100%;
    border-radius: 5px;
}

.btn {
    background-color: #4CAF50;
    color: #fff;
    padding: 10px 25px;
    text-decoration: none;
    border-radius: 5px;
    font-size: 1.1em;
    cursor: pointer;
}

.btn:hover {
    background-color: #45a049;
}

/* Add New Goal Section */
.add-goal {
    background-color: #f9f9f9;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    margin-top: 40px;
}

.add-goal h3 {
    font-size: 2em;
    margin-bottom: 20px;
}

.add-goal form {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.add-goal label {
    font-size: 1.2em;
    color: #555;
}

.add-goal input {
    padding: 10px;
    font-size: 1.1em;
    border: 1px solid #ddd;
    border-radius: 5px;
}

.add-goal input:focus {
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
                    <li><a href="goals.php"class="goals">Goals</a></li>
                    <li><a href="metrics.php">Metrics</a></li>
                    <li><a href="health.php">Health</a></li>
                    <li><a href="profile.php">Profile</a></li>
                    <li><a href="activity.php">Activity</a></li>
                    <li><a href="workout.php">Workout</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Goals Section -->
    <section class="goals-section">
        <div class="container">
            <h2>Your Fitness Goals</h2>
            <p>Set your fitness goals and track your progress to stay motivated!</p>

            <!-- Goals List -->
            <div class="goals-list">
                <div class="goal-card">
                    <h3>Lose Weight</h3>
                    <p>Target: 5 kg</p>
                    <div class="progress">
                        <div class="progress-bar" style="width: 40%"></div>
                    </div>
                    <button class="btn">Update Goal</button>
                </div>

                <div class="goal-card">
                    <h3>Run 5 km</h3>
                    <p>Target: Run 5 km within 30 minutes</p>
                    <div class="progress">
                        <div class="progress-bar" style="width: 70%"></div>
                    </div>
                    <button class="btn">Update Goal</button>
                </div>

                <div class="goal-card">
                    <h3>Improve Strength</h3>
                    <p>Target: Increase bench press by 10 kg</p>
                    <div class="progress">
                        <div class="progress-bar" style="width: 60%"></div>
                    </div>
                    <button class="btn">Update Goal</button>
                </div>
            </div>

            <!-- Add New Goal Section -->
            <div class="add-goal">
                <h3>Add New Goal</h3>
                <form action="#" method="post">
                    <label for="goal-name">Goal Name</label>
                    <input type="text" id="goal-name" placeholder="e.g., Lose Weight" required>

                    <label for="goal-target">Target</label>
                    <input type="text" id="goal-target" placeholder="e.g., 5 kg" required>

                    <button type="submit" class="btn">Add Goal</button>
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
