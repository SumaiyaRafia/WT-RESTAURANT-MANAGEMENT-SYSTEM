

<?php
session_start();

if(isset($_SESSION['username'])){


}
else{

    header('location: login.php');
}

?>





<!DOCTYPE html>
<html>


<?php


include('../header2.php');


require_once '../model/model.php';

     $data['productId']                     =     $_SESSION['productId'];
     $data['productName']                     =     $_SESSION['productName'];
     $data['sellPrice']                   =     $_SESSION['sellPrice'];
     $data['image'] = $_SESSION['image'];


    if (addProduct($data)) {
        echo 'Successfully added!!';
    } else {
        echo 'You are not allowed to access this page.';    
    }
     


?>

<style>
.error {color: #15319d;font-size:15px;}
</style>
<style>
.error1 {color: red;font-size:15px;}
</style>


<div class ="error" align="center" <b><br><br>

    
    <span class="error"> <b> <h1 align="center" style= "color: #15319d";><?php echo  "Product Added Successfully";?></h1> </span>

</div>


<body>

</body>


<?php


include('../view/footer.php');;


?>

</html>