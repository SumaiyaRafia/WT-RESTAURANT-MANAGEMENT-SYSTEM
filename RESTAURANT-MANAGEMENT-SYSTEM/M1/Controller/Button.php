<?php
 session_start();
?>
<!DOCTYPE html>
<htm>
<head>
	<title>DASHBOARD</title>
	<link rel="stylesheet" type="text/css" href="STYLE.css">
</head>
<body>
	

    <div class="navbar">
    <ul>
        
        <li class="dropdown"> <a href="">OTHERS</a>
             
             <ul>
             	<li><a href="ContactUs.html">Contact Us</a></li>
                 
             </ul>
             
         
        
        </li>
        
    </ul>

    </div>
    
<header>
	<div class="session">
		<?php
            echo "<center>Welcome To Restaurant Management System ". $_SESSION['username'];
		?>
	</div>
	<div class="container">
		
		
		<button onclick="window.location.href='Booking.php'" class="btn btn1">Book Dining</button>
		<button onclick="window.location.href='Food.php'" class="btn btn2">Order Food</button>
		<button onclick="window.location.href='event.php'" class="btn btn4">Choose Event/Book Event</button>
		<button onclick="window.location.href='Payment.php'" class="btn btn3">Payment Method</button>
		<button onclick="window.location.href='ajaxrating.html'" class="btn btn7">Give Feedback</button>
		<button onclick="window.location.href='PassChange.php'" class="btn btn8">Change Password</button>
		<button onclick="window.location.href='logout.php'" class="btn btn9">Log Out</button>
		
	</div>
</header>
 <div id="footer">
 <p></p>
 <br>
 COPYRIGHT- RAFIA
 </div>
</body>
</html>