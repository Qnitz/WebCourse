<!DOCTYPE html>
<html>
        <head>
        <meta charset="utf-8">
                <title>ProtoFit - Form output</title>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
                <link rel="stylesheet" href="css/style.css">
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
                <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous">
                </script>
                <script src="js/scripts.js"></script>
                <link rel="preconnect" href="https://fonts.googleapis.com">
                <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                <link href="https://fonts.googleapis.com/css2?family=Grape+Nuts&family=Roboto&family=VT323&display=swap"rel="stylesheet">
                <link href="https://fonts.googleapis.com/css2?family=VT32&display=swap"rel="stylesheet"> 
        </head>
	<body>
        <header>
                <div class="top_button" id="top_btn_row">
                        <button onclick="location.href='#';">English</button>
                        <button onclick="location.href='#';">Navigation</button>
                        <button onclick="location.href='#';">Accessibility</button>
                        <button onclick="location.href='#';">Support</button>
                </div>
                <div class="header_avatar">
                        <h2>Miriam</h2>
                        <img src="./images/avatar.jpg" alt="Avatar" class="avatar">
                </div>
                <div class="header_content">
                        <img src="./images/logo.jpg" alt="Logo" class="logo">
                        <input type="text" class="form-control-bar" name="new_event_name" placeholder="Search in application">
                </div>
        </header>
        <div class="nav_top">
                <button onclick="location.href='#';" class="hamburger-menu">&#9776;</button>
                <div class = "button-row">
                        <button onclick="location.href='#';">Home</button>
                        <button onclick="location.href='#';">Calendar</button>
                        <button onclick="location.href='./index.html';">Events</button>
                        <button onclick="location.href='#';">Social</button>
                        <button onclick="location.href='#';">Fitness</button>
                </div>  
        </div>
        <nav>
                <div class="breadcrumbs">
                <button onclick="location.href='#';">Home</button>
                <button onclick="location.href='./index.html';">Events</button>
                <button onclick="location.href='#';">New Event</button>
                </div>
        </nav>
        <main>
                <aside class="sidebar">
                        <!-- <button onclick="location.href='#';" class="aside_button">New Event</button> -->
                        <button onclick="location.href='./index.html';" class="aside_button">Back To List</button> 
                </aside>
                <section class="main-section">
                <h1>New Event Created.</h1>
                <h2>Event name: <?php echo $_GET["new_event_name"]?></h2>
                <h3>Event date: <?php echo $_GET["new_event_date"]?></h3>
                <h3>Event time: <?php echo $_GET["new_event_time_hour"]?>:<?php echo $_GET["new_event_time_minutes"]?></h3>
                <h3>Description: <?php echo $_GET["new_event_description"]?></h3>
                <h3>Social Level: <?php echo $_GET["new_event_social_level"]?></h3>
                <h3>Group: <?php echo $_GET["new_event_group"]?></h3>
                <h3>Facility: <?php echo $_GET["new_event_facility"]?></h3>
                <h3>Address: <?php echo $_GET["new_event_address"]?></h3>
                <button onclick="location.href='./index.html';" class="form-control-bar">Back to Events List</button>
                <button onclick="location.href='./form2.html';" class="form-control-bar">Create Another Event</button>
                </section>
        </main>
</body>
</html>