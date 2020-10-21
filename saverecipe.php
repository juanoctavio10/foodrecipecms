<?php
    $title = $_POST['title'];
    $content = $_POST['content'];
    $author = $_POST['author'];
    $date = $_POST['date'];

    ini_set('display_errors',1);
    include 'db_connect.php';
    $sql = "insert into posts(title,content,author,date) values ('" . $title . "','" . $content . "','" . $author . "','" . $date . "')";
    $result = mysqli_query($conn,$sql);
    header("location: index.php");

?>