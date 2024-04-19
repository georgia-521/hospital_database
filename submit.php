<?php
$x=$_POST ['patientname'];
$y=$_POST['patientnumber'];
$z=$_POST['patientcondition'];
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname="hospital patient database";
//create connection
$conn = new mysqli ($servername, $username, $password, $dbname);
//check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
//Inserts data into the "guestbook" table and the data into the different named column values
$sql = "INSERT INTO `guestbook` (`patientname`, `patientnumber`, `patientcondition`) VALUES ('$x', '$y', '$z')";

//Error checking incase data entered incorrectly e.g. not correct type
if ($conn->query($sql) === TRUE){
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>