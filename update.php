<?php
include 'connect.php';
$id = $_GET['updateid'];

$sql = "SELECT * FROM useer WHERE Id=$id";
$result = mysqli_query($con,$sql);

$row = mysqli_fetch_assoc($result);
$Name = $row['Name'];
$Email = $row['Email'];
$Mobile = $row['Mobile'];
$Password = $row['Password'];

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email= $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
  
    $sql = "UPDATE useer SET Id=$id, Name='$name', Email= '$email', Mobile= '$mobile', Password = '$password'  WHERE Id=$id ";
    $result = mysqli_query($con,$sql);

    if($result){
        // echo "Record updated succesfully";
        header("Location:display.php");
    }else{
        die(mysqli_error($con));
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Crud Operation</title>
</head>

<body>
    <div class="container my-5">
        <h3>Updating Form</h3>
        <form method="POST" >
            <div class="form-group">
                <label class="my-2">Name</label>
                <input type="text" class="form-control" name="name" autocomplete="off" value="<?php echo $Name ?>" placeholder="Enter your name">
            </div>
            <div class="form-group">
                <label class="my-2">Email</label>
                <input type="email" class="form-control" name="email" autocomplete="off" value="<?php echo $Email ?>" placeholder="Enter your email">
            </div>
            <div class="form-group">
                <label class="my-2">Number</label>
                <input type="text" class="form-control" name="mobile" autocomplete="off" value="<?php echo $Mobile ?>" placeholder="Enter your mobile number">
            </div>
            <div class="form-group">
                <label class="my-2">Password</label>
                <input type="password" class="form-control" name="password" value="<?php echo $Password ?>" placeholder="Enter your password">
            </div>

            <button type="submit" class="btn btn-primary mt-3" name="submit">Update</button>
        </form>
    </div>
</body>

</html>