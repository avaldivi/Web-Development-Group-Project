

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
if(isset($_GET['edit_id']))
{
 $sql_query="SELECT * FROM student WHERE student_id=".$_GET['edit_id'];
$result_set = mysqli_query($connection, $sql_query);
 $fetched_row=mysqli_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
{
 // variables for input data

$student_id = $_POST['student_id'];
 $level= $_POST['level'];
 $major = $_POST['major'];
 $accounts_id = $_POST['accounts_id'];
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

 // sql query for update data into database
 $sql_query = "UPDATE student SET 
						student_id='$student_id', 
						level='$level', 
						major='$major', 
						accounts_id='$accounts_id', 
						airport_pickup='$airport_pickup', 
						require_housing='$require_housing', 
						arriving_flight_nr='$arriving_flight_nr', 
						arriving_date='$arriving_date', 
						arriving_time='$arriving_time', 
						departing_flight_nr='$departing_flight_nr', 
						luggage_amount='$luggage_amount',
						host_address='$host_address', 
						host_contact='$host_contact', 
						nights_stay='$nights_stay' 
 WHERE student_id=".$_GET['edit_id'];
 // sql query for update data into database
 
 // sql query execution function
 if(mysqli_query($connection, $sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Data Was Updated Successfully');
  window.location.href='adminview_st.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('An error occured while updating data');
  </script>
  <?php
 }
 // sql query execution function
}
if(isset($_POST['btn-cancel']))
{
 header("Location: adminview_st.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit Information</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<div id="header">
 <div id="content">
    <label>Edit Information</label>
    </div>
</div>

<div id="body">
 <div id="content">
    <form method="post">
    <table align="center">
	<tr>
    <td><input type="text" name="student_id" placeholder="Student id" value="<?php echo $fetched_row['student_id']; ?>" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="level" placeholder="Level" value="<?php echo $fetched_row['level']; ?>" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="major" placeholder="Major" value="<?php echo $fetched_row['major']; ?>" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="accounts_id" placeholder="accounts_id" value="<?php echo $fetched_row['accounts_id']; ?>" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="airport_pickup" placeholder="airport_pickup" value="<?php echo $fetched_row['airport_pickup']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="require_housing" placeholder="require_housing" value="<?php echo $fetched_row['require_housing']; ?>" required /></td>
    </tr>
	 <tr>
    <td><input type="text" name="arriving_flight_nr" placeholder="arriving_flight_nr" value="<?php echo $fetched_row['arriving_flight_nr']; ?>" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="arriving_date" placeholder="arriving_date" value="<?php echo $fetched_row['arriving_date']; ?>" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="arriving_time" placeholder="arriving_time" value="<?php echo $fetched_row['arriving_time']; ?>" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="departing_flight_nr" placeholder="departing_flight_nr" value="<?php echo $fetched_row['departing_flight_nr']; ?>" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="luggage_amount" placeholder="luggage_amount" value="<?php echo $fetched_row['luggage_amount']; ?>" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="host_address" placeholder="host_address" value="<?php echo $fetched_row['host_address']; ?>" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="host_contact" placeholder="host_contact" value="<?php echo $fetched_row['host_contact']; ?>" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="nights_stay" placeholder="nights_stay" value="<?php echo $fetched_row['nights_stay']; ?>" required /></td>
    </tr>
	
	
    <tr>
    <td>
    <button type="submit" name="btn-update"><strong>UPDATE</strong></button>
    <button type="submit" name="btn-cancel"><strong>Cancel</strong></button>
    </td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>