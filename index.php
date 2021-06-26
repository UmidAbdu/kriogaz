<?php include "includes/header.php";
include "includes/db.php";
?>

<section>
    <div class="row section_A position-relative">
        <div class="col-lg-8 backColor"></div>
        <div class="col-lg-4 "></div>
        <div class="col-lg-8 offset-4 position-absolute">
            <div class="carousel slide carousel-fade" id="karusel" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="box">
                        <div class="position-absolute">
                            <h4>
                                Проекты
                            </h4>
                            <p>Крупнейшие реализованные проекты</p>
                        </div>
                        <?php
                        $query = "SELECT * FROM projects LIMIT 3";
                        $select_projects = mysqli_query($connection, $query);

                        if(!$select_projects){
                            die('QUERY FAILED' . mysqli_error($connection));
                        }

                        while($row = mysqli_fetch_assoc($select_projects)){
                        $project_id =$row['project_id'];
                        $project_title = $row['project_title'];
                        $project_image = $row['project_image'];
                        $project_content = $row['project_content'];
                        $project_date = $row['project_date'];

                        ?>
                        <div class="carousel-item active">
                            <div class="c-1">
                                <p class="text-center bg-white "><?=substr($project_content, 0, 300)?></p>
                                <img src="images/<?=$project_image?>" alt="">
                            </div>
                        </div>
                        <?php } ?>
                        <div class="carousel-item">
                            <div class="c-1">
                                <p class="text-center bg-white">Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit.
                                    Exercitationem nulla, suscipit facere quidem deleniti neque error maiores
                                    quod eligendi hic soluta dolore, repellendus vero ut placeat quasi nam
                                    tempore nemo
                                    maiores quod eligendi hic soluta dolore, repellendus vero ut placeat quasi
                                    nam tempore nemo.</p>
                                <img src="images/Rectangle_4.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#karusel"
                        data-bs-slide="prev">
                    <span class="fas fa-chevron-left"></span>
                    <span class="visually-hidden"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#karusel"
                        data-bs-slide="next">
                    <span class="fas fa-chevron-right"></span>
                    <span class="visually-hidden"></span>
                </button>
            </div>
        </div>
    </div>
    <div class="row section_B position-relative">
        <div class="col-lg-8"></div>
        <div class="col-lg-4 backColor"></div>
        <div class="col-lg-12 position-absolute">
            <div class="row align-items-center">
                <div class="col-lg-7 offset-2">
                    <h2>Новости</h2>
                    <p>Актульные события</p>
                </div>
                <div class="col-lg-3">
                    <button class="btn offset-1">
                        Все новости
                    </button>
                </div>
            </div>
            <div class="row card_build">
                <div class="col-lg-9 d-flex justify-content-around offset-2">
                    <?php
                    $query = "SELECT * FROM news LIMIT 3";
                    $select_news = mysqli_query($connection, $query);

                    if(!$select_news){
                        die('QUERY FAILED' . mysqli_error($connection));
                    }

                    while($row = mysqli_fetch_assoc($select_news)){
                        $news_id =$row['news_id'];
                        $news_title = $row['news_title'];
                        $news_image = $row['news_image'];
                        $news_content = $row['news_content'];
                        $news_date = $row['news_date'];

                        ?>
                        <div class="card" style="width: 16rem;">

                            <img src="images/<?=$news_image?>" class="card-img-top" alt="">
                            <div class="card-body">
                                <p class="mb-1"><?=$news_date?></p>
                                <h5 class="card-title"><?=$news_title?></h5>
                                <p class="card-text"><?=substr($news_content, 0, 200)?></p>
                                <a href="#" class="btn  stretched-link">Подробнее</a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

    <?php include "includes/footer.php" ?>
