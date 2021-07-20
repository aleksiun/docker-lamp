<?php
echo '<p><strong>Webserver UP!</strong></p>';
$host = "mysql-server";
$user = "root";
$pass = "secret";
$db = "app1";
try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
    echo '<strong>Database UP!</strong>';
} catch(PDOException $e) {
    echo "<strong>Database connection failed: </strong>" . $e->getMessage();
}
?>