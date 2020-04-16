 <?php  
session_start();

 $message = '';  
 $error = '';
$submit = True;
 if(isset($_POST["submit"])){
     
     
          if(isset($_POST["username"])){
         $_SESSION["username"] = $_POST["username"];
         
     }
     
              $current_data = file_get_contents('database.json'); 
              $array_data = json_decode($current_data, true);
     foreach($array_data as $item) { //foreach element in $arr
//    $uses = $item['var1']; //etc
         if($item['name']==$_POST["username"]){
         $submit = true; 
         echo "Signin success";
             header("Location: page1.html");
         }
}
           if(empty($_POST["username"]))  
      {  
           $error = "<label class='text-danger'>Enter User Name</label>";  
      }  
      else if(empty($_POST["password"]))  
      {  
           $error = "<label class='text-danger'>Enter Password</label>";  
      }  
     else{
         
         echo "unknown error occured";
     }
     if(isset($_POST["username"])){
         $_SESSION["username"] = $_POST["username"];
         
     }
     
 }
?>
<!DOCTYPE html>  
 <html>  
      <head>  
           <title>Login</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br />  
           <div class="container" style="width:500px;">  
                <h3 align="">Login to use NoteTaker pro </h3><br />                 
                <form method="post" >  
                     <?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     ?>  
                     <br />  
                     <label>UserName</label>  
                     <input type="text"  name="username" class="form-control" required/><br />  
                     <label>Password</label>  
                     <input type="password" name="password" class="form-control" required /><br />  
                        
                     <input type="submit" name="submit" value="Sign up" class="btn btn-info" /><br />  
                    <p>Don't Have a account.   <a href="signup.php">Sign Up</a></p>
                    
                     <?php  
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?>  
                </form>  
           </div>  
           <br />  
      </body>  
 </html> 
