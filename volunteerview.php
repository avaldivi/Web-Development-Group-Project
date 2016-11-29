

<?php 
    session_start();
    $role = $_SESSION['sess_userrole'];
    if(!isset($_SESSION['sess_username']) && $role!=2){
      header('Location: login.php?err=2');
    }
?>


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

// delete condition
if(isset($_GET['delete_id']))
{
 $sql_query="DELETE FROM accounts WHERE accounts_id=".$_GET['delete_id'];
 mysqli_query($connection, $sql_query);
 header("Location: $_SERVER[PHP_SELF]");
}
// delete condition
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
=

    <!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Volunteer View</title>
<link rel="stylesheet" href="style.css" type="text/css" />


<script type="text/javascript">
function edt_id(id)
{
 if(confirm('Sure to edit ?'))
 {
  window.location.href='volunteer_edit_data.php?edit_id='+id;
 }
}
function delete_id(id)
{
 if(confirm('Sure to Delete ?'))
 {
  window.location.href='volunteerview.php?delete_id='+id;
 }
}
</script>
</head>
<body>

<div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="volunteerview.php">Account</a>
		  <a class="navbar-brand" href="#"></a>
		  <a class="navbar-brand" href="volunteerview_vo.php">Volunteer</a>
        </div>

        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><?php echo $_SESSION['sess_username'];?></a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </div>
      </div>
    </div>

<center>






<div id="body">
 <div id="content">
    <label>Volunteer View <a href="#" target="_blank"></a></label>
    </div>

 <div id="content">

 
    <table align="center">
    <tr>
    <th colspan="5"><a href="#">User Info.</a></th>
    </tr>
	<th>Account ID</th>
    <th>Last Name</th>
	<th>First Name</th>
    <th>User Email</th>
	<th>Gender</th>
	<th>Phone</th>
	<th>User Name</th>
	<th>Password</th>
	<th>role</th>
    <th colspan="2">Operations</th>
    </tr>
    <?php
 $sql_query="SELECT * FROM accounts WHERE accounts_id=".$_SESSION['sess_user_id'];
   $result_set = mysqli_query($connection, $sql_query) or die($sql_query."<br/><br/>".mysql_error());
 while($row=mysqli_fetch_row($result_set))
 {
  ?>
       <tr>
		<td><?php echo $row[0]; ?></td>
        <td><?php echo $row[1]; ?></td>
        <td><?php echo $row[2]; ?></td>
        <td><?php echo $row[3]; ?></td>
		<td><?php echo $row[4]; ?></td>
		<td><?php echo $row[5]; ?></td>
		<td><?php echo $row[6]; ?></td>
		<td><?php echo $row[7]; ?></td>
		<td><?php echo $row[8]; ?></td>
		<td align="center"><a href="javascript:edt_id('<?php echo $row[0]; ?>')"><img src="images/b_edit.png" alt="Edit" align="EDIT" height="30px" width="30px" /></a></td>
      
       </tr>
        <?php
 }
 ?>
 </table>
	
		
</div>
</div>

</center>
</body>
</html>