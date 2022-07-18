<?php
//Configurações da conexão
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "SIN143Final";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>