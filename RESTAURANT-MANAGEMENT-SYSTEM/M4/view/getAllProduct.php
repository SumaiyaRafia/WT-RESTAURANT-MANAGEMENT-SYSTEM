



<?php

    $con = mysqli_connect('localhost','root','','receptionist');
    if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
    }

    mysqli_select_db($con,"ajax_demo");
    $sql="SELECT * FROM `product` ";
    $result = mysqli_query($con,$sql);


    echo '<table align="center">
    <tr>
    <th>Product ID</th>
    <th>Product Name</th>
    <th>Sell Price</th>
    <th>Image</th>
    <th>Action</th>
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
        echo '<td><button onclick="deleteFood(\''.$ID.'\')">Delete</button></td>';
        echo "</tr>";

        /*/alt="<?php echo $row["image"] ?>"*/
    }
    echo "</table>";


    mysqli_close($con);

  ?>
  