<table class="table table-bordered table-hover">
    <thead>
    <tr>
        <td>ID</td>
        <td>Title</td>
        <td>Image</td>
        <td>Content</td>
        <td>Date</td>
        <td>Edit</td>
        <td>Delete</td>
    </tr>
    </thead>
    <tbody>

    <tr>
        <?php

        $query = "SELECT * FROM news";
        $select_news = mysqli_query($connection, $query);

        while ($row = mysqli_fetch_assoc($select_news)){
        $news_id = $row['news_id'];
        $news_title = $row['news_title'];
        $news_image = $row['news_image'];
        $news_content = $row['news_content'];
        $news_date = $row['news_date'];

        ?>
    <tr>
        <td><?=$news_id?> </td>
        <td><?=$news_title?> </td>
        <td><img width="100" src="../images/<?=$news_image?>"></td>
        <td><?=substr($news_content,0,250)?></td>
        <td><?=$news_date?></td>
        <td><a href="news.php?source=edit_news&n_id=<?=$news_id?>">Edit</a></td>
        <td><a href="news.php?delete=<?=$news_id?>">Delete</a></td>
    </tr>
    <?php
    }
    ?>
    </tr>
    </tbody>
</table>

<?php

if(isset($_GET['delete'])){


    $the_news_id = escape($_GET['delete']);
    $query = "DELETE FROM news WHERE news_id = {$the_news_id}";
    $delete_news_query = mysqli_query($connection, $query);

    header("Location:news.php");

    if(!$delete_news_query){
        die('QUERY FAILED' . mysqli_error($connection));
    }
}
?>