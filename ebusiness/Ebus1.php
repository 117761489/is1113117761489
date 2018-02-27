<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
        
        <link rel="stylesheet" href="../mystylesheet.css" type="text/css">

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
            <h4>Select a Product</h4>
          </div>
            
            <br/>
            
            <form method="POST" action="Ebus2.php">
              
              <label for="salesforce">
                <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                SalesForce @ $100
              </label>
              
              <br/>
              
              <label for="aws">
                <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                AWS @ $300
              </label>
              
              <br/>
              <br/>
              
              <label for="subtotal">
                Sub Total
                <input type="text" id="subtotal" value="0.00" readonly/>
              </label>
              
              <br/>
              
              <label for="total">
                Total
                <input type="text" id="total" name="total" value="0.00" readonly/>
              </label>
    
              <br/>
              
              <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
            
            </form>
            
            <br/>
            <button onClick="calcSub()">Calculate Cost</button>
            <a role="button" href="Ebus1.php">Clear Choice</a>
    </div>
    </div>
    </div>
    </body>
</html>