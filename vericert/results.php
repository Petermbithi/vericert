
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>veriFYresult</title>
    <link rel="stylesheet" href="results/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="results/css/styles.css">
    <link rel="stylesheet" href="results/css/untitled.css">
    <link rel="stylesheet" href="results/css/untitled-1.css">
    <link href="images/03.png" rel="shortcut icon" type="image/x-icon" > 
</head>

<body>
    <header>
        <div class="container" id="topcontainer"><img src="results/img/headerlogo2.PNG" height="90">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand navbar-link" href="#"> </a>
                        <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                    </div>
                    <div class="collapse navbar-collapse" id="navcol-1">
                        <ul class="nav navbar-nav">
                            <li role="presentation"><a href="#">Help </a></li>
                            <li role="presentation"><a href="#">Privacy </a></li>
                            <li role="presentation"><a href="#">Contact </a></li>
                            <li role="presentation"><a href="#">Home </a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <p class="text-right" id="head"><strong> Welcome, Guest | My Account | Log Out</strong></p>
        </div>
    </header>
    <section>
    <?php
	$r="";
	$code="";
$connect= mysqli_connect("localhost", "root", "", "vericert");
$code= mysql_real_escape_string($_POST['code']);
$query = "SELECT image FROM uploads WHERE code='$code' ";
		$result= mysqli_query($connect, $query);
        while($row = mysqli_fetch_array($result)) 
        {
            $r= '<img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" width=150 height=150  />';
		}
	
?>
<div align="center"><p><font
color="black">VERIFIED, Certificate owner is </font></p>
<div align="center"> <?php echo $r;?> </div>
<div align="center">
    <?php
$first="";
$last="";
$institution="";
$regno="";
$code="";
$r1 ="";

// Create connection
$db = new mysqli('localhost', 'root', '', 'vericert' );

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
} 

if (isset($_POST['submit']))
{
	$regno = mysql_real_escape_string($_POST['regno']);
	$code= mysql_real_escape_string($_POST['code']);
	
$query = "SELECT first,middle,last,reg_no, national_id, gender, institution, serial_no, programm, class, yog FROM uploads WHERE reg_no ='$regno' AND code ='$code'";
$result = mysqli_query($db, $query);
if(mysqli_num_rows($result)==1) {
   
 while($row = $result->fetch_assoc()) {
	 
	 echo "<p> <font color='#0000FF'>Name:</font> <font face='verdana' style='font-size:11px'>".$row["first"]. "</font>";
	 echo " <font color='#0000FF'></font> <font face='verdana' style='font-size:11px'>".$row["middle"]. "</font>";
	 echo " <font color='#0000FF'></font> <font face='verdana' style='font-size:11px'>".$row["last"]. "</font></p>";
	 echo "<p align='left'><br> <font color='#0000FF'>Registration no:</font> <font face='verdana' style='font-size:11px'>".$row["reg_no"]. "</font></P>";
	 echo "<br> <font color='#0000FF'>National id:</font> <font face='verdana' style='font-size:11px'>".$row["national_id"]. "</font>";
	 echo "<br> <font color='#0000FF'>Gender:</font> <font face='verdana' style='font-size:11px'>".$row["gender"]. "</font>";
	 echo "<br> <font color='#0000FF'>Institution:</font> <font face='verdana' style='font-size:11px'>".$row["institution"]. "</font>";
	 echo "<br> <font color='#0000FF'>Serial no:</font> <font face='verdana' style='font-size:11px'>".$row["serial_no"]. "</font>";
	 echo "<br> <font color='#0000FF'>Programm:</font> <font face='verdana' style='font-size:11px'>".$row["programm"]. "</font>";
	 echo "<br> <font color='#0000FF'>Class:</font> <font face='verdana' style='font-size:11px'>".$row["class"]. "</font>";
	 echo "<br> <font color='#0000FF'>Year of graduation:</font> <font face='verdana' style='font-size:11px'>".$row["yog"]. "</font>";

	 
    }
	
    };
} 

?>
</div></section>
    <footer>
        <div class="row">
            <div class="col-md-4 col-md-offset-6" id="footer">
                <p >Terms of Use and Privacy Policy | Contact Us </p>
                <p class="text-center"> © 2019 National Student Clearingcenter All Rights Reserved.</p>
            </div>
        </div>
    </footer>
    <script src="results/js/jquery.min.js"></script>
    <script src="results/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>