<?php
if (!isset($_SESSION['currentUser'])) {
    header("Location: index.php?page=login");
    exit;
}