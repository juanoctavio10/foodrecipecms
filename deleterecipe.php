<?php
    $title = $_POST['title'];

    ini_set('display_errors',1);
    include 'db_connect.php';
    $sql = "delete from recipes where title= '" . $title . "'";
    $result = mysqli_query($conn,$sql);
    //header("location: index.php");
    //echo $sql;

?>