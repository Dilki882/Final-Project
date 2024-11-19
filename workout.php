<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health and Tracking System</title>
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
    background-color: #333;
    color: white;
    padding: 20px 0;
    text-align: center;
}

header img {
    max-width: 150px;
    margin-bottom: 20px;
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

/* Workout Section */
main {
    padding: 40px 20px;
}

.workout-tracking h2 {
    font-size: 2rem;
    margin-bottom: 20px;
    text-align: center;
}

.workout-tracking p {
    font-size: 1.1rem;
    margin-bottom: 30px;
    text-align: center;
}

.workout-tracking form {
    background-color: white;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    max-width: 600px;
    margin: 0 auto;
}

.workout-tracking form label {
    font-size: 1.1rem;
    margin-bottom: 10px;
    display: block;
}

.workout-tracking form input {
    padding: 10px;
    margin-bottom: 15px;
    width: 100%;
    font-size: 1rem;
    border-radius: 5px;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

.workout-tracking form button {
    padding: 12px 25px;
    background-color: #4CAF50;
    color: white;
    font-size: 1.1rem;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.workout-tracking form button:hover {
    background-color: #45a049;
}

/* Recent Workouts Table */
.workout-tracking table {
    width: 100%;
    margin-top: 30px;
    border-collapse: collapse;
    background-color: white;
    border-radius: 8px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

.workout-tracking table th, .workout-tracking table td {
    padding: 12px;
    text-align: center;
    border: 1px solid #ddd;
}

.workout-tracking table th {
    background-color: #f39c12;
    color: white;
    font-size: 1.1rem;
}

.workout-tracking table td {
    font-size: 1rem;
}

.workout-tracking table tr:nth-child(even) {
    background-color: #f9f9f9;
}

.workout-tracking table tr:hover {
    background-color: #f1f1f1;
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

/* Mobile responsiveness */
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

    .workout-tracking form {
        padding: 20px;
        margin: 0 15px;
    }

    .workout-tracking form label,
    .workout-tracking form input,
    .workout-tracking form button {
        font-size: 1rem;
    }

    .workout-tracking table th, .workout-tracking table td {
        font-size: 1rem;
        padding: 8px;
    }
}

</style>
</head>
<body>
    <!-- Header Section -->
    <header>
        <div class="container">
             <!-- Logo image added here -->
             <img src="../images/main-logo-black.png" alt="Health and Fitness Logo">
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

<!-- Workout Section -->
<main>
        <section class="workout-tracking">
            <h2>Your Workout</h2>
            <p>Track your daily exercises and progress here.</p>

            <form action="workout.php" method="POST">
                <label for="exercise-name">Exercise Name:</label>
                <input type="text" id="exercise-name" name="exercise_name" required><br>

                <label for="sets">Sets:</label>
                <input type="number" id="sets" name="sets" min="1" required><br>


                <label for="reps">Reps per Set:</label>
                <input type="number" id="reps" name="reps" min="1" required><br>


                <label for="weight">Weight (kg):</label>
                <input type="number" id="weight" name="weight" step="0.1" required><br>


                <label for="duration">Duration (minutes):</label>
                <input type="number" id="duration" name="duration" step="1" required><br>


                <button type="submit">Log Workout</button>
            </form>

            <h3>Recent Workouts</h3>
            <table>
                <thead>
                    <tr>
                        <th>Exercise</th>
                        <th>Sets</th>
                        <th>Reps</th>
                        <th>Weight (kg)</th>
                        <th>Duration (min)</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Push-ups</td>
                        <td>3</td>
                        <td>15</td>
                        <td>Bodyweight</td>
                        <td>10</td>
                        <td>2024-11-15</td>
                    </tr>
                    <tr>
                        <td>Squats</td>
                        <td>4</td>
                        <td>20</td>
                        <td>50</td>
                        <td>30</td>
                        <td>2024-11-14</td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Health and Fitness Tracking System</p>
    </footer>
   
        </body>
</html>
