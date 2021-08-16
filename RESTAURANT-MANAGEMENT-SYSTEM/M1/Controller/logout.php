<?php
unset($_SESSION['username']);
session_destroy();

 header("Location: Login.php ");
exit();


?>
