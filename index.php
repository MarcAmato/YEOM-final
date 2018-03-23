<?php
// Try one more PHP script...
if(isset($_POST['username'],$_POST['password'])) {
    
    // Start the session
    session_start();
    // Obtain login details
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];   
} else {
    $_SESSION['loggedin'] = false;   
}
?>

<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="css/index.css">
    </head>
    <body>
       
        <div align="center"><h1>Y.E.O.M (Your Excellent On-time Meals) Pty Ltd<h1>
<!--            Image sourced from: http://freeflaticons.com/shopping-flat-icons/ontime-truck-ontime-delivery-truck-flat-icons-->
            <img src="img/time.png" alt="Always on time!"></div>


       
<!--       Links to each cafe menu-->
<div align="center">
<h4>Links to our cafe menu's</h4>           
<a href="lazenbys.php">Lazenbys</a>
<a href="theref.php">The Ref</a>
<a href="tradetable.php">The Trade Table</a>
<?php
    session_start();
    if ($_SESSION['loggedin']) {
        echo '<a href="master.php">Master Food and Beverage List</a>';        
    }

?>
</div>
            
<br><br>
      
  



           <!--       HTML for the login form-->
        <form name="login" action="" method="post">
            Username:  <input type="text" name="username" value="" /><br />
            Password:  <input type="password" name="password" value="" /><br />
            <input type="submit" name="login" value="Login" />
            
            <?php if($_SESSION['username']): ?>
            <p>You are logged in as <?php echo $_SESSION['username'];?></p>            
<!--            Not sure how the logout works!-->
            <a href="logout.php">Logout</a>
            <?php 
            endif; 
            ?>
        </form>
<!--Link to Registration page        -->
<a href="register.php">Register Here</a><br><br>       

    </body>
</html>