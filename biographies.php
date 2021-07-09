<?php
session_start();

$is_secure = true;

$page_name = "index";

require_once "dbms/utils.php";

require_once "modules/header_prefixes.php";

require_once "langs/lang_global.php";

require_once "langs/lang_biographies.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once("modules/header_includes.php"); ?>
  <style type="text/css">
      .img-full {
          float: left;
          width: 25%;
          margin-right: 16px;
      }

      .pad-5-per {
          padding: 0 5%;
          text-align: justify;
          margin-left: auto;
          margin-right: auto;
          max-width: 3000px;
      }

      h3.sec-h3 {
          margin-bottom: 18px;
      }

      .grey-bg {
          background-color: #f2f4f7;
      }

      .clear-float {
          clear: both;
      }

      @media screen and (max-width: 550px) {
          .img-full {
              width: 100%;
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
      <section class="pad-tb-24" id="nadja">
        <div class="pad-5-per">
          <img src="img/people/nadja.png" class="img-full">
          <h3 class="sec-h3">Nadja Wallaszkovits</h3>
            <?php echo($lang_biographies["Nadja_Wallaszkovits_Bio"][$pref_lang]); ?>
        </div>
        <div class="clear-float"></div>
      </section>

      <section class="pad-tb-24 grey-bg" id="johannes">
        <div class="pad-5-per">
          <img src="img/people/johannes.png" class="img-full">
          <h3 class="sec-h3">Johannes Kretz</h3>
            <?php echo($lang_biographies["Johannes_Kretz_Bio"][$pref_lang]); ?>
        </div>
        <div class="clear-float"></div>
      </section>

      <section class="pad-tb-24" id="john">
        <div class="pad-5-per">
          <img src="img/people/john.png" class="img-full">
          <h3 class="sec-h3">John Rink</h3>
            <?php echo($lang_biographies["John_Rink_Bio"][$pref_lang]); ?>
        </div>
        <div class="clear-float"></div>
      </section>

      <section class="pad-tb-24 grey-bg" id="turan">
        <div class="pad-5-per">
          <img src="img/people/turan.png" class="img-full">
          <h3 class="sec-h3">Turan Sağer</h3>
            <?php echo($lang_biographies["Sager_Bio"][$pref_lang]); ?>
        </div>
        <div class="clear-float"></div>
      </section>

      <section class="pad-tb-24" id="ruhi">
        <div class="pad-5-per">
          <img src="img/people/ruhi.png" class="img-full">
          <h3 class="sec-h3">Ruhi Ayangil</h3>
            <?php echo($lang_biographies["Ruhi_Ayangil_Bio"][$pref_lang]); ?>
        </div>
        <div class="clear-float"></div>
      </section>

      <section class="pad-tb-24 grey-bg" id="melik">
        <div class="pad-5-per">
          <img src="img/people/melik.png" class="img-full">
          <h3 class="sec-h3">Melik Ertuğrul Bayraktarkatal</h3>
            <?php echo($lang_biographies["Melik_Ertugrul_Bayraktarkatal_Bio"][$pref_lang]); ?>
        </div>
        <div class="clear-float"></div>
      </section>

      <section class="pad-tb-24" id="cihan">
        <div class="pad-5-per">
          <img src="img/people/cihan.png" class="img-full">
          <h3 class="sec-h3">Cihan Işıkhan</h3>
            <?php echo($lang_biographies["Cihan_Isikhan_Bio"][$pref_lang]); ?>
        </div>
        <div class="clear-float"></div>
      </section>

      <section class="pad-tb-24 grey-bg" id="abdullah">
        <div class="pad-5-per">
          <img src="img/people/abdullah.png" class="img-full">
          <h3 class="sec-h3">Abdullah Akat</h3>
            <?php echo($lang_biographies["Abdullah_Akat_Bio"][$pref_lang]); ?>
        </div>
        <div class="clear-float"></div>
      </section>
      <!-- Eof Icerik -->
    </div>
    <!-- Footer -->
      <?php require_once("modules/footer.php"); ?>
  </div>

  <script src="js/material.js"></script>
  <script>
      (function () {
          // auto run
      })();
  </script>
</body>

</html>