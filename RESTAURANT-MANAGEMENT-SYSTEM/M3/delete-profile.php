<?php 
   include "config.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<?php include 'title.php'; ?>
<center>
<body>
	<h1><?php include 'header.php'; ?></h1>


<h1><span style="color:red;">Are you sure to delete your account?<br></span></h1>
<p>This action can't be undone. You will need to register again to access this website.</p>
<h3>Confirm?</h3>


<button><a href="delete-confirm.php" style="color:red;">Yes</button>

<button><a href="welcomepage.php" style="color:green;">No</button>








  <?php include 'footer.php'; ?>

</body>	
</html>

