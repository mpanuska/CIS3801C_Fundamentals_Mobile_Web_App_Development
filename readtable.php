<?php
$servername = "localhost";
$username = "User1";
$password = "1qaz1qaz!QAZ!QAZ";
$db_name = "testdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name, style, servings, minutes FROM recipe";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "name: " . $row["name"]. " style: " . $row["style"]. " servings: " . $row["servings"]. " minutes: " . $row["minutes"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
