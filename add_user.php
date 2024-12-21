<?php
    require_once("connection.php");
     if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $firstname=$_POST["firstname"];
        $lastname=$_POST["lastname"];
        $email=$_POST["email"];
        $phone=$_POST["phone"];
        $department=$_POST["department"];
        $address=$_POST["address"];

        $image=$_FILES["image"]["tmp_name"];
        $filename=$_FILES['image']['name'];
        move_uploaded_file($image,"image\ $filename");
      $sql="INSERT INTO `faculty` (`Adminid`,`firstname`,`lastname`, `email`, `phone`,`address`, `department`, `image`) VALUES (NULL,' $firstname','$lastname', ' $email', ' $phone', '$address', '$department', '$filename')";
        $result=mysqli_query($con,$sql);
        if($result)
        {
          echo"done";
          header("Location:view_user.php");
        }
        else{
            echo "Record is not inserted..";
        }
    }
    mysqli_close($con);
?>