<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="css/register.css">
    <script src="js/register.js"></script>
    </head>
<body>
    <div class="register">
    <form onsubmit="return checkForm(this);">
    <p>Username: <input type="text" name="username" required></p>
    <p>Student/Staff ID: <input type="text" name="id" required></p>
    <p>Email: <input type="text" name="email" required></p>
    <p>Mobile: <input type="text" name="mobile" required></p>
    <p>Credit Card: <input type="text" name="creditcard" required></p>
    <p>Password: <input type="password" name="pwd1" required></p>
    <p>Confirm Password: <input type="password" name="pwd2" required></p>
    <p><input type="submit"></p>
    </form>
    </div>

    <!--Navigate back to Home Page  -->
    <a href="index.php">Back to Home Page</a>
</body>
</html>