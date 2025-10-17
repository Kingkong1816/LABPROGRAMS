<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Find Student Details</title>
</head>
<body>
    <h2>Search Student</h2>
    <!-- Step 2: Input form -->
    <form method="post" action="">
        Enter Student ID: <input type="number" name="Roll No" required>
        <input type="submit" value="Search">
    </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['Roll No'];
    $sql = "SELECT * FROM ca marks WHERE id = $id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<h3>Student Details</h3>";
        while ($row = $result->fetch_assoc()) {
            echo "Roll No: " . $row["Roll No"] . "<br>";
            echo "Name: " . $row["name"] . "<br>";
        }
    } else {
        echo "<p style='color:red;'>No student found with ID: $id</p>";
    }
}
$conn->close();
?>
</body>
</html>
