<?php


$sName = getenv('DB_HOST') ?: 'localhost';
$uName = getenv('DB_USER') ?: 'root';
$pass  = getenv('DB_PASSWORD') ?: '';
$db_name = getenv('DB_NAME') ?: 'task_management_db';

try {
    $conn = new PDO("mysql:host=$sName;dbname=$db_name", $uName, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){  // Notez : PDOException (pas Exeption)
    echo "Connection failed: ". $e->getMessage();
    exit;
}
?>
