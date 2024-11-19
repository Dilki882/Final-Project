<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health and Fitness Tracking System</title>
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

/* Main Section */
main {
    padding: 40px 0;
}

/* Introduction Section */
.intro {
    text-align: center;
    background-color: #ffffff;
    padding: 40px 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.intro h2 {
    font-size: 2.5rem;
    margin-bottom: 20px;
}

.intro p {
    font-size: 1.2rem;
    color: #666;
    margin-bottom: 30px;
}

.intro .btn-primary {
    padding: 12px 30px;
    font-size: 1.2rem;
    background-color: #333;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.intro .btn-primary:hover {
    background-color: #f39c12;
}

/* Features Section */
.features {
    margin-top: 50px;
}

.features h3 {
    font-size: 2rem;
    text-align: center;
    margin-bottom: 30px;
}

.feature-cards {
    display: flex;
    justify-content: space-between;
    gap: 20px;
}

.feature-cards .card {
    background-color: #fff;
    padding: 20px;
    text-align: center;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 30%;
}

.feature-cards .card img {
    width: 100%;
    max-width: 200px;
    height: auto;
    margin-bottom: 15px;
}

.feature-cards .card h4 {
    font-size: 1.5rem;
    margin-bottom: 10px;
}

.feature-cards .card p {
    font-size: 1.1rem;
    color: #666;
}

/* Call to Action Section */
.cta {
    background-color: #333;
    color: white;
    padding: 40px 20px;
    text-align: center;
    margin-top: 50px;
    border-radius: 8px;
}

.cta h2 {
    font-size: 2.5rem;
    margin-bottom: 20px;
}

.cta p {
    font-size: 1.2rem;
    margin-bottom: 30px;
}

.cta .btn-primary {
    padding: 12px 30px;
    font-size: 1.2rem;
    background-color: #f39c12;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.cta .btn-primary:hover {
    background-color: #333;
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
    }

    nav ul li {
        margin: 10px 0;
    }

    .intro h2 {
        font-size: 2rem;
    }

    .feature-cards {
        flex-direction: column;
        align-items: center;
    }

    .feature-cards .card {
        width: 80%;
        margin-bottom: 30px;
    }

    .cta h2 {
        font-size: 2rem;
    }

    .cta p {
        font-size: 1rem;
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

    <!-- Main Section (Introduction) -->
    <main>
        <section class="intro">
            <div class="container">
                <h2>Welcome to the Health and Fitness Tracking System</h2>
                <p>Your personalized health and fitness journey begins here! Track your workouts, set health goals, monitor your progress, and get insights into your overall well-being.</p>
                <a href="dashboard.php" class="btn-primary">Get Started</a>
            </div>
        </section>

        <!-- Features Section -->
        <section class="features">
            <div class="container">
                <h3>Our Key Features</h3>
                <div class="feature-cards">
                    <div class="card">
                        <img src="../images/goal-setting.jpg" alt="Goal Setting">
                        <h4>Goal Setting</h4>
                        <p>Set and track personalized fitness and health goals to stay motivated.</p>
                    </div>
                    <div class="card">
                        <img src="../images/workout-tracking.jpg" alt="Workout Tracking">
                        <h4>Workout Tracking</h4>
                        <p>Log your workouts and see how you're improving over time.</p>
                    </div>
                    <div class="card">
                        <img src="../images/health-insights.jpg" alt="Health Insights">
                        <h4>Health Insights</h4>
                        <p>Gain valuable insights into your health data and make informed decisions.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call to Action Section -->
        <section class="cta">
            <div class="container">
                <h2>Ready to Take Control of Your Health?</h2>
                <p>Sign up today and start your journey to a healthier, fitter you.</p>
                <a href="signup.php" class="btn-primary">Sign Up Now</a>
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
