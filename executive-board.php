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
            <!-- Yürütme Kurulu -->
            <h3 class="center-text sec-h3"><?php echo($lang_boards["yurutme_kurulu"][$pref_lang]); ?></h3>
            <table class="mdl-data-table">
              <tbody>
              <tr>
                <td>Prof. Dr. Uğur TÜRKMEN</td>
                <td>Çanakkale Onsekiz Mart Üniversitesi</td>
              </tr>
              <tr>
                <td>Prof. Dr. Abdullah AKAT</td>
                <td>İstanbul Üniversitesi</td>
              </tr>
              <tr>
                <td>Prof. Dr. Cihan IŞIKHAN</td>
                <td>Dokuz Eylül Üniversitesi</td>
              </tr>
              <tr>
                <td>Prof. Türev BERKİ</td>
                <td>Hacettepe Üniversitesi</td>
              </tr>
              <tr>
                <td>Doç. Çağhan ADAR</td>
                <td>Afyon Kocatepe Üniversitesi</td>
              </tr>
              <tr>
                <td>Doç. Dr. Seyhan CANYAKAN</td>
                <td>Afyon Kocatepe Üniversitesi</td>
              </tr>
              <tr>
                <td>Lilian Maria TONELLA TÜZÜN</td>
                <td>Anadolu Üniversitesi</td>
              </tr>
              <tr>
                <td>Öğr. Gör. Yunus Emre UĞUR</td>
                <td>Afyon Kocatepe Üniversitesi</td>
              </tr>
              <tr>
                <td>Öğr. Gör. Fakı Can YÜRÜK</td>
                <td>Afyon Kocatepe Üniversitesi</td>
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