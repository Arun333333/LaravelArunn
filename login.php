<?php
session_start();
require_once "connection.php";
//include('loginf.php');

function ExtendedAddslash(&$params)
{
        foreach ($params as &$var) {
            // check if $var is an array. If yes, it will start another ExtendedAddslash() function to loop to each key inside.
            is_array($var) ? ExtendedAddslash($var) : $var=addslashes($var);
        }
}
 ExtendedAddslash($_POST);









$some = $_SESSION['username'];

//$query = "SELECT * FROM `users` WHERE `username` =  ".$some;
$query="SELECT * FROM 'users' WHERE 'username' ='{$_SESSION['username']}'";
$sqlsearch = mysqli_query($link,$query);
//$resultcount = mysqli_num_rows($sqlsearch);
//$note = $_POST['note'] ;
//if ($resultcount > 0) {
 $note = $_POST['note'] ;
    mysqli_query("UPDATE 'notes' SET
                                'note' = '$note',
                                'username' = '{$_SESSION['username']}'
                                
                                    
                             ")

//     or die(mysql_error())

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>

</head>
<body>
<form action="notemake1.php">
  <label for="fname">Notes</label><br>
  <input type="text" id="fname" name="note" value="some"><br>
  <label for="lname">Username:</label><br>
  <input type="text" id="lname" name="lname" value="<?php echo $_SESSION['username'] ;?>"><br>
  <input type="submit" value="Submit">
</form>
    </body>
</html>
