<?php
session_start();
include_once 'includes/db_config.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
}

$user_id = $_SESSION['user_id'];
$query = "SELECT * FROM activities WHERE user_id = ?";
$stmt = $pdo->prepare($query);
$stmt->execute([$user_id]);
$activities = $stmt->fetchAll();

?>

<h1>Welcome to Your Dashboard</h1>

<h2>Activity History</h2>
<table>
    <tr>
        <th>Activity Type</th>
        <th>Duration (min)</th>
        <th>Calories Burned</th>
    </tr>
    <?php foreach ($activities as $activity) { ?>
        <tr>
            <td><?= $activity['activity_type'] ?></td>
            <td><?= $activity['duration'] ?></td>
            <td><?= $activity['calories_burned'] ?></td>
        </tr>
    <?php } ?>
</table>