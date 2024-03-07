<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>

   <style>
      .error {
         color: red;
      }
   </style>
</head>

<body>


   <?php

   $nameerror = $mailerror = $gendererror = $weberror = "";

   $name = $gender = $comment = $website = $email = "";

   if ($_SERVER["REQUEST_METHOD"] == "POST") {

      if (empty($_POST["name"])) {
         $nameerror = "Name is required";
      } else {
         $name = test_input($_POST['name']);

         if(!preg_match("/^[a-zA-Z ]*$/",$name)){
            $nameerror = "Only letters and white space allowed in Name.";  
         } 
      }

      if (empty($_POST['gender'])) {
         $gendererror = 'Gender is required';
      } else {
         $gender = test_input($_POST['gender']);

         
      }
      if (empty($_POST['email'])) {
         $mailerror = 'Email not provided';
      } else {
         $email = test_input($_POST['email']);

         if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $mailerror = 'Invalid email format';      
         }
      }
      
      $comment = test_input($_POST['comment']);

      if (empty($_POST['website'])) {
         $weberror = 'website is required';
      } else {
         $website = test_input($_POST['website']);
         
if(!preg_match("(https://)", $website)){
   $weberror = "Please enter a valid URL"; 


}


      }





   }


   function test_input($data)
   {

      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
   }

   ?>



   <h1>User Details</h1>
   <span class="error">* required field</span>
   <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

      Name : <input type="text" name="name" value="<?php echo $name; ?>">
      <span class="error">*
         <?php echo $nameerror; ?>
      </span>
      <br><br>
      Email: <input type="text" name="email" value="<?php echo $email; ?>">
      <span class="error">*
         <?php echo $mailerror; ?>
      </span><br>

      Website: <input type="text" name="website" value="<?php echo $website ?> " >
      <span class="error">*
         <?php echo $weberror; ?>
      </span>
      <br><br>
      Comment: <textarea type="text" name="comment" rows="5" cols="40" > <?php echo $comment ?> </textarea><br>

      Gender <br> 
      <input type="radio" name="gender"
<?php if (isset($gender) && $gender=="female") echo "checked";?>
value="female">Female
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="male") echo "checked";?>
value="male">Male
     

      <br><br>
      <input type="submit" name="submit" value="submit">



   </form>


   <?php

   echo "<h2>Your Input : </h2>";
   echo $name . "<br>";
   echo $email . "<br>";
   echo $website . "<br>";
   echo $gender . "<br>";
   echo $comment . "<br>";


   ?>



</body>

</html>