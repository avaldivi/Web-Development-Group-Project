

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
 
 $level= $_POST['level'];
 $major = $_POST['major'];
 $airport_pickup = $_POST['airport_pickup'];
 $require_housing = $_POST['require_housing'];
 $arriving_flight_nr = $_POST['arriving_flight_nr'];
 $arriving_date = $_POST['arriving_date'];
 $arriving_time = $_POST['arriving_time'];
 $departing_flight_nr = $_POST['departing_flight_nr'];
 $luggage_amount = $_POST['luggage_amount'];
 $host_address = $_POST['host_address'];
 $host_contact = $_POST['host_contact'];
 $nights_stay = $_POST['nights_stay'];
 // variables for input data

 $id_query = "SELECT accounts_id FROM accounts";
								
 
 // sql query for inserting data into database
$sql_query = "INSERT INTO student(level,major,accounts_id,airport_pickup, require_housing,arriving_flight_nr,
									arriving_date,arriving_time,departing_flight_nr,luggage_amount,
									host_address,host_contact,nights_stay) 
			VALUES('$level', '$major', '$id_query', '$airport_pickup', '$require_housing', '$arriving_flight_nr', '$arriving_date', 
					'$arriving_time', '$departing_flight_nr', '$luggage_amount', '$host_address', '$host_contact', '$nights_stay')" ; 
 // sql query for inserting data into database

 // sql query execution function
 if(mysqli_query($connection, $sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Student Data Inserted Successfully! Please allow an admin to review.');
  window.location.href='studentview.php';
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
<title>Student Creation</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<div id="header">
 <div id="content">
    <label>Student Creation</label>
    </div>
</div>
<div id="body">
 <div id="content">
    <form method="post">
    <table align="center">
  <tr>
    <td align="center"><a href="adminview.php">back to main page</a></td>
    </tr>
	<tr>
    <td><input type="text" name="level" placeholder="Level"  required /></td>
    </tr>
	<tr>
    <td><input type="text" name="major" placeholder="Major"  required /></td>
    </tr>
	<tr>
    <td><input type="text" name="airport_pickup" placeholder="airport_pickup"  required /></td>
    </tr>
    <tr>
    <td><input type="text" name="require_housing" placeholder="require_housing"  required /></td>
    </tr>
	 <tr>
    <td><input type="text" name="arriving_flight_nr" placeholder="arriving_flight_nr"  required /></td>
    </tr>
	<tr>
    <td><input type="text" name="arriving_date" placeholder="arriving_date"  required /></td>
    </tr>
	<tr>
    <td><input type="text" name="arriving_time" placeholder="arriving_time"  required /></td>
    </tr>
	<tr>
    <td><input type="text" name="departing_flight_nr" placeholder="departing_flight_nr"  required /></td>
    </tr>
	<tr>
    <td><input type="text" name="luggage_amount" placeholder="luggage_amount"  required /></td>
    </tr>
	<tr>
    <td><input type="text" name="host_address" placeholder="host_address"  required /></td>
    </tr>
	<tr>
    <td><input type="text" name="host_contact" placeholder="host_contact"  required /></td>
    </tr>
	<tr>
    <td><input type="text" name="nights_stay" placeholder="nights_stay"  required /></td>
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