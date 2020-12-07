<?php
   //Initialisating datas.
   $email = $_POST["emailField"];
   $title = $_POST["titleField"];
   $firstName = $_POST["nameField"];
   $lastName = $_POST["lastNameField"];
   $dob = $_POST["dobField"];
   $number = $_POST["numberField"];
   $fileF = $_POST["inputFile"];
   $message = $_POST["messageField"];
   
   //Initialisating the validation variable
   $valid = true;
   
   //Validating email address
   if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
     echo "Email $email is not valid";
     $valid = false;
   } 
   
   //Checking name for any invalid characters
   else if(!preg_match ("/^[a-zA-z]*$/", $firstName) && !preg_match ("/^[a-zA-z]*$/", $lastName)) {
     echo "Name should only contain alphabets";
     $valid = false;
   }
   
   //Checking telephone number for invalid characters
   else if (!preg_match ("/^[0-9]*$/", $number) ) {  
     echo "Only numeric value is allowed in telephone number";  
     $valid = false;
   }
   
   //Checking the length of the telephone number
   else if (strlen ($number) != 10) {  
     echo "Mobile number must contain only 10 digits.";  
     $valid = false;
   }
   
   //Displaying the thank you message if all data
   //is valid
   if($valid) {
     echo "<pre>Thank You $title $firstName $lastName <br>";
     echo "<h3>You have submitted the following detail: </h3><br>";
     echo "Date of Birth:     $dob <br>";
     echo "Telephone number:  $number <br>";
     echo "File Uploaded:     $fileF <br>";
     echo "Message:           $message <br></pre>";
   }
 ?>