<?php
session_start();

if (isset($_GET['removeTask'])) {
    $taskId = $_GET['removeTask'];
    unset($_SESSION['tasks'][$taskId]);
}

header('Location: index.php');
exit;
?>
