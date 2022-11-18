<?php

$root = realpath($_SERVER["DOCUMENT_ROOT"]);
require "$root/CN-Web-main/vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

$db_host = $_ENV['DB_HOST'];
$db_user = $_ENV['DB_USER'];
$db_pass = $_ENV['DB_PASS'];
$db_name = $_ENV['DB_NAME'];
// $db_port = $_ENV['DB_PORT'];

try {
  $dsn = 'mysql:host=' . $db_host . ';dbname=' . $db_name;
  $options = [
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
  ];

  // Kết nối database
  $con = new PDO($dsn, $db_user, $db_pass, $options);
} catch (Exception $e) {
  echo $e->getMessage();
}

//$con = mysqli_connect("localhost", "root", "", "db_dongho");

// Check connection
//if (mysqli_connect_errno()) {
  //echo "Failed to connect to MySQL: " . mysqli_connect_error();
//}
// Change character set to utf8
//mysqli_set_charset($con, "utf8");