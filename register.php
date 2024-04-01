<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>CRUD OPERATIONS</title>
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
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #9E103C;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #9E103C;
            color: white;
        }

        img {
            max-width: 100px;
            height: auto;
        }

        @media screen and (max-width: 600px) {
                       table {
                overflow-x: auto;
            }
            input[type="text"],
            input[type="email"],
            input[type="date"],
            input[type="tel"],
            textarea {
                width: calc(100% - 20px);
            }
        }
    </style>
    </style>
</head>

<body>
    
        <h1>Create Form</h1>
        <form name="form1" method="post" enctype="multipart/form-data" action="crudform.php" id="form1" onsubmit="return validateForm()">
            <table border="0">
                <tr>
                    <td>Roll Number</td>
                    <td><input name="number" type="text" id="number" /></td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td><input name="name" type="text" id="name" /></td>
                </tr>
                <tr>
                    <td>ADDRESS</td>
                    <td><textarea name="address" id="address" rows="4"></textarea></td>
                </tr>
                <tr>
                    <td>MAIL ID</td>
                    <td><input name="email" type="email" id="email" /></td>
                </tr>
                <tr>
                    <td>DOB</td>
                    <td><input name="date" type="date" id="date" /></td>
                </tr>
                <tr>
                    <td>GENDER</td>
                    <td>
                        <input id="female" type="radio" name="gender" value="f">
                        <label for="female">Female</label>
                        <input id="male" type="radio" name="gender" value="m">
                        <label for="male">Male</label>
                    </td>
                </tr>
                <tr>
                    <td>PHONE NUMBER</td>
                    <td><input name="phonenumber" type="tel" id="phonenumber" /></td>
                </tr>
                <tr>
                    <td>File Upload</td>
                    <td><input type="file" name="fileToUpload" id="fileToUpload"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button type="submit">Submit</button>
                        <button type="reset">Reset</button>
                    </td>
                </tr>
            </table>
        </form>
        
        <h1>Details of my form</h1>
        <table>
            <tr>
                <th>Roll Number</th>
                <th>Name</th>
                <th>ADDRESS</th>
                <th>MAIL ID</th>
                <th>DOB</th>
                <th>GENDER</th>
                <th>PHONE NUMBER</th>
                <th>File Upload Images Name</th>
                <th>File Upload Images</th>
                <th>Delete Action</th>
                <th>Edit Action</th>
            </tr>
            <?php
            include("db.php");
            $query = "SELECT * FROM registerform";
            $res = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_array($res)) {
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
                    if ($row["fileToUpload"] != null) {
                        echo "<img src='crudfiles/".$row["fileToUpload"]."'>";
                    } else {
                        echo "<img src='defaultimage/No_Image_Available.jpg'>";
                    }
                    ?>
                </td>
                <td><a href="delete.php?did=<?php echo $row['number']?>"><img src="defaultimage/delete.png"></a></td>
                <td><a href="edit.php?did=<?php echo $row['number']?>"><img src="defaultimage/edit.png"></a></td>
            </tr>
            <?php } ?>
        </table>
    

    <script>
        function validateForm() {
            var number = document.forms["form1"]["number"].value;
            var name = document.forms["form1"]["name"].value;
            var address = document.forms["form1"]["address"].value;
            var email = document.forms["form1"]["email"].value;
            var date = document.forms["form1"]["date"].value;
            var gender = document.querySelector('input[name="gender"]:checked');
            var phonenumber = document.forms["form1"]["phonenumber"].value;
            var fileToUpload = document.forms["form1"]["fileToUpload"].value;

            if (number == "" || name == "" || address == "" || email == "" || date == "" || !gender || phonenumber == "" || fileToUpload == "") {
                alert("All fields must be filled out");
                return false;
            }
            return true;
        }
    </script>
</body>
</html>
