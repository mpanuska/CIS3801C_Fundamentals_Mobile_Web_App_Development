<?php
$servername = "localhost";
$username = "User1";
$password = "1qaz!QAZ2wsx@WSX";
$db_name = "course_project";

// Make a MySQL Connection
$con=mysqli_connect($servername, $username, $password, $db_name);

// check for connection error
if ($con->connect_errno) {
    echo $mysqli->connect_error;
    exit();
}

// Query the database for all records in two fields (columns) from the designated table
// and put into an array or arrays called $result

$result = $con->query("SELECT yourColumnNameTwo, yourColumnNameThree FROM yourTableName");

// fetch each row of data held as an array from the array of arrays and put the record
// into an array called $row. Fetch a row each looping of the loop until you reach the end of the
// array of record arrays

while($row = $result->fetch_array(MYSQLI_ASSOC))
{
    // For each record
    // retrieve a value from two fields in the record and
    // stream the data and a line break to the browser ( echo sends the data to the browser)

    echo $row['yourColumnNameTwo']." ".$row['yourColumnNameThree']."<br>";
}

// free result set
$result->free();

// close connection
$con->close();
?>
