<?php
if(isset($_POST['firstname']) && isset($_POST['lastname'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    echo 'Full Name:'.' '. $firstname .' '. $lastname;
    echo "</br>";
}
if(isset($_POST['email'])) {
    $email = $_POST['email'];
    
    echo 'Email Address:'.' '. $email;
    echo "<br>";
}
if(isset($_POST['phonenumber'])) {
    $phonenumber = $_POST['phonenumber'];
    
    echo 'Phone Number:'.' '. $phonenumber;
    echo "<br>";
}
if(isset($_POST['program'])) {
    $program = $_POST['program'];
    
    echo 'Program:'.' '. $program;
    echo "<br>";
}





?>


<!DOCTYPE html>
<html>
<head>
     <meta lang = 'en'>
     <title>Form Handling</title>
     <meta charset = 'utf-8'>
     <h1>Registration for Side Hustle Program</h1>
 </head>
 <body>
 <form action = 'sidehustle.php' method = 'POST'>
 <label for = 'firstname' value = 'First Name'>First Name</label></br>
 <input type = 'text' name = 'firstname' placeholder = 'Enter first name'/></br></br>
 <label for = 'lastname' value = 'Last Name'>Last Name</label></br>
 <input type = 'text' name = 'lastname' placeholder = 'Enter last name'/></br><br>
 <label for = 'email' value = 'Email'>Email Address</label></br>
 <input type = 'email' name = 'email' placeholder = 'Enter email address'/></br><br>
 <label for = 'number' value = 'Phonenumber'>Phone Number</label></br>
 <input type = 'number' name = 'phonenumber' placeholder = 'Enter phone number'/></br><br>
 <label for="inputState">Program</label><br>
        <select name="program" id="inputState"><br><br>
          <option selected>Choose...</option><br>
          <option value="backenddevelopment">Backend Development</option>
          <option value="frontend_development">Frontend Development</option>
          <option value="mobile_apllication_development">Mobile Application Development</option>
</form><br>
<form>
<input type = 'submit' name = 'submit' value ='SUBMIT'/>       
</form>
</body>
</html>
