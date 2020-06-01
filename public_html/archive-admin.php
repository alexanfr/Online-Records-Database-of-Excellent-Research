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
            <title>Library</title>
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
                .btn2 {
                    background-color: #ffc107 !important;
                    border: none !important;
                    color: black !important;
                    text-decoration: none !important;
                    text-align: center !important;
                    margin: 0 auto !important;
                    cursor: pointer !important;
                    width: 50% !important;
                    border-radius: 50px !important;
                    padding: 8px 5px !important;
                }
                .btn5 {
                    padding: 10px 20px !important;
                    text-align: center !important;
                    border-radius: 8px !important;
                    width: 25% !important;
                }            
                .search {
                    width: 150% !important;
                    position: relative !important;
                    display: flex !important;
                }
                .responsive {
                    width: 135px !important; 
                    text-align: left !important;
                }
                .inputs {
                    width: 320px !important;
                    width: -webkit-fill-available !important;
                    width: -moz-available !important; 
                    width: fill-available !important;
                }         
                .members {
                    color: #000000;
                }
                .members::placeholder {
                    font-size: 13px !important;
                }        
                @media screen and (max-width: 600px) {
                    .btn5 {
                        font-size: 14px;
                        text-align: center;
                        width: auto !important;
                    }            
                    .btn2 {
                        font-size: 14px;
                        text-align: center;
                        width: auto !important;
                    }
                    .inputs {
                        width: 199px !important;
                    }
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
                    display: block;
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

                                <a class="nav-link" href="myclass.php"
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
                                        <a class="nav-link" href="library-admin.php">All</a> 
                                        <a class="nav-link" href="ongoing-admin.php">On-going</a><a class="nav-link" href="completed-admin.php">Completed</a></nav>
                                </div>
                                
                                <a class="nav-link" href="archive-admin.php"
                                   ><div class="sb-nav-link-icon"><i class="fas fa-archive"></i></div>
                                    Archive</a
                                >                                  
                                
                                <a class="nav-link" href="accounts.php"
                                   ><div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                    Student Accounts</a
                                >
                                
                                <a class="nav-link" href="settings-admin.php"
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
                            <h1 class="mt-4">ARCHIVE</h1>
                            

                                <div class="card-body">
                                    <div class = "bar">
                                        <div class ="bar-line">
                                            <div class="bar-display">
                                                <a href = "archive-admin.php">
                                                    <button type="button" class="returnButton" name="returnbutton">
                                                        <i class="fas fa-arrow-alt-circle-left"></i>
                                                    </button>
                                                </a>
                                            </div>
                                            <div class="bar-display">
                                                <form method="post">
                                                    <select name="option" class="filter-drop">
                                                        <option value="all" selected hidden>Select...</option>
                                                        <option value="groupnum">Group Number</option>                                                        
                                                        <option value="date">Date</option>
                                                        <option value="title">Title</option>
                                                        <option value="members">Members</option>
                                                        <option value="technical">Technical Adviser</option>                                                
                                                        <option value="content">Content Adviser</option>
                                                        <option value="category">Category</option>
                                                    </select>
                                            </div>
                                            <div class="bar-display">
                                                <div class="search">
                                                    <input type="text" class="input-search" placeholder="Search.." name="search">
                                                    <button type="submit" class="searchButton" name="searchbutton">
                                                        <i class="fa fa-search"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-bordered" width="100%" cellspacing="0">

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
                                                        $q = "SELECT * FROM archive WHERE Status LIKE '%" . mysqli_real_escape_string($lib, $_POST['search']) . "%' OR Title LIKE '%" . mysqli_real_escape_string($lib, $_POST['search']) . "%' OR GroupNo LIKE '%" . mysqli_real_escape_string($lib, $_POST['search']) . "%' OR Date LIKE '%" . mysqli_real_escape_string($lib, $_POST['search']) . "%' OR `Technical Adviser` LIKE '%" . mysqli_real_escape_string($lib, $_POST['search']) . "%' OR `Content Adviser` LIKE '%" . mysqli_real_escape_string($lib, $_POST['search']) . "%' OR Category LIKE '%" . mysqli_real_escape_string($lib, $_POST['search']) . "%' OR Members LIKE '%" . mysqli_real_escape_string($lib, $_POST['search']) . "%' ORDER BY Date DESC";
                                                        $query7 = mysqli_query($lib, $q);
                                                        if ($query7) {

                                                            echo"<table class='table table-bordered' width='100%' cellspacing='0'><th>Group Number</th><th>Date</th><th>Time</th><th>Title</th><th>Members</th><th>Technical Adviser</th><th>Content Adviser</th><th>Category</th><th>Status</th>"; //table header
                                                            if (mysqli_num_rows($query7) > 0) {
                                                                while ($row = mysqli_fetch_array($query7)) {
                                                                    if ($row['Status'] == "Completed") {
                                                                        echo" <tr><td>" . $row['GroupNo'] . "</td><td>" . $row['Date'] . "</td><td>".$row['Time']."</td><td><a href='" . $row['URL'] . "' target='_blank' rel='noopener noreferrer'>" . $row['Title'] . "</td>" . "</a></td><td>" . $row['Members'] . "</td>" . "</td><td>" . $row['Technical Adviser'] . "</td>" . "</td><td>" . $row['Content Adviser'] . "</td><td>" . $row['Category'] . "</td><td>" . $row['Status'] . "</td>" . "</td></tr>"; //table rows
                                                                    } else {
            
                                                                         echo" <tr><td>" . $row['GroupNo'] . "</td><td>" . $row['Date'] . "</td><td>".$row['Time']."</td><td><a href='#opt2' rel='noopener noreferrer' value='" . $row['Title'] . "' onclick='bookmark(this);'>" . $row['Title'] . "</td>" . "</a></td><td>" . $row['Members'] . "</td>" . "</td><td>" . $row['Technical Adviser'] . "</td>" . "</td><td>" . $row['Content Adviser'] . "</td><td>" . $row['Category'] . "</td><td>" . $row['Status'] . "</td>" . "</td></tr>"; //table rows
                                                                    }
                                                            }
                                                        }echo "</table>";
                                                        }
                                                    } else if ($_POST['option'] == "title") {
                                                        $q = "SELECT * FROM archive WHERE Title LIKE '%" . mysqli_real_escape_string($lib, $_POST['search']) . "%' ORDER BY Date DESC";
                                                        $query7 = mysqli_query($lib, $q);
                                                        if ($query7) {

                                                             echo"<table class='table table-bordered' width='100%' cellspacing='0'><th>Group Number</th><th>Date</th><th>Time</th><th>Title</th><th>Members</th><th>Technical Adviser</th><th>Content Adviser</th><th>Category</th><th>Status</th>"; //table header
                                                            if (mysqli_num_rows($query7) > 0) {
                                                                while ($row = mysqli_fetch_array($query7)) {
                                                                    if ($row['Status'] == "Completed") {
                                                                        echo" <tr><td>" . $row['GroupNo'] . "</td><td>" . $row['Date'] . "</td><td>".$row['Time']."</td><td><a href='" . $row['URL'] . "' target='_blank' rel='noopener noreferrer'>" . $row['Title'] . "</td>" . "</a></td><td>" . $row['Members'] . "</td>" . "</td><td>" . $row['Technical Adviser'] . "</td>" . "</td><td>" . $row['Content Adviser'] . "</td><td>" . $row['Category'] . "</td><td>" . $row['Status'] . "</td>" . "</td></tr>"; //table rows
                                                                    } else {
            
                                                                         echo" <tr><td>" . $row['GroupNo'] . "</td><td>" . $row['Date'] . "</td><td>".$row['Time']."</td><td><a href='#opt2' rel='noopener noreferrer' value='" . $row['Title'] . "' onclick='bookmark(this);'>" . $row['Title'] . "</td>" . "</a></td><td>" . $row['Members'] . "</td>" . "</td><td>" . $row['Technical Adviser'] . "</td>" . "</td><td>" . $row['Content Adviser'] . "</td><td>" . $row['Category'] . "</td><td>" . $row['Status'] . "</td>" . "</td></tr>"; //table rows
                                                                    }
                                                            }
                                                        }echo "</table>";
                                                        }
                                                    } else if ($_POST['option'] == "members") {
                                                        $q = "SELECT * FROM archive WHERE Members LIKE '%" . mysqli_real_escape_string($lib, $_POST['search']) . "%'ORDER BY Date DESC";
                                                        $query7 = mysqli_query($lib, $q);
                                                        if ($query7) {

                                                             echo"<table class='table table-bordered' width='100%' cellspacing='0'><th>Group Number</th><th>Date</th><th>Time</th><th>Title</th><th>Members</th><th>Technical Adviser</th><th>Content Adviser</th><th>Category</th><th>Status</th>"; //table header
                                                            if (mysqli_num_rows($query7) > 0) {
                                                                while ($row = mysqli_fetch_array($query7)) {
                                                                    if ($row['Status'] == "Completed") {
                                                                        echo" <tr><td>" . $row['GroupNo'] . "</td><td>" . $row['Date'] . "</td><td>".$row['Time']."</td><td><a href='" . $row['URL'] . "' target='_blank' rel='noopener noreferrer'>" . $row['Title'] . "</td>" . "</a></td><td>" . $row['Members'] . "</td>" . "</td><td>" . $row['Technical Adviser'] . "</td>" . "</td><td>" . $row['Content Adviser'] . "</td><td>" . $row['Category'] . "</td><td>" . $row['Status'] . "</td>" . "</td></tr>"; //table rows
                                                                    } else {
            
                                                                         echo" <tr><td>" . $row['GroupNo'] . "</td><td>" . $row['Date'] . "</td><td>".$row['Time']."</td><td><a href='#opt2' rel='noopener noreferrer' value='" . $row['Title'] . "' onclick='bookmark(this);'>" . $row['Title'] . "</td>" . "</a></td><td>" . $row['Members'] . "</td>" . "</td><td>" . $row['Technical Adviser'] . "</td>" . "</td><td>" . $row['Content Adviser'] . "</td><td>" . $row['Category'] . "</td><td>" . $row['Status'] . "</td>" . "</td></tr>"; //table rows
                                                                    }
                                                            }
                                                        }echo "</table>";
                                                        }
                                                    } else if ($_POST['option'] == "groupnum") {
                                                        $q = "SELECT * FROM archive WHERE GroupNo LIKE '%" . mysqli_real_escape_string($lib, $_POST['search']) . "%' ORDER BY Date DESC";
                                                        $query7 = mysqli_query($lib, $q);
                                                        if ($query7) {

                                                             echo"<table class='table table-bordered' width='100%' cellspacing='0'><th>Group Number</th><th>Date</th><th>Time</th><th>Title</th><th>Members</th><th>Technical Adviser</th><th>Content Adviser</th><th>Category</th><th>Status</th>"; //table header
                                                            if (mysqli_num_rows($query7) > 0) {
                                                                while ($row = mysqli_fetch_array($query7)) {
                                                                    if ($row['Status'] == "Completed") {
                                                                        echo" <tr><td>" . $row['GroupNo'] . "</td><td>" . $row['Date'] . "</td><td>".$row['Time']."</td><td><a href='" . $row['URL'] . "' target='_blank' rel='noopener noreferrer'>" . $row['Title'] . "</td>" . "</a></td><td>" . $row['Members'] . "</td>" . "</td><td>" . $row['Technical Adviser'] . "</td>" . "</td><td>" . $row['Content Adviser'] . "</td><td>" . $row['Category'] . "</td><td>" . $row['Status'] . "</td>" . "</td></tr>"; //table rows
                                                                    } else {
            
                                                                         echo" <tr><td>" . $row['GroupNo'] . "</td><td>" . $row['Date'] . "</td><td>".$row['Time']."</td><td><a href='#opt2' rel='noopener noreferrer' value='" . $row['Title'] . "' onclick='bookmark(this);'>" . $row['Title'] . "</td>" . "</a></td><td>" . $row['Members'] . "</td>" . "</td><td>" . $row['Technical Adviser'] . "</td>" . "</td><td>" . $row['Content Adviser'] . "</td><td>" . $row['Category'] . "</td><td>" . $row['Status'] . "</td>" . "</td></tr>"; //table rows
                                                                    }
                                                            }
                                                        }echo "</table>";
                                                        }
                                                    } else if ($_POST['option'] == "date") {
                                                        $q = "SELECT * FROM archive WHERE Date LIKE '%" . mysqli_real_escape_string($lib, $_POST['search']) . "%' ORDER BY Date DESC";
                                                        $query7 = mysqli_query($lib, $q);
                                                        if ($query7) {

                                                             echo"<table class='table table-bordered' width='100%' cellspacing='0'><th>Group Number</th><th>Date</th><th>Time</th><th>Title</th><th>Members</th><th>Technical Adviser</th><th>Content Adviser</th><th>Category</th><th>Status</th>"; //table header
                                                            if (mysqli_num_rows($query7) > 0) {
                                                                while ($row = mysqli_fetch_array($query7)) {
                                                                    if ($row['Status'] == "Completed") {
                                                                        echo" <tr><td>" . $row['GroupNo'] . "</td><td>" . $row['Date'] . "</td><td>".$row['Time']."</td><td><a href='" . $row['URL'] . "' target='_blank' rel='noopener noreferrer'>" . $row['Title'] . "</td>" . "</a></td><td>" . $row['Members'] . "</td>" . "</td><td>" . $row['Technical Adviser'] . "</td>" . "</td><td>" . $row['Content Adviser'] . "</td><td>" . $row['Category'] . "</td><td>" . $row['Status'] . "</td>" . "</td></tr>"; //table rows
                                                                    } else {
            
                                                                         echo" <tr><td>" . $row['GroupNo'] . "</td><td>" . $row['Date'] . "</td><td>".$row['Time']."</td><td><a href='#opt2' rel='noopener noreferrer' value='" . $row['Title'] . "' onclick='bookmark(this);'>" . $row['Title'] . "</td>" . "</a></td><td>" . $row['Members'] . "</td>" . "</td><td>" . $row['Technical Adviser'] . "</td>" . "</td><td>" . $row['Content Adviser'] . "</td><td>" . $row['Category'] . "</td><td>" . $row['Status'] . "</td>" . "</td></tr>"; //table rows
                                                                    }
                                                            }
                                                        }echo "</table>";
                                                        }
                                                    } else if ($_POST['option'] == "technical") {
                                                        $q = "SELECT * FROM archive WHERE `Technical Adviser` LIKE '%" . mysqli_real_escape_string($lib, $_POST['search']) . "%' ORDER BY Date DESC";
                                                        $query7 = mysqli_query($lib, $q);
                                                        if ($query7) {

                                                             echo"<table class='table table-bordered' width='100%' cellspacing='0'><th>Group Number</th><th>Date</th><th>Time</th><th>Title</th><th>Members</th><th>Technical Adviser</th><th>Content Adviser</th><th>Category</th><th>Status</th>"; //table header
                                                            if (mysqli_num_rows($query7) > 0) {
                                                                while ($row = mysqli_fetch_array($query7)) {
                                                                    if ($row['Status'] == "Completed") {
                                                                        echo" <tr><td>" . $row['GroupNo'] . "</td><td>" . $row['Date'] . "</td><td>".$row['Time']."</td><td><a href='" . $row['URL'] . "' target='_blank' rel='noopener noreferrer'>" . $row['Title'] . "</td>" . "</a></td><td>" . $row['Members'] . "</td>" . "</td><td>" . $row['Technical Adviser'] . "</td>" . "</td><td>" . $row['Content Adviser'] . "</td><td>" . $row['Category'] . "</td><td>" . $row['Status'] . "</td>" . "</td></tr>"; //table rows
                                                                    } else {
            
                                                                         echo" <tr><td>" . $row['GroupNo'] . "</td><td>" . $row['Date'] . "</td><td>".$row['Time']."</td><td><a href='#opt2' rel='noopener noreferrer' value='" . $row['Title'] . "' onclick='bookmark(this);'>" . $row['Title'] . "</td>" . "</a></td><td>" . $row['Members'] . "</td>" . "</td><td>" . $row['Technical Adviser'] . "</td>" . "</td><td>" . $row['Content Adviser'] . "</td><td>" . $row['Category'] . "</td><td>" . $row['Status'] . "</td>" . "</td></tr>"; //table rows
                                                                    }
                                                            }
                                                        }echo "</table>";
                                                        }
                                                    } else if ($_POST['option'] == "content") {
                                                        $q = "SELECT * FROM archive WHERE `Content Adviser` LIKE '%" . mysqli_real_escape_string($lib, $_POST['search']) . "%' ORDER BY Date DESC";
                                                        $query7 = mysqli_query($lib, $q);
                                                        if ($query7) {

                                                             echo"<table class='table table-bordered' width='100%' cellspacing='0'><th>Group Number</th><th>Date</th><th>Time</th><th>Title</th><th>Members</th><th>Technical Adviser</th><th>Content Adviser</th><th>Category</th><th>Status</th>"; //table header
                                                            if (mysqli_num_rows($query7) > 0) {
                                                                while ($row = mysqli_fetch_array($query7)) {
                                                                    if ($row['Status'] == "Completed") {
                                                                        echo" <tr><td>" . $row['GroupNo'] . "</td><td>" . $row['Date'] . "</td><td>".$row['Time']."</td><td><a href='" . $row['URL'] . "' target='_blank' rel='noopener noreferrer'>" . $row['Title'] . "</td>" . "</a></td><td>" . $row['Members'] . "</td>" . "</td><td>" . $row['Technical Adviser'] . "</td>" . "</td><td>" . $row['Content Adviser'] . "</td><td>" . $row['Category'] . "</td><td>" . $row['Status'] . "</td>" . "</td></tr>"; //table rows
                                                                    } else {
            
                                                                         echo" <tr><td>" . $row['GroupNo'] . "</td><td>" . $row['Date'] . "</td><td>".$row['Time']."</td><td><a href='#opt2' rel='noopener noreferrer' value='" . $row['Title'] . "' onclick='bookmark(this);'>" . $row['Title'] . "</td>" . "</a></td><td>" . $row['Members'] . "</td>" . "</td><td>" . $row['Technical Adviser'] . "</td>" . "</td><td>" . $row['Content Adviser'] . "</td><td>" . $row['Category'] . "</td><td>" . $row['Status'] . "</td>" . "</td></tr>"; //table rows
                                                                    }
                                                            }
                                                        }echo "</table>";
                                                        }
                                                    } else if ($_POST['option'] == "category") {
                                                        $q = "SELECT * FROM archive WHERE Category LIKE '%" . mysqli_real_escape_string($lib, $_POST['search']) . "%'  ORDER BY Date DESC";
                                                        $query7 = mysqli_query($lib, $q);
                                                        if ($query7) {

                                                            echo"<table class='table table-bordered' width='100%' cellspacing='0'><th>Group Number</th><th>Date</th><th>Time</th><th>Title</th><th>Members</th><th>Technical Adviser</th><th>Content Adviser</th><th>Category</th><th>Status</th>"; //table header
                                                            if (mysqli_num_rows($query7) > 0) {
                                                                while ($row = mysqli_fetch_array($query7)) {
                                                                    if ($row['Status'] == "Completed") {
                                                                        echo" <tr><td>" . $row['GroupNo'] . "</td><td>" . $row['Date'] . "</td><td>".$row['Time']."</td><td><a href='" . $row['URL'] . "' target='_blank' rel='noopener noreferrer'>" . $row['Title'] . "</td>" . "</a></td><td>" . $row['Members'] . "</td>" . "</td><td>" . $row['Technical Adviser'] . "</td>" . "</td><td>" . $row['Content Adviser'] . "</td><td>" . $row['Category'] . "</td><td>" . $row['Status'] . "</td>" . "</td></tr>"; //table rows
                                                                    } else {
            
                                                                         echo" <tr><td>" . $row['GroupNo'] . "</td><td>" . $row['Date'] . "</td><td>".$row['Time']."</td><td><a href='#opt2' rel='noopener noreferrer' value='" . $row['Title'] . "' onclick='bookmark(this);'>" . $row['Title'] . "</td>" . "</a></td><td>" . $row['Members'] . "</td>" . "</td><td>" . $row['Technical Adviser'] . "</td>" . "</td><td>" . $row['Content Adviser'] . "</td><td>" . $row['Category'] . "</td><td>" . $row['Status'] . "</td>" . "</td></tr>"; //table rows
                                                                    }
                                                            }
                                                        }echo "</table>";
                                                    }
                                                }
                                                }
                                            } else {
                                                $query = "SELECT * FROM archive  ORDER BY Date DESC";
                                                if ($result = mysqli_query($lib, $query))/* mysqli_query executes the query */ {
                                                     echo"<table class='table table-bordered' width='100%' cellspacing='0'><th>Group Number</th><th>Date</th><th>Time</th><th>Title</th><th>Members</th><th>Technical Adviser</th><th>Content Adviser</th><th>Category</th><th>Status</th>"; //table header
                                                     while ($row = mysqli_fetch_array($result)) {
                                                        if ($row['Status'] == "Completed") {
                                                            echo" <tr><td>" . $row['GroupNo'] . "</td><td>" . $row['Date'] . "</td><td><a href='" . $row['URL'] . "' target='_blank' rel='noopener noreferrer'>" . $row['Title'] . "</td>" . "</a></td><td>" . $row['Members'] . "</td>" . "</td><td>" . $row['Technical Adviser'] . "</td>" . "</td><td>" . $row['Content Adviser'] . "</td><td>" . $row['Category'] . "</td><td>" . $row['Status'] . "</td>" . "</td></tr>"; //table rows
                                                        } else {

                                                             echo" <tr><td>" . $row['GroupNo'] . "</td><td>".$row['Time']."</td><td>" . $row['Date'] . "</td><td><a href='#opt2' rel='noopener noreferrer' value='" . $row['Title'] . "' onclick='bookmark(this);'>" . $row['Title'] . "</td>" . "</a></td><td>" . $row['Members'] . "</td>" . "</td><td>" . $row['Technical Adviser'] . "</td>" . "</td><td>" . $row['Content Adviser'] . "</td><td>" . $row['Category'] . "</td><td>" . $row['Status'] . "</td>" . "</td></tr>"; //table rows
                                                        }
                                                    }
                                                }
                                            }echo "</table>"; //end of table
                                            ?>      
                                            </form>
                                    </div>
                                </div>
                          
                        </div>
                    </main>
                </div>
            </div>

 <nav class="container-floater">
                <div class="floating-action-btn"><div class = "tooltip1"><a style='color: inherit;' href='#delete'><i class='fas fa-trash-alt my-float-accounts-1'></i></a>
                        <span class = "tooltiptext" style="right: 280% !important"> Delete </span></div></div>
                <div class="floating-action-btn"><i class="fas fa-ellipsis-v my-float-accounts"></i></div>
            </nav>  
                                   <div id="delete" class="overlay">
                                                    <div class="popup">
                                                        <form action="archive-admin.php"><a class="close" href="archive-admin.php">&times;</a></form>
                                                        <br><br>
                                                        <div class="content" align="center">
                                                            Delete a research paper
                                                            <br><br>
                                                            <form method="post">
                                                                <input type="submit" name="confirm" value="On-going research" class="btn2">
                                                                <br> <br>
                                                                 <input type="submit" name="confirm" value="Completed research" class="btn2">
                                                                 <?php
                                                                 if(isset($_POST['confirm'])){
                                                                     if($_POST['confirm'] == "On-going research"){
                                                                         echo "<script>location='http://order-com.stackstaging.com/archive-admin.php#ongoing'</script>";
                                                                         
                                                                     }else{
                                                                         echo "<script>location='http://order-com.stackstaging.com/archive-admin.php#completed'</script>";
                                                                     }
                                                                 }
                                                                 ?>
                                                                <br>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                               
                                                   <div id="ongoing" class="overlay">
                                                    <div class="popup">
                                                         <form action="archive-admin.php"><a class="close" href="archive-admin.php">&times;</a></form>
                                                        <br><br>
                                                        <div class="content" align="center">
                                                            Delete on-going research paper
                                                            <br><br>
                                                            <form method="post">
                                                                <input type="text" name="deletetitle" placeholder="Input research title" style="width: 65%;" required>
                                                                <br><br>
                                                                <input type="text" name="date" placeholder="Date of upload" style="width: 65%;" required>
                                                                <br><br>
                                                                <input type="text" name="time" placeholder="Time up of upload" style="width: 65%;" required>
                                                                <br><br>
                                                                <input type="submit" name="delete" value="Confirm" class="btn2">
                                                                <br>
                                                                <?php
                                                                if (isset($_POST['delete'])) {
                                                                    $selectdelete = "SELECT * FROM archive WHERE Title='" . mysqli_real_escape_string($lib, $_POST['deletetitle']) . "' AND Date='".mysqli_real_escape_string($lib, $_POST['date'])."' AND Time='".mysqli_real_escape_string($lib, $_POST['time'])."'";
                                                                    $result = mysqli_query($lib, $selectdelete);
                                                                    if (mysqli_num_rows($result) > 0) {
                                                                            $_SESSION['deletetitle'] = $_POST['deletetitle'];
                                                                            $_SESSION['date'] = $_POST['date'];
                                                                            $_SESSION['time'] = $_POST['time'];
                                                                            echo "<script>location='http://order-com.stackstaging.com/archive-admin.php#confirmdelete1'</script>";
                                                                    } else {
                                                                        echo "<br><p align='center'><font color = '#fc1616'>Research does not exist</font></p>";
                                                                    }
                                                                 }
                                                                
                                                                ?>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            <div id="completed" class="overlay">
                                                    <div class="popup">
                                                         <form action="archive-admin.php"><a class="close" href="archive-admin.php">&times;</a></form>
                                                        <br><br>
                                                        <div class="content" align="center">
                                                            Delete completed research paper
                                                            <br><br>
                                                            <form method="post">
                                                                <input type="text" name="deletetitle" placeholder="Input research title" style="width: 65%;" required>
                                                                <br><br>
                                                                <input type="submit" name="delete" value="Confirm" class="btn2">
                                                                <br>
                                                                <?php
                                                                if (isset($_POST['delete'])) {
                                                                    $selectdelete = "SELECT * FROM archive WHERE Status='Completed' AND Title='" . mysqli_real_escape_string($lib, $_POST['deletetitle']) . "'";
                                                                    $result = mysqli_query($lib, $selectdelete);
                                                                    if (mysqli_num_rows($result) > 0) {
                                                                            $_SESSION['deletetitle2'] = $_POST['deletetitle'];
                                                                            echo "<script>location='http://order-com.stackstaging.com/archive-admin.php#confirmdelete2'</script>";
                                                                            
                                                                    } else {
                                                                        echo "<br><p align='center'><font color = '#fc1616'>Research does not exist</font></p>";
                                                                    }
                                                                }
                                                                ?>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                <div id="confirmdelete1" class="overlay">
                                                    <div class="popup">
                                                         <form action="archive-admin.php"><a class="close" href="archive-admin.php">&times;</a></form>
                                                        <br><br>
                                                        <div class="content" align="center">
                                                            <p align='center'><font color = '#fc1616'>The file will be <b>deleted permanently</b>. Once permanently deleted, the research paper should be re-uploaded. Would you like to proceed in deleting the file? <br><br> Click "Yes" to proceed.</font></p>
                                                            <br>
                                                            <form method="post">
                                                                <input type="submit" name="deleted" value="Yes" class="btn2">
                                                                <br>
                                                                <?php
                                                                if (isset($_POST['deleted'])) {
                                                                    if($_POST['deleted'] == "Yes"){
                                                                    $delete = "DELETE FROM archive WHERE Title='" . $_SESSION['deletetitle'] . "' AND Date='".$_SESSION['date']."' AND Time='".$_SESSION['time']."'";
                                                                    $result = mysqli_query($lib, $delete);
                                                                    if ($result) {
                                                                            echo "<br><p align='center'><font color = '#177a03'>Research paper successfully deleted</font></p>";
                                                                            
                                                                    } else {
                                                                        echo "<br><p align='center'><font color = '#fc1616'>Research does not exist</font></p>";
                                                                    }
                                                                    }
                                                                }
                                                                ?>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                    
                                 <div id="confirmdelete2" class="overlay">
                                                    <div class="popup">
                                                        <form action="archive-admin.php"><a class="close" href="archive-admin.php">&times;</a></form>
                                                        <br><br>
                                                        <div class="content" align="center">
                                                            <p align='center'><font color = '#fc1616'>The file will be <b>deleted permanently</b>. Once permanently deleted, the research paper should be re-uploaded. Would you like to proceed in deleting the file? <br><br> Click "Yes" to proceed.</font></p>
                                                            <br>
                                                            <form method="post">
                                                                <input type="submit" name="deletedd" value="Yes" class="btn2">
                                                                <br>
                                                                <?php
                                                                if (isset($_POST['deletedd'])) {
                                                                    if($_POST['deletedd'] == "Yes"){
                                                                    $delete = "DELETE FROM archive WHERE Status ='Completed' AND Title='" . $_SESSION['deletetitle2'] . "'";
                                                                    $result = mysqli_query($lib, $delete);
                                                                    if ($result) {
                                                                            echo "<br><p align='center'><font color = '#177a03'>Research paper successfully deleted</font></p>";
                                                                            
                                                                    } else {
                                                                        echo "<br><p align='center'><font color = '#fc1616'>Research does not exist</font></p>";
                                                                    }
                                                                    }
                                                                }
                                                                ?>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>   
                  
            <div id="opt2" class="overlay">
                <div class="popup-small">
                    <form action="archive-admin.php"><a class="close" href="archive-admin.php">&times;</a></form>
                    <br><br>
                    <div class="content" align="center">
                        Choose action
                        <br><br>
                        <form method="post">
                            <input type="submit" name="choice" value="View Abstract" class="btn2">
                            <br><br>
                            <input type="submit" name="choice" value="View Research paper" class="btn2">
                            <?php
                            if (isset($_POST['choice'])) {
                                if ($_POST['choice'] == "View Abstract") {
                                    $query1 = "SELECT * FROM archive ORDER BY Date DESC, Time DESC";
                                    $result1 = mysqli_query($lib, $query1);
                                    while ($recent = mysqli_fetch_array($result1)) {
                                        if (isset($_COOKIE["cookie"])) {
                                                    if ($recent['Title'] == $_COOKIE["cookie"]){ 
                                                        echo "<script>location='http://order-com.stackstaging.com/archive-admin.php#abstract'</script>";
                                                    }
                                                                                               
                                        }
                                    }
                                } else if ($_POST['choice'] == "View Research paper") {
                                        $query1 = "SELECT * FROM archive ORDER BY Date DESC, Time DESC";
                                        $result1 = mysqli_query($lib, $query1);
                                        while ($recent = mysqli_fetch_array($result1)) {
                                                if (isset($_COOKIE["cookie"])) {
                                                    if ($recent['Title'] == $_COOKIE["cookie"]) {
                                                        $query2 = "SELECT * FROM archive WHERE Date ='" . $recent['Date'] . "' AND Time='" . $recent['Time'] . "' AND Title='" . $recent['Title'] . "'";
                                                        $result2 = mysqli_query($lib, $query2);
                                                        $row = mysqli_fetch_array($result2);
                                                        echo "<script>window.open('" . $row['URL'] . "', '_blank');</script>";
                                                    }
                                                } 
                                    }
                                }
                            }
                            ?>
                            <br>
                        </form>
                    </div>
                </div>
            </div>


            <div id="abstract" class="overlay">
                <div class="popup-small">
                    <a class="close" href="archive-admin.php#opt2">&times;</a>
                    <br><br>
                    <div class="content" align="center">
                        <h2>Abstract</h2>
                        <br>
                        <?php
                            $query1 = "SELECT * FROM archive ORDER BY Date DESC, Time DESC";
                            $result1 = mysqli_query($lib, $query1);
                            while ($recent = mysqli_fetch_array($result1)) {
                            if (isset($_COOKIE["cookie"])) {
                                        if ($recent['Title'] == $_COOKIE["cookie"]) {
                                                $query2 = "SELECT * FROM archive WHERE Date ='" . $recent['Date'] . "' AND Time='" . $recent['Time'] . "' AND Title='" . $recent['Title'] . "'";
                                                $result2 = mysqli_query($lib, $query2);
                                                $row = mysqli_fetch_array($result2);                                            
                                                echo  $row['Abstract'];
                                        }
                            } 
                        }
                        ?>
                    <br>
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
            <script type="text/javascript">

                function bookmark(lnk)
                {
                    var text = lnk.getAttribute('value');
                    createCookie("cookie", text);
                }


                function createCookie(name, value, days) {
                    var expires;
                    if (days) {
                        var date = new Date();
                        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                        expires = "; expires=" + date.toGMTString();
                    } else {
                        expires = "";
                    }
                    document.cookie = escape(name) + "=" + escape(value) + expires + "; path=/";
                }
            </script>
        </body>
    </html>
    <?php
}
?>