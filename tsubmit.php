<?php
// getting all values from the html form

if(isset($_POST['submit'])){
    $incident = $_POST['incidentType'];
    $description = $_POST['description'];
    $location = $_POST['location'];

}
// database details
$host = "localhost";
$username = "root";
$password = "";
$dbname = "safecampus";

// creating a connection
$con = mysqli_connect($host, $username, $password, $dbname);

// ensure connectionis made
if (!$con){
    die("connection failed!" > mysqli_connect_error());
}

// using sql to create a data entry query
$sql = "INSERT INTO safety (Incident, Description, location) values('$incident', '$description', '$location')";

// send query to the database to add values and confirm if successful
$rs = mysqli_connect($con, $sql)
if($rs)
{
    echo "Entries added!";
}
// close connection
mysqli_close($con)