<?php
session_start();
?>

<?php
$username = $PaymentType = $Cuisine = $Person = "";
$usernameerr = $PaymentTypeerr = $Cuisineerr = $Personerr = "";

 if($_SERVER['REQUEST_METHOD'] == "POST") {

 if(empty($_POST['username'])) {
$usernameerr = "Please Fill up the Username!";
}
else
{
$username=$_POST['username'];
}

if(empty($_POST['Cuisine'])) {
$Cuisineerr = "Please fill up the cuisine!";
}

 else
{
$Cuisine=$_POST['Cuisine'];
}


 if(empty($_POST['Person'])) {
$DayTypeerr = "Please fill up the total number of people!";
}

 else
{
$Person=$_POST['Person'];
}

 if(empty($_POST['PaymentType'])) {
$PaymentTypeerr = "Please fill up the payment type!";
}

 else
{
$PaymentType=$_POST['PaymentType'];
}

if($usernameerr ==""&&$Cuisineerr ==""&&$Personerr==""&&$PaymentTypeerr==""){
 $username = $_POST['username'];
 $Cuisine=$_POST['Cuisine'];
 $Person=$_POST['Person'];
 $PaymentType=$_POST['PaymentType'];


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

        $stmt1 = mysqli_prepare($conn1, "insert into payment (UserName,Cuisine,Person,PaymentType) values (?, ?, ?, ?)");
        mysqli_stmt_bind_param ($stmt1, "ssss", $a1, $a2, $a3, $a4);
        $a1 = $_POST['username'];
        $a2 = $_POST['Cuisine'];
        $a3 = $_POST['Person'];
        $a4 = $_POST['PaymentType'];

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

<!DOCTYPE html>
<html>
<head >
<title>Payment</title>
<link rel="stylesheet" type="text/css" href="payment.css">

<body>
<div class="Payment">
<center>
    <h4 style="color: black; font-family: cooper black;"><b><?php echo "Welcome " . $_SESSION['username'] ?></b> </h4>
<h1>Choose Your Payment</h1>
<form name="jsForm" onsubmit="return validate()" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST"><b>


<p>UserName:</p>
<label for="username"></label>
<input type="text" name="username" id="username" value="<?php echo $username ?>">
<h5>
<?php echo $usernameerr; ?>
	
</h5>
<br>


<select name="Cuisine">
    <option selected disabled >Select Cuisine</option>
    <option value="Indian">Indian</option>
    <option value="Chinese">Chinese</option>
    <option value="Italian">Italian</option>
    
   
    </select>
<h5>
<?php echo $Cuisineerr; ?><br>
</h5>
    <br>

    <select name="Person">
    <option selected disabled="">Total People:</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    </select>
    <h5>
<?php echo $Personerr; ?><br>
</h5>
    <br>
    

    
<select name="PaymentType">
    <option selected disabled="" >Select Payment Type:</option>
    <option value="bKash">bKash</option>
    <option value="CreditCard">Credit Card</option>
    <option value="Cash">Cash</option>
   
    </select>
<h5>
<?php echo $PaymentTypeerr; ?><br>
</h5>

 </b>
 <br>
 <br>
<input type="submit" value="PROCEED">
<h5 style="font-family: Comic Sans MS"><p id="errorMsg"></p></h5>
 
</font>
</head>
</form>
</center>
</div>


    <script>
        function validate() {
            var isValid = false;
            var username = document.forms["jsForm"]["username"].value;
            var Cuisine = document.forms["jsForm"]["Cuisine"].value;
            var Person = document.forms["jsForm"]["Person"].value;
            var PaymentType = document.forms["jsForm"]["PaymentType"].value;

            if(username == "" || Cuisine == "" || Person == "" || PaymentType == "") {
                document.getElementById('errorMsg').innerHTML = "Please fill up the Payment form properly";
                document.getElementById('errorMsg').style.color = "#8C001A";
            }
            else {
                isValid = true;
            }

            return isValid;
        }
    </script>
</body>
</html>