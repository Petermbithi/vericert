
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>veriFYresult</title>
    <link rel="stylesheet" href="vresult/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vresult/css/styles.css">
    <link rel="stylesheet" href="vresult/css/untitled.css">
    <link rel="stylesheet" href="vresult/css/untitled-1.css">
    <link href="images/03.png" rel="shortcut icon" type="image/x-icon" > 
</head>

<body>
    <header>
        <div class="container" id="topcontainer"><img src="vresult/img/headerlogo2.PNG" height="90">
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
    <div><?php echo $r;?></div>
        <div class="table-responsive">
        
            <table class="table">
                <thead>
                    <tr>
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
if(!$result) {
   echo "Wrong registration number/verification code:" .mysql_error() ;
   exit;

}
else {
 while($row = $result->fetch_assoc()) {
	 
	 $e= "".$row["first"].  "".$row["middle"].  "".$row["last"]. "";
	 $f= "".$row["reg_no"]. "";
	 $g= "".$row["national_id"]. "";
	 $h= "".$row["gender"]. "";
	 $i= "".$row["institution"]. "";
	 $j= "".$row["serial_no"]. "";
	 $k= "".$row["programm"]. "";
	 $l= "".$row["class"]. "";
	 $m= "".$row["yog"]. "";
	 
	 
	 
    }
}

} 
?>

                        <th>Certificate details</th>
                        <th>View ceritiface</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>NAME</td>
                        <td><?php echo $f;?></td>
                    </tr>
                    <tr>
                        <td><b>REGISTRATION NUMBER</b></td>
                        <td><?php echo $f;?></td>
                    </tr>
                    <tr>
                        <td><b>NATIONAL ID</b></td>
                        <td><?php echo $g;?></td>
                    </tr>
                    <tr>
                        <td><b>GENDER</b></td>
                        <td><?php echo $h;?></td>
                    </tr>
                    <tr>
                        <td><b>INSTITUTION</b></td>
                        <td><?php echo $i;?></td>
                    </tr>
                    <tr>
                        <td><b>SERIAL NUMBER</b></td>
                        <td><?php echo $j;?></td>
                    </tr>
                    <tr>
                        <td><b>PROGRAMM</b></td>
                        <td><?php echo $k;?></td>
                    </tr>
                    <tr>
                        <td><b>CLASS</b></td>
                        <td><?php echo $l;?></td>
                    </tr>
                    <tr>
                        <td><b>YEAR OF GRADUATION</b></td>
                        <td><?php echo $m;?></td>
                    </tr>
                </tbody>
            </table>
			
			
  </div>
    </section>
    <footer>
        <div class="row">
            <div class="col-md-4 col-md-offset-6" id="footer">
                <p><color="green">Terms of Use and Privacy Policy|Cotact Us</color> </p>
                <p class="text-center">©2019 National Student Clearingcenter All Rights Reserved.</p>
            </div>
        </div>
    </footer>
    <script src="vresult/js/jquery.min.js"></script>
    <script src="vresult/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
