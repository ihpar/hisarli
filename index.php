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
        <section class="pad-tb-24">
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
              <div class="mdl-grid no-pad">
                <div class="mdl-cell mdl-cell--6-col mdl-cell--12-col-tablet">
                  <ul class="mdl-list no-pad mr-16">
                    <li class="mdl-list__item">
                      <span class="mdl-list__item-primary-content">
                        <i class="material-icons mdl-list__item-icon">category</i>
                        Müzik Araştırmasında Yeni Yönelimler
                      </span>
                    </li>
                    <li class="mdl-list__item">
                      <span class="mdl-list__item-primary-content">
                        <i class="material-icons mdl-list__item-icon">category</i>
                        Müzik Teknolojisinde Yeni Yönelimler
                      </span>
                    </li>
                    <li class="mdl-list__item">
                      <span class="mdl-list__item-primary-content">
                        <i class="material-icons mdl-list__item-icon">category</i>
                        Müzik Eğitiminde Yeni Yönelimler
                      </span>
                    </li>
                    <li class="mdl-list__item">
                      <span class="mdl-list__item-primary-content">
                        <i class="material-icons mdl-list__item-icon">category</i>
                        Müzik Teorisinde Yeni Yönelimler
                      </span>
                    </li>
                    <li class="mdl-list__item">
                      <span class="mdl-list__item-primary-content">
                        <i class="material-icons mdl-list__item-icon">category</i>
                        Müzik Üretiminde Yeni Yönelimler
                      </span>
                    </li>
                    <li class="mdl-list__item">
                      <span class="mdl-list__item-primary-content">
                        <i class="material-icons mdl-list__item-icon">category</i>
                        Müzik İcrası ve İcracılığında Yeni Yönelimler
                      </span>
                    </li>
                  </ul>
                </div>
                <div class="mdl-cell mdl-cell--6-col mdl-cell--12-col-tablet">
                  <ul class="mdl-list no-pad">
                    <li class="mdl-list__item">
                      <span class="mdl-list__item-primary-content">
                        <i class="material-icons mdl-list__item-icon">category</i>
                        Müzikte Yerel ve Küresel Dinamikler
                      </span>
                    </li>
                    <li class="mdl-list__item">
                      <span class="mdl-list__item-primary-content">
                        <i class="material-icons mdl-list__item-icon">category</i>
                        Müzik Biliminde Güncel Yaklaşımlar
                      </span>
                    </li>
                    <li class="mdl-list__item">
                      <span class="mdl-list__item-primary-content">
                        <i class="material-icons mdl-list__item-icon">category</i>
                        Değişim ve Müzik Endüstrisi
                      </span>
                    </li>
                    <li class="mdl-list__item">
                      <span class="mdl-list__item-primary-content">
                        <i class="material-icons mdl-list__item-icon">category</i>
                        Müzikte Değişim ve Gelişim
                      </span>
                    </li>
                    <li class="mdl-list__item">
                      <span class="mdl-list__item-primary-content">
                        <i class="material-icons mdl-list__item-icon">category</i>
                        Toplumsal Değişim ve Müzik
                      </span>
                    </li>
                    <li class="mdl-list__item">
                      <span class="mdl-list__item-primary-content">
                        <i class="material-icons mdl-list__item-icon">category</i>
                        Müzikte Çağdaşlık
                      </span>
                    </li>
                    <li class="mdl-list__item">
                      <span class="mdl-list__item-primary-content">
                        <i class="material-icons mdl-list__item-icon">category</i>
                        Yeni Müzik
                      </span>
                    </li>
                  </ul>
                </div>
              </div>
              <!-- Eof Alt Basliklar -->
            </div>
          </div>
        </section>

        <!-- Satir 2 Duyurular -->
        <div class="custom-shape-divider-bottom-1623439955">
          <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path
              d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
              class="shape-fill"></path>
          </svg>
        </div>

        <section class="pad-tb-24" style="background-color: #f2f4f7">
          <div class="pad-25-per">
            <h3 class="center-text sec-h3">Duyurular</h3>
            <ul class="mdl-list">
              <li class="mdl-list__item">
                <span class="mdl-list__item-primary-content">
                  <i class="material-icons mdl-list__item-icon">campaign</i>
                  <div class="li-inner-wrap">
                    11. Uluslararası Hisarlı Ahmet Sempozyumu için özet gönderim süreci başlamıştır.
                    <a href="#">Özet göndermek için tıklayınız.</a>
                  </div>
                </span>
              </li>

              <li class="mdl-list__item">
                <span class="mdl-list__item-primary-content">
                  <i class="material-icons mdl-list__item-icon">campaign</i>
                  <div class="li-inner-wrap">Özet gönderimi 15 Nisan 2021'de sona erecektir.</div>
                </span>
              </li>
              <li class="mdl-list__item">
                <span class="mdl-list__item-primary-content">
                  <i class="material-icons mdl-list__item-icon">campaign</i>
                  <div class="li-inner-wrap">
                    1. Ulusal Hisarlı Gençlik Seminerleri'ne kabul edilen çalışmalar belirlendi.
                    <a href="#">Listeye ulaşmak için tıklayınız.</a>
                  </div>
                </span>
              </li>
            </ul>
          </div>
        </section>

        <div class="custom-shape-divider-top-1623440107">
          <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path
              d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
              class="shape-fill"></path>
          </svg>
        </div>

        <!-- Satir 3 Konusmacilar -->
        <section class="pad-tb-24">
          <h3 class="center-text sec-h3">Davetli Konuşmacılar</h3>
          <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--6-col-phone">
              <!-- Card -->
              <div class="mdl-card mdl-shadow--2dp person-card" style="background-image: url('img/people/nadja.png')">
                <div class="mdl-card__actions">Nadja Wallaszkovits</div>
              </div>
              <!-- Eof Card -->
            </div>

            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--6-col-phone">
              <!-- Card -->
              <div class="mdl-card mdl-shadow--2dp person-card"
                style="background-image: url('img/people/johannes.png')">
                <div class="mdl-card__actions">Johannes Kretz</div>
              </div>
              <!-- Eof Card -->
            </div>

            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--6-col-phone">
              <!-- Card -->
              <div class="mdl-card mdl-shadow--2dp person-card" style="background-image: url('img/people/john.png')">
                <div class="mdl-card__actions">John Rink</div>
              </div>
              <!-- Eof Card -->
            </div>

            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--6-col-phone">
              <!-- Card -->
              <div class="mdl-card mdl-shadow--2dp person-card" style="background-image: url('img/people/turan.png')">
                <div class="mdl-card__actions">Turan Sağer</div>
              </div>
              <!-- Eof Card -->
            </div>
          </div>

          <div class="mdl-grid" style="justify-content: center">
            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--6-col-phone">
              <!-- Card -->
              <div class="mdl-card mdl-shadow--2dp person-card" style="background-image: url('img/people/ruhi.png')">
                <div class="mdl-card__actions">Ruhi Ayangil</div>
              </div>
              <!-- Eof Card -->
            </div>

            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--6-col-phone">
              <!-- Card -->
              <div class="mdl-card mdl-shadow--2dp person-card" style="background-image: url('img/people/melik.png')">
                <div class="mdl-card__actions">Melik Ertuğrul Bayraktarkatal</div>
              </div>
              <!-- Eof Card -->
            </div>
          </div>
        </section>

        <!-- Satir 4 Bilim Kurulu -->
        <section class="pad-tb-24">
          <h3 class="center-text sec-h3">Bilim Kurulu Başkanları</h3>

          <div class="mdl-grid" style="justify-content: center">
            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--6-col-phone">
              <!-- Card -->
              <div class="mdl-card mdl-shadow--2dp person-card" style="background-image: url('img/people/cihan.png')">
                <div class="mdl-card__actions">Cihan Işıkhan</div>
              </div>
              <!-- Eof Card -->
            </div>

            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--6-col-phone">
              <!-- Card -->
              <div class="mdl-card mdl-shadow--2dp person-card"
                style="background-image: url('img/people/abdullah.png')">
                <div class="mdl-card__actions">Abdullah Akat</div>
              </div>
              <!-- Eof Card -->
            </div>
          </div>
        </section>

        <!-- Satir 5 Teşekkürler -->
        <div class="custom-shape-divider-bottom-1623440211">
          <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path
              d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
              class="shape-fill"></path>
          </svg>
        </div>

        <section class="pad-tb-24" style="background-color: #f2f4f7">
          <div class="pad-25-per">
            <h3 class="center-text sec-h3">Katkılarınızdan Dolayı Teşekkür Ederiz</h3>
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
                <span class="mdl-list__item-primary-content">Kütahya milli eğitim müdürü Sn. Hasan
                  Başyiğit</span>
              </li>
              <li class="mdl-list__item">
                <span class="mdl-list__item-primary-content">Kütahya Ticaret ve Sanayi Odasi Başkanı Sn.
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
                  Sponsor)"</span>
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
  (function() {
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