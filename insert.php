<?php
//Database connection

$db_con=mysqli_connect("localhost","root","","users");
if($db_con){
    echo "Dtabase is Connected";
}

if (isset($_POST['submit'])) {
$name=$_POST['name'];
$email=$_POST['email'];

  // insert into the table
  $sql = "INSERT INTO users_info (`name`, `email`) VALUES('$name', '$email')";

  $result = mysqli_query($db_con, $sql);
  if($result){
    echo "Data Inserted Successfully";
  }

}


?>





<!DOCTYPE html>
<html lang="en">
    <head>


<title>Registration-form</title>
<link rel="stylesheet" href="./Bootstrap/css/bootstrap.min.css">
<script src="./Bootstrap/js/bootstrap.bundle.min.js"></script>

</head>

<body>
<div class="container w-50 shadow mx-auto mt-3 p-3 bg-info">

<h2 class="text-center text-white bg-primary p-2 mb-3">Registration Form</h2>

<form method="POST" action="<?= $_SERVER['PHP_SELF'] ?>">

    <label class="form-label">Name</label>

    <input type="text" class="form-control shadow-none border border-primary mb-3" name="name" placeholder="First Name" />

    <label class="form-label">E-Mail</label>

    <input type="email" class="form-control shadow-none border border-primary mb-3" name="email" placeholder="Enter your E-Mail" />
    <div class="w-50 mx-auto">
        <input type="submit" class="btn btn-primary w-100" name="submit" value="Submit" />
    </div>
</form>
</div>
</body>
</html>