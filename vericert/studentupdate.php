<?php
session_start();
$login_session= $_SESSION['username'];
?>
<?php
$connect= mysqli_connect("localhost", "root", "", "vericert");

$query = "SELECT image FROM students WHERE username='$login_session' ";
		$result= mysqli_query($connect, $query);
        while($row = mysqli_fetch_array($result)) 
        {
            $r= '<img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" width=80 height=80  />';
		}
	
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>studenthomeupdate</title>
    <link rel="stylesheet" href="studenthomeupdate/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="studenthomeupdate/css/styles.css">
    <link rel="stylesheet" href="studenthomeupdate/css/untitled.css">
    <link rel="stylesheet" href="studenthomeupdate/css/untitled-1.css">
    <link href="images/03.png" rel="shortcut icon" type="image/x-icon" > 
</head>

<body>
    <header>
        <div class="container" id="topcontainer"><img src="studenthomeupdate/img/headerlogo2.PNG" height="90">
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
                            <li role="presentation"><a href="studenthome.php">Home </a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <p class="text-right" id="head"> Welcome <strong> <?php echo $login_session;?> | <a href="logout.php">Log Out</a></strong></p>
        </div>
    </header>
    <div id="top"><img class="img-circle" width="80" height="80" <?php echo $r; ?> 
<section>
                        <label><a href="uploadimage.php"><b><link>Change image</link></b></a></label>
                       

                    </section>
</form></div>
    <section id="mid">
            <div class="row">
                <div class="col-md-4" id="last">
                    <div class="page-header">
                        <h3 class="text-primary bg-primary">Bio data</h3></div>
                    <form method="post">
                        <section id="bio">
                            <label>Name</label>
                            <input class="form-control input-sm" type="text" name="first" placeholder="first" required>
                            <input class="form-control input-sm" type="text" name="middle" placeholder="middle" required>
                            <input class="form-control input-sm" type="text" name="last" placeholder="last" required>
                        </section>
                        <section id="bio">
                            <label>DoB </label>
                            <input class="form-control input-sm" type="date" name="dob" placeholder="DoB" id="dob" required>
                        </section>
                        <section id="bio">
                            <label>Email </label>
                            <input class="form-control input-sm" type="email" name="email" placeholder="email" id="dob" required>
                        </section>
                         <section id="bio">
                            <label>National ID </label>
                            <input class="form-control input-sm" type="text" name="nid" placeholder="your nationa id number" id="dob" required>
                        </section>
                       
                        
                        <button class="btn btn-primary btn-sm" name="submit" type="submit">Submit </button>
                    </form>
  <?php
$first = "";
$middle = "";
$last = "";
$nid ="";
$dob = "";
$email = "";
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
	$nid = mysql_real_escape_string($_POST['nid']);
	$dob = mysql_real_escape_string($_POST['dob']);
	$email = mysql_real_escape_string($_POST['email']);
    
	


$sql ="UPDATE students SET first= '$first' ,middle='$middle', last='$last', national_id='$nid', dob='$dob', email='$email' WHERE username='$login_session'";
mysqli_query($db, $sql);



}

?>  
                </div>
                <div class="col-md-3 col-md-offset-0">
                    <div class="page-header">
                        <h3 class="text-primary bg-primary">Academic Details</h3></div>
                    <form method="post">
                        <section id="bio">
                            <label>Academic details</label>
                            <textarea class="form-control" name="academic" placeholder="enter details"></textarea>
                            <button class="btn btn-primary btn-sm" name="update" type="submit">Submit </button>
                        </section>
                    </form>
 <?php
$academic = "";

// Create connection
$db = new mysqli('localhost', 'root', '', 'vericert');

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
} 


if (isset($_POST['update']))
{
	$academic = mysql_real_escape_string($_POST['academic']);
	
    
	

$sql ="UPDATE students SET education= '$academic' WHERE username='$login_session'";
mysqli_query($db, $sql);

}

?> 
                </div>
                <div class="col-md-3 col-md-offset-0">
                    <div class="page-header">
                        <h3 class="text-primary bg-primary">Work Experiences</h3></div>
                    <form method="post">
                        <section id="bio">
                            <label>work details</label>
                            <textarea class="form-control" name="work" placeholder="enter details"></textarea>
                            <button class="btn btn-primary btn-sm" type="submit" name="insert">Submit </button>
                        </section>
                    </form>
<?php
$work = "";

// Create connection
$db = new mysqli('localhost', 'root', '', 'vericert');

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
} 


if (isset($_POST['insert']))
{
$work = mysql_real_escape_string($_POST['work']);
	
    
	

$sql ="UPDATE students SET work= '$work' WHERE username='$login_session'";
mysqli_query($db, $sql);

}

?> 
                </div>
            </div>
        </form>
    </section>
    <script src="studenthomeupdate/js/jquery.min.js"></script>
    <script src="studenthomeupdate/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>

