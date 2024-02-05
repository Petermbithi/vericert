<?php
session_start();
 $login_session= $_SESSION['username'];
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>veriFY</title>
    <link rel="stylesheet" href="verify/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="verify/css/styles.css">
    <link rel="stylesheet" href="verify/css/untitled.css">
    <link rel="stylesheet" href="verify/css/untitled-1.css">
    <link href="images/03.png" rel="shortcut icon" type="image/x-icon" > 
</head>

<body>
    <header>
        <div class="container" id="topcontainer"><img src="verify/img/headerlogo2.PNG" height="90">
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
            <p class="text-right" id="head">Welcome <strong> <?php echo $login_session;?> | <a href="logout.php">Log out</a></strong></p>
        </div>
    </header>
    <section id="mid">
        <div class="row" id="top">
            <div class="col-md-6">
                <div>
                    <div class="page-header">
                        <h1>HOME&gt; <small>Verification Services</small></h1>
                        <p class="text-left">Select the type(s) of verification that you would like to perform and provide the requested information for the subject. Required fields are marked with an asterisk(<strong>*</strong>). </p>
                    </div>
                </div>
                <div>
                    <h1>WHATEVER you want to Verify.</h1>
                    <ul>
                        <li>Degree or School Certificate <em>(undergraduate or graduate)</em> </li>
                        <li>Dates of Attendance <em>(for someone who has NOT received a degree)</em> </li>
                        <li>Professional Certificate <em>(business or technical)</em> </li>
                        <li>Current Enrollment <em>(within the past 6 months)</em> </li>
                    </ul>
                    <h1 id="who">WHO would you like to verify?</h1></div>
                <div id="form">
                    <form method="post" action="verificationresult.php">
                    <section id="bio">
                            <label>Name</label>
                            <input class="form-control input-sm" type="text" name="first" placeholder="first" required>
                            <input class="form-control input-sm" type="text" name="last" placeholder="last" required>
                        </section>
                        <section>
                            <label>Institution:</label>
                            <select class="form-control input-sm" name="Institution" value="1" required="">
                                <option value="12" selected="">Select Institution</option>
                                <option value="13">UON</option>
                                <option value="14">JOOUST</option>
                                <option value="">KENYATTA UNIVERSITY</option>
                            </select>
                        </section>
                        <section>
                            <label>Registration number:</label>
                            <input class="form-control input-sm" type="text" name="regno" required>
                        </section>
                        <section>
                            <label>Reference code:</label>
                            <input class="form-control input-sm" type="text" name="code" required>
                        </section>
                        <button class="btn btn-primary" type="submit" name="submit">Submitt</button>
                    </form>
                </div>
            </div>
            <div class="col-md-3 col-md-offset-2">
                <div id="midcolumn">
                    <ul class="list-unstyled">
                        <li><a href="verify.php">Request a Verification</a></li>
                        <li>Terms and Conditions</li>
                        <li><a href="contact.php">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="row">
            <div class="col-md-4 col-md-offset-6" id="footer">
                <p>National Student Clearingcenter All Rights Reserved</p>
                <p class="text-center"> &copy; <?php echo DATE("M, d, Y");?> </p>
            </div>
        </div>
    </footer>
    <script src="verify/js/jquery.min.js"></script>
    <script src="verify/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>