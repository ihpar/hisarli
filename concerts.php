<?php
session_start();

$is_secure = true;

$page_name = "concerts";

require_once "dbms/utils.php";

require_once "modules/header_prefixes.php";

require_once "langs/lang_global.php";

require_once "langs/lang_concerts.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once("modules/header_includes.php"); ?>
    <style type="text/css">
        .pad-10-per {
            padding: 0 10%;
            text-align: justify;
            margin-left: auto;
            margin-right: auto;
            max-width: 3000px;
        }

        .cerceve {
            border-style: solid;
            border-width: 16px;
            border-color: #bbb;
            padding: 16px;
        }

        h3.sec-h3 {
            margin-bottom: 18px;
        }

        h4.sec-h4 {
            font-size: 14px;
            margin-bottom: 16px;
        }

        img.img-full {
            width: 100%;
        }

        @media (max-width: 839px) {
            .pad-10-per {
                padding: 0 24px;
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
            <section class="pad-tb-24">
                <div class="pad-10-per">
                    <h3 class="center-text sec-h3"><?php echo($lang_concerts["konserler"][$pref_lang]); ?></h3>
                    <div class="cerceve">
                        <?php if ($pref_lang === "en"): ?>
                            <p>Concerts</p>
                            <iframe src="img/concerts/katalog.pdf" width="100%" height="750px"></iframe>
                        <?php else: ?>
                            <p>Konserler</p>
                            <iframe src="img/concerts/katalog.pdf" width="100%" height="750px"></iframe>
                        <?php endif; ?>
                    </div>
                </div>
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