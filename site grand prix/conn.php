<?php
function conn() {

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "grand prix";
$conn = new PDO("mysql:host=$servername;dbname=$dbname; charset=utf8", $username, $password);
$conn->setAttribute(PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE);

return $conn;
}
?>