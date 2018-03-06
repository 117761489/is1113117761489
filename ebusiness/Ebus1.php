<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>

        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>

        <link rel="stylesheet" href="../mystylesheet.css" type="text/css">

         <style>
            input[type=text], select {
                width: 40%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
            }

            input[type=submit] {
                width: 100%;
                background-color: #4CAF50;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }
            
            .table {
              padding: 0;
            }

        </style>

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
  		      
  		      <br/><br/>
            <br/><br/>
            
            <h2>Select a Product</h2>
          </div>
            
            <form method="POST" action="Ebus2.php">
              
              <table align="center">
              
              <tr><td></td></tr>
              
              <tr>
              <label for="salesforce">
              <td><input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/></td>
              <td>SalesForce @ $100</td>
              </label>
              </tr>
              
              <tr><td></td></tr>
              
              <tr>
              <label for="aws">
              <td><input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/></td>
              <td>AWS @ $300</td>
              </label>
              </tr>
              
              <tr><td></td></tr>
              
              <tr>
              <label for="Cloud9">
              <td><input type="radio" id="Cloud9" name="product" onclick="disablebtnProceed()"/></td>
              <td>Cloud9 @ $200</td>
              </label>
              </tr>
              
              <tr><td></td></tr>
              
              <tr>
              <label for="Gmail">
              <td><input type="radio" id="Gmail" name="product" onclick="disablebtnProceed()"/></td>
              <td>Gmail @ $400</td>
              </label>
              </tr>
              
              </table>
                
              <br/><br/>
              <br/><br/>

              <label for="subtotal">
                Sub Total
                <br/>
                <input type="text" id="subtotal" value="0.00" readonly/>
              </label>

              <br/>
              <br/>
              
              <label for="discount">
                Discount @ 5%
                <br/>
                <input type="text" id="discount" name="discount" value="0.00" readonly/>
              </label>
              
              <br/>
              <br/>
              
              <label for="vat">
                VAT @ 10%
                <br/>
                <input type="text" id="vat" name="vat" value="0.00" readonly/>
              </label>
              
              <br/>
              <br/>

              <label for="total">
                Total
                <br/>
                <input type="text" id="total" name="total" value="0.00" readonly/>
              </label>

              <br/><br/>
              <br/><br/>

              <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>

            </form>

            <br/>
            
            <button onClick="calcSub()">Calculate Cost</button>
            
            <br/>
            <br/>
            
            <a role="button" href="Ebus1.php">Clear Choice</a>
    </div>
    </div>
        
        <div id="footer">
            <footer> Copyright &copy; Daniel Crowley (117761489) </footer>
        </div>
        
    </div>
    </body>
</html>