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

            <!-- Düzenleme Kurulu -->

            <h3 class="center-text sec-h3"><?php echo($lang_boards["duzenleme_kurulu"][$pref_lang]); ?></h3>

            <table class="mdl-data-table">

              <tbody>

              <tr>

                <td class="w-50">

                  <p>Uğur TÜRKMEN (Başkan/Chairman)</p>

                </td>

                <td class="w-50">

                  <p>Çanakkale Onsekiz Mart Üniversitesi</p>

                </td>

              </tr>

              <tr>

                <td>

                  <p>Adem KILIÇ</p>

                </td>

                <td>

                  <p>Ordu Üniversitesi</p>

                </td>

              </tr>

              <tr>

                <td>

                  <p>Bensu KİTİRCİ</p>

                </td>

                <td>

                  <p>Afyon Kocatepe Üniversitesi</p>

                </td>

              </tr>

              <tr>

                  <td>

                      <p>Betül GÜVEN</p>

                  </td>

                  <td>

                      <p>Afyon Kocatepe Üniversitesi</p>

                  </td>

              </tr>

              <tr>

                <td>

                  <p>Beyzanur ÖZTEKİN</p>

                </td>

                <td>

                  <p>Çanakkale Onsekiz Mart Üniversitesi</p>

                </td>

              </tr>

              <tr>

                <td>

                  <p>Didem KARABAŞ</p>

                </td>

                <td>

                  <p>Afyon Kocatepe Üniversitesi</p>

                </td>

              </tr>

              <tr>

                <td>

                  <p>Ezginur KÜÇÜKDÜRÜM</p>

                </td>

                <td>

                  <p>Afyon Kocatepe Üniversitesi</p>

                </td>

              </tr>

              <tr>

                <td>

                  <p>Erhan BOZKURT</p>

                </td>

                <td>

                  <p>Kütahya Güzel Sanatlar Lisesi</p>

                </td>

              </tr>

              <tr>

                <td>

                  <p>Eyüp KAYA</p>

                </td>

                <td>

                  <p>Kütahya Güzel Sanatlar Lisesi</p>

                </td>

              </tr>

              <tr>

                <td>

                  <p>Fakı Can YÜRÜK</p>

                </td>

                <td>

                  <p>Afyon Kocatepe Üniversitesi</p>

                </td>

              </tr>

                <td>

                  <p>Filiz YILDIZ</p>

                </td>

                <td>

                  <p>Afyon Kocatepe Üniversitesi</p>

                </td>

              </tr>

              <tr>

                <td>

                  <p>Gonca GÖRSEV KILIÇ</p>

                </td>

                <td>

                  <p>Ordu Üniversitesi</p>

                </td>

              </tr>

              <tr>

                <td>

                  <p>Halim TÜRKMEN</p>

                </td>

                <td>

                  <p>Kütahya Güzel Sanatlar Lisesi</p>

                </td>

              </tr>

              <tr>

                <td>

                  <p>İsmail Kerim AĞRALI</p>

                </td>

                <td>

                  <p>Kütahya Güzel Sanatlar Lisesi</p>

                </td>

              </tr>

              <tr>

                <td>

                  <p>Muzaffer Soner YILMAZ</p>

                </td>

                <td>

                  <p>Afyon Kocatepe Üniversitesi</p>

                </td>

              </tr>

              <tr>

                  <td>

                      <p>Onur POLAT</p>

                  </td>

                  <td>

                      <p>Çanakkale Onsekiz Mart Üniversitesi</p>

                  </td>

              </tr>

              <tr>

                <td>

                  <p>Osman ÖZDEMİR</p>

                </td>

                <td>

                  <p>Kütahya Güzel Sanatlar Lisesi</p>

                </td>

              </tr>

              <tr>

                <td>

                  <p>Osman Serdar HANÇER</p>

                </td>

                <td>

                  <p>Kütahya Güzel Sanatlar Lisesi</p>

                </td>

              </tr>

              <tr>

                <td>

                  <p>R. Oğuzhan KAVUKÇU</p>

                </td>

                <td>

                  <p>Kütahya Güzel Sanatlar Lisesi</p>

                </td>

              </tr>

              <tr>

                <td>

                  <p>Rıfat BELTEKİN</p>

                </td>

                <td>

                  <p>Afyon Kocatepe Üniversitesi</p>

                </td>

              </tr>

              <tr>

                <td>

                  <p>Serkan SARUHAN</p>

                </td>

                <td>

                  <p>Kütahya Güzel Sanatlar Lisesi</p>

                </td>

              </tr>

              <tr>

                <td>

                  <p>Sibel ÇELİK</p>

                </td>

                <td>

                  <p>Kütahya Güzel Sanatlar Lisesi</p>

                </td>

              </tr>

              <tr>

                <td>

                  <p>Tülay TÜRKMEN</p>

                </td>

                <td>

                  <p>Kütahya Güzel Sanatlar Lisesi</p>

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