<?php
session_start();
if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: views/login.php');
    exit;
}
header('Location: views/login.php');
