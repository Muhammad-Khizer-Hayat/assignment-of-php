<!DOCTYPE html>
<html lang="en">

<head>
    <title>Show Data</title>
    <!-- bootstrp links -->
    <link rel="stylesheet" href="./Bootstrap/css/bootstrap.min.css">
    <script src="./Bootstrap/js/bootstrap.bundle.min.js"></script>
</head>

<body>


    <div class="container mt-3">
        <div class="mb-3 text-end">
            <a href="insert.php" class="btn btn-primary">+ Add Student</a>
        </div>
        <h2 class="text-center text-white bg-primary p-2 mb-3">Students Data</h2>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">E-mail</th>
                </tr>
            </thead>
            <tbody>


                <?php
                // database connection
                $db_con = mysqli_connect("localhost", "root", "", "users");
                if (!$db_con) {
                    die("database not connected");
                }

                $sql = "SELECT * FROM `users_info` ";
                $result = mysqli_query($db_con , $sql);

              if(mysqli_num_rows($result) > 0){

                while($row = mysqli_fetch_assoc($result)){

                $id = $row['id'];
                $name = $row['name'];
                $email = $row['email'];
              ?>

                <tr>
                   <th ><?php echo $id;  ?></th>
                    <td><?php echo $name;  ?></td>
                    <td><?php echo $email;  ?></td>
                    <td><a href="edit-data.php?id=<?=$id?>" class="btn btn-warning btn-sm">Edit</a>
                          |  
                    <a href="" class="btn btn-danger btn-sm">Delete</a></a> </td>
                </tr>

         <?php
                }
              }
            ?>

             

           
            </tbody>
        </table>
    </div>

</body>

</html>