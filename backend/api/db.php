<?php
class Database {
    private static $instance = null;
    private $conn;
    
    private $host = "localhost";
    private $username = "root";  // Update with your MySQL username
    private $password = "1234";      // Update with your MySQL password
    private $database = "my_tasks"; // Update with your database name

    private function __construct() {
        try {
            $this->conn = new PDO(
                "mysql:host=" . $this->host . ";dbname=" . $this->database,
                $this->username,
                $this->password
            );
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo "Connection Error: " . $e->getMessage();
        }
    }

    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    public function getConnection() {
        return $this->conn;
    }

    public function __wakeup() {  // Make this public
        // Implementation if needed
    }
}
?> 