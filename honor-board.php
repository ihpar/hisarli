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
            <!-- Onur Kurulu -->
            <h3 class="center-text sec-h3"><?php echo($lang_boards["onur_kurulu"][$pref_lang]); ?></h3>
            <table class="mdl-data-table">
              <tbody>
              <tr>
                <td>Ali ÇELİK</td>
                <td>Kütahya Valisi</td>
              </tr>
              <tr>
                <td>Alim IŞIK</td>
                <td>Kütahya Belediye Başkanı</td>
              </tr>
              <tr>
                <td>Prof. Dr. Sedat MURAT</td>
                <td>Çanakkale Onsekiz Mart Üniversitesi Rektörü</td>
              </tr>
              <tr>
                <td>Prof. Dr. Mehmet KARAKAŞ</td>
                <td>Afyon Kocatepe Üniversitesi Rektörü</td>
              </tr>
              <tr>
                <td>Prof. Dr. Kazım UYSAL</td>
                <td>Dumlupınar Üniversitesi Rektörü</td>
              </tr>
              <tr>
                <td>Prof. Dr. Vural KAVUNCU</td>
                <td>Kütahya Sağlık Bilimleri Üniversitesi Rektörü</td>
              </tr>
              <tr>
                <td>Mustafa Kemal ALTINSOY</td>
                <td>Kütahya Güzel Sanatlar Derneği Başkanı</td>
              </tr>
              <tr>
                <td>Mustafa HİSARLI</td>
                <td>Yüksek Mimar-TRT Sanatçısı</td>
              </tr>
              <tr>
                <td>Nihat DELEN</td>
                <td>İşadamı</td>
              </tr>
              <tr>
                <td>İsmet ÇATIK</td>
                <td>İşadamı</td>
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