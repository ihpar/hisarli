<?php
session_start();

$is_secure = true;

$page_name = "kgsd";

require_once "dbms/utils.php";

require_once "modules/header_prefixes.php";

require_once "langs/lang_global.php";

require_once "langs/lang_important-dates.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once("modules/header_includes.php"); ?>
  <style type="text/css">
      .img-full {
          float: left;
          width: 50%;
          margin: 0 16px 16px 0;
      }

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
      }

      h3.sec-h3 {
          margin-bottom: 18px;
      }

      h4.sec-h4 {
          font-size: 24px;
          margin-bottom: 16px;
      }

      @media (max-width: 839px) {
          .pad-10-per {
              padding: 0 24px;
          }
      }

      @media (max-width: 550px) {
          .img-full {
              width: 100%;
              margin: 0 0 16px 0;
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
          <div class="cerceve">
            <h3 class="center-text sec-h3"><?php echo($lang_important_dates["onemli_tarihler"][$pref_lang]); ?></h3>
            <table class="mdl-data-table mdl-shadow--2dp">
              <tbody>
              <tr>
                <td class="mdl-data-table__cell--non-numeric">Bildiri Özetlerinin Son Gönderimi</td>
                <td>28 Mart 2021</td>
              </tr>
              <tr>
                <td class="mdl-data-table__cell--non-numeric">Kabul Edilen Özetlerin İlanı</td>
                <td>9 Nisan 2021</td>
              </tr>
              <tr>
                <td class="mdl-data-table__cell--non-numeric">Katılım Ücretlerinin Son Gönderim Tarihi</td>
                <td>20 Nisan 2021</td>
              </tr>
              <tr>
                <td class="mdl-data-table__cell--non-numeric">Sempozyum Programı İlanı</td>
                <td>5 Mayıs 2021</td>
              </tr>
              <tr>
                <td class="mdl-data-table__cell--non-numeric">Sempozyum Tarihi</td>
                <td>3-4-5-6 Haziran 2021</td>
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