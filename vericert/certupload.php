<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>certificateupload</title>
    <link rel="stylesheet" href="certupload/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="certupload/css/styles.css">
    <link rel="stylesheet" href="certupload/css/untitled.css">
    <link rel="stylesheet" href="certupload/css/untitled-1.css">
    <link href="images/03.png" rel="shortcut icon" type="image/x-icon" > 
</head>

<body>
    <header>
        <div class="container" id="topcontainer"><img src="assets/img/headerlogo2.PNG" height="90">
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
    <section id="mid">
        <h1>Certificate Upload</h1>
        <form>
            <div class="row">
                <div class="col-md-5">
                    <div class="page-header">
                        <h3 class="text-primary bg-primary">Personal Details</h3></div>
                    <section>
                        <label>Student Name:</label>
                        <input class="form-control input-sm" type="text" required placeholder="last" id="name">
                        <input class="form-control input-sm" type="text" required placeholder="middle" id="name">
                        <input class="form-control input-sm" type="text" required placeholder="first" id="name">
                    </section>
                    <section>
                        <label>Gender:</label>
                        <select class="form-control">
                            <option value="13">Female</option>
                            <option value="12" selected="">Male</option>
                        </select>
                    </section>
                    <section>
                        <label>Reg no:</label>
                        <input class="form-control input-sm" type="text" required>
                    </section>
                    <section>
                        <label>Photo:</label>
                        <input type="file" accept="image/*">
                    </section>
                </div>
                <div class="col-md-5">
                    <div class="page-header">
                        <h3 class="text-primary bg-primary">General Information</h3></div>
                    <section>
                        <label>Institution:</label>
                        <input class="form-control input-sm" type="text" required>
                    </section>
                    <section>
                        <label>Serial no:</label>
                        <input class="form-control input-sm" type="text" required>
                    </section>
                    <section>
                        <label>Programm:</label>
                        <input class="form-control input-sm" type="text" required>
                    </section>
                    <section>
                        <label>Class:</label>
                        <input class="form-control input-sm" type="text" required>
                    </section>
                    <section>
                        <label>YOG:</label>
                        <input class="form-control input-sm" type="text" required>
                    </section>
                    <section>
                        <label>Certificate:</label>
                        <input type="file">
                    </section>
                </div>
            </div>
            <button class="btn btn-primary" type="reset">Cancel </button>
            <button class="btn btn-primary" type="submit">Submit </button>
        </form>
    </section>
    <footer>
        <div class="row">
            <div class="col-md-4 col-md-offset-6" id="footer">
                <p>Terms of Use and Privacy Policy|Cotact Us</p>
                <p class="text-center">©2019 National Student Clearingcenter All Rights Reserved.</p>
            </div>
        </div>
    </footer>
    <script src="certupload/js/jquery.min.js"></script>
    <script src="certupload/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>