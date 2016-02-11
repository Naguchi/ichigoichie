<?php
session_start();
define('USER_AGENT', $_SERVER['HTTP_USER_AGENT']);
$user_id = $_SESSION["user_id"];
$get = $_GET;
$post = $_POST;
?>