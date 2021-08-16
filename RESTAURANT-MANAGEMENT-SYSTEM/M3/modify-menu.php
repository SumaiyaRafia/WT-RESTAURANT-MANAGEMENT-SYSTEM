
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
	
    define("filepath", "menu.json");

   $name = $id = $item = $price = "";


	$nameErr = $idErr = $itemErr = $priceErr = "";

	$successMessage = $errMessage ="";
	$flag = false;
	
	   if($_SERVER['REQUEST_METHOD'] === "POST") 
	   	{ 
	   	  if(empty($_POST['name']))
	       {
            $nameErr = "Name can not be empty!";
            $flag = true;
	       }

	       if(empty($_POST['id']))
	       {
            $idErr = "Id can not be empty!";
            $flag = true;
	       }

	       if(empty($_POST['item']))
	       {
            $itemErr = "Item can not be empty!";
            $flag = true;
	       }

          if(empty($_POST['price']))
	       {
            $priceErr = "Price can not be empty!";
            $flag = true;
	       }

	      

	       if(!$flag)
	       {
	      	$name = $_POST['name'];
            $id = $_POST['id'];
          	$item = $_POST['item'];
            $price = $_POST['price'];
	      	
	      	$fname = test_input($name);
	      	$lname = test_input($id);
	      	$gender = test_input($item);
	      	$dob = test_input($price);

            $json_object = file_get_contents('menu.json');
            $data = json_decode($json_object, true);
            $data['Name'] = $name;
            $data['Id'] = $id;
            $data['Item'] = $item;
            $data['Price'] = $price;

	      	$data_encode = json_encode($data);
	      	$result1 = write($data_encode);
            if($result1)
            {
               $successMessage = "Menu Edited Successfully!";
            }


            
	       }

	      else
	      {
	      	$errMessage = "Error while saving!";
	      }

	    }

     function write($content)
     {
           $resource = fopen(filepath, "w+");
           $fw = fwrite($resource, $content."\n");
           fclose($resource);
           return$fw;
     }
	     
     function test_input($data)
     {
     	$data = trim($data);
     	$data = stripslashes($data);
     	$data = htmlspecialchars($data);
     		return $data;
     }

     //$fo1 = fopen("data.txt","r");
     //$fr1 = fread($fo1, filesize("data.txt")); 
     //echo $fr1;
     //fclose($fo1);
	    
 
	?>

	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
	   <fieldset>	
	   <legend>Menu Information:</legend>
	   <label for="name">Name: </label> 
	   <input type="text" id="name" name="name">
	   <span style="color: red;"><?php echo $nameErr; ?></span>
	   <br><br>

	   <label for="id">Id: </label> 
	   <input type="text" id="id" name="id">
	   <span style="color: red;"><?php echo $idErr; ?></span>
	   <br> <br>


	   <label for="item">Item: </label> 
	   <input type="textarea" id="item" name="item">
	   <span style="color: red;"><?php echo $itemErr; ?></span>
	   <br> <br>


	   <label for="price">Price: </label> 
	   <input type="text" id="price" name="price">
	   <span style="color: red;"><?php echo $priceErr; ?></span>
	   <br> <br>

	   </fieldset>
	   <br> 
	   <input class="submit" type="submit" value="Edit Menu">
	   <span style="color: green;"><?php echo $successMessage; ?></span>
       <span style="color: red;"><?php echo $errMessage; ?></span>

	     
</form>

   <p><a href="welcomepage.php">Home</a></p>
   <?php include 'logout-include.php';?>

  <?php include 'footer.php'; ?>

</body>	
</html>