<?php
    $title = $_POST['title'];
    $content = $_POST['content'];
    $author = $_POST['author'];
    $date = $_POST['date'];

    ini_set('display_errors',1);
    include 'db_connect.php';


    $sql = "select * from recipes where title='".$title."'";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0){
        $sql = "update recipes  set title='" . $title . "',content='" . $content . "',author='" . $author . "',date='" . $date . "'  where title='" . $title . "'";
        $result = mysqli_query($conn,$sql);    
    } else {
        $sql = "insert into recipes(title,content,author,date) values ('" . $title . "','" . $content . "','" . $author . "','" . $date . "')";
        $result = mysqli_query($conn,$sql);    
    }




 

    //header("location: index.php");
    echo $sql;

?>