<?php
  session_start();
?>

<?php 

if($_SERVER["REQUEST_METHOD"] == "POST") {

	 $username = $_POST['username'];
 $BookingDate=$_POST['BookingDate'];
 $BedType=$_POST['Person'];

if(empty($username) || empty($BookingDate)|| empty($Person)){

	echo "fill the form correctly";

}
else{
    $hostname = "localhost";
    $username = "user";
    $password = "123";
    $dbname = "finalproject1";

    $conn1 = mysqli_connect($hostname, $username, $password, $dbname);
    if(mysqli_connect_error()) {
        echo " Database Connection Failed!...";
        echo "<br>";
        echo mysqli_connect_error();
    }
    else {
        if($_POST['username'] == $_SESSION['username']){

        $stmt1 = mysqli_prepare($conn1, "insert into bookingroom1 (UserName,BookingDate,Person) values (?, ?, ?, ?)");
        mysqli_stmt_bind_param($stmt1, "sss", $a1, $a2, $a3);
        $a1 = $_POST['username'];
        $a2 = $_POST['BookingDate'];
        $a3 = $_POST['Person'];

        $res = mysqli_stmt_execute($stmt1);

        if($res) {
            echo "Data Inserted Successfully!";

        }
        else {
            echo "Failed to Insert Data.";
            
        }
    
    }
    else{

        echo "Input your own username";
    }
 }
 mysqli_close($conn1);
}
}
?>