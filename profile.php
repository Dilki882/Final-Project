<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile - Health & Fitness Tracker</title>
    <link rel="stylesheet" href="profile.css">
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

/* Profile Section */
.profile-section {
    padding: 60px 20px;
    background-color: #fff;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.profile-section .container {
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

/* Profile Overview */
.profile-overview {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 20px;
    margin-bottom: 40px;
}

.profile-card {
    background-color: #f9f9f9;
    padding: 30px;
    width: 22%;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    text-align: center;
    transition: all 0.3s ease;
}

.profile-card:hover {
    transform: translateY(-10px);
}

.profile-card h3 {
    font-size: 1.8em;
    margin-bottom: 15px;
}

.profile-card p {
    font-size: 1.5em;
    color: #333;
}

/* Edit Profile Form */
.edit-profile {
    background-color: #f9f9f9;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    margin-top: 40px;
}

.edit-profile h3 {
    font-size: 2em;
    margin-bottom: 20px;
}

.edit-profile form {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.edit-profile label {
    font-size: 1.2em;
    color: #555;
}

.edit-profile input,
.edit-profile select {
    padding: 10px;
    font-size: 1.1em;
    border: 1px solid #ddd;
    border-radius: 5px;
}

.edit-profile input:focus,
.edit-profile select:focus {
    border-color: #4CAF50;
}

.edit-profile .btn {
    background-color: #4CAF50;
    color: #fff;
    font-size: 1.1em;
    padding: 12px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.edit-profile .btn:hover {
    background-color: #45a049;
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
                    <li><a href="profile.php"class="profile">Profile</a></li>
                    <li><a href="activity.php">Activity</a></li>
                    <li><a href="workout.php">Workout</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Profile Section -->
    <section class="profile-section">
        <div class="container">
            <h2>Your Profile</h2>
            <p>Update your personal details and fitness preferences here.</p>

            <!-- Profile Overview -->
            <div class="profile-overview">
                <div class="profile-card">
                    <h3>Name</h3>
                    <p>John Doe</p>
                </div>
                <div class="profile-card">
                    <h3>Age</h3>
                    <p>29</p>
                </div>
                <div class="profile-card">
                    <h3>Gender</h3>
                    <p>Male</p>
                </div>
                <div class="profile-card">
                    <h3>Height</h3>
                    <p>5'9" (175 cm)</p>
                </div>
                <div class="profile-card">
                    <h3>Weight</h3>
                    <p>75 kg</p>
                </div>
                <div class="profile-card">
                    <h3>Target Weight</h3>
                    <p>70 kg</p>
                </div>
            </div>

            <!-- Edit Profile Form -->
            <div class="edit-profile">
                <h3>Edit Profile</h3>
                <form action="#" method="post">
                    <label for="name">Name</label>
                    <input type="text" id="name" value="John Doe" required>

                    <label for="age">Age</label>
                    <input type="number" id="age" value="29" required>

                    <label for="gender">Gender</label>
                    <select id="gender" required>
                        <option value="male" selected>Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>

                    <label for="height">Height (cm)</label>
                    <input type="number" id="height" value="175" required>

                    <label for="weight">Weight (kg)</label>
                    <input type="number" id="weight" value="75" required>

                    <label for="target-weight">Target Weight (kg)</label>
                    <input type="number" id="target-weight" value="70" required>

                    <button type="submit" class="btn">Save Changes</button>
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
