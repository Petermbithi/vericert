<?php
session_start();
 $login_session= $_SESSION['username'];
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>studenthome</title>
    <link rel="stylesheet" href="jobs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="jobs/css/styles.css">
    <link rel="stylesheet" href="jobs/css/untitled.css">
    <link rel="stylesheet" href="jobs/css/untitled-1.css">
    <link href="images/03.png" rel="shortcut icon" type="image/x-icon" > 
</head>

<body>
    <header>
        <div class="container" id="topcontainer"><img src="jobs/img/headerlogo2.PNG" height="90">
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
            <p class="text-right" id="head">Welcome <strong> <?php echo $login_session;?> </strong>| <a href="logout.php">Log Out</a></p>
        </div>
    </header>
    <div id="top"></div>
    <section id="mid">
        <form>
            <div class="row">
                <div class="col-md-8 col-md-offset-0">
                    <div class="page-header">
                        <h3 class="text-primary bg-primary">Available Jobs</h3></div>
                        <?php
// Create connection
$db = new mysqli('localhost', 'root', '', 'vericert' );

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
} 

	
$query = "SELECT * FROM jobs ";
$result = mysqli_query($db, $query);
if($result->num_rows > 0) {
   echo "<table><tr>
   <th>Job Id</th> <th><b>Title</th> <th>Description</th> <th>Requirements</th> <th>Contacts</th></tr>";
 while($row = $result->fetch_assoc()) {
	 echo  "<tr><td>" .$row["id"].  "</td>
	 <td>" .$row["title"]. "</a></td> 
	 <td>" .$row["description"]. "</td> 
	 <td>" .$row["requirements"]. "</td> 
	 <td><a href='mailto:'>".$row["contacts"]. "</a></td> 
	  </tr>" ;
	 	

    }
	echo "</table>";
    };


?>      
            
                </div>
                <div class="col-md-4">
                    <h3 class="text-center"><strong>How to Apply</strong></h3>
                    <p class="how">Email your <strong>Registration Number</strong>, <strong>Verification Code</strong> and the your <strong>portfolio link</strong> to the email for the Job you are applying.</p>
                </div>
            </div>
        </form>
    </section>
    <footer>
        <div class="row">
            <div class="col-md-4 col-md-offset-4" id="footer">
                <p class="text-center">National Student Clearingcenter </p>
                <p class="text-center"> &copy; <?php echo DATE("M, d, Y");?></p>
            </div>
        </div>
    </footer>
    <script src="jobs/js/jquery.min.js"></script> 
    <script src="jobs/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>