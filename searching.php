<?php

$config =parse_ini_file('config.ini'); ///add path to config.ini
$q = $_GET['q'];
$q=strtoupper($q);
$servername = $config['servername'];
$username = $config['username'];
$password = $config['password'];
$dbname = $config['dbname'];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("CALL search(:term)");
    $stmt->bindParam(':term', $q);
    $stmt->execute();


$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
$json = json_encode($results);
echo $json;

}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;

?>
