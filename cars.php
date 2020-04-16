<?php 



$d = mysqli_connect('127.0.0.1', 'root', 'root') or 
	die(mysqli_connect_error());

mysqli_select_db($d, 'cars') or die(mysqli_error($d));

$q = "

CREATE TABLE IF NOT EXISTS cars(
model INT NOT NULL PRIMARY KEY ,
make VARCHAR(9) NOT NULL ,
year DATE NOT NULL,
price INT NOT NULL,

)
";

mysqli_query($d, $q) or die(mysqli_error($d));


$q2 = "
INSERT INTO cars(
model, make, year, price)VALUES(
'12', 'Hyundai', '1975-12-25', '123'
)";

//mysqli_query($d, $q2) or die(mysqli_error($d));


$q3 = "SELECT model, make, year, price FROM cars";
$result = mysqli_query($d, $q3) or die(mysqli_error($d));

while($row = mysqli_fetch_assoc($result))
{
	foreach($row as $key=>$value)
	{
		echo "$key is $value\n<br>";
	}
}




