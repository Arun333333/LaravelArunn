<?php

$servername = "127.0.0.1";
$username = "root";
$pass = "root";
$dbname = "cars";

// Create connection
$link = new mysqli($servername, $username, $pass, $dbname);
// Check connection
if ($link->connect_error) {
die("Connection failed: " . $link->connect_error);
} 
echo "<table>";
$sql = "SELECT car_id, make, model,year,price FROM cars ";
$result = $link->query($sql);

if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
	
                echo "<tr><th>Car_id</th><th>Make</th><th>Model</th><th>Year</th><th>Price</th></tr>"."<tr><td>".$row["car_id"]."</td><td>".$row["make"]."</td><td>".$row["model"].
                "</td><td>".$row['year']."</td><td>".$row['price']."</td></tr>";
}
} else {
echo "0 results";
}

echo "</table>";
$link->close();
?>