<?php
//connect to database
$dbname = 'gt_getaride';
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
     $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

?>

<?php
include_once 'database-config.php';
if(isset($_POST['btn-save']))
{
 // variables for input data
 $lastname = $_POST['lastname'];
 $firstname = $_POST['firstname'];
 $email = $_POST['email'];
 $gender = $_POST['gender'];
 $phone = $_POST['phone'];
 $username = $_POST['username'];
 $password = $_POST['password'];
 $role = $_POST['role'];
 // variables for input data

 // sql query for inserting data into database
 $sql_query = "INSERT INTO accounts(lastname,firstname,email,gender,phone,username,password) 
									VALUES('$lastname', '$firstname', '$email', '$gender', '$phone', '$username', '$password')";
 // sql query for inserting data into database
 
 // sql query execution function
 if(mysqli_query($connection, $sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('User Created. Data Are Inserted Successfully ');
  window.location.href='adminview.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('An error occured while inserting your data');
  </script>
  <?php
 }
 // sql query execution function
}
?>

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
				<li><a href="volunteer_page.php" accesskey="2" title="">volunteer page</a></li>
				<li class="current_page_item"><a href="student_registration.html" accesskey="4" title="">Student Registration</a></li>
				<li><a href="volunteer_registration.html" accesskey="3" title="">Volunteer Registration</a></li>
				<li><a href="admin_page.php" accesskey="1" title="">admin page</a></li>
				<li><a href="#" accesskey="5" title="">Contact Us</a></li>
			</ul>
		</div>
	</div>

	<!--welcome message-->
	<div id="welcome-wrapper">
		<div id="welcome">
			<p><strong>GET A RIDE</strong> is a Web Application to help provide housing and transportation for incoming transient students at <a href="http://gatech.edu" rel="nofollow">Georgia Tech</a>.
		</div>
	</div>

		<!--body-->
	<div id="body" class="container">
		
		<br />

		<div class="inner contact">
		
		<div id ="errors" >
		</div>
		<h3 style="color:#FFFFFF; text-align: center; text-decoration: underline">Basic Information</h3>
                <!-- Form Area -->
                <div class="contact-form">
				<!--  Inputs -->

                  <div class="col-xs-4 col-xs-offset-4">
                    <!-- Form -->
                    <form  action="#" onsubmit="return stregister();" method="post" >
                        
                            <!-- Last Name -->
                            <input type="text" name="lname" id="lname"  class="form" placeholder="Last Name" />
							 <!-- FirstName -->
                            <input type="text" name="fname" id="fname"  class="form" placeholder="First Name" />
							 <!-- gender -->
							 <div class="row">
							 <p style="text-align: center; color: #FFFFFF">
							 <input type="radio" name="gender" id="male" value="male" > Male
							 &nbsp;
							 <input type="radio" name="gender" id="female" value="female"> Female
							 &nbsp;
							 <input type="radio" name="gender" id="other" value="other"> Other
							 </p>
							
					 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <!--Level-->
							<select>
								<option value="Level">Select Level</option>
								<option value="undergrad">undergrad</option>
								<option value="grad">grad</option>
								<option value="visiting scholar">visiting scholar</option>

							</select>
							</div>
							<br>
							<!-- Phone -->
                            <input type="text" name="phone" id="phone"  class="form" placeholder="Phone Number (###-###-####)" /><br />
							<!-- Affiliation -->
                            <!-- major -->
                            <input type="text" name="major" id="major"  class="form" placeholder="Major" />
							<!-- Email -->
                            <input type="email" name="email" id="email"  class="form" placeholder="Email" />
							<!-- Email -->
                            <input type="email" name="secemail" id="secemail"  class="form" placeholder="Reenter Email" />
							<!-- login -->
                            <input type="text" name="login" id="login"  class="form" placeholder="Username" />
							<!-- Password -->
                            <input type="password" name="pwd1" id="pwd1"  class="form" placeholder="Password (At least 6 characters/numbers)" />
							<!-- Password -->
                            <input type="password" name="pwd2" id="pwd2"  class="form" placeholder="Reenter Password" />
							<br>
							
							<h3 style="color:#FFFFFF; text-align: center; text-decoration: underline">Flight Information</h3>
							<div class="row">
							 <p style="text-align: center; color: #FFFFFF">
							 Do you need airport pickup??&nbsp;
							 <br><input type="radio" name="transportair" id="yes" value="yes"> Yes
							 &nbsp;
							 <input type="radio" name="transportair" id="no" value="no"> No
							 </p>
							</div>
							<div class="row">
							 <p style="text-align: center; color: #FFFFFF">
							Arriving Atlanta - Flight number.
							  <!-- pickup time -->
                            <input type="text" name="flynr" id="flynr"  class="form" placeholder="Please Specify Flight number" />
							</div>
							<div class="row">
							 <p style="text-align: center; color: #FFFFFF">
							 Arriving Atlanta - Airline name 
							 <br>
							 
							  <!-- students/luggage -->
                            <input type="text" name="line/date/time" id="luggage"  class="form" placeholder="Please Specify Airline Name, Date, Time" />
							</div>
							<div class="row">
							 <p style="text-align: center; color: #FFFFFF">
							 How Much Luggage??
							  <!-- trips -->
                            <input type="text" name="luggage" id="luggage"  class="form" placeholder="Please Specify" />
							</div>
							<div class="row">
							 <p style="text-align: center; color: #FFFFFF">
							 Leaving home country - Flight number/ Airline
							  <!-- Comments -->
                            <input type="text" name="homeinfo" id="homeinfo"  class="form" placeholder="Please Specify" />
							</div>
							<br>
							<h3 style="color:#FFFFFF; text-align: center; text-decoration: underline">Temporary Housing Information</h3>
							<div class="row">
							 <p style="text-align: center; color: #FFFFFF">
							 Do you need temporary housing??&nbsp;
							 <br><input type="radio" name="temphouse" id="yes" value="yes"> Yes
							 &nbsp;
							 <input type="radio" name="temphouse" id="no" value="no"> No
							 </p>
							</div>
							<div class="row">
							 <p style="text-align: center; color: #FFFFFF">
							 If not, where should we send you??
							  <!-- address -->
                            <input type="text" name="address" id="address"  class="form" placeholder="Please Provide Your Address, Or Type N/A If You Answered 'Yes'" />
							</div>
							<div class="row">
							 <p style="text-align: center; color: #FFFFFF">
							 How can we contact the person living there?
							  <!-- house -->
                            <input type="text" name="house" id="house"  class="form" placeholder="Please Specify" />
							</div>
							<div class="row">
							 <p style="text-align: center; color: #FFFFFF">
							How Long do you require Housing for?
							<!--Time Frame-->
							<select style="color: #000000">
								<option value="time">Select Time Frame</option>
								<option value="short">1-2 Weeks</option>
								<option value="medium">2-4 Weeks</option>
								<option value="long">1 Month+</option>
								<option value="other">Other</option>
							</select>
							<input type="text" name="timeframe" id="timeframe"  class="form" placeholder="Please Specify If Other" />
							</div>
							<div class="row">
							 <p style="text-align: center; color: #FFFFFF">
							 Where should we send you after this period?
							  <!-- whenhouse -->
                            <input type="text" name="whenhouse" id="whenhouse"  class="form" placeholder="Please Specify" />
							</div>
							<div class="row">
							 <p style="text-align: center; color: #FFFFFF">
							 Do You Have A Preference Of Host Gender?
							 <br>
							 <input type="radio" name="guestgender" id="male" value="male" > Male
							 &nbsp;
							 <input type="radio" name="guestgender" id="female" value="female"> Female
							 &nbsp;
							 <input type="radio" name="guestgender" id="other" value="other"> No Preference
							</div>
							<div class="row">
							 <p style="text-align: center; color: #FFFFFF">
							 Additional Comments/Concerns
							  <!-- Comments -->
                            <input type="text" name="comments" id="comments"  class="form" placeholder="Comments/Concerns" />
							</select>
							</div>
							<br>					

							 <!-- Send Button -->
                            <button type="submit" id="submit" name="submit" onclick="stregister()" class="form-btn semibold">Register</button>
							<div id ="errors" >
		</div>
						</div><!-- End  Inputs -->



                        <!-- Clear -->
                        <div class="clear"></div>
                    </form>

                  

                </div><!-- End Contact Form Area -->
      </div><!-- End Inner -->




<div id="portfolio" class="container">

<div class="title">
				<h2 style="color: #FFFFFF">Student Registration</h2>
				<span style="color: #FFFFFF" class="byline">Do you require a ride from the airport or a place to stay? Register Here!</span> </div>
</div>
</div>









<div id="footer">
	<p>&copy; GT GET A RIDE. All rights reserved. Design by <a href="#" rel="nofollow">R&D</a>.</p>
</div>

</div>
</body>
</html>
