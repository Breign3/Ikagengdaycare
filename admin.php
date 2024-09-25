<?php
$servername = "localhost";
$username = "root";
$password = "yourpassword";
$dbname = "ikagengdaycare";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM applications";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Child Name</th><th>Age</th><th>Parent Name</th><th>Contact</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["child_name"]. "</td><td>" . $row["age"]. "</td><td>" . $row["parent_name"]. "</td><td>" . $row["contact"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
