<?php

session_start();


$is_secure = true;


$page_name = "past-symposiums";


require_once "dbms/utils.php";


require_once "modules/header_prefixes.php";


require_once "langs/lang_global.php";


require_once "langs/lang_past-symposiums.php";

?>

<!DOCTYPE html>

<html lang="en">


<head>

    <?php require_once("modules/header_includes.php"); ?>

  <style type="text/css">

      h3.sec-h3 {
          margin-bottom: 18px;
      }

      .middle {
          transition: opacity 300ms ease;
          opacity: 0;
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
          -ms-transform: translate(-50%, -50%);
          width: 100%;
          background-color: rgba(0, 0, 0, 0.9);
          color: #fff;
      }

      .a-download-pdf img {
          height: 62px;
      }

      .mdl-card {
          width: 100%;
          height: 100%;
          display: grid;
          align-items: center;
          background-color: #f2f4f7;
      }

      .mdl-card img.img-poster {
          opacity: 1;
          transition: opacity 300ms ease;
          width: 100%;
      }

      .mdl-card:hover img.img-poster {
          opacity: 0.5;
      }

      .mdl-card:hover .middle {
          opacity: 1;
      }

      .text {
          padding: 10px;
          font-size: 11px;
      }

      .text p {
          margin: 6px 0;
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

        <h3 class="center-text sec-h3"><?php echo($lang_past_symposiums["gecmis_sempozyumlar_title"][$pref_lang]); ?></h3>

        <!-- Grid 1 -->
        <div class="mdl-grid">

          <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--6-col-phone">
            <!-- Card -->
            <div class="mdl-card mdl-shadow--2dp" style="background-color: #E9D5CA;">
              <img src="img/covers/2009.jpg" class="img-poster">
              <div class="middle">
                <div class="text">
                  <a style="float: right" href="img/covers/2009proc.pdf" target="_blank"
                     title="<?php echo($lang_past_symposiums["download_proceeding"][$pref_lang]); ?>"
                     class="a-download-pdf">>
                    <img alt="pdf download" src="img/assets/download-pdf.svg">
                  </a>
                    <?php echo($lang_past_symposiums["2009"][$pref_lang]); ?>
                </div>
              </div>
            </div>
            <!-- Eof Card -->
          </div>

          <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--6-col-phone">
            <!-- Card -->
            <div class="mdl-card mdl-shadow--2dp" style="background-color: #121615;">
              <img src="img/covers/2011.jpg" class="img-poster">
              <div class="middle">
                <div class="text">
                  <a style="float: right" href="img/covers/2011proc.pdf" target="_blank"
                     title="<?php echo($lang_past_symposiums["download_proceeding"][$pref_lang]); ?>"
                     class="a-download-pdf">
                    <img alt="pdf download" src="img/assets/download-pdf.svg">
                  </a>
                    <?php echo($lang_past_symposiums["2011"][$pref_lang]); ?>
                </div>
              </div>
            </div>
            <!-- Eof Card -->
          </div>

          <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--6-col-phone">
            <!-- Card -->
            <div class="mdl-card mdl-shadow--2dp" style="background-color: #C8E6F0;">
              <img src="img/covers/2012.jpg" class="img-poster">
              <div class="middle">
                <div class="text">
                  <a style="float: right" href="img/covers/2012proc.pdf" target="_blank"
                     title="<?php echo($lang_past_symposiums["download_proceeding"][$pref_lang]); ?>"
                     class="a-download-pdf">
                    <img alt="pdf download" src="img/assets/download-pdf.svg">
                  </a>
                    <?php echo($lang_past_symposiums["2012"][$pref_lang]); ?>
                </div>
              </div>
            </div>
            <!-- Eof Card -->
          </div>

          <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--6-col-phone">
            <!-- Card -->
            <div class="mdl-card mdl-shadow--2dp" style="background-color: #3C797B;">
              <img src="img/covers/2013.jpg" class="img-poster">
              <div class="middle">
                <div class="text">
                  <a style="float: right" href="img/covers/2013proc.pdf" target="_blank"
                     title="<?php echo($lang_past_symposiums["download_proceeding"][$pref_lang]); ?>"
                     class="a-download-pdf">
                    <img alt="pdf download" src="img/assets/download-pdf.svg">
                  </a>
                    <?php echo($lang_past_symposiums["2013"][$pref_lang]); ?>
                </div>
              </div>
            </div>
            <!-- Eof Card -->
          </div>

        </div>

        <!-- Grid 2 -->
        <div class="mdl-grid">

          <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--6-col-phone">
            <!-- Card -->
            <div class="mdl-card mdl-shadow--2dp" style="background-color: #F7F6E4;">
              <img src="img/covers/2014.jpg" class="img-poster">
              <div class="middle">
                <div class="text">
                  <a style="float: right" href="img/covers/2014proc.pdf" target="_blank"
                     title="<?php echo($lang_past_symposiums["download_proceeding"][$pref_lang]); ?>"
                     class="a-download-pdf">
                    <img alt="pdf download" src="img/assets/download-pdf.svg">
                  </a>
                    <?php echo($lang_past_symposiums["2014"][$pref_lang]); ?>
                </div>
              </div>
            </div>
            <!-- Eof Card -->
          </div>

          <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--6-col-phone">
            <!-- Card -->
            <div class="mdl-card mdl-shadow--2dp" style="background-color: #2F2F2F;">
              <img src="img/covers/2015.jpg" class="img-poster">
              <div class="middle">
                <div class="text">
                  <a style="float: right" href="img/covers/2015proc.pdf" target="_blank"
                     title="<?php echo($lang_past_symposiums["download_proceeding"][$pref_lang]); ?>"
                     class="a-download-pdf">
                    <img alt="pdf download" src="img/assets/download-pdf.svg">
                  </a>
                    <?php echo($lang_past_symposiums["2015"][$pref_lang]); ?>
                </div>
              </div>
            </div>
            <!-- Eof Card -->
          </div>

          <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--6-col-phone">
            <!-- Card -->
            <div class="mdl-card mdl-shadow--2dp" style="background-color: #DE9B0E;">
              <img src="img/covers/2016.jpg" class="img-poster">
              <div class="middle">
                <div class="text">
                  <a style="float: right" href="img/covers/2016proc.pdf" target="_blank"
                     title="<?php echo($lang_past_symposiums["download_proceeding"][$pref_lang]); ?>"
                     class="a-download-pdf">
                    <img alt="pdf download" src="img/assets/download-pdf.svg">
                  </a>
                    <?php echo($lang_past_symposiums["2016"][$pref_lang]); ?>
                </div>
              </div>
            </div>
            <!-- Eof Card -->
          </div>

          <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--6-col-phone">
            <!-- Card -->
            <div class="mdl-card mdl-shadow--2dp" style="background-color: #160100;">
              <img src="img/covers/2017.jpg" class="img-poster">
              <div class="middle">
                <div class="text">
                  <a style="float: right" href="img/covers/2017proc.pdf" target="_blank"
                     title="<?php echo($lang_past_symposiums["download_proceeding"][$pref_lang]); ?>"
                     class="a-download-pdf">
                    <img alt="pdf download" src="img/assets/download-pdf.svg">
                  </a>
                    <?php echo($lang_past_symposiums["2017"][$pref_lang]); ?>
                </div>
              </div>
            </div>
            <!-- Eof Card -->
          </div>

        </div>

        <!-- Grid 3 -->
        <div class="mdl-grid" style="justify-content: center">

          <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--6-col-phone">
            <!-- Card -->
            <div class="mdl-card mdl-shadow--2dp" style="background-color: #FFFFFF;">
              <img src="img/covers/2018.jpg" class="img-poster">
              <div class="middle">
                <div class="text">
                  <a style="float: right" href="img/covers/2018proc.pdf" target="_blank"
                     title="<?php echo($lang_past_symposiums["download_proceeding"][$pref_lang]); ?>"
                     class="a-download-pdf">
                    <img alt="pdf download" src="img/assets/download-pdf.svg">
                  </a>
                    <?php echo($lang_past_symposiums["2018"][$pref_lang]); ?>
                </div>
              </div>
            </div>
            <!-- Eof Card -->
          </div>

          <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--6-col-phone">
            <!-- Card -->
            <div class="mdl-card mdl-shadow--2dp" style="background-color: #FFFFFF;">
              <img src="img/covers/2019.jpg" class="img-poster">
              <div class="middle">
                <div class="text">
                  <a style="float: right" href="img/covers/2019proc.pdf" target="_blank"
                     title="<?php echo($lang_past_symposiums["download_proceeding"][$pref_lang]); ?>"
                     class="a-download-pdf">
                    <img alt="pdf download" src="img/assets/download-pdf.svg">
                  </a>
                    <?php echo($lang_past_symposiums["2019"][$pref_lang]); ?>
                </div>
              </div>
            </div>
            <!-- Eof Card -->
          </div>

          <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--6-col-phone">
            <!-- Card -->
            <div class="mdl-card mdl-shadow--2dp" style="background-color: #F5F5F7;">
              <img src="img/covers/2021.jpg" class="img-poster">
              <div class="middle">
                <div class="text">
                    <a style="float: right" href="img/covers/2021proc.pdf" target="_blank"
                       title="<?php echo($lang_past_symposiums["download_proceeding"][$pref_lang]); ?>"
                       class="a-download-pdf">
                        <img alt="pdf download" src="img/assets/download-pdf.svg">
                    </a>
                    <?php echo($lang_past_symposiums["2021"][$pref_lang]); ?>
                </div>
              </div>
            </div>
            <!-- Eof Card -->
          </div>

        </div>

        <!-- Eof Grids -->
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