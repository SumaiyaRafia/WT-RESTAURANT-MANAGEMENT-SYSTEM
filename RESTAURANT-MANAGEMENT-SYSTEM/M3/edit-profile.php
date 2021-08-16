
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
   $fname = $lname = $gender = $dob = $religion = $email = $phone = $pra = $pa = $pw = "";


	$fnameErr = $lnameErr = $genderErr = $dobErr = $religionErr = $emailErr = "";

	$successMessage = $errMessage ="";
	$isValid = true;	

	   if($_SERVER['REQUEST_METHOD'] === "POST") 
	   	{ 
	      	
	   	  if(empty($_POST['fname']))
	       {
            $fnameErr = "First Name can not be empty!";
            $isValid = false;
	       }

	       if(empty($_POST['lname']))
	       {
            $lnameErr = "Last Name can not be empty!";
            $isValid = false;
	       }

	       if(empty($_POST['gender']))
	       {
            $genderErr = "Gender can not be empty!";
            $isValid = false;
	       }

          if(empty($_POST['dob']))
	       {
            $dobErr = "Date of Birth can not be empty!";
            $isValid = false;
	       }

	       if(empty($_POST['religion']))
	       {
            $religionErr = "Religion can not be empty!";
            $isValid = false;
	       }

	       if(empty($_POST['email']))
	       {
            $emailErr = "Email can not be empty!";
            $isValid = false;
	       }


	       if($isValid)
	       {
	       	$fname = $_POST['fname'];
            $lname = $_POST['lname'];
          	$gender = $_POST['gender'];
            $dob = $_POST['dob'];
            $religion = $_POST['religion'];
            $pra = $_POST['pra'];
            $pa = $_POST['pa'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $pw = $_POST['pw'];


	      	$fname = test_input($fname);
	      	$lname = test_input($lname);
	      	$gender = test_input($gender);
	      	$dob = test_input($dob);
	      	$religion = test_input($religion);
	      	$pra = test_input($pra);
	      	$pa = test_input($pa);
	      	$phone = test_input($phone);
	      	$email = test_input($email);
	      	$pw = test_input($pw);



            $response = update($fname, $lname, $gender, $dob, $religion, $pra, $pa, $phone, $email, $pw);

            if($response)
            {
               $successMessage = "Profile Updated Successfully!";
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
	   <legend> Basic Information:</h3> </legend>

	   <label for="username">Username: </label> 
	   <input type="text" id="username" name="username" value = "<?php echo "$userid"; ?>" disabled>
	   <br> <br>

	   <label for="fname">First name: </label> 
	   <input type="text" id="fname" name="fname" value="<?php echo "$fname";?>">
	   <span style="color: red;"><?php echo $fnameErr; ?></span>
	   <br><br>

	   <label for="lname">Last name: </label> 
	   <input type="text" id="lname" name="lname" value="<?php echo "$lname";?>">
	   <span style="color: red;"><?php echo $lnameErr; ?></span>
	   <br> <br>

	   <label for="gender">Gender: </label>
	   <input type="radio" id="male" name="gender" value="male">
	   <label for="male">Male</label>
	   <input type="radio" id="female" name="gender" value="female">
	   <label for="female">Female</label>
	   <span style="color: red;"><?php echo $genderErr; ?></span>
	   <br><br>

	   <label for="dob">DOB:</label>
       <input type="date" id="dob" name="dob" value="<?php echo "$dob";?>">
       <span style="color: red;"><?php echo $dobErr; ?></span>
	   <br><br>

	   <label for="religion">Religion:</label>
	   <select name = "religion" id="religion" value="<?php echo "$religion";?>">
	   	<option value="none" selected disabled hidden>Select an option
      </option>
	  	<option value = "islam">Islam</option>
	  	<option value = "hindu">Hindu</option>
	  	<option value = "buddhism">Buddhism</option>
	  	<option value = "christianity">Christianity</option>
	  	<option value = "other">Other</option>
	   </select>
	   <span style="color: red;"><?php echo $religionErr; ?></span>

	   </fieldset>

       <br>
       <fieldset>
	   <legend> Contact Information:</legend>
	   <label for="pra">Present Address: </label> 
	   <input type="textarea" id="pra" name="pra" value="<?php echo "$pra";?>">
	   <br> <br>

	   <label for="pa">Permanent Address: </label> 
	   <input type="textarea" id="pa" name="pa" value="<?php echo "$pa";?>">
	   <br> <br>

	   <label for="phone">Phone: </label>
	   <input type="tel" id="phone" name="phone" value="<?php echo "$phone";?>">
	   <br> <br>

	   <label for="email">Email: </label>
	   <input type="email" id="email" name="email" value="<?php echo "$email";?>">
	   <span style="color: red;"><?php echo $emailErr; ?></span>
	   <br> <br>

	   <label for="pw">Personal Website: </label> 
	   <input type="url" id="pw" name="pw" value="<?php echo "$pw";?>">
	   <br>

	   </fieldset>
	   <br> 
	   <input class="submit" type="submit" value="Update Profile">
	   <p><a href="view-profile.php">View Profile</a></p>
	   <span style="color: green;"><?php echo $successMessage; ?></span>
       <span style="color: red;"><?php echo $errMessage; ?></span>

	     
</form>

<script>
	function isValid() 
	{
		var flag = true;

		var fnameErr = document.getElementById("fnameErr");
		var lnameErr = document.getElementById("lnameErr");
		var genderErr = document.getElementById("genderErr");
		var dobErr = document.getElementById("dobErr");
		var religionErr = document.getElementById("religionErr");
		var emailErr = document.getElementById("emailErr");

		var fname = document.forms["regform"]["fname"].value;
		var lname = document.forms["regform"]["lname"].value;
		var gender = document.forms["regform"]["gender"].value;
		var dob = document.forms["regform"]["dob"].value;
		var religion = document.forms["regform"]["religion"].value;
		var email = document.forms["regform"]["email"].value;

		fnameErr.innerHTML = "";
		lnameErr.innerHTML = "";
		genderErr.innerHTML = "";
		dobErr.innerHTML = "";
		religionErr.innerHTML = "";
		emailErr.innerHTML = "";


		if(fname === "")
		{
			flag = false;
			document.getElementById("fnameErr").innerHTML = "First Name can't be empty!";
		}

		if(lname === "")
		{
			flag = false;
			document.getElementById("lnameErr").innerHTML = "Last Name can't be empty!";
		}

		if(gender === "")
		{
			flag = false;
			document.getElementById("genderErr").innerHTML = "Gender can't be empty!";
		}

		if(dob === "")
		{
			flag = false;
			document.getElementById("dobErr").innerHTML = "Date of Birth can't be empty!";
		}

		if(religion === "")
		{
			flag = false;
			document.getElementById("religionErr").innerHTML = "Religion can't be empty!";
		}

		if(email === "")
		{
			flag = false;
			document.getElementById("emailErr").innerHTML = "Email can't be empty!";
		}


	
		return flag;

	}
</script>

<p><a href="welcomepage.php">Home</a></p>


  <?php include 'footer.php'; ?>

</body>	
</html>