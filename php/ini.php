<?php
session_start();
define('USER_AGENT', $_SERVER['HTTP_USER_AGENT']);
$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : 0;
$get = $_GET;
$post = $_POST;
?>
