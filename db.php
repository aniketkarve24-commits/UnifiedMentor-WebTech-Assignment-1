<?php
// 1. Error reporting enable karna (Debugging ke liye)
ini_set('display_errors', 1);
error_reporting(E_ALL);

// 2. Database details (Humne naya user 'aniket' banaya tha)
$servername = "localhost";
$username = "aniket";      // Naya user jo humne terminal mein banaya
$password = "pass123";     // Naya password jo humne set kiya
$dbname = "my_db";

// 3. Connection create karna
$conn = new mysqli($servername, $username, $password, $dbname);

// 4. Connection check karna
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "<h2>Database Connected Successfully!</h2>";

// 5. Data fetch karna (SQL Query)
$sql = "SELECT id, name FROM students";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    echo "<b>Student List:</b><br><br>";
    // Table format mein data dikhana
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Name: " . $row["name"]. "<br>";
    }
} else {
    echo "No data found or Query Error: " . $conn->error;
}

// 6. Connection close karna
$conn->close();
?>
