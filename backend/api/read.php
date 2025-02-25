<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    header("HTTP/1.1 200 OK");
    exit();
}

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

include_once 'db.php';
$database = Database::getInstance();
$db = $database->getConnection();

$query = $db->query("SELECT * FROM task");
$result = $query->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($result);
?> 