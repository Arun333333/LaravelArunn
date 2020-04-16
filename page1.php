<?php 
session_start();
$pp="";
$some = $_SESSION["username"];
$file_tmp="";
$upload_location="";
$file_name="";
$up="uploads";
//echo "Welcome  ".$some."  Start taking notes";

if(isset($_POST["submit"])){
    echo "Pressed";
    
       if(isset($_FILES['image'])){
       echo"Success";
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
     $plpl=explode('.',$_FILES['image']['name']);
      $file_ext=strtolower(end($plpl));
           $upload_location="uploads/";
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,$upload_location.$file_name);
          echo $file_tmp;
//          echo $file_name;
          echo $upload_location;
         
      }else{
         print_r($errors);
      }
   }
    //making directory

//    $countfiles = count($_FILES['files']['name']);
//    $upload_location = "uploads/.$some";
//    if(isset($_FILES['userfile'])){
//    $upload_location = "uploads/";
//    $filename = $_FILES['userfile']['name'];
//    echo $filename;
//    
//    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $filename)) {
//        echo "File is valid, and was successfully uploaded.\n";
//    } else {
//        echo "Upload failed";
//    }
//    }
    
    
////    for($index = 0;$index < $countfiles;$index++){
//
//   // File name
//   $filename = $_FILES['somefiles']['name'];
//
//   // Get extension
//   $ext = pathinfo($filename, PATHINFO_EXTENSION);
//
//   // Valid image extension
//   $valid_ext = array("png","jpeg","jpg");
//
//   // Check extension
//   if(in_array($ext, $valid_ext)){
//
//     // File path
//     $path = $upload_location.$filename;
////     echo $path;
//     // Upload file
//     if(move_uploaded_file($_FILES['files']['tmp_name'],$path)){
//         $files_arr = $path;
//         echo "Shit";
//        
//         
//     }
//   }

//}
    
    
    
    
    
    
    
    $current_data = file_get_contents('database.json'); 
    $array_data = json_decode($current_data, true);
    
    foreach ($array_data as $key => $value) {
    if ($value['name'] == $some) {
//        $array_data[$key]['notes'] = $_POST["notes"];
//         array_push($array_data[$key]['notes'], $_POST["notes"]);

        $array_data[$key]['notes']="";
        $array_data[$key]['notes'].=$_POST["notes"];
        
        //checking if it is a link 
        $array_data[$key]['links']="";
        $array_data[$key]['links'].=$_POST["link1"];
        
        $array_data[$key]['images']="";
        $array_data[$key]['images'].=$upload_location.$file_name;
        
//        $array_data[$key]['images']="";
        
//        foreach ($files_arr as &$value) {
//    $value = $value * 2;
        
//        $array_data[$key]['images'].=$value;
//}
        
        
    }
}
    file_put_contents('database.json', json_encode($array_data));
    
    if(isset($_POST["notes"])){
        $_SESSION["notes"] = $_POST["notes"];
    }
//    header("Content-type:multipart/mixed");
  header("Content-type:image/png");
    
    header("Location:page1.html");
//    header("Content-Type:text/html");
//    header("Content-type:multipart/mixed");
        
}

    $current_data = file_get_contents('database.json'); 
    $array_data = json_decode($current_data, true);
//echo $current_data;
    
    foreach ($array_data as $key => $value) {
    if ($value['name'] == $some) {
//        $array_data[$key]['notes'] = $_POST["notes"];
//         array_push($array_data[$key]['notes'], $_POST["notes"]);
        
//        echo $array_data[$key]['notes'];
//        $link= $array_data[$key]['links'];
//        echo $link;
//        $myObj->notes = $array_data[$key]['notes'];
//        $myObj->link = $array_data[$key]['links'];
//
//
//$myJSON = json_encode($myObj);
//
//echo $myJSON;
        $data['note'] = $array_data[$key]['notes'];
        
        $data['link'] = $array_data[$key]['links'];
        
        $data['im'] = $array_data[$key]['images'];
        $data['shit'] = "Shit";
        
           

        echo json_encode($data);
//        $all = array($array_data[$key]['notes'], $array_data[$key]['links']);
//        echo $all;
//        $a = array ('a' => 'apple', 'b' => 'banana');
//        $b=json_encode($a);
//        echo $b;
//  $object =  {
//    'notes' => $array_data[$key]['notes'],
//    'links' => $array_data[$key]['links'],
//  };
//        $obj = new stdClass();
//
//$obj->data = array(
//    array('notes',$array_data[$key]['notes']),
//    array('links',$array_data[$key]['links']),
//    //and so on...
//);
//
//echo json_encode($obj['notes']);
//        echo $object;
//        console.log($object);
//        $enc=json_encode($link);
        
//        echo $array_data[$key][$value];

//     $pp=$array_data[$key]['notes'];
//        $data["notes"]=$pp;
        
      
}
//        header("Content-Type:text/html");
//header("Loaction:page1.html");
    }

// header("Location: page1.html");
//include("page1.html");


?>


 
