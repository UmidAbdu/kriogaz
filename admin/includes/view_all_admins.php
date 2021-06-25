<table class="table table-bordered table-hover">
    <thead>
    <tr>
        <td>ID</td>
        <td>Username</td>
        <td>Firstname</td>
        <td>Lastname</td>
        <td>Email</td>
        <td>Edit</td>
        <td>Delete</td>
    </tr>
    </thead>
    <tbody>

    <tr>
        <?php

        $query = "SELECT * FROM admins";
        $select_admins = mysqli_query($connection, $query);

        while ($row = mysqli_fetch_assoc($select_admins)){
        $admin_id = $row['admin_id'];
        $admin_name = $row['admin_name'];
        $admin_email = $row['admin_email'];
        $admin_firstname = $row['admin_firstname'];
        $admin_lastname = $row['admin_lastname'];

        ?>
    <tr>
        <td><?=$admin_id?> </td>
        <td><?=$admin_name?> </td>
        <td><?=$admin_firstname?></td>
        <td><?=$admin_lastname?></td>
        <td><?=$admin_email?></td>
        <td><a href="admins.php?source=edit_news&a_id=<?=$admin_id?>">Edit</a></td>
        <td><a href="admins.php?delete=<?=$admin_id?>">Delete</a></td>
    </tr>
    <?php
    }
    ?>
    </tr>
    </tbody>
</table>

<?php

if(isset($_GET['delete'])){

    $the_admin_id = $_GET['delete'];
    $query = "DELETE FROM admins WHERE admin_id = {$the_admin_id}";
    $delete_admin_query = mysqli_query($connection, $query);

    header("Location:admins.php");

    if(!$delete_admin_query){
        die('QUERY FAILED' . mysqli_error($connection));
    }
}
?>