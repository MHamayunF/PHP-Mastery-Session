<?php
    include 'connect.php';

    if(isset($_POST['submit'])) {
        $id = $_POST["id"];
        $name = $_POST["name"];
        $email = $_POST["email"];
        $mobile = $_POST["mobile"];
        $password = $_POST["password"];

        $sql = "INSERT INTO data (id, name, email, mobile, password) 
                VALUES ('$id', '$name', '$email', '$mobile', '$password')";
        
        $result = mysqli_query($con, $sql);
        
        if($result) {
           // echo "Data submitted successfully";
           header('location:display.php');
           
        } else {
            die("Error in inserting data: " .mysqli_error($con));
        }
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>CRUD operations!</title>
  </head>
  <body>
    <div class="container my-5">
      <form method="post">
        <div class="form-group">
          <label>ID</label>
          <input type="text" class="form-control" placeholder="Enter your ID" name="id" autocomplete="off" value="">
        </div>
        <div class="form-group">
          <label>Name</label>
          <input type="text" class="form-control" placeholder="Enter your Name" name="name" autocomplete="off" value="">
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="email" class="form-control" placeholder="Enter your Email" name="email" autocomplete="off" value="">
        </div>
        <div class="form-group">
          <label>Mobile</label>
          <input type="text" class="form-control" placeholder="Enter your Mobile" name="mobile" autocomplete="off" value="">
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="password" class="form-control" placeholder="Enter your Password" name="password" autocomplete="new-password" value="">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </body>
</html>
