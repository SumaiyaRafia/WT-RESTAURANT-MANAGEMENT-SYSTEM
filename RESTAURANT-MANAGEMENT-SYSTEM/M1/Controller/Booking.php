<?php
session_start();
?>

<?php
$username = $BookingDate = $Person = "";
$usernameerr = $BookingDateerr = $Personerr = "";

 if($_SERVER['REQUEST_METHOD'] == "POST") {

 if(empty($_POST['username'])) {
$usernameerr = "Please Fill up the Username!";
}
else
{
$username=$_POST['username'];
}

 if(empty($_POST['BookingDate'])) {
$BookingDateerr = "Please fill up the booking time!";
}

 else
{
$BookingDate=$_POST['BookingDate'];
}



if(empty($_POST['Person'])) {
$Personerr = "Please enter the number of persons!";
}

 else
{
$Person=$_POST['Person'];
}

 

if($usernameerr ==""&&$BookingDateerr ==""&&$Personerr==""){
 $username = $_POST['username'];
 $BookingDate=$_POST['BookingDate'];
 $Person=$_POST['Person'];


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

        $stmt1 = mysqli_prepare($conn1, "insert into bookingroom1 (UserName,BookingDate,Person) values (?, ?, ?)");
        mysqli_stmt_bind_param($stmt1, "sss", $a1, $a2, $a3);
        $a1 = $_POST['username'];
        $a2 = $_POST['BookingDate'];
        $a3 = $_POST['Person'];

        $res = mysqli_stmt_execute($stmt1);

        if($res) {
            echo "Data Inserted Successfully!";
        //$_SESSION['username'] = $Lastname;
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

<!DOCTYPE html>
<html>
<head >
<title>Book Room</title>
<link rel="stylesheet" type="text/css" href="booking.css">

<body>

<div class="Booking">
<center>
<h2 style="color: black;"><b><?php echo "Welcome " . $_SESSION['username'] ?></b> </h2>
<h2 font-size: 22px;
font-family: Comic Sans MS;
color: #010529; text-shadow: 2px 1px 2px #83cceb;>Please place your booking here-</h2>
<form name="jsForm" onsubmit="return validate()" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST"><b>


<p>UserName:</p>
<label for="username"></label>
<input type="text" name="username" id="username" value="<?php echo $username ?>">
<h5>
<?php echo $usernameerr; ?></h5>
<br>

<p>Date of Booking:</p>
<label for="BookingDate"></label>
<input type="Date" id="BookingDate" name="BookingDate"
value="<?php echo $BookingDate ?>">
<h5>
<?php echo $BookingDateerr; ?><br><br>
</h5>

<br>

<select name="Total Person">
    <option selected disabled >Select Total Person</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
    <option value="13">13</option>
    <option value="14">14</option>
    <option value="15">15</option>
    <option value="16">16</option>
    
   
    </select>
<h5>
<?php echo $Personerr; ?><br>
</h5>
    <br>
<input type="submit" value="BOOK">
<h2><p id="errorMsg"></p></h2>

 </div>
</font>
</head>
</form>
</center>

<script>
        function validate() {
            var isValid = false;
            var username = document.forms["jsForm"]["username"].value;
            var BookingDate = document.forms["jsForm"]["BookingDate"].value;
            var Person = document.forms["jsForm"]["Person"].value;
            

            if(username == "" || BookingDate == "" ||Person == "" ) {
                document.getElementById('errorMsg').innerHTML = "<b> Please fill up the booking form properly";
                document.getElementById('errorMsg').style.color = "#990012";
            }
            else {
                isValid = true;
            }

            return isValid;
        }
    </script>
</body>
</html>