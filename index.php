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
            line-height: 20px;
        }

        .mdl-list__item-icon, .mdl-list__item-icon.material-icons {
            width: 20px;
            height: 20px;
        }

        .custom-shape-divider-top-1 {
            top: 0;
            left: 0;
            width: 100%;
            overflow: hidden;
            line-height: 0;
        }

        .custom-shape-divider-top-1 svg {
            position: relative;
            display: block;
            width: calc(120% + 2px);
            height: 30px;
        }

        .custom-shape-divider-top-1 .shape-fill {
            fill: #F2F4F7;
        }

        .custom-shape-divider-top-2 .shape-fill {
            fill: #fff;
        }

        .custom-shape-divider-bottom-2 {
            bottom: 0;
            left: 0;
            width: 100%;
            overflow: hidden;
            line-height: 0;
            transform: rotate(180deg);
        }

        .custom-shape-divider-bottom-2 svg {
            position: relative;
            display: block;
            width: calc(120% + 2px);
            height: 30px;
            transform: rotateY(180deg);
        }

        .custom-shape-divider-bottom-2 .shape-fill {
            fill: #F2F4F7;
        }

        @media screen and (min-width: 768px) {
            .img-afis {
                width: 80%;
            }
        }

        @media screen and (min-width: 1024px) {
            .img-afis {
                width: 75%;
            }
        }

        @media screen and (min-width: 1200px) {
            .img-afis {
                width: 50%;
            }
        }

        @media screen and (min-width: 1800px) {
            .img-afis {
                width: 40%;
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
                        <div class="mdl-grid no-pad">
                            <div class="mdl-cell mdl-cell--6-col mdl-cell--12-col-tablet">
                                <ul class="mdl-list no-pad mr-16">
                                    <?php
                                    $sub_categories = $lang_index["alt_basliklar_liste"][$pref_lang];
                                    $sub_category_count = count($sub_categories);
                                    $half_count = ceil($sub_category_count / 2) + 1;
                                    for ($i = 0; $i < $half_count; $i++) { ?>
                                        <li class="mdl-list__item">
                                            <span class="mdl-list__item-primary-content">
                                              <i class="material-icons mdl-list__item-icon">category</i>
                                              <?php echo($sub_categories[$i]); ?>
                                            </span>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                            <div class="mdl-cell mdl-cell--6-col mdl-cell--12-col-tablet">
                                <ul class="mdl-list no-pad mr-16">
                                    <?php
                                    for ($i = $half_count; $i < $sub_category_count; $i++) { ?>
                                        <li class="mdl-list__item">
                                            <span class="mdl-list__item-primary-content">
                                              <i class="material-icons mdl-list__item-icon">category</i>
                                              <?php echo($sub_categories[$i]); ?>
                                            </span>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                        <!-- Eof Alt Basliklar -->
                    </div>
                </div>
            </section>

            <div class="custom-shape-divider-top-1">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                     preserveAspectRatio="none">
                    <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
                          class="shape-fill"></path>
                </svg>
            </div>

            <!-- Satir 1 Duyurular -->
            <section class="pad-tb-24">
                <div class="pad-25-per">
                    <h3 class="center-text sec-h3"><?php echo($lang_index["duyurular"][$pref_lang]); ?></h3>
                    <ul class="mdl-list">
                        <?php
                        $announcements = $lang_index["duyurular_liste"][$pref_lang];
                        for ($i = 0; $i < count($announcements); $i++) {
                            ?>
                            <li class="mdl-list__item">
                                <span class="mdl-list__item-primary-content">
                                  <i class="material-icons mdl-list__item-icon">campaign</i>
                                  <div class="li-inner-wrap">
                                    <?php echo($announcements[$i]); ?>
                                  </div>
                                </span>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </section>

            <div class="custom-shape-divider-bottom-2">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                     preserveAspectRatio="none">
                    <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
                          class="shape-fill"></path>
                </svg>
            </div>


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
            <section class="pad-tb-24" style="background-color: #f2f4f7">
                <h3 class="center-text sec-h3"><?php echo($lang_index["bilim_kurulu_baskani"][$pref_lang]); ?></h3>

                <div class="mdl-grid" style="justify-content: center">

                    <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--6-col-phone">
                        <!-- Card -->
                        <a href="biographies.php#lilian">
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
            <section class="pad-tb-24" style="text-align: center; background-color: #fff;">
                <img src="img/banners/hisarli-12-afis.jpg" class="img-afis">
            </section>

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