<?php
    include 'connect.php';
    if(isset($_GET['deleteid'])){
        $id = $_GET['deleteid'];

        $sql = "DELETE FROM data WHERE id=$id";
        $result = mysqli_query($con, $sql);
        if($result){
            // echo "Deleted successfully";
            header('Location: display.php');
        } else {
            die(mysqli_error($con));
        }
    }
?>
