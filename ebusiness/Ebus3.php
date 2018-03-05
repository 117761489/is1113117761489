<?php
// Start the Session
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Receipt</title>
        <link rel="stylesheet" href="../mystylesheet.css" type="text/css">
    </head>
    
    <div id="container">
        <div id="nav" class="topnav">
            <ul>
  			    <li><a href="EBusHome.html">Home</a></li>
  			    <li><a class="active" href="../ebusiness/EBusAbout.html">About</a></li>
                <li><a href="../ebusiness/Ebus1.php">Store</a></li>
                <li style="float:right"><a href="../homepage.html">CV</a></li>
            </ul>
        </div>
  	    
  	<div id="content">
  	<div id="main">
    <body>
        <h4>Receipt</h4>
        
        <?php
        //Echo session variables that were set on the previous page
        echo "Total is $" . $_SESSION["total"] . ".";
        ?>
    </body>
    
    </div>
    </div>
    </div>
</html>