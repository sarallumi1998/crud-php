<?php
$host="localhost";
$user="root";
$pass="";
$dbname="crud";

$conn = new mysqli($host, $user, $pass, $dbname);




$id = $_REQUEST["did"];  


$sql = "SELECT * from  registerform where number=$id";
$res=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($res)){

$number=$row["number"];
$name=$row["name"];
$address=$row["address"];
$email=$row["email"];
$date=$row["date"];
$gender=$row["gender"];
$phonenumber=$row["phonenumber"];
$fileToUpload=$row["fileToUpload"];
}
?>

<!DOCTYPE html>

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Editing CRUD Operations</title>
   
</head>
<body>
<form name="form1" method="post" enctype="multipart/form-data" action="update.php" id="form1">
	<table width="800" border="2">
    <label for="name" style="font-size:20px;"></label>
	     <input type="hidden" name='yid'id='yid' value=<?php echo $id?>>
  <tbody>
    <tr>
        <td>Roll Number</td>
        <td><label><input name="number" type="text" id="number" value="<?php echo $number; ?>"/>
            </label>&nbsp;</td>
      </tr>
   <tr>
      <td>Name</td>
      <td><label><input name="name" type="text" id="name" value="<?php echo $name; ?>"/>
		  </label>&nbsp;</td>
    </tr>
      <tr>
        <td>ADDRESS</td>
        <td><textarea name="address" cols="40" rows="4" id="address"><?php echo isset($address) ? htmlspecialchars($address) : ''; ?>
        </textarea>&nbsp;</td>
      </tr>
      <tr>
        <td>MAIL ID</td>
        <td><label><input name="email" type="email" id="email" value="<?php echo $email; ?>"/>
            </label>&nbsp;</td>
      </tr>
      <tr>
        <td>DOB</td>
        <td><label><input name="date" type="date" id="date" value="<?php echo $date; ?>"/>
            </label>&nbsp;</td>
      </tr>
      <tr>
        <td>GENDER</td>
        <td><input id="female" type="radio" name="gender"
            value="f" <?php echo($gender==="f")? "checked" : ""; ?>>
            <label for="female">Female</label>
            <input id="male" type="radio" name="gender"
            value="m" <?php echo($gender==="m")? "checked" : ""; ?>>
            <label for="male">Male</label>
            </td>
      </tr>
      <tr>
        <td>PHONE NUMBER</td>
        <td><label><input name="phonenumber" type="tel" id="phonenumber" value="<?php echo $phonenumber; ?>"/>
            </label>&nbsp;</td>
      </tr>
							 

      <td>fileupload</td>
      <td><input type="file" name="fileToUpload" id="fileToUpload">
		  
		  
		  <img src="crudfiles/<?php echo $fileToUpload; ?> " width="50">
</td>
<tr>
 <td>
    <button type="submit">Update</button>
 <button type="reset">Reset</button>
                </td>
                </tr>
				</tbody></table>
			 <input type="hidden"  name="photo" id="photo" value="<?php echo $fileToUpload?>">
            </form>


        </div>
 
     </div>
  
</body></html>





