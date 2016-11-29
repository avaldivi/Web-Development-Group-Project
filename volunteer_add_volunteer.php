

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
 
 $affiliation = $_POST['affiliation'];
 $period_preference = $_POST['period_preference'];
 $luggage = $_POST['luggage'];
 $offer_pickup = $_POST['offer_pickup'];
 $offer_housing = $_POST['offer_housing'];
 $pick_up_limit = $_POST['pick_up_limit'];
 $address = $_POST['address'];
 $volunteer_contact = $_POST['volunteer_contact'];
 $nights_offering = $_POST['nights_offering'];
 $max_guests = $_POST['max_guests'];
 $trip_rounds = $_POST['trip_rounds'];
 // variables for input data

 $id_query = "SELECT accounts_id FROM accounts";
								
 
 // sql query for inserting data into database
$sql_query = "INSERT INTO volunteer(accounts_id,affiliation,period_preference,luggage,offer_pickup,offer_housing,pick_up_limit,address,volunteer_contact,nights_offering,max_guests,trip_rounds) 
			VALUES('$id_query', '$affiliation', '$period_preference', '$luggage', '$offer_pickup', '$offer_housing', '$pick_up_limit', '$address', '$volunteer_contact', '$nights_offering', '$max_guests', '$trip_rounds')" ; 
 // sql query for inserting data into database

 // sql query execution function
 if(mysqli_query($connection, $sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Volunteer Created. Data Inserted Successfully! An admin will check it.');
  window.location.href='volunteerview_vo.php';
  </script>
  <?php
 }
 else
 {
	 echo("error " . mysqli_error($connection));
  ?>
  <script type="text/javascript">
  alert('An error occured while inserting your data');

  </script>
  <?php
 }
 // sql query execution function
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Volunteer Creation</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<div id="header">
 <div id="content">
    <label>Volunteer Creation</label>
    </div>
</div>
<div id="body">
 <div id="content">
    <form method="post">
    <table align="center">
  <tr>
    <td align="center"><a href="adminview.php">back to main page</a></td>
    </tr>
    <td><input type="text" name="affiliation" placeholder="affiliation"  required /></td>
    </tr>
	<tr>
    <td><input type="text" name="period_preference" placeholder="period_preference"  required /></td>
    </tr>
	<tr>
    <td><input type="text" name="luggage" placeholder="luggage"  required /></td>
    </tr>
    <tr>
    <td><input type="text" name="offer_pickup" placeholder="offer_pickup"  required /></td>
    </tr>
	 <tr>
    <td><input type="text" name="offer_housing" placeholder="offer_housing"  required /></td>
    </tr>
	<tr>
    <td><input type="text" name="pick_up_limit" placeholder="pick_up_limit"  required /></td>
    </tr>
	<tr>
    <td><input type="text" name="address" placeholder="address"  required /></td>
    </tr>
    <tr>
    <td><input type="text" name="volunteer_contact" placeholder="volunteer_contact"  required /></td>
    </tr>
	<tr>
    <td><input type="text" name="nights_offering" placeholder="nights_offering"  required /></td>
    </tr>
	<tr>
    <td><input type="text" name="max_guests" placeholder="max_guests"  required /></td>
    </tr>
	<tr>
    <td><input type="text" name="trip_rounds" placeholder="trip_rounds"  required /></td>
    </tr>
	
    <tr>
    <td><button type="submit" name="btn-save"><strong>SAVE</strong></button></td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>