<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
            />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Account Login</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link
            rel="apple-touch-icon-precomposed"
            sizes="57x57"
            href="apple-touch-icon-57x57.png"
            />
        <link
            rel="apple-touch-icon-precomposed"
            sizes="114x114"
            href="apple-touch-icon-114x114.png"
            />
        <link
            rel="apple-touch-icon-precomposed"
            sizes="72x72"
            href="apple-touch-icon-72x72.png"
            />
        <link
            rel="apple-touch-icon-precomposed"
            sizes="144x144"
            href="apple-touch-icon-144x144.png"
            />
        <link
            rel="apple-touch-icon-precomposed"
            sizes="60x60"
            href="apple-touch-icon-60x60.png"
            />
        <link
            rel="apple-touch-icon-precomposed"
            sizes="120x120"
            href="apple-touch-icon-120x120.png"
            />
        <link
            rel="apple-touch-icon-precomposed"
            sizes="76x76"
            href="apple-touch-icon-76x76.png"
            />
        <link
            rel="apple-touch-icon-precomposed"
            sizes="152x152"
            href="apple-touch-icon-152x152.png"
            />
        <link
            rel="icon"
            type="image/png"
            href="favicon-196x196.png"
            sizes="196x196"
            />
        <link rel="icon" type="image/png" href="favicon-96x96.png" sizes="96x96" />
        <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
        <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
        <link rel="icon" type="image/png" href="favicon-128.png" sizes="128x128" />
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js"
            crossorigin="anonymous"
        ></script>
        <style>
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
            input[type=submit] {
                margin: 5px 0px 0px 0px !important;
                width: 70% !important;
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
                                                <h2 class="text-center display-4" style="color: white;">
                                                    Welcome!
                                                </h2>
                                                <h5 class="text-center font-weight-light my-4" style="color: white;">
                                                    Please choose your account type
                                                </h5>
                                                
                                                <div align="center">
                                                    <form method="post">
                                                        <div class="align-content-center">
                                                            <p>
                                                                <input
                                                                    type="submit"
                                                                    name="rolee"
                                                                    value="Student"
                                                                    class="btn3 "
                                                                    />
                                                            </p>
                                                        </div>
                                                        <div class="align-content-center">
                                                            <p>
                                                                <input
                                                                    type="submit"
                                                                    name="rolee"
                                                                    value="Admin"
                                                                    class="btn3"
                                                                    />
                                                            </p>
                                                        </div>
                                                        <div class="align-content-center">
                                                            <p>
                                                                <input
                                                                    type="submit"
                                                                    name="rolee"
                                                                    value="Super Admin"
                                                                    class="btn3"
                                                                    />
                                                            </p>
                                                        </div>
                                                        <?php
                                                        if (isset($_POST['rolee'])) {
                                                            echo"<script>";
                                                            if ($_POST['rolee'] == "Student") {
                                                                $_SESSION['rolee'] = $_POST['rolee'];
                                                                echo "location='http://order-com.stackstaging.com/login.php'</script>";
                                                            }
                                                            if ($_POST['rolee'] == "Admin") {
                                                                $_SESSION['rolee'] = $_POST['rolee'];
                                                                echo "location='http://order-com.stackstaging.com/login.php'</script>";
                                                            }
                                                            if ($_POST['rolee'] == "Super Admin") {
                                                                $_SESSION['rolee'] = $_POST['rolee'];
                                                                echo "location='http://order-com.stackstaging.com/login.php'</script>";
                                                            }
                                                        }
                                                        ?>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
</body>
</html>