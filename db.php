<?php
$servername = "localhost:3308";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=exo1", $username, $password);
  // définir le mode d'erreur PDO sur exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Connecté avec succès";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?> 