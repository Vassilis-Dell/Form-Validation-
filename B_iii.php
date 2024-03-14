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

$sql1 = "INSERT INTO MyGuests (Firstname, Lastname, Email, Password, DOB, Country, Mobile, Gender, Terms_of_Use)
VALUES ('George', 'Fragulis', 'georgefragulis@gmail.com', 'fragulis1925', '1975-07-19', 'Greece', '+306975987664', 'Male', 'yes')";

$sql2 = "INSERT INTO MyGuests (Firstname, Lastname, Email, Password, DOB, Country, Mobile, Gender, Terms_of_Use)
VALUES ('Vasilis', 'Dellopoulos', 'vasilis13@outlook.com', 'vasilis1386@D', '1986-01-29', 'Greece', '+306985850994', 'Male', 'yes')";

$sql3 = "INSERT INTO MyGuests (Firstname, Lastname, Email, Password, DOB, Country, Mobile, Gender, Terms_of_Use)
VALUES ('Jim', 'Pliatsios', 'jimplia13@outlook.com', 'Jim&Pl88ia!@$', '1985-05-24', 'Greece', '+306984978654', 'Male', 'yes')";

$sql4 = "INSERT INTO MyGuests (Firstname, Lastname, Email, Password, DOB, Country, Mobile, Gender, Terms_of_Use)
VALUES ('Xaroula', 'Xaralampous', 'xara1985@outlook.com', 'Xaxa@2005#ePiC!', '1989-02-24', 'Greece', '+306986848764', 'Female', 'yes')";

$sql5 = "INSERT INTO MyGuests (Firstname, Lastname, Email, Password, DOB, Country, Mobile, Gender, Terms_of_Use)
VALUES ('Themis', 'Mpasdekis', 'themismpa@yahoo.com', 'Th3m1SMp@sd3k1$', '1980-09-12', 'Greece', '+306984978654', 'Male', 'yes')";

// Execute each INSERT statement separately
if ($conn->query($sql1) === TRUE &&
    $conn->query($sql2) === TRUE &&
    $conn->query($sql3) === TRUE &&
    $conn->query($sql4) === TRUE &&
    $conn->query($sql5) === TRUE) {
  echo "New records created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>