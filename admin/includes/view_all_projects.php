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

        $query = "SELECT * FROM projects";
        $select_projects = mysqli_query($connection, $query);

        while ($row = mysqli_fetch_assoc($select_projects)){
        $project_id = $row['project_id'];
        $project_title = $row['project_title'];
        $project_image = $row['project_image'];
        $project_content = $row['project_content'];
        $project_date = $row['project_date'];

        ?>
    <tr>
        <td><?=$project_id?> </td>
        <td><?=$project_title?> </td>
        <td><img width="100" src="../images/<?=$project_image?>"></td>
        <td><?=substr($project_content,0,200)?></td>
        <td><?=$project_date?></td>
        <td><a href="projects.php?source=edit_news&p_id=<?=$project_id?>">Edit</a></td>
        <td><a href="projects.php?delete=<?=$project_id?>">Delete</a></td>
    </tr>
    <?php
    }
    ?>
    </tr>
    </tbody>
</table>

<?php

if(isset($_GET['delete'])){

    $the_project_id = $_GET['delete'];
    $query = "DELETE FROM projects WHERE project_id = {$the_project_id}";
    $delete_project_query = mysqli_query($connection, $query);

    header("Location:projects.php");

    if(!$delete_project_query){
        die('QUERY FAILED' . mysqli_error($connection));
    }
}
?>