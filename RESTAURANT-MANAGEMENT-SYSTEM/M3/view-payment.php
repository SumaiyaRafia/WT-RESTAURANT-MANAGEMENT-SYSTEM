 <center>
 <?php
   include "config.php"; 

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<?php include 'title.php'; ?>

	<style>
		table, th, tr, td 
		{
			color: #black;border: 2px solid grey;
		}
	</style>
</head>
<body>

	<h1><?php include 'header.php'; ?></h1>

	<?php
    define("filepath", "payment.json");

	function read()
	      {
	      	$resource = fopen(filepath, "r");
	      	$fz = filesize(filepath);
	      	$fr = "";
	      	if($fz > 0)
	      	{
	      		$fr = fread($resource, $fz);
	      	}
	      	fclose($resource);
	      	return $fr;
	      }

	      $users_list = read();
           $users_list_array = explode("\n", $users_list);
           echo "<table>";
           	  echo "<tr><th>Method</th>"; 
           	  echo "<th>Number/Id</th>";
           	  echo "<th>Amount</th>";
           	  echo "<th>Time</th>";
           	  echo "</tr>";

           for($i = 0; $i < count($users_list_array) - 1; $i++)
           {
           	  $users_list_array_decode = json_decode($users_list_array[$i]);
           	  echo "<tr>";
           	  echo "<td>".$users_list_array_decode->Method."</td>";
           	  echo "<td>".$users_list_array_decode->Number_Id."</td>";
           	  echo "<td>".$users_list_array_decode->Amount."</td>";
           	  echo "<td>".$users_list_array_decode->Time."</td>";
           	  echo "</tr>";
           	}
           	echo "</table>";

	?>
	<br>

	<p><a href="welcomepage.php">Home</a></p>
	<?php include 'logout-include.php';?>

  <?php include 'footer.php'; ?>
  </center>

</body>
</html>