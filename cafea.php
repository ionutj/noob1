<!DOCTYPE html>
<html>
<body>

<?php
$servername = "localhost";
$username = "teststation";
$password = "";
$dbname = "c9";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, Nume, Round1 FROM cafea";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<br> id: ". $row["id"]. " - ID: ". $row["Nume"]. " " . $row["Round1"] . "<br>";
     }
} else {
     echo "0 results";
}

$conn->close();
?> 

</body>
</html>