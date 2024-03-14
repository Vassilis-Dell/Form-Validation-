<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDataBase";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//$sql = "SELECT firstname FROM MyGuests WHERE lastname like 'V%'";
$sql = "SELECT * FROM `MyGuests` WHERE `firstname` LIKE 'V%'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "First Name: " . "<b>".$row["Firstname"]."</b>" ." <br>". "Last Name: " ."<b>".$row["Lastname"]."</b>"."<br> "."Email: " . "<b>" . $row["Email"] ."</b>". "<br>"." Password: " ."<b>".$row["Password"]."</b>" ."<br>". "Date of Birth: " ."<b>".$row["DOB"]."</b>" ."<br>". "Country: "."<b>" .$row["Country"]."</b>" . "<br>". "Mobile Number: " ."<b>".$row["Mobile"]."</b>" . "<br>". "Gender: " ."<b>".$row["Gender"]."</b>" ."<br>". "Terms of Use, Accepted: "."<b>" . $row["Terms_of_Use"]."</b>" ."<br>";
  }
} else {
  echo "0 results";
}
echo "<br>";
//Update name='Dimitris' where id=3 from table MyGuests
$sql = "UPDATE MyGuests SET Firstname='Dimitris' WHERE id=3";

if ($conn->query($sql) === TRUE) {
echo "Record updated successfully";
} else {
echo "Error updating record: " . $conn->error;
}
echo "<br>";
//Delete from table MyGuests where id=5
$sql = "DELETE FROM MyGuests WHERE id=5";
echo "<br>";
if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>