<?php
session_start();
include_once 'includes/db_config.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $goal_type = $_POST['goal_type'];
    $target_value = $_POST['target_value'];
    $target_date = $_POST['target_date'];
    $user_id = $_SESSION['user_id'];

    $query = "INSERT INTO goals (user_id, goal_type, target_value, target_date) VALUES (?, ?, ?, ?)";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$user_id, $goal_type, $target_value, $target_date]);

    echo "Goal set successfully!";
}
?>

<form method="post" action="goal.php">
    <input type="text" name="goal_type" placeholder="Goal Type (e.g., Weight Loss)" required><br>
    <input type="number" name="target_value" placeholder="Target Value" required><br>
    <input type="date" name="target_date" required><br>
    <input type="submit" value="Set Goal">
</form>