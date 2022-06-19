<?php
session_start();
$is_secure = true;
$page_name = "index";
require_once "utils.php";
require_once "header_prefixes.php";
require_once "lang_global.php";
require_once "lang_index.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once("header_includes.php"); ?>
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
                                Müzik ve İklim / Music and Climate
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
                                Hisarlı Ahmet Sempozyumu
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
                                Hisarlı Ahmet
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

            <!-- Konusmacilar -->
            <section class="pad-tb-24">
                <h3 class="center-text sec-h3"><?php echo($lang_index["davetli_konusmacilar"][$pref_lang]); ?></h3>
                <div class="mdl-grid" style="justify-content: center">
                    <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--6-col-phone">
                        <div class="mdl-card mdl-shadow--2dp person-card"
                             style="background-image: url('img/people/ihsancicek.jpg')">
                            <div class="mdl-card__actions">İhsan Çiçek</div>
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

                            <div class="mdl-card__actions">Lilian Maria TONELLA TÜZÜN</div>

                        </div>
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

            <!-- Afiş -->
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

            <!-- Teşekkürler -->
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

<script src="../js/material.js"></script>
</body>
</html>