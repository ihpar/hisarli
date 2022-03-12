<?php
session_start();

$is_secure = true;

$page_name = "index";

require_once "dbms/utils.php";

require_once "modules/header_prefixes.php";

require_once "langs/lang_global.php";

require_once "langs/lang_biographies.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once("modules/header_includes.php"); ?>
    <style type="text/css">
        .img-full {
            float: left;
            width: 25%;
            margin-right: 16px;
        }

        .pad-5-per {
            padding: 0 5%;
            text-align: justify;
            margin-left: auto;
            margin-right: auto;
            max-width: 3000px;
        }

        h3.sec-h3 {
            margin-bottom: 18px;
        }

        .grey-bg {
            background-color: #f2f4f7;
        }

        .clear-float {
            clear: both;
        }

        @media screen and (max-width: 550px) {
            .img-full {
                width: 100%;
            }

        }
    </style>
</head>

<body>
<div class="mdl-layout">
    <!-- Navigation -->
    <?php require_once("modules/navigation.php"); ?>
    <!--Eof Navigation -->

    <div class="mdl-layout__content" style="display: flex; flex-direction: column">
        <div style="flex-grow: 1">
            <!-- Banner -->
            <?php require_once("modules/banner.php"); ?>

            <!-- Icerik -->

            <!--
            <section class="pad-tb-24" id="nadja">
                <div class="pad-5-per">
                    <img src="img/people/nadja.png" class="img-full">
                    <h3 class="sec-h3">Nadja Wallaszkovits</h3>
                    <?php echo($lang_biographies["Nadja_Wallaszkovits_Bio"][$pref_lang]); ?>
                </div>
                <div class="clear-float"></div>
            </section>
            -->

            <!--
            <section class="pad-tb-24 grey-bg" id="johannes">
                <div class="pad-5-per">
                    <img src="img/people/johannes.png" class="img-full">
                    <h3 class="sec-h3">Johannes Kretz</h3>
                    <?php echo($lang_biographies["Johannes_Kretz_Bio"][$pref_lang]); ?>
                </div>
                <div class="clear-float"></div>
            </section>
            -->
            
            <section class="pad-tb-24" id="allen">
                <div class="pad-5-per">
                    <img src="img/people/allen.jpg" class="img-full">
                    <h3 class="sec-h3">Aaron S. Allen</h3>
                    <?php echo($lang_biographies["Aaron_Allen_Bio"][$pref_lang]); ?>
                </div>

                <div class="clear-float"></div>
                <div class="center-text sec-h3">
                    <a href="#top"
                       class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored">
                        <i class="material-icons">arrow_upward</i>
                    </a>
                </div>
            </section>

            <section class="pad-tb-24 grey-bg" id="oksana">
                <div class="pad-5-per">
                    <img src="img/people/oksana.jpg" class="img-full">
                    <h3 class="sec-h3">Oksana Dobzhanskaya</h3>
                    <?php echo($lang_biographies["Oksana_Bio"][$pref_lang]); ?>
                </div>
                <div class="clear-float"></div>
                <div class="center-text sec-h3">
                    <a href="#top"
                       class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored">
                        <i class="material-icons">arrow_upward</i>
                    </a>
                </div>
            </section>

            <section class="pad-tb-24" id="thiago">
                <div class="pad-5-per">
                    <img src="img/people/thiago.jpg" class="img-full">
                    <h3 class="sec-h3">Thiago Cury</h3>
                    <?php echo($lang_biographies["Thiago_Bio"][$pref_lang]); ?>
                </div>
                <div class="clear-float"></div>
                <div class="center-text sec-h3">
                    <a href="#top"
                       class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored">
                        <i class="material-icons">arrow_upward</i>
                    </a>
                </div>
            </section>

            <section class="pad-tb-24 grey-bg" id="cohen">
                <div class="pad-5-per">
                    <img src="img/people/andreacohen.jpg" class="img-full">
                    <h3 class="sec-h3">Andrea Cohen</h3>
                    <?php echo($lang_biographies["Cohen_Bio"][$pref_lang]); ?>
                </div>
                <div class="clear-float"></div>
                <div class="center-text sec-h3">
                    <a href="#top"
                       class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored">
                        <i class="material-icons">arrow_upward</i>
                    </a>
                </div>
            </section>

            <section class="pad-tb-24" id="marisa">
                <div class="pad-5-per">
                    <img src="img/people/marisa.jpg" class="img-full">
                    <h3 class="sec-h3">Marisa Fonterrada</h3>
                    <?php echo($lang_biographies["Marisa_Bio"][$pref_lang]); ?>
                </div>
                <div class="clear-float"></div>
                <div class="center-text sec-h3">
                    <a href="#top"
                       class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored">
                        <i class="material-icons">arrow_upward</i>
                    </a>
                </div>
            </section>

            <section class="pad-tb-24 grey-bg" id="ihsan">
                <div class="pad-5-per">
                    <img src="img/people/ihsancicek.jpg" class="img-full">
                    <h3 class="sec-h3">İhsan Çiçek</h3>
                    <?php echo($lang_biographies["Ihsan_Bio"][$pref_lang]); ?>
                </div>
                <div class="clear-float"></div>
                <div class="center-text sec-h3">
                    <a href="#top"
                       class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored">
                        <i class="material-icons">arrow_upward</i>
                    </a>
                </div>
            </section>

            <section class="pad-tb-24" id="ekinci">
                <div class="pad-5-per">
                    <img src="img/people/ekinci.jpg" class="img-full">
                    <h3 class="sec-h3">Abdurrahman Ekinci</h3>
                    <?php echo($lang_biographies["Ekinci_Bio"][$pref_lang]); ?>
                </div>
                <div class="clear-float"></div>
                <div class="center-text sec-h3">
                    <a href="#top"
                       class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored">
                        <i class="material-icons">arrow_upward</i>
                    </a>
                </div>
            </section>

            <section class="pad-tb-24 grey-bg" id="lilian">
                <div class="pad-5-per">
                    <img src="img/people/lilian.jpg" class="img-full">
                    <h3 class="sec-h3">Lilian Maria Tonella Tüzün</h3>
                    <?php echo($lang_biographies["Lilian_Bio"][$pref_lang]); ?>
                </div>
                <div class="clear-float"></div>

            </section>

            <!-- Eof Icerik -->
        </div>
        <!-- Footer -->
        <?php require_once("modules/footer.php"); ?>
    </div>
</div>

<script src="js/material.js"></script>
<script>
    (function () {
        // auto run
    })();
</script>
</body>

</html>