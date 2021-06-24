<?php include "includes/admin_header.php";
include "../includes/db.php";
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
                        Welcome to Admin Page
                        <small>Author</small>
                    </h1>


                    <?php

                    if(isset($_GET['source'])){
                        $source = $_GET['source'];
                    } else{
                        $source = '';
                    }

                    switch ($source){
                        case 'add_projects';
                            include "includes/add_projects.php";
                            break;

                        case 'edit_projects';
                            include "includes/edit_projects.php";
                            break;

                        default:
                            include "includes/view_all_projects.php";

                            break;
                    }

                    ?>



                </div>
            </div>
            <?php include "includes/admin_footer.php";?>

