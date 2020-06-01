<?php
session_start();
if ($_SESSION['logged_in'] == null && $_SESSION['lastname'] == null && $_SESSION['firstname'] == null) {
    header("Cache-Control: no-cache, must-revalidate");
    header('Location: /index.php');
} else {
    ?>
    <!DOCTYPE html>
    <html lang="en">

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
            <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
            <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
            <style>
                .btn5 {
                    padding: 10px 20px !important;
                    text-align: center !important;
                    border-radius: 8px !important;
                    width: 25% !important;
                    text-align: center !important;
                    position: relative !important;

                }
                .responsive {
                    width: 135px !important;
                }
                .inputs {
                    width: 25% !important;
                }
                @media screen and (max-width: 600px) {
                    .btn5 {
                        font-size: 14px;
                        text-align: center;
                        width: auto !important;
                    }
                    .responsive {
                        width: auto !important;
                    }
                    .inputs {
                        width: auto !important;
                    }
                }              
            </style>
        </head>
        <body class="sb-nav-fixed">
            <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
                
                <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button> 
               
                <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
             
                </form>
            
            </nav>
            <div id="layoutSidenav">
                <div id="layoutSidenav_nav">
                    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                        <div class="sb-sidenav-menu">
                            <div class="nav">
                                <br>
                                <br>
                                <div class = "order-logo">
                                    <center>
                                        <img src = "./img/orderlogo.jpg">
                                    </center>
                                </div>
                                <br>
                               
                                <a class="nav-link" href="myclass-super.php"
                                   ><div class="sb-nav-link-icon"><i class="fas fa-chalkboard-teacher"></i></div>
                                    My Class</a
                                >
                               
                                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts"
                                   ><div class="sb-nav-link-icon"><i class="fas fa-landmark"></i></div>
                                    Library
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                                    ></a>
                                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="library-super.php">All</a>
                                        <a class="nav-link" href="ongoing-super.php">On-going</a><a class="nav-link" href="completed-super.php">Completed</a></nav>
                                </div>
                                
                                <a class="nav-link" href="archive-super.php"
                                   ><div class="sb-nav-link-icon"><i class="fas fa-archive"></i></div>
                                    Archive</a
                                >                                       

                                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts2" aria-expanded="false" aria-controls="collapseLayouts"
                                   ><div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                    Accounts
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                                    ></a>
                                <div class="collapse" id="collapseLayouts2" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                    <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="studentaccounts-super.php">Student Accounts</a><a class="nav-link" href="adminaccounts-super.php">Admin Accounts</a><a class="nav-link" href="superadminaccounts-super.php">Super Admin Accounts</a></nav>
                                </div> 


                                <a class="nav-link" href="settings-super.php"
                                   ><div class="sb-nav-link-icon"><i class="fas fa-cog"></i></div>
                                    Settings</a
                                >
                                <a class="nav-link" href="logout.php"
                                   ><div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                    Logout</a
                                >
                            </div>
                        </div>
                        <div class="sb-sidenav-footer">
                            <div class="small">Logged in as:</div>
                            <?php
                            echo $_SESSION['lastname'] . ", <br>";
                            echo $_SESSION['firstname'];
                            ?>
                        </div>
                    </nav>
                </div>
                <div id="layoutSidenav_content">
                    <main>
                        <div class="container-fluid">
                            <h1 class="mt-4">SETTINGS</h1>
                            <div class="card mb-4"> 
                             

                                <div class="card-body">
                                    <div class="styleform">
                                        <form method="post">
                                            <label class = "responsive"> Old Password:</label> <input type = "password" id="oldpass" name="oldpass" class="add-fields inputs" required><div class="clear"></div>
                                            <label class = "responsive"> New Password:</label> <input type = "password" id="newpass" name="newpass" class="add-fields inputs" required><div class="clear"></div>
                                            <label class = "responsive"> Confirm Password:</label> <input type = "password" id="verpass" name="verpass" class="add-fields inputs" required><div class="clear"><br></div>
                                    </div>
                                    <div align="center"><input type = "submit" class="btn5" name="save" value = "Save Password"></div>
                                    </form>

                                    <?php
                                    $lib = mysqli_connect("shareddb-u.hosting.stackcp.net", "ordersystem-3133336f8c", "qwerty123", "ordersystem-3133336f8c");
                                    if (mysqli_connect_error()) {
                                        echo "hotdog";
                                        die("connection to database was failed");
                                    } else {
                                        if (isset($_POST['save'])) {
                                            if ($_SESSION['password'] == md5($_POST['oldpass'])) {
                                                if ($_POST['newpass'] == $_POST['verpass']) {
                                                    $length = strlen($_POST['verpass']);
                                                    if ($length >= 8 && $length <= 20){
                                                    $newpass = md5($_POST['newpass']);
                                                    $query = "UPDATE superadminaccounts SET Password ='" . $newpass . "'WHERE Email ='" . $_SESSION['Email'] . "'";
                                                    if (mysqli_query($lib, $query)) {
                                                        echo "<br><p align='center'><font color = '#177a03'>Password successfully changed</font></p>";
                                                    } else {
                                                        echo "<br><p align='center'><font color = '#fc1616'>An error has occured. Please try again</font></p>";
                                                    }
                                                }else{
                                                    echo "<br><p align='center'><font color = '#fc1616'>Password should be 8 to 20 characters only</font></p>";
                                                }
                                                } else {
                                                    echo "<br><p align='center'><font color = '#fc1616'>Confirm password did not match</font></p>";
                                                }
                                            } else {
                                                echo "<br><p align='center'><font color = '#fc1616'>Incorrect old password</font></p>";
                                            }
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
            <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
            <script src="js/scripts.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
            <script src="assets/demo/chart-area-demo.js"></script>
            <script src="assets/demo/chart-bar-demo.js"></script>
            <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
            <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
            <script src="assets/demo/datatables-demo.js"></script>
        </body>
    </html>
    <?php
}
?>