<?php
require_once("connection.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST["name"];
    $department = $_POST["department"];
    $sql = "INSERT INTO `course` (`id`, `name`, `department`) VALUES (NULL, '$name', '$department')";
    $result = mysqli_query($con, $sql);  
    if ($result) {
        echo "done";
        header("Location:view_course.php");
     } else {
        echo "Record is not inserted: " . mysqli_error($con);
    }
}
mysqli_close($con);
?>
