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
            <h3 class="center-text sec-h3"><?php echo($lang_boards["kurullar"][$pref_lang]); ?></h3>

            <!-- Bilim Kurulu -->
            <h4 class="center-text sec-h4"><?php echo($lang_boards["bilim_kurulu_baskanlari"][$pref_lang]); ?></h4>
            <table class="mdl-data-table">
              <tbody>
              <tr>
                <td>
                  Abdullah AKAT
                </td>
                <td>
                  İstanbul Üniversitesi
                </td>
              </tr>
              <tr>
                <td>
                  Cihan IŞIKHAN
                </td>
                <td>
                  Dokuz Eylül Üniversitesi
                </td>
              </tr>
              </tbody>
            </table>

            <h4 class="center-text sec-h4"><?php echo($lang_boards["bilim_kurulu_uyeleri"][$pref_lang]); ?></h4>
            <table class="mdl-data-table">
              <tbody>
              <tr>
                <td>
                  A. Bülent ALANER
                </td>
                <td>
                  Anadolu Üniversitesi
                </td>
              </tr>
              <tr>
                <td>
                  Abdullah AKAT
                </td>
                <td>
                  İstanbul Üniversitesi
                </td>
              </tr>
              <tr>
                <td>
                  Andrea LODGE
                </td>
                <td>
                  Five Towns College New York (ABD)
                </td>
              </tr>
              <tr>
                <td>
                  Arda EDEN
                </td>
                <td>
                  Yıldız Teknik Üniversitesi
                </td>
              </tr>
              <tr>
                <td>
                  Cenk GÜRAY
                </td>
                <td>
                  Hacettepe Üniversitesi
                </td>
              </tr>
              <tr>
                <td>
                  Cihan IŞIKHAN
                </td>
                <td>
                  Dokuz Eylül Üniversitesi
                </td>
              </tr>
              <tr>
                <td>
                  Ebru GÜNER CANBEY
                </td>
                <td>
                  Dokuz Eylül Üniversitesi
                </td>
              </tr>
              <tr>
                <td>
                  Hatice Selen TEKİN
                </td>
                <td>
                  Sakarya Üniversitesi
                </td>
              </tr>
              <tr>
                <td>
                  Johannes KRETZ
                </td>
                <td>
                  Universität für Musik und Darstellende Kunst Wien
                  (Avusturya)
                </td>
              </tr>
              <tr>
                <td>
                  John RINK
                </td>
                <td>
                  University of Cambridge (İngiltere)
                </td>
              </tr>
              <tr>
                <td>
                  Lilian Tonella TÜZÜN
                </td>
                <td>
                  Anadolu Üniversitesi
                </td>
              </tr>
              <tr>
                <td>
                  Marcus SIQUEIRA
                </td>
                <td>
                  Conservatorio di Musica Giovan Battısta Martini Bologna (İtalya)
                </td>
              </tr>
              <tr>
                <td>
                  Mauricio de BONIS
                </td>
                <td>
                  São Paulo State University&nbsp; (Brezilya)
                </td>
              </tr>
              <tr>
                <td>
                  Maja ACKAR ZLATAREVIC
                </td>
                <td>
                  <a href="http://www.unsa.ba/">Univerzitet u Sarajevu</a> (Bosna Hersek)
                </td>
              </tr>
              <tr>
                <td>
                  Mehmet Can ÖZER
                </td>
                <td>
                  Yaşar Üniversitesi
                </td>
              </tr>
              <tr>
                <td>
                  Peter SNAPPER
                </td>
                <td>
                  Anadolu Üniversitesi
                </td>
              </tr>
              <tr>
                <td>
                  Simona CAVUOTO
                </td>
                <td>
                  Conservatorio di Musica Tito Schipa di Lecce (İtalya)
                </td>
              </tr>
              <tr>
                <td>
                  Songül KARAHASANOĞLU
                </td>
                <td>
                  İstanbul Teknik Üniversitesi
                </td>
              </tr>
              <tr>
                <td>
                  Tatiana OLİVİERA CATANZARO
                </td>
                <td>
                  Universidade de Brasília (Brezilya)
                </td>
              </tr>
              <tr>
                <td>
                  Thomas James SAMSON
                </td>
                <td>
                  Royal Holloway University of London (İngiltere)
                </td>
              </tr>
              <tr>
                <td>
                  Türev BERKİ
                </td>
                <td>
                  Hacettepe Üniversitesi
                </td>
              </tr>
              <tr>
                <td>
                  Wai Ling CHEONG
                </td>
                <td>
                  The Chinese University of Hong Kong (Çin)
                </td>
              </tr>
              <tr>
                <td>
                  Zafer KURTASLAN
                </td>
                <td>
                  Ankara Müzik ve Güzel Sanatlar Üniversitesi
                </td>
              </tr>
              <tr>
                <td>
                  Zeki NACAKÇI
                </td>
                <td>
                  Mehmet Akif Ersoy Üniversitesi
                </td>
              </tr>
              </tbody>
            </table>

            <!-- Düzenleme Kurulu -->
            <h4 class="center-text sec-h4"><?php echo($lang_boards["duzenleme_kurulu"][$pref_lang]); ?></h4>
            <table class="mdl-data-table">
              <tbody>
              <tr>
                <td>
                  <p>Uğur TÜRKMEN (Başkan)</p>
                </td>
                <td>
                  <p>Çanakkale Onsekiz Mart Üniversitesi</p>
                </td>
              </tr>
              <tr>
                <td>
                  <p>Adem Kılıç</p>
                </td>
                <td>
                  <p>Ordu Üniversitesi</p>
                </td>
              </tr>
              <tr>
                <td>
                  <p>Bensu KİTİRCİ</p>
                </td>
                <td>
                  <p>Afyon Kocatepe Üniversitesi</p>
                </td>
              </tr>
              <tr>
                <td>
                  <p>Betül GÜVEN</p>
                </td>
                <td>
                  <p>Afyon Kocatepe Üniversitesi</p>
                </td>
              </tr>
              <tr>
                <td>
                  <p>Çağhan ADAR</p>
                </td>
                <td>
                  <p>Afyon Kocatepe Üniversitesi</p>
                </td>
              </tr>
              <tr>
                <td>
                  <p>Didem KARABAŞ</p>
                </td>
                <td>
                  <p>Afyon Kocatepe Üniversitesi</p>
                </td>
              </tr>
              <tr>
                <td>
                  <p>Dzhuneyt MUSTAFA</p>
                </td>
                <td>
                  <p>Five Towns College New York (ABD)</p>
                </td>
              </tr>
              <tr>
                <td>
                  <p>Erhan BOZKURT</p>
                </td>
                <td>
                  <p>Kütahya Güzel Sanatlar Lisesi</p>
                </td>
              </tr>
              <tr>
                <td>
                  <p>Eyüp KAYA</p>
                </td>
                <td>
                  <p>Kütahya Güzel Sanatlar Lisesi</p>
                </td>
              </tr>
              <tr>
                <td>
                  <p>Ezginur KÜÇÜKDÜRÜM</p>
                </td>
                <td>
                  <p>Afyon Kocatepe Üniversitesi</p>
                </td>
              </tr>
              <tr>
                <td>
                  <p>Fakı Can YÜRÜK</p>
                </td>
                <td>
                  <p>Afyon Kocatepe Üniversitesi</p>
                </td>
              </tr>
              <tr>
                <td>Fatih TAŞ</td>
                <td>Afyon Kocatepe Üniversitesi</td>
              </tr>
              <tr>
                <td>
                  <p>Filiz YILDIZ</p>
                </td>
                <td>
                  <p>Afyon Kocatepe Üniversitesi</p>
                </td>
              </tr>
              <tr>
                <td>
                  <p>Gonca GÖRSEV KILIÇ</p>
                </td>
                <td>
                  <p>Ordu Üniversitesi</p>
                </td>
              </tr>
              <tr>
                <td>
                  <p>Hakan DAĞ</p>
                </td>
                <td>
                  <p>Kütahya Güzel Sanatlar Lisesi</p>
                </td>
              </tr>
              <tr>
                <td>
                  <p>Halim TÜRKMEN</p>
                </td>
                <td>
                  <p>Kütahya Güzel Sanatlar Lisesi</p>
                </td>
              </tr>
              <tr>
                <td>
                  <p>İsmail Kerim AĞRALI</p>
                </td>
                <td>
                  <p>Kütahya Güzel Sanatlar Lisesi</p>
                </td>
              </tr>
              <tr>
                <td>
                  <p>Merve Eken KÜÇÜKAKSOY</p>
                </td>
                <td>
                  <p>Trabzon Üniversitesi</p>
                </td>
              </tr>
              <tr>
                <td>
                  <p>Muzaffer Soner YILMAZ</p>
                </td>
                <td>
                  <p>Afyon Kocatepe Üniversitesi</p>
                </td>
              </tr>
              <tr>
                <td>
                  <p>Osman ÖZDEMİR</p>
                </td>
                <td>
                  <p>Kütahya Güzel Sanatlar Lisesi</p>
                </td>
              </tr>
              <tr>
                <td>
                  <p>Osman Serdar HANÇER</p>
                </td>
                <td>
                  <p>Kütahya Güzel Sanatlar Lisesi</p>
                </td>
              </tr>
              <tr>
                <td>
                  <p>R. Oğuzhan KAVUKÇU</p>
                </td>
                <td>
                  <p>Kütahya Güzel Sanatlar Lisesi</p>
                </td>
              </tr>
              <tr>
                <td>
                  <p>Rabia Nadide YAVUZ</p>
                </td>
                <td>
                  <p>Afyon Kocatepe Üniversitesi</p>
                </td>
              </tr>
              <tr>
                <td>
                  <p>Rıfat BELTEKİN</p>
                </td>
                <td>
                  <p>Afyon Kocatepe Üniversitesi</p>
                </td>
              </tr>
              <tr>
                <td>
                  <p>Rümeysa ÇALIŞKAN</p>
                </td>
                <td>
                  <p>Afyon Kocatepe Üniversitesi</p>
                </td>
              </tr>
              <tr>
                <td>
                  <p>Serkan SARUHAN</p>
                </td>
                <td>
                  <p>Kütahya Güzel Sanatlar Lisesi</p>
                </td>
              </tr>
              <tr>
                <td>
                  <p>Seyhan CANYAKAN</p>
                </td>
                <td>
                  <p>Afyon Kocatepe Üniversitesi</p>
                </td>
              </tr>
              <tr>
                <td>
                  <p>Sibel ÇELİK</p>
                </td>
                <td>
                  <p>Kütahya Güzel Sanatlar Lisesi</p>
                </td>
              </tr>
              <tr>
                <td>
                  <p>Suat DANDİNOĞLU</p>
                </td>
                <td>
                  <p>Afyon Kocatepe Üniversitesi</p>
                </td>
              </tr>
              <tr>
                <td>
                  <p>Suat VERGİLİ</p>
                </td>
                <td>
                  <p>Dokuz Eylül Üniversitesi</p>
                </td>
              </tr>
              <tr>
                <td>
                  <p>Tülay TÜRKMEN</p>
                </td>
                <td>
                  <p>Kütahya Güzel Sanatlar Lisesi</p>
                </td>
              </tr>
              <tr>
                <td>
                  <p>Yunus Emre UĞUR</p>
                </td>
                <td>
                  <p>Afyon Kocatepe Üniversitesi</p>
                </td>
              </tr>
              </tbody>
            </table>

            <!-- Yürütme Kurulu -->
            <h4 class="center-text sec-h4"><?php echo($lang_boards["yurutme_kurulu"][$pref_lang]); ?></h4>
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

            <!-- Onur Kurulu -->
            <h4 class="center-text sec-h4"><?php echo($lang_boards["onur_kurulu"][$pref_lang]); ?></h4>
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