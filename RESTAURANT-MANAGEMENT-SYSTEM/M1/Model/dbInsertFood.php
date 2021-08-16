<?php
$username = "";
$usernameerr = "";

 if($_SERVER['REQUEST_METHOD'] == "POST") {

 if(empty($_POST['username'])) {
$usernameerr = "Please Fill up the Username!";
}
else
{
$username=$_POST['username'];
}

if($usernameerr ==""){
 $username = $_POST['username'];
 

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

        $stmt1 = mysqli_prepare($conn1, "insert into food (UserName,Cuisine1,Cuisine2,Cuisine3) values (?, ?, ?, ?)");
        mysqli_stmt_bind_param($stmt1, "ssss", $a1, $a2, $a3, $a4);
         
        $a1 = $_POST['username'];
        $a2 = $_POST['Indian'];
        $a3 = $_POST['Chinese'];
        $a4 = $_POST['Italian'];

        $res = mysqli_stmt_execute($stmt1);

        if($res) {
            echo "Data Inserted Successfully!";
        
        header("Location: SButton.php ");
        exit();
        }
        else {
            echo "Failed to Insert Data.";
            
        }
    
    }
    else{

        $usernameerr="Input your own username";
    }
 }
 mysqli_close($conn1);
 
}

 }
?>