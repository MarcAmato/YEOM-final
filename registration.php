<!DOCTYPE html>
<html>

    
<head>
<link rel="stylesheet" type="text/css" href="css/login.css">
<script type="text/javascript" src="js/passtest.js"></script>
    <style>
</style>
    

    
</head>
<body>

<form action="/action_page.php" style="border:1px solid #ccc">
  <div class="container">
    <h1>Registration</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" required>
    <label for="id"><b>Student/Staff ID</b></label>
    <input type="text" placeholder="Enter ID" name="id" required>
    <label for="email"><b>E-mail</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>
    <label for="mobile"><b>Mobile Number</b></label>
    <input type="text" placeholder="Enter Mobile Number" name="mobile" required>
    <label for="name"><b>Credit Card Number</b></label>
    <input type="text" placeholder="Enter Credit Card Number" name="credit" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" id="password" placeholder="Enter Password" 
           minlength="6" maxlength="12" name="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
<!--      Regex adapted from http://www.one2one.net.au (Tim Pietzcker)-->
    <input type="password" id="password_confirm" placeholder="Repeat Password" 
           pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[~!#$]).{6,12}" name="psw-repeat" 
           title="Must contain at least one number and one uppercase and lowercase letter, and between 6 and 12 characters" onkeyup="checkPass(); return false;" required>
    <div class="clearfix">
        <span id="confirmMessage" class="confirmMessage"></span>
        <br>
      <button type="button" class="cancelbtn">Cancel</button>
      <button id="signup" type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>

<!--Navigate back to Home Page  -->
<a href="index.php">Back to Home Page</a>
</body>
</html>
