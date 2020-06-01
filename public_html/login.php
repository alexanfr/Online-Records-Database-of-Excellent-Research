<?php
session_start();
$_SESSION['logged_in'] = 'active';
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Account Login</title>
        <link rel="apple-touch-icon-precomposed" sizes="57x57" href="apple-touch-icon-57x57.png" />
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-114x114.png" />
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-72x72.png" />
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="apple-touch-icon-144x144.png" />
        <link rel="apple-touch-icon-precomposed" sizes="60x60" href="apple-touch-icon-60x60.png" />
        <link rel="apple-touch-icon-precomposed" sizes="120x120" href="apple-touch-icon-120x120.png" />
        <link rel="apple-touch-icon-precomposed" sizes="76x76" href="apple-touch-icon-76x76.png" />
        <link rel="apple-touch-icon-precomposed" sizes="152x152" href="apple-touch-icon-152x152.png" />
        <link rel="icon" type="image/png" href="favicon-196x196.png" sizes="196x196" />
        <link rel="icon" type="image/png" href="favicon-96x96.png" sizes="96x96" />
        <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
        <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
        <link rel="icon" type="image/png" href="favicon-128.png" sizes="128x128" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
        <style>
            .login-button {
                padding: 10px 26px !important;
                text-align: center !important;
                border-radius: 8px !important;
                width: 90% !important;
                font-size: 15px !important;
                margin: 0px 10px 0px 10px !important;
            }
            .back-button {
                padding: 10px 26px !important;
                text-align: center !important;
                border-radius: 8px !important;
                width: 90% !important;
                font-size: 15px !important;
                color: #000000 !important;
                background-color: #a2a2a2 !important;
                border: none;
                margin: 0px 10px 0px 10px;
            }

            .text-footer {
                color: #ffffff !important;
            }      
            .row-container{
                display: flex;
                flex-direction: row;     /* make main axis horizontal (default setting) */
                justify-content: center; /* center items horizontally, in this case */
                align-items: center;     /* center items vertically, in this case */
            }
            .mx-8 {
                margin-left: 30%;
                margin-right: 20%;
            }
            .btn3 {
                padding: 14px 40px !important;
                text-align: center !important;
                border-radius: 10px !important;
                width: 50% !important;
                color: #212429 !important;
            }
            .login, .image {
                min-height: 100vh;
            }
            .bg-image {
                background-image: url("./img/order-bg.png");
                background-size: cover;
                background-repeat: no-repeat;
                background-position: left center;
            }
            .background {
                background-color: #212429;
            }

            .respond-div {
                width: 960px;
                position: relative;
                margin: 0 auto;
                line-height: 1.4em;
            }
            .container-fluid {
                padding-left: 0% !important;
                padding-right: 0% !important;
            }
        </style>
    </head>
    <body>
        <div id="layoutAuthentication" class="background">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container-fluid">
                        <div class="row no-gutters">
                            <div class="d-none d-md-flex col-md-4 col-lg-8 bg-image"></div>
                            <div class="col-md-8 col-lg-4">
                                <div class="login d-flex align-items-center py-5">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-9 col-lg-8">
                                                <div align="center">
                                                    <img src = "./img/ust-logo.png" height="90" width="90">
                                                    <img src = "./img/ust-med.png" height="90" width="90">
                                                </div>
                                                <br>
                                                <h2 class="text-center display-4" style="color: white;"> Login</h2>
                                                <h5 class="text-center font-weight-light my-4" style="color: white;">
                                                    Enter your account credentials
                                                </h5>
                                                <div class="card-body ">
                                                    <form method="post">
                                                        <div class="form-group"><label class="small mb-1" for="inputEmailAddress" style="color: white;">Email</label><input class="form-control" name="inputEmailAddress" type="email" placeholder="Enter your email address" /></div>
                                                        <div class="form-group"><label class="small mb-1" for="inputPassword" style="color: white;">Password</label><input class="form-control"  name="inputPassword" type="password" placeholder="Enter your password" /></div>
                                                        <div class="form-group">
                                                            <div class="row-container">
                                                                <div class="col-md-auto">
                                                                    <div align="center"> <a href = "index.php">
                                                                            <button type="button" class="back-button" name="returnbutton" value="Back">Back</button> </a> </div>
                                                                </div>
                                                                <div class="col-md-auto">
                                                                    <div align="center"><input type="submit" name="submit1" value="Login" class="login-button"></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <?php
                                                        if (isset($_POST['submit1'])) {
                                                            if ($_SESSION['rolee'] == "Student") {
                                                                $lib = mysqli_connect("shareddb-u.hosting.stackcp.net", "ordersystem-3133336f8c", "qwerty123", "ordersystem-3133336f8c"); //very popular way to connect to mysqli_connect... i means to improve 
                                                                if (mysqli_connect_error()) {
                                                                    die("connection to database was failed");
                                                                } else {
                                                                    $_SESSION['inputEmailAddress'] = $_POST['inputEmailAddress'];
                                                                    $_SESSION['inputPassword'] = $_POST['inputPassword'];
                                                                    $query1 = "SELECT * FROM studentaccounts WHERE Email='" . $_SESSION['inputEmailAddress'] . "'";
                                                                    $result = mysqli_query($lib, $query1);
                                                                    if ($_SESSION['inputEmailAddress'] == null && $_SESSION['inputPassword'] == null) {
                                                                        echo "<p align='center'><font color = '#fc1616'> No Entry </font> </p>";
                                                                    } else {
                                                                        if (mysqli_num_rows($result) > 0) {
                                                                            while ($confirm = mysqli_fetch_array($result)) {
                                                                                if ($confirm['AccountStatus'] == "Active") {
                                                                                    if (md5($_SESSION['inputPassword']) == $confirm['Password']) {
                                                                                        $_SESSION['firstname'] = $confirm['FirstName'];
                                                                                        $_SESSION['lastname'] = $confirm['LastName'];
                                                                                        $_SESSION['password'] = $confirm['Password'];
                                                                                        $_SESSION['Email'] = $_SESSION['inputEmailAddress'];
                                                                                        $_SESSION['Group'] = $confirm ['GroupNum'];
                                                                                        $_SESSION['role'] = "Student";
                                                                                        $_SESSION['logged_in'] = 'active';
                                                                                        echo "<script>location='http://order-com.stackstaging.com/library.php'</script>"; //similar to forward request dispatcher
                                                                                    } else {
                                                                                        echo "<p align='center'><font color = '#fc1616'> Incorrect password </font> </p>";
                                                                                    }
                                                                                } else {
                                                                                    echo "<p align='center'><font color = '#fc1616'> Your account has been deactivated </font> </p>";
                                                                                }
                                                                            }
                                                                        } else {
                                                                            echo "<p align='center'><font color = '#fc1616'> Incorrect email </font> </p>";
                                                                        }
                                                                    }
                                                                }
                                                            } else if ($_SESSION['rolee'] == "Admin") {
                                                                $lib = mysqli_connect("shareddb-u.hosting.stackcp.net", "ordersystem-3133336f8c", "qwerty123", "ordersystem-3133336f8c"); //very popular way to connect to mysqli_connect... i means to improve 
                                                                if (mysqli_connect_error()) {
                                                                    die("Connection to database failed");
                                                                } else {
                                                                    $_SESSION['inputEmailAddress'] = $_POST['inputEmailAddress'];
                                                                    $_SESSION['inputPassword'] = $_POST['inputPassword'];
                                                                    $query1 = "SELECT * FROM adminaccounts WHERE Email='" . $_SESSION['inputEmailAddress'] . "'";
                                                                    $result = mysqli_query($lib, $query1);
                                                                    if ($_SESSION['inputEmailAddress'] == null && $_SESSION['inputPassword'] == null) {
                                                                        echo "<p align='center'><font color = '#fc1616'> No Entry </font> </p>";
                                                                    } else {
                                                                        if (mysqli_num_rows($result) > 0) {
                                                                            while ($confirm = mysqli_fetch_array($result)) {
                                                                                if ($confirm['AccountStatus'] == "Active") {
                                                                                    if (md5($_SESSION['inputPassword']) == $confirm['Password']) {
                                                                                        $_SESSION['firstname'] = $confirm['FirstName'];
                                                                                        $_SESSION['lastname'] = $confirm['LastName'];
                                                                                        $_SESSION['password'] = $confirm['Password'];
                                                                                        $_SESSION['Email'] = $_SESSION['inputEmailAddress'];
                                                                                        $_SESSION['role'] = "Admin";
                                                                                        $_SESSION['logged_in'] = 'active';
                                                                                        echo "<script>location='http://order-com.stackstaging.com/library-admin.php'</script>"; //similar to forward request dispatcher
                                                                                    } else {
                                                                                        echo "<p align='center'><font color = '#fc1616'> Incorrect password </font> </p>";
                                                                                    }
                                                                                } else {
                                                                                    echo "<p align='center'><font color = '#fc1616'> Your account has been deactivated </font> </p>";
                                                                                }
                                                                            }
                                                                        } else {
                                                                            echo "<p align='center'><font color = '#fc1616'> Incorrect email </font> </p>";
                                                                        }
                                                                    }
                                                                }
                                                            } else {
                                                                $lib = mysqli_connect("shareddb-u.hosting.stackcp.net", "ordersystem-3133336f8c", "qwerty123", "ordersystem-3133336f8c"); //very popular way to connect to mysqli_connect... i means to improve 
                                                                if (mysqli_connect_error()) {
                                                                    die("Connection to database failed");
                                                                } else {
                                                                    $_SESSION['inputEmailAddress'] = $_POST['inputEmailAddress'];
                                                                    $_SESSION['inputPassword'] = $_POST['inputPassword'];
                                                                    $query1 = "SELECT * FROM superadminaccounts WHERE Email='" . $_SESSION['inputEmailAddress'] . "'";
                                                                    $result = mysqli_query($lib, $query1);
                                                                    if ($_SESSION['inputEmailAddress'] == null && $_SESSION['inputPassword'] == null) {
                                                                        echo "<p align='center'><font color = '#fc1616'> No Entry </font> </p>";
                                                                    } else {
                                                                        if (mysqli_num_rows($result) > 0) {
                                                                            while ($confirm = mysqli_fetch_array($result)) {
                                                                                if ($confirm['AccountStatus'] == "Active") {
                                                                                    if (md5($_SESSION['inputPassword']) == $confirm['Password']) {
                                                                                        $_SESSION['firstname'] = $confirm['FirstName'];
                                                                                        $_SESSION['lastname'] = $confirm['LastName'];
                                                                                        $_SESSION['password'] = $confirm['Password'];
                                                                                        $_SESSION['Email'] = $_SESSION['inputEmailAddress'];
                                                                                        $_SESSION['role'] = "Super Admin";
                                                                                        $_SESSION['logged_in'] = 'active';
                                                                                        echo "<script>location='http://order-com.stackstaging.com/library-super.php'</script>"; //similar to forward request dispatcher
                                                                                    } else {
                                                                                        echo "<p align='center'><font color = '#fc1616'> Incorrect password </font> </p>";
                                                                                    }
                                                                                } else {
                                                                                    echo "<p align='center'><font color = '#fc1616'> Your account has been deactivated </font> </p>";
                                                                                }
                                                                            }
                                                                        } else {
                                                                            echo "<p align='center'><font color = '#fc1616'> Incorrect email </font> </p>";
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                        }
                                                        ?>
                                                    </form>
                                                </div>
                                                <div align="center"> <a class="medium" href="password.php">Forgot Password?</a> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </main>

                            </div>
                        </div>
                        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
                        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
                        <script src="js/scripts.js"></script>
                        </body>
                        </html>

