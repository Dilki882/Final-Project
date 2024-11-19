<?php
session_start();
include_once 'includes/db_config.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $bmi = $_POST['bmi'];
    $hydration = $_POST['hydration'];
    $weight = $_POST['weight'];
    $user_id = $_SESSION['user_id'];

    $query = "INSERT INTO health_metrics (user_id, bmi, hydration, weight) VALUES (?, ?, ?, ?)";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$user_id, $bmi, $hydration, $weight]);

    echo "Health metrics recorded!";
}
?>

<form method="post" action="health.php">
    <input type="number" name="bmi" step="0.01" placeholder="BMI" required><br>
    <input type="number" name="hydration" placeholder="Hydration (ml)" required><br>
    <input type="number" name="weight" step="0.01" placeholder="Weight (kg)" required><br>
    <input type="submit" value="Record Health Metrics">
</form>