<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="login/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="login/css/styles.css">
    <link href="images/03.png" rel="shortcut icon" type="image/x-icon" > 
</head>

<body>
    <header>
        <div class="container" id="topcontainer"><img src="login/img/headerlogo2.PNG" height="90">
            <ul class="nav nav-pills">
                <li><a class="text-success bg-success" href="ulogin.php">Verify Now</a></li>
                <li><a class="text-success bg-success" href="contact.php">Contact</a></li>
                 <li><a class="text-success bg-success" href="index.php">Home</a></li>
            </ul>
        </div>
    </header>
    <section>
        <form method="post" method="<?php echo $_SERVER['PHP_SELF'];?>">
            <div class="row">
                <div class="col-md-5 col-md-offset-3">
                    <section id="form">
                        <label>Username : </label>
                        <input class="form-control input-sm" type="text" name="username" required placeholder="Username">
                    </section>
                    <section id="form">
                        <label>Password : </label>
                        <input class="form-control input-sm" type="password" name="password" required placeholder="********">
                        
                    </section>
                     
                    
                    <button class="btn btn-default" type="reset">Cancel </button>
                    <button class="btn btn-default" type="submit" name="login">Log in</button>
                    <section id="form">Not yet a Member? <a href="registeruser.php">Sign Up </a></section> 
                </div>
            
            </div>
            <?php
// Create connection
$username ="";
$password = "";

$db = new mysqli('localhost', 'root', '', 'vericert' );

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
} 
//Selects the database
/*
*/
//Lets search the databse for the user name and password
//Choose some sort of password encryption, I choose sha256
//Password function (Not In all versions of MySQL).
if(isset($_POST['login'])){
$username = mysql_real_escape_string($_POST['username']);
$password = mysql_real_escape_string($_POST['password']);
$query ="SELECT * FROM user_accounts WHERE username='$username' AND Password='$password'";
$result = mysqli_query($db, $query);
if(mysqli_num_rows($result)==1){
$_SESSION['username'] = $username;
echo "<script language= 'javascript' type='text/javascript'> location.href= 'organisationhome.php' </script>";
}
 else {
//3.1.3 If the login credentials doesn't match, he will be shown with an error message.
echo "<script>alert ('Invalid Login Credentials')  
window.location.href='ulogin.php'; </script>" ;

}
}
?>

        </form>
        
    </section>
    <footer>
        <div class="row">
            <div class="col-md-3 col-md-offset-6" id="footer">
                <p class="text-center"><img src="login/img/nsc_footer_logo.png" width="210"> </p>
                <p class="text-center">&copy; <?php echo DATE("M, d, Y h:i:s A");?> National Student Clearingcenter All Rights Reserved.</p>
            </div>
        </div>
    </footer>
    <script src="login/js/jquery.min.js"></script>
    <script src="login/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>