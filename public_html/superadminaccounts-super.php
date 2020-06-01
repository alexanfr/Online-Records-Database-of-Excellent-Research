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
            <title>Accounts</title>
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
                .btn1 {
                    background-color: #212429;
                    color: #ffffff;     
                    border-radius: 8px;
                    padding: 5px 5px;
                }
                .btn2 {
                    background-color: #ffc107 !important;
                    border: none !important;
                    color: black !important;
                    text-decoration: none !important;
                    text-align: center !important;
                    margin: 0 auto !important;
                    cursor: pointer !important;
                    width: 30% !important;
                    border-radius: 50px !important;
                    padding: 8px 5px !important;

                }
                #submit{
                    text-align: center !important;
                }    

                .search {
                    width: 150% !important;
                    position: relative !important;
                    display: flex !important;
                }

                .input-search{
                    width: 150% !important;
                    height: 32px !important;
                    box-sizing: border-box !important;
                    border: 1px solid #ccc !important;
                    border-right: none !important;
                    border-radius: 5px 0 0 5px !important;
                    outline: none !important;
                    font-size: 16px !important;
                    background-color: white !important;
                    background-position: 10px 10px !important; 
                    background-repeat: no-repeat !important;
                    padding: 3px 10px 3px 10px !important;
                }

                .filter-drop{
                    width: 95% !important;
                    box-sizing: border-box !important;
                    border: 1px solid #ccc !important;
                    border-radius: 5px 5px 5px 5px !important;
                    outline: none !important;
                    font-size: 16px !important;
                    background-color: white !important;
                    background-position: 10px 10px !important; 
                    background-repeat: no-repeat !important;
                    padding: 3px 10px 3px 10px !important;
                }

                .searchButton {
                    width: 80px !important;
                    height: 32px !important; 
                    border: 2px solid #212429 !important;
                    background: #212429 !important;
                    text-align: center !important;
                    color: #fff !important;
                    border-radius: 0 5px 5px 0 !important;
                    cursor: pointer !important;
                    /*font-size: 20px !important;*/
                }

                .returnButton {
                    width: 40px !important;
                    height: 30px !important; 
                    border: 2px solid #212429 !important;
                    background: #212429 !important;
                    text-align: center !important;
                    color: #fff !important;
                    border-radius: 20px 20px 20px 20px !important;
                    cursor: pointer !important;
                    margin-right: 8px !important;
                }

                .bar {
                    display: table;
                }

                .bar-line {
                    display: table-row;
                }

                .bar-display {
                    display: table-cell;
                }
                .tooltip1 {
                    position: relative;
                    display: inline-block;
                }

                .tooltip1 .tooltiptext {
                    visibility: hidden;
                    width: 150px;
                    background-color: black;
                    color: #fff;
                    text-align: center;
                    font-size: 15px;
                    border-radius: 6px;
                    padding: 2px 0;
                    position: absolute;
                    display: block;d
                    z-index: 1;
                    top: 5px;
                    right: 200%;
                    opacity: 80%;
                }

                .tooltip1:hover .tooltiptext {
                    visibility: visible;
                }

                .tooltip1 .tooltiptext::after {
                    content: " ";
                    position: absolute;
                    top: 50%;
                    left: 100%;
                    margin-top: -5px;
                    border-width: 5px;
                    border-style: solid;
                    border-color: transparent transparent transparent black;
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
                                        <a class="nav-link" href="ongoing-super.php">On-going</a>
                                        <a class="nav-link" href="completed-super.php">Completed</a></nav>
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
                            <h1 class="mt-4">SUPER ADMIN ACCOUNTS</h1>
                          
                              
                                <div class="card-body">
                                    <div class ="bar">
                                        <div class ="bar-line">
                                            <div class="bar-display">
                                                <a href = "superadminaccounts-super.php">
                                                    <button type="button" class="returnButton" name="returnbutton">
                                                        <i class="fas fa-arrow-alt-circle-left"></i>
                                                    </button>
                                                </a>
                                            </div>
                                            <div class ="bar-display">
                                                <form method="post">
                                                    <select name="option" class="filter-drop">
                                                        <option value="all" selected hidden>Select...</option>
                                                        <option value="idnum">ID Number</option>                                        
                                                        <option value="fname">First Name</option>                                        
                                                        <option value="lname">Last Name</option>
                                                        <option value="emailadd">Email</option> 
                                                        <option value="status">Account Status</option>
                                                    </select>
                                            </div>
                                            <div class ="bar-display">
                                                <table class="table table-bordered" width="100%" cellspacing="0">
                                                    <div class="search">
                                                        <form method="post">
                                                            <input type="text" class="input-search" placeholder="Search.." name="search">
                                                            <button type="submit" class="searchButton" name="searchbutton">
                                                                <i class="fa fa-search"></i>
                                                            </button>
                                                    </div>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <?php
                                        $lib = mysqli_connect("shareddb-u.hosting.stackcp.net", "ordersystem-3133336f8c", "qwerty123", "ordersystem-3133336f8c"); 
                                        if (mysqli_connect_error()) {
                                            die("connection to database was failed");
                                        }
                            
                                        if (isset($_POST['searchbutton'])) {
                                            if ($_POST['search'] == null) {
                                                echo "<p align='center'><font color = '#fc1616'>No entry placed</font></p>";
                                            } else {
                                                if ($_POST['option'] == "all") {
                                                    $q = "SELECT * FROM superadminaccounts WHERE IDN LIKE '%" . mysqli_real_escape_string($lib, $_POST['search']) . "%' OR FirstName LIKE '%" . mysqli_real_escape_string($lib, $_POST['search']) . "%' OR LastName LIKE '%" . mysqli_real_escape_string($lib, $_POST['search']) . "%' OR Email LIKE '%" . mysqli_real_escape_string($lib, $_POST['search']) . "%' OR AccountStatus LIKE '%" . mysqli_real_escape_string($lib, $_POST['search']) . "%'";
                                                    $query7 = mysqli_query($lib, $q);
                                                    if ($query7) {

                                                        echo"<table class='table table-bordered'  width='100%' cellspacing='0'><th>ID Number</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Account Status</th>"; //table header
                                                        if (mysqli_num_rows($query7) > 0) {
                                                            while ($row = mysqli_fetch_array($query7)) {
                                                                if (!$row['IDN'] == null) {
                                                                    echo" <tr><td>" . $row['IDN'] . "</td><td>" . $row['FirstName'] . "</td><td>" . $row['LastName'] . "</td><td>" . $row['Email'] . "</td><td>" . $row['AccountStatus'] . "</td></tr>"; //table rows
                                                                } else {

                                                                    echo"<p align='center'><font color = '#fc1616'>User does not exist or Input Error</font></p>";
                                                                }
                                                            }echo "</table>";
                                                        }
                                                    }
                                                } else if ($_POST['option'] == "idnum") {
                                                    $q = "SELECT * FROM superadminaccounts WHERE IDN LIKE '%" . mysqli_real_escape_string($lib, $_POST['search']) . "%'  ORDER BY IDN ASC";
                                                    $query7 = mysqli_query($lib, $q);
                                                    if ($query7) {

                                                        echo"<table class='table table-bordered'  width='100%' cellspacing='0'><th>ID Number</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Account Status</th>"; //table header
                                                        if (mysqli_num_rows($query7) > 0) {
                                                            while ($row = mysqli_fetch_array($query7)) {
                                                                if (!$row['IDN'] == null) {
                                                                    echo" <tr><td>" . $row['IDN'] . "</td><td>" . $row['FirstName'] . "</td><td>" . $row['LastName'] . "</td><td>" . $row['Email'] . "</td><td>" . $row['AccountStatus'] . "</td></tr>"; //table rows
                                                                } else {

                                                                    echo"<p align='center'><font color = '#fc1616'>User does not exist or Input Error</font></p>";
                                                                }
                                                            }echo "</table>";
                                                        }
                                                    }
                                                } else if ($_POST['option'] == "fname") {
                                                    $q = "SELECT * FROM superadminaccounts WHERE FirstName LIKE '%" . mysqli_real_escape_string($lib, $_POST['search']) . "%'  ORDER BY FirstName ASC";
                                                    $query7 = mysqli_query($lib, $q);
                                                    if ($query7) {

                                                        echo"<table class='table table-bordered'  width='100%' cellspacing='0'><th>ID Number</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Account Status</th>"; //table header
                                                        if (mysqli_num_rows($query7) > 0) {
                                                            while ($row = mysqli_fetch_array($query7)) {
                                                                if (!$row['IDN'] == null) {
                                                                    echo" <tr><td>" . $row['IDN'] . "</td><td>" . $row['FirstName'] . "</td><td>" . $row['LastName'] . "</td><td>" . $row['Email'] . "</td><td>" . $row['AccountStatus'] . "</td></tr>"; //table rows
                                                                } else {

                                                                    echo"<p align='center'><font color = '#fc1616'>User does not exist or Input Error</font></p>";
                                                                }
                                                            }echo "</table>";
                                                        }
                                                    }
                                                } else if ($_POST['option'] == "lname") {
                                                    $q = "SELECT * FROM superadminaccounts WHERE LastName LIKE '%" . mysqli_real_escape_string($lib, $_POST['search']) . "%'  ORDER BY LastName ASC";
                                                    $query7 = mysqli_query($lib, $q);
                                                    if ($query7) {

                                                        echo"<table class='table table-bordered'  width='100%' cellspacing='0'><th>ID Number</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Account Status</th>"; //table header
                                                        if (mysqli_num_rows($query7) > 0) {
                                                            while ($row = mysqli_fetch_array($query7)) {
                                                                if (!$row['IDN'] == null) {
                                                                    echo" <tr><td>" . $row['IDN'] . "</td><td>" . $row['FirstName'] . "</td><td>" . $row['LastName'] . "</td><td>" . $row['Email'] . "</td><td>" . $row['AccountStatus'] . "</td></tr>"; //table rows
                                                                } else {

                                                                    echo"<p align='center'><font color = '#fc1616'>User does not exist or Input Error</font></p>";
                                                                }
                                                            }echo "</table>";
                                                        }
                                                    }
                                                } else if ($_POST['option'] == "emailadd") {
                                                    $q = "SELECT * FROM superadminaccounts WHERE Email LIKE '%" . mysqli_real_escape_string($lib, $_POST['search']) . "%'  ORDER BY Email ASC";
                                                    $query7 = mysqli_query($lib, $q);
                                                    if ($query7) {

                                                        echo"<table class='table table-bordered'  width='100%' cellspacing='0'><th>ID Number</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Account Status</th>"; //table header
                                                        if (mysqli_num_rows($query7) > 0) {
                                                            while ($row = mysqli_fetch_array($query7)) {
                                                                if (!$row['IDN'] == null) {
                                                                    echo" <tr><td>" . $row['IDN'] . "</td><td>" . $row['FirstName'] . "</td><td>" . $row['LastName'] . "</td><td>" . $row['Email'] . "</td><td>" . $row['AccountStatus'] . "</td></tr>"; //table rows
                                                                } else {

                                                                    echo"<p align='center'><font color = '#fc1616'>User does not exist or Input Error</font></p>";
                                                                }
                                                            }echo "</table>";
                                                        }
                                                    }
                                                } else if ($_POST['option'] == "status") {
                                                    $q = "SELECT * FROM superadminaccounts WHERE AccountStatus LIKE '%" . mysqli_real_escape_string($lib, $_POST['search']) . "%'  ORDER BY AccountStatus ASC";
                                                    $query7 = mysqli_query($lib, $q);
                                                    if ($query7) {

                                                        echo"<table class='table table-bordered'  width='100%' cellspacing='0'><th>ID Number</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Account Status</th>"; //table header
                                                        if (mysqli_num_rows($query7) > 0) {
                                                            while ($row = mysqli_fetch_array($query7)) {
                                                                if (!$row['IDN'] == null) {
                                                                    echo" <tr><td>" . $row['IDN'] . "</td><td>" . $row['FirstName'] . "</td><td>" . $row['LastName'] . "</td><td>" . $row['Email'] . "</td><td>" . $row['AccountStatus'] . "</td></tr>"; //table rows
                                                                } else {

                                                                    echo"<p align='center'><font color = '#fc1616'>User does not exist or Input Error</font></p>";
                                                                }
                                                            }echo "</table>";
                                                        }
                                                    }
                                                }
                                            }
                                        } else {
                                            $query = "SELECT * FROM superadminaccounts";

                                            if ($result = mysqli_query($lib, $query)){
                                                echo"<table class='table table-bordered'  width='100%' cellspacing='0'><th>ID Number</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Account Status</th>"; //table header
                                                while ($row = mysqli_fetch_array($result)) {
                                                    echo" <tr><td>" . $row['IDN'] . "</td><td>" . $row['FirstName'] . "</td><td>" . $row['LastName'] . "</td><td>" . $row['Email'] . "</td><td>" . $row['AccountStatus'] . "</td></tr>"; //table rows
                                                    ?>
                                                    <div id="changeinfo" class="overlay">
                                                        <div class="popup">
                                                            <form action="superadminaccounts-super.php"><a class="close" href="superadminaccounts-super.php">&times;</a></form>
                                                            <br><br>
                                                            <div class="content" align="center">
                                                                <form method="post">
                                                                    Edit super admin information
                                                                    <br><br>
                                                                    <input type="text" name="idn1" placeholder="Input ID number" style="width: 65%;" required>
                                                                    <br><br>
                                                                    <input type="submit" name="submit"  class="btn2" value="Confirm">
                                                                    <br>
                                                                    <?php
                                                                    if (isset($_POST['submit'])) {
                                                                        if ($_POST['idn1'] == $row['IDN']) {
                                                                            $_SESSION['idn1'] = $_POST['idn1'];
                                                                            echo "<script>location='http://order-com.stackstaging.com/superadminaccounts-super.php#changeinfos'</script>";
                                                                        } else {
                                                                            echo"<br><p align='center'><font color = '#fc1616'>ID number does not exist</font></p>";
                                                                        }
                                                                    }
                                                                    ?>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <?php
                                                    }
                                                }
                                            }echo "</table>"; //end of table
                                            ?>
                                        </div>           
                                        <div id="deactivate" class="overlay">
                                            <div class="popup">
                                                <form action="superadminaccounts-super.php" method="post"><a class="close" href="superadminaccounts-super.php" name="refresh">&times;</a></form>
                                                <br><br>
                                                <div class="content" align="center">
                                                    Deactivate super admin account
                                                    <br><br>
                                                    <form method="post">
                                                        <input type="text" name="idn" placeholder="Input ID Number" style="width: 65%;" required>
                                                        <br><br> 
                                                        <input type="submit" name="deactivate" value="Confirm" class="btn2">
                                                        <br>

                                                        <?php
                                                        if (isset($_POST['deactivate'])) {
                                                            if ($_POST['deactivate'] == "Confirm") {
                                                                $select = "SELECT * FROM superadminaccounts WHERE IDN ='" . mysqli_real_escape_string($lib, $_POST['idn']) . "' AND AccountStatus ='Active'";
                                                                $result = mysqli_query($lib, $select);
                                                                $idnum = $_POST['idn'];
                                                                $check = preg_match('/^[0-9]+$/', $idnum);
                                                                if ($check) {
                                                                    if (mysqli_num_rows($result) > 0) {
                                                                        $deactivate = "UPDATE superadminaccounts SET AccountStatus ='Inactive' WHERE IDN ='" . mysqli_real_escape_string($lib, $_POST['idn']) . "'";
                                                                        if (mysqli_query($lib, $deactivate)) {
                                                                            echo "<br><p align='center'><font color = '#177a03'>Account successfully deactivated</font></p>";
                                                                        }
                                                                    } else {
                                                                        $select = "SELECT * FROM superadminaccounts WHERE IDN ='" . mysqli_real_escape_string($lib, $_POST['idn']) . "' AND AccountStatus ='Inactive'";
                                                                        $result = mysqli_query($lib, $select);
                                                                        if (mysqli_num_rows($result) > 0) {
                                                                            echo "<br><p align='center'><font color = '#fc1616'> Account is already deactivated </font> </p>";
                                                                        } else {
                                                                            echo "<br><p align='center'><font color = '#fc1616'> ID number does not exist </font> </p>";
                                                                        }
                                                                    }
                                                                } else {
                                                                    echo "<br><p align='center'><font color = '#fc1616'> Please input a valid ID number </font> </p>";
                                                                }
                                                            }
                                                        }
                                                        ?>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!--------------------------------------------------->



                                        <div id="activate" class="overlay">
                                            <div class="popup">
                                                <form action="superadminaccounts-super.php" method="post"><a class="close" href="superadminaccounts-super.php" name="refresh">&times;</a></form>
                                                <br><br>
                                                <div class="content" align="center">
                                                    Activate super admin account
                                                    <br><br>
                                                    <form method="post">
                                                        <input type="text" name="idn" placeholder="Input ID Number" style="width: 65%;" required>
                                                        <br><br>
                                                        <input type="submit" name="activate" value="Confirm" class="btn2">
                                                        <br>

                                                        <?php
                                                        if (isset($_POST['activate'])) {
                                                            if ($_POST['activate'] == "Confirm") {
                                                                $select = "SELECT * FROM superadminaccounts WHERE IDN ='" . mysqli_real_escape_string($lib, $_POST['idn']) . "' AND AccountStatus ='Inactive'";
                                                                $result = mysqli_query($lib, $select);
                                                                $idnum = $_POST['idn'];
                                                                $check = preg_match('/^[0-9]+$/', $idnum);
                                                                if ($check) {
                                                                    if (mysqli_num_rows($result) > 0) {
                                                                        $deactivate = "UPDATE superadminaccounts SET AccountStatus ='Active' WHERE IDN ='" . mysqli_real_escape_string($lib, $_POST['idn']) . "'";
                                                                        if (mysqli_query($lib, $deactivate)) {
                                                                            echo "<br><p align='center'><font color = '#177a03'>Account successfully activated</font></p>";
                                                                        }
                                                                    } else {
                                                                        $select = "SELECT * FROM superadminaccounts WHERE IDN ='" . mysqli_real_escape_string($lib, $_POST['idn']) . "' AND AccountStatus ='Active'";
                                                                        $result = mysqli_query($lib, $select);
                                                                        if (mysqli_num_rows($result) > 0) {
                                                                            echo "<br><p align='center'><font color = '#fc1616'> Account is already activated </font> </p>";
                                                                        } else {
                                                                            echo "<br><p align='center'><font color = '#fc1616'> ID number does not exist </font> </p>";
                                                                        }
                                                                    }
                                                                } else {
                                                                    echo "<br><p align='center'><font color = '#fc1616'> Please input a valid ID number </font> </p>";
                                                                }
                                                            }
                                                        }
                                                        ?>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="changeinfos" class="overlay">
                                            <div class="popup">
                                                <form action="superadminaccounts-super.php"><a class="close" href="superadminaccounts-super.php">&times;</a></form>
                                                <br><br>
                                                <div class="content" align="center">
                                                    Which one of the informations will you change?
                                                    <br><br>
                                                    <div class="styleform">
                                                        <form method="post">
                                                            <label> ID Number:</label> <input type = "text" name="idn" class="add-fields"><div class="clear"></div>

                                                            <label>First Name:</label> <input type = "text" name="firstname" class="add-fields"><div class="clear"></div>

                                                            <label>Last Name:</label> <input type = "text" name="lastname" class="add-fields"><div class="clear"></div>

                                                            <label> Email: </label><input type = "email" name="Email" class="add-fields"><div class="clear"><br></div> 
                                                    </div>
                                                    <input type="submit" name="change" class="btn2"  value="Confirm">
                                                    <br>

                                                    <?php
                                                    if (isset($_POST['change'])) {
                                                        if ($_POST['change'] == "Confirm") {
                                                            if ($_POST['idn'] == null && $_POST['firstname'] == null && $_POST['lastname'] == null && $_POST['Email'] == null) {
                                                                echo "<br><p align='center'><font color = '#fc1616'> No Entry </font></p>";
                                                            } else {
                                                                if ($_POST['firstname'] != null) {
                                                                    $fname = $_POST['firstname'];
                                                                    $check = preg_match('/^[a-zA-Z -]+$/', $fname);
                                                                    $select = "SELECT * FROM superadminaccounts WHERE IDN ='" . mysqli_real_escape_string($lib, $_SESSION['idn1']) . "'";
                                                                    $result = mysqli_query($lib, $select);
                                                                    if (mysqli_num_rows($result) > 0 && $check) {
                                                                        $change = "UPDATE superadminaccounts SET FirstName='" . mysqli_real_escape_string($lib, $_POST['firstname']) . "' WHERE IDN ='" . mysqli_real_escape_string($lib, $_SESSION['idn1']) . "'";
                                                                        if (mysqli_query($lib, $change)) {
                                                                            $success1 = "<p align='center'><font color = '#177a03'>First name successfully modified</font></p>";
                                                                        }
                                                                    } else if (!$check) {
                                                                        $error1 = "<p align='center'><font color = '#fc1616'> Please enter a valid first name </font></p>";
                                                                    }
                                                                }
                                                                if ($_POST['lastname'] != null) {
                                                                    $lname = $_POST['lastname'];
                                                                    $check = preg_match('/^[a-zA-Z -]+$/', $lname);
                                                                    $select = "SELECT * FROM superadminaccounts WHERE IDN ='" . mysqli_real_escape_string($lib, $_SESSION['idn1']) . "'";
                                                                    $result = mysqli_query($lib, $select);
                                                                    if (mysqli_num_rows($result) > 0 && $check) {
                                                                        $change = "UPDATE superadminaccounts SET LastName='" . mysqli_real_escape_string($lib, $_POST['lastname']) . "' WHERE IDN ='" . mysqli_real_escape_string($lib, $_SESSION['idn1']) . "'";
                                                                        if (mysqli_query($lib, $change)) {
                                                                            $success2 = "<p align='center'><font color = '#177a03'>Last name successfully modified</font></p>";
                                                                        }
                                                                    } else if (!$check) {
                                                                        $error2 = "<p align='center'><font color = '#fc1616'> Please enter a valid last name </font></p>";
                                                                    }
                                                                }
                                                                if ($_POST['Email'] != null) {
                                                                    $select = "SELECT * FROM superadminaccounts WHERE IDN ='" . mysqli_real_escape_string($lib, $_SESSION['idn1']) . "'";
                                                                    $result = mysqli_query($lib, $select);
                                                                    $validate = "SELECT * FROM superadminaccounts WHERE Email ='" . mysqli_real_escape_string($lib, $_POST['Email']) . "'";
                                                                    $resval = mysqli_query($lib, $validate);
                                                                    if (mysqli_num_rows($result) > 0) {
                                                                        if (mysqli_num_rows($resval) > 0) {
                                                                            $taken1 = "<p align='center'><font color = '#fc1616'>Email is already used </font></p>";
                                                                        } else {
                                                                            $ust = "ust.edu.ph";
                                                                            if (!(preg_match("/\b" . $ust . "\b/i", $_POST['Email']))) {
                                                                                $error5 = "<p align='center'><font color = '#fc1616'>Please use a @ust.edu.ph email</font></p>";
                                                                            } else {
                                                                                $change = "UPDATE superadminaccounts SET Email='" . mysqli_real_escape_string($lib, $_POST['Email']) . "' WHERE IDN ='" . mysqli_real_escape_string($lib, $_SESSION['idn1']) . "'";
                                                                                if (mysqli_query($lib, $change)) {
                                                                                    $success3 = "<p align='center'><font color = '#177a03'>Email successfully changed</font></p>";
                                                                                }
                                                                            }
                                                                        }
                                                                    } else {
                                                                        $error3 = "<p align='center'><font color = '#fc1616'> Please enter a valid email </font></p>";
                                                                    }
                                                                }
                                                                if ($_POST['idn'] != null) {
                                                                    $idnum = $_POST['idn'];
                                                                    $check = preg_match('/^[a-zA-Z0-9]+$/', $idnum);
                                                                    $select = "SELECT * FROM superadminaccounts WHERE IDN ='" . mysqli_real_escape_string($lib, $_SESSION['idn1']) . "'";
                                                                    $result = mysqli_query($lib, $select);
                                                                    $validate = "SELECT * FROM superadminaccounts WHERE IDN  ='" . mysqli_real_escape_string($lib, $_POST['idn']) . "'";
                                                                    $resval = mysqli_query($lib, $validate);
                                                                    if (mysqli_num_rows($result) > 0 && $check) {
                                                                        if (mysqli_num_rows($resval) > 0) {
                                                                            $taken2 = "<p align='center'><font color = '#fc1616'>ID number is already used</font></p>";
                                                                        } else {
                                                                          
                                                                            $change = "UPDATE superadminaccounts SET IDN ='" . mysqli_real_escape_string($lib, $_POST['idn']) . "' WHERE IDN ='" . mysqli_real_escape_string($lib, $_SESSION['idn1']) . "'";
                                                                            if (mysqli_query($lib, $change)) {
                                                                                $success4 = "<p align='center'><font color = '#177a03'>ID number successfully changed</font></p>";
                                                                            }
                                                                        }
                                                                    } else if (!$check) {
                                                                        $error4 = "<p align='center'><font color = '#fc1616'> Please enter a valid ID number </font></p>";
                                                                    }
                                                                }
                                                                echo "<br>";
                                                                echo $taken2;
                                                                echo $success4;
                                                                echo $error4;
                                                                echo $success1;
                                                                echo $error1;
                                                                echo $success2;
                                                                echo $error2;
                                                                echo $taken1;
                                                                echo $success3;
                                                                echo $error3;
                                                                echo $error5;
                                                                echo $error6;
                                                            }
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
      
        <nav class="container-floater">
            <div class="floating-action-btn"><div class = "tooltip1"><a style='color: inherit;' href='#deactivate'><i class='fas fa-user-slash my-float-accounts-1'></i></a>
                    <span class = "tooltiptext"> Deactivate Account </span></div></div>

            <div class="floating-action-btn"><div class = "tooltip1"><a style='color: inherit;' href='#activate'><i class='fas fa-user-check my-float-accounts-2'></i></a>
                    <span class = "tooltiptext"> Activate Account </span></div></div>

            <div class="floating-action-btn"><div class = "tooltip1"><a style='color: inherit;' href='#changeinfo'><i class="fas fa-user-edit my-float-accounts-2"></i></a>
                    <span class = "tooltiptext"> Edit Account </span></div></div>

            <div class="floating-action-btn"><div class = "tooltip1"><a style='color: inherit;' href='#add'><i class="fas fa-user-plus my-float-accounts-2"></i></i></a>
                    <span class = "tooltiptext"> Add Account </span></div></div>
            <div class="floating-action-btn"><i class="fas fa-ellipsis-v my-float-accounts"></i></div>
        </nav> 


        <div id="add" class="overlay">
            <div class="popup">
                <form action="superadminaccounts-super.php"><a class="close" href="superadminaccounts-super.php">&times;</a></form>
                <br><br>
                <div class="content" align="center">
                    <div class="styleform">
                        <form method="post">
                            <label> ID Number:</label>  <input type = "text" name="idn" class="add-fields" required><div class="clear"></div>

                            <label>First Name:</label> <input type = "text" name="firstname" class="add-fields" required><div class="clear"></div>

                            <label>Last Name:</label> <input type = "text" name="lastname" class="add-fields" required><div class="clear"></div>

                            <label> Email: </label><input type = "email" name="email" class="add-fields" required><div class="clear"></div> 

                            <label> Password:</label> <input type = "password" name="password" class="add-fields" required><div class="clear"><br></div>
                    </div>
                    <input type="submit" value="Sign up" name="signup" class="btn2"></form>
                    <br>
                    <?php
                    $lib = mysqli_connect("shareddb-u.hosting.stackcp.net", "ordersystem-3133336f8c", "qwerty123", "ordersystem-3133336f8c"); 
                    if (isset($_POST['signup'])) {
                        if (array_key_exists('idn', $_POST) AND array_key_exists('lastname', $_POST) AND array_key_exists('firstname', $_POST) AND array_key_exists('email', $_POST) AND array_key_exists('password', $_POST)) {
                            if (mysqli_connect_error()) {
                                die("connection to database was failed");
                            } else {
                                $checkfname = preg_match('/^[a-zA-Z -]+$/', $_POST['firstname']);
                                $checklname = preg_match('/^[a-zA-Z -]+$/', $_POST['lastname']);
                                $checkidnum = preg_match('/^[a-zA-Z0-9]+$/', $_POST['idn']);
                                $ust = "ust.edu.ph";
                                $checkemail = preg_match("/\b" . $ust . "\b/i", $_POST['email']);
                                $query = "SELECT * FROM superadminaccounts WHERE IDN = '" . mysqli_real_escape_string($lib, $_POST['idn']) . "' OR  Email = '" . mysqli_real_escape_string($lib, $_POST['email']) . "'";
                                $result = mysqli_query($lib, $query);
                                if (mysqli_num_rows($result) > 0) {
                                    echo "<br><p align='center'><font color = '#fc1616'>Account already exists</font></p>";
                                } else {
                                    if ($checkfname && $checklname && $checkidnum && $checkemail) {
                                        $queryinsert = "INSERT INTO superadminaccounts(IDN, LastName, FirstName, Email, Password) VALUES ('" . mysqli_real_escape_string($lib, $_POST['idn']) . "', '" . mysqli_real_escape_string($lib, $_POST['lastname']) . "','" . mysqli_real_escape_string($lib, $_POST['firstname']) . "', '" . mysqli_real_escape_string($lib, $_POST['email']) . "', '" . mysqli_real_escape_string($lib, md5($_POST['password'])) . "')";
                                        $length = strlen($_POST['password']);
                                        if($length >= 8 && $length <= 20){
                                        if (mysqli_query($lib, $queryinsert)) {
                                            echo "<br><p align='center'><font color = '#177a03'>Account successfully created</font></p>";
                                        } else {
                                            echo "<br><p align='center'><font color = '#fc1616'>A problem has occured</font></p>";
                                        }
                                        }else{
                                            $error5 = "<p align='center'><font color = '#fc1616'> Password should be 8 to 20 characters only </font> </p>";
                                        }
                                    }
                                    if (!$checkidnum) {
                                        $error1 = "<p align='center'><font color = '#fc1616'> Please enter a valid ID number</font> </p>";
                                    }
                                    if (!$checkfname) {
                                        $error2 = "<p align='center'><font color = '#fc1616'> Please enter a valid first name </font> </p>";
                                    }
                                    if (!$checklname) {
                                        $error3 = "<p align='center'><font color = '#fc1616'>Please enter a valid last name</font> </p>";
                                    }
                                    if (!$checkemail) {
                                        $error4 = "<p align='center'><font color = '#fc1616'>Please use a @ust.edu.ph email</font></p>";
                                    }
                                }
                                echo "<br>";
                                echo $error1;
                                echo $error2;
                                echo $error3;
                                echo $error4;
                                echo $error5;
                            }
                        }
                    }
                    ?> 

                </div>
            </div>
        </div>
    </form>
    </div>
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
