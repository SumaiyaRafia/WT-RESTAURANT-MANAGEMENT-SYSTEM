



<?php

    $q=$_GET["q"];
    


    $con = mysqli_connect('localhost','root','','sumaiya_customer');
    if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
    }

    mysqli_select_db($con,"ajax_demo");
    $sql="SELECT * FROM product WHERE ID = '$q'";
    $result = mysqli_query($con,$sql);

    
   
    while($row = mysqli_fetch_array($result)) {
        //echo "succes";
    echo "<tr>";

        $ID=$row['ID'];
        $Name=$row['Name'];
        $Sell_Price=$row['Sell_Price'];
        $image=$row['image'];
    }


    require_once '../model/db_connect.php';

    $conn = db_conn();

    $selectQuery = "INSERT INTO cart_list( ID, Name, Sell_Price,image)
VALUES (:Id,:name,:sellPrice,:image)";
    
    //echo "done";
    try{
        //echo "done";

        $stmt = $conn->prepare($selectQuery);
        
        $stmt->execute([
            ':Id'                =>    $ID,
            ':name'                =>    $Name,
            ':sellPrice'     =>     $Sell_Price,
            ':image' => $image
            
        ]);
        //echo 'again';
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    
    

    mysqli_close($con);

  ?>