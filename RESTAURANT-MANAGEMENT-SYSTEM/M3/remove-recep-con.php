
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

     $file = fopen("receptionist.json","w");   
     $json = json_decode("$file");
 
     unset($json); 

?>
     

<h1><span style="color: green;">Receptionist removed successfully.</span></h1>


<p><a href="add-recep.php">Click Here</a> to add receptionist.</p>

   <p><a href="welcomepage.php">Home</a></p>
   <?php include 'logout-include.php';?>

  <?php include 'footer.php'; ?>

</body>	
</html>

