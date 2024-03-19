<?php
include("db.php");

$id = $_POST['yid'];
$number = $_POST["number"];
$name = $_POST["name"];
$address = $_POST["address"];
$email = $_POST["email"];
$date = $_POST["date"];
$gender = $_POST["gender"];
$phonenumber = $_POST["phonenumber"];


if ($_FILES["fileToUpload"]["name"] != '') {
    
    $randomimage = rand(1000, 10000);
    $filename = $randomimage . $_FILES["fileToUpload"]["name"];
    $path = 'crudfiles/';
    $location = $path . $filename;

   
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $location)) {
        
        $oldFilename = $_POST["photo"];
        $pathToDelete = 'crudfiles/' . $oldFilename;

        if (file_exists($pathToDelete)) {
            unlink($pathToDelete);
        }

     
        $sql = "UPDATE registerform SET fileToUpload='$filename' WHERE number='$id'";
        $res = mysqli_query($conn, $sql);

        if (!$res) {
            echo "Error updating filename in the database: " . mysqli_error($conn);
            exit();
        }
    } else {
        echo "Error uploading new file.";
        exit();
    }
}


$sql = "UPDATE registerform SET number='$number', name='$name', address='$address', email='$email', date='$date', gender='$gender', phonenumber ='$phonenumber' WHERE number='$id'";
$res = mysqli_query($conn, $sql);

if ($res) {
    echo "Record updated successfully.";
} else {
    echo "Error updating record: " . mysqli_error($conn);
    exit();
}

header("Location: view.php");
?>
