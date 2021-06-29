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


              <p>10 Ocak 2009 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                I. Hisarlı Ahmet ve Kütahya Türküleri Sempozyumu:</p>


              <p>Kütahya Güzel Sanatlar Lisesi Salonunda sabah ve öğleden sonra olmak üzere Türkiye’nin çeşitli
                üniversitelerinden gelen &nbsp;ilim adamlarının katılımı ile “Kütahya Türküleri”nin kaynak kişisi
                Hisarlı Ahmet&nbsp; &nbsp;Sempozyumu kapanış gecesinde &nbsp;Afyon Kocatepe Üniversitesi Türk Halk
                Müziği Bölümü tarafından THM konseri düzenlenmiş ve konsere Hisarlı Ahmet’in büyük oğlu Mustafa
                Hisarlı’da sazı ile iştirak etmiştir.</p>


              <p>Aynı gece meslek hayatının 30 yılını Kütahya İlinde geçiren ve kısa süre önce aramızdan ayrılan müzik
                öğretmeni İbrahim Selman Coşgun’a Vali Bey tarafından Onur Ödülü verilmiştir.</p>


              <p>23 Mayıs 2009 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Kütahya Kültür Sarayı’nda Türk Sanat Müziği Konseri.</p>


              <p>13 Haziran 2009 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Kütahya Kültür Sarayı’nda Afyon Kocatepe Üniversitesi Müzik Bölüm Orkestrası Konseri.</p>


              <p>10 Kasım 2009 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Atamızın ölümünün 71.yılı anma gecesi Belediye Kültür Sarayı&nbsp; Salonunda Atamızın Sevdiği Şarkılar,
                Rumeli türküleri ve Kütahya Türküleri Kütahyalı&nbsp; Kültür Bakanlığı sanatçısı Emel Örgün ve ekibi
                tarafından halkımıza sunulmuştur.</p>


              <p><strong>26-27-28 Mayıs 2011</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <strong>II. ULUSAL HİSARLI AHMET SEMPOZYUMU</strong></p>


              <p>Değişen Toplumda Kültürlenme Ve Kültürleşme Konulu sempozyumun amacı ve kapsamı aşağıda
                belirtilmiştir.</p>


              <p><strong>SEMPOZYUMUN AMACI VE KAPSAMI</strong></p>


              <p>20. yüzyılın en belirgin özelliği, 3. Milenyumda karşılaşacağımız şeylerin habercisi olmasıydı. Geçmiş
                ve geleceğin teknolojik yenilikleri, ekonomideki yeni anlayış ve estetik değerlerin değişimi, toplumun
                değişimiyle birlikte kendini gösterdi. Bu değişim tüm disiplinlerin üzerinde durması gereken bir olgu.
                Yeni yüzyılın müzikteki seslendirme, üretim, dinleme gibi farklılıkları ise müzikolojinin uzak durmaması
                gereken alanlar. Değişen topluma farklı bir gözle bakılmalı, kültür değişimi doğru algılanmalı.
                Walkman’la başlayan ve Discman’la süren müziğin taşınabilirliği bilgisayarlarla birlikte taşınabilir
                bireysel diskotekler yarattı. Yeni müzik türlerinin kendini göstermesi ise kaçınılmazdı.</p>


              <p>Müzikteki beğenimiz ve değer verdiğimiz türlerde içinde yaşadığımız toplum belirleyicidir. İyi
                müzik-kötü müzik ikilemindeki sorun ise; dinleyicinin sosyokültürel deneyiminin gözden kaçırılmasıdır.
                Müzikteki çeşitlilik ise farklı değişkenlere bağlıdır ve insanların kendi kültürel pratiklerinde kendini
                gösterir. Yaşam boyu sahip olunan değerler bütünü (kültürlenme) ve etkileşim sonucu ortaya çıkan
                unsurlar (kültürleşme) artık iç içe yürümek zorundadır.</p>


              <p>“Değişen Toplumda Kültürlenme ve Kültürleşme” ana temasında yapılması planlanan sempozyumun
                interdisipliner bir perspektifle ele alınması ve müziğin edebiyat, psikoloji, sosyoloji, antropoloji ve
                pedagoji gibi disiplinlerden yararlanıldığı bildirilerin sempozyumda sunulmasını bekliyoruz. Alt
                başlıklar:</p>


              <p>Değişen Toplum ve Müzik</p>


              <p>Müzik Geleneklerine Bakış</p>


              <p>Müzikte Yerel ve Küresel Dinamikler</p>


              <p>Yerel Müziklerdeki Değişim (crossover)</p>


              <p>Müzikte Kimlik</p>


              <p>Müzik Beğenisinde Kültürel Etkenler</p>


              <p>Kültürleşmenin Getirdiği Müzik Değişimi</p>


              <p>Müzik Pratiğinde “Scene” ve Alt Kültürler</p>


              <p>Değişim ve Müzik Endüstrisi</p>


              <p>Kültürlenme ve Kültürleşme<br>Kuramları Işığında Popüler Müzikler</p>


              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Sempozyumda 67 bildiri sunulmuş, bir konferans verilmiş, bir panel düzenlenmiş ve 9 konser etkinliği
                gerçekleşmiştir.</p>


              <p><strong>24-26 Mayıs 2012&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  III. ULUSLARARASI&nbsp; HİSARLI AHMET SEMPOZYUMU</strong></p>


              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Yer&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Hilton Garden Inn</p>


              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Tarih&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                24-26 Mayıs 2012</p>


              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Katılımcı Sayısı&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                85</p>


              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Konser Sayısı&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                10</p>


              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Panel &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                1</p>


              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Konferans&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                2</p>


              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Seminer&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                1</p>


              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Sergi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                1</p>


              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Sempozyum Teması</p>


              <p><strong>“MÜZİĞİ ALGILAMAK”</strong></p>


              <p>Yirmi yılı aşkın bir zamandır bilim insanları müzik-beyin ilişkisini inceliyor. Bu süreç aslında çok
                eskilere gidebilir ama sistematik ve interdisipliner olması açısından henüz emekleme aşamasında. Müzik
                beğenisindeki etken unsurlar, müziğin yarattığı psikolojik etkiler, müzikten aldığımız hazzın nedenleri
                gibi yüzlerce soruya yanıt arama çalışmaları farklı disiplinlerden insanları bir araya getiriyor. Bu
                alandaki çalışmaların bu denli yoğun olmasının tek bir nedeni var: müziğin insan yaşamındaki yeri.
                Matejko “müzik benim en büyük silahım” der. Attali ise “müziğin insan yaşamını istila eden bir şey
                olduğunu” söyler. Bir diğer doğru söz de Mahler’den: “senin Beethoven’ın benim Beethoven’ım değil”.
                İnsanların müziği algılaması farklıdır, estetik beğenileri farklıdır, müziğe bakışları farklıdır.
                Değişen toplum beraberindeki kimi etkenlerle müziği artık daha da farklı algılamamızı sağlamakta. 19.
                yüzyıl Avrupa’sında toplum sınıflarının belirginleşmesi, müziği yapmayı, dinlemeyi ve müzik eğitimini
                yeni bir boyuta taşır. Artık geçmiş yüzyılın beş saat süren konserleri değil, sanayi toplumunun hızlanan
                insanları için kısa süreli ve eğlenceli dağarlı konserleri karşımıza çıkar. Aynı şey müzik eğitimi için
                de geçerlidir. Profil, soylu sınıfların bireyleri değil, az önce sözü edilen sınıfın çocuklarıdır. Son
                yüzyılda bu konuda çok şeyin değiştiği bir gerçek. Artık sosyal yapıyı gözetmeden, demografik yapıyı göz
                ardı ederek müzikte herhangi bir konuda yapılan şeylerin tümü boşadır; gerek sektörel gerekse kitle ve
                mesleki müzik eğitimlerinde.</p>


              <p>İlk iki yılda “ulusal” olarak düzenlenen bu yıldan itibaren ise “uluslararası” olarak
                gerçekleştirilecek olan sempozyumun amacı; geçtiğimiz yılın “Değişen Toplumda Kültürlenme ve
                Kültürleşme” temasını bir ileri boyuta götürmektir.&nbsp; Gelişen toplum ve gelişen teknoloji müziği
                dinleme, yapma ve eğitim açısından nereye getirdi, nereye getirmesi planlanmakta?</p>


              <p>Sempozyumun alt başlıkları şöyle:</p>


              <p>Müzik Algısı</p>


              <p>Müzikteki Değişim ve Yansımaları</p>


              <p>Disiplinlerarası Platformda Müzikte Pedagojik Yaklaşımlar; kuramlar, uygulamalar.</p>


              <p>Müziğin Yeni Dinamikleri.</p>


              <p>Müzikte Çokkültürlülük.</p>


              <p>Değişen Yüzyılda Mesleki Çalgı Eğitimi.</p>


              <p>Müzik Eğitiminde Teknoloji Kullanımı (müzik eğitiminde kullanılan güncel teknolojiler: interaktif sanal
                ders uygulamaları, simülasyona dayalı eğitim yöntemleri, akıllı sınıflar…</p>


              <p>Müzik Teknolojisi Eğitimi (elektrik-elektronik, tıp vb. alanlarla doğrudan ilişki halinde olan müzik
                teknolojisinde, eğitim amaçlı değişime açık güncel yöntem ve teknikler).</p>


              <p>Popüler Kültüre Pedagojik Yaklaşımlar.</p>


              <p>Sosyolojide Müzik, Müzikte Sosyoloji.</p>


              <p>Psikolojide Müzik, Müzikte Psikoloji&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>


              <p>Edebiyatta Müzik, Müzikte Edebiyat</p>


              <p><strong>6-8 Haziran 2013&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  IV. ULUSLARARASI HİSARLI AHMET SEMPOZYUMU</strong></p>


              <p>Yer&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Dumlupınar Üniversitesi</p>


              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Tarih&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                6-8 Haziran 2013</p>


              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Katılımcı Sayısı&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                80</p>


              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Konser Sayısı&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                10</p>


              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Panel &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                1</p>


              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Konferans&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                2</p>


              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Seminer&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                1</p>


              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Sergi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                1</p>


              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Sempozyum Teması</p>


              <p><strong>MÜZİK NEREYE GİDİYOR?</strong></p>


              <p>20.Yüzyılın ilk çeyreğinde Debussy, Stravivsky ve Schönberg’in yapıtlarını dinleyen insanların ilk
                tepkileri müziğin bittiği ve yüzlerce yıllık birikimin yerini kakofoni ve karmaşanın aldığı yönündeydi.
                Aslında sözü edilen “yeni müziğin” 1300’lerin <em>Ars Nova</em> ya da 1600’lerin <em>NuoveMusiche</em>’sinden
                bir farkı olmaması gerekiyordu; adı geçen bu besteciler tıpkı Palestrina ya da Beethoven gibi doğmaları
                gerektiği zamanda dünyaya gelmişlerdi ve doğal olarak müzikleri de yaşadıkları anı yansıtmaktaydı.
                Webern, yeni müziğin ne olduğunu soranlara müziğin asırlar boyu gelişimini incelemelerini ve bunu
                yaparlarsa yeni müziğin ne olduğunu anlayacaklarını söylüyordu. Klasik müziğin öldüğü yönündeki savların
                sahibi oldukça fazla. İngiltere’de 2000 yılında düzenlenmeye başlayan “TheClassical BritAwarts”, amacını
                klasik müzik seslendiricilerini desteklemek ve ülkedeki klasik müzik CD satışlarının artırılması olarak
                açıklar. İşin endüstriyel boyutunun gerek bu tür ödüller gerek karşımıza çıkan yeni müzik türleri-ya da
                mutantları- ve gerekse yeni sanatçı ve dinleyici profiliyle doruğa çıktığı net bir şekilde görülmekte.
                Bu tür tartışmaların yalnızca klasik müzikte yapıldığını söylemek yanlış tüm türler, özellikle
                ülkemizdeki müzik türleri için de aynı tartışmalar güncelliğini koruyor. Endüstrinin değer ve pratikleri
                çoğu zaman eleştiri konusu olmuş, aşağılanmış ve saldırılmıştır. Bunun alternatifi “yüksek kültür” olur.
                Endüstri gerçekten kendisiyle savaşılması gereken bir alan mıdır, kültür endüstrisi bu kavganın
                neresindedir ve müzik nereye yol almaktadır? Webern’e mi kulak vermeli yoksa müdahale edemeyeceğimiz bir
                durumu anlamaya ve kabullenmeye mi çalışmalıyız? İyi mi kötü mü yoksa yalnızca bir evrim mi?</p>


              <p>Teması önceki yıl “Değişen Toplumda Kültürlenme ve Kültürleşme”, geçtiğimiz yıl ise&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                “Müzik Algısı” olan Hisarlı Ahmet Sempozyumları insana odaklıydı. Bu yılın teması ise yine insan ve
                toplum odaklı olsa da endüstriyel boyutlara ağırlık vermek sempozyumun amaçlarındandır.</p>


              <p>Alt Başlıklar</p>


              <p>1.Müziğin Endüstriyel Boyutları</p>


              <p>2.Müzik Endüstrisi Nereye Gidiyor?</p>


              <p>3.Kültür Endüstrisine Yeni Bakışlar</p>


              <p>4.Sanatın Popülerleştirilmesi, Popüler Olanın Sanatlaştırılması</p>


              <p>5.Popüler Müzik Pratikleri; Endüstriyel Ve Endüstri Dışı Boyutlar</p>


              <p>6. Müziği İzlemek; TV Müzik Kanalları Ve Vidoeklip Fenomeni</p>


              <p>7.Müzikte Kitle Eğitimine Eleştirel Bakış</p>


              <p>8.21. Yüzyılda Amatör-Genel Ve Profesyonel Müzik Eğitimi Nereye Gidiyor</p>


              <p>9.Popüler Kültür Ve Müzik Eğitimi</p>


              <p>10. Yeni Bir Türk Müziği Mi?</p>


              <p>11.Klasik Müziğin Günümüz Türkiye’sindeki Konumu; Seslendiriciler, Besteciler, Konserler,
                Tartışmalar.</p>


              <p>12. Devlet Ve Müzik</p>


              <p>13. AB Sürecinde Kültür Politikaları</p>


              <p>14.Seslendirme Kurumlarının Geleceği</p>


              <p><strong>29-31 Mayıs 2014&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  V. ULUSLARARASI HİSARLI AHMET SEMPOZYUMU</strong></p>


              <p>Yer&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Kütahya Hilton Garden Inn</p>


              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Tarih&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                29-31 Mayıs 2014</p>


              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Katılımcı Sayısı&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                80</p>


              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Konser Sayısı&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Soma Faciasından Dolayı Konserler iptal edilmiştir.</p>


              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Panel &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                1</p>


              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Konferans&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                2</p>


              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Seminer&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                1</p>


              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Sergi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                1</p>


              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Sempozyum Teması</p>


              <p><strong><em>ŞEHİR ve MÜZİK</em></strong></p>


              <p>Luigi Russolo 1913 manifestosunda şunları söyler: “Eskiden yaşam sessizdi, artık gürültü var”. Şehir
                yaşamında 19. yüzyılın ortalarından itibaren başlayan değişim, inanılmaz bir süratle devam ediyor.
                GeorgSimmel 20. yüzyılın henüz başında kaleme aldığı “Metropol ve Ruhsal Yaşam” başlıklı kitabında şehir
                yaşamının insan zihnini imgeler,&nbsp; izlenimler, duyumlar ve etkinliklerle bombardımana tuttuğunu
                ileri sürer. Bu durum şehir, toplum ve birey arasındaki etkileşimin ne denli yoğun olduğunu gösterir. Jo
                Bell, şehirlerin toplumun eskiden ve şimdi nasıl olduğu ve nasıl olması gerektiği hakkındaki
                düşüncelerin cisimleşmiş hali olduğunu düşünür. Ferdinad Tönnies de, şehir yaşamının bireyler üzerindeki
                etkileriyle ilgilenen yüzlerce sosyologdan yalnızca biri. Tönnie’ye göre cemaat ilişkileri etrafında
                inşa edilmiş olan toplumsal yaşam, dönüşmekte ve yerini daha çok&nbsp; bireyci bir cemiyet yaşamına
                bırakmaktadır.</p>


              <p>Şehirlerin gelişmesinde sanatsal etkinliklerin rolünü tartışmaya gerek yok. Bununla birlikte çok az
                şehir bunun öneminin, ağırlığının ve eşdeğerliliğinin farkında. Belli başlı büyük şehirlerde yaşayan
                bireylerin sahip olduğu kültürel ve sanatsal imkanların&nbsp;&nbsp;&nbsp; diğer bir çok şehirde daha
                kısıtlı olduğu görülür. Hemen her şehirde üniversitelerin kurulduğu, okuma yazma oranlarının her geçen
                gün arttığı, modernleşmenin kırsal kesimlerde bile etkisini hissettirdiği günümüzde bireyler ve
                toplumlar değil, şehri yönetmeye talip olanlar da sanata, özellikle müziğe olan ihtiyacı
                hissetmektedirler. Kökeninde “medeniyet” kavramının olduğu şehre yönelik düşünceler kuşkusuz
                politikacıya, eğitimciye ve sanatçıya göre de farklılık gösterecektir.</p>


              <p>Önceki yıllarda temaları; <em>“Değişen Toplumda Kültürlenme ve Kültürleşme”,“Müzik Algısı”</em>, <em>“Müzik
                  Nereye Gidiyor?”</em> olan Hisarlı Ahmet Sempozyumlarının bu yılki teması da&nbsp; yine insan ve
                toplum odaklı. Araştırmacılardan beklentimiz,&nbsp; alana katkı sağlayıcı ve özellikle içinde
                yaşadıkları şehirlerin müzik yaşantılarına yönelik özgün bildiriler hazırlamaları.&nbsp;</p>


              <p><strong>Alt Başlıklar</strong></p>


              <p>Şehrin müziği</p>


              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Şehir müziği ve alt kültürler</p>


              <p>Modernleşme ve Şehir Hayatındaki Mekânsal Değişimler</p>


              <p>Siyasi Değişimler ve Şehir Müzik Yaşamına Etkileri</p>


              <p>Dinsel Yaşantı Temelinde Sanat ve Müzik Pratikleri (Azınlıklar-Cemaatler-Tarikatlar)</p>


              <p>Sivil Toplum Örgütleri – Müzik İlişkisi ve Şehir Hayatına Etkileri</p>


              <p>Çok Kültürlü Şehirler (Dünü-Bugünü)</p>


              <p>Şehir ve Eğlence Müziği</p>


              <p>Yeni Şehirlinin Müziği</p>


              <p>Şehirlinin Sosyalleşme Aracı Olarak Müzik</p>


              <p>Şehirleşme, Toplumsal Hareketlilik ve Müzik</p>


              <p>Sokak Müziği ve Müzisyenleri</p>


              <p>Şehrin Çalgıları</p>


              <p><strong>18 Ekim 2015&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  BESTECİ NİLÜFER ÖZKAN KONSERİ</strong></p>


              <p>Kütahyalı kadın bestecimiz Nilüfer Özkan’ın bestelerinden oluşan ve AKÜ Devlet konservatuvarı
                sanatçılarınca kaydı yapılan eserlerin&nbsp; yer aldığı CD tanıtım konseri Kütahya kültür sarayında
                gerçekleştirildi.</p>


              <p><strong>29-31 Mayıs 2015&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  VI. ULUSLARARASI HİSARLI AHMET SEMPOZYUMU</strong></p>


              <p>Yer&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Kütahya Hilton Garden Inn</p>


              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Tarih&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                28-30 Mayıs 2015</p>


              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Katılımcı Sayısı&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                70</p>


              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Konser Sayısı&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                12</p>


              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Panel &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                1</p>


              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Konferans&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                1</p>


              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Sergi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                2</p>


              <p>Sempozyum Teması&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>


              <p>Müzik Dinleme ve Çalgı Performansında Ses-Tını-Algı</p>


              <p>Ses ve tını üzerine yapılan çalışmaların çokluğu tek bir şeyi ifade eder: Karmaşık yapıları ve algının
                ikisinin de varlığı için gereken bir şey olması. Fizyolojik algı ilk adımdır ama süreç, beyinde son
                bulur. Önce sesi ardından tınıyı algılayan beyin, bu boyutuyla araştırmacılara yeni ufuklar açar. Farklı
                müzik kültürlerinin çözümü için etnomüzikolojinin gösterdiği yol tını analizidir. Müziğin tınısal
                analizi, tınının bir kültürel değer olarak müzikbilimcilere inanılmaz bir araştırma alanı yaratır. 20.
                yüzyılın başlarından itibaren Avrupa dışı müzik kültürlerinin anlaşılmasında batı terminolojisinin
                yetersizliği gerek ses gerekse tını için yeni adlandırmalara neden olur. Bu da bize her kültürün kendine
                özgü bir ses ve tını anlamları olduğunu gösterir. Ses renginden öte tını olarak tercih edilen ve sound
                olarak da karşımıza çıkan sözcüklerin anlam boyutlarının genişliği şaşırtıcı ancak bir o kadar da
                doğaldır. İzmir’li bir bağlama sanatçısı, çalgı yapımcısına kendisi için yapmasını istediği bağlamayı
                “nezleli” olarak tanımlıyor. Nezleli, bu sanatçıya göre doğal duyumdan uzak “hafif cızlama” biçiminde
                yeni bir tanımı beraberinde getiriyor. Sap kalınlıklarının ya da kullanılan ağacın farklı olması,
                performansçıların değişik tercihleri anlamına geliyor. Tını algısının çok boyutlu olması, özellikle
                nöropsikoloji alanında çalışanların da yoğun ilgisini çekmekte. Akustik, psikoakustik, dilbilim, eğitim
                ve onlarca disiplinde çalışan araştırmacılar, çeşitli kuramsal çerçevelerle farklı araştırmalar yapmayı
                sürdürüyor.</p>


              <p>Sürdürülebilir yapısıyla dikkat çeken, müzik ve müzikbilim çalışmalarına yeni ve özgün araştırmalar
                kazandırmayı amaç edinen Hisarlı Ahmet Sempozyumu’nun altıncısının konusu “ses – tını – algı” olarak
                belirlendi.</p>


              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Sempozyum Alt Başlıkları:</p>


              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Müziğin Tınısal Analizi ve Yöntemleri</p>


              <p>Etnomüzikoloji’de Kültürel Çevre ve Tınısal Algı</p>


              <p>Kültürel Doku ve Tını</p>


              <p>Çalgı Tınıları ve Analizleri</p>


              <p>Performansçıların ve Çalgı Yapımcılarının Tınıya Yönelik Beklentileri</p>


              <p>Çalgı Eğitiminde Tını</p>


              <p>Müzik Pedagojisi ve Tını</p>


              <p>Çok Anlamlı Bir Fenomen: Sound</p>


              <p>Müzik Endüstrisi ve Profesyonel Müzik Kayıtları</p>


              <p>Çerçevesinde Tınısal Değişim</p>


              <p>Multidisipliner Araştırmalarda Ses ve Tını</p>


              <p>Mekân Akustiği</p>


              <p><strong>28-30 Mayıs 2016&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  VII. ULUSLARARASI HİSARLI AHMET SEMPOZYUMU</strong></p>


              <p>Yer&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Kütahya Hilton Garden Inn</p>


              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Tarih&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                28-30 Mayıs 2016</p>


              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Katılımcı Sayısı&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                52</p>


              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Konser Sayısı&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                11</p>


              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Panel &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                1</p>


              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Konferans&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                1</p>


              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Sergi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                2</p>


              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Atölye Çalışması&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                6</p>


              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Sempozyum Teması</p>


              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <strong>Müzik Terapi</strong></p>


              <p>Weber; “Melodi, insan ruhunun lisanıdır” derken,&nbsp; Eflatun müziği;&nbsp; “ruhu terbiye eden yegâne
                vasıta” olarak görür. Doğumdan ölüme hayatın her aşamasında insanla birlikte var olan müziğin, dinleme,
                çalma ve söylemenin çok ötesinde bir etkisinin olduğu bilinmektedir.&nbsp; Tarih ve kültür mirasına
                bakıldığında müziğin insan yaşamındaki etkinliğini açıkça görebilmekteyiz.</p>


              <p>Dünya Müzik Terapi Federasyonu (WFMT) müzik terapiyi; planlı bir süreçte müzik ve/veya müzikal
                unsurları (ses, ritim, melodi ve armoni) kullanılması,&nbsp;&nbsp; Amerika Müzik Terapi Derneği (AMTA)
                “Müzikle terapi, müziğin, bireylerin terapik amaçlarına ulaşmaları amacıyla, bu konuda eğitimli ve ehil
                kişiler tarafından klinik ve kanıta dayalı kullanımıdır” şeklinde tanımlar.</p>


              <p>Müzikle tedavi, müzik terapi veya müzikoterapi adlarıyla bilinen müzik ve terapi konusu ele
                alındığında; müzikoloji, etnomüzikoloji, antropoloji, tarih, etnoterapi, psikoloji, sosyoloji, sosyal
                psikoloji, pedagoji, tıp gibi&nbsp; bilimlerle&nbsp; inter ve çoğu zaman multidisipliner çalışmalar akla
                gelir. Müzik ve insan ilişkisindeki en önemli birlikteliklerden biri ise sağlık alanındadır. Örneğin
                müzikle tedavi; Nöroloji, Kardiyoloji, Onkoloji gibi alanlarda yer edinmiş, psikiyatr alanında ise
                vazgeçilmez olmuştur. Farklı öğrenenlerin eğitiminde ise müzikten yararlanma yollarına daha çok yer
                verilmeye başlanmıştır</p>


              <p>Önceki yıllarda temaları; <em>“Değişen Toplumda Kültürlenme ve Kültürleşme”,“Müzik Algısı”</em>, <em>“Müzik
                  Nereye Gidiyor?”</em>, <em>“Şehir ve Müzik”</em> “<em>Müzik Dinleme ve Çalgı Performansında Ses –
                  Tını- Algı Bileşenleri” </em>olan Hisarlı Ahmet Sempozyumlarının bu yılki teması yine insan ve&nbsp;&nbsp;
                toplum odaklı &nbsp;“Müzik ve Terapi”&nbsp; olarak belirlendi.Uzunca zamandır dünyada, son yıllarda ise
                ülkemizde ilgi gören, (kanıta dayalı bilimsel çalışmalar yapılan) sertifika programları açılan ve alana
                özgü uzmanların yetiştiği “Müzik ve Terapi” konulu sempozyumda araştırmacılardan beklentimiz,&nbsp;
                alana katkı sağlayıcı,&nbsp; özgün bildiriler hazırlamaları.</p>


              <p><strong>Alt Başlıklar</strong></p>


              <p>Tarihsel Süreçte Müzik Terapi</p>


              <p>Çocuk-Genç-Yetişkin ve Yaşlılarda Müzik Terapi</p>


              <p>Farklı Öğrenenler ve Müzik Terapi</p>


              <p>Engelliler ve Müzik Terapi</p>


              <p>Müzik Terapi Eğitimi</p>


              <p>Klinik Araştırmalarda&nbsp; Müzik Terapi</p>


              <p>Müzik Terapisi ve Müzikoloji</p>


              <p>Palyatif Bakım ve Müzik Terapi</p>


              <p>Müzik Terapisi Yöntemleri</p>


              <p>Müzik Terapi ve&nbsp; Etik</p>


              <p>Müzik Terapi ve Mevzuat</p>


              <p>Müzik Terapide Sosyolojik Yaklaşımlar</p>


              <p>Yoğun Bakım ve Müzik Terapi</p>


              <p><strong>12-14 Mayıs 2017&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  VIII. ULUSLARARASI HİSARLI AHMET SEMPOZYUMU</strong></p>


              <p>Yer&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Kütahya Dumlupınar Üniversitesi</p>


              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Tarih&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                12-14 Mayıs 2017</p>


              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Katılımcı Sayısı&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                80</p>


              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Konser Sayısı&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                13</p>


              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Panel &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                1</p>


              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Konferans&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                1</p>


              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Sergi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                2</p>


              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Atölye Çalışması&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                6</p>


              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Sempozyum Teması</p>


              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <strong>Müzik ve Teknoloji</strong></p>


              <p>Latin şair Ovidius’un mitolojik öykülerini, Keşiş Albertus Magnus’un insan sesi çıkartan makinesini
                veya Platon’un İ.Ö 4. yüzyılda suyla çalışan ve saat başlarında bir ezgi çaldığı söylenen mekanik
                çalgısını bir tarafa bırakacak olursak, müziğin teknolojiyle buluşma noktasının 19.yy sonlarına;&nbsp;
                fonografla kayıtların yapılmaya başlandığı yıllara denk geldiğini söyler Cemal Ünlü yayımladığı
                Türkiye’nin en kapsamlı ses kayıt ve kayıtçıları tarihi konulu kitabında. Campbell’e göre ise müzik ve
                teknoloji buluşması ses kayıtlarından önce en ilk Theobald Boehm’un kapakçıklarıyla ortaya çıkmıştır.
                Owsinski böyle bir dibe dalma çabasının boşuna olacağını düşünmeli ki, müziğin teknolojik içeriğinin
                endüstriyel boyutuyla versiyonlardan oluştuğu tezini ortaya atar. Owsinski’ye göre müzik endüstrisi ve
                dolayısıyla müzik ve teknoloji birlikteliği versiyon 0.5 ile ses kayıtlarından önce başlamıştır ve bugün
                4. versiyonuyla yoluna devam etmektedir.</p>


              <p>Başlangıç veya versiyonu ne olursa olsun görsel veya işitsel tüm kaynaklar için her türden kayıt ve
                yayın ortamının, kısaca medyanın devreye girmesiyle 20.yy. sonlarından itibaren müzik ve teknolojide
                büyük bir ivme yaşandı. Kayıt stüdyoları, sanal çalgı üretimleri, ses tasarımları, sınırları zorlayan
                sahne şovları, simülasyonlar,&nbsp; bağlantı ve yönlendirmelerdeki yöntem ve teknikler, dijital ağ
                yapıları, veri aktarımları, sıkıştırma ve kodlamalar vs. derken bu kadar hızlı ve ucu açık bir süreci
                kendi endüstrisine yön veren devasa bir birlikteliğe; müzik, medya ve teknolojiye borçluyuz.</p>


              <p>Gerçekten bir borçtan bahsedilebilir mi veya böyle bir üçlemenin bir bedeli mi olmalı? Birleşimdeki her
                disiplinin ama özellikle müziğin kendine özgü nitelikleri geleceğe yönelik tartışılmalı mı yoksa böyle
                bir birliktelik müzik endüstrisinde geçmiş eksikliklerin bir sonucu olarak mı ortaya çıktı? Müzik, medya
                ve teknolojinin müzikle iç içe geçmiş diğer alanlara etkisi var mı veya diğer alanların müzik, medya ve
                teknolojiyle ilişkisi hangi boyutta?</p>


              <p>Tüm bu soruların ışığında aslında kısaca geçmişi, bugünü ve geleceğinin tartışılmaya açıldığı “Müzik,
                Medya ve Teknoloji”, Hisarlı Ahmet Sempozyumlarının bu yılki teması olarak belirlendi.</p>


              <p>Önceki yıllarda temaları&nbsp;<em>“Değişen Toplumda Kültürlenme ve Kültürleşme”, “Müzik Algısı”</em>,&nbsp;<em>“Müzik
                  Nereye Gidiyor?”</em>,&nbsp;<em>“Şehir ve Müzik”, </em>“<em>Müzik Dinleme ve Çalgı Performansında
                  Ses-Tını-Algı Bileşenleri” ve “Müzik ve Terapi”&nbsp; </em>olan Hisarlı Ahmet Sempozyumları,&nbsp; bu
                yılki teması “Müzik, Medya ve Teknoloji” ile yine insan ve&nbsp;toplum odaklı.</p>


              <p>Geçmiş yedi sempozyumu ve tüm paydaşlarıyla Kütahya yaşamı ve bilim dünyasında artık geleneksel hale
                gelen uluslararası düzeydeki Hisarlı Ahmet Sempozyumlarının sekizincisine tüm bilim insanlarını davet
                etmekten onur duyuyoruz. Sempozyuma değerli bildirileriyle katılacak tüm araştırmacılardan alana katkı
                sağlayıcı,&nbsp;&nbsp;bilimsel temelleri olan ve özgün yapıda bildiriler hazırlamalarını temenni ediyor,
                VIII. Uluslararası Hisarlı Ahmet Sempozyumu için “Müzik, Medya ve Teknoloji” teması altında aşağıdaki
                alt başlıkları içeren değerli çalışmalarınızı bekliyoruz.</p>


              <p><strong>Alt Başlıklar:</strong></p>


              <p><em>Akustik</em></p>


              <p><em>Bilgisayar bilimleri ve müzik</em></p>


              <p><em>Bilgisayarla müzik üretimi</em></p>


              <p><em>Bilişsel müzikoloji</em></p>


              <p><em>Çalgı Yazılımları</em></p>


              <p><em>Elektroakustik müzik</em></p>


              <p><em>Elektronik müzik, sanal müzik üretimi</em></p>


              <p><em>Görsel amaçlı ses ve müzik tasarım ve üretimi</em></p>


              <p><em>Medya, küreselleşme ve müzik</em></p>


              <p><em>Medya, teknoloji ve kültürel çalışmalar</em></p>


              <p><em>Medya, teknoloji ve müzik endüstrisi</em></p>


              <p><em>Müzikbilim çalışmalarında teknolojik bulgular</em></p>


              <p><em>Müzik eğitiminde teknoloji kullanımı</em></p>


              <p><em>Müzik teknolojisi eğitimi</em></p>


              <p><em>Müzik teknolojisinde sosyo-kültürel etkileşim</em></p>


              <p><em>Müzik teknolojisine yönelik donanım ve yazılımlar</em></p>


              <p><em>Müzik ve medya</em></p>


              <p><em>Sanal sceneler</em></p>


              <p><em>Ses kayıtları</em></p>


              <p><em>Ses kayıt tarihi</em></p>


              <p><em>Ses sistemleri tasarım ve kurulumları</em></p>


              <p><em>Teknoloji, sosyokültürel değişim ve müzik</em></p>


              <p><em>Teknolojik değişim, popüler kültür ve medya</em></p>


              <p><em>Teknolojik değişim, yeni medya ve etnomüzikoloji çalışmaları</em></p>


              <p><em>Yeni medya, müzik ve temsil</em></p>


              <p><em>Yeni Müzik</em></p>


              <p><strong>10-12 Mayıs 2018&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  IX. ULUSLARARASI HİSARLI AHMET SEMPOZYUMU</strong></p>


              <p>Yer&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Kütahya Hilton Garden INN</p>


              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Tarih&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                10-12 Mayıs 2018</p>


              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Katılımcı Sayısı&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                55</p>


              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Konser Sayısı&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                13</p>


              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Panel &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                1</p>


              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Konferans&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                1</p>


              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Sergi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                2</p>


              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Atölye Çalışması&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                2</p>


              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Sempozyum Teması</p>


              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <strong>Müzik Teorileri</strong></p>


              <p>Hisarlı Ahmet, Değişen Toplumda Kültürlenme ve Kültürleşme, Müzik Algısı,&nbsp;Müzik Nereye Gidiyor?,&nbsp;Şehir
                ve Müzik, Müzik Dinleme ve Çalgı Performansında Ses-Tını-Algı Bileşenleri, Müzik ve Terapi, Müzik, Medya
                ve Teknoloji… İşte, Uluslararası Hisarlı Ahmet Sempozyumu’nun ilk sekiz yıllık verimi…</p>


              <p><strong>Sempozyum, Mayıs 2018’de kapılarını “Müzik Teorileri” temasıyla açıyor.</strong></p>


              <p>De Institutione Musica (Boëthius, 500’ler), L’arte del Contraponto Ridotta in Tavole (Artusi, 1586-9),
                L’armonico Pratico al Cimbalo (Gasparini, 1708) ve Der Freie Satz (Schenker, 1935): Bu dört referans
                kitap, bugün Batı Müziği Teorisi kategorisine dahil ediliyor. Oysa, çok az ortak noktaları var. İlkiyle
                sonuncusu arasındaki yaklaşık 1400 yılda müzik pratiğindeki bunca değişime rağmen, aralarında dikkate
                değer bir örtüşmenin bulunmayışı, müzik teorileri alanındaki konu zenginliğine ve hedef kitle
                çeşitliliğine bir örnek.</p>


              <p><strong>Aşağıda, IX. Uluslararası Hisarlı Ahmet Sempozyumu’nda bildiri kabul edilecek konu başlıkları
                  sergilenmekte. </strong>Bunları somutlaştırmak amacıyla, her bir alt başlığın altına, teori
                literatüründen seçilmiş makale ve bildirileri eklemeyi yararlı görüyoruz:</p>


              <p><strong>A. ANALİZ</strong></p>


              <p>A1. Eser Analizi</p>


              <p>Yüksel, M., Özçifci, S., Gürün, G. ve Berki, T. (2012). <strong>Bir Schumann Şarkısında Tonal Yapı-Şiir
                  İlişkisi</strong>. U. Türkmen (Ed.). III. Uluslararası Hisarlı Ahmet Sempozyumu: Müziği Algılamak
                Sempozyum Tam Metin Kitabı (s. 536-546). Kütahya: Ekspres Matbaası.</p>


              <p>Hyland, A. M. (2016). <strong>In Search of Liberated Time, or Schubert’s Quartet in G Major, D. 887:
                  Once More Between Sonata and Variation</strong>. Music Theory Spectrum, 38(1), 85-108.</p>


              <p>A2. Bestecilik Yaklaşımları</p>


              <p>Karadeniz, İ. ve Berki, T. (2015). <strong>Bir Saygun İmzası: [5,3,3]</strong>. Ç. Adar (Ed.).VI.
                Uluslararası Hisarlı Ahmet Sempozyumu: Müzik Dinleme ve Çalgı Performansında Ses-Tını-Algı Bileşenleri
                Sempozyum Tam Metin Kitabı (s. 302-308). Afyonkarahisar: Matbaa-i Beka.</p>


              <p>Çaylı, F. (2017). <strong>Beethoven’ın Piyano Sonatlarındaki Retransition Kısımları Üzerine (Erken
                  Dönem: 1795-1800) </strong>Sahne ve Müzik Eğitim-Araştırma e-Dergisi, 4, 96-108.</p>


              <p>Richter, P. (2003). <strong>The Schumannian déjà vu – Special Strategies in Schumann’s Construction of
                  Large-Scale Forms and Cycles</strong>. Studia Musicologica Academiae Scientiarum Hungaricae, 44(3-4),
                305–320.</p>


              <p>A3. Terim/Kavram İncelemeleri</p>


              <p>Yüceer, E. M. (2015). <strong>Müzikte Konsonans Kavramı İçin Sınıflandırma Önerisi</strong>. Ç. Adar
                (Ed.).VI. Uluslararası Hisarlı Ahmet Sempozyumu: Müzik Dinleme ve Çalgı Performansında Ses-Tını-Algı
                Bileşenleri Sempozyum Tam Metin Kitabı (s. 111-119). Afyonkarahisar: Matbaa-i Beka.</p>


              <p>Wright, O. (1990). <strong>Çargâh in Turkish classical music: History versus theory</strong>. Bulletin
                of the School of Oriental and African Studies, 53(2), 224-244.</p>


              <p>A4. Edisyon/Nüsha Analizi</p>


              <p>Önder Başarır, F. E. (2016). <strong>J. S. Bach’ın Kayıp Keman Konçertoları: Orijinalite,
                  Transkripsiyon, Yeniden Yapılandırılış Süreci</strong>. Sahne ve Müzik Eğitim-Araştırma e-Dergisi, 3,
                15-32.</p>


              <p>Yalçın, G. (2017). <strong>Nâyî Osman Dede’nin Nota Defterinden Üç Saz Eserinin Müzik Yazısı Açısından
                  İncelenmesi</strong>. Rast Müzikoloji Dergisi, 5(1), 1447-1473.</p>


              <p>A5. Analiz Yöntemleri</p>


              <p>Yüksel, M. (2014). <strong>Schenker Analizi: Yeni Boyutlara Doğru</strong>. Ç. Adar (Ed.).IV.
                Uluslararası Hisarlı Ahmet Sempozyumu: Müzik Nereye Gidiyor? Sempozyum Tam Metin Kitabı, (s. 418-432).
                Afyonkarahisar: ARG Matbaacılık.</p>


              <p>Yust, J. (2016). <strong>Special Collections: Renewing Set Theory</strong>. Journal of Music Theory,
                60(2), 213-262.</p>


              <p><strong>B. TEORİ TARİHİ</strong></p>


              <p>Levendoğlu, O. (2004). <strong>XIII. Yüzyıldan Bugüne Uzanan Makamlar ve Değişim Çizgileri</strong>.
                Erciyes Üniversitesi Sosyal Bilimler Enstitüsü Dergisi, 1(17), 131-138.</p>


              <p>Rehding, A. (2016). <strong>Instruments of Music Theory</strong>. Music Theory Online, 22(4).</p>


              <p><strong>C. SES SİSTEMLERİ</strong></p>


              <p>Can, M. C. (2001). <strong>Müzikte Tam Beşli Zincirleri ve Pythagoras Dizileri.</strong> G.Ü. Gazi
                Eğitim Fakültesi Dergisi, 21(2), 143-159.</p>


              <p>Durfee, D. S. ve Colton, J. S. (2015). <strong>The physics of musical scales: Theory and
                  experiment</strong>. American Journal of Physics, 83(10), 835-842.</p>


              <p><strong>D. TEORİ EĞİTİMİ</strong></p>


              <p>D1. Teori, solfej, form, armoni, makam ve usûl öğretiminde durum saptaması</p>


              <p>Cohn, R. (2015). <strong>Why We Don’t Teach Meter, and Why We Should</strong>. Journal of Music Theory
                Pedagogy, 29, 5-22.</p>


              <p>D2. Teori, solfej, form, armoni, makam ve usûl öğretiminde yeni yaklaşımlar, yöntemler</p>


              <p>Koçaslan, G. ve Berki, T. (2016). <strong>Müzik Formları Öğretiminde Yeni Bir Yaklaşım: Çok Katmanlı
                  Analiz Şeması</strong>. E. Lehimler ve K. Çelenk (Ed.). 1. Erzurum Ulusal Müzik Bilimleri Sempozyumu
                Tam Metin Kitabı, (s. 439-452). Erzurum: Atatürk Üniversitesi.</p>


              <p><strong>E. TEORİ EKSENLİ DİSİPLİNLERARASI ÇALIŞMALAR</strong></p>


              <p>Tekman, H. G. ve Bharucha, J. J. (1998). <strong>Implicit knowledge versus psychoacoustic similarity in
                  priming of chords: Tests of a neural net model</strong>. Journal of Experimental Psychology: Human
                Perception and Performance, 24, 252-260.</p>


              <p>Kunimatsu, K., Ishikawa Y., Takata, M. ve Joe, K. (2015). <strong>A Music Composition Model with
                  Genetic Programming: A Case Study of Chord Progression and Bassline.</strong> Proceedings of the
                International Conference on Parallel and Distributed Processing Techniques and Applications (PDPTA), (s.
                256-262). Athens: The Steering Committee of The World Congress in Computer Science, Computer Engineering
                and Applied Computing (WorldComp).</p>


              <p>IX. Uluslararası Hisarlı Ahmet Sempozyumu’nun; müziğin yapısının özgürce araştırılacağı kalitatif bir
                bilgi şölenine sahne olması dileğiyle…</p>


              <p><strong>25-27 Nisan 2019 X. ULUSLARARASI HİSARLI AHMET SEMPOZYUMU</strong></p>


              <p>Yer Kütahya Hilton Garden INN</p>


              <p>Tarih 25-27 Nisan 2019</p>


              <p>Katılımcı Sayısı 73</p>


              <p>Konser Sayısı 15</p>


              <p>Panel 1</p>


              <p>Konferans 1</p>


              <p>Sergi 2</p>


              <p>Atölye Çalışması 2</p>


              <p>Sempozyum Teması&nbsp;</p>


              <p><strong>İNSAN YAŞAMINDA MÜZİK</strong></p>


              <p>Rönesans kuramcılarından ve bestecilerinden Johannes Tinctoris, 15. yüzyılın ikinci yarısında müzikle
                ilgili ileri sürdüğü görüşlerden birinde müziği şöyle tanımlar: “Müzik, insan sesi ve çalgı seslerinden
                oluşan bir bütündür”. Tinctoris’in bu pragmatik yaklaşımı belki dönemin ruhuna uygun gibi görülmekte
                çünkü önceki yüzyılda Grocheo gibi kuramcılar da müziği sınıflarken “asiller için gerçek müzik ve halk
                için popüler müzik” türü bir tanımlamayla kitaplarda yer alır. Grocheo, müziğin asillerin kanunları ve
                kuralları doğrultusunda yapıldığını söyleyerek halkı görmezden gelirken kuşkusuz müziğin adresini kilise
                ve saraylar olarak kısıtlar. Yüzyıllar boyunca yalnızca müzik adamları değil, din adamları, soylular,
                bilim insanları, eleştirmenler, seslendiriciler, edebiyatçılar, felsefeciler ve onlarca disiplinden
                binlerce insan müzik üzerine bir şeyler söylemeyi sürdürür. Kimi tanımların bugün varlığını sürdürdüğünü
                görmek de alışılmışın içinde. Nicholas Cook, “her müzik farklıdır ama her müzik müziktir” derken müziği
                “değer” açısından etiketleyen yaklaşıma gönderme yapar. Popüler kültüre her zaman burun kıvıranlar,
                kalite ve popülerlik arasında hiçbir bağlantının olmadığını savunur. Craig McGregor ise kültürün eylem
                olduğunu ve katılımcı bir yönü olduğunu vurgular. Yani kültür yalnızca kütüphane raflarındaki altın
                yaldızlı kitaplar ya da bir Mozart senfonisi değildir. Bach’ın ölümünden elli yıl sonra besteci üzerine
                ilk incelemeyi kaleme alan Johann Nikolaus Forkel (<em>Über Johann Sebastian Bachs Leben, Kunst und
                  Kunstwerke-</em>1802), Bach’ın müziğini dinleyen birinin önce bu müziği iyice sindirmesini, ardından
                müziği yaratanın değerini bilmesi gerektiğini söyler. Kısacası herkes müzik üzerine bir şeyler düşünür,
                söyler ve yazar. Jdanov gibi materyalist düşün insanları da, bestecinin temel misyonunun ülkesinin
                müziğini geliştirmek ve yetkinleştirmek, ardından bu müziği yoz burjuva etkenlerin sızmasına karşı
                korumak olduğunu ileri sürer. Strauss valsleri ve Offenbach operetlerinin 19. yüzyıl müzik yaşamının
                tepesine yerleşmesi, bir anda olan bir şey değildir. Sektördür bunu yapan ve doğal olarak temel düşünce,
                müziğin sanat olmadan öte eğlence işlevidir. Tepki gelmekte gecikmez ve müziğin pazara, yani ayağa
                düştüğü ve yozlaştığı ileri sürülerek eğlence amacı gütmeyen alternatif dinletiler düzenlenmeye başlar.&nbsp;
              </p>


              <p>Müziğin insan yaşamındaki yeri konusunda farklı disiplinlerde yapılan binlerce araştırmanın nedenini
                anlamak güç değil. İçerdiği anlama ve işleve göre yapılan tanımlamalar, getirilen kavramlar ve önerilen
                hipotezler, müzik türlerini yine farklı açılardan sınıflandırmalar. Müziğin ne olursa olsun müzik
                olduğunu kabullenmek başta akademi olmak üzere oldukça güçtür. Yine de müziğin insan yaşamındaki önemi,
                etkisi ve gücü açıktır.&nbsp;</p>


              <p>10 yıldır farklı konularda değişik disiplinlerden bilim insanlarını bir araya getiren Hisarlı Ahmet
                Sempozyumu’nun bu yılki teması “İnsan Yaşamında Müzik” olarak belirlendi. Aşağıda yer alan alt
                başlıklar, sempozyum teması için klavuz öneriler niteliğinde:</p>


              <p>Müzik ve Toplum, Toplumsal Değişim ve Müzik</p>


              <p>Müzisyen, İzlerkitle ve Toplumsal Roller</p>


              <p>Müzikte Değişim, Müzikte Süreklilik</p>


              <p>Kültür Endüstrisine Yeni Bakışlar</p>


              <p>Değişim ve Müzik Endüstrisi</p>


              <p>Müzikte Yerel ve Küresel Dinamikler</p>


              <p>İfade Kültürünün Bir Yönü Olarak Müzik</p>


              <p>Müzik Üzerine Bilim Yapmak</p>


              <p>Müzik ve Akademi</p>


              <p>Müziği Değer Açısından Sınıflandırmak</p>


              <p>Görüldüğü gibi tema oldukça yoğun ve aynı yoğunlukta bir katılımı arzu ediyoruz. Özellikle lisansüstü
                öğrencilerin danışmanlarının yönlendirmesiyle sempozyuma bildiriyle ya da izleyici olarak katılmalarını
                çok önemsiyoruz. 25-27 Nisan 2018’de Kütahya’da görüşmek dileğiyle.</p>


              <p></p>
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