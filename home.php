<?php
include 'config.php';

if (isset($_SESSION['user'])) {
    header("Location: index.php");
} else {
    header("Location: login.php");
}
?>