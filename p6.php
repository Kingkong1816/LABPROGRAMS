<?php 
if (isset($_POST['username']) && isset($_POST['password'])) { 
    $user = $_POST['username']; 
    $pass = $_POST['password']; 
 
    if ($user == "admin" && $pass == "1234") { 
        echo "<center><h2>Welcome, $user!</h2></center>"; 
        echo "<center><p>This is your profile page.</center></p>"; 
        echo "<center><p>DEPARTMENT OF CS WITH DA</p></center>"; 
        echo '<img 
src="https://d1h684srpghjti.cloudfront.net/assets/images/gallary_photos/t16848375
 71_iDJvTF8Jv.jpg?w=800&format=webp" width=100%>'; 
        echo "<br><br><a href='pro6.php'>Logout</a>"; 
        exit(); 
    } else { 
        echo "<p style='color:red;'>Invalid username or password!</p>"; 
    } 
} 
?> 
<!DOCTYPE html> 
<html> 
<head> 
<title>Login Page</title> 
</head> 
<body style="text-align:center; font-family:Arial;"> 
<h2>Login Form</h2> 
<img src="https://ecampus.psgtech.ac.in/Images/PSG.png" alt="College Logo" 
width="150"><br><br> 
 
<form method="post"> 
    <input type="text" name="username" placeholder="Enter Username" 
required><br><br> 
    <input type="password" name="password" placeholder="Enter Password" 
required><br><br> 
    <input type="submit" value="Login"> 
</form> 
 
</body> 
</html>
