<?php include "includes/header.php";
include "includes/db.php";

if(isset($_GET['p_id'])){
    $the_post_id = $_GET['p_id'];
}

//querying database
    $query = "SELECT * FROM news WHERE news_id = $the_post_id";
    $select_all_posts_query = mysqli_query($connection, $query);

    while($row = mysqli_fetch_assoc($select_all_posts_query)){

    $news_title = $row['news_title'];
    $news_date = $row['news_date'];
    $news_image = $row['news_image'];
    $news_content = $row['news_content']

?>

<div class="about_page">
    <div class="about_page_title d-flex justify-content-center ">
        <h1><?=$news_date?></h1>
        <div class="my-2" style="width: 250px;border-top: 1px solid #000;"></div>
        <p><?=$news_title?></p>
    </div>
    <div class="about_item">
        <p>
        <?=$news_content?>
        </p>

    </div>
</div>



<?php  } //end of while loop
  include "includes/footer.php";  ?>
