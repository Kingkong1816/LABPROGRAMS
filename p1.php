<html> 
<body> 
<h1>Looping & Conditional Statements</h1> 
 
<form method="get"> 
1. Armstrong Number<br> 
2. Sum of Digits<br> 
3. Triangle<br> 
Enter choice: <input type="text" name="choice"/> 
<input type="submit" value="Submit"><br> 
</form> 
 
<?php 
if(isset($_GET['choice'])){ 
    $choice = $_GET['choice']; 
 
    if($choice == 1){ 
        echo "Armstrong Number<br>"; 
        $num = 153; 
        $sum = 0; 
        $temp = $num; 
        while($temp > 0){ 
            $rem = $temp % 10; 
            $sum += $rem * $rem * $rem; 
            $temp = intval($temp / 10); 
        } 
        if($sum == $num){ 
            echo "$num is an Armstrong number"; 
        } else { 
            echo "$num is not an Armstrong number"; 
        } 
 
    } elseif($choice == 2){ 
        echo "Sum of Digits<br>"; 
        $num = 16; 
        $sum = 0; 
        $temp = $num; 
        while($temp > 0){ 
            $rem = $temp % 10; 
            $sum += $rem; 
            $temp = intval($temp / 10); 
        } 
        echo "Sum of digits of $num = $sum"; 
 
    } elseif($choice == 3){ 
        echo "Triangle<br>"; 
        for($i = 1; $i <= 5; $i++){ 
            for($j = 1; $j <= $i; $j++){ 
                echo "*"; 
            } 
            echo "<br>"; 
        } 
 
    } else { 
        echo "Enter a correct choice (1-3)"; 
    } 
} 
?> 
</body> 
</html> 
