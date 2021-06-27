<?php include "includes/header.php";
include "includes/db.php";

if(isset($_GET['pr_id'])){
    $the_project_id = $_GET['pr_id'];
}

//querying database
$query = "SELECT * FROM projects WHERE project_id = $the_project_id ";
$select_all_projects_query = mysqli_query($connection, $query);

while($row = mysqli_fetch_assoc($select_all_projects_query)){

    $project_title = $row['project_title'];
    $project_date = $row['project_date'];
    $project_image = $row['project_image'];
    $project_content = $row['project_content']

    ?>

    <div class="about_page">
        <div class="about_page_title d-flex justify-content-center ">
            <h1><?=$project_date?></h1>
            <div class="my-2" style="width: 250px;border-top: 1px solid #000;"></div>
            <p><?=$project_title?></p>
        </div>
        <div class="about_item">
            <p>
                <?=$project_content?>
            </p>

        </div>
    </div>



<?php  } //end of while loop
include "includes/footer.php";  ?>
