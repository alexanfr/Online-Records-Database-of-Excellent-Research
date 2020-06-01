<?php
session_start();
if ($_SESSION['logged_in'] == null && $_SESSION['lastname'] == null && $_SESSION['firstname'] == null) {
    header("Cache-Control: no-cache, must-revalidate");
    header('Location: /index.php');
} else {
    ?>
    <!DOCTYPE html>
    <html lang="en">
        <?php
        $lib = mysqli_connect("shareddb-u.hosting.stackcp.net", "ordersystem-3133336f8c", "qwerty123", "ordersystem-3133336f8c");
        if (mysqli_connect_error()) {
            die("connection to database was failed");
        }
        $db = mysqli_connect("shareddb-u.hosting.stackcp.net", "ordersystem-3133336f8c", "qwerty123", "ordersystem-3133336f8c");
        if (mysqli_connect_error()) {
            die("connection to database was failed");
        }
        ?>
        <head>
            <meta charset="utf-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <meta name="viewport" content="width=device-width, initial-scale=0.56, shrink-to-fit=no" />
            <meta name="description" content="" />
            <meta name="author" content="" />
            <title>My Research</title>
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
        </head>
        <style>
            .btn1 {
                background-color: #212429;
                color: #ffffff;     
                border-radius: 8px;
                padding: 5px 5px;
            }
            .btn5 {
                padding: 10px 20px !important;
                text-align: center !important;
                border-radius: 8px !important;
                width: 50% !important;
            }

            .responsive {
                width: 250px !important; 
                text-align: left !important;
            }

            .inputs {
                width: 320px !important;
                width: -webkit-fill-available !important;
                width: -moz-available !important; 
                width: fill-available !important;
            } 
            @media screen and (max-width: 600px) {
                .btn5 {
                    font-size: 14px;
                    text-align: center;
                    width: auto !important;
                }
                .inputs {
                    width: 199px !important;
                }
                .upload-btn {
                    left: 80% !important;
                }
            }
            .upload-btn {
                position: absolute;
                left: 90%;
                background-color: var(--dark);
                border: none;
                color: white;
                padding: 10px 24px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                /*margin: 4px 2px;*/
                cursor: pointer;
                border-radius: 12px;
                background-color: #212429 !important;
            }
            .members {
                color: #000000;
            }
            .members::placeholder {
                font-size: 13px !important;
            }
             .warning {
                font-size: 13px !important;
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
        <body class="sb-nav-fixed">
            <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
                <!-- <a class="navbar-brand" href="index.html">O.R.D.E.R</a> -->
                <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button> 
                <!-- Navbar Search-->
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
                                    My Research</a
                                >

                                <a class="nav-link collapsed" href="library.php" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts"
                                   ><div class="sb-nav-link-icon"><i class="fas fa-landmark"></i></div>
                                    Library 
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                                    ></a>
                                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="library.php">All</a>
                                        <a class="nav-link" href="ongoing.php">On-going</a><a class="nav-link" href="completed.php">Completed</a></nav>
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
                            <div class="small">Logged in as: </div>
                            <?php
                            echo $_SESSION['lastname'] . ", <br>";
                            echo $_SESSION['firstname'];
                            ?>                      
                        </div>
                    </nav>
                </div>
                <div id="layoutSidenav_content">
                    <?php
                    $query = "SELECT * FROM archive";
                    $title = " ";
                    $group = $_SESSION['Group'];
                    $members = " ";
                    $category = " ";
                    if ($result = mysqli_query($lib, $query)) {
                        if (!mysqli_num_rows($result) == 0) {
                            while ($row = mysqli_fetch_array($result)) {
                                if ($_SESSION['Group'] == $row['GroupNo']) {
                                    $title = $row['Title'];
                                    $category = $row['Category'];
                                    $group = $row['GroupNo'];
                                    $members = $row['Members'];
                                }
                            }
                        }
                    }
                    ?>
                    <main>
                        <div class="container-fluid">
                            <div class = "bar">
                                <div class ="bar-line">
                                    <div class="bar-display">
                                        <h1 class="mt-4"> MY RESEARCH </h1>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <p class="display-5">       
                                TITLE: <?php echo $title ?>
                                <br>CATEGORY: <?php echo $category ?>
                                <br>GROUP NUMBER: <?php echo $group ?>
                                <br>MEMBERS: <?php echo $members ?> </p>


      
                                <div class="card-body">
                                    <div class = "bar">
                                        <div class ="bar-line">
                                            <div class="bar-display">
                                                <p class="display-5"> Upload History: </p>
                                            </div>
                                            <div class="bar-display">
                                                <a style="color: inherit;" href="#upload"><button class = "upload-btn">Submit</button></a>
                                            </div>
                                        </div>
                                    </div>                                

                                    <div class="table-responsive">
                                        <table class="table table-bordered"  width="100%" cellspacing="0">
                                            <?php
                                            $lib = mysqli_connect("shareddb-u.hosting.stackcp.net", "ordersystem-3133336f8c", "qwerty123", "ordersystem-3133336f8c"); //very popular way to connect to mysqli_connect... i means to improve 
                                            if (mysqli_connect_error()) {
                                                die("connection to database was failed");
                                            }


                                            $query = "SELECT * FROM archive WHERE GroupNo ='" . $_SESSION['Group'] . "' ORDER BY Date DESC, Time DESC";

                                            if ($result = mysqli_query($lib, $query)){
                                                echo"<table class='table table-bordered' width='100%' cellspacing='0'><th>Group Number</th><th>Date</th><th>Time</th><th>Title</th><th>Members</th><th>Technical Adviser</th><th>Content Adviser</th><th>Category</th><th>Status</th>"; //table header
                                                while ($row = mysqli_fetch_array($result)) {
                                                      echo" <tr><td>" . $row['GroupNo'] . "</td><td>" . $row['Date'] . "</td><td>".$row['Time']."</td><td><a href='#opt2' rel='noopener noreferrer' value='" . $row['Title'] . "' onclick='bookmark(this);'>" . $row['Title'] . "</td>" . "</a></td><td>" . $row['Members'] . "</td>" . "</td><td>" . $row['Technical Adviser'] . "</td>" . "</td><td>" . $row['Content Adviser'] . "</td><td>" . $row['Category'] . "</td><td>" . $row['Status'] . "</td>" . "</td></tr>"; //table rows
                                                }
                                            } echo "</table>";
                                            ?>
                                        </table>   
                                    </div>
                                </div>

                        </div>    
                    </main>
                </div>
            </div>


            <div id="upload" class="overlay">
                <div class="popup">
                    <form action="myresearch.php"><a class="close" href="myresearch.php">&times;</a></form>
                    <br><br>
                    <div class="content" align="center">
                        <div class="styleform">
                            <form method="post">

                                <label class = "responsive"> Title: </label> <input type = "text" name="title" class="inputs" required><div class="clear"></div>
                                
                                <label class = "responsive"> Part of the Research (optional): </label> <input type = "text" name="part" class="inputs"><div class="clear"></div>
                                
                                <label class = "responsive"> Abstract: </label> <textarea name="abs" rows="3" cols="30" maxlength = "300 " class="inputs" id="txt" required></textarea><div class="clear" id="warning"></div>

                                <label class = "responsive"> Link of the Work: </label><input type = "text" name="link" class="inputs" required><div class="clear"></div> 

                                <label class = "responsive"> Members: </label> <input type = "text" name="members" placeholder="(ex. Firstname1 Lastname1, Firstname2 Lastname2, ...)" class="members inputs" required><div class="clear"></div>

                                <label class = "responsive"> Technical Adviser: </label> <input type = "text" name="technical" class="inputs" required><div class="clear"></div>

                                <label class = "responsive"> Content Adviser: </label> <input type = "text" name="content" class="inputs" required><div class="clear"></div>

                                <label class = "responsive"> Category: </label> <input type = "text" name="category" class="inputs" required><div class="clear"><br></div>
                        </div>                                                                               
                        <input type="submit" class="btn5" value="Submit" name="upload">
                        <br>
                        <?php
                        $lib = mysqli_connect("shareddb-u.hosting.stackcp.net", "ordersystem-3133336f8c", "qwerty123", "ordersystem-3133336f8c"); 
                        if (isset($_POST['upload'])) {
                            if (array_key_exists('title', $_POST) AND array_key_exists('link', $_POST) AND array_key_exists('members', $_POST) AND array_key_exists('technical', $_POST) AND array_key_exists('content', $_POST) AND array_key_exists('category', $_POST)) {
                                if (mysqli_connect_error()) {
                                    die("connection to database was failed");
                                } else {
                                    $check1 = preg_match('/^[a-zA-Z -,]+$/', $_POST['members']);
                                    $check2 = preg_match('/^[a-zA-Z -.]+$/', $_POST['technical']);
                                    $check3 = preg_match('/^[a-zA-Z -.]+$/', $_POST['content']);

                                    if ($check1 && $check2 && $check3) {
                                        if (!$members == " ") {
                                            $student = mysqli_connect("shareddb-u.hosting.stackcp.net", "ordersystem-3133336f8c", "qwerty123", "ordersystem-3133336f8c");
                                            $query = "SELECT * FROM library WHERE GroupNo = '" . mysqli_real_escape_string($lib, $_SESSION['Group']) . "' AND Title LIKE '%" . mysqli_real_escape_string($lib, $_POST['title']) . "%'";
                                            $query2 = "SELECT * FROM library WHERE Members LIKE '%" . mysqli_real_escape_string($lib, $_SESSION['lastname']) . "%' AND Members LIKE '%" . mysqli_real_escape_string($lib, $_SESSION['firstname']) . "%'";
                                            $query4 = "SELECT * FROM studentaccounts WHERE GroupNum = '" . mysqli_real_escape_string($lib, $_SESSION['Group']) . "' AND AccountStatus = 'Active'";
                                            $validate = mysqli_query($lib, $query);
                                            $validate2 = mysqli_query($lib, $query2);
                                            $validate4 = mysqli_query($student, $query4);
                                            if (mysqli_num_rows($validate) > 0) {
                                                while($row = mysqli_fetch_array($validate)){
                                                    if((preg_match("/\b" . strtoupper($row['Title']) . "\b/i", strtoupper($_POST['title'])))){
                                                        $z++;
                                                    }
                                                }
                                                if ((mysqli_num_rows($validate2) > 0) && ($z > 0)) {
                                                    while ($row = mysqli_fetch_array($validate2)) {
                                                        if (preg_match("/\b" . $row['LastName'] . "\b/i", $_POST['members']) || preg_match("/\b" . $row['FirstName'] . "\b/i", $_POST['members'])) {
                                                            $i++;
                                                        } else {
                                                            $x++;
                                                        }
                                                    }
                                                
                                                    if (($i > 0) && ($x == 0)) {
                                                        date_default_timezone_set('Asia/Hong_Kong');
                                                        $date = date('Y-m-d');
                                                        $time = date('H:i:s');
                                                        $query = "INSERT INTO `archive`(`Date`, `Time`, `GroupNo`, `Title`, `Abstract`, `URL`, `Members`, `Technical Adviser`, `Content Adviser`, `Category`) VALUES ('" . $date . "', '" . $time . "', '" . $_SESSION['Group'] . "', '" . mysqli_real_escape_string($lib, $title) . "', '". mysqli_real_escape_string($lib, $_POST['abs']) ."', '". mysqli_real_escape_string($lib, $_POST['link']) . "', '" . mysqli_real_escape_string($lib, $_POST['members']) . "', '" . mysqli_real_escape_string($lib, $_POST['technical']) . "', '" . mysqli_real_escape_string($lib, $_POST['content']) . "', '" . mysqli_real_escape_string($lib, $_POST['category']) . "')";
                                                        $result = mysqli_query($lib, $query);
                                                          if ($result) {
                                                                echo "<br><p align='center'><font color = '#177a03'>Research paper successfully uploaded</font></p>";
                                                                $check = "SELECT * FROM library WHERE GroupNo = '".$_SESSION['Group']."'";
                                                                $result1 = mysqli_query($lib, $check);
                                                                if(mysqli_num_rows($result1) > 0){
                                                                        $checker = mysqli_fetch_array($result1);
                                                                        if ($checker['Status'] == "On-going"){
                                                                        $update = "UPDATE library SET Date='".$date."', Time='".$time."', Title='".$title."', Abstract='". $_POST['abs']."', URL='".$_POST['link']."', Members='".$_POST['members']."', `Technical Adviser`='".$_POST['technical']."', `Content Adviser`='".$_POST['content']."', Category='".$_POST['category']."' WHERE GroupNo='".$_SESSION['Group']."'";
                                                                        $update2 = mysqli_query($lib, $update);
                                                                        } else {
                                                                            $insert9 = "INSERT INTO `library`(`Date`, `Time`, `GroupNo`, `Title`, `Abstract`, `URL`, `Members`, `Technical Adviser`, `Content Adviser`, `Category`) VALUES ('" . $date . "', '" . $time . "', '" . $_SESSION['Group'] . "', '" . mysqli_real_escape_string($lib, $title) . "', '". mysqli_real_escape_string($lib, $_POST['abs']) ."', '". mysqli_real_escape_string($lib, $_POST['link']) . "', '" . mysqli_real_escape_string($lib, $_POST['members']) . "', '" . mysqli_real_escape_string($lib, $_POST['technical']) . "', '" . mysqli_real_escape_string($lib, $_POST['content']) . "', '" . mysqli_real_escape_string($lib, $_POST['category']) . "')";
                                                                            $insertrun = mysqli_query($lib, $insert9);
                                                                        }
                                                                }else{
																		$latest ="SELECT Status, MAX(Date) AS Date, MAX(Time) AS Time, GroupNo, Title, URL, Members, 'Technical Adviser', 'Content Adviser', Category FROM archive GROUP BY GroupNo";
                                                                        $validatelatest = mysqli_query($lib, $latest);
                                                                            while($recent = mysqli_fetch_array($validatelatest)){
                                                                                $query8 = "SELECT * FROM archive WHERE Date ='".$recent['Date']."' AND Time='".$recent['Time']."' AND GroupNo = '". $_SESSION['Group'] ."' GROUP BY GroupNo";
                                                                        if ($result9 = mysqli_query($lib, $query8)){
                                                                        while ($row = mysqli_fetch_array($result9)) {
                                                                        $insert = "INSERT INTO `library`(`Date`, `Time`, `GroupNo`, `Title`, `Abstract`, `URL`, `Members`, `Technical Adviser`, `Content Adviser`, `Category`) VALUES ('" . $row['Date'] . "', '" . $row['Time'] . "', '" . $row['GroupNo'] . "', '" . $row['Title'] . "', '" . $row['Abstract'] . "', '". $row['URL'] . "', '" . $row['Members'] . "', '" . $row['Technical Adviser'] . "', '" . $row['Content Adviser'] . "', '" . $row['Category'] . "')";
                                                                        $result2 = mysqli_query($lib, $insert); 
                                                                        }
                                                                        }
                                                                }
                                                                }
                                                        } else {
                                                            echo "<br><p align='center'><font color = '#fc1616'> Error uploading your research paper </font></p>";
                                                        }
                                                    } else {
                                                        echo "<br><p align='center'><font color = '#fc1616'>Please make sure that the members are correct</font></p>";
                                                    }
                                                } else {
                                                    echo "<br><p align='center'><font color = '#fc1616'>Your name is not included in the members</font></p>";
                                                }
                                            } else {
                                           $student = mysqli_connect("shareddb-u.hosting.stackcp.net", "ordersystem-3133336f8c", "qwerty123", "ordersystem-3133336f8c");
                                            $query = "SELECT * FROM library WHERE GroupNo = '" . mysqli_real_escape_string($lib, $_SESSION['Group']) . "'";
                                            $query2 = "SELECT * FROM studentaccounts WHERE GroupNum = '" . mysqli_real_escape_string($lib, $_SESSION['Group']) . "' AND AccountStatus = 'Active'";
                                            $validate = mysqli_query($lib, $query);
                                            $validate2 = mysqli_query($student, $query2);
                                             while($row = mysqli_fetch_array($validate)){
                                                $mystring = $_row['Title'];
                                                $findme   = $_POST['title'];
                                                $pos = strpos($mystring, $findme);
                                                $search = strpbrk($_row['Title'], $_POST['title']);
                                             if (mysqli_num_rows($validate) > 0 && ((preg_match("/".$_POST['title']."/i", $row['Title'])) || $pos !== false || $pos !=0 || $search !== false)) {
                                                        $z++;
                                                }
                                             }
                                            if($_POST['part'] != null){
                                                    $title = $_POST['title']." - ".$_POST['part'];
                                            }else{
                                                    $title = $_POST['title'];
                                            }
                                              if($z > 0){
                                                if (mysqli_num_rows($validate2) > 0) {
                                                    while ($row = mysqli_fetch_array($validate2)) {
                                                        if (preg_match("/\b" . $row['LastName'] . "\b/i", $_POST['members']) || preg_match("/\b" . $row['FirstName'] . "\b/i", $_POST['members'])) {
                                                            $i++;
                                                        } else {
                                                            $x++;
                                                        }
                                                    }
                                                    if (($i > 0) && ($x == 0)) {
                                                        date_default_timezone_set('Asia/Hong_Kong');
                                                        $date = date('Y-m-d');
                                                        $time = date('H:i:s');
                                                        $query = "INSERT INTO `archive`(`Date`, `Time`, `GroupNo`, `Title`, `Abstract`, `URL`, `Members`, `Technical Adviser`, `Content Adviser`, `Category`) VALUES ('" . $date . "', '" . $time . "', '" . $_SESSION['Group'] . "', '" . mysqli_real_escape_string($lib, $title) . "', '". mysqli_real_escape_string($lib, $_POST['abs']) ."', '". mysqli_real_escape_string($lib, $_POST['link']) . "', '" . mysqli_real_escape_string($lib, $_POST['members']) . "', '" . mysqli_real_escape_string($lib, $_POST['technical']) . "', '" . mysqli_real_escape_string($lib, $_POST['content']) . "', '" . mysqli_real_escape_string($lib, $_POST['category']) . "')";
                                                        $result = mysqli_query($lib, $query);
                                                                if ($result) {
                                                                echo "<br><p align='center'><font color = '#177a03'>Research paper successfully uploaded</font></p>";
                                                                $check = "SELECT * FROM library WHERE GroupNo = '".$_SESSION['Group']."'";
                                                                $result1 = mysqli_query($lib, $check);
                                                                if(mysqli_num_rows($result1) > 0){
                                                                        $checker = mysqli_fetch_array($result1);
                                                                        if ($checker['Status'] == "On-going"){
                                                                        $update = "UPDATE library SET Date='".$date."', Time='".$time."', Title='".$title."', Abstract='". $_POST['abs']."', URL='".$_POST['link']."', Members='".$_POST['members']."', `Technical Adviser`='".$_POST['technical']."', `Content Adviser`='".$_POST['content']."', Category='".$_POST['category']."' WHERE GroupNo='".$_SESSION['Group']."'";
                                                                        $update2 = mysqli_query($lib, $update);
                                                                        } else {
                                                                            $insert9 = "INSERT INTO `library`(`Date`, `Time`, `GroupNo`, `Title`, `Abstract`, `URL`, `Members`, `Technical Adviser`, `Content Adviser`, `Category`) VALUES ('" . $date . "', '" . $time . "', '" . $_SESSION['Group'] . "', '" . mysqli_real_escape_string($lib, $title) . "', '". mysqli_real_escape_string($lib, $_POST['abs']) ."', '". mysqli_real_escape_string($lib, $_POST['link']) . "', '" . mysqli_real_escape_string($lib, $_POST['members']) . "', '" . mysqli_real_escape_string($lib, $_POST['technical']) . "', '" . mysqli_real_escape_string($lib, $_POST['content']) . "', '" . mysqli_real_escape_string($lib, $_POST['category']) . "')";
                                                                            $insertrun = mysqli_query($lib, $insert9);
                                                                        }
                                                                }
                                                                if(mysqli_num_rows($result1) > 0){
                                                                    $update = "UPDATE library SET Date='".$date."', Time='".$time."', Title='".$title."', URL='".$_POST['link']."', Members='".$_POST['members']."', `Technical Adviser`='".$_POST['technical']."', `Content Adviser`='".$_POST['content']."', Category='".$_POST['category']."' WHERE GroupNo='".$_SESSION['Group']."'";
                                                                    $update2 = mysqli_query($lib, $update);
                                                                }else{
                                                                        $latest ="SELECT Status, MAX(Date) AS Date, MAX(Time) AS Time, GroupNo, Title, URL, Members, 'Technical Adviser', 'Content Adviser', Category FROM archive GROUP BY GroupNo";
                                                                        $validatelatest = mysqli_query($lib, $latest);
                                                                            while($recent = mysqli_fetch_array($validatelatest)){
                                                                                $query8 = "SELECT * FROM archive WHERE Date ='".$recent['Date']."' AND Time='".$recent['Time']."' AND GroupNo = '". $_SESSION['Group'] ."' GROUP BY GroupNo";
                                                                        if ($result9 = mysqli_query($lib, $query8)){
                                                                        while ($row = mysqli_fetch_array($result9)) {
                                                                        $insert = "INSERT INTO `library`(`Date`, `Time`, `GroupNo`, `Title`, `Abstract`, `URL`, `Members`, `Technical Adviser`, `Content Adviser`, `Category`) VALUES ('" . $row['Date'] . "', '" . $row['Time'] . "', '" . $row['GroupNo'] . "', '" . $row['Title'] . "', '" . $row['Abstract'] . "', '". $row['URL'] . "', '" . $row['Members'] . "', '" . $row['Technical Adviser'] . "', '" . $row['Content Adviser'] . "', '" . $row['Category'] . "')";
                                                                        $result2 = mysqli_query($lib, $insert); 
                                                                        }
                                                                        }
                                                                }
                                                                }
                                                        } else {
                                                            echo "<br><p align='center'><font color = '#fc1616'> Error uploading your research paper </font></p>";
                                                        }
                                                    } else {
                                                        echo "<br><p align='center'><font color = '#fc1616'>Please make sure that the members are correct</font></p>";
                                                    }
                                                } else {
                                                    echo "<br><p align='center'><font color = '#fc1616'> Account does not exist</font></p>";
                                                }
                                            } else {
                                                $lib = mysqli_connect("shareddb-u.hosting.stackcp.net", "ordersystem-3133336f8c", "qwerty123", "ordersystem-3133336f8c"); 
                                                $query3 = "SELECT * FROM library";
                                                $validate3 = mysqli_query($lib, $query3);
                                                while($row = mysqli_fetch_array($validate3)){
                                                $mystring = $_row['Title'];
                                                $findme   = $_POST['title'];
                                                $pos = strpos($mystring, $findme);
                                                $search = strpbrk($_row['Title'], $_POST['title']);
                                                if(mysqli_num_rows($validate3) > 0 && ((preg_match("/".$_POST['title']."/i", $row['Title'])) || $pos !== false || $pos !=0 || $search !== false)) {
                                                    $y++;
                                                }
                                                }
                                                if($_POST['part'] != null){
                                                    $title = $_POST['title']." - ".$_POST['part'];
                                                }else{
                                                    $title = $_POST['title'];
                                                }
                                                if($y == 0){
                                                    if (mysqli_num_rows($validate2) > 0) {
                                                        while ($row = mysqli_fetch_array($validate2)) {
                                                            if (preg_match("/\b" . $row['LastName'] . "\b/i", $_POST['members']) || preg_match("/\b" . $row['FirstName'] . "\b/i", $_POST['members'])) {
                                                                $i++;
                                                            } else {
                                                                $x++;
                                                            }
                                                        }
                                                        if (($i > 0) && ($x == 0)) {
                                                            date_default_timezone_set('Asia/Hong_Kong');
                                                            $date = date('Y-m-d');
                                                            $time = date('H:i:s');
                                                            $query = "INSERT INTO `archive`(`Date`, `Time`, `GroupNo`, `Title`, `Abstract`, `URL`, `Members`, `Technical Adviser`, `Content Adviser`, `Category`) VALUES ('" . $date . "', '" . $time . "', '" . $_SESSION['Group'] . "', '" . mysqli_real_escape_string($lib, $title) . "', '". mysqli_real_escape_string($lib, $_POST['abs']) ."', '". mysqli_real_escape_string($lib, $_POST['link']) . "', '" . mysqli_real_escape_string($lib, $_POST['members']) . "', '" . mysqli_real_escape_string($lib, $_POST['technical']) . "', '" . mysqli_real_escape_string($lib, $_POST['content']) . "', '" . mysqli_real_escape_string($lib, $_POST['category']) . "')";
                                                            $result = mysqli_query($lib, $query);
                                                            if ($result) {
                                                                echo "<br><p align='center'><font color = '#177a03'>Research paper successfully uploaded</font></p>";
                                                                $check = "SELECT * FROM library WHERE GroupNo = '".$_SESSION['Group']."'";
                                                                $result1 = mysqli_query($lib, $check);
                                                                if(mysqli_num_rows($result1) > 0){
                                                                    $update = "UPDATE library SET Date='".$date."', Time='".$time."', Title='".$title."', Abstract='". $_POST['abs']."', URL='".$_POST['link']."', Members='".$_POST['members']."', `Technical Adviser`='".$_POST['technical']."', `Content Adviser`='".$_POST['content']."', Category='".$_POST['category']."' WHERE GroupNo='".$_SESSION['Group']."'";
                                                                    $update2 = mysqli_query($lib, $update);
                                                                }else{
                                                                        $latest ="SELECT Status, MAX(Date) AS Date, MAX(Time) AS Time, GroupNo, Title, URL, Members, 'Technical Adviser', 'Content Adviser', Category FROM archive GROUP BY GroupNo";
                                                                        $validatelatest = mysqli_query($lib, $latest);
                                                                            while($recent = mysqli_fetch_array($validatelatest)){
                                                                                $query8 = "SELECT * FROM archive WHERE Date ='".$recent['Date']."' AND Time='".$recent['Time']."' AND GroupNo = '". $_SESSION['Group'] ."' GROUP BY GroupNo";
                                                                        if ($result9 = mysqli_query($lib, $query8)){
                                                                        while ($row = mysqli_fetch_array($result9)) {
                                                                        $insert = "INSERT INTO `library`(`Date`, `Time`, `GroupNo`, `Title`, `Abstract`, `URL`, `Members`, `Technical Adviser`, `Content Adviser`, `Category`) VALUES ('" . $row['Date'] . "', '" . $row['Time'] . "', '" . $row['GroupNo'] . "', '" . $row['Title'] . "', '" . $row['Abstract'] . "', '". $row['URL'] . "', '" . $row['Members'] . "', '" . $row['Technical Adviser'] . "', '" . $row['Content Adviser'] . "', '" . $row['Category'] . "')";
                                                                        $result2 = mysqli_query($lib, $insert); 
                                                                        }
                                                                        }
                                                                }
                                                                }
                                                            } else {
                                                                echo "<br><p align='center'><font color = '#fc1616'> Error uploading your research paper </font></p>";
                                                            }
                                                        } else {
                                                            echo "<br><p align='center'><font color = '#fc1616'>Please make sure that the members are correct</font></p>";
                                                        }
                                                    } else {
                                                        echo "<br><p align='center'><font color = '#fc1616'> Your name is not included in the members</font></p>";
                                                    }
                                                }else{
                                                    echo "<br><p align='center'><font color = '#fc1616'> Research Title is taken</font></p>";
                                                }
                                            }
                                        }
                                         }else {
                                            $student = mysqli_connect("shareddb-u.hosting.stackcp.net", "ordersystem-3133336f8c", "qwerty123", "ordersystem-3133336f8c");
                                            $query = "SELECT * FROM library WHERE GroupNo = '" . mysqli_real_escape_string($lib, $_SESSION['Group']) . "'";
                                            $query2 = "SELECT * FROM studentaccounts WHERE GroupNum = '" . mysqli_real_escape_string($lib, $_SESSION['Group']) . "' AND AccountStatus = 'Active'";
                                            $validate = mysqli_query($lib, $query);
                                            $validate2 = mysqli_query($student, $query2);
                                             while($row = mysqli_fetch_array($validate)){
                                                $mystring = $_row['Title'];
                                                $findme   = $_POST['title'];
                                                $pos = strpos($mystring, $findme);
                                                $search = strpbrk($_row['Title'], $_POST['title']);
                                             if (mysqli_num_rows($validate) > 0 && ((preg_match("/".$_POST['title']."/i", $row['Title'])) || $pos !== false || $pos !=0 || $search !== false)) {
                                                        $z++;
                                                }
                                             }
                                            if($_POST['part'] != null){
                                                    $title = $_POST['title']." - ".$_POST['part'];
                                            }else{
                                                    $title = $_POST['title'];
                                            }
                                              if($z > 0){
                                                if (mysqli_num_rows($validate2) > 0) {
                                                    while ($row = mysqli_fetch_array($validate2)) {
                                                        if (preg_match("/\b" . $row['LastName'] . "\b/i", $_POST['members']) || preg_match("/\b" . $row['FirstName'] . "\b/i", $_POST['members'])) {
                                                            $i++;
                                                        } else {
                                                            $x++;
                                                        }
                                                    }
                                                    if (($i > 0) && ($x == 0)) {
                                                        date_default_timezone_set('Asia/Hong_Kong');
                                                        $date = date('Y-m-d');
                                                        $time = date('H:i:s');
                                                        $query = "INSERT INTO `archive`(`Date`, `Time`, `GroupNo`, `Title`, `Abstract`, `URL`, `Members`, `Technical Adviser`, `Content Adviser`, `Category`) VALUES ('" . $date . "', '" . $time . "', '" . $_SESSION['Group'] . "', '" . mysqli_real_escape_string($lib, $title) . "', '". mysqli_real_escape_string($lib, $_POST['abs']) ."', '". mysqli_real_escape_string($lib, $_POST['link']) . "', '" . mysqli_real_escape_string($lib, $_POST['members']) . "', '" . mysqli_real_escape_string($lib, $_POST['technical']) . "', '" . mysqli_real_escape_string($lib, $_POST['content']) . "', '" . mysqli_real_escape_string($lib, $_POST['category']) . "')";
                                                        $result = mysqli_query($lib, $query);
                                                                if ($result) {
                                                                echo "<br><p align='center'><font color = '#177a03'>Research paper successfully uploaded</font></p>";
                                                                $check = "SELECT * FROM library WHERE GroupNo = '".$_SESSION['Group']."'";
                                                                $result1 = mysqli_query($lib, $check);
                                                                if(mysqli_num_rows($result1) > 0){
                                                                    $update = "UPDATE library SET Date='".$date."', Time='".$time."', Title='".$title."', Abstract='". $_POST['abs']."', URL='".$_POST['link']."', Members='".$_POST['members']."', `Technical Adviser`='".$_POST['technical']."', `Content Adviser`='".$_POST['content']."', Category='".$_POST['category']."' WHERE GroupNo='".$_SESSION['Group']."'";
                                                                    $update2 = mysqli_query($lib, $update);
                                                                }else{
                                                                        $latest ="SELECT Status, MAX(Date) AS Date, MAX(Time) AS Time, GroupNo, Title, URL, Members, 'Technical Adviser', 'Content Adviser', Category FROM archive GROUP BY GroupNo";
                                                                        $validatelatest = mysqli_query($lib, $latest);
                                                                            while($recent = mysqli_fetch_array($validatelatest)){
                                                                                $query8 = "SELECT * FROM archive WHERE Date ='".$recent['Date']."' AND Time='".$recent['Time']."' AND GroupNo = '". $_SESSION['Group'] ."' GROUP BY GroupNo";
                                                                        if ($result9 = mysqli_query($lib, $query8)){
                                                                        while ($row = mysqli_fetch_array($result9)) {
                                                                        $insert = "INSERT INTO `library`(`Date`, `Time`, `GroupNo`, `Title`, `Abstract`, `URL`, `Members`, `Technical Adviser`, `Content Adviser`, `Category`) VALUES ('" . $row['Date'] . "', '" . $row['Time'] . "', '" . $row['GroupNo'] . "', '" . $row['Title'] . "', '" . $row['Abstract'] . "', '". $row['URL'] . "', '" . $row['Members'] . "', '" . $row['Technical Adviser'] . "', '" . $row['Content Adviser'] . "', '" . $row['Category'] . "')";
                                                                        $result2 = mysqli_query($lib, $insert); 
                                                                        }
                                                                        }
                                                                }
                                                                }
                                                        } else {
                                                            echo "<br><p align='center'><font color = '#fc1616'> Error uploading your research paper </font></p>";
                                                        }
                                                    } else {
                                                        echo "<br><p align='center'><font color = '#fc1616'>Please make sure that the members are correct</font></p>";
                                                    }
                                                } else {
                                                    echo "<br><p align='center'><font color = '#fc1616'> Account does not exist</font></p>";
                                                }
                                            } else {
                                                $lib = mysqli_connect("shareddb-u.hosting.stackcp.net", "ordersystem-3133336f8c", "qwerty123", "ordersystem-3133336f8c"); 
                                                $query3 = "SELECT * FROM library";
                                                $validate3 = mysqli_query($lib, $query3);
                                                while($row = mysqli_fetch_array($validate3)){
                                                $mystring = $_row['Title'];
                                                $findme   = $_POST['title'];
                                                $pos = strpos($mystring, $findme);
                                                $search = strpbrk($_row['Title'], $_POST['title']);
                                                if(mysqli_num_rows($validate3) > 0 && ((preg_match("/".$_POST['title']."/i", $row['Title'])) || $pos !== false || $pos !=0 || $search !== false)) {
                                                    $y++;
                                                }
                                                }
                                                if($_POST['part'] != null){
                                                    $title = $_POST['title']." - ".$_POST['part'];
                                                }else{
                                                    $title = $_POST['title'];
                                                }
                                                if($y == 0){
                                                    if (mysqli_num_rows($validate2) > 0) {
                                                        while ($row = mysqli_fetch_array($validate2)) {
                                                            if (preg_match("/\b" . $row['LastName'] . "\b/i", $_POST['members']) || preg_match("/\b" . $row['FirstName'] . "\b/i", $_POST['members'])) {
                                                                $i++;
                                                            } else {
                                                                $x++;
                                                            }
                                                        }
                                                        if (($i > 0) && ($x == 0)) {
                                                            date_default_timezone_set('Asia/Hong_Kong');
                                                            $date = date('Y-m-d');
                                                            $time = date('H:i:s');
                                                            $query = "INSERT INTO `archive`(`Date`, `Time`, `GroupNo`, `Title`, `Abstract`, `URL`, `Members`, `Technical Adviser`, `Content Adviser`, `Category`) VALUES ('" . $date . "', '" . $time . "', '" . $_SESSION['Group'] . "', '" . mysqli_real_escape_string($lib, $title) . "', '". mysqli_real_escape_string($lib, $_POST['abs']) ."', '". mysqli_real_escape_string($lib, $_POST['link']) . "', '" . mysqli_real_escape_string($lib, $_POST['members']) . "', '" . mysqli_real_escape_string($lib, $_POST['technical']) . "', '" . mysqli_real_escape_string($lib, $_POST['content']) . "', '" . mysqli_real_escape_string($lib, $_POST['category']) . "')";
                                                            $result = mysqli_query($lib, $query);
                                                            if ($result) {
                                                                echo "<br><p align='center'><font color = '#177a03'>Research paper successfully uploaded</font></p>";
                                                                $check = "SELECT * FROM library WHERE GroupNo = '".$_SESSION['Group']."'";
                                                                $result1 = mysqli_query($lib, $check);
                                                                if(mysqli_num_rows($result1) > 0){
                                                                    $update = "UPDATE library SET Date='".$date."', Time='".$time."', Title='".$title."', Abstract='". $_POST['abs']."', URL='".$_POST['link']."', Members='".$_POST['members']."', `Technical Adviser`='".$_POST['technical']."', `Content Adviser`='".$_POST['content']."', Category='".$_POST['category']."' WHERE GroupNo='".$_SESSION['Group']."'";
                                                                    $update2 = mysqli_query($lib, $update);
                                                                }else{
                                                                        $insert = "INSERT INTO `library`(`Date`, `Time`, `GroupNo`, `Title`, `Abstract`, `URL`, `Members`, `Technical Adviser`, `Content Adviser`, `Category`) VALUES ('" . $date . "', '" . $time . "', '" . $_SESSION['Group'] . "', '" . mysqli_real_escape_string($lib, $title) . "', '". mysqli_real_escape_string($lib, $_POST['abs']) ."', '". mysqli_real_escape_string($lib, $_POST['link']) . "', '" . mysqli_real_escape_string($lib, $_POST['members']) . "', '" . mysqli_real_escape_string($lib, $_POST['technical']) . "', '" . mysqli_real_escape_string($lib, $_POST['content']) . "', '" . mysqli_real_escape_string($lib, $_POST['category']) . "')";
                                                                        $result2 = mysqli_query($lib, $insert);  
                                                                        
                                                                }

                                                            } else {
                                                                echo "<br><p align='center'><font color = '#fc1616'> Error uploading your research paper </font></p>";
                                                            }
                                                        } else {
                                                            echo "<br><p align='center'><font color = '#fc1616'>Please make sure that the members are correct</font></p>";
                                                        }
                                                    } else {
                                                        echo "<br><p align='center'><font color = '#fc1616'> Your name is not included in the members</font></p>";
                                                    }
                                                }else{
                                                    echo "<br><p align='center'><font color = '#fc1616'> Research Title is taken</font></p>";
                                                }
                                            }
                                        }

                                    } else {
                                        if (!$check1) {
                                            $error1 = "<p align='center'><font color = '#fc1616'>Please enter a valid member name/s</font></p>";
                                        }
                                        if (!$check2) {
                                            $error2 = "<p align='center'><font color = '#fc1616'>Please enter a valid technical adviser name</font></p>";
                                        }
                                        if (!$check3) {
                                            $error3 = "<p align='center'><font color = '#fc1616'>Please enter a valid content adviser name</font></p>";
                                        }
                                        echo "<br>";
                                        echo $error1;
                                        echo $error2;
                                        echo $error3;
                                    }
                                }
                            }
                        }
                        ?> 
                        </form> 
                    </div>
                </div>
            </div>
        </div>
            <div id="opt2" class="overlay">
                <div class="popup-small">
                    <form action="myresearch.php"><a class="close" href="myresearch.php">&times;</a></form>
                    <br><br>
                    <div class="content" align="center">
                        Choose action
                        <br><br>
                        <form method="post">
                            <input type="submit" name="choice" value="View Abstract" class="btn5">
                            <br><br>
                            <input type="submit" name="choice" value="View Research paper" class="btn5">
                            <?php
                            if (isset($_POST['choice'])) {
                                if ($_POST['choice'] == "View Abstract") {
                                    $query1 = "SELECT * FROM archive WHERE GroupNo ='" . $_SESSION['Group'] . "' ORDER BY Date DESC, Time DESC";
                                    $result1 = mysqli_query($lib, $query1);
                                    while ($recent = mysqli_fetch_array($result1)) {
                                        if (isset($_COOKIE["cookie"])) {
                                                    if ($recent['Title'] == $_COOKIE["cookie"]){ 
                                                        echo "<script>location='http://order-com.stackstaging.com/myresearch.php#abstract'</script>";
                                                    }
                                                                                               
                                        }
                                    }
                                } else if ($_POST['choice'] == "View Research paper") {
                                        $query1 = "SELECT * FROM archive WHERE GroupNo ='" . $_SESSION['Group'] . "' ORDER BY Date DESC, Time DESC";
                                        $result1 = mysqli_query($lib, $query1);
                                        while ($recent = mysqli_fetch_array($result1)) {
                                                if (isset($_COOKIE["cookie"])) {
                                                    if ($recent['Title'] == $_COOKIE["cookie"]) {
                                                        $query2 = "SELECT * FROM archive WHERE Date ='" . $recent['Date'] . "' AND Time='" . $recent['Time'] . "' AND Title='" . $recent['Title'] . "' AND GroupNo ='" . $_SESSION['Group'] . "'";
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
                    <a class="close" href="myresearch.php#opt2">&times;</a>
                    <br><br>
                    <div class="content" align="center">
                        <h2>Abstract</h2>
                        <br>
                        <?php
                            $query1 = "SELECT * FROM archive WHERE GroupNo ='" . $_SESSION['Group'] . "' ORDER BY Date DESC, Time DESC";
                            $result1 = mysqli_query($lib, $query1);
                            while ($recent = mysqli_fetch_array($result1)) {
                            if (isset($_COOKIE["cookie"])) {
                                        if ($recent['Title'] == $_COOKIE["cookie"]) {
                                                $query2 = "SELECT * FROM archive WHERE Date ='" . $recent['Date'] . "' AND Time='" . $recent['Time'] . "' AND Title='" . $recent['Title'] . "' AND GroupNo ='" . $_SESSION['Group'] . "'";
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
            $("#txt").keyup(function(){
                    $("#warning").text("Characters left: " + (300 - $(this).val().length));
                    $("#warning").addClass("warning");
                    $("#warning").css("text-align", "right");
            });
        </script>
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