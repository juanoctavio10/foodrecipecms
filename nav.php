<nav>

    <div id="sortable-blog-list">
    <input class="search" placeholder="Search" />
    <button class="sort" data-sort = "title"> Sort </button>
    <ul class="list" >
        <?php
            ini_set('display_errors',1);
            
            

            function getPostTitlesFromDatabase(){

                include 'db_connect.php';
                $sql = "select title from recipes";
                $result = mysqli_query($conn,$sql);


                //$postTitles = array("Blog Post 1","Blog Post 2","Blog Post 3");
                $postTitles = array();

                while ($row = mysqli_fetch_assoc($result)){
                    array_push($postTitles,$row['title']);
                }
                
                return $postTitles;
            }


            $postTitles = getPostTitlesFromDatabase();
            foreach($postTitles as $postTitle){
                echo "<li> <a href='post.php?title=". $postTitle . "' class='title' >" . $postTitle . "</a> </li>";
            }
        ?>
        
    </ul>
</nav>
