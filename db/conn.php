<?php
$host = 'localhost';
$db = 'inputdb';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql";


$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try {
   //code...
   $pdo = new PDO($dsn, $user, $pass);
   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   // } catch (\Throwable $th) {
} catch (PDOException $e) {
   echo $e;
   throw new PDOException($e->getMessage());
}

require_once 'crud.php';
$crud = new crud($pdo);
