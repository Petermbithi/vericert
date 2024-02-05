<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registerinstitution</title>
    <link rel="stylesheet" href="register/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="register/css/styles.css">
    <link rel="stylesheet" href="register/css/untitled.css">
    <link rel="stylesheet" href="register/css/untitled-1.css">
    <link href="images/03.png" rel="shortcut icon" type="image/x-icon" > 
</head>

<body>
    <header>
        <div class="container" id="topcontainer"><img src="register/img/headerlogo2.PNG" height="90">
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
                            <li role="presentation"><a href="index.php">Home </a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <p class="text-right" id="head"><strong> Welcome | Guest</strong></p>
        </div>
    </header>
    <section id="mid">
        <h1>Register Institution</h1>
        <form method="post">
            <div class="row">
                <div class="col-md-5">
                    <div class="page-header">
                        <h3 class="text-primary bg-primary">General Information<small> </small></h3></div>
                    <section>
                        <label>Institution name:</label>
                        <input class="form-control input-sm" type="text" name="name" required>
                    </section>
                    <section>
                        <label>Phone Number:</label>
                        <input class="form-control input-sm" type="text" name="phone" required>
                    </section>
                    <section>
                        <label>Contact Address:</label>
                        <input class="form-control input-sm" name="address" type="text" required>
                    </section>
                    <section>
                        <label>Email:</label>
                        <input class="form-control input-sm" name="email" type="email" required>
                    </section>
                </div>
                <div class="col-md-5">
                    <div class="page-header">
                        <h3 class="text-primary bg-primary">Login Details</h3></div>
                    <section>
                        <label>UserName:</label>
                        <input class="form-control input-sm" name="username" type="text" required>
                    </section>
                    <section>
                        <label>Password:</label>
                        <input class="form-control input-sm" name="pass" type="password">
                    </section>
                    <section>
                        <label>Re-enter Password:</label>
                        <input class="form-control input-sm" name="conpass" type="password">
                    </section
                ></div>
            </div>
            <button class="btn btn-primary" type="reset">Cancel </button>
            <button class="btn btn-primary" name="submit" type="submit">Submit </button>
        </form>
        
<?php
$name = "";
$phone = "";
$address ="";
$email = "";
$username = "";
$pass = "";
$conpass = "";
// Create connection
$db = new mysqli('localhost', 'root', '', 'vericert');

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
} 


if (isset($_POST['submit']))
{
	$name = mysql_real_escape_string($_POST['name']);
	$phone = mysql_real_escape_string($_POST['phone']);
	$address = mysql_real_escape_string($_POST['address']);
	$email = mysql_real_escape_string($_POST['email']);
	$username = mysql_real_escape_string($_POST['username']);
    $pass = mysql_real_escape_string($_POST['pass']);
    $conpass = mysql_real_escape_string($_POST['conpass']);
	
$sql ="INSERT INTO institutions (name, phone, address, email, username, password, conpass) 
VALUES('$name', '$phone', '$address', '$email', '$username', '$pass', '$conpass')";
mysqli_query($db, $sql);


header('location:login.php');
}

?> 
    </section>
    <footer>
        <div class="row">
            <div class="col-md-4 col-md-offset-6" id="footer">
                <p>Terms of Use and Privacy Policy | <a href="contact.php"> Contact Us </a></p>
                <p class="text-center"> &copy; <?php echo DATE("M, d, Y");?> National Student Clearingcenter All Rights Reserved.</p>
            </div>
        </div>
    </footer>
    <script src="register/js/jquery.min.js"></script>
    <script src="register/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>