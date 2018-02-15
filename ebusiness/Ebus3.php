<?php
// Start the Session
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Receipt</title>
    </head>
    
    <body>
        <h4>Receipt</h4>
        
        <?php
        //Echo session variables that were set on the previous page
        echo "Total is " . $_SESSION["total"] . ".";
        ?>
    </body>
</html>