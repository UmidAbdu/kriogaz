<?php include "includes/header.php";
include "includes/db.php";
?>
<section style="padding-bottom:40px " class="d-flex justify-content-center align-items-center flex-column border border-danger">
    <div class="news_div">
        <h1 style="font-weight: bold;">Новости</h1>
    </div>
    <?php
    $query = "SELECT * FROM news";
    $select_news = mysqli_query($connection, $query);

    if(!$select_news){
        die('QUERY FAILED' . mysqli_error($connection));
    }

    while($row = mysqli_fetch_assoc($select_news)){
    $news_id =$row['news_id'];
    $news_title = $row['news_title'];
    $news_image = $row['news_image'];
    $news_content = $row['news_content'];
    $news_date = $row['news_date'];

    ?>
    <div class="news_item mt-4">
        <img src="images/<?=$news_image?>">
        <div class="news_title">
            <p class="date"><?=$news_date?></p>
            <a href="#">
               <?=substr($news_content, 0, 250)?>
            </a>
        </div>
    </div>
    <?php } ?>
</section>
<?php include "includes/footer.php"?>
