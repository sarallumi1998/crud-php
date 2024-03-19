<?php
$host="localhost";
$user="root";
$pass="";
$dbname="crud";
$conn=mysqli_connect($host,$user,$pass,$dbname);

$randomimage=rand(1000,10000);
$number=$_POST["number"];
$name=$_POST["name"];
$address=$_POST["address"];
$email=$_POST["email"];
$date=$_POST["date"];
$gender=$_POST["gender"];
$phonenumber=$_POST["phonenumber"];
$target_dir = "crudfiles/";
$target_file = $target_dir.$randomimage . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
} 

    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $file_name = $randomimage.htmlspecialchars(basename($_FILES["fileToUpload"]["name"]));
    

 $sql="insert into registerform(number,name,address,email,date,gender,phonenumber,fileToUpload)values('$number','$name','$address','$email','$date','$gender','$phonenumber','$file_name')";
$res=mysqli_query($conn,$sql);
if($res)
{echo"inserted";
}
else
{
	echo"not inserted";
}
	}else {
        echo "Sorry, there was an error uploading your file.";
    }
	
mysqli_close($conn);

?>