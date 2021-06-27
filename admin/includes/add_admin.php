<?php
if(isset($_POST['create_admin'])){

    $admin_firstname = escape($_POST['admin_firstname']);
    $admin_lastname = escape($_POST['admin_lastname']);
    $admin_email = escape($_POST['admin_email']);
    $admin_name = escape($_POST['admin_name']);
    $admin_password = escape($_POST['admin_password']);

    $query = "INSERT INTO admins(admin_name, admin_password, admin_firstname, admin_lastname, admin_email ) ";

    $query .= "VALUES ('{$admin_name}', '{$admin_password}', '{$admin_firstname}', '{$admin_lastname}', '{$admin_email}' )";

    $send_query = mysqli_query($connection, $query);

    if(!$send_query){
        die('QUERY FAILED' . mysqli_error($connection));
    }
}

?>

<form action="" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label for="admin_firstname">Firstname</label>
        <input type="text" class="form-control" name="admin_firstname">
    </div>

    <div class="form-group">
        <label for="admin_name">Lastname</label>
        <input type="text" class="form-control" name="admin_lastname">
    </div>

    <div class="form-group">
        <label for="admin_email">Email</label>
        <input type="email" class="form-control" name="admin_email">
    </div>

    <div class="form-group">
        <label for="admin_name">Username</label>
        <input type="text" class="form-control" name="admin_name">
    </div>

    <div class="form-group">
        <label for="admin_password">Password</label>
        <input type="password" class="form-control" name="admin_password">
    </div>

    <div class="form-group">

        <input type="submit" class="btn btn-primary" name="create_admin" value="Create admin">
    </div>
</form>

