<?php
  if(isset($_POST['name'])){
  $server= "127.0.0.1";
  $username="root";
  $password="";
  $con=mysqli_connect($server,$username,$password);

  if(!$con){
    die("Connection to the database failed due to ". mysqli_connect_error());
  }
//   echo "Connection Succesfull!"; 

  $name= $_POST['name'];
  $gender= $_POST['gender'];
  $age= $_POST['age'];
  $email= $_POST['email'];
  $phone= $_POST['phone'];
  $desc= $_POST['desc'];


   $sql="INSERT INTO `travel`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";

//    echo $sql;

   if($con->query($sql)== true ){
    echo "Successfully Inserted";
   }
   else{
    echo "ERROR:  $sql <br> $con->error";
   }
   $con->close();
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class="container">
        <h3>Welcome to PICT Trip form</h3>
        <p>Enter your details to participate and enroll youself in the trip</p>
        <form action="index.php" method="post" >
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your Email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone number">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter your any other information here "></textarea>
            <button class="btn">Submit</button>
            <button class="btn">Reset</button>
        </form>
        
    </div>
    <script src="index.js"></script>
    <!-- INSERT INTO `trip` (`sno`, `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('1', 'test name', '10', 'male', 'this@this.com', '9999999999', 'nothing here', current_timestamp()); -->

</body>
</html>