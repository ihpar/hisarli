<?php
session_start();

$is_secure = true;

$page_name = "index";

require_once "dbms/utils.php";

require_once "modules/header_prefixes.php";

require_once "langs/lang_global.php";

require_once "langs/lang_youth-seminars-general.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once("modules/header_includes.php"); ?>
  <style type="text/css">
      .img-afis {
          width: 100%;
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

      <!-- Satir 1 Gençlik Seminerleri Önemli Tarihler ve Açıklamalar -->
      <section class="pad-tb-24">
        <div class="mdl-grid">
          <div class="mdl-cell mdl-cell--6-col mdl-cell--12-col-tablet sec-24-lr">
            <!-- Önemli Tarihler -->
            <?php include("youth-seminars-important-dates.php"); ?>
          </div>
            <div class="mdl-cell mdl-cell--6-col mdl-cell--12-col-tablet sec-24-lr sec-0-r">
            <!-- Açıklamalar -->
              <?php include("youth-seminars-info.php"); ?>
            </div>
            <!-- Eof Alt Basliklar -->
          </div>
        </div>
      </section>

      <!-- Detaylar için TIKLAYINIZ! -->
      <div class="custom-shape-divider-bottom-1623439955">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
          <path
              d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
              class="shape-fill"></path>
        </svg>
      </div>

      <section class="pad-tb-24" style="background-color: #f2f4f7">
        <div class="pad-25-per">

        </div>
      </section>

      <div class="custom-shape-divider-top-1623440107">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
          <path
              d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
              class="shape-fill"></path>
        </svg>
      </div>

    </div>

    <!-- Footer -->
      <?php require_once("modules/footer.php"); ?>

  </div>
</div>

<script src="js/material.js"></script>
<script>
    (function () {
        // devami butonu
        const devami = document.querySelector("#show-p-trunc");
        const clipDiv = document.querySelector("#div-truncated");
        devami.addEventListener("click", (e) => {
            e.preventDefault();

            if (devami.getAttribute("data-state") === "collapsed") {
                devami.setAttribute("data-state", "expanded");
                devami.innerHTML = '<?php echo($lang_index["gizle"][$pref_lang]); ?>';
                clipDiv.classList.add("visible");
            } else {
                devami.setAttribute("data-state", "collapsed");
                devami.innerHTML = '<?php echo($lang_index["devami"][$pref_lang]); ?>';
                clipDiv.classList.remove("visible");
            }
        });
        // eof devami
    })();
</script>
</body>

</html>