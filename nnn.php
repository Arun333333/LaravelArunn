<?php
// your existin<?php 
session_start();
$pp="";
$some = $_SESSION["username"];
//echo "Welcome  ".$some."  Start taking notes";

if(isset($_POST["submit"])){
    $current_data = file_get_contents('database.json'); 
    $array_data = json_decode($current_data, true);
    
    foreach ($array_data as $key => $value) {
    if ($value['name'] == $some) {
//        $array_data[$key]['notes'] = $_POST["notes"];
//         array_push($array_data[$key]['notes'], $_POST["notes"]);
        $array_data[$key]['notes']="";
        $array_data[$key]['notes'].=$_POST["notes"];
        
    }
}
    file_put_contents('database.json', json_encode($array_data));
    
    if(isset($_POST["notes"])){
        $_SESSION["notes"] = $_POST["notes"];
    }
        header("Content-Type:text/html");
header("Loaction:page1.html");
}

    $current_data = file_get_contents('database.json'); 
    $array_data = json_decode($current_data, true);
    
    foreach ($array_data as $key => $value) {
    if ($value['name'] == $some) {
//        $array_data[$key]['notes'] = $_POST["notes"];
//         array_push($array_data[$key]['notes'], $_POST["notes"]);
        
        echo $array_data[$key]['notes'];
     $pp=$array_data[$key]['notes'];
        $data["notes"]=$pp;
        
      
}
//        header("Content-Type:text/html");
//header("Loaction:page1.html");
    }
// header("Location: page1.html");
//include("page1.html");


?>



 

?>
$(document).ready(function() {
    <?= ( isset($_POST['submit']) ? '$(".y").show();' : '' ); ?>

    
      $('.y').toggle("slide");
    
  });
<?php
 
//session_start();
$pp="";
$some = $_SESSION["username"];
//echo "Welcome  ".$some."  Start taking notes";

if(isset($_POST["submit"])){
    $current_data = file_get_contents('database.json'); 
    $array_data = json_decode($current_data, true);
    
    foreach ($array_data as $key => $value) {
    if ($value['name'] == $some) {
//        $array_data[$key]['notes'] = $_POST["notes"];
//         array_push($array_data[$key]['notes'], $_POST["notes"]);
        $array_data[$key]['notes']="";
        $array_data[$key]['notes'].=$_POST["notes"];
        
    }
}
    file_put_contents('database.json', json_encode($array_data));
    
    if(isset($_POST["notes"])){
        $_SESSION["notes"] = $_POST["notes"];
    }
        header("Content-Type:text/html");
header("Loaction:page1.html");
}

    $current_data = file_get_contents('database.json'); 
    $array_data = json_decode($current_data, true);
    
    foreach ($array_data as $key => $value) {
    if ($value['name'] == $some) {
//        $array_data[$key]['notes'] = $_POST["notes"];
//         array_push($array_data[$key]['notes'], $_POST["notes"]);
        
        echo $array_data[$key]['notes'];
     $pp=$array_data[$key]['notes'];
        $data["notes"]=$pp;
        
      
}
//        header("Content-Type:text/html");
//header("Loaction:page1.html");
    }
// header("Location: page1.html");
//include("page1.html");






 

// your existing code...
?>