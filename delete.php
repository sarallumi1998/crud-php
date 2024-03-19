<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "crud";


$conn = new mysqli($host, $user, $pass, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$id = $_REQUEST["did"]; 


$sql = "SELECT fileToUpload FROM registerform WHERE number=$id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $filename = $row["fileToUpload"];

    
    $fileToDelete = "crudfiles/" . $filename;
    
    if (unlink($fileToDelete)) {
       
        $sql = "DELETE FROM registerform WHERE number=$id";
        if ($conn->query($sql) === TRUE) {
            echo "Record deleted successfully.";
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    } else {
        echo "Error deleting file.";
    }
} else {
    echo "Record not found in the database.";
}
header("Location:view.php");

$conn->close();
?>
