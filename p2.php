<!DOCTYPE html>
<html>
<head>
    <title>File Handling in PHP</title>
</head>
<body>
<marquee><b><h1>File Handling Methods</h1></b></marquee>

<form method="get">
    1. FILE CREATE <br>
    2. FILE READ <br>
    3. FILE APPEND <br>
    4. FILE COPY <br>
    5. FILE DELETE <br><br>
    ENTER YOUR CHOICE: <input type="text" name="CHOICE"/><br><br>
    <input type="submit" value="Submit"/><br>
</form>
<hr>

<?php
if (isset($_GET["CHOICE"]) && $_GET["CHOICE"] !== '') {
    $n = $_GET["CHOICE"];

    switch ($n) {
        case 1:
            echo "<h3>FILE CREATION</h3>";
            $var = fopen("sample1.txt", "w");
            $a = "hello php";
            fwrite($var, $a);
            fclose($var);
            echo "File created and data written.<br>";
            break;

        case 2:
            echo "<h3>FILE READ</h3>";
            if (file_exists("sample1.txt")) {
                $var = fopen("sample1.txt", 'r');
                $count = 1;
                while (!feof($var)) {
                    echo "[" . $count . "] " . fgets($var) . "<br>";
                    $count++;
                }
                fclose($var);
                echo "Total lines in the file: " . ($count - 1) . "<br>";
            } else {
                echo "File does not exist.<br>";
            }
            break;

        case 3:
            echo "<h3>FILE APPEND</h3>";
            $var = fopen("sample1.txt", 'a+');
            $txt = " HELLO PROGRAMMER";
            fwrite($var, $txt);
            fseek($var, 0);
            $f1 = fread($var, filesize('sample1.txt'));
            fclose($var);
            echo "Appended successfully. File contents:<br>";
            echo nl2br($f1) . "<br>";
            break;

        case 4:
            echo "<h3>FILE COPY</h3>";
            if (copy('sample1.txt', 'file_copy.txt')) {
                echo "File copied successfully as file_copy.txt<br>";
            } else {
                echo "File copy failed.<br>";
            }
            break;

        case 5:
            echo "<h3>FILE DELETE</h3>";
            if (file_exists("sample1.txt")) {
                if (unlink("sample1.txt")) {
                    echo "File deleted successfully.<br>";
                } else {
                    echo "File could not be deleted.<br>";
                }
            } else {
                echo "File does not exist.<br>";
            }
            break;

        default:
            echo "<h3 style='color:red;'>Enter a valid choice (1-5)</h3>";
    }
}
?>
</body>
</html>
