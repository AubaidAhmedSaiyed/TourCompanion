<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.html");
    exit();
}
echo "<h1>Welcome, " . $_SESSION['user'] . "</h1>";
?>
