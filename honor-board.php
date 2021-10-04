<?php
session_start();

$is_secure = true;

$page_name = "honor-board";

require_once "dbms/utils.php";

require_once "modules/header_prefixes.php";

require_once "langs/lang_global.php";

require_once "langs/lang_boards.php";
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

            display: flex;

        }


        .cerceve {

            border-style: solid;

            border-width: 16px;

            border-color: #bbb;

            padding: 16px;

            margin-left: auto;

            margin-right: auto;

            display: inline-block;

        }


        h3.sec-h3 {

            margin-bottom: 18px;

        }


        h4.sec-h4 {

            font-size: 24px;

            margin: 16px auto;

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

        .w-50 {

            width: 50%;

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

                    <div class="cerceve" style="overflow-x:auto;">

                        <!-- Onur Kurulu -->

                        <h3 class="center-text sec-h3"><?php echo($lang_global["onur_kurulu"][$pref_lang]); ?></h3>

                        <table class="mdl-data-table">

                            <tbody>

                            <tr>

                                <td class="w-50"><p>Ali ÇELİK</p></td>

                                <td class="w-50"><p>Kütahya Valisi/Governor</p></td>

                            </tr>

                            <tr>

                                <td><p>Alim IŞIK</p></td>

                                <td><p>Kütahya Belediye Başkanı/Major</p></td>

                            </tr>

                            <tr>

                                <td><p>Prof. Dr. Sedat MURAT</p></td>

                                <td><p>Çanakkale Onsekiz Mart Üniversitesi Rektörü/Rector</p></td>

                            </tr>

                            <tr>

                                <td><p>Prof. Dr. Mehmet KARAKAŞ</p></td>

                                <td><p>Afyon Kocatepe Üniversitesi Rektörü/Rector</p></td>

                            </tr>

                            <tr>

                                <td><p>Prof. Dr. Kazım UYSAL</p></td>

                                <td><p>Dumlupınar Üniversitesi Rektörü/Rector</p></td>

                            </tr>

                            <tr>

                                <td><p>Prof. Dr. Vural KAVUNCU</p></td>

                                <td><p>Kütahya Sağlık Bilimleri Üniversitesi Rektörü/Rector</p></td>

                            </tr>

                            <tr>

                                <td><p>Mustafa Kemal ALTINSOY</p></td>

                                <td><p>Kütahya Güzel Sanatlar Derneği Başkanı/The President of Association</p></td>

                            </tr>

                            <tr>

                                <td><p>Mustafa HİSARLI</p></td>

                                <td><p>Yüksek Mimar-TRT Sanatçısı/Architect-TRT Performer</p></td>

                            </tr>

                            <tr>

                                <td><p>Nihat DELEN</p></td>

                                <td><p>İşadamı/Businessman</p></td>

                            </tr>

                            <tr>

                                <td><p>İsmet ÇATIK</p></td>

                                <td><p>İşadamı/Businessman</p></td>

                            </tr>

                            </tbody>

                        </table>


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