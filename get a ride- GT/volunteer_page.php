<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--



-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
    <link href="css/default.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/fonts.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
    <link href="css/stregform.css" rel="stylesheet" type="text/css" media="all" />
    <!--[if IE 6]>
    <link href="default_ie6.css" rel="stylesheet" type="text/css" />
    <![endif]-->
    <script src = "js/validreg.js" > </script>
    <style>
        #header-wrapper
        {
            background: url(images/regbg.jpg) no-repeat center top;
            background-size: cover;
        }

        body {
            margin: 0px;
            padding: 0px;
            background-color: #00254c;
            font-family: 'Source Sans Pro', sans-serif;
            font-size: 12pt;
            font-weight: 400;
            color: rgba(0,0,255,.8);
        }
        #errors {
            font-size: 200%;
            color: red;
            font-weight: bold;
        }	background-color: #eeb211;

    </style>



</head>

<body>
<!--header portion-->
<div id="wrapper">
    <div id="header-wrapper">
        <div id="header" class="container">
            <div id="logo">
                <h1 style="text-transform: uppercase">Get A Ride</h1>
                <p>Design by R&D</p>
            </div>
        </div>
        <div id="menu" class="container">
            <ul>
                 <li><a href="index.html" accesskey="1" title="">Home</a></li>
				<li><a href="student_page.php" accesskey="1" title="">student page</a></li>
				<li class="current_page_item"><a href="volunteer_page.php" accesskey="2" title="">volunteer page</a></li>
				<li><a href="student_registration.html" accesskey="4" title="">Student Registration</a></li>
				<li><a href="volunteer_registration.html" accesskey="3" title="">Volunteer Registration</a></li>
				<li><a href="admin_page.php" accesskey="1" title="">admin page</a></li>
				<li><a href="#" accesskey="5" title="">Contact Us</a></li>
            </ul>
        </div>
    </div>


    <div id="welcome-wrapper">
        <div id="welcome">
            <p><h3>VOLUNTEER Account Information</h3></p>
                <p><a href="#" rel="nofollow">Edit</a></p>
            <?php
/*          $acct_fname = $_POST['fname'];
            $acct_lname = $_POST['lname'];
            $acct_gender = $_POST['gender'];
            $acct_username = $_POST['username'];
            $acct_email = $_POST['email'];
            $acct_password = $_POST['password'];
            $acct_phone = $_POST['phone'];
            $acct_address = $_POST['address'];
            $acct_transportair = $_POST['transportair'];
            $acct_ptime = $_POST['ptime'];
            $acct_luggage = $_POST['luggage'];
            $acct_trips = $_POST['trips'];
            $acct_comments = $_POST['comments'];
            $acct_house = $_POST['house'];
            $acct_temphouse = $_POST['temphouse'];
            $acct_timeframe = $_POST['timeframe'];
            $acct_whenhouse = $_POST['whenhouse'];
            $acct_guestgender = $_POST['guestgender'];
            */?>
            <h3>BASIC INFORMATION</h3>
            <p>
                First name: <?php /*echo $acct_fname */?>
                <br/>
                Last name: <?php /*echo $acct_lname */?>
                <br/>
                Gender: <?php /*echo $acct_gender */?>
                <br/>
                Email: <?php /*echo $acct_email */?>
                <br/>
                Phone number: <?php /*echo $acct_phone */?>
                <br/>
                Home Address: <?php /*echo $acct_address */?>
                <br/>
                Username: <?php /*echo $acct_username */?>
                <br/>
                Password: <?php /*echo $acct_password */?>
                <br/>
            </p>

            <h3>Airport Pick-Up INFORMATION</h3>
            <p>
                Provide Airport Transportation: <?php /*echo $acct_transportair */?>
                <br/>
                Student Pick-Up Time: <?php /*echo $acct_ptime */?>
                <br/>
                Total Luggage Capacity: <?php /*echo $acct_luggage */?>
                <br/>
                Total Trips: <?php /*echo $acct_trips */?>
                <br/>
                Comments: <?php /*echo $acct_comments */?>
                <br/>
            </p>

            <h3>Temporary Housing INFORMATION</h3>
            <p>
                Provide Temporary Housing: <?php /*echo $acct_temphouse */?>
                <br/>
                Total Students Housed: <?php /*echo $acct_house */?>
                <br/>
                Housing Duration: <?php /*echo $acct_timeframe */?>
                <br/>
                Housing Time: <?php /*echo $acct_whenhouse */?>
                <br/>
                Gender Preference: <?php /*echo $acct_guestgender */?>
                <br/>
                Comments: <?php /*echo $acct_comments */?>
                <br/>
            </p>
 <!-- Send Button -->
                            <button type="submit" id="submit" name="submit" onclick="stregister()" class="form-btn semibold">Edit</button>
        </div>
    </div>

</div>
<div id="footer">
    <p>&copy; GT GET A RIDE. All rights reserved. Design by <a href="http://templated.co" rel="nofollow">R&D</a>.</p>
</div>
</body>
</html>
