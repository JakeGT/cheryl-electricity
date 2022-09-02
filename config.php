<?php

$login = fopen("login.config", "r") or die("Login details not found");

$username = fgets($login);
$password = fgets($login);
$database_name = fgets($login);

define("DB_SERVER", "localhost");
define("DB_USERNAME", $username);
define("DB_PASSWORD", $password);
define("DB_NAME", $database_name);

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
