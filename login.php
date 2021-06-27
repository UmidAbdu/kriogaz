<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V10</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
</head>
<body>
	<?php include "includes/db.php";
session_start();
if(isset($_POST['login'])){
    $admin_name = $_POST['admin_name'];
    $admin_password = $_POST['admin_password'];

    $admin_name = mysqli_real_escape_string($connection, $admin_name);
    $admin_password = mysqli_real_escape_string($connection, $admin_password);

    $query = "SELECT * FROM admins WHERE admin_name = '$admin_name'";
    $select_admin_query = mysqli_query($connection, $query);

    if(!$select_admin_query){
        die('QUERY FAILED' . mysqli_error($connection) );
    }

    while($row = mysqli_fetch_array($select_admin_query)){
        $db_id = $row['admin_id'];
        $db_username = $row['admin_name'];
        $db_admin_password = $row['admin_password'];
        $db_admin_firstname = $row['admin_firstname'];
        $db_admin_lastname = $row['admin_lastname'];
    }

    if($admin_name === $db_username and $admin_password === $db_admin_password) {

        $_SESSION['admin_name'] = $db_username;
        $_SESSION['admin_firstname'] = $db_admin_firstname;
        $_SESSION['admin_lastname'] = $db_admin_lastname;

        header("Location: ../admin/index.php");
    }
    else {
        header("Location:../index.php");
    }

}
?>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-50 p-b-90">
                <form action="" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="news_title">Username</label>
                        <input type="text" class="form-control" name="admin_name">
                    </div>

                    <div class="form-group">
                        <label for="news_title">Password</label>
                        <input type="password" class="form-control" name="admin_password">
                    </div>

                    <div class="form-group" style="text-align: center; padding-top: 20px" >
                        <input type="submit" class="btn btn-primary" name="login" value="Login">
                    </div>
                </form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>

</body>
</html>