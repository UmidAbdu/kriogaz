<?php
if(isset($_POST['create_news'])){

    $news_title = escape($_POST['news_title']);

    $news_image = $_FILES['news_image']['name'];
    $news_image_temp = $_FILES['news_image']['tmp_name'];

    $news_content = escape($_POST['news_content']);
    $news_date = escape(date('d-m-y'));

    move_uploaded_file($news_image_temp, "../images/$news_image");

    $query = "INSERT INTO news(news_title, news_image, news_content, news_date) ";

    $query .= "VALUES ('{$news_title}', '{$news_image}', '{$news_content}', now() )";

    $send_query = mysqli_query($connection, $query);

    if(!$send_query){
        die('QUERY FAILED' . mysqli_error($connection));
    }
}

?>





<form action="" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label for="news_title">News Title</label>
        <input type="text" class="form-control" name="news_title">
    </div>

    <div class="form-group">
        <label for="news_image">News Image</label>
        <input type="file" class="form-control" name="news_image">
    </div>

    <div class="form-group">
        <label for="news_content">News Content</label>
        <textarea class="form-control" name="news_content" id="" cols="30" rows="10"></textarea>
    </div>


    <div class="form-group">

        <input type="submit" class="btn btn-primary" name="create_news" value="Publish news">
    </div>
</form>
