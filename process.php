<?php
echo "<h1>Backend Processor</h1>";

// Check for POST data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $u = $_POST['user'];
    echo "POST Method Received: <br>";
    echo "Username: " . htmlspecialchars($u);
} 

// Check for GET data
if (isset($_GET['query'])) {
    echo "GET Method Received: <br>";
    echo "Search Query: " . htmlspecialchars($_GET['query']);
}
?>
