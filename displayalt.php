<?php
include 'connect.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Display Users Data Alternative</title>
</head>

<body>
    <div class="container my-5">
        <h3>Users Data</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>S/No.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Password</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $sql = "SELECT * FROM useer";
                $result = mysqli_query($con, $sql);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo    '
                                    <tr>
                                        <th>' . $row['Id'] . '</th>
                                        <td>' . $row['Name'] . '</td>
                                        <td>' . $row['Email'] . '</td>
                                        <td>' . $row['Mobile'] . '</td>
                                        <td>' . $row['Password']. '</td>
                                        <td>
                                            <button class="btn btn-primary"> <a href="update.php?updateid='.$row['Id'].' " class="text-decoration-none text-light">Edit   </a></button>
                                                &nbsp
                                            <button class="btn btn-danger">  <a href="delete.php?deleteid='.$row['Id'].' " class="text-decoration-none text-light">Delete </a></button>
                                        </td>
                                    </tr>
                                ';
                    }
                }
                ?>
            </tbody>
        </table>
        <button class="btn btn-primary my-5">
            <a href="user.php" class="text-light text-decoration-none">Add user</a>
        </button>
    </div>

</body>

</html>