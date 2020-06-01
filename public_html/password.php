<!DOCTYPE html>
<html lang="en">
    <?php session_start(); ?>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Settings</title>
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
    </head>
    <style>
        .btn4 {
            padding: 10px 10px !important;
            text-align: center !important;
            border-radius: 8px !important;
            width: 40% !important;
        }
        .text-footer {
            color: #ffffff !important;
        }
        .mx-8 {
            margin-left: 30%;
            margin-right: 20%;
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
        input[type=submit] {
            margin: 5px 0px 0px 0px !important;
            width: 70% !important;
        }
    </style>
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
                                                <h2 class="text-center display-4" style="color: white;"> Password Recovery</h2>
                                                <h5 class="text-center font-weight-light my-4" style="color: white;">Enter your email address and we will send you further instructions.</h5>
                                                <form method="post">
                                                    <div class="form-group" align="left"><label class="small mb-1" for="inputEmailAddress" style="color: white;">Email</label><input class = "form-control" name="email" id="inputEmailAddress" type="email" aria-describedby="emailHelp" placeholder="Enter your email address"/></div>
                                                    <div align="center"><p><input class="btn4" name = "submit" type="submit" value="Submit"></p></div>   

                                                    <?php
                                                    if (isset($_POST['submit'])) {
                                                        
                                                        $newpass = rand(999, 9999);
                                                        $newpasshash = md5($newpass);
                                                        
                                                        $emailTo = $_POST['email'];

                                                        if ($_SESSION['rolee'] == "Student") {
                                                            $lib = mysqli_connect("shareddb-u.hosting.stackcp.net", "ordersystem-3133336f8c", "qwerty123", "ordersystem-3133336f8c");
                                                            if (mysqli_connect_error()) {

                                                                die("connection to database was failed");
                                                            } else {
                                                                $email = $_POST['email'];
                                                                $query = "SELECT * FROM studentaccounts WHERE Email = '" . mysqli_real_escape_string($lib, $email) . "'";
                                                                $result = mysqli_query($lib, $query);
                                                                if (mysqli_num_rows($result) > 0) {
                                                                    $updatequery = "UPDATE studentaccounts SET Password='" . $newpasshash . "' WHERE Email='" . $email . "'";
                                                                    $results = mysqli_query($lib, $updatequery);
                                                                } else {
                                                                    echo "<p align='center'><font color = '#fc1616'>Account does not exist</font></p>";
                                                                }
                                                            }
                                                        } else if ($_SESSION['rolee'] == "Admin") {
                                                            $lib = mysqli_connect("shareddb-u.hosting.stackcp.net", "ordersystem-3133336f8c", "qwerty123", "ordersystem-3133336f8c");
                                                            if (mysqli_connect_error()) {

                                                                die("connection to database was failed");
                                                            } else {
                                                                $email = $_POST['email'];
                                                                $query = "SELECT * FROM adminaccounts WHERE Email = '" . mysqli_real_escape_string($lib, $email) . "'";
                                                                $result = mysqli_query($lib, $query);
                                                                if (mysqli_num_rows($result) > 0) {
                                                                    $updatequery = "UPDATE adminaccounts SET Password='" . $newpasshash . "' WHERE Email='" . $email . "'";
                                                                    $results = mysqli_query($lib, $updatequery);
                                                                } else {
                                                                    echo "<p align='center'><font color = '#fc1616'>Account does not exist</font></p>";
                                                                }
                                                            }
                                                        } else {
                                                            $lib = mysqli_connect("shareddb-u.hosting.stackcp.net", "ordersystem-3133336f8c", "qwerty123", "ordersystem-3133336f8c");
                                                            if (mysqli_connect_error()) {

                                                                die("connection to database was failed");
                                                            } else {
                                                                $email = $_POST['email'];
                                                                $query = "SELECT * FROM superadminaccounts WHERE Email = '" . mysqli_real_escape_string($lib, $email) . "'";
                                                                $result = mysqli_query($lib, $query);
                                                                if (mysqli_num_rows($result) > 0) {
                                                                    $updatequery = "UPDATE superadminaccounts SET Password='" . $newpasshash . "' WHERE Email='" . $email . "'";
                                                                    $results = mysqli_query($lib, $updatequery);
                                                                } else {
                                                                    echo "<p align='center'><font color = '#fc1616'>Account does not exist</font></p>";
                                                                }
                                                            }
                                                        }
                                                        if ($results) {
                                                            $subject = "Reset Password";
                                                            $body = "In order for you to access your account, login using this temporary password " . $newpass . ". After login, please immediately change your password in the settings page.";
                                                            $headers = "Password Recovery";
                                                            if ($_POST['email'] != null) {

                                                                if (mail($emailTo, $subject, $body, $headers)) {
                                                                    $success = "<p align='center'><font color = '#177a03'>Please check your @ust.edu.ph email</font></p>";
                                                                } else {
                                                                    $error = "<p align='center'><font color = '#fc1616'>Email was not sent</font></p>";
                                                                }
                                                            }
                                                            echo $success;
                                                            echo $error;
                                                        }
                                                    }
                                                    ?>
                                                </form>
                                                <div class="medium" align="center"><a href="index.php">Return to login</a></div>
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
