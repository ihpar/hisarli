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

                  <p>Lilian Maria Tonella Tüzün (Başkan/Chairman)</p>

                </td>

                <td class="w-50">

                  <p>Anadolu Üniversitesi</p>

                </td>

              </tr>

              <tr>

                <td>

                  <p> Aaron Alley</p>

                </td>

                <td>

                  <p>North Carolina Greensboro Üniversitesi (ABD/USA)</p>

                </td>

              </tr>

              <tr>

                <td>

                  <p>Anjo Arko</p>

                </td>

                <td>

                  <p>Guillard Kolej (ABD/USA)</p>

                </td>

              </tr>

              <tr>

                <td>

                  <p>Aykut Barış Çerezcioğlu</p>

                </td>

                <td>

                  <p>Dokuz Eylül Üniversitesi</p>

                </td>

              </tr>

              <tr>

                <td>

                  <p>Erberk Eryılmaz</p>

                </td>

                <td>

                  <p>Ankara Müzik ve Güzel Sanatlar Üniversitesi</p>

                </td>

              </tr>

              <tr>

                <td>

                  <p>Gülay Mirzaoğlu</p>

                </td>

                <td>

                  <p>Hacettepe Üniversitesi</p>

                </td>

              </tr>

              <tr>

                <td>

                  <p>Hasan Tatlı</p>

                </td>

                <td>

                  <p>Çanakkale Onsekiz Mart Üniversitesi</p>

                </td>

              </tr>

              <tr>

                <td>

                  <p>Havva Işık</p>

                </td>

                <td>

                  <p>Akdeniz Üniversitesi</p>


                </td>

              </tr>

              <tr>

                <td>

                  <p>İhsan Çiçek</p>

                </td>

                <td>

                  <p>Ankara Üniversitesi</p>

                </td>

              </tr>

              <tr>

                <td>

                  <p>İlhan Ersoy</p>

                </td>

                <td>

                  <p>Ege Üniversitesi</p>

                </td>

              </tr>

              <tr>

                <td>

                  <p>Marcus Siqueira</p>

                </td>

                <td>

                  <p>Conservatorio di Musica Giovan Battısta Martini Bologna (İtalya/Italy)</p>

                </td>

              </tr>

              <tr>

                <td>

                  <p>Junrong Ban</p>

                </td>

                <td>

                  <p>Nanjing Üniversitesi (Çin Halk Cumhuriyeti/People's Republic of China)</p>

                </td>

              </tr>

              <tr>

                <td>

                  <p>Malgorzata Zarebinskaya</p>

                </td>

                <td>

                  <p>Rzeszow Üniversitesi (Polonya/Poland)</p>

                </td>

              </tr>

              <tr>

                <td>

                  <p>Marcus Siqueira</p>

                </td>

                <td>

                  <p>Giovan Battista di Bologna Üniversitesi (İtalya/Italy)</p>

                </td>

              </tr>

              <tr>

                <td>

                  <p>Mauricio Funcia De Bonis</p>

                </td>

                <td>

                  <p>Sao Paoulo Devlet Üniversitesi (Brezilya/Brasil)</p>

                </td>

              </tr>

              <tr>

                <td>

                  <p>Oksan E. Dobzhanskaya</p>

                </td>

                <td>

                  <p>Artic Devlet Kültür ve Sanat Enstitüsü (Rusya/Russia)</p>

                </td>

              </tr>

              <tr>

                <td>

                  <p>Veysel Sönmez</p>

                </td>

                <td>

                  <p>Emekli Öğretim Üyesi/Former Lecturer</p>

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