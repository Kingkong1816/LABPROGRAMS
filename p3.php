<!DOCTYPE html> 
<html> 
<head> 
<title>String, Math and Date Methods</title> 
</head> 
<body> 
<h1><center>STRING, MATH AND DATE METHODS</center></h1> 
 
<form action="" method="get"> 
1. STRING FUNCTIONS<br> 
2. DATE FUNCTIONS<br> 
3. MATH FUNCTIONS<br><br> 
 
ENTER YOUR CHOICE:  
<input type="text" name="CHOICE"/><br><br> 
<input type="submit" name="visit" value="Show Result"/> 
</form> 
 
<hr> 
 
<?php 
if (isset($_GET["CHOICE"])) { 
    $n = $_GET["CHOICE"]; 
 
    switch ($n) { 
        // STRING FUNCTIONS 
        case 1: 
            echo "<h3>STRING FUNCTIONS</h3>"; 
            $String = " basic functiOn "; 
            echo "Uppercase: " . strtoupper($String) . "<br>"; 
            echo "First letter capital: " . ucfirst($String) . "<br>"; 
            echo "Reverse: " . strrev($String) . "<br>"; 
            echo "Trimmed: " . trim($String) . "<br>"; 
            echo "Left Trim: " . ltrim($String) . "<br>"; 
            echo "Lowercase: " . strtolower($String) . "<br>"; 
            echo "Repeated: " . str_repeat($String, 3) . "<br>"; 
            echo "Replace Example: " . str_replace("Basic", "Elementary", "Basic 
functions") . "<br>"; 
            break; 
 
        // DATE FUNCTIONS 
        case 2: 
            echo "<h3>DATE FUNCTIONS</h3>"; 
            date_default_timezone_set("Asia/Kolkata"); 
            echo "Current Day: " . date("d") . "<br>"; 
            echo "Current Month: " . date("m") . "<br>"; 
            echo "Current Year: " . date("Y") . "<br>"; 
            echo "Full Date & Time: " . date("Y-m-d H:i:s") . "<br>"; 
            break; 
 
        // MATH FUNCTIONS 
        case 3: 
            echo "<h3>MATH FUNCTIONS</h3>"; 
            $m1 = 95.5; 
            $m2 = 96.3; 
            $m3 = 90.65; 
            $m4 = 91.56; 
            $m5 = 85.6; 
            $p = -95.4; 
 
            echo "Floor Values:<br>"; 
            echo floor($m1) . "<br>"; 
            echo floor($m2) . "<br>"; 
            echo floor($m3) . "<br>"; 
            echo floor($m4) . "<br>"; 
            echo floor($m5) . "<br><br>"; 
 
            echo "Absolute Value of $p : " . abs($p) . "<br>"; 
            echo "Square Root of 49 : " . sqrt(49) . "<br>"; 
            echo "Random Number (1-100): " . rand(1,100) . "<br>"; 
            break; 
 
        default: 
            echo "<p style='color:red;'>Enter a valid choice (1, 2 or 3)</p>"; 
            break; 
    } 
} 
?> 
</body> 
</html>
