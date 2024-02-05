<?php
session_start();
 $login_session= $_SESSION['username'];
?>

<?php 
$db = new mysqli('localhost', 'root', '', 'vericert' );

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
} 

$q=mysqli_query($db,"select * from institutions");
$r=mysqli_num_rows($q)
?>
<?php 
$db = new mysqli('localhost', 'root', '', 'vericert' );

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
} 

$q=mysqli_query($db,"select * from students");
$s=mysqli_num_rows($q)
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>organizationhome</title>
    <link rel="stylesheet" href="organisationhome/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="organisationhome/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="organisationhome/css/styles.css">
    <link rel="stylesheet" href="organisationhome/css/untitled.css">
    <link rel="stylesheet" href="organisationhome/css/untitled-1.css">
    <link href="images/03.png" rel="shortcut icon" type="image/x-icon" > 
</head>

<body>
    <header>
        <div class="container" id="topcontainer"><img src="organisationhome/img/headerlogo2.PNG" height="90">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand navbar-link" href="#"> </a>
                        <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                    </div>
                    <div class="collapse navbar-collapse" id="navcol-1">
                        <ul class="nav navbar-nav">
                            <li role="presentation"><a href="contact.php">Contact </a></li>
                            <li role="presentation"><a href="#">Privacy </a></li>
                            <li role="presentation"><a href="index.php">Home </a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <p class="text-right" id="head">Welcome <strong> <?php echo $login_session;?> | <a href="logout.php">Log out</a></strong></p>
        </div>
    </header>
    <h3>Home &gt;organisation</h3>
    <div class="row">
        <div class="col-md-4">
            <nav class="navbar navbar-default navbar-static-top" id="top">
                <div class="container-fluid">
                    <div class="navbar-header"><a class="navbar-brand navbar-link" href="#"><strong>Menu</strong> </a>
                        <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                    </div>
                    <div class="collapse navbar-collapse" id="navcol-1">
                        <ul class="nav navbar-nav navbar-right" id="dash">
                            <li role="presentation"><a href="verify.php"_blank><i class="fa fa-check"></i> <strong>Verify</strong></a></li>
                            <li role="presentation"><a href="jobupdate.php"_blank><i class="glyphicon glyphicon-plus"></i><strong>Add job</strong></a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="col-md-3"><i class="fa fa-institution"></i>
            <div>Registered Institutions = <?php echo $r;?> </div>
        </div>
        <div class="col-md-3 col-md-offset-1"><i class="fa fa-users"></i>
            <div>Total Students = <?php echo $s;?></div>
        </div>
    </div>
    <footer>
        <div class="row footer">
            <div class="col-md-3 col-md-offset-4" id="footer">
                <p>National Student Clearingcenter All Rights Reserved</p>
                <p class="text-center">&copy; <?php echo DATE("M, d, Y");?></p>
            </div>
        </div>
    </footer>
    <script src="organisationhome/js/jquery.min.js"></script>
    <script src="organisationhome/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>