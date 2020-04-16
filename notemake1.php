<?php
session_start();
require_once "connection.php";
include('loginf.php');

function ExtendedAddslash(&$params)
{
        foreach ($params as &$var) {
            // check if $var is an array. If yes, it will start another ExtendedAddslash() function to loop to each key inside.
            is_array($var) ? ExtendedAddslash($var) : $var=addslashes($var);
        }
}
 ExtendedAddslash($_POST);


$note = $_POST['note'] ;

$query = "SELECT * FROM `users` WHERE `username` = ' $_SESSION['login_user']'";
$sqlsearch = mysql_query($query);
$resultcount = mysql_numrows($sqlsearch);

if ($resultcount > 0) {
 
    mysql_query("UPDATE `notes` SET
                                `note` = '$note',
                                `same_user` = '$_SESSION['login_user']',
                                    
                             ")
     or die(mysql_error())
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
  <input type="text" id="fname" name="fname" value="<?php echo $note;><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value=value="<?php echo $_SESSION['login_user'] ;><br><br>
  <input type="submit" value="Submit">
</form>
    </body>
</html>
