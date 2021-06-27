<?php
if(isset($_GET['a_id'])){
    $the_admin_id = $_GET['a_id'];

    $query = "SELECT * FROM admins WHERE admin_id = $the_admin_id";
    $select_admin_id = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($select_admin_id)) {

        $admin_id = $row['admin_id'];
        $admin_firstname = $row['admin_firstname'];
        $admin_lastname = $row['admin_lastname'];
        $admin_email = $row['admin_email'];
        $admin_name = $row['admin_name'];
        $admin_password = $row['admin_password'];
    }
}


if(isset($_POST['update_admin'])){

    $admin_firstname = $_POST['admin_firstname'];
    $admin_lastname = $_POST['admin_lastname'];
    $admin_email = $_POST['admin_email'];
    $admin_name = $_POST['admin_name'];
    $admin_password = $_POST['admin_password'];

    $query = "UPDATE admins SET ";
    $query .= "admin_firstname = '{$admin_firstname}',";
    $query .= "admin_lastname = '{$admin_lastname}', ";
    $query .= "admin_email = '{$admin_email}', ";
    $query .= "admin_name = '{$admin_name}', ";
    $query .= "admin_password = '{$admin_password}'";
    $query .= "WHERE admin_id = {$the_admin_id}";

    $update_news = mysqli_query($connection, $query);

    if(!$update_news){
        die('QUERY FAILED ' . mysqli_error($connection));
    }

}
?>

<form action="" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label for="admin_firstname">Firstname</label>
        <input type="text" value="<?=$admin_firstname?>" class="form-control" name="admin_firstname">
    </div>

    <div class="form-group">
        <label for="admin_lastname">Lastname</label>
        <input type="text" value="<?=$admin_lastname?>" class="form-control" name="admin_lastname">
    </div>

    <div class="form-group">
        <label for="admin_email">Email</label>
        <input type="text" value="<?=$admin_email?>" class="form-control" name="admin_email">
    </div>

    <div class="form-group">
        <label for="admin_name">Username</label>
        <input type="text" value="<?=$admin_name?>" class="form-control" name="admin_name">
    </div>

    <div class="form-group">
        <label for="admin_password">Password</label>
        <input type="text" value="<?=$admin_password?>" class="form-control" name="admin_password">
    </div>

    <div class="form-group">
        <input type="submit" class="btn btn-primary" name="update_admin" value="Update admin">
    </div>
</form>
