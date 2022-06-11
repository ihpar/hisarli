<?php
session_start();

$is_secure = true;

$page_name = "symposium-gallery";

require_once "dbms/utils.php";

require_once "modules/header_prefixes.php";

require_once "langs/lang_global.php";

require_once "langs/lang_symposium_gallery.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once("modules/header_includes.php"); ?>
    <link rel="stylesheet" href="css/splide.min.css">

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
                    <div class="cerceve">
                        <h3 class="center-text sec-h3"><?php echo($lang_symposium_gallery["galeri"][$pref_lang]); ?></h3>
                        <?php
                        $path = "img/symposium_gallery/";

                        // Bu alana resimler ve başlıkları eklenmelidir.
                        // Eğer başlık yok ise "text" => "" şeklinde boş bırakılmalıdır.
                        $images = [
                            ["img" => "gallery_1.jpeg", "text" => ["en" => "Hello", "tr" => "Merhaba"]],
                            ["img" => "gallery_2.jpeg", "text" => ""],
                            ["img" => "gallery_1.jpeg", "text" => ["en" => "Howdy?", "tr" => "Naber?"]]
                        ];
                        // aşağıdaki kodları değiştirmeyiniz.
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

            <!-- Eof Icerik -->
        </div>

        <!-- Footer -->
        <?php require_once("modules/footer.php"); ?>

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