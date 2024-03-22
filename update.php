<?php
// database connection
$db_con= mysqli_connect("localhost", "root", "", "users");
if (!$db_con) {
    die("database not connected");
}


if(isset($_POST['submit'])) {

    if(!isset($_POST['name']) || empty($_POST['name'])) {
        die("Name filed is required");
    }

    $id = $_GET['id'];
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = $_POST['email'];
    $sql = "UPDATE users_info SET name='$name', email='$email' WHERE id=$id";
    if(mysqli_query($db_con, $sql)) {

            header("Location: show_data.php");
        }

    }




?>