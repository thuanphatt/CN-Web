<?php
// Đường dẫn tuyệt đối 
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
require "$root/CN-Web/vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

$db_host = $_ENV['DB_HOST'];
$db_user = $_ENV['DB_USER'];
$db_pass = $_ENV['DB_PASS'];
$db_name = $_ENV['DB_NAME'];

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