<?php
session_start();
$db_name = 'mysql:host=localhost;port=3307;dbname=sportx';
$db_user_name = 'root';
$db_user_pass = '';
$conne = new PDO($db_name, $db_user_name, $db_user_pass);