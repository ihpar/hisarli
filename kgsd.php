<?php
session_start();

$is_secure = true;

$page_name = "kgsd";

require_once "dbms/utils.php";

require_once "modules/header_prefixes.php";

require_once "langs/lang_global.php";

require_once "langs/lang_kgsd.php";
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
            <h3 class="center-text sec-h3"><?php echo($lang_kgsd["kgsd"][$pref_lang]); ?></h3>

            <h4 class="center-text sec-h4"><?php echo($lang_kgsd["yonetim_kurulu_uyeleri"][$pref_lang]); ?></h4>
            <ul class="mdl-list">
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            <i class="material-icons mdl-list__item-icon">person</i>
              MUSTAFA KEMAL ALTINSOY
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            <i class="material-icons mdl-list__item-icon">person</i>
              NİHAT DELEN
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            <i class="material-icons mdl-list__item-icon">person</i>
              BİRSEN GÜZEN
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            <i class="material-icons mdl-list__item-icon">person</i>
              AHMET UMU
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            <i class="material-icons mdl-list__item-icon">person</i>
              UĞUR TÜKMEN
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            <i class="material-icons mdl-list__item-icon">person</i>
              MURAT SARIYILDIZ
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            <i class="material-icons mdl-list__item-icon">person</i>
              LÜTFÜ GÜRPINAR          </span>
              </li>
            </ul>

            <h4 class="center-text sec-h4"><?php echo($lang_kgsd["dernek_uyeleri"][$pref_lang]); ?></h4>
            <ul class="mdl-list">
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            <i class="material-icons mdl-list__item-icon">person</i>
              AKİL GÜR
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            <i class="material-icons mdl-list__item-icon">person</i>
              AHMET SAĞLAM
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            <i class="material-icons mdl-list__item-icon">person</i>
              DOĞAN ŞAPCI
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            <i class="material-icons mdl-list__item-icon">person</i>
              HÜSEYİN EFE
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            <i class="material-icons mdl-list__item-icon">person</i>
              ERHAN AKALIN
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            <i class="material-icons mdl-list__item-icon">person</i>
              CELAL KARABAY
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            <i class="material-icons mdl-list__item-icon">person</i>
              AHMET ÖZKAYA
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            <i class="material-icons mdl-list__item-icon">person</i>
              AHMET UMU
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            <i class="material-icons mdl-list__item-icon">person</i>
              M.ALİ GÖKER
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            <i class="material-icons mdl-list__item-icon">person</i>
              İSMAİL YİĞİT
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            <i class="material-icons mdl-list__item-icon">person</i>
              NİHAT DELEN
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            <i class="material-icons mdl-list__item-icon">person</i>
              MEHMET GÜRSOY
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            <i class="material-icons mdl-list__item-icon">person</i>
              OSMAN ZEKİ COŞKUN
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            <i class="material-icons mdl-list__item-icon">person</i>
              A.ALİ KADIOĞLU
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            <i class="material-icons mdl-list__item-icon">person</i>
              HASAN H.ÖZMUTAF
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            <i class="material-icons mdl-list__item-icon">person</i>
              LÜTFÜ GÜRPINAR
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            <i class="material-icons mdl-list__item-icon">person</i>
              BİRSEN GÜZEN
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            <i class="material-icons mdl-list__item-icon">person</i>
              AYŞE ECE DELEN
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            <i class="material-icons mdl-list__item-icon">person</i>
              SEMA GÜRAL
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            <i class="material-icons mdl-list__item-icon">person</i>
              CEYDA ÇETİN
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            <i class="material-icons mdl-list__item-icon">person</i>
              İSMET BAĞRIYANIK
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            <i class="material-icons mdl-list__item-icon">person</i>
              UĞUR TÜRKMEN
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            <i class="material-icons mdl-list__item-icon">person</i>
              GÜLER YILMAZ
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            <i class="material-icons mdl-list__item-icon">person</i>
              H.İBRAHİM TÜRKOĞLU
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            <i class="material-icons mdl-list__item-icon">person</i>
              MEHMET KOÇER
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            <i class="material-icons mdl-list__item-icon">person</i>
              MURAT SARIYILDIZ
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            <i class="material-icons mdl-list__item-icon">person</i>
              NURSEL SARIYILDIZ
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            <i class="material-icons mdl-list__item-icon">person</i>
              İBRAHİM ERDEYER
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            <i class="material-icons mdl-list__item-icon">person</i>
              RECEP ZENGİN
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            <i class="material-icons mdl-list__item-icon">person</i>
              ERCİYES AKÇAY
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            <i class="material-icons mdl-list__item-icon">person</i>
              ALİ RIZA MUSLU
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            <i class="material-icons mdl-list__item-icon">person</i>
              MEHMET YILDIRIM
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            <i class="material-icons mdl-list__item-icon">person</i>
              ALİ SOYCAN
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            <i class="material-icons mdl-list__item-icon">person</i>
              SERDAR SÜLÜKİ
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            <i class="material-icons mdl-list__item-icon">person</i>
              YILMAZ DURMAZ
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            <i class="material-icons mdl-list__item-icon">person</i>
              FAHRİ ÇETİNKAYA
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            <i class="material-icons mdl-list__item-icon">person</i>
              HASAN DURGUN
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            <i class="material-icons mdl-list__item-icon">person</i>
              MÜKERREM SELÇUKER
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            <i class="material-icons mdl-list__item-icon">person</i>
              AHMET ÇAKMAK
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            <i class="material-icons mdl-list__item-icon">person</i>
              HÜRDOĞAN ÇELİK
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            <i class="material-icons mdl-list__item-icon">person</i>
              AYŞE KAÇAN
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            <i class="material-icons mdl-list__item-icon">person</i>
              MUSTAFA KEMAL ALTINSOY          </span>
              </li>
            </ul>

            <h4 class="center-text sec-h4"><?php echo($lang_kgsd["dernek_etkinlikleri"][$pref_lang]); ?></h4>
            <div>
              <p>27-28-29 Ağustos 1997&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Kütahya
                Çavdarhisar Kültür Ve Turizm Festivalinde Kültür Sarayında açılan sergilere eserler ile (Çini, Resim,
                Elmas, Takılar gibi) katılım<br></p>

              <p>6 Eylül 1997 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Kütahya Kültür Sarayında Türk Sanat Müziği konseri</p>

              <p>24-29 Kasım 1997 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ankara
                Türk-Amerikan Derneğinde Kütahya Haftası etkinliği tertip edilerek konser, sergiler ve gala gecesinde
                yemek, müzik ve tarihi bayan kıyafetleri defilesi</p>

              <p>Mart 1998 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Kütahya Kültür Sarayında Tiyatro kolumuzca Refik Erduran’ın “Bir Ayı Masalı” oyunu sahneye
                konulmuştur.</p>

              <p>08/13Haziran 1998 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;Eskişehir’de Kütahya Tanıtım Haftası Etkinliklerinde sergiler düzenlenmiş ve 10.06.1998 tarihinde
                büyük bir gala gecesi düzenlenerek müzik ve yemek verilmiş ve tarihi bayan giysileri defilesi
                yapılmıştır.</p>

              <p>25 Kasım /1Aralık 1998 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bursa’da Kütahya
                Tanıtım Haftası düzenlenerek sergiler ve gala gecesi otelde Kütahya Halk Oyunları, müzik konseri ve
                tarihi kadın kıyafetleri defilesi yemek eşliğinde yapılmıştır.</p>

              <p>Haziran 1999 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                (Tuncay Cücenoğlunun) “Dosya” isimli Tiyatro eseri sahneye konulmuştur.</p>

              <p>26 Haziran 1999 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Kütahya Kültür Sarayında Türk Müziği Konseri</p>

              <p>26 Haziran 1999&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Kültür Sarayında Osmanlı Devletinin Kuruluşunun 700. yılının kutlamaları Münasebeti ile Osmanlı
                Padişahlarının kendi bestelerinden derlenen Türk Müziği Konseri icra edilmiştir.</p>

              <p>07/16 Nisan 2000 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                İstanbul Harbiye Askeri Müzede “İl İl Türkiye Kütahya Haftası” yapılmış olup; resim, çini, tarihi bayan
                giysisi ve diğer (Elde yapılan örtüler gibi). Altın ve Gümüş Eserler Sergisi.</p>

              <p>10 Ekim 2000&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                “THE PRESİDENT” Otelinde Türk Basınının iştiraki ile tarihi bayan giysileri defilesi.</p>

              <p>06 Mayıs 2000 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Türk müziği topluluğumuzca Kütahya Kültür Sarayında konser.</p>

              <p>08/14 Kasım 2000 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                İzmir Atatürk Kültür Merkezinde basın iştiraki ile Resim, çini, kuyumculuk sanatı eserleri ve tarihi
                kadın el işlemeleri sergileri.</p>

              <p>13 Kasım 2001 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Gala gecesi İzmir “Balçova Prenses Otelinde” yemekli Kütahya Türküleri ve Türk Müziği eşliğinde Kütahya
                Tanıtım Gecesinde; tarihi bayan giysileri defilesi düzenlenmiştir. &nbsp;(Gala gecelerinde yapılan bütün
                defilelerde Kütahyalı kızlarımız mankenlik yapmışlardır. Defileler üç etaplı olup birinci etapta
                yirminci yüzyılda elle dokunmuş modern gece kıyafetlerinin eski Türk motifleri ile yapılmış olması
                orijinaldir. 2.etapta Kütahya Kına Gecelerinde bayanlarca giyilen bütün Kütahya kıyafetlerinin elle,
                kasnakta ve gergefte işlenmiş olması ayrıcalığı vardır. Yaklaşık 100-150-200-250-300 senelik tarihi
                sandıklarda saklanan antika kıyafetler olup sadece derneğimizce defilede kullanılması çok büyük bir
                ayrıcalıktır)</p>

              <p>2001 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Kütahya’da Çini sanatçılarının 1951 senesinde 5846 sayılı kanununa göre gelir vergisinden muaf olup
                “stopaj” ile belge düzenlenmesine kurul kurulmuş ve Çini Sanatçısı Eser Belgesi almaya hak kazanmıştır.
                Bu husus derneğimizin ciddi takibi neticesinde meydana çıkartılmıştır.</p>

              <p>24 Mayıs 2002&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Kütahya Kültür Sarayında Derneğimizce Klasik Türk Müziği Konseri.</p>


              <p>23 Haziran 2002 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Dernek Türk Müziği topluluğu tarafından Kütahya Kültür Sarayında Klasik Türk Müziği konseri</p>


              <p>30 Eylül /09 Kasım 2002 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ankara Zafer Çarşısında
                Kütahya Tanıtım Haftası Etkinliği&nbsp; koordinasyonu yapılmış ve resim, çini,bayan tarihi el işlemeleri
                ve giysileri sergisi yapılmıştır.</p>


              <p>31 Mayıs /21 Haziran 2003 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Kütahya Kültür Sarayında Türk Müziği
                Konseri.</p>


              <p>Şubat 2004 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Dumlupınar Üniversitesi’nde Türk Müziği Konseri.</p>


              <p>09 Aralık 2004 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Avrasya İzmir Fuarına Derneğimizce el sanatlarımız ile iştirak edilmiştir.</p>


              <p>11/21 Kasım 2005 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Beylerbeyi Sarayı Bahçesindeki 2.Mahmut’tan kalma 130 metre boyunda 5 metre genişliğindeki 650m²‘lik&nbsp;
                Tünel Sergi Sarayı Milli Saraylar Milli Saraylar Daire Başkanlığı tarafından T.B.M.M&nbsp; onayı ile
                derneğimize tahsis edilmiş olup çini, resimler, bayan takıları, altın ve elmas mücevherler ile tarihi
                bayan giysilerinin elde kasnak ve gergef ile işlenmiş eserleri sergilenmiş tarihi kıyafetlerin yirminci&nbsp;
                yüzyılda yapılmış gece kıyafetlerine işlenmiş olup motifleri Kütahya kına gecelerinde gergef ve kasnakta
                yapılmış bayan kıyafetleri ile yaklaşık 100 yıllık olan 150-200-250-300 yıllık altın ve gümüş simle
                işlenmiş tarihi kıyafetler defilesi Kütahyalı manken kızlarımız tarafından gerçekleştirilmiştir.</p>


              <p>16 Haziran 2006 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Kütahya Azot Sitesi salonunda Türk Müziği Konseri.</p>


              <p>20 Ekim 2007 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Kütahya
                Kültür Sarayında Türk Müziği Konseri.</p>


              <p>26 Nisan 2008 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Polis Evi Salonunda derneğimizin kuruluşunun 10.yılı yemekli ve müzikli olarak kutlama etkinliği.</p>


              <p>10 Ekim 2008 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Dumlupınar Üniversitesi Merkez Kampüsü Konser Salonunda<br>Atatürk’ümüzün Sevdiği&nbsp; Arialar, Türk
                Sanat Müziği eserleri ve Türküleri ile Kütahya Türküleri Konseri Piyanist, Tenor ve Soprano katılımıyla
                &nbsp;ve Kütahya Güzel Sanatlar Lisesi Korosu desteğiyle &nbsp;ile Atatürk’ümüzü Anma Gecesi.</p>


              <p>27 Aralık 2008 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Kütahya Kültür Sarayında Müzikli Operet/Müzikaller sunumu.</p>

              <p>Uluslararası Hisarlı Ahmet Sempozyumları (2009-2021)</p>

            </div>

            <h4 class="center-text sec-h4"><?php echo($lang_kgsd["dernek_tuzugu"][$pref_lang]); ?></h4>
            <ul class="mdl-list">
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            Madde:1-Derneğin adı: Güzel Sanatlar Derneği’dir.
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            Madde:2-Derneğin Merkezi Kütahya’dır.
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            Madde:3-Derneğin ikametgâh adresi: Belediye Kültür Sarayı kat:1 43100/Kütahya
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            Madde:4-Derneğin amacı: Evrensel, yöresel, geleneksel pratik sanatlar ve güzel sanatların farklı dallarında uğraşanları bir araya getirmek, bu sanatlara meyilli kişileri, gençleri teşvik etmek, güzel sanatların (Edebiyat, müzik, tiyatro, sinema, TV, resim, mimari, heykel, fotoğraf dallarında yöresel olarak ağaç oymacılığı, dokumacılık, arıcılık, çini, folklor v.b) tüm dallarda yurt içinde ve yurt dışında faaliyetler gösterip sergiler açmak kurulmuş ve kurulacak olan Kültür Dernekleri federasyon ve konfederasyonlarına katılmak. Kütahya il ve ilçelerinde derneğin şubelerini açmak.
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            a)-Dünüyle bugünüyle çiniyi tanıtıp geliştirerek geleceğe aktarmak, belgesellerle, broşürlerle, konferanslarla, sergilerle evrenselleştirmek.
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            b)-Antik, geleneksel, yöresel, alaturka, elmas ve gümüş işlemeciliğini geliştirmek için okul ve kurslar açarak bunlarla ilgili seminerler, belgeseller, sergiler düzenlemek.
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            c)-Resmin bütün dallarında eser üreten ressamları bir araya getirmek, eserlerini sergilemek meraklı-yetenekli gençleri teşvik edici kurslar düzenlemek.
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            d)-Kütahya yöresinin öz folklorunu araştırıp, orijinal şekliyle sergilemek ve belgeselleştirmek.
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            e)-Müziğin bütün dallarında aslına uygun çalışmalar yapmak, bunları yurt içinde ve yurt dışında sergilemek.
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            f)-El sanatlarımızın ağaç oymacılığını geliştirmek, teşvik etmek, buna paralel olarak dokuma sanatımızı bakır işçiliğini de geliştirmek.
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            g)-Kütahya da yetişmiş Kütahya kültürüne hizmet etmiş sanatçıların ve büyüklerimizin adına günler tertip edilmesi, arşivlerin araştırılması doğru belgelerin derlenmesi ve halka yayınlanması gerçekleştirmek.
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            ğ)-Zafer haftası ile ilgili sanatsal faaliyetleri düzenlemek.
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            h)-Kütahya kültürüne katkıda bulunan, ferdi hizmetler veren kişilerle işbirliği yaparak bu kişilerin faaliyetlerinden yararlanmak, faaliyetlerine katkıda bulunmak. (sanat evleri ve özel müzeler gibi)
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            ı)-İl Kültür ve Turizm Müdürlüğü ile işbirliği yapıp ilimizde bulunan tarihi yerlerin korunması ve restorasyonu ve bu eserlerin üzerine kimlere ait olduklarını belgeleyecek tanıtım levhalarının konulması, yöreye ait tarihi giysilerin aksesuarların madeni eşyaların porselen, seramik çinicilik el dokuma ve kilim sanatı ahşap işçiliği gibi eşyaların sanayini teşvik etmek sergilemek hatıra eşya satış yerleri kurmak.
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            Madde 5-Derneğe 18 yaşını bitirmiş medeni haklarını kullanmaya haiz Güzel sanatlara ilgi duyan eser üreten her Türk Vatandaşı yönetim kurulunun kararı ile asli üye olabilir. 2908 sayılı kanunun 4. Maddesinden sayılan dernek kurma hakkından mahrum edilmiş kişiler derneğe üye olamazlar.
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            Madde 6-Dernek üyeliği istifa sureti ile sona erdiği gibi birikmiş aidatlarını ödemeyenler ve gerektiğinde aşağıda gösterileceği üzere yönetim kurulu kararı ile de son bulabilir.
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            Madde 7-Derneğin organları şunlardır.
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            a-Genel kurul
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            b-Yönetim kurulu
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            c-Denetim kurulu
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            Madde 8-Dernek genel kurulu olağan toplantısını 3 yılda bir ve haziran ayı içerisinde yapar.          </span>
              </li>
            </ul>

            <h4 class="center-text sec-h4"><?php echo($lang_kgsd["dernek_yonetim_kurulu"][$pref_lang]); ?></h4>
            <ul class="mdl-list">
              <li class="mdl-list__item mdl-list__item--two-line">
                <span class="mdl-list__item-primary-content">
                  <i class="material-icons mdl-list__item-avatar">person</i>
                  <span>MUSTAFA KEMAL ALTINSOY (Başkan)</span>
                  <span class="mdl-list__item-sub-title">Sanatçı</span>
                </span>
              </li>
              <li class="mdl-list__item mdl-list__item--two-line">
                <span class="mdl-list__item-primary-content">
                  <i class="material-icons mdl-list__item-avatar">person</i>
                  <span>NİHAT DELEN</span>
                  <span class="mdl-list__item-sub-title">İş adamı</span>
                </span>
              </li>
              <li class="mdl-list__item mdl-list__item--two-line">
                <span class="mdl-list__item-primary-content">
                  <i class="material-icons mdl-list__item-avatar">person</i>
                  <span>UĞUR TÜRKMEN</span>
                  <span class="mdl-list__item-sub-title">Akademisyen</span>
                </span>
              </li>
              <li class="mdl-list__item mdl-list__item--two-line">
                <span class="mdl-list__item-primary-content">
                  <i class="material-icons mdl-list__item-avatar">person</i>
                  <span>ALİ SARIKOYUNCU</span>
                  <span class="mdl-list__item-sub-title">Akademisyen</span>
                </span>
              </li>
              <li class="mdl-list__item mdl-list__item--two-line">
                <span class="mdl-list__item-primary-content">
                  <i class="material-icons mdl-list__item-avatar">person</i>
                  <span>ADİL ÖZKAN</span>
                  <span class="mdl-list__item-sub-title">Sanatçı</span>
                </span>
              </li>
              <li class="mdl-list__item mdl-list__item--two-line">
                <span class="mdl-list__item-primary-content">
                  <i class="material-icons mdl-list__item-avatar">person</i>
                  <span>HALİM TÜRKMEN</span>
                  <span class="mdl-list__item-sub-title">Öğretmen</span>
                </span>
              </li>
              <li class="mdl-list__item mdl-list__item--two-line">
                <span class="mdl-list__item-primary-content">
                  <i class="material-icons mdl-list__item-avatar">person</i>
                  <span>OSMAN ÖZDEMİR</span>
                  <span class="mdl-list__item-sub-title">Öğretmen</span>
                </span>
              </li>
            </ul>

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