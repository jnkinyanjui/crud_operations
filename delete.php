<?php
include('connect.php');

if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $delete = "DELETE FROM useer WHERE Id = $id";
    $result = mysqli_query($con, $delete);

    if ($result) {
        // echo 'Record deleted succefully.';
        header('Location:display.php');
    } else {
        die(mysqli_error($con));
    }
}
?>