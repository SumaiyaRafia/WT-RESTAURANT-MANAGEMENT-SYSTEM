


<?php
session_start();

if(isset($_SESSION['username'])){


}
else{

    header('location: login.php');
}

?>



<?php
    

    // define variables and set to empty values
    $productNameErr = $buyPriceErr = $sellPriceErr = $imageErr=$productId= "";

    $productName = $buyPrice = $sellPrice = $image=$productIdErr="";

    $check=0;





    if ($_SERVER["REQUEST_METHOD"] == "POST") {

      
        //ProductID validation
      if (empty($_POST["productId"])) {
        $productIdErr = "Please enter a product Id";
      } 
      else {
        $productId = test_input($_POST["productId"]);
        //validating alphabet
        if (!preg_match("/^[0-9]{0,11}$/",$productId)) {
          $productIdErr = "0 - 11 digit allow and only number";
        }
        else
          $check++;
          //!preg_match("/^[a-zA-Z-'{2,8} ]*$/",$name  
      }

      
      //name validation
      if (empty($_POST["productName"])) {
        $productNameErr = "Please enter a product name";
      } 
      else {
        $productName = test_input($_POST["productName"]);
        //validating alphabet
        if (!preg_match("/^[a-zA-Z\ 0-9]+/",$productName)) {
          $productNameErr = "Please enter a product name";
        }
        else
          $check++;
          //!preg_match("/^[a-zA-Z-'{2,8} ]*$/",$name  
      }




      //sell price validation
      if (empty($_POST["sellPrice"])) {
        $sellPriceErr = "Please enter a product sell price";
      } 
      else {
        $sellPrice = test_input($_POST["sellPrice"]);
        //validating alphabet
        if (!preg_match("/^[0-9]*$/",$sellPrice)) {
          $sellPriceErr = "only number can allow";
        }
        else
          $check++;
          //!preg_match("/^[a-zA-Z-'{2,8} ]*$/",$name  
      }

      //form changing 
      if ($check == 3) {
          $_SESSION['productId']=$_REQUEST['productId'];
          $_SESSION['productName']=$_REQUEST['productName'];
          $_SESSION['buyPrice']=$_REQUEST['buyPrice'];
          $_SESSION['sellPrice']=$_REQUEST['sellPrice'];
          $_SESSION['image'] = basename($_FILES["image"]["name"]);


          $_SESSION['tmp_name']=$_FILES["image"]["tmp_name"];
          $_SESSION['dir'] = "../uploads/";
          $_SESSION['target_file'] = $_SESSION['dir'] . $_SESSION['image'];

          if (move_uploaded_file($_SESSION['tmp_name'], $_SESSION['target_file'])) {
            echo "The file ". $_SESSION['image']. " has been uploaded.";
          } 
          else {
            echo "Sorry, there was an error uploading your file.";
          }

          header('location: foodAdded.php');
      }
  }
  

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>


<!DOCTYPE html>
<html>


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>


<?php


include('../header2.php');


?>

<style>
.error {color: #15319d;font-size:15px;}
</style>
<style>
.error1 {color: red;font-size:15px;}
</style>


<div id="addProduct" class ="error" align="center" <b><br><br>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" enctype="multipart/form-data">
        
         Food ID :<input type="text" name="productId" id="productId" onkeyup="idVal()"><br><br>
        <span class="error1" id="productIdErr">*<?php echo $productIdErr;?></span><br><br>    
        Food Name :<input type="text" name="productName" id="productName" onkeyup="nameVal()"><br><br>
        <span class="error1" id="productNameErr">*<?php echo $productNameErr;?></span><br><br>
        Food Price :<input type="text" name="sellPrice" id="sellPrice" onkeyup="sellVal()"><br><br>
        <span class="error1" id="sellPriceErr">*<?php echo $sellPriceErr;?></span><br><br>
        <input type="file" name="image"><br><br>
        <!--Image :<input type="text" name="username" id="productName"><br><br>-->
        
        <input type="submit" name="submit" value="submit">

    </form>

</div>

<body>


  <script type="text/javascript" src="../javascript/addProductScript.js">

  </script>

</body>


<?php


include('../view/footer.php');


?>

</html>