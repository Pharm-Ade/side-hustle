<?php
if(isset($_COOKIE["type"]))
{
 header("location:index.php");
}

$message = '';

if(isset($_POST["login"]))
{
 if(empty($_POST["username"]) || empty($_POST["password"]))
 {
  $message = "<div class='alert alert-danger'>Both Fields are required</div>";
 }
 else
 {
  $query = "
  SELECT * FROM user_details 
  WHERE username = :username
  ";
  $statement = $connect->prepare($query);
  $statement->execute(
   array(
    'username' => $_POST["username"]
   )
  );
  $count = $statement->rowCount();
  if($count > 0)
  {
   $result = $statement->fetchAll();
   foreach($result as $row)
   {
    if(password_verify($_POST["password"], $row["password"]))
    {
     setcookie("type", $row["user_type"], time()+3600);
     header("location:index.php");
    }
    else
    {
     $message = '<div class="alert alert-danger">Wrong Password</div>';
    }
   }
  }
  else
  {
   $message = "<div class='alert alert-danger'>Wrong Username</div>";
  }
 }
}


?>


<!DOCTYPE html>
<html>
<head>
     <meta lang = 'en'>
     <title>Form Handling</title>
     <meta charset = 'utf-8'>
     <h1>Login to Side Hustle Program</h1>
 </head>
 <body>
 <form action = 'sidehustle.php' method = 'POST'>
 <label for = 'username' value = 'username'>Username</label></br>
 <input type = 'text' name = 'username' placeholder = 'Enter your username'/></br></br>
 <label for = 'password' value = 'password'>Password</label></br>
 <input type = 'password' name = 'password' placeholder = 'Enter your paasword'/></br><br>
<label for = 'password' name = 'password' >Confirm Password</label></br>
<input type = 'password' name = 'confirmPassword' placeholder = 'Confirm your password'/></br><br>
<form>
<input type = 'submit' name = 'submit' value ='SUBMIT'/>
<input type = 'submit' name = 'reset'   value = 'Reset'/>  
</form>
</body>
</html>
