<?php

session_start();
if (!($_SESSION['username'])) {
	echo "<script>alert ('Permission denied please login first')  
window.location.href='slogin.php'; </script>" ;
exit();
}
else {
 $login_session= $_SESSION['username'];
}
?>


<?php
$connect= mysqli_connect("localhost", "root", "", "vericert");

$query = "SELECT image FROM students WHERE username='$login_session' ";
		$result= mysqli_query($connect, $query);
        while($row = mysqli_fetch_array($result)) 
        {
            $r= '<img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" width=90 height=90  />';
		}
	
?>

<?php
$connect= mysqli_connect("localhost", "root", "", "vericert");

$query = "SELECT national_id FROM students WHERE username='$login_session' ";
		$result= mysqli_query($connect, $query);
        while($row = mysqli_fetch_array($result)) 
        {
           $r1 = $row["national_id"];
		}
	
?>

<?php
$randomString="";
// Create connection
$sql = new mysqli("localhost", "root", "", "vericert");
// Check connection
if (!$sql) {
    die("Could not connect: " . mysql_error());} 


if (isset($_POST['book']))
{
$length = 10;
$randomString = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
$result = "UPDATE  `vericert`.`uploads` SET  `code` =  '$randomString' WHERE  `uploads`.`national_id` =$r1;";
mysqli_query($sql, $result);

if (!$result) {
    die("Could not load. " . mysql_error());
}

}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>studenthome</title>
    <link rel="stylesheet" href="studenthome/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="studenthome/css/styles.css">
    <link rel="stylesheet" href="studenthome/css/untitled.css">
    <link rel="stylesheet" href="studenthome/css/untitled-1.css">
    <link href="images/03.png" rel="shortcut icon" type="image/x-icon" >
</head>

<body>
    <header>
        <div class="container" id="topcontainer"><img src="studenthome/img/headerlogo2.PNG" height="90">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand navbar-link" href="#"> </a>
                        <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                    </div>
                    <div class="collapse navbar-collapse" id="navcol-1">
                        <ul class="nav navbar-nav">
                            <li role="presentation"><a href="jobs.php">Jobs</a></li>
                            <li role="presentation"><a href="contact.php">Contact </a></li>
                            <li role="presentation"><a href="index.php">Home </a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <p class="text-right" id="head"> Welcome <strong> <?php echo $login_session;?> | <a href="logout.php">Log Out</a></strong></p>
        </div>
    </header>
    <div id="top"><img class="img-circle" width="80" height="80" <?php echo $r; ?>
    
    </div>
    <section id="mid">
        <form>
            <div class="row">
                <div class="col-md-3" id="last">
                    <div class="page-header">
                        <h3 class="text-primary bg-primary">Bio data</h3></div>
 <p id="middle"> 

 <?php

// Create connection
$db = new mysqli('localhost', 'root', '', 'vericert' );

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
} 


	
$query = "SELECT first,middle,last,dob,email FROM students WHERE username='$login_session'";
$result = mysqli_query($db, $query);
if(mysqli_num_rows($result)==1) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
       echo "<br> Names: ". $row["first"]. $row["middle"]. $row["last"]." <br> Date of birth ".$row["dob"]." <br> Email:".$row["email"].   "<br>";
    };
} 

?></p>
                </div>
                <div class="col-md-5 col-md-offset-0">
                    <div class="page-header">
                        <h3 class="text-primary bg-primary">Academic Details</h3></div>
  <p>
  
 
<?php

	
	$query = "SELECT education FROM students WHERE username='$login_session'";
$result = mysqli_query($db, $query);
if(mysqli_num_rows($result)==1) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
        echo "<br>  ". $row["education"].  "<br>";
    };
} 

?> </p>
                </div>
                
                <div class="col-md-3 col-md-offset-0">
                
                    <div class="page-header">
                        <h3 class="text-primary bg-primary">Work Experiences</h3></div>
                        <p>

   <?php
	$query = "SELECT work FROM students WHERE username='$login_session'";
$result = mysqli_query($db, $query);
if(mysqli_num_rows($result)==1) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
        echo "<br>  ". $row["work"].  "<br>";
    };
} 

?>
</p>
                </div>
                
                <div class="col-md-12"></div>
                <div class="col-md-12"><a class="btn btn-default" role="button" href="studentupdate.php">Update Your Details</a></div>
            </div>
        </form>
    </section>
    <form method="post" action="">
    <section id="lower">
        <h3><strong>Verification Code </strong></h3>
        <p id="code"> <strong>DISCLAIMER</strong> :<em><span style="text-decoration: underline;"> DO NOT SHARE THIS CODE WITH ANYONE. IT CAN BE USED TO VIEW YOUR ACADEMIC CERTIFICATE WITHOUT YOUR CONSENT</span></em></p>
        <button class="btn btn-primary" type="book" name="book">Get code</button>
        </section>    
    <p align="center">Code is: <b> <?php echo $randomString;?></b> </p>  
    </form>
    <script src="studenthome/js/jquery.min.js"></script>
    <script src="studenthome/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>

