<?php 

if ($_SERVER['REQUEST_METHOD']=="POST") {
	

	$hostname = "localhost";
    $username = "user";
    $password = "123";
    $dbname = "finalproject1";

	
	
	$conn1 = mysqli_connect($hostname, $username, $password, $dbname);
	if(mysqli_connect_error()) {
		echo "Database Connection Failed!...";
		echo "<br>";
		echo mysqli_connect_error();
	}
	else {
		echo "Database Connection Successful!";


		$stmt1 = mysqli_prepare($conn1, "insert into feedback (ComplainBox, Rating) values (?, ?)");
		mysqli_stmt_bind_param($stmt1, "ss", $a1, $a2);
		$a1 = $_POST['complain'];
        $a2 = $_POST['rating'];
		$res = mysqli_stmt_execute($stmt1);

		if($res) {
			echo "Data Insert Successful!";
			 header("Location: SButton.php ");
        exit();
		}
		else {
			echo "Failed to Insert Data.";
			echo "<br>";
			echo $conn1->error;
		}
	}

	mysqli_close($conn1);
	
}
	?>