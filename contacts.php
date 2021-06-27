<?php include "includes/header.php"?>


<div class="container-fluid">
    <div class="w-100 d-flex justify-content-center flex-column align-items-center ">
        <h1> Контакты</h1>
        <div class="my-2" style="width: 250px;border-top: 1px solid #000;"></div>
    </div>

    <div class="row contact_me">
        <div class="col-6 offset-2 p-5">
            <h4 class="mb-4">
                +7 (812) 383-70-70
                <a href="">
                    <span class="fas fa-envelope fa-sm" style="margin-left: 10px;"></span> cryogas@cryogas.ru

                </a>
            </h4>
            <div class="mb-3">
                <p class="m-0 color_grey">
                    Служба внутренней безопасности
                </p>
                <p class="m-0">
                    +7 (812) 383-70-70 <a href="">cryogas@cryogas.ru</a>
                </p>
            </div>
            <div class="mb-3">
                <p class="m-0 color_grey">
                    Офис
                </p>
                <p class="m-0">
                    Россия, 199106, г. Санкт-Петербург, Большой проспект В.О., 80 лит. А, БЦ Сенатор
                </p>
            </div>
            <div class="mb-3">
                <p class="m-0 color_grey">
                    Почтовый адрес
                </p>
                <p class="m-0">
                    Россия, 199106, г. Санкт-Петербург, Большой проспект В.О., 80 лит. А, БЦ Сенатор
                </p>
            </div>
            <div class="mb-3">
                <p class="m-0 color_grey">
                    Реквизиты
                </p>
                <p class="m-0">
                    КПП 780101001, ИНН 7805298382, БИК 044030827, Р/счет 40702810300000000990 в филиале банка Газпромбанк (АО) «Северо-Западный»
                </p>
            </div>
            <h4 class="my-4">Адреса заводов</h4>
            <div class="mb-3">
                <p class="m-0 color_grey">
                    Кингисепп
                </p>
                <p class="m-0">
                    Россия, 198095, г. Кингисепп, трасса Р60, деревня Малый Луцк</p>
            </div>
            <div class="mb-3">
                <p class="m-0 color_grey">
                    Псков
                </p>
                <p class="m-0">
                    Россия, 180006, г. Псков, Пожиговская ул., 21</p>
            </div>
            <div class="mb-3">
                <p class="m-0 color_grey">
                    Калининград
                </p>
                <p class="m-0">
                    236029, Калининградская область, г.о. Гурьевский, п. Кутузово, ул. Рудницкая, сооружение 1
                </p>
            </div>
        </div>
        <div class="col-3  py-5" style="padding-right: 20px;">
            <?php
            // the message
            $msg = "First line of text\nSecond line of text";

            // use wordwrap() if lines are longer than 70 characters
            $msg = wordwrap($msg,70);

            // send email
            mail("abdugaffarov23@gmail.com","My subject",$msg);
            ?>
            <form>
                <div class="contact_input">
                    <label class="my-2" id='in-1'>Имя</label>
                    <input class="form-control" id='in-1' type="text">
                </div>
                <div class="contact_input">
                    <label class="my-2" id='in-1'>Почта</label>
                    <input class="form-control" id='in-1' type="email">
                </div>
                <div class="contact_input">
                    <label class="my-2" id='in-1'>Телефон (необязательно)</label>
                    <input class="form-control" id='in-1' type="phone">
                </div>
                <div class="contact_input">
                    <label class="my-2" id='in-1'>Комментарий</label>
                    <textarea rows="8" cols="20">
                        </textarea>
                </div>
                <input type="submit" value="Отправить письмо" class="w-100 mt-4 p-3 text-white  btn btn-info" style="border-radius: 0px;font-weight: bold; letter-spacing: 1px;background-color: #2592f9;">
            </form>

        </div>
    </div>
</div>



<?php include "includes/footer.php"?>
