<?php include "includes/header.php";
include "includes/db.php";
?>

<section style="padding-bottom:40px " class="d-flex justify-content-center align-items-center flex-column">
    <div class="news_div">
        <h1 style="font-weight: bold;">Реализованные проекты</h1>
    </div>
    <?php
    $query = "SELECT * FROM projects";
    $select_projects = mysqli_query($connection, $query);

    if(!$select_projects){
        die('QUERY FAILED' . mysqli_error($connection));
    }

    while($row = mysqli_fetch_assoc($select_projects)){
        $project_id =$row['project_id'];
        $project_title = $row['project_title'];
        $project_image = $row['project_image'];
        $project_content = $row['project_content'];
        $project_date = $row['project_date'];

        ?>
        <div class="news_item mt-4">
            <img src="images/<?=$project_image?>">
            <div class="news_title">
                <p class="date"><?=$project_date?></p>
                <a href="project.php?pr_id=<?=$project_id?>">
                    <?=substr($project_content, 0, 240)?>
                </a>
            </div>
        </div>
    <?php } ?>
</section>

<?php include "includes/footer.php"?>
