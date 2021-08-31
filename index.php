<?php
session_start();

$is_secure = true;

$page_name = "index";

require_once "dbms/utils.php";

require_once "modules/header_prefixes.php";

require_once "langs/lang_global.php";

require_once "langs/lang_index.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once("modules/header_includes.php"); ?>
  <style type="text/css">
      .img-afis {
          width: 100%;
      }

      .mdl-list__item {
          font-size: 15px;
      }
      .mdl-list__item-icon, .mdl-list__item-icon.material-icons {
          width: 20px;
          height: 20px;
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
      <!-- Satir 1 Amac ve Kapsam -->
      <section class="pad-tb-24" style="background-color: #f2f4f7">
        <div class="mdl-grid">
          <div class="mdl-cell mdl-cell--6-col mdl-cell--12-col-tablet sec-24-lr">
            <!-- Amac ve Kapsam -->
            <h3 class="sec-h3"><?php echo($lang_index["amac_ve_kapsam"][$pref_lang]); ?></h3>
            <div style="text-align: justify">
                <?php echo($lang_index["amac_ve_kapsam_metin"][$pref_lang]); ?>
            </div>
          </div>
          <div class="mdl-cell mdl-cell--6-col mdl-cell--12-col-tablet sec-24-lr sec-0-r">
            <h3 class="sec-h3"><?php echo($lang_index["alt_basliklar"][$pref_lang]); ?></h3>
            <!-- Alt Basliklar -->
              <?php echo($lang_index["alt_basliklar_metin"][$pref_lang]); ?>
            <!-- Eof Alt Basliklar -->
          </div>
        </div>
      </section>
        <!-- Satir 1 Duyurular -->
        <section class="pad-tb-24">
            <div class="pad-25-per">
                <h3 class="center-text sec-h3"><?php echo($lang_index["duyurular"][$pref_lang]); ?></h3>
                <ul class="mdl-list">
                    <?php echo($lang_index["duyurular_metin"][$pref_lang]); ?>
                </ul>
            </div>
        </section>



      <!-- Satir 3 Konusmacilar -->
        <!--
      <section class="pad-tb-24">
        <h3 class="center-text sec-h3"><?php echo($lang_index["davetli_konusmacilar"][$pref_lang]); ?></h3>
        <div class="mdl-grid">
          <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--6-col-phone">
            <!-- Card
            <a href="biographies.php#nadja">
              <div class="mdl-card mdl-shadow--2dp person-card" style="background-image: url('img/people/nadja.png')">
                <div class="mdl-card__actions">Nadja Wallaszkovits</div>
              </div>
            </a>
            <!-- Eof Card
          </div>

          <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--6-col-phone">
            <!-- Card
            <a href="biographies.php#johannes">
              <div class="mdl-card mdl-shadow--2dp person-card"
                   style="background-image: url('img/people/johannes.png')">
                <div class="mdl-card__actions">Johannes Kretz</div>
              </div>
            </a>
            <!-- Eof Card
          </div>

          <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--6-col-phone">
            <!-- Card
            <a href="biographies.php#john">
              <div class="mdl-card mdl-shadow--2dp person-card" style="background-image: url('img/people/john.png')">
                <div class="mdl-card__actions">John Rink</div>
              </div>
            </a>
            <!-- Eof Card
          </div>

          <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--6-col-phone">
            <!-- Card
            <a href="biographies.php#turan">
              <div class="mdl-card mdl-shadow--2dp person-card" style="background-image: url('img/people/turan.png')">
                <div class="mdl-card__actions">Turan Sağer</div>
              </div>
            </a>
            <!-- Eof Card
          </div>
        </div>

        <div class="mdl-grid" style="justify-content: center">
          <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--6-col-phone">
            <!-- Card -
            <a href="biographies.php#ruhi">
              <div class="mdl-card mdl-shadow--2dp person-card" style="background-image: url('img/people/ruhi.png')">
                <div class="mdl-card__actions">Ruhi Ayangil</div>
              </div>
            </a>
            <!-- Eof Card
          </div>

          <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--6-col-phone">
            <!-- Card
            <a href="biographies.php#melik">
              <div class="mdl-card mdl-shadow--2dp person-card" style="background-image: url('img/people/melik.png')">
                <div class="mdl-card__actions">Melik Ertuğrul Bayraktarkatal</div>
              </div>
            </a>
            <!-- Eof Card
          </div>
        </div>
      </section> -->

      <!-- Satir 4 Bilim Kurulu -->
      <section class="pad-tb-24">
        <h3 class="center-text sec-h3"><?php echo($lang_index["bilim_kurulu_baskani"][$pref_lang]); ?></h3>

        <div class="mdl-grid" style="justify-content: center">
          
          <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--6-col-phone">
            <!-- Card -->
            <a href="biographies.php#abdullah">
              <div class="mdl-card mdl-shadow--2dp person-card"
                   style="background-image: url('img/people/lilian.jpg')">
                <div class="mdl-card__actions">Lilian Maria TONELLA TÜZÜN</div>
              </div>
            </a>
            <!-- Eof Card -->
          </div>
        </div>
      </section>

      <!-- Afiş -->
        <!--
      <section class="pad-tb-24">
        <img src="img/banners/hisarli-11-afis.jpg" class="img-afis">
      </section>-->

      <!-- Satir 5 Teşekkürler -->
      <section class="pad-tb-24">
        <div class="pad-25-per">
          <h3 class="center-text sec-h3"><?php echo($lang_index["katkilarinizdan_dolayi"][$pref_lang]); ?></h3>
          <ul class="mdl-list center-text">
            <li class="mdl-list__item">
                <span class="mdl-list__item-primary-content">Kültür ve Turizm Bakanı Sn. Mehmet Nuri
                  Ersoy</span>
            </li>
            <li class="mdl-list__item">
              <span class="mdl-list__item-primary-content">Kütahya Valisi Sn. Ali Çelik</span>
            </li>
            <li class="mdl-list__item">
                <span class="mdl-list__item-primary-content">Kütahya Belediye Başkanı Sn. Alim
                  Işık</span>
            </li>
            <li class="mdl-list__item">
                <span class="mdl-list__item-primary-content">Çanakkale Onsekiz Mart Üniversitesi Rektörü
                  Sn. Prof. Dr. Sedat Murat</span>
            </li>
            <li class="mdl-list__item">
                <span class="mdl-list__item-primary-content">Afyon Kocatepe Üniversitesi Rektörü Sn.
                  Prof. Dr. Mehmet Karakaş</span>
            </li>
            <li class="mdl-list__item">
                <span class="mdl-list__item-primary-content">Dumlupinar Üniversitesi Rektörü Sn. Prof.
                  Dr. Kazım Uysal</span>
            </li>
            <li class="mdl-list__item">
                <span class="mdl-list__item-primary-content">Kütaya Sağlik Bilimleri Üniversitesi
                  Rektörü Sn. Prof. Dr. Vural Kavuncu</span>
            </li>
            <li class="mdl-list__item">
                <span class="mdl-list__item-primary-content">Kütahya Milli Eğitim Müdürü Sn. Hasan
                  Başyiğit</span>
            </li>
            <li class="mdl-list__item">
                <span class="mdl-list__item-primary-content">Kütahya Ticaret ve Sanayi Odası Başkanı Sn.
                  ismet Özotraç</span>
            </li>
            <li class="mdl-list__item">
                <span class="mdl-list__item-primary-content">Kütahya İl Kültür ve Turizm Müdürü Sn.
                  Zekeriya Ünal</span>
            </li>
            <li class="mdl-list__item">
                <span class="mdl-list__item-primary-content">Kütahya Kültür ve Sosyal İşler Müdürü Sn.
                  İsmail Şen</span>
            </li>
              <li class="mdl-list__item">
                <span class="mdl-list__item-primary-content">Kütahya Orman Bölge Müdürü Hasan Keskin</span>
              </li>
            <li class="mdl-list__item">
                <span class="mdl-list__item-primary-content">Kütahya Ahmet Yakupoğlu Güzel Sanatlar
                  Lisesi Müdürü Sn. Mustafa Demir</span>
            </li>
            <li class="mdl-list__item">
                <span class="mdl-list__item-primary-content">Kütahya Güzel Sanatlar Derneği Yönetim
                  Kurulu</span>
            </li>
            <li class="mdl-list__item">
                <span class="mdl-list__item-primary-content">AKÜ Devlet Konservatuvarı Yönetim
                  Kurulu</span>
            </li>
            <li class="mdl-list__item">
                <span class="mdl-list__item-primary-content">AKÜ Devlet Konservatuvarı Mezunlar Derneği
                  Yönetim Kurulu</span>
            </li>
            <li class="mdl-list__item">
                <span class="mdl-list__item-primary-content">Çatık Madencilik Sn. ismet Çatık (Ana
                  Sponsor)</span>
            </li>
            <li class="mdl-list__item">
              <span class="mdl-list__item-primary-content">Delen Ticaret Sn. Nihat Delen</span>
            </li>
            <li class="mdl-list__item">
              <span class="mdl-list__item-primary-content">Kırdar Bilgiören Koleji</span>
            </li>
            <li class="mdl-list__item">
                <span class="mdl-list__item-primary-content">Kaşi Ahmet Çini Seramik Sn. Ahmet
                  Özmutaf</span>
            </li>
            <li class="mdl-list__item">
              <span class="mdl-list__item-primary-content">İzge Yayıncılık</span>
            </li>
            <li class="mdl-list__item">
              <span class="mdl-list__item-primary-content">Başkent Müzikevi</span>
            </li>
          </ul>
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
    /*
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
    */
</script>
</body>

</html>