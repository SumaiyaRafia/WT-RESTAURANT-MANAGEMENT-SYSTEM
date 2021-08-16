



<?php

    $con = mysqli_connect('localhost','root','','sumaiya_customer');
    if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
    }

    mysqli_select_db($con,"ajax_demo");
    $sql="SELECT * FROM `cart_list` ";
    $result = mysqli_query($con,$sql);

    $total=0;

    echo '<table align="center">
    <tr>
    <th>Product ID</th>
    <th>Product Name</th>
    <th>Sell Price</th>
    <th>Image</th>
    <th>Delete</th>
    </tr>';
    while($row = mysqli_fetch_array($result)) {
        //echo "succes";
    echo "<tr>";

        echo "<td>" . $row['ID'] . "</td>";
        echo "<td>" . $row['Name'] . "</td>";
        echo "<td>" . $row['Sell_Price'] . "</td>";
        //echo "<td>" . $row['image'] . "</td>";
        echo '<td>'.'<img width="100px" src="../uploads/'.$row['image'].'" >'.'</td>';
        $ID=$row['ID'];
        echo '<td><button onclick="deleteCart(\''.$ID.'\')">Delete</button></td>';
        echo "</tr>";

        $total=$total+$row['Sell_Price'];

        /*/alt="<?php echo $row["image"] ?>"*/


    }
    echo "</table>";

    echo '<h1 style="color:red">Total price ='.$total.'</h1>';

    if($total>0){
        echo '<button style="background-color:gray; font-size:20px;text-color:white;" onclick="buy()">Buy</button>';

    }
    mysqli_close($con);

  ?>
  