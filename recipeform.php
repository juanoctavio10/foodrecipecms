<html>


<?php 
    include 'head.php';
?>


<body>


<header>
    <h1>Creating Recipe</h1>
</header>
 
<?php 
    include 'nav.php';
?>

<?php 
    $title="";
    $author="";
    $date="";
    $content="";

    if (isset($_GET['title'])){
        $title=$_GET['title'];
        include 'db_connect.php';
        $sql = "select * from recipes where title='".$title."'";
        $result = mysqli_query($conn,$sql);

        while ($row = mysqli_fetch_assoc($result)){
            $author=$row['author'];
            $date=$row['date'];
            $content=$row['content'];
        }

    } 
    
    //$_GET['title']

?>

<main>
    <form action="" method="POST" >
        <label for="fname">Title:</label><br>
        <input type="text" id="title" name="title" value="<?php echo $title ?>" ><br>
        <label for="lname">Autor:</label><br>
        <input type="text" id="autor" name="autor" value="<?php echo $author ?>"><br><br>
        <label for="lname">Date:</label><br>
        <input type="date" id="date" name="date" value="<?php echo $date ?>"><br><br>
        <label for="lname">Content:</label><br>
        <textarea  style="display:none" id="content" name="content" > <?php echo $content ?> </textarea> <br><br> 
        <div id="editor"> </div>
        <button type="button" id="submit" > Save </button>
        <button type="button" id="delete" > Delete </button>
      </form>
</main>

<?php 
    include 'footer.php';
?>

</body>

</html>