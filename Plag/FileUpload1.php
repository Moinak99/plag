<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
</head>
<body>
 
<form method="post" enctype="multipart/form-data">
    <label>Subject Name</label>
	<input type="text" name="Subject_name">
	<label>Topic Name</label>
    <input type="text" name="Topic_name">
	<label>Paste Your Assignment Here:</label>
    <input type="text" name="Assignment">
	
    
    <input type="submit" name="submit">
 
 
</form>
 
</body>
</html>
 
<?php 
$localhost = "localhost"; 
$dbusername = "root"; 
$dbpassword = ""; 
$dbname = "gmit";  
 
#connection string
$conn = mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);
 
if (isset($_POST["submit"]))
 {
     #retrieve file title
        $Subject_name = $_POST["Subject_name"];
		 $Topic_name = $_POST["Topic_name"];
		  
		    $Assignment = $_POST["Assignment"];
     
    
     #sql query to insert into database
    $sql = "INSERT into teacher(Subject_name,Topic_name,Assignment) VALUES('$Subject_name','$Topic_name','$Assignment')";
 
    if(mysqli_query($conn,$sql)){
 
    echo "GTFO";
    }
    else{
        echo "MAD uSER";
    }
}
 
 
?>