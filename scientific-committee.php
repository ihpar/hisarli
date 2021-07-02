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
                <td>
                  Abdullah AKAT (Başkan)
                </td>
                <td>
                  İstanbul Üniversitesi
                </td>
              </tr>
              <tr>
                <td>
                  Cihan IŞIKHAN (Başkan)
                </td>
                <td>
                  Dokuz Eylül Üniversitesi
                </td>
              </tr>
              <tr>
                <td>
                  A. Bülent ALANER
                </td>
                <td>
                  Anadolu Üniversitesi
                </td>
              </tr>
              <tr>
                <td>
                  Andrea LODGE
                </td>
                <td>
                  Five Towns College New York (ABD)
                </td>
              </tr>
              <tr>
                <td>
                  Arda EDEN
                </td>
                <td>
                  Yıldız Teknik Üniversitesi
                </td>
              </tr>
              <tr>
                <td>
                  Cenk GÜRAY
                </td>
                <td>
                  Hacettepe Üniversitesi
                </td>
              </tr>
              <tr>
                <td>
                  Ebru GÜNER CANBEY
                </td>
                <td>
                  Dokuz Eylül Üniversitesi
                </td>
              </tr>
              <tr>
                <td>
                  Hatice Selen TEKİN
                </td>
                <td>
                  Sakarya Üniversitesi
                </td>
              </tr>
              <tr>
                <td>
                  Johannes KRETZ
                </td>
                <td>
                  Universität für Musik und Darstellende Kunst Wien
                  (Avusturya)
                </td>
              </tr>
              <tr>
                <td>
                  John RINK
                </td>
                <td>
                  University of Cambridge (İngiltere)
                </td>
              </tr>
              <tr>
                <td>
                  Lilian Tonella TÜZÜN
                </td>
                <td>
                  Anadolu Üniversitesi
                </td>
              </tr>
              <tr>
                <td>
                  Marcus SIQUEIRA
                </td>
                <td>
                  Conservatorio di Musica Giovan Battısta Martini Bologna (İtalya)
                </td>
              </tr>
              <tr>
                <td>
                  Mauricio de BONIS
                </td>
                <td>
                  São Paulo State University&nbsp; (Brezilya)
                </td>
              </tr>
              <tr>
                <td>
                  Maja ACKAR ZLATAREVIC
                </td>
                <td>
                  <a href="http://www.unsa.ba/">Univerzitet u Sarajevu</a> (Bosna Hersek)
                </td>
              </tr>
              <tr>
                <td>
                  Mehmet Can ÖZER
                </td>
                <td>
                  Yaşar Üniversitesi
                </td>
              </tr>
              <tr>
                <td>
                  Peter SNAPPER
                </td>
                <td>
                  Anadolu Üniversitesi
                </td>
              </tr>
              <tr>
                <td>
                  Simona CAVUOTO
                </td>
                <td>
                  Conservatorio di Musica Tito Schipa di Lecce (İtalya)
                </td>
              </tr>
              <tr>
                <td>
                  Songül KARAHASANOĞLU
                </td>
                <td>
                  İstanbul Teknik Üniversitesi
                </td>
              </tr>
              <tr>
                <td>
                  Tatiana OLİVİERA CATANZARO
                </td>
                <td>
                  Universidade de Brasília (Brezilya)
                </td>
              </tr>
              <tr>
                <td>
                  Thomas James SAMSON
                </td>
                <td>
                  Royal Holloway University of London (İngiltere)
                </td>
              </tr>
              <tr>
                <td>
                  Türev BERKİ
                </td>
                <td>
                  Hacettepe Üniversitesi
                </td>
              </tr>
              <tr>
                <td>
                  Wai Ling CHEONG
                </td>
                <td>
                  The Chinese University of Hong Kong (Çin)
                </td>
              </tr>
              <tr>
                <td>
                  Zafer KURTASLAN
                </td>
                <td>
                  Ankara Müzik ve Güzel Sanatlar Üniversitesi
                </td>
              </tr>
              <tr>
                <td>
                  Zeki NACAKÇI
                </td>
                <td>
                  Mehmet Akif Ersoy Üniversitesi
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