<?
error_reporting(E_ERROR | E_PARSE);
$host = '127.0.0.1';
// $host = 'MySQL-8.0
$db = 'Roomteam';
$user = 'root';
$pass = '';
$charset = 'utf8';
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, PDO::ATTR_EMULATE_PREPARES => false);
$pdo = new PDO($dsn,$user,$pass,$opt);
?>