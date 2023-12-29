<?php
session_start();

if (isset($_POST['addTask'])) {
    $task = $_POST['task'];
    $_SESSION['tasks'][] = $task;
}

header('Location: index.php');
exit;
?>
