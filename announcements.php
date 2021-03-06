<?php
session_start();

$is_secure = true;

$page_name = "index";

require_once "dbms/utils.php";

require_once "modules/header_prefixes.php";

require_once "langs/lang_global.php";

require_once "langs/lang_announcements.php";
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

        h4.sec-h4 {
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
            <section class="pad-tb-24" id="hybrid">
                <div class="pad-5-per">
                    <img src="announcements/hybrid.jpg" class="img-full">
                    <h4 class="sec-h4"><?php echo($lang_announcements["hybrid_baslik"][$pref_lang]); ?></h4>
                    <?php echo($lang_announcements["hybrid"][$pref_lang]); ?>
                </div>
                <div class="clear-float"></div>
            </section>
            <section class="pad-tb-24" id="konser">
                <div class="pad-5-per">
                    <img src="announcements/konser.jpg" class="img-full">
                    <h4 class="sec-h4"><?php echo($lang_announcements["konser_baslik"][$pref_lang]); ?></h4>
                    <?php echo($lang_announcements["konser"][$pref_lang]); ?>
                </div>
                <div class="clear-float"></div>
            </section>
            <section class="pad-tb-24" id="bas??ndan">
                <div class="pad-5-per">
                    <img src="announcements/bas??ndan.jpg" class="img-full">
                    <h4 class="sec-h4"><?php echo($lang_announcements["bas??ndan_baslik"][$pref_lang]); ?></h4>
                    <?php echo($lang_announcements["bas??ndan"][$pref_lang]); ?>
                </div>
                <div class="clear-float"></div>
            </section>
            <section class="pad-tb-24" id="iklimsura">
                <div class="pad-5-per">
                    <img src="announcements/iklimsura.jpg" class="img-full">
                    <h4 class="sec-h4"><?php echo($lang_announcements["iklim_sura_baslik"][$pref_lang]); ?></h4>
                    <?php echo($lang_announcements["iklim_sura"][$pref_lang]); ?>
                </div>
                <div class="clear-float"></div>
            </section>
            <section class="pad-tb-24" id="bilgilendirme_ziyaret">
                <div class="pad-5-per">
                    <img src="announcements/ziyaretler.jpeg" class="img-full">
                    <h4 class="sec-h4"><?php echo($lang_announcements["bilgilendirme_ziyaret_baslik"][$pref_lang]); ?></h4>
                    <?php echo($lang_announcements["bilgilendirme_ziyaret"][$pref_lang]); ?>
                </div>
                <div class="clear-float"></div>
            </section>
            <section class="pad-tb-24" id="ilk_toplanti">
                <div class="pad-5-per">
                    <img src="announcements/ilk toplanti.jpg" class="img-full">
                    <h4 class="sec-h4"><?php echo($lang_announcements["ilk_toplanti_baslik"][$pref_lang]); ?></h4>
                    <?php echo($lang_announcements["ilk_toplanti"][$pref_lang]); ?>
                </div>
                <div class="clear-float"></div>
            </section>
            <!-- Eof Icerik -->
        </div>
        <!-- Footer -->
        <?php require_once("modules/footer.php"); ?>
    </div>

    <script src="js/material.js"></script>
    <script>
        (function () {
            // auto run
        })();
    </script>
</body>

</html>