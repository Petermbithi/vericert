<?php
session_start();
$login_session= $_SESSION['username'];
?>
<div>	
<form method="POST"  enctype="multipart/form-data">
 <input type="file" name="myimage">
 <input type="submit" name="submit" value="Upload">
</form>
</div>

<?php
$host = 'localhost';
$user = 'root';
$pass = '';
if (isset($_POST['submit']))
{
mysql_connect($host, $user, $pass);

mysql_select_db('vericert');

$imagename=$_FILES["myimage"]["name"]; 

//Get the content of the image and then add slashes to it 
$imagetmp=addslashes (file_get_contents($_FILES['myimage']['tmp_name']));
$insert_image="UPDATE `vericert`.`students` SET `image` ='$imagetmp' WHERE username='$login_session' ";

mysql_query($insert_image);
	
echo "<script>alert ('Image uploaded successfuly')  
window.location.href='studentupdate.php'; </script>" ;
}

?>