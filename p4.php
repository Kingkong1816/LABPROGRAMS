<html>
<head>
<title>PHP Required Field Validator</title>
</head>
<body>
<h1><b><marquee>PHP PROGRAM FOR REQUIRED FIELD VALIDATOR</marquee></b></h1>

<?php
// Initialize variables
$name = $email = $password = "";
$nameerr = $emailerr = $passworderr = "";

// Function to sanitize input
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Name validation
    if (empty($_POST["name"])) {
        $nameerr = "Name is required";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $_POST["name"])) {
        $nameerr = "Only letters and white space allowed";
    } else {
        $name = test_input($_POST["name"]);
    }

    // Email validation
    if (empty($_POST["email"])) {
        $emailerr = "Email is required";
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $emailerr = "Invalid email format";
    } else {
        $email = test_input($_POST["email"]);
    }

    // Password validation
    if (empty($_POST["password"])) {
        $passworderr = "Password is required";
    } elseif (!preg_match("/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$/", $_POST["password"])) {
        $passworderr = "Password must be at least 6 chars long and contain letters and numbers";
    } else {
        $password = test_input($_POST["password"]);
    }
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    NAME: <input type="text" name="name" value="<?php echo $name; ?>">
    <span class="error"><font color="red"><?php echo $nameerr; ?></font></span><br><br>

    EMAIL: <input type="text" name="email" value="<?php echo $email; ?>">
    <span class="error"><font color="red"><?php echo $emailerr; ?></font></span><br><br>

    PASSWORD: <input type="password" name="password" value="<?php echo $password; ?>">
    <span class="error"><font color="red"><?php echo $passworderr; ?></font></span><br><br>

    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && !$nameerr && !$emailerr && !$passworderr) {
    echo "<h3>Form Submitted Successfully!</h3>";
    echo "Name: $name<br>";
    echo "Email: $email<br>";
    echo "Password: $password<br>";
}
?>

</body>
</html>
