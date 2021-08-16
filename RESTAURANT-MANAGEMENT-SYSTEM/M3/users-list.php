<?php
   session_start();
   $userid = isset($_SESSION['uid']) ? $_SESSION['uid'] : "";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>View Profile</title>
</head>
<body>

	<h1>View Profile</h1>

	<?php
    define("filepath", "user.json");
	if($userid === "tabibaladib")

	{

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
           	  echo "<tr><th>First Name</th>"; 
           	  echo "<th>Last Name</th>";
           	  echo "<th>Gender</th>";
           	  echo "<th>Date of Birth</th>";
           	  echo "<th>Religion</th>";
           	  echo "<th>Present Address</th>";
           	  echo "<th>Permanent Address</th>";
           	  echo "<th>Phone</th>";
           	  echo "<th>Email</th>";
           	  echo "<th>Personal Website</th>";
           	  echo "<th>User Name</th>";
           	  echo "</tr>";

           for($i = 0; $i < count($users_list_array) - 1; $i++)
           {
           	  $users_list_array_decode = json_decode($users_list_array[$i]);
           	  echo "<tr>";
           	  echo "<td>".$users_list_array_decode->First_Name."</td>";
           	  echo "<td>".$users_list_array_decode->Last_Name."</td>";
           	  echo "<td>".$users_list_array_decode->Gender."</td>";
           	  echo "<td>".$users_list_array_decode->Date_of_Birth."</td>";
           	  echo "<td>".$users_list_array_decode->Religion."</td>";
           	  echo "<td>".$users_list_array_decode->Present_Address."</td>";
           	  echo "<td>".$users_list_array_decode->Permanent_Address."</td>";
           	  echo "<td>".$users_list_array_decode->Phone."</td>";
           	  echo "<td>".$users_list_array_decode->Email."</td>";
           	  echo "<td>".$users_list_array_decode->Personal_Website."</td>";
           	  echo "<td>".$users_list_array_decode->Username."</td>";
           	  echo "</tr>";
           	}
           	echo "</table>";

    }
	else 
	{
		echo "<h3 style='color:red;'>Unauthorized Access!!</h3>";

	}
	



	?>
	<br>

	<p>Click here to <a href="welcomepage.php">Home</a></p>
	<?php include 'logout-include.php';?>

</body>
</html>