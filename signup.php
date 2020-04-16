 <?php  

 $message = '';  
 $error = '';  
 if(isset($_POST["submit"]))  
 {  
$submit = True; 

     if ( '' != file_get_contents('database.json') )
{
              $current_data = file_get_contents('database.json'); 
              $array_data = json_decode($current_data, true);
     foreach($array_data as $item) { //foreach element in $arr
//    $uses = $item['var1']; //etc
         if($item['name']==$_POST["username"]){
         $error = "<label class='text-danger'>Username Exists</label>"; 
             $submit = False;
         }
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
      else if(empty($_POST["confirmpassword"]))  
      {  
           $error = "<label class='text-danger'>Enter Password again</label>";  
      }  
     else if ($_POST["password"]!=$_POST["confirmpassword"]){
         $error = "<label class='text-danger'>Passwords do not match try again</label>";
     }

      else  
      {  
           if(file_exists('database.json')&& $submit==True)  
           {  
                $current_data = file_get_contents('database.json');  
                $array_data = json_decode($current_data, true);
              
                $password_hash = password_hash($_POST["password"], PASSWORD_BCRYPT);
                $extra = array(  
                     'name'               =>     $_POST['username'],  
                     'password'          =>     $password_hash,  
                     
                    'notes'     =>    "",
                    'to do list'=>"",
                    'images'=>"",
                    'links'=>""
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('database.json', $final_data))  
                {  
                     $message = "<label class='text-success'>User Added</p>";
                    header("Location: log.php");
                }  
           }  
           else  
           {  
           $error = "<label class='text-danger'>This Username already  Exists choose another one </label>"; 
           }  
      }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>signup</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br />  
           <div class="container" style="width:500px;">  
                <h3 align="">Welcome to Notetaker Pro </h3><br />                 
                <form method="post"  >  
                     <?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     ?>  
                     <br />  
                     <label>UserName</label>  
                     <input type="text" name="username" class="form-control" /><br />  
                     <label>Password</label>  
                     <input type="password" name="password" class="form-control" /><br />  
                     <label>Confirm Passowrd</label>  
                     <input type="password" name="confirmpassword" class="form-control" /><br />  
                     <input type="submit" name="submit" value="Sign up" class="btn btn-info" /><br /> 
                    <p>OR</p>
                    <a href="log.php">Log in</a>
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