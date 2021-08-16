<?php 
   
    require 'dbconnect.php';


    function changePassword($username, $password)
    {
      $conn = connect();
      $sql = $conn->prepare("UPDATE USERS Set password = ? WHERE username = ?");
      $sql->bind_param("ss", $password, $username);
      return $sql->execute();
    }



    function update($username, $fname, $lname, $gender, $dob, $religion, $pra, $pa, $phone, $email, $pw)
    {
      $conn = connect();
      $sql = $conn->prepare("UPDATE USERS Set fname = ?, lname = ?, gender = ?, dob = ?, religion = ?, pra = ?, pa = ?, phone = ?, email = ?, pw = ? WHERE username = ?");
      $sql->bind_param("sssssssssss", $fname, $lname, $gender, $dob, $religion, $pra, $pa, $phone, $email, $pw, $username);
      return $sql->execute();
    }


?>