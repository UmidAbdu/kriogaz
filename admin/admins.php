<?php include "includes/admin_header.php";
include "../includes/db.php";
include "functions.php";

?>

<body>

<div id="wrapper">

    <!-- Navigation -->

    <?php include "includes/admin_navigation.php" ?>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Admins page
                    </h1>


                    <?php

                    if(isset($_GET['source'])){
                        $source = escape($_GET['source']);
                    } else{
                        $source = '';
                    }

                    switch ($source){
                        case 'add_admin';
                            include "includes/add_admin.php";
                            break;

                        case 'edit_admin';
                            include "includes/edit_admin.php";
                            break;

                        default:
                            include "includes/view_all_admins.php";

                            break;
                    }

                    ?>



                </div>
            </div>
            <?php include "includes/admin_footer.php";?>

