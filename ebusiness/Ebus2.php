<?php
// Start the Session
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Enter Details</title>
        <link rel="stylesheet" href="../mystylesheet.css" type="text/css">
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body>
        <div id="container">
        <div id="nav" class="topnav">
  			<ul>
  			    <li><a class="active" href="EBusHome.html">Home</a></li>
  			    <li><a href="../ebusiness/EBusAbout.html">About</a></li>
                <li><a href="../ebusiness/Ebus1.php">Store</a></li>
                <li style="float:right"><a href="../homepage.html">CV</a></li>
            </ul>
  		</div>
  		
  		<div id="content">
  		  <div id="main">
  		    
  		    <div id ="header">
                <h4>Please enter your payment details</h4>
            </div>
        
        
            <form action="Ebus3.php" method="POST">

                    <label for="name">Full Name</label>
                    <input type="text" id="name" placeholder="Full Name" maxlength="40">

                    <br/>
                    <br/>
                    
                    <label for="email">E-Mail Address</label>
                    <input type="text" id="email" placeholder="E-Mail Address" maxlength="40">
                    
                    <br/>
                    <br/>
                    
                    <label for="user_pin">PIN</label>
                    <input type="password" id="user_pin" placeholder="Card PIN" maxlength="4">
                    
                    <br/>
                    <br/>

                <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
              
            </form>
            
            <br/>
            <button onClick="validateDetails()">Validate</button>
            
            <?php
            // Set session variables
            $_SESSION["total"] = $_POST["total"]
            ?>
        
        <script type="text/javascript" src="ebus2_validator.js"></script>
        
        </div>
        </div>
        </div>
    </body>
</html>