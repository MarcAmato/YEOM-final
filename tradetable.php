<!--
Will display:
    * the opening/closing times of the cafe
    * the list of food and bev. items available at that cafe
    * their cost and initial associated order quantity of 0
    * !!! more functionality... see the specs...
-->

<html>
    <head>
        <title>The Trade Table's Menu</title>
        <link rel="stylesheet" type="text/css" href="css/grilled.css">
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <script>
            function myOrder() {
            alert("Your order has been processed!");
            }
        </script>
    </head>
    <body>
        <div align="center"><h1>The Trade Table Reseraunt</h1>
            <?php session_start(); 
            if(isset($_SESSION['username'])){ echo "You are logged in as ".$_SESSION['username']; } else { echo "(You are not logged in)"; }
            ?>
        </div>       
<?php
session_start();
if(isset($_SESSION['username']))
{
echo '<table border = 5 bordercolor = red align = center>
    <th colspan = 14>Food and Beverages</th>
    <tr>
        <th colspan = 4>Item</th>
        <th colspan = 4>Cost</th>
        <th colspan = 3>Comments</th>
        <th colspan = 1>Quantity</th>
    </tr>
    <tr>
        <td colspan = 4><img src="img\cabbage.jpg"  width="150" alt="" border=3><br>
        Cabbage Rolls</td>
        <td colspan = 4>$15.00</td>
        <td colspan = 3><textarea name="" id="" cols="30" rows="10"></textarea></td>
        <td colspan = 1><form onsubmit="myOrder();">
            <input type="number" name="quantity" min="1" max="5">
            <input type="submit" value="Order">
        </form></td>
    </tr>
    <tr>
        <td colspan = 4><img src="img\fettuccine.jpg"  width="150" alt="" border=3><br>
        Fettuccine Alfredo</td>
        <td colspan = 4>$18.00</td>
        <td colspan = 3><textarea name="" id="" cols="30" rows="10"></textarea></td>
        <td colspan = 1><form onsubmit="myOrder();">
            <input type="number" name="quantity" min="1" max="5">
            <input type="submit" value="Order">
        </form></td>
    </tr>
    <tr>
        <td colspan = 4><img src="img\tofu.webp" height="130" width="150" alt="" border=3><br>
        Crispy Baked Tofu</td>
        <td colspan = 4>$13.50</td>
        <td colspan = 3><textarea name="" id="" cols="30" rows="10"></textarea></td>
        <td colspan = 1><form onsubmit="myOrder();">
            <input type="number" name="quantity" min="1" max="5">
            <input type="submit" value="Order">
        </form></td>
    </tr>
    <tr>
        <td colspan = 4><img src="img\kale.jpg"  width="150" alt="" border=3><br>
        Kale Smoothie</td>
        <td colspan = 4>$6.00</td>
        <td colspan = 3><textarea name="" id="" cols="30" rows="10"></textarea></td>
        <td colspan = 1><form onsubmit="myOrder();">
            <input type="number" name="quantity" min="1" max="5">
            <input type="submit" value="Order">
        </form></td>
    </tr>
</table>';
}
else
{
echo '<table border = 5 bordercolor = red align = center>
    <th colspan = 14>Food and Beverages</th>
    <tr>
        <th colspan = 4>Item</th>
        <th colspan = 4>Cost</th>
    </tr>
    <tr>
        <td colspan = 4><img src="img\cabbage.jpg"  width="150" alt="" border=3><br>
        Cabbage Rolls</td>
        <td colspan = 4>$15.00</td>
    </tr>
    <tr>
        <td colspan = 4><img src="img\fettuccine.jpg"  width="150" alt="" border=3><br>
        Fettuccine Alfredo</td>
        <td colspan = 4>$18.00</td>
    </tr>
    <tr>
        <td colspan = 4><img src="img\tofu.webp" height="130" width="150" alt="" border=3><br>
        Crispy Baked Tofu</td>
        <td colspan = 4>$13.50</td>
    </tr>
    <tr>
        <td colspan = 4><img src="img\kale.jpg"  width="150" alt="" border=3><br>
        Kale Smoothie</td>
        <td colspan = 4>$6.00</td>
    </tr>
</table>';
}        
?>
        <!--Dispaly the login modal (modal adapted from https://codepen.io/zeinab92/pen/xwWGWM)-->
<div align="center"><label class="viewOpen" for="modal-state">View Hours</label></div>
  <input type="checkbox" name="modal-state" id="modal-state">
  <div class="modal-overlay">
    <label for="modal-state" class="modal-overlay-close"></label>
    <div class="modal">
      <label class="button-close" for="modal-state"><i class="fa fa-times"></i></label>
      <h2>We're Open At These Times</h2>
      <div id="Wednesday" class="dateTime">
        <div class="day">Wednesday</div>
        <div class="time">4pm - 12am</div>
      </div>
      <br>
      <div id="Thursday" class="dateTime">
        <div class="day">Thursday</div>
        <div class="time">4pm - 12am</div>
      </div>
      <br>
      <div id="Friday" class="dateTime">
        <div class="day">Friday</div>
        <div class="time">4pm - 12am</div>
      </div>
      <br>
      <div id="Saturday" class="dateTime">
        <div class="day">Saturday</div>
        <div class="time">1pm - 12am</div>
      </div>
      <br>
      <div id="Sunday" class="dateTime">
        <div class="day">Sunday</div>
        <div class="time">1pm - 12am</div>
      </div>
      <br>
      <div id="Monday" class="dateTime">
        <div class="day">Monday</div>
        <div class="time">Closed</div>
      </div>
      <br>
      <div id="Tuesday" class="dateTime">
        <div class="day">Tuesday</div>
        <div class="time">Closed</div>
      </div>
    </div>
  </div>
<!--Navigate back to Home Page  -->
<a href="index.php">Back to Home Page</a>
    </body>
</html>