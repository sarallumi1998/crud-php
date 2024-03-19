<?php
include("db.php");
$query="select * from registerform";
$res=mysqli_query($conn,$query);
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>details of my form</title>
</head>
<style>
	table,th,td{
		border: 1px solid #9E103C;
		font size:20px;
		padding:5px;
		text-align:center;
	}
	</style>
<body>
	<table>
		<tr>
            <th>Roll Number</th>
			<th>Name</th>
			<th>ADDRESS</th>
            <th>MAIL ID</th>
            <th>DOB</th>
            <th>GENDER</th>
            <th>PHONE NUMBER</th>
            <th>fileupload Images Name</th>
            <th>fileupload Images</th>
            <th> Delete Action</th>
			<th>Edit Action</th>
			</tr>
			<?php
		while($row=mysqli_fetch_array($res)){
			?>
		<tr>
			<td><?php echo $row['number']?></td>
			<td><?php echo $row['name']?></td>
			<td><?php echo $row['address']?></td>
			<td><?php echo $row['email']?></td>
			<td><?php echo $row['date']?></td>
			<td><?php echo $row['gender']?></td>
			<td><?php echo $row['phonenumber']?></td>
			<td><?php echo $row['fileToUpload']?></td>
			<td>
				<?php
				if($row["fileToUpload"]!=null){
					echo "<img style='width:70px;height=70px;'src='crudfiles/".$row["fileToUpload"]."'>";
					}
			else{
				echo"<img style='width:70px;height=70px;'src='defaultimage/No_Image_Available.jpg'>"; 
			} 
			?></td>
			
			<td><a href="delete.php?did=<?php echo $row['number']?>"><img src="defaultimage/delete.png"></a></td>
			<td><a href="edit.php?did=<?php echo $row['number']?>"><img src="defaultimage/edit.png"></a></td>	
            <?php } ?>
			</table>
</body>
</html>