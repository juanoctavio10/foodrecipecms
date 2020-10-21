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

<main>
    <form action="submit-post.php" method="POST" >
        <label for="fname">Title:</label><br>
        <input type="text" id="title" name="title" value=""><br>
        <label for="lname">Autor:</label><br>
        <input type="text" id="autor" name="autor" value=""><br><br>
        <label for="lname">Date:</label><br>
        <input type="date" id="date" name="date" value=""><br><br>
        <label for="lname">Content:</label><br>
        <textarea  id="content" name="content" value="" > </textarea> <br><br>
        <div id="editor"> </div>
        <button id="submit" > Save </input>
        <button id="edit" > Edit </input>
        <button id="delete" > Delete </input>
      </form>
</main>

<?php 
    include 'footer.php';
?>

</body>

</html>