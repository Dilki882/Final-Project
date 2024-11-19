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
    background-color: #90EE90;
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

/* Health Metrics Section */
#metrics {
    padding: 40px 20px;
    background-color: white;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    margin: 30px 0;
    border-radius: 8px;
}

#metrics h2 {
    font-size: 2rem;
    text-align: center;
    margin-bottom: 20px;
}

#metrics form {
    max-width: 600px;
    margin: 0 auto;
    background-color: #fff;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

#metrics form label {
    font-size: 1.1rem;
    margin-bottom: 10px;
    display: block;
}

#metrics form input {
    padding: 10px;
    margin-bottom: 15px;
    width: 100%;
    font-size: 1rem;
    border-radius: 5px;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

#metrics form button {
    padding: 12px 25px;
    background-color: #4CAF50;
    color: white;
    font-size: 1.1rem;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

#metrics form button:hover {
    background-color: #45a049;
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
        align-items: center;
    }

    nav ul li {
        margin: 10px 0;
    }

    #metrics form {
        padding: 20px;
        margin: 0 15px;
    }

    #metrics form label,
    #metrics form input,
    #metrics form button {
        font-size: 1rem;
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
<!-- Health Metrics Section -->
<section id="metrics">
        <div class="container">
            <h2>Track Your Health Metrics</h2>
            <form>
                <label for="steps">Steps Walked:</label>
                <input type="number" id="steps" name="steps" placeholder="Enter steps walked today" required><br>

                <label for="calories">Calories Burned:</label>
                <input type="number" id="calories" name="calories" placeholder="Enter calories burned today" required><br>

                <label for="water">Water Intake (L):</label>
                <input type="number" id="water" name="water" placeholder="Enter water intake today" required><br>

                <button type="submit">Track Metrics</button>
            </form>
        </div>
    </section>
    
    <!-- Footer Section -->
    <footer>
        <div class="container">
            <p>&copy; 2024 Health and Tracking System. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>