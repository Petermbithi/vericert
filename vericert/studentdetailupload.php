<?php
session_start();
 $login_session= $_SESSION['username'];
?>

<?php
$first = "";
$middle = "";
$last ="";
$regno = "";
$nationalid = "";
$gender = "";
$institution = "";
$serialno = "";
$programm = "";
$class = "";
$yog = "";

// Create connection
$db = new mysqli('localhost', 'root', '', 'vericert');

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
} 


if (isset($_POST['submit']))
{
	$first = mysql_real_escape_string($_POST['first']);
	$middle = mysql_real_escape_string($_POST['middle']);
	$last = mysql_real_escape_string($_POST['last']);
	$regno = mysql_real_escape_string($_POST['regno']);
	$nationalid = mysql_real_escape_string($_POST['nationalid']);
    $gender = mysql_real_escape_string($_POST['gender']);
	$institution = mysql_real_escape_string($_POST['institution']);
    $serialno = mysql_real_escape_string($_POST['serialno']);
	$programm = mysql_real_escape_string($_POST['programm']);
    $class = mysql_real_escape_string($_POST['class']);
    $yog = mysql_real_escape_string($_POST['yog']);

}

?>

<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$myimage= "";

mysql_connect($host, $user, $pass);

mysql_select_db('vericert');
if (isset($_POST['submit']))
{

$imagename=$_FILES["myimage"]["name"]; 

//Get the content of the image and then add slashes to it 
$imagetmp=addslashes (file_get_contents($_FILES['myimage']['tmp_name']));

//Insert the image name and image content in image_table
$insert_image="INSERT INTO uploads (first, middle, last, reg_no, national_id, gender, institution, serial_no, programm, class, yog, image) VALUES ('$first', '$middle', '$last', '$regno', $nationalid, '$gender', '$institution', '$serialno', '$programm', '$class', '$yog','$imagetmp')";

mysql_query($insert_image);
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>institutiondetailupdate</title>
    <link rel="stylesheet" href="instupdatestudent/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="instupdatestudent/css/styles.css">
    <link rel="stylesheet" href="instupdatestudent/css/untitled.css">
    <link rel="stylesheet" href="instupdatestudent/css/untitled-1.css">
    <link href="images/03.png" rel="shortcut icon" type="image/x-icon" > 
</head>

<body>
    <header>
        <div class="container" id="topcontainer"><img src="instupdatestudent/img/headerlogo2.PNG" height="90">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand navbar-link" href="#"> </a>
                        <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                    </div>
                    <div class="collapse navbar-collapse" id="navcol-1">
                        <ul class="nav navbar-nav">
                            
                            <li role="presentation"><a href="#">Privacy </a></li>
                            <li role="presentation"><a href="contact.php">Contact </a></li>
                            <li role="presentation"><a href="institutionupdate.php">Home </a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <p class="text-right" id="head">Welcome <strong> <?php echo $login_session;?> | <a href="logout.php">Log out</a></strong></p>
        </div>
    </header>
    <section id="mid">
        <form method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-4" id="last">
                    <div class="page-header">
                        <h3 class="text-primary bg-primary">Personal Details</h3></div>
                    <section id="bio">
                        <label>Name</label>
                        <input class="form-control input-sm" type="text" name="first" placeholder="first">
                        <input class="form-control input-sm" type="text" name="middle" placeholder="middle">
                        <input class="form-control input-sm" type="text" name="last" placeholder="last">
                   </section>
                    <section id="bio">
                        <label>Reg No</label>
                        <input class="form-control input-sm" type="text" name="regno" placeholder="Registration number" id="dob">
                    </section>
                    <section id="bio">
                        <label>National id</label>
                        <input class="form-control input-sm" type="text" name="nationalid" placeholder="national id" id="dob">
                    </section>
                    <section id="bio">
                        <label>Gender </label>
                        <input class="form-control input-sm" type="text" name="gender" placeholder="gender" id="dob">
                    </section>
                </div>
                <div class="col-md-4 col-md-offset-0">
                    <div class="page-header">
                        <h3 class="text-primary bg-primary">General information</h3></div>
                    <section id="bio">
                        <label>Institution </label>
                        <input class="form-control input-sm" type="text" name="institution" placeholder="Institution name" id="dob">
                    </section>
                    <section id="bio">
                        <label>Serial number </label>
                        <input class="form-control input-sm" type="text" name="serialno" placeholder="Serial number" id="dob">
                    </section>
                    <section id="bio">
                        <label>Programm </label>
                        <input class="form-control input-sm" type="text" name="programm" placeholder="program" id="dob">
                    </section>
                    <section id="bio">
                        <label>Class </label>
                        <input class="form-control input-sm" type="text" name="class" placeholder="class of certificate" id="dob">
                    </section>
                    <section id="bio">
                        <label>YOG </label>
                        <input class="form-control input-sm" type="number" name="yog" placeholder="Year of graduation" id="dob">
                    </section>
                </div>
                <div class="col-md-4 col-md-offset-0">
                          <div class="page-header">
                        <h3 class="text-primary bg-primary">File Uploads</h3></div>
                    <section id="bio">
                     <label>Certficate </label>
                        <input type="file" name="myimage">
                     
                       
</section>
                </div>
            </div>
            <button class="btn btn-primary btn-sm" name="submit" type="submit" > Submit </button>
        </form>
    </section>
    <footer>
        <div class="row">
            <div class="col-md-4 col-md-offset-4" id="footer">
                <p class="text-center">National Student Clearingcenter</p>
                <p class="text-center">&copy; <?php echo DATE("M, d, Y");?>  </p>
            </div>
        </div>
    </footer>
    <script src="instupdatestudent/js/jquery.min.js"></script>
    <script src="instupdatestudent/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>