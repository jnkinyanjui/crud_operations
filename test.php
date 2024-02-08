<?php

include 'connect.php';


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Password</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $select = "SELECT * FROM useer";
            $result = mysqli_query($con, $select);

            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $id= $row['Id'];
                    $name= $row['Name'];
                    $email= $row['Email'];
                    $phone= $row['Mobile'];
                    $password= $row['Password'];

                    echo '
                    <tr>
                        <th>' .$id. '</th>
                        <td>' .$name. '</td>
                        <td> '.$email.' </td>
                        <td> '.$phone. '</td>
                        <td> '.$password. '</td>
                        <td>
                            <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-decoration-none text-light">Edit</a></button>
                            <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-decoration-none text-light">Delete</a></button>
                        </td>
                    </tr>
                    ';
                }
            }
            ?>
        </tbody>
            
    </table>
</body>

</html>
