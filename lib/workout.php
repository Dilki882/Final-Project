<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workout | Health and Fitness Tracking</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <header>
        <div class="container">
            <h1>Health and Fitness Tracking</h1>
            <nav>
                <ul>
                    <li><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="profile.php">Profile</a></li>
                    <li><a href="metrics.php">Metrics</a></li>
                    <li><a href="goals.php">Goals</a></li>
                    <li><a href="health.php">Health</a></li>
                    <li><a href="workout.php">Workout</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section class="workout-tracking">
            <h2>Your Workout</h2>
            <p>Track your daily exercises and progress here.</p>

            <form action="workout.php" method="POST">
                <label for="exercise-name">Exercise Name:</label>
                <input type="text" id="exercise-name" name="exercise_name" required>

                <label for="sets">Sets:</label>
                <input type="number" id="sets" name="sets" min="1" required>

                <label for="reps">Reps per Set:</label>
                <input type="number" id="reps" name="reps" min="1" required>

                <label for="weight">Weight (kg):</label>
                <input type="number" id="weight" name="weight" step="0.1" required>

                <label for="duration">Duration (minutes):</label>
                <input type="number" id="duration" name="duration" step="1" required>

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
