<?php
$host = "localhost";
$username = "humancmt_dina_productionadmin";
$password = "q5~+@m8~k^lV";
$database = "humancmt_dina_productiondb";

try {
    $conn = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    die();
}
?> 