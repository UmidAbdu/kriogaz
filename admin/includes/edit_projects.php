<?php

if(isset($_GET['p_id'])){
    $the_project_id = escape($_GET['p_id']);

    $query = "SELECT * FROM projects WHERE project_id = $the_project_id";
    $select_project_id = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($select_project_id)) {

        $project_id = $row['project_id'];
        $project_title = $row['project_title'];
        $project_content = $row['project_content'];
        $project_image = $row['project_image'];
    }
}


if(isset($_POST['update_project'])){

    $project_title = escape($_POST['project_title']);

    $project_image = $_FILES['project_image']['name'];
    $project_image_temp = $_FILES['project_image']['tmp_name'];

    $project_content = escape($_POST['project_content']);

    move_uploaded_file($project_image_temp, "../images/$project_image");

    if(empty($news_image)){
        $query = "SELECT * FROM projects WHERE project_id = $the_project_id ";
        $select_image = mysqli_query($connection, $query);

        while ($row = mysqli_fetch_assoc($select_image)){
            $project_image = $row['project_image'];
        }
    }

    $query = "UPDATE projects SET ";
    $query .= "project_title = '{$project_title}',";
    $query .= "project_date = now(), ";
    $query .= "project_content = '{$project_content}',";
    $query .= "project_image = '{$project_image}'";
    $query .= "WHERE project_id = {$the_project_id}";

    $update_project = mysqli_query($connection, $query);

    if(!$update_project){
        die('QUERY FAILED ' . mysqli_error($connection));
    }

}
?>

<form action="" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label for="project_title">Project Title</label>
        <input type="text" value="<?=$project_title?>" class="form-control" name="project_title">
    </div>

    <div class="form-group">
        <img width="100" src="../../images/<?=$project_image?>">
        <label for="project_image">Project Image</label>
        <input type="file" class="form-control" name="project_image">
    </div>

    <div class="form-group">
        <label for="project_content">Project Content</label>
        <textarea class="form-control"  name="project_content" id="editor" cols="30" rows="10"><?=$project_content?></textarea>
    </div>

    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>

    <div class="form-group">
        <input type="submit" class="btn btn-primary" name="update_project" value="Update project">
    </div>
</form>
