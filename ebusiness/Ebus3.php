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
        	<a href="../homepage.html">Home</a>
        	<a href="../cv/cv_page1.html">CV</a>
            <a href="../interests/sports.html">Interests</a>
            <a class="active" href="ebusiness/EbusHome.html">EBusiness</a>
            <a href="ebusiness/Ebus1.php" float="right">Store</a>
  	    </div>
  	    
  	<div id="content">
  	<div id="main">
    <body>
        <h4>Receipt</h4>
        
        <?php
        //Echo session variables that were set on the previous page
        echo "Total is " . $_SESSION["total"] . ".";
        ?>
    </body>
    
    </div>
    </div>
    </div>
</html>