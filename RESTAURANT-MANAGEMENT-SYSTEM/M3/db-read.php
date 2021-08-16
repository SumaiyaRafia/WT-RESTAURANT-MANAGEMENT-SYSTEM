<?php 

    require 'dbconnect.php';

    function login($username, $password)
    {
      $conn = connect();
      $sql = $conn->prepare("SELECT * FROM USERS WHERE username = ? and password = ?");
      $sql->bind_param("ss", $username, $password);
      $sql->execute();
      $res = $sql->get_result();
      return $res->num_rows === 1;
    }

    function getallusers()
    {
      $conn = connect();
      $sql = $conn->prepare("SELECT id, username FROM USERS");
      $sql->execute();
      $res = $sql->get_result();
      return $res->fetch_all(MYSQLI_ASSOC);

    }

    function getuser($username)
    {
      $conn = connect();
      $sql = $conn->prepare("SELECT id, username FROM USERS where username = ?");
      $sql->bind_param("s", $username);
      $sql->execute();
      $res = $sql->get_result();
      return $res->fetch_all(MYSQLI_ASSOC);

    }



?>