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
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px auto;
        }

        td, th {
            padding: 10px;
            border: 1px solid #9E103C;
        }

        input[type="text"],
        input[type="email"],
        input[type="date"],
        input[type="tel"],
        textarea,
        input[type="file"] {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button[type="submit"],
        button[type="reset"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            border: none;
            color: white;
            border-radius: 4px;
            cursor: pointer;
            margin-right: 10px;
        }

        button[type="submit"]:hover,
        button[type="reset"]:hover {
            background-color: #45a049;
        }

        img {
            width: 50px;
            height: auto;
            margin-top: 5px;
        }

        @media screen and (max-width: 600px) {
            input[type="text"],
            input[type="email"],
            input[type="date"],
            input[type="tel"],
            textarea,
            input[type="file"],
            button[type="submit"],
            button[type="reset"] {
                width: 100%;
                margin: 5px 0;
            }
        }
    </style>
   
</head>
<body>
<form name="form1" method="post" enctype="multipart/form-data" action="update.php" id="form1">
	<table width="800" border="2">
    <label for="name" style="font-size:20px;"></label>
	     <input type="hidden" name='yid'id='yid' value=<?php echo $id?>>
  <tbody>
  <h1>Update Form</h1>
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





