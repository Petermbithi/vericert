<?php
session_start();
 $login_session= $_SESSION['username'];
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jobupdate</title>
    <link rel="stylesheet" href="jobupdate/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="jobupdate/css/styles.css">
    <link rel="stylesheet" href="jobupdate/css/untitled.css">
    <link rel="stylesheet" href="jobupdate/css/untitled-1.css">
    <link href="images/03.png" rel="shortcut icon" type="image/x-icon" > 
</head>

<body>
    <header>
        <div class="container" id="topcontainer"><img src="jobupdate/img/headerlogo2.PNG" height="90">
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
                            <li role="presentation"><a href="organisationhome.php">Home </a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <p class="text-right" id="head">Welcome <strong> <?php echo $login_session;?> | <a href="logout.php">Log out</a></strong></p>
        </div>
    </header>
    <section id="mid">
        <form method="post">
            <div class="row">
                <div class="col-md-3" id="last">
                    <div class="page-header">
                        <h3 class="text-primary bg-primary">Job title</h3></div>
                    <section id="bio">
                        <label>Title </label>
                        <input class="form-control input-sm" type="text"  placeholder="job title" id="dob" name="title" required>
                    </section>
                </div>
               <div class="col-md-3 col-md-offset-0">
                    <div class="page-header">
                        <h3 class="text-primary bg-primary">Job description</h3></div>
                    <textarea class="form-control" placeholder="Short  job description" name="description"></textarea>
                </div>
                <div class="col-md-3 col-md-offset-0">
                    <div class="page-header">
                        <h3 class="text-primary bg-primary">Requirements </h3></div>
                    <textarea class="form-control" placeholder="job requirements" name="requirements"></textarea>
                </div>
                <div class="col-md-3 col-md-offset-0">
                    <div class="page-header">
                        <h3 class="text-primary bg-primary">Contacts </h3></div>
                    <textarea class="form-control" placeholder="your contacts" name="contact" required></textarea>
                </div>
            </div>
            <button class="btn btn-primary btn-sm" type="submit" name="submit">Submit </button>
        </form>
        <?php
$title = "";
$description = "";
$requirements = "";
$contact = "";
// Create connection
$db = new mysqli('localhost', 'root', '', 'vericert');

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
} 


if (isset($_POST['submit']))
{
	$title = mysql_real_escape_string($_POST['title']);
	$description = mysql_real_escape_string($_POST['description']);
	$requirements = mysql_real_escape_string($_POST['requirements']);
	$contact = mysql_real_escape_string($_POST['contact']);
	
	
$sql ="INSERT INTO jobs (title, description, requirements, contacts)
VALUES('$title', '$description', '$requirements', '$contact')";
mysqli_query($db, $sql);
}
?>
    </section>
    <footer>
        <div class="row">
            <div class="col-md-4 col-md-offset-4" id="footer">
                <p class="text-center">National Student Clearingcenter</p>
                <p class="text-center">&copy; <?php echo DATE("M, d, Y");?> </p>
            </div>
        </div>
    </footer>
    <script src="jobupdate/js/jquery.min.js"></script>
    <script src="jobupdate/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
