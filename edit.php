<?php
//database Connection
$db_con=mysqli_connect("localhost","root","","users")

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

    <input type="text" value="<?=($result['name'])?>"  class="form-control shadow-none border border-primary mb-3" name="name" placeholder="First Name" required/>

    <label class="form-label">E-Mail</label>

    <input type="email" value="<?=($result['email'])?>"  class="form-control shadow-none border border-primary mb-3" name="email" placeholder="Enter your E-Mail" required/>
    <div class="w-50 mx-auto">
        <input type="submit" class="btn btn-primary w-100" name="submit" value="Submit" />
    </div>
</form>
</div>
</body>
</html>