<?php include "includes/header.php";
include "includes/db.php";
?>
<body>

    <div class="container">
        <header>
            <div class="row banner">
                <div class="col-lg-12">
                    <div class="row p-0">
                        <div class="col-lg-12 Navbar p-0 ">
                            <nav class="navbar navbar-expand-lg m-0 h-100">
                                <div class="container-fluid  ">
                                    <div class="col-lg-3 text-center">
                                        <a class="navbar-brand" href="#">
                                            <img src="images/first-screen__logo.png">
                                        </a>
                                    </div>
                                    <div class="navbar-collapse col-lg-6">
                                        <ul class="navbar-nav mb-2 mb-lg-0 p-2">
                                            <li class="nav-item">
                                                <a class="nav-link active" aria-current="page" href="index.php">Главная</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="admin/index.php">О Компании</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" aria-current="page" href="#">Решения</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Реализованные проекты</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Контакты</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-3 text-white text-center">
                                        <p class="m-0" style="font-size: 12px;">+7(912)383-70-70</p>
                                        <p class="m-0" style="font-size: 12px;">cryogas@cryogas.ru</p>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <div class="row p-0">
                        <div class="col-lg-12 p-0 border border-white" style="height: 500px">
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section>
            <div class="row section_A position-relative">
                <div class="col-lg-8 backColor"></div>
                <div class="col-lg-4 "></div>
                <div class="col-lg-8 offset-4 position-absolute">
                    <div class="carousel slide carousel-fade" id="karusel" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="box">
                                <div class="carousel-item active">
                                    <div class="c-1">
                                        <p class="text-center bg-white w-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem nulla, suscipit facere quidem.</p>
                                        <img src="images/Rectangle_4.png" alt="">
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="c-1">
                                        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem nulla, suscipit facere quidem deleniti neque error maiores quod eligendi hic soluta dolore, repellendus vero ut placeat quasi nam tempore nemo
                                            maiores quod eligendi hic soluta dolore, repellendus vero ut placeat quasi nam tempore nemo.</p>
                                        <img src="images/Rectangle_4.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#karusel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden"></span>
                          </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#karusel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Следующий</span>
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


                        <div class="col-lg-3 offset-2">
                            <?php
                            $query = "SELECT * FROM news";
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
