<!DOCTYPE html>
<html>
<head>
<title>Table MySQL</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>

<body>
<table>
    <tr>
        <th>number</th>
        <th>Make</th>
        <th>Model</th>
        <th>Year</th>
        <th>Price</th>
    </tr>
    <?php
        $conn = mysqli_connect('127.0.0.1', 'root', 'root',"cars");
        if($conn->connect_error){
            die("Connection fail:".$conn->connect_error);
        
        }
        $sql="SELECT car_id, make,model, year, price from cars";
        $result = $conn->query($sql);

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                echo "<tr><td>".$row["car_id"]."</td><td>".$row["make"]."</td><td>".$row["model"].
                "</td><td>".$row['year']."</td><td>".$row['price']."</td></tr>";
            }
            echo"</table>";

        }
        else{
             echo "error";
        }
        $conn->close();
    ?>
</table>
</body>

</html>