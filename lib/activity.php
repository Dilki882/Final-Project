<?php
session_start();
include_once 'includes/db_config.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $activity_type = $_POST['activity_type'];
    $duration = $_POST['duration'];
    $calories_burned = $_POST['calories_burned'];
    $user_id = $_SESSION['user_id'];

    $query = "INSERT INTO activities (user_id, activity_type, duration, calories_burned) VALUES (?, ?, ?, ?)";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$user_id, $activity_type, $duration, $calories_burned]);

    echo "Activity recorded!";
}
?>

<form method="post" action="activity.php">
    <input type="text" name="activity_type" placeholder="Activity Type" required><br>
    <input type="number" name="duration" placeholder="Duration (min)" required><br>
    <input type="number" name="calories_burned" placeholder="Calories Burned" required><br>
    <input type="submit" value="Record Activity">
</form>