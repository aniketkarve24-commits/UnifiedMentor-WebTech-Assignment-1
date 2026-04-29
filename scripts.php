<?php
echo "<h2>PHP Scripting Tasks</h2>";

// 1. Variables & Data Types
$name = "Aniket"; 
$status = "Learning";
echo "User: $name is $status <br>";

// 2. Conditional (If-Else)
$hour = date("H");
if ($hour < 12) { echo "Good Morning!<br>"; } else { echo "Good Day!<br>"; }

// 3. For Loop (1 to 5)
echo "Looping: ";
for($i=1; $i<=5; $i++) { echo $i . " "; }

// 4. Function
function greet($user) {
    return "<br>Hello from " . $user;
}
echo greet("Aniket's Function");

// 5. Array
$tools = array("Nmap", "Burp", "Wireshark");
echo "<br>Tool: " . $tools[1];
?>
