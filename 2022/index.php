<?php
session_start();
$is_secure = true;
$page_name = "index";
require_once "utils.php";
require_once "header_prefixes.php";
require_once "lang_global.php";
require_once "lang_index.php";
require_once "lang_symposium_gallery.php";
require_once "lang_program.php";
require_once "lang_abstracts_book.php";
require_once "lang_calendar.php";
require_once "lang_boards.php";
require_once "lang_scientific-committee.php";
require_once "lang_panel.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once("header_includes.php"); ?>
    <link rel="stylesheet" href="css/splide.min.css">
    <style type="text/css">
        .img-afis {
            width: 100%;
        }

        .mdl-list__item {
            font-size: 15px;
            line-height: 20px;
        }

        .mdl-list__item-icon, .mdl-list__item-icon.material-icons {
            width: 20px;
            height: 20px;
        }

        .custom-shape-divider-top-1 {
            top: 0;
            left: 0;
            width: 100%;
            overflow: hidden;
            line-height: 0;
        }

        .custom-shape-divider-top-1 svg {
            position: relative;
            display: block;
            width: calc(120% + 2px);
            height: 30px;
        }

        .custom-shape-divider-top-1 .shape-fill {
            fill: #F2F4F7;
        }

        .custom-shape-divider-top-2 .shape-fill {
            fill: #fff;
        }

        .custom-shape-divider-bottom-2 {
            bottom: 0;
            left: 0;
            width: 100%;
            overflow: hidden;
            line-height: 0;
            transform: rotate(180deg);
        }

        .custom-shape-divider-bottom-2 svg {
            position: relative;
            display: block;
            width: calc(120% + 2px);
            height: 30px;
            transform: rotateY(180deg);
        }

        .custom-shape-divider-bottom-2 .shape-fill {
            fill: #F2F4F7;
        }

        @media screen and (min-width: 768px) {
            .img-afis {
                width: 80%;
            }
        }

        @media screen and (min-width: 1024px) {
            .img-afis {
                width: 75%;
            }
        }

        @media screen and (min-width: 1200px) {
            .img-afis {
                width: 50%;
            }
        }


        @media screen and (min-width: 1800px) {
            .img-afis {
                width: 40%;
            }
        }

        .pad-10-per {
            padding: 0 10%;
            text-align: justify;
            margin-left: auto;
            margin-right: auto;
            max-width: 3000px;
        }

        h3.sec-h3 {
            margin-bottom: 18px;
        }

        h4.sec-h4 {
            font-size: 14px;
            margin-bottom: 16px;
        }

        @media (max-width: 839px) {
            .pad-10-per {
                padding: 0 24px;
            }
        }

        .image-text {
            background-color: rgba(0, 0, 0, 0.7);
            color: #fff;
            position: absolute;
            bottom: 0;
            width: 100%;
            padding: 12px;
        }

        table.mdl-data-table tr td:first-child {
            text-align: right;
        }

        table.mdl-data-table tr td:last-child {
            text-align: left;
        }

        .mdl-data-table {
            margin: 0 auto;
            width: 100%;
            white-space: initial;
        }

        .card-image {
            background-color: rgba(0, 0, 10, 0.1);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center 0;
            width: 100%;
            height: 0;
            padding-bottom: 110%;
        }

        .card-footer {
            background-color: rgba(0, 0, 0, 0.8);
            color: #fff;
            text-align: center;
            position: absolute;
            bottom: 0;
            padding: 10px;
            width: 100%;
            box-sizing: border-box;
        }

        .speaker-card {
            background-color: rgba(0, 0, 10, 0.1);
            width: 100%;
        }

        .speaker-name {
            color: #ffffff;
            text-decoration: none;
            font-size: 18px;
        }

        .conf-title {
            display: block;
            font-size: 16px;
            margin: 4px;
        }

        .conf-date {
            display: block;
            font-size: 14px;
        }
    </style>
</head>
<body>
<div class="mdl-layout">
    <!-- Navigation -->
    <?php require_once("navigation.php"); ?>
    <!--Eof Navigation -->
    <div class="mdl-layout__content" style="display: flex; flex-direction: column">
        <div style="flex-grow: 1">
            <!-- Banner -->
            <?php require_once("banner.php"); ?>

            <!-- Videolar -->
            <section class="mdl-layout" style="background-color: #f2f4f7">
                <!--<h3 class="center-text sec-h3"><?php echo($lang_index["videolar"][$pref_lang]); ?></h3>-->
                <div class="mdl-grid" style="justify-content: center">
                    <!-- Video 1 -->
                    <div class="mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--6-col-phone">
                        <div class="mdl-shadow--2dp">
                            <video width="100%" controls>
                                <source src="img/teasers/teaser1.mp4" type="video/mp4">
                            </video>
                            <!--<div style="padding: 8px; text-align: center;">
                                M??zik ve ??klim / Music and Climate
                            </div>-->
                        </div>
                    </div>
                    <!-- Video 2 -->
                    <div class="mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--6-col-phone">
                        <div class="mdl-shadow--2dp">
                            <video width="100%" controls>
                                <source src="img/teasers/teaser2.mp4" type="video/mp4">
                            </video>
                            <!--<div style="padding: 8px; text-align: center;">
                                Hisarl?? Ahmet Sempozyumu
                            </div>-->
                        </div>
                    </div>
                    <!-- Video 3 -->
                    <div class="mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--6-col-phone">
                        <div class="mdl-shadow--2dp">
                            <video width="100%" controls>
                                <source src="img/teasers/teaser3.mp4" type="video/mp4">
                            </video>
                            <!--<div style="padding: 8px; text-align: center;">
                                Hisarl?? Ahmet
                            </div>-->
                        </div>
                    </div>
                </div>
            </section>

            <!-- Amac ve Kapsam -->
            <section class="pad-tb-24" style="background-color: #f2f4f7">
                <div class="mdl-grid">
                    <div class="mdl-cell mdl-cell--6-col mdl-cell--12-col-tablet sec-24-lr">
                        <!-- Amac ve Kapsam -->
                        <h3 class="sec-h3"><?php echo($lang_index["amac_ve_kapsam"][$pref_lang]); ?></h3>
                        <div style="text-align: justify">
                            <?php echo($lang_index["amac_ve_kapsam_metin"][$pref_lang]); ?>
                        </div>
                    </div>
                    <div class="mdl-cell mdl-cell--6-col mdl-cell--12-col-tablet sec-24-lr sec-0-r">
                        <h3 class="sec-h3"><?php echo($lang_index["alt_basliklar"][$pref_lang]); ?></h3>
                        <!-- Alt Basliklar -->
                        <div class="mdl-grid no-pad">
                            <div class="mdl-cell mdl-cell--6-col mdl-cell--12-col-tablet">
                                <ul class="mdl-list no-pad mr-16">
                                    <?php

                                    $sub_categories = $lang_index["alt_basliklar_liste"][$pref_lang];

                                    $sub_category_count = count($sub_categories);

                                    $half_count = ceil($sub_category_count / 2);

                                    for ($i = 0; $i < $half_count; $i++) { ?>
                                        <li class="mdl-list__item">

                                            <span class="mdl-list__item-primary-content">

                                              <i class="material-icons mdl-list__item-icon">category</i>

                                              <?php echo($sub_categories[$i]); ?>

                                            </span>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                            <div class="mdl-cell mdl-cell--6-col mdl-cell--12-col-tablet">
                                <ul class="mdl-list no-pad mr-16">
                                    <?php

                                    for ($i = $half_count; $i < $sub_category_count; $i++) { ?>
                                        <li class="mdl-list__item">

                                            <span class="mdl-list__item-primary-content">

                                              <i class="material-icons mdl-list__item-icon">category</i>

                                              <?php echo($sub_categories[$i]); ?>

                                            </span>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                        <!-- Eof Alt Basliklar -->
                    </div>
                </div>
            </section>

            <!-- divider -->
            <div class="custom-shape-divider-top-1">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                     preserveAspectRatio="none">
                    <path
                            d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
                            class="shape-fill"></path>
                </svg>
            </div>

            <!-- Galeri -->
            <section class="pad-tb-24">
                <div class="pad-10-per">
                    <div class="cerceve">
                        <h3 class="center-text sec-h3"><?php echo($lang_symposium_gallery["galeri"][$pref_lang]); ?></h3>
                        <?php
                        $path = "img/symposium_gallery/";

                        // Bu alana resimler ve ba??l??klar?? eklenmelidir.
                        // E??er ba??l??k yok ise "text" => "" ??eklinde bo?? b??rak??lmal??d??r.
                        $images = [
                            ["img" => "gallery_1.jpeg", "text" => ["en" => "Visiting the symposium with 19 Rectors accompanying him, Y??K President Prof. Dr. Erol ??ZVAR, together with the symposium team in the hall...", "tr" => "Beraberindeki 19 Rekt??rle sempozyumu ziyaret eden Y??K Ba??kan?? Prof. Dr. Erol ??ZVAR, salondaki sempozyum ekibiyle birlikte..."]],
                            ["img" => "gallery_2.jpeg", "text" => ["en" => "The presentation ceremony of the Paper Kemenche made by Ceyhun Demir (at the left), to the President of Council of Turkey's Higher Education", "tr" => "??OM?? lisans??st?? ????rencisi Ceyhun Demir'in (sol ba??ta) yapt?????? ka????ttan kemen??enin ??OM?? Rekt??r?? taraf??ndan (soldan ikinci) Y??K Ba??kan??na takdimi"]],
                            ["img" => "gallery_3.jpeg", "text" => ["en" => "Opening Ceremony of The Symposium", "tr" => "Sempozyum a????l???? t??reninden"]],
                            ["img" => "gallery_4.jpeg", "text" => ["en" => "From the speaking at the symposium opening ceremony (Mr. Ali ??EL??K, Governer of Kutahya)", "tr" => "Sempozyum a????l???? t??reni konu??malar??ndan (K??tahya Valisi Sn. Ali ??EL??K)"]],
                            ["img" => "gallery_5.jpeg", "text" => ["en" => "The Concert of Symposium Opening Ceremony (Sedat ????lg??n (Baglama) - ??lter Cebeci (Guitar))", "tr" => "Sempozyum a????l???? t??reni konseri (Sedat ????lg??n (Ba??lama) - ??lter Cebeci (Gitar))"]],
                            ["img" => "gallery_6.jpeg", "text" => ["en" => "Background of Broadcast for Symposium Panels :) ", "tr" => "T??m panel ve konferanslar??n yay??n arka plan?? :)"]],
                            ["img" => "gallery_7.jpeg", "text" => ["en" => "Secretariat", "tr" => "Sekreterya ziyareti, denetimi :)"]],
                            ["img" => "gallery_8.jpeg", "text" => ["en" => "At the bus station to see the chairman of the symposium off with a ceremony :))", "tr" => "Bilim kurulu ba??kan??m??z?? t??renle yolcu ederken :))"]],
                            ["img" => "gallery_9.jpeg", "text" => ["en" => "A photograph from presentations (session 15)", "tr" => "Sunumlardan bir kare (Oturum 15)"]],
                            ["img" => "gallery_10.jpeg", "text" => ["en" => "Mr. Erkan Tarhan, Deputy Director General of Fine Arts of the Ministry of Culture and Tourism, is together with the students of K??tahya Ahmet Yakupo??lu Fine Arts High School, who participated in the symposium exhibition.", "tr" => "K??lt??r ve Turizm Bakanl?????? G??zel Sanatlar Genel M??d??r Yard??mc??s?? Erkan Tarhan, Sempozyum sergisine kat??lan K??tahya Ahmet Yakupo??lu GSL ????renci ve ????retmenleriyle..."]],
                            ["img" => "gallery_11.jpeg", "text" => ["en" => "K??tahya Mayor, Mr. Alim I????k (left, standing), holding the hand of Hisarl?? Ahmet's son Mustafa Hisarl?? and Mustafa's wife", "tr" => "K??tahya Belediye Ba??kan?? Sn. Prof. Dr. Alim I????k (solda, ayakta), Hisarl?? Ahmet'in o??lu Mustafa Hisarl?? ve Mustafa Hisarl??'n??n e??iyle..."]]


                        ];
                        // a??a????daki kodlar?? de??i??tirmeyiniz.
                        ?>
                        <section class="splide" id="main-slider">
                            <div class="splide__track">
                                <ul class="splide__list">
                                    <?php foreach ($images as $gallery_img) { ?>
                                        <li class="splide__slide">
                                            <div
                                                    style="text-align: center; height: inherit; background-color: #031633;">
                                                <img style="height: 100%;"
                                                     src="<?php echo($path . $gallery_img["img"]); ?>">
                                                <?php if (!empty($gallery_img["text"])) { ?>
                                                    <div class="image-text">
                                                        <?php echo $gallery_img["text"][$pref_lang]; ?>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </section>
                        <div style="height: 20px;"></div>
                        <section class="splide" id="thumbnail-slider">
                            <div class="splide__track">
                                <ul class="splide__list">
                                    <?php
                                    foreach ($images as $gallery_img_thumb) {
                                        ?>
                                        <li class="splide__slide">
                                            <div
                                                    style="text-align: center; height: 72px; background-image: url(<?php echo($path . $gallery_img_thumb["img"]); ?>); background-size: contain; background-repeat: no-repeat; background-position: center; background-color: #073470">
                                            </div>
                                        </li>
                                        <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                        </section>
                    </div>
                </div>
            </section>

            <!-- divider -->
            <div class="custom-shape-divider-bottom-2">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                     preserveAspectRatio="none">
                    <path
                            d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
                            class="shape-fill"></path>
                </svg>
            </div>

            <!-- Program -->
            <div class="pad-10-per" style="overflow-x: auto; background-color: #f2f4f7;">
                <h3 class="center-text sec-h3"><?php echo($lang_program["program"][$pref_lang]); ?></h3>
                <p style="text-align: center;">
                    <?php echo($lang_program["program_detay"][$pref_lang]); ?>
                </p>
            </div>

            <!-- Ozet Kitabi -->
            <div class="pad-10-per" style="overflow-x: auto; background-color: #f2f4f7">
                <h3 class="center-text sec-h3"><?php echo($lang_abstracts_book["ozet_kitabi"][$pref_lang]); ?></h3>
                <p style="text-align: center;">
                    <?php echo($lang_abstracts_book["indirme_linki"][$pref_lang]); ?>
                </p>
            </div>

            <!-- Etkinlik takvimi -->
            <div class="pad-10-per" style="overflow-x: auto; background-color: #f2f4f7">
                <h3 class="center-text sec-h3"><?php echo($lang_calendar["takvim"][$pref_lang]); ?></h3>
                <p style="text-align: center;">
                    <?php echo($lang_calendar["takvim_indir"][$pref_lang]); ?>
                </p>
            </div>

            <!-- divider -->
            <div class="custom-shape-divider-top-1">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                     preserveAspectRatio="none">
                    <path
                            d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
                            class="shape-fill"></path>
                </svg>
            </div>

            <!-- Konusmacilar -->
            <section class="pad-tb-24">
                <!-- Davetli Konusmacilar -->
                <h3 class="center-text sec-h3"><?php echo($lang_index["davetli_konusmacilar"][$pref_lang]); ?></h3>
                <div class="mdl-grid" style="justify-content: center">
                    <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--6-col-phone">
                        <div class="mdl-card mdl-shadow--2dp person-card"
                             style="background-image: url('img/people/ihsancicek.jpg')">
                            <div class="mdl-card__actions">??hsan ??i??ek</div>
                        </div>
                    </div>
                    <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--6-col-phone">
                        <div class="mdl-card mdl-shadow--2dp person-card"
                             style="background-image: url('img/people/oksana.jpg')">
                            <div class="mdl-card__actions">Oksana Dobzhanskaya</div>
                        </div>
                    </div>
                    <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--6-col-phone">
                        <div class="mdl-card mdl-shadow--2dp person-card"
                             style="background-image: url('img/people/allen.jpg')">
                            <div class="mdl-card__actions">Aaron S. Allen</div>
                        </div>
                    </div>
                    <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--6-col-phone">
                        <div class="mdl-card mdl-shadow--2dp person-card"
                             style="background-image: url('img/people/ekinci.jpg')">
                            <div class="mdl-card__actions">Abdurrahman Ekinci</div>
                        </div>
                    </div>
                </div>
                <!-- Davetli Konusmacilar Panel -->
                <h3 class="center-text sec-h3"><?php echo($lang_panel["panel"][$pref_lang]); ?></h3>
                <div class="mdl-grid" style="justify-content: center">

                    <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--12-col-phone">
                        <div class="mdl-card mdl-shadow--2dp speaker-card">
                            <div class="card-image" style="background-image: url('img/people/banjunrong.jpg')"></div>
                            <div class="card-footer">
                                <span class="speaker-name">Ban JUNRONG</span>
                                <span class="conf-title">(chair)</span>
                                <span class="conf-date">School of Art of Aeronautics and Astronautics Nanjing University, China</span>
                            </div>
                        </div>
                    </div>

                    <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--12-col-phone">
                        <div class="mdl-card mdl-shadow--2dp speaker-card">
                            <div class="card-image" style="background-image: url('img/people/hangsu.jpg')"></div>
                            <div class="card-footer">
                                <span class="speaker-name">Hang SU</span>
                                <span class="conf-date">School of Art of Aeronautics and Astronautics Nanjing University, China</span>
                            </div>
                        </div>
                    </div>

                    <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--12-col-phone">
                        <div class="mdl-card mdl-shadow--2dp speaker-card">
                            <div class="card-image" style="background-image: url('img/people/wanzhonghua.jpg')"></div>
                            <div class="card-footer">
                                <span class="speaker-name">Wan ZHONGRU</span>
                                <span class="conf-date">South China Normal University, China</span>
                            </div>
                        </div>
                    </div>

                    <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--12-col-phone">
                        <div class="mdl-card mdl-shadow--2dp speaker-card">
                            <div class="card-image" style="background-image: url('img/people/marisa.jpg')"></div>
                            <div class="card-footer">
                                <span class="speaker-name">Marisa FONTERRADA</span>
                                <span class="conf-title">(chair)</span>
                                <span class="conf-date">Sao Paulo State University, Brazil</span>
                            </div>
                        </div>
                    </div>

                    <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--12-col-phone">
                        <div class="mdl-card mdl-shadow--2dp speaker-card">
                            <div class="card-image" style="background-image: url('img/people/andreacohen.jpg')"></div>
                            <div class="card-footer">
                                <span class="speaker-name">Andrea COHEN</span>
                                <span class="conf-date">Radio France, Argentina</span>
                            </div>
                        </div>
                    </div>

                    <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--12-col-phone">
                        <div class="mdl-card mdl-shadow--2dp speaker-card">
                            <div class="card-image" style="background-image: url('img/people/thiago.jpg')"></div>
                            <div class="card-footer">
                                <span class="speaker-name">Thiago CURY</span>
                                <span class="conf-date">Strange Music Festival Director, Brazil</span>
                            </div>
                        </div>
                    </div>

                    <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--12-col-phone">
                        <div class="mdl-card mdl-shadow--2dp speaker-card">
                            <div class="card-image" style="background-image: url('img/people/abdullah.png')"></div>
                            <div class="card-footer">
                                <span class="speaker-name">Abdullah Akat</span>
                                <span class="conf-title">(oturum ba??kan??)</span>
                                <span class="conf-date">??stanbul ??niversitesi</span>
                            </div>
                        </div>
                    </div>

                    <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--12-col-phone">
                        <div class="mdl-card mdl-shadow--2dp speaker-card">
                            <div class="card-image" style="background-image: url('img/people/akin.jpg')"></div>
                            <div class="card-footer">
                                <span class="speaker-name">Ak??n Oktav</span>
                                <span class="conf-date">Alanya Alaaddin Keykubat ??niversitesi</span>
                            </div>
                        </div>
                    </div>

                    <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--12-col-phone">
                        <div class="mdl-card mdl-shadow--2dp speaker-card">
                            <div class="card-image" style="background-image: url('img/people/alitan.jpg')"></div>
                            <div class="card-footer">
                                <span class="speaker-name">Ali Tan</span>
                                <span class="conf-date">??stanbul Medeniyet ??niversitesi</span>
                            </div>
                        </div>
                    </div>

                </div>
            </section>

            <!-- divider -->
            <div class="custom-shape-divider-bottom-2">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                     preserveAspectRatio="none">
                    <path
                            d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
                            class="shape-fill"></path>
                </svg>
            </div>

            <!-- Bilim Kurulu -->
            <section class="pad-tb-24" style="background-color: #f2f4f7">
                <h3 class="center-text sec-h3"><?php echo($lang_index["bilim_kurulu_baskani"][$pref_lang]); ?></h3>
                <div class="mdl-grid" style="justify-content: center">
                    <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--6-col-phone">
                        <div class="mdl-card mdl-shadow--2dp person-card"
                             style="background-image: url('img/people/lilian.jpg')">
                            <div class="mdl-card__actions">Lilian Maria TONELLA T??Z??N</div>
                        </div>
                    </div>
                </div>

                <div class="pad-10-per">
                    <div class="cerceve"
                         style="overflow-x:auto; display: flex; flex-direction: column; max-width: 768px; margin: 0 auto;">
                        <h3 class="center-text sec-h3"><?php echo($lang_global["bilim_kurulu"][$pref_lang]); ?></h3>
                        <!-- Bilim Kurulu -->
                        <table class="mdl-data-table">
                            <tbody>
                            <?php foreach ($lang_scientific_board["kurul"][$pref_lang] as $member) { ?>
                                <tr>
                                    <td>
                                        <p><?php echo($member[0]); ?></p>
                                    </td>
                                    <td>
                                        <p><?php echo($member[1]); ?></p>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>

            <!-- divider -->
            <div class="custom-shape-divider-top-1" style="background-color: #fff;">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                     preserveAspectRatio="none" style="width: 110%;">
                    <path
                            d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
                            class="shape-fill"></path>
                </svg>
            </div>

            <!-- Afi?? -->
            <section class="pad-tb-24" style="text-align: center; background-color: #fff;">
                <img src="img/banners/hisarli-12-afis.jpg" class="img-afis">
            </section>

            <!-- divider -->
            <div class="custom-shape-divider-bottom-2" style="background-color: #fff;">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                     preserveAspectRatio="none" style="fill: #f9fafc;">
                    <path
                            d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
                    ></path>
                </svg>
            </div>

            <!-- Te??ekk??rler -->
            <section class="pad-tb-24">
                <div class="pad-25-per">
                    <h3 class="center-text sec-h3"><?php echo($lang_index["katkilarinizdan_dolayi"][$pref_lang]); ?></h3>
                    <ul class="mdl-list center-text">
                        <?php

                        $tesekkurler = $lang_index["tesekkurler_liste"][$pref_lang];

                        for ($i = 0; $i < count($tesekkurler); $i++) {

                            ?>
                            <li class="mdl-list__item">
                                <span class="mdl-list__item-primary-content"><?php echo($tesekkurler[$i]); ?></span>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </section>
            <!-- Eof Icerik -->
        </div>
        <!-- Footer -->
        <?php require_once("footer.php"); ?>
    </div>
</div>
<script src="js/material.js"></script>
<script src="js/splide.min.js"></script>
<script>
    (function () {
        // auto run
        const main = new Splide('#main-slider', {
            type: 'fade',
            heightRatio: 0.6,
            pagination: false,
            arrows: false,
            cover: true,
        });

        const thumbnails = new Splide('#thumbnail-slider', {
            rewind: true,
            fixedWidth: 120,
            fixedHeight: 72,
            isNavigation: true,
            gap: 10,
            focus: 'center',
            pagination: false,
            cover: false,
            dragMinThreshold: {
                mouse: 4,
                touch: 10,
            },
            breakpoints: {
                640: {
                    fixedWidth: 66,
                    fixedHeight: 38,
                },
            },
        });

        main.sync(thumbnails);
        main.mount();
        thumbnails.mount();
        // eof auto
    })();
</script>
</body>
</html>