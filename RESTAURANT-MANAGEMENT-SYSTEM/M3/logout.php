<?php

session_start();
session_destroy();

header("Location: login-form.php");

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<h1><?php include 'header.php'; ?></h1>
     <?php include 'footer.php'; ?>
</body>
</html>