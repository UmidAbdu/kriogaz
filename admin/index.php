<?php include "includes/admin_header.php";
include "../includes/db.php";
?>
<body>

    <div id="wrapper">

        <!-- Navigation -->
       <?php include "includes/admin_navigation.php";?>

        <div id="page-wrapper">

            <div class="container-fluid">
                <h1>Admin is <?=$_SESSION['admin_firstname'], ' ', $_SESSION['admin_lastname']?> </h1>

                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-file-text fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">

                                        <?php
                                        $query = "SELECT * FROM news";
                                        $select_all_posts = mysqli_query($connection, $query);
                                        $post_counts = mysqli_num_rows($select_all_posts);
                                        echo "<div class='huge'>$post_counts</div>"
                                        ?>

                                        <div>News</div>
                                    </div>
                                </div>
                            </div>
                            <a href="news.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div>


                                    <div class="col-xs-9 text-right">
                                        <?php
                                        $query = "SELECT * FROM projects";
                                        $select_all_projects = mysqli_query($connection, $query);
                                        $project_counts = mysqli_num_rows($select_all_projects);
                                        echo "<div class='huge'>$project_counts</div>"
                                        ?>
                                        <div>Projects</div>
                                    </div>
                                </div>
                            </div>
                            <a href="projects.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-users fa-5x"></i>
                                    </div>

                                    <div class="col-xs-9 text-right">
                                        <?php
                                        $query = "SELECT * FROM admins";
                                        $select_all_users = mysqli_query($connection, $query);
                                        $user_counts = mysqli_num_rows($select_all_users);
                                        echo "<div class='huge'>$user_counts</div>"
                                        ?>
                                        <div> Admins</div>
                                    </div>
                                </div>
                            </div>
                            <a href="admins.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <script type="text/javascript">
                        google.charts.load('current', {'packages':['bar']});
                        google.charts.setOnLoadCallback(drawChart);

                        function drawChart() {
                            var data = google.visualization.arrayToDataTable([
                                ['Data', 'Count',],

                                <?php

                                $element_text = ['Active Posts', 'Comments', 'Users' ];
                                $element_count = [$post_counts,$project_counts, $user_counts ];

                                for($i= 0; $i < 3; $i++){
                                    echo "['{$element_text[$i]}'" . "," . "{$element_count[$i]}],";
                                }



                                ?>

                                //  ['Posts', 1000]
                            ]);

                            var options = {
                                chart: {
                                    title: '',
                                    subtitle: '',
                                }
                            };

                            var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

                            chart.draw(data, google.charts.Bar.convertOptions(options));
                        }
                    </script>
                    <div id="columnchart_material" style="width:auto; height: 500px;"></div>
                </div>




                <?php include "includes/admin_footer.php";?>
