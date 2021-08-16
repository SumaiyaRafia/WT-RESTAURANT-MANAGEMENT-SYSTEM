
<?php 
   include "config.php";
   session_start();
   $userid = isset($_SESSION['uid']) ? $_SESSION['uid'] : "";
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


   require 'db-update.php';

   

   $username = $userid;
   $password = "";


   $usernameErr = $passwordErr = "";

	$successMessage = $errMessage ="";
	$isValid = true;	

	   if($_SERVER['REQUEST_METHOD'] === "POST") 
	   	{

	       if(empty($_POST['password']))
	       {
            $passwordErr = "New Password can not be empty!";
            $isValid = false;
	       }

	       if($isValid)
	       {

            $password = $_POST['password'];

	      	$username = test_input($username);
	      	$password = test_input($password);


            $response = changePassword($username, $password);

            if($response)
            {
               $successMessage = "Password Changed Successfully!";
            }

            
	       }

	       else
	         {
	      	   $errMessage = "Error while saving!";
	         }

	      

	    }
 
     function test_input($data)
     {
     	$data = trim($data);
     	$data = stripslashes($data);
     	$data = htmlspecialchars($data);
     		return $data;
     }

 
	?>

	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST" name="regform" onsubmit="return isValid()">

       <fieldset>
	   <legend> Change Password:</legend>
	   <label for="username">Username: </label> 
	   <input type="text" id="username" name="username" value = "<?php echo "$userid"; ?>" disabled>
	   <span style="color: red;" id = "usernameErr"><?php echo $usernameErr; ?></span>
	   <br> <br>

	   <label for="password">New Password: </label> 
	   <input type="password" id="password" name="password">
	   <span style="color: red;" id = "passwordErr"><?php echo $passwordErr; ?></span>
	   <br>

	   </fieldset>
	   <br> 
	   <input class="submit" type="submit" value="Change Password">
	   <span style="color: green;"><?php echo $successMessage; ?></span>
       <span style="color: red;"><?php echo $errMessage; ?></span>
	     
</form>

<script>
	function isValid() 
	{
		var flag = true;

		var passwordErr = document.getElementById("passwordErr");

		var password = document.forms["regform"]["password"].value;

		passwordErr.innerHTML = "";

		if(password === "")
		{
			flag = false;
			document.getElementById("passwordErr").innerHTML = "Password can't be empty!";
		}

	
		return flag;

	}
</script>

<p>Go to <a href="welcomepage.php">HOME</p>

  <?php include 'footer.php'; ?>

</body>	
</html>