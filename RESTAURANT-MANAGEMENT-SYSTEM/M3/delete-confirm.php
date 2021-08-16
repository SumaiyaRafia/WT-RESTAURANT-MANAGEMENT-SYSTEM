
<?php 
   include "config.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<?php include 'title.php'; ?>
</head>
<body>
	<h1><?php include 'header.php'; ?></h1>

<?php
     session_start();
     session_destroy();
     $file = fopen("user.json","w");   
     $json = json_decode("$file");
 
     unset($json); 

?>
     

<h1><span style="color: green;">Account deleted successfully.</span></h1>


<p><a href="registration.php">Click Here</a> for registration.</p>

  <?php include 'footer.php'; ?>

</body>	
</html>

