<!DOCTYPE html>
<html>
<head>
    <title>Looping & Conditional Statement</title>
</head>
<body>
<marquee><b><h1>LOOPING & CONDITIONAL STATEMENT</h1></b></marquee>

<form method="get">
    1. Armstrong number<br>
    2. Sum of digits<br>
    3. Display triangle<br><br>
    Enter your choice: <input type="text" name="choice"/><br><br>
    <input type="submit" value="Submit"/><br>
</form>
<hr>

<?php
if (isset($_GET["choice"]) && $_GET["choice"] !== '') {
    $n = $_GET["choice"];

    switch ($n) {
        case 1:
            echo strtoupper("<b><i>Armstrong number</i></b><br>");
            $num = 153;   // test number
            $total = 0;
            $x = $num;

            while ($num != 0) {
                $rem = $num % 10;
                $total = $total + ($rem * $rem * $rem);
                $num = intdiv($num, 10);  // integer division
            }

            if ($x == $total) {
                echo "$x is an Armstrong number";
            } else {
                echo "$x is not an Armstrong number";
            }
            break;

        case 2:
            echo strtoupper("<b><i>Sum of digits</i></b><br>");
            $num = 163;   // test number
            $sum = 0;

            $x = $num;
            while ($num > 0) {
                $rem = $num % 10;
                $sum = $sum + $rem;
                $num = intdiv($num, 10);
            }

            echo "Sum of digits of $x = $sum";
            break;

        case 3:
            echo strtoupper("<b><i>Triangle</i></b><br>");
            for ($i = 1; $i <= 5; $i++) {
                for ($j = 1; $j <= $i; $j++) {
                    echo "*";
                }
                echo "<br>";
            }
            break;

        default:
            echo "<span style='color:red'>Please enter valid choice (1-3)</span>";
    }
}
?>
</body>
</html>
