<?php 

/*
find host
find database
find table
find row
find column
*/

$d = mysqli_connect('127.0.0.1', 'root', 'password') or 
	die(mysqli_connect_error());

mysqli_select_db($d, 'school') or die(mysqli_error($d));

$q = "

CREATE TABLE IF NOT EXISTS students(
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
studentnumber CHAR(9) NOT NULL UNIQUE,
firstname VARCHAR(45) NOT NULL,
lastname VARCHAR(45) NOT NULL,
birthdate DATE NOT NULL,
emailaddress VARCHAR(200)
)
";

mysqli_query($d, $q) or die(mysqli_error($d));


$q2 = "
INSERT INTO students(
firstname, lastname, studentnumber, birthdate, emailaddress)VALUES(
'jason', 'harrison', 'a00999999', '1975-12-25', 'jason@harrison.com'
)";

//mysqli_query($d, $q2) or die(mysqli_error($d));


$q3 = "SELECT firstname, lastname, studentnumber, emailaddress, birthdate FROM students";
$result = mysqli_query($d, $q3) or die(mysqli_error($d));

while($row = mysqli_fetch_assoc($result))
{
	foreach($row as $key=>$value)
	{
		echo "$key is $value\n<br>";
	}
}




