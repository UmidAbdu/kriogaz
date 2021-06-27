<?php

if(isset($_POST['create_project'])){

    $project_title = escape($_POST['project_title']);

    $project_image = $_FILES['project_image']['name'];
    $project_image_temp = $_FILES['project_image']['tmp_name'];

    $project_content = escape($_POST['project_content']);
    $project_date = escape(date('d-m-y'));

    move_uploaded_file($project_image_temp, "../images/$project_image");

    $query = "INSERT INTO projects (project_title, project_image, project_content, project_date) ";

    $query .= "VALUES ('{$project_title}', '{$project_image}', '{$project_content}', now() )";

    $send_project_query = mysqli_query($connection, $query);

    if(!$send_project_query){
        die('QUERY FAILED' . mysqli_error($connection));
    }
}

?>





<form action="" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label for="project_title">Project Title</label>
        <input type="text" class="form-control" name="project_title">
    </div>

    <div class="form-group">
        <label for="project_image">Project Image</label>
        <input type="file" class="form-control" name="project_image">
    </div>

    <div class="form-group">
        <label for="project_content">Project Content</label>
        <textarea class="form-control" name="project_content" id="" cols="30" rows="10"></textarea>
    </div>


    <div class="form-group">

        <input type="submit" class="btn btn-primary" name="create_project" value="Publish Project">
    </div>
</form>
