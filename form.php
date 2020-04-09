<?php
  include("connection.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Insert Data</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- bootstrap css -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- custom css -->
    <link rel="stylesheet" type="text/css"  href="css/main.css" />
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-4"></div>
       <div class="col-lg-4 form-container">
         <h4 class="text-center">CA form</h4>
          <form method="post" action="" enctype="multipart/form-data">
          <div class="form-group">
           <label>*FirstName:</label>
           <input class="form-control"  type="text" name="firstname" placeholder="enter your firstname">
          </div>
          
          <div class="form-group">
           <label>*LastName:</label>
           <input class="form-control"  type="text" name="lastname" placeholder="enter your lastname">
          </div>

          <div class="form-group">
           <label>*Email:</label>
           <input class="form-control"  type="text" name="email" placeholder="enter your email">
          </div>
           
       
           <input type="submit" class="btn btn-primary btn-block" name="submit" value="Submit">
         </form>
       </div>
       <div class="col-lg-4"></div>
    </div>
</div>

 <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
      //getting form input values
       $rollno = $_POST["firstname"];
       $name = $_POST["lastname"];
       $class = $_POST["email"];
     

      if($firstname!= "" && $lastname!= "" && $email!= ""){
        // sql statement
        $sql = "INSERT INTO students (firstname, lastname, email) VALUES ('$firstname','$lastname','$email')";
        $data = mysqli_query($conn,$sql);
         if($data){
          echo "<p class='text-center success-text mt-2'>Your details have been submitted</p>";
         }
      }
      else{
        echo "<p class='text-center error-text mt-2'>*All fields are Required</p>";
      }
    }
?>
</body>
</html>