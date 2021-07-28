<?php

session_start();


$is_secure = true;


$page_name = "kgsd";


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

            <h3 class="center-text sec-h3"><?php echo($lang_boards["bilim_kurulu"][$pref_lang]); ?></h3>


            <!-- Bilim Kurulu -->

            <table class="mdl-data-table">

              <tbody>

              <tr>

                <td class="w-50">

                  <p>Abdullah AKAT (Başkan/Co-Chairman)</p>

                </td>

                <td class="w-50">

                  <p>İstanbul Üniversitesi</p>

                </td>

              </tr>

              <tr>

                <td>

                  <p>Cihan IŞIKHAN (Başkan/Co-Chairman)</p>

                </td>

                <td>

                  <p>Dokuz Eylül Üniversitesi</p>

                </td>

              </tr>

              <tr>

                <td>

                  <p> A. Bülent ALANER</p>

                </td>

                <td>

                  <p>Anadolu Üniversitesi</p>

                </td>

              </tr>

              <tr>

                <td>

                  <p>Andrea LODGE</p>

                </td>

                <td>

                  <p>Five Towns College New York</p>

                </td>

              </tr>

              <tr>

                <td>

                  <p>Arda EDEN</p>

                </td>

                <td>

                  <p>Yıldız Teknik Üniversitesi</p>

                </td>

              </tr>

              <tr>

                <td>

                  <p>Cenk GÜRAY</p>

                </td>

                <td>

                  <p>Hacettepe Üniversitesi</p>

                </td>

              </tr>

              <tr>

                <td>

                  <p>Ebru GÜNER CANBEY</p>

                </td>

                <td>

                  <p>Dokuz Eylül Üniversitesi</p>

                </td>

              </tr>

              <tr>

                <td>

                  <p>Hatice Selen TEKİN</p>

                </td>

                <td>

                  <p>Sakarya Üniversitesi</p>

                </td>

              </tr>

              <tr>

                <td>

                  <p>Johannes KRETZ</p>

                </td>

                <td>

                  <p>Universität für Musik und Darstellende Kunst Wien</p>


                </td>

              </tr>

              <tr>

                <td>

                  <p>John RINK</p>

                </td>

                <td>

                  <p>University of Cambridge</p>

                </td>

              </tr>

              <tr>

                <td>

                  <p>Lilian Tonella TÜZÜN</p>

                </td>

                <td>

                  <p>Anadolu Üniversitesi</p>

                </td>

              </tr>

              <tr>

                <td>

                  <p>Marcus SIQUEIRA</p>

                </td>

                <td>

                  <p>Conservatorio di Musica Giovan Battısta Martini Bologna</p>

                </td>

              </tr>

              <tr>

                <td>

                  <p>Mauricio de BONIS</p>

                </td>

                <td>

                  <p>São Paulo State University</p>

                </td>

              </tr>

              <tr>

                <td>

                  <p>Maja ACKAR ZLATAREVIC</p>

                </td>

                <td>

                  <p>Univerzitet u Sarajevu</p>

                </td>

              </tr>

              <tr>

                <td>

                  <p>Mehmet Can ÖZER</p>

                </td>

                <td>

                  <p>Yaşar Üniversitesi</p>

                </td>

              </tr>

              <tr>

                <td>

                  <p>Peter SNAPPER</p>

                </td>

                <td>

                  <p>Anadolu Üniversitesi</p>

                </td>

              </tr>

              <tr>

                <td>

                  <p>Simona CAVUOTO</p>

                </td>

                <td>

                  <p>Conservatorio di Musica Tito Schipa di Lecce</p>

                </td>

              </tr>

              <tr>

                <td>

                  <p>Songül KARAHASANOĞLU</p>

                </td>

                <td>

                  <p>İstanbul Teknik Üniversitesi</p>

                </td>

              </tr>

              <tr>

                <td>

                  <p>Tatiana OLİVİERA CATANZARO</p>

                </td>

                <td>

                  <p>Universidade de Brasília</p>

                </td>

              </tr>

              <tr>

                <td>

                  <p>Thomas James SAMSON</p>

                </td>

                <td>

                  <p>Royal Holloway University of London</p>

                </td>

              </tr>

              <tr>

                <td>

                  <p>Türev BERKİ</p>

                </td>

                <td>

                  <p>Hacettepe Üniversitesi</p>

                </td>

              </tr>

              <tr>

                <td>

                  <p>Wai Ling CHEONG</p>

                </td>

                <td>

                  <p>The Chinese University of Hong Kong</p>

                </td>

              </tr>

              <tr>

                <td>

                  <p>Zafer KURTASLAN</p>

                </td>

                <td>

                  <p>Ankara Müzik ve Güzel Sanatlar Üniversitesi</p>

                </td>

              </tr>

              <tr>

                <td>

                  <p>Zeki NACAKÇI</p>

                </td>

                <td>

                  <p>Mehmet Akif Ersoy Üniversitesi</p>

                </td>

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