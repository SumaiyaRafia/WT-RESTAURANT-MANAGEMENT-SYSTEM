<center>
<?php
   include "config.php";
   session_start();
   $userid = isset($_SESSION['uid']) ? $_SESSION['uid'] : "";


?>
<!DOCTYPE html>
<html>
<head>
	<?php include 'title.php'; ?>
</head>
<body>
	<h1><?php include 'header.php'; ?></h1>
	

	<div style="color : black; text-align: center; background: #00ff7f;"<h1><?php echo "Login successfull." ?></h1></div>


	<h1><div style="color:green; text-align: center;">Welcome to our website.</div></h1>

	<h2><a href="view-profile.php">View Profile</a></h2>
   <h2><a href="edit-profile.php">Edit Profile</a></h2>
   <h2><a href="changepassword.php">Change Password</a></h2>
   <h2><a href="edit-menu.php">Edit Menu</a></h2>
   <h2><a href="view-payment.php">View Payment History</a></h2>
   <h2><a href="userlist.php">Users List</a></h2>
   <h2><a href="event-approval.php">New Event Approval</a></h2>
   <h2><a href="a-r-receptionist.php">Add/Remove Receptionist</a></h2>
   <h2><a href="view-customer.php">View Customer Details</a></h2>
   <h2><a href="delete-profile.php">Delete Profile</a></h2>
	<br>
	<br>
	<h3><a href="view-profile.php"><?php echo "Logged in as: $userid (Manager)"; ?> <br> <br> </a></h3>
	 
	<?php include 'logout-include.php';?> 
    
    <?php include 'footer.php'; ?>
</center>

</body>
</html>
