<?php

  define('DB_HOST', getenv('MYSQLHOST') ?: 'localhost');
  define('DB_PORT', getenv('MYSQLPORT') ?: '3306');
  define('DB_USER', getenv('MYSQLUSER') ?: 'root');
  define('DB_PASSWORD', getenv('MYSQLPASSWORD') ?: '');
  define('DB_NAME', getenv('MYSQLDATABASE') ?: 'railway');

  $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
