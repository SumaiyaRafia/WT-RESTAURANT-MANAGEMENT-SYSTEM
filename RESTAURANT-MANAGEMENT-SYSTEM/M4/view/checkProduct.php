



<?php
session_start();

if(isset($_SESSION['username'])){


}
else{

    header('location: ../controller/login.php');
}

?>





<?php


  require_once 'readData.php';
  //$products = fetchAllProducts();
  
  //$count=0;

?>


<?php //echo $product['Sell_Price']; ?>

<!DOCTYPE html>
<html>

<div id="header">
<?php


include('../header2.php');


?>
</div>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../css/styles.css">
  <title>Product List</title>
</head>



<style type="text/css">
  

    table, th, td {
      border: 1px solid black;
      
    }

    th, td {
        padding: 1px;
    }

</style>



<body onload ="getAllProduct()" id="container">

<main>
<div align="center">
    



<div id="livesearch" align="center">   


</footer>




</div>



</div>

</main>

</body>




<script type="text/javascript" src="../javascript/aajax.js">


  


</script>

<p><br></p>
<?php


include('footer.php');


?>

</html>