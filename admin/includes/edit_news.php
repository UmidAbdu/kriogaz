<?php

if(isset($_GET['n_id'])){
    $the_news_id = escape($_GET['n_id']);

    $query = "SELECT * FROM news WHERE news_id = $the_news_id";
    $select_news_id = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($select_news_id)) {

        $news_id = $row['news_id'];
        $news_title = $row['news_title'];
        $news_content = $row['news_content'];
        $news_image = $row['news_image'];
    }
}


if(isset($_POST['update_news'])){

    $news_title = escape($_POST['news_title']);

    $news_image = $_FILES['news_image']['name'];
    $news_image_temp = $_FILES['news_image']['tmp_name'];

    $news_content = escape($_POST['news_content']);

    move_uploaded_file($news_image_temp, "../images/$news_image");

    if(empty($news_image)){
        $query = "SELECT * FROM news WHERE news_id = $the_news_id ";
        $select_image = mysqli_query($connection, $query);

        while ($row = mysqli_fetch_assoc($select_image)){
            $news_image = $row['news_image'];
        }
    }

    $query = "UPDATE news SET ";
    $query .= "news_title = '{$news_title}',";
    $query .= "news_date = now(), ";
    $query .= "news_content = '{$news_content}',";
    $query .= "news_image = '{$news_image}'";
    $query .= "WHERE news_id = {$the_news_id}";

    $update_news = mysqli_query($connection, $query);

    if(!$update_news){
        die('QUERY FAILED ' . mysqli_error($connection));
    }

}
?>

<form action="" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label for="news_title">News Title</label>
        <input type="text" value="<?=$news_title?>" class="form-control" name="news_title">
    </div>

    <div class="form-group">
        <img width="100" src="../../images/<?=$news_image?>">
        <label for="news_image">News Image</label>
        <input type="file" class="form-control" name="news_image">
    </div>

    <div class="form-group">
        <label for="news_content">News Content</label>
        <textarea class="form-control"  name="news_content" id="editor" cols="30" rows="10"><?=$news_content?></textarea>
    </div>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>

    <div class="form-group">
        <input type="submit" class="btn btn-primary" name="update_news" value="Update news">
    </div>
</form>
