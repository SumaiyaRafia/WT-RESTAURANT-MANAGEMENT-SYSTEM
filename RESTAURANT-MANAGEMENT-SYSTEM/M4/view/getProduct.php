



<?php

    $q=$_GET["q"];
    


    $con = mysqli_connect('localhost','root','','sumaiya_customer');
    if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
    }

    mysqli_select_db($con,"ajax_demo");
    $sql="SELECT * FROM product WHERE Name LIKE '%{$q}%'";
    $result = mysqli_query($con,$sql);

    
    echo "<table>
    <tr>
    <th>Product ID</th>
    <th>Product Name</th>
    <th>Sell Price</th>
    <th>Image</th>
    <th>Add to Cart</th>
    </tr>";
    while($row = mysqli_fetch_array($result)) {
        //echo "succes";
    echo "<tr>";

        echo "<td>" . $row['ID'] . "</td>";
        echo "<td>" . $row['Name'] . "</td>";
        echo "<td>" . $row['Sell_Price'] . "</td>";
        //echo "<td>" . $row['image'] . "</td>";
        echo '<td>'.'<img width="100px" src="../uploads/'.$row['image'].'" >'.'</td>';
        $ID=$row['ID'];
        echo '<td><button onclick="addCart(\''.$ID.'\')">Add to cart</button></td>';
        echo "</tr>";
    }
    echo "</table>";
    

    mysqli_close($con);

  ?>