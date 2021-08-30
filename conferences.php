<?php
session_start();

$is_secure = true;

$page_name = "conferences";

require_once "dbms/utils.php";

require_once "modules/header_prefixes.php";

require_once "langs/lang_global.php";

require_once "langs/lang_conferences.php";
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
      }

      .cerceve {
          border-style: solid;
          border-width: 16px;
          border-color: #bbb;
          padding: 16px;
      }

      h3.sec-h3 {
          margin-bottom: 18px;
      }

      h4.sec-h4 {
          font-size: 14px;
          margin-bottom: 16px;
      }

      @media (max-width: 839px) {
          .pad-10-per {
              padding: 0 24px;
          }
      }

      .card-image {
          background-color: rgba(0, 0, 10, 0.1);
          background-size: cover;
          background-repeat: no-repeat;
          background-position: center 0;
          width: 100%;
          height: 0;
          padding-bottom: 110%;
      }

      .card-footer {
          border-top: 1px solid rgba(0, 0, 0, 0.1);
          background-color: #fff;
          text-align: center;
          padding: 6px;
      }

      .speaker-card {
          background-color: rgba(0, 0, 10, 0.1);
          width: 100%;
      }

      .speaker-name {
          color: #1F3864;
          text-decoration: none;
          font-size: 18px;
      }

      .conf-title {
          display: block;
          font-size: 16px;
          margin: 4px;
      }

      .conf-date {
          display: block;
          font-size: 14px;
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
            <h3 class="center-text sec-h3"><?php echo($lang_conferences["konferans"][$pref_lang]); ?></h3>

            <div class="mdl-grid">
              <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--6-col-phone">

                  <!-- Card -->
                  <a href="biographies.php#nadja">
                <div class="mdl-card mdl-shadow--2dp speaker-card">
                  <div class="card-image" style="background-image: url('img/people/nadja.png')"></div>
                  <div class="card-footer">
                    <a class="speaker-name" href="biographies.php#nadja">Nadja Wallaszkovits</a>
                    <span class="conf-title">"Archiving our Musical Cultural Heritage: New Technologies and Trends in Preservation and Access"</span>
                    <span class="conf-date">4 Haziran/June --- Cuma/Friday 19.00</span>
                  </a>
                  </div>
                </div>
                <!-- Eof Card -->
              </div>

              <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--6-col-phone">
                <!-- Card -->
                  <a href="biographies.php#johannes">
                <div class="mdl-card mdl-shadow--2dp speaker-card">
                  <div class="card-image" style="background-image: url('img/people/johannes.png')"></div>
                  <div class="card-footer">
                    <a class="speaker-name" href="biographies.php#johannes">Johannes Kretz</a>
                    <span class="conf-title">"Composing Today, Moving from Model of a Lonesome Genius to Activism and Artistic Research"</span>
                    <span class="conf-date">5 Haziran/June --- Cumartesi/Saturday 19.00</span>
                  </a>
                  </div>
                </div>
                <!-- Eof Card -->
              </div>

              <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--6-col-phone">
                <!-- Card -->
                  <a href="biographies.php#john">
                <div class="mdl-card mdl-shadow--2dp speaker-card">
                  <div class="card-image" style="background-image: url('img/people/john.png')"></div>
                  <div class="card-footer">
                    <a class="speaker-name" href="biographies.php#john">John Rink</a>
                    <span class="conf-title">" 'Informed Listening’ in Action "</span>
                    <span class="conf-date">3 Haziran/June --- Perşembe/Thursday 19.00</span>
                  </a>
                  </div>
                </div>
                <!-- Eof Card -->
              </div>

              <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--6-col-phone">
                <!-- Card -->
                  <a href="biographies.php#turan">
                <div class="mdl-card mdl-shadow--2dp speaker-card">
                  <div class="card-image" style="background-image: url('img/people/turan.png')"></div>
                  <div class="card-footer">
                    <a class="speaker-name" href="biographies.php#turan">Turan Sağer</a>
                    <span class="conf-title">"Eğitim ve Etkinlikleriyle Pandemi Döneminde Sanatta Yeni Yönelimler"</span>
                    <span class="conf-date">3 Haziran/June --- Perşembe/Thursday 11.30</span>
                  </a>
                  </div>
                </div>
                <!-- Eof Card -->
              </div>
            </div>

            <div class="mdl-grid" style="justify-content: center">
              <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--6-col-phone">
                <!-- Card -->
                  <a href="biographies.php#ruhi">
                <div class="mdl-card mdl-shadow--2dp speaker-card">
                  <div class="card-image" style="background-image: url('img/people/ruhi.png')"></div>
                  <div class="card-footer">
                    <a class="speaker-name" href="biographies.php#ruhi">Ruhi Ayangil</a>
                    <span class="conf-title">"Türk Müziği Modernleşme Sürecinde İki Özerk Örgütlenme Modeli: ATMOK ve TUMAC"</span>
                    <span class="conf-date">5 Haziran/June --- Cumartesi/Saturday 11.30</span>
                  </a>
                  </div>
                </div>
                <!-- Eof Card -->
              </div>

              <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--6-col-phone">
                <!-- Card -->
                  <a href="biographies.php#melik">
                <div class="mdl-card mdl-shadow--2dp speaker-card">
                  <div class="card-image" style="background-image: url('img/people/melik.png')"></div>
                  <div class="card-footer">
                    <a class="speaker-name" href="biographies.php#melik">Melik Ertuğrul Bayraktarkatal</a>
                    <span class="conf-title">"Makamın Yapıtaşı ve Çokseslilik"</span>
                    <span class="conf-date">4 Haziran/June --- Cuma/Friday 11.30</span>
                  </a>
                  </div>
                </div>
                <!-- Eof Card -->
              </div>
            </div>

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