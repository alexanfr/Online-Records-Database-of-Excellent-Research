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
            <meta name="viewport" content="width=device-width, initial-scale=0.95, shrink-to-fit=no" />
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
                             
                                <a class="nav-link" href="myresearch.php"
                                   ><div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                    My Research</a>

                                <a class="nav-link collapsed" href="library.php" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts"
                                   ><div class="sb-nav-link-icon"><i class="fas fa-landmark"></i></div>
                                    Library
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                                    ></a>
                                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="library.php">All</a>
                                        <a class="nav-link" href="ongoing.php">On-going</a>
                                        <a class="nav-link" href="completed.php">Completed</a>
                                    </nav>
                                </div>
                                <a class="nav-link" href="settings.php"
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
                            <h1 class="mt-4">LIBRARY</h1>
                            
                              
                                <div class="card-body">
                                    <div class = "bar">
                                        <div class ="bar-line">
                                            <div class="bar-display">
                                                <a href = "library.php">
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
                                                    echo "<br><p align='center'><font color = '#fc1616'>No entry placed</font></p>";
                                                } else {
                                                    if ($_POST['option'] == "all") {
                                                            $latest ="SELECT Status, MAX(Date) AS Date, MAX(Time) AS Time, GroupNo, Title, URL, Members, 'Technical Adviser', 'Content Adviser', Category FROM library GROUP BY GroupNo ORDER BY Date DESC";
                                                            $validatelatest = mysqli_query($lib, $latest);
                                                            echo"<table class='table table-bordered' width='100%' cellspacing='0'><th>Group Number</th><th>Date</th><th>Title</th><th>Members</th><th>Technical Adviser</th><th>Content Adviser</th><th>Category</th><th>Status</th>"; //table header
                                                            while($recent = mysqli_fetch_array($validatelatest)){
                                                            $query = "SELECT * FROM library WHERE (Status LIKE '%" . mysqli_real_escape_string($lib, $_POST['search']) . "%' AND Date ='".$recent['Date']."' AND Time='".$recent['Time']."')  OR (Title LIKE '%" . mysqli_real_escape_string($lib, $_POST['search']) . "%' AND Date ='".$recent['Date']."' AND Time='".$recent['Time']."') OR (GroupNo LIKE '%" . mysqli_real_escape_string($lib, $_POST['search']) . "%' AND Date ='".$recent['Date']."' AND Time='".$recent['Time']."') OR (Date LIKE '%" . mysqli_real_escape_string($lib, $_POST['search']) . "%' AND Date ='".$recent['Date']."' AND Time='".$recent['Time']."') OR (`Technical Adviser` LIKE '%" . mysqli_real_escape_string($lib, $_POST['search']) . "%' AND Date ='".$recent['Date']."' AND Time='".$recent['Time']."') OR (`Content Adviser` LIKE '%" . mysqli_real_escape_string($lib, $_POST['search']) . "%' AND Date ='".$recent['Date']."' AND Time='".$recent['Time']."') OR (Category LIKE '%" . mysqli_real_escape_string($lib, $_POST['search']) . "%' AND Date ='".$recent['Date']."' AND Time='".$recent['Time']."') OR (Members LIKE '%" . mysqli_real_escape_string($lib, $_POST['search']) . "%' AND Date ='".$recent['Date']."' AND Time='".$recent['Time']."') GROUP BY GroupNo";
                                                            $result = mysqli_query($lib, $query);
                                                                while ($row = mysqli_fetch_array($result)) {
                                                                    if ($row['Status'] == "Completed") {
                                                                        echo" <tr><td>" . $row['GroupNo'] . "</td><td>" . $row['Date'] . "</td><td><a href='" . $row['URL'] . "' target='_blank' rel='noopener noreferrer'>" . $row['Title'] . "</td>" . "</a></td><td>" . $row['Members'] . "</td>" . "</td><td>" . $row['Technical Adviser'] . "</td>" . "</td><td>" . $row['Content Adviser'] . "</td><td>" . $row['Category'] . "</td><td>" . $row['Status'] . "</td>" . "</td></tr>"; //table rows
                                                                    } else {
            
                                                                         echo" <tr><td>" . $row['GroupNo'] . "</td><td>" . $row['Date'] . "</td><td>" . $row['Title'] . "</td>" . "</td><td>" . $row['Members'] . "</td>" . "</td><td>" . $row['Technical Adviser'] . "</td>" . "</td><td>" . $row['Content Adviser'] . "</td><td>" . $row['Category'] . "</td><td>" . $row['Status'] . "</td>" . "</td></tr>"; //table rows
                                                                    }
                                                                }
                                                            }echo "</table>";
                                                         //end of table
                                                    } else if ($_POST['option'] == "title") {
                                                            $latest ="SELECT Status, MAX(Date) AS Date, MAX(Time) AS Time, GroupNo, Title, URL, Members, 'Technical Adviser', 'Content Adviser', Category FROM library GROUP BY GroupNo ORDER BY Date DESC";
                                                            $validatelatest = mysqli_query($lib, $latest);
                                                            echo"<table class='table table-bordered' width='100%' cellspacing='0'><th>Group Number</th><th>Date</th><th>Title</th><th>Members</th><th>Technical Adviser</th><th>Content Adviser</th><th>Category</th><th>Status</th>"; //table header
                                                            while($recent = mysqli_fetch_array($validatelatest)){
                                                            $query = "SELECT * FROM library WHERE `Title` LIKE '%" . mysqli_real_escape_string($lib, $_POST['search']) . "%' AND Date ='".$recent['Date']."' AND Time='".$recent['Time']."' GROUP BY GroupNo";
                                                            $result = mysqli_query($lib, $query);
                                                                while ($row = mysqli_fetch_array($result)) {
                                                                    if ($row['Status'] == "Completed") {
                                                                        echo" <tr><td>" . $row['GroupNo'] . "</td><td>" . $row['Date'] . "</td><td><a href='" . $row['URL'] . "' target='_blank' rel='noopener noreferrer'>" . $row['Title'] . "</td>" . "</a></td><td>" . $row['Members'] . "</td>" . "</td><td>" . $row['Technical Adviser'] . "</td>" . "</td><td>" . $row['Content Adviser'] . "</td><td>" . $row['Category'] . "</td><td>" . $row['Status'] . "</td>" . "</td></tr>"; //table rows
                                                                    } else {
            
                                                                         echo" <tr><td>" . $row['GroupNo'] . "</td><td>" . $row['Date'] . "</td><td>" . $row['Title'] . "</td>" . "</td><td>" . $row['Members'] . "</td>" . "</td><td>" . $row['Technical Adviser'] . "</td>" . "</td><td>" . $row['Content Adviser'] . "</td><td>" . $row['Category'] . "</td><td>" . $row['Status'] . "</td>" . "</td></tr>"; //table rows
                                                                    }
                                                                }
                                                            }echo "</table>";
                                                         //end of table
                                                    } else if ($_POST['option'] == "members") {
                                                           $latest ="SELECT Status, MAX(Date) AS Date, MAX(Time) AS Time, GroupNo, Title, URL, Members, 'Technical Adviser', 'Content Adviser', Category FROM library GROUP BY GroupNo ORDER BY Date DESC";
                                                            $validatelatest = mysqli_query($lib, $latest);
                                                            echo"<table class='table table-bordered' width='100%' cellspacing='0'><th>Group Number</th><th>Date</th><th>Title</th><th>Members</th><th>Technical Adviser</th><th>Content Adviser</th><th>Category</th><th>Status</th>"; //table header
                                                            while($recent = mysqli_fetch_array($validatelatest)){
                                                            $query = "SELECT * FROM library WHERE `Members` LIKE '%" . mysqli_real_escape_string($lib, $_POST['search']) . "%' AND Date ='".$recent['Date']."' AND Time='".$recent['Time']."' GROUP BY GroupNo";
                                                            $result = mysqli_query($lib, $query);
                                                                while ($row = mysqli_fetch_array($result)) {
                                                                    if ($row['Status'] == "Completed") {
                                                                        echo" <tr><td>" . $row['GroupNo'] . "</td><td>" . $row['Date'] . "</td><td><a href='" . $row['URL'] . "' target='_blank' rel='noopener noreferrer'>" . $row['Title'] . "</td>" . "</a></td><td>" . $row['Members'] . "</td>" . "</td><td>" . $row['Technical Adviser'] . "</td>" . "</td><td>" . $row['Content Adviser'] . "</td><td>" . $row['Category'] . "</td><td>" . $row['Status'] . "</td>" . "</td></tr>"; //table rows
                                                                    } else {
            
                                                                         echo" <tr><td>" . $row['GroupNo'] . "</td><td>" . $row['Date'] . "</td><td>" . $row['Title'] . "</td>" . "</td><td>" . $row['Members'] . "</td>" . "</td><td>" . $row['Technical Adviser'] . "</td>" . "</td><td>" . $row['Content Adviser'] . "</td><td>" . $row['Category'] . "</td><td>" . $row['Status'] . "</td>" . "</td></tr>"; //table rows
                                                                    }
                                                                }
                                                            }echo "</table>";
                                                         //end of table
                                                    } else if ($_POST['option'] == "groupnum") {
                                                            $latest ="SELECT Status, MAX(Date) AS Date, MAX(Time) AS Time, GroupNo, Title, URL, Members, 'Technical Adviser', 'Content Adviser', Category FROM library GROUP BY GroupNo ORDER BY Date DESC";
                                                            $validatelatest = mysqli_query($lib, $latest);
                                                            echo"<table class='table table-bordered' width='100%' cellspacing='0'><th>Group Number</th><th>Date</th><th>Title</th><th>Members</th><th>Technical Adviser</th><th>Content Adviser</th><th>Category</th><th>Status</th>"; //table header
                                                            while($recent = mysqli_fetch_array($validatelatest)){
                                                            $query = "SELECT * FROM library WHERE `GroupNo` LIKE '%" . mysqli_real_escape_string($lib, $_POST['search']) . "%' AND Date ='".$recent['Date']."' AND Time='".$recent['Time']."' GROUP BY GroupNo";
                                                            $result = mysqli_query($lib, $query);
                                                                while ($row = mysqli_fetch_array($result)) {
                                                                    if ($row['Status'] == "Completed") {
                                                                        echo" <tr><td>" . $row['GroupNo'] . "</td><td>" . $row['Date'] . "</td><td><a href='" . $row['URL'] . "' target='_blank' rel='noopener noreferrer'>" . $row['Title'] . "</td>" . "</a></td><td>" . $row['Members'] . "</td>" . "</td><td>" . $row['Technical Adviser'] . "</td>" . "</td><td>" . $row['Content Adviser'] . "</td><td>" . $row['Category'] . "</td><td>" . $row['Status'] . "</td>" . "</td></tr>"; //table rows
                                                                    } else {
            
                                                                         echo" <tr><td>" . $row['GroupNo'] . "</td><td>" . $row['Date'] . "</td><td>" . $row['Title'] . "</td>" . "</td><td>" . $row['Members'] . "</td>" . "</td><td>" . $row['Technical Adviser'] . "</td>" . "</td><td>" . $row['Content Adviser'] . "</td><td>" . $row['Category'] . "</td><td>" . $row['Status'] . "</td>" . "</td></tr>"; //table rows
                                                                    }
                                                                }
                                                            }echo "</table>";
                                                         //end of table
                                                    } else if ($_POST['option'] == "date") {
                                                           $latest ="SELECT Status, MAX(Date) AS Date, MAX(Time) AS Time, GroupNo, Title, URL, Members, 'Technical Adviser', 'Content Adviser', Category FROM library GROUP BY GroupNo ORDER BY Date DESC";
                                                            $validatelatest = mysqli_query($lib, $latest);
                                                            echo"<table class='table table-bordered' width='100%' cellspacing='0'><th>Group Number</th><th>Date</th><th>Title</th><th>Members</th><th>Technical Adviser</th><th>Content Adviser</th><th>Category</th><th>Status</th>"; //table header
                                                            while($recent = mysqli_fetch_array($validatelatest)){
                                                            $query = "SELECT * FROM library WHERE `Date` LIKE '%" . mysqli_real_escape_string($lib, $_POST['search']) . "%' AND Date ='".$recent['Date']."' AND Time='".$recent['Time']."' GROUP BY GroupNo";
                                                            $result = mysqli_query($lib, $query);
                                                                while ($row = mysqli_fetch_array($result)) {
                                                                    if ($row['Status'] == "Completed") {
                                                                        echo" <tr><td>" . $row['GroupNo'] . "</td><td>" . $row['Date'] . "</td><td><a href='" . $row['URL'] . "' target='_blank' rel='noopener noreferrer'>" . $row['Title'] . "</td>" . "</a></td><td>" . $row['Members'] . "</td>" . "</td><td>" . $row['Technical Adviser'] . "</td>" . "</td><td>" . $row['Content Adviser'] . "</td><td>" . $row['Category'] . "</td><td>" . $row['Status'] . "</td>" . "</td></tr>"; //table rows
                                                                    } else {
            
                                                                         echo" <tr><td>" . $row['GroupNo'] . "</td><td>" . $row['Date'] . "</td><td>" . $row['Title'] . "</td>" . "</td><td>" . $row['Members'] . "</td>" . "</td><td>" . $row['Technical Adviser'] . "</td>" . "</td><td>" . $row['Content Adviser'] . "</td><td>" . $row['Category'] . "</td><td>" . $row['Status'] . "</td>" . "</td></tr>"; //table rows
                                                                    }
                                                                }
                                                            }echo "</table>";
                                                         //end of table
                                                    } else if ($_POST['option'] == "technical") {
                                                          $latest ="SELECT Status, MAX(Date) AS Date, MAX(Time) AS Time, GroupNo, Title, URL, Members, 'Technical Adviser', 'Content Adviser', Category FROM library GROUP BY GroupNo ORDER BY Date DESC";
                                                            $validatelatest = mysqli_query($lib, $latest);
                                                            echo"<table class='table table-bordered' width='100%' cellspacing='0'><th>Group Number</th><th>Date</th><th>Title</th><th>Members</th><th>Technical Adviser</th><th>Content Adviser</th><th>Category</th><th>Status</th>"; //table header
                                                            while($recent = mysqli_fetch_array($validatelatest)){
                                                            $query = "SELECT * FROM library WHERE `Technical Adviser` LIKE '%" . mysqli_real_escape_string($lib, $_POST['search']) . "%' AND Date ='".$recent['Date']."' AND Time='".$recent['Time']."' GROUP BY GroupNo";
                                                            $result = mysqli_query($lib, $query);
                                                                while ($row = mysqli_fetch_array($result)) {
                                                                    if ($row['Status'] == "Completed") {
                                                                        echo" <tr><td>" . $row['GroupNo'] . "</td><td>" . $row['Date'] . "</td><td><a href='" . $row['URL'] . "' target='_blank' rel='noopener noreferrer'>" . $row['Title'] . "</td>" . "</a></td><td>" . $row['Members'] . "</td>" . "</td><td>" . $row['Technical Adviser'] . "</td>" . "</td><td>" . $row['Content Adviser'] . "</td><td>" . $row['Category'] . "</td><td>" . $row['Status'] . "</td>" . "</td></tr>"; //table rows
                                                                    } else {
            
                                                                         echo" <tr><td>" . $row['GroupNo'] . "</td><td>" . $row['Date'] . "</td><td>" . $row['Title'] . "</td>" . "</td><td>" . $row['Members'] . "</td>" . "</td><td>" . $row['Technical Adviser'] . "</td>" . "</td><td>" . $row['Content Adviser'] . "</td><td>" . $row['Category'] . "</td><td>" . $row['Status'] . "</td>" . "</td></tr>"; //table rows
                                                                    }
                                                                }
                                                            }echo "</table>";
                                                         //end of table
                                                    } else if ($_POST['option'] == "content") {
                                                           $latest ="SELECT Status, MAX(Date) AS Date, MAX(Time) AS Time, GroupNo, Title, URL, Members, 'Technical Adviser', 'Content Adviser', Category FROM library GROUP BY GroupNo ORDER BY Date DESC";
                                                            $validatelatest = mysqli_query($lib, $latest);
                                                            echo"<table class='table table-bordered' width='100%' cellspacing='0'><th>Group Number</th><th>Date</th><th>Title</th><th>Members</th><th>Technical Adviser</th><th>Content Adviser</th><th>Category</th><th>Status</th>"; //table header
                                                            while($recent = mysqli_fetch_array($validatelatest)){
                                                            $query = "SELECT * FROM library WHERE `Content Adviser` LIKE '%" . mysqli_real_escape_string($lib, $_POST['search']) . "%' AND Date ='".$recent['Date']."' AND Time='".$recent['Time']."' GROUP BY GroupNo";
                                                            $result = mysqli_query($lib, $query);
                                                                while ($row = mysqli_fetch_array($result)) {
                                                                    if ($row['Status'] == "Completed") {
                                                                        echo" <tr><td>" . $row['GroupNo'] . "</td><td>" . $row['Date'] . "</td><td><a href='" . $row['URL'] . "' target='_blank' rel='noopener noreferrer'>" . $row['Title'] . "</td>" . "</a></td><td>" . $row['Members'] . "</td>" . "</td><td>" . $row['Technical Adviser'] . "</td>" . "</td><td>" . $row['Content Adviser'] . "</td><td>" . $row['Category'] . "</td><td>" . $row['Status'] . "</td>" . "</td></tr>"; //table rows
                                                                    } else {
            
                                                                         echo" <tr><td>" . $row['GroupNo'] . "</td><td>" . $row['Date'] . "</td><td>" . $row['Title'] . "</td>" . "</td><td>" . $row['Members'] . "</td>" . "</td><td>" . $row['Technical Adviser'] . "</td>" . "</td><td>" . $row['Content Adviser'] . "</td><td>" . $row['Category'] . "</td><td>" . $row['Status'] . "</td>" . "</td></tr>"; //table rows
                                                                    }
                                                                }
                                                            }echo "</table>";
                                                         //end of table
                                                    } else if ($_POST['option'] == "category") {
                                                      $latest ="SELECT Status, MAX(Date) AS Date, MAX(Time) AS Time, GroupNo, Title, URL, Members, 'Technical Adviser', 'Content Adviser', Category FROM library GROUP BY GroupNo ORDER BY Date DESC";
                                                            $validatelatest = mysqli_query($lib, $latest);
                                                            echo"<table class='table table-bordered' width='100%' cellspacing='0'><th>Group Number</th><th>Date</th><th>Title</th><th>Members</th><th>Technical Adviser</th><th>Content Adviser</th><th>Category</th><th>Status</th>"; //table header
                                                            while($recent = mysqli_fetch_array($validatelatest)){
                                                            $query = "SELECT * FROM library WHERE Category LIKE '%" . mysqli_real_escape_string($lib, $_POST['search']) . "%' AND Date ='".$recent['Date']."' AND Time='".$recent['Time']."' GROUP BY GroupNo";
                                                            $result = mysqli_query($lib, $query);
                                                                while ($row = mysqli_fetch_array($result)) {
                                                                    if ($row['Status'] == "Completed") {
                                                                        echo" <tr><td>" . $row['GroupNo'] . "</td><td>" . $row['Date'] . "</td><td><a href='" . $row['URL'] . "' target='_blank' rel='noopener noreferrer'>" . $row['Title'] . "</td>" . "</a></td><td>" . $row['Members'] . "</td>" . "</td><td>" . $row['Technical Adviser'] . "</td>" . "</td><td>" . $row['Content Adviser'] . "</td><td>" . $row['Category'] . "</td><td>" . $row['Status'] . "</td>" . "</td></tr>"; //table rows
                                                                    } else {
            
                                                                         echo" <tr><td>" . $row['GroupNo'] . "</td><td>" . $row['Date'] . "</td><td>" . $row['Title'] . "</td>" . "</td><td>" . $row['Members'] . "</td>" . "</td><td>" . $row['Technical Adviser'] . "</td>" . "</td><td>" . $row['Content Adviser'] . "</td><td>" . $row['Category'] . "</td><td>" . $row['Status'] . "</td>" . "</td></tr>"; //table rows
                                                                    }
                                                                }
                                                            }
                                                        }echo "</table>"; //end of table
                                                    }
                                        } else {
                                               $latest ="SELECT Status, MAX(Date) AS Date, MAX(Time) AS Time, GroupNo, Title, URL, Members, 'Technical Adviser', 'Content Adviser', Category FROM library GROUP BY GroupNo ORDER BY Date DESC";
                                                $validatelatest = mysqli_query($lib, $latest);
                                                echo"<table class='table table-bordered' width='100%' cellspacing='0'><th>Group Number</th><th>Date</th><th>Title</th><th>Members</th><th>Technical Adviser</th><th>Content Adviser</th><th>Category</th><th>Status</th>"; //table header
                                                while($recent = mysqli_fetch_array($validatelatest)){
                                                $query = "SELECT * FROM library WHERE Date ='".$recent['Date']."' AND Time='".$recent['Time']."' ORDER BY Date, Time DESC";
                                                $result = mysqli_query($lib, $query);
                                                    while ($row = mysqli_fetch_array($result)) {
                                                        if ($row['Status'] == "Completed") {
                                                            echo" <tr><td>" . $row['GroupNo'] . "</td><td>" . $row['Date'] . "</td><td><a href='" . $row['URL'] . "' target='_blank' rel='noopener noreferrer'>" . $row['Title'] . "</td>" . "</a></td><td>" . $row['Members'] . "</td>" . "</td><td>" . $row['Technical Adviser'] . "</td>" . "</td><td>" . $row['Content Adviser'] . "</td><td>" . $row['Category'] . "</td><td>" . $row['Status'] . "</td>" . "</td></tr>"; //table rows
                                                        } else {

                                                             echo" <tr><td>" . $row['GroupNo'] . "</td><td>" . $row['Date'] . "</td><td>" . $row['Title'] . "</td>" . "</td><td>" . $row['Members'] . "</td>" . "</td><td>" . $row['Technical Adviser'] . "</td>" . "</td><td>" . $row['Content Adviser'] . "</td><td>" . $row['Category'] . "</td><td>" . $row['Status'] . "</td>" . "</td></tr>"; //table rows
                                                        }
                                                    }
                                                }
                                            }echo "</table>"; //end of table
                                            ?> 

                                            </form>        
                                    </div>
                                </div>
                            
                    </main>
                </div>
            </div>

            <div id="members" class="overlay">
                <div class="popup">
                    <h2>MEMBERS:</h2>
                    <a class="close" href="#">&times;</a>
                    <div class="content">
                        Member 1
                        <br>
                        Member 2
                        <br>
                        Member 3
                    </div>
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