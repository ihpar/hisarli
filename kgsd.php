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
          margin: 16px auto;
      }

      @media (max-width: 839px) {
          .pad-10-per {
              padding: 0 24px;
          }
      }

      .mdl-list__item .mdl-list__item-primary-content {
          line-height: normal;
      }

      .centered-content {
          text-align: center;
      }

      .centered-content span.mdl-list__item-primary-content {
          display: inline-block;
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
            <ul class="mdl-list centered-content">
              <li class="mdl-list__item mdl-list__item--two-line">
                <span class="mdl-list__item-primary-content">
                  <span>MUSTAFA KEMAL ALTINSOY (Başkan)</span>
                  <span class="mdl-list__item-sub-title">Sanatçı</span>
                </span>
              </li>
              <li class="mdl-list__item mdl-list__item--two-line">
                <span class="mdl-list__item-primary-content">
                  <span>NİHAT DELEN</span>
                  <span class="mdl-list__item-sub-title">İş adamı</span>
                </span>
              </li>
              <li class="mdl-list__item mdl-list__item--two-line">
                <span class="mdl-list__item-primary-content">
                  <span>UĞUR TÜRKMEN</span>
                  <span class="mdl-list__item-sub-title">Akademisyen</span>
                </span>
              </li>
              <li class="mdl-list__item mdl-list__item--two-line">
                <span class="mdl-list__item-primary-content">
                  <span>ALİ SARIKOYUNCU</span>
                  <span class="mdl-list__item-sub-title">Akademisyen</span>
                </span>
              </li>
              <li class="mdl-list__item mdl-list__item--two-line">
                <span class="mdl-list__item-primary-content">
                  <span>ADİL ÖZKAN</span>
                  <span class="mdl-list__item-sub-title">Sanatçı</span>
                </span>
              </li>
              <li class="mdl-list__item mdl-list__item--two-line">
                <span class="mdl-list__item-primary-content">
                  <span>HALİM TÜRKMEN</span>
                  <span class="mdl-list__item-sub-title">Öğretmen</span>
                </span>
              </li>
              <li class="mdl-list__item mdl-list__item--two-line">
                <span class="mdl-list__item-primary-content">
                  <span>OSMAN ÖZDEMİR</span>
                  <span class="mdl-list__item-sub-title">Öğretmen</span>
                </span>
              </li>
            </ul>

            <h4 class="center-text sec-h4"><?php echo($lang_kgsd["dernek_uyeleri"][$pref_lang]); ?></h4>
            <ul class="mdl-list centered-content">

              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
              AHMET SAĞLAM
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
              DOĞAN ŞAPCI
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
              HÜSEYİN EFE
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
              ERHAN AKALIN
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
              CELAL KARABAY
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
              AHMET ÖZKAYA
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
              AHMET UMU
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
              M.ALİ GÖKER
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
              İSMAİL YİĞİT
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
              NİHAT DELEN
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
              MEHMET GÜRSOY
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
              OSMAN ZEKİ COŞKUN
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
              A.ALİ KADIOĞLU
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
              HASAN H.ÖZMUTAF
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
              LÜTFÜ GÜRPINAR
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
              BİRSEN GÜZEN
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
              AYŞE ECE DELEN
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
              SEMA GÜRAL
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
              CEYDA ÇETİN
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
              İSMET BAĞRIYANIK
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
              UĞUR TÜRKMEN
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
              GÜLER YILMAZ
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
              H.İBRAHİM TÜRKOĞLU
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
              MEHMET KOÇER
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
              MURAT SARIYILDIZ
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
              NURSEL SARIYILDIZ
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
              İBRAHİM ERDEYER
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
              RECEP ZENGİN
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
              ERCİYES AKÇAY
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
              ALİ RIZA MUSLU
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
              MEHMET YILDIRIM
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
              ALİ SOYCAN
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
              SERDAR SÜLÜKİ
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
              YILMAZ DURMAZ
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
              FAHRİ ÇETİNKAYA
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
              HASAN DURGUN
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
              MÜKERREM SELÇUKER
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
              AHMET ÇAKMAK
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
              HÜRDOĞAN ÇELİK
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
              AYŞE KAÇAN
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
              MUSTAFA KEMAL ALTINSOY          </span>
              </li>
            </ul>

            <h4 class="center-text sec-h4"><?php echo($lang_kgsd["dernek_etkinlikleri"][$pref_lang]); ?></h4>
            <ul class="mdl-list">
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            27-28-29 Ağustos 1997 --> Çavdarhisar Kültür ve Turizm Festivali kapsamında Kütahya Kültür Sarayı'nda çini, resim, elmas, takı vs. sergisi
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            6 Eylül 1997 --> Kütahya Kültür Saray'ında Türk Sanat Müziği konseri
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            24-29 Kasım 1997 --> Ankara Türk-Amerikan Derneği'nde Kütahya haftası etkinliği. Konser, sergiler ve gala gecesinde yemek, müzik ve tarihi kadın kıyafetleri defilesi
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            Mart 1998 --> Kütahya Kültür Sarayı'nda tiyatro kolumuzca Refik Erduran’ın “Bir Ayı Masalı” oyununun sahnelenmesi
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            8-13 Haziran 1998 --> Eskişehir’de Kütahya tanıtım haftası etkinliklerinde sergiler. 10.06.1998 tarihinde büyük bir gala gecesi. Müzik ve yemek eşliğinde tarihi kadın giysileri defilesi
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            25 Kasım - 1 Aralık 1998 --> Bursa’da Kütahya tanıtım haftası. Sergiler ve gala gecesi. Yemek eşliğinde Kütahya Halk Oyunları. Konser ve tarihi kadın kıyafetleri defilesi
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            Haziran 1999 --> Tuncay Cücenoğlu'nun “Dosya” isimli tiyatro eserinin sahnelenmesi
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            26 Haziran 1999 --> Kütahya Kültür Sarayı'nda Türk Müziği konseri
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            26 Haziran 1999 --> Kütahya Kültür Sarayı'nda Osmanlı Devleti kuruluşunun 700. yılının kutlamaları. Osmanlı padişahlarının kendi bestelerinden derlenen Türk Müziği konseri
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            7-16 Nisan 2000 --> İstanbul Harbiye Askeri Müzede “İl İl Türkiye Kütahya Haftası”. Resim, çini, tarihi bayan giysisi, elde yapılan örtüler, altın ve gümüş eerler sergisi.
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            10 Ekim 2000 --> “The President” otelde Türk basınının iştiraki ile tarihi kadın giysileri defilesi
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            06 Mayıs 2000 --> Türk Müziği topluluğumuzca Kütahya Kültür Sarayı'nda konser.
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            8-14 Kasım 2000 --> İzmir Atatürk Kültür Merkezi'nde basın iştiraki ile resim, çini, kuyumculuk sanatı eserleri ve tarihi kadın el işlemeleri sergileri
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            13 Kasım 2001 --> Gala gecesi: İzmir-Balçova Prenses Otel'de Kütahya Türküleri ve Türk Müziği eşliğinde yemekli Kütahya tanıtım gecesi. Tarihi kadın giysileri defilesi.  (Gala gecelerinde yapılan bütün defilelerde Kütahyalı kızlarımız mankenlik yapmışlardır. Defileler üç etaplı olup birinci etapta 20.yy'da elle dokunmuş modern gece kıyafetlerinin eski Türk motifleri ile yapılmış olması orijinaldir. 2.etapta Kütahya kına gecelerinde kadınlarca giyilen bütün Kütahya kıyafetlerinin elle, kasnakta ve gergefte işlenmiş olması ayrıcalığı vardır. Yaklaşık 100-150-200-250-300 senelik tarihi sandıklarda saklanan antika kıyafetlerin sadece derneğimizce defilede kullanılması çok büyük bir ayrıcalıktır)
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            2001 --> 1951'de yürürlüğe giren 5846 sayılı kanununa göre gelir vergisinden muaf olan Kütahya’da çini sanatçılarının “stopaj”la belge düzenlenmesine yönelik bir kurul kurulmuş olup sanatçılar "Çini Sanatçısı Eser Belgesi" almaya hak kazanmıştır. Bu durum, derneğimizin ciddi takibi neticesinde sonuçlandırılmıştır
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            24 Mayıs 2002 --> Kütahya Kültür Sarayı'nda Klasik Türk Müziği Konseri.
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            23 Haziran 2002 --> Derneğimiz Türk Müziği topluluğu tarafından Kütahya Kültür Sarayı'nda klasik Türk Müziği konseri
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            30 Eylül-09 Kasım 2002 --> Ankara Zafer Çarşısı'nda Kütahya tanıtım haftası etkinliği. Resim, çini, kadın tarihi el işlemeleri ve giysileri sergisi
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            31 Mayıs-21 Haziran 2003 --> Kütahya Kültür Sarayı'nda Türk Müziği konseri.
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            Şubat 2004 --> Dumlupınar Üniversitesi’nde Türk Müziği konseri
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            09 Aralık 2004 --> Avrasya İzmir Fuarı'na derneğimizce el sanatlarımızla katılım
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            11-21 Kasım 2005 --> Beylerbeyi Sarayı Bahçesi'ndeki II.Mahmut’dan kalma 130m boy ve 5m genişliğindeki 650m²‘lik Tünel Sergi Sarayı, Milli Saraylar Daire Başkanlığı tarafından TBMM onayıyla derneğimize tahsis edilmiş olup çini, resim, kadın takıları, altın ve elmas mücevherlerle tarihi kadın giysilerinin elde kasnak ve gergefle işlenmiş eserleri sergilenmiştir. Tarihi kıyafetlerin 20.yy.'da yapılmış gece kıyafetlerine işlenmiş olup motifleri Kütahya kına gecelerinde gergef ve kasnakta yapılmış kadın kıyafetleriyle 150-200-250-300 yıllık altın ve gümüş simle işlenmiş tarihi kıyafetler defilesi Kütahyalı manken kızlarımız tarafından gerçekleştirilmiştir.
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            16 Haziran 2006 --> Kütahya Azot Sitesi salonunda Türk Müziği konseri.
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            20 Ekim 2007 --> Kütahya Kültür Sarayı'nda Türk Müziği konseri.
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            26 Nisan 2008 --> Polis Evi Salonu'nda derneğimizin kuruluşunun 10.yılının yemekli ve müzikli kutlaması
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            10 Ekim 2008 --> Dumlupınar Üniversitesi Merkez Kampüs Konser Salonu'nda Atatürk’ümüzün sevdiği aryalar, Türk Sanat Müziği eserleri ve türküleriyle, Kütahya türküleri konseri. Piyanist, tenor ve soprano sanatçılarının katılımıyla  ve Kütahya Güzel Sanatlar Lisesi Korosu desteğiyle Atatürk’ümüzü anma gecesi
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            27 Aralık 2008 --> Kütahya Kültür Sarayı'nda operet ve müzikaller sunumu
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            2009'dan bu yana kesintisiz olarak --> ULUSLARARASI HİSARLI AHMET SEMPOZYUMLARI          </span>
              </li>
            </ul>

            <div style="display: none;">
              <p>27-28-29 Ağustos 1997 --> Çavdarhisar Kültür ve Turizm Festivali kapsamında Kütahya Kültür Sarayı'nda
                çini, resim, elmas, takı vs. sergisi<br></p>

              <p>6 Eylül 1997 --> Kütahya Kültür Saray'ında Türk Sanat Müziği konseri</p>

              <p>24-29 Kasım 1997 --> Ankara Türk-Amerikan Derneği'nde Kütahya haftası etkinliği. Konser, sergiler ve
                gala gecesinde
                yemek, müzik ve tarihi kadın kıyafetleri defilesi</p>

              <p>Mart 1998 --> Kütahya Kültür Sarayı'nda tiyatro kolumuzca Refik Erduran’ın “Bir Ayı Masalı” oyununun
                sahnelenmesi</p>

              <p>8-13 Haziran 1998 --> Eskişehir’de Kütahya tanıtım haftası etkinliklerinde sergiler. 10.06.1998
                tarihinde
                büyük bir gala gecesi. Müzik ve yemek eşliğinde tarihi kadın giysileri defilesi</p>

              <p>25 Kasım - 1 Aralık 1998 --> Bursa’da Kütahya
                tanıtım haftası. Sergiler ve gala gecesi. Yemek eşliğinde Kütahya Halk Oyunları. Konser ve
                tarihi kadın kıyafetleri defilesi</p>

              <p>Haziran 1999 --> Tuncay Cücenoğlu'nun “Dosya” isimli tiyatro eserinin sahnelenmesi</p>

              <p>26 Haziran 1999 --> Kütahya Kültür Sarayı'nda Türk Müziği konseri</p>

              <p>26 Haziran 1999 --> Kütahya Kültür Sarayı'nda Osmanlı Devleti kuruluşunun 700. yılının kutlamaları.
                Osmanlı
                padişahlarının kendi bestelerinden derlenen Türk Müziği konseri</p>

              <p>7-16 Nisan 2000 --> İstanbul Harbiye Askeri Müzede “İl İl Türkiye Kütahya Haftası”. Resim, çini, tarihi
                bayan
                giysisi, elde yapılan örtüler, altın ve gümüş eerler sergisi.</p>

              <p>10 Ekim 2000 --> “The President” otelde Türk basınının iştiraki ile tarihi kadın giysileri defilesi</p>

              <p>06 Mayıs 2000 --> Türk Müziği topluluğumuzca Kütahya Kültür Sarayı'nda konser.</p>

              <p>8-14 Kasım 2000 --> İzmir Atatürk Kültür Merkezi'nde basın iştiraki ile resim, çini, kuyumculuk sanatı
                eserleri ve tarihi
                kadın el işlemeleri sergileri</p>

              <p>13 Kasım 2001 --> Gala gecesi: İzmir-Balçova Prenses Otel'de Kütahya Türküleri ve Türk Müziği eşliğinde
                yemekli Kütahya
                tanıtım gecesi. Tarihi kadın giysileri defilesi. &nbsp;(Gala gecelerinde yapılan bütün
                defilelerde Kütahyalı kızlarımız mankenlik yapmışlardır. Defileler üç etaplı olup birinci etapta
                20.yy'da elle dokunmuş modern gece kıyafetlerinin eski Türk motifleri ile yapılmış olması
                orijinaldir. 2.etapta Kütahya kına gecelerinde kadınlarca giyilen bütün Kütahya kıyafetlerinin elle,
                kasnakta ve gergefte işlenmiş olması ayrıcalığı vardır. Yaklaşık 100-150-200-250-300 senelik tarihi
                sandıklarda saklanan antika kıyafetlerin sadece derneğimizce defilede kullanılması çok büyük bir
                ayrıcalıktır)</p>

              <p>2001 --> 1951'de yürürlüğe giren 5846 sayılı kanununa göre gelir vergisinden muaf olan Kütahya’da çini
                sanatçılarının
                “stopaj”la belge düzenlenmesine yönelik bir kurul kurulmuş olup sanatçılar "Çini Sanatçısı Eser Belgesi"
                almaya hak kazanmıştır.
                Bu durum, derneğimizin ciddi takibi neticesinde sonuçlandırılmıştır</p>

              <p>24 Mayıs 2002 --> Kütahya Kültür Sarayı'nda Klasik Türk Müziği Konseri.</p>


              <p>23 Haziran 2002 --> Derneğimiz Türk Müziği topluluğu tarafından Kütahya Kültür Sarayı'nda klasik Türk
                Müziği konseri</p>


              <p>30 Eylül-09 Kasım 2002 --> Ankara Zafer Çarşısı'nda Kütahya tanıtım haftası etkinliği. Resim, çini,
                kadın tarihi el işlemeleri
                ve giysileri sergisi</p>


              <p>31 Mayıs-21 Haziran 2003 --> Kütahya Kültür Sarayı'nda Türk Müziği konseri.</p>


              <p>Şubat 2004 --> Dumlupınar Üniversitesi’nde Türk Müziği konseri</p>


              <p>09 Aralık 2004 --> Avrasya İzmir Fuarı'na derneğimizce el sanatlarımızla katılım</p>


              <p>11-21 Kasım 2005 --> Beylerbeyi Sarayı Bahçesi'ndeki II.Mahmut’dan kalma 130m boy ve 5m genişliğindeki
                650m²‘lik Tünel Sergi Sarayı, Milli Saraylar Daire Başkanlığı tarafından TBMM onayıyla
                derneğimize tahsis edilmiş olup çini, resim, kadın takıları, altın ve elmas mücevherlerle tarihi
                kadın giysilerinin elde kasnak ve gergefle işlenmiş eserleri sergilenmiştir. Tarihi kıyafetlerin
                20.yy.'da yapılmış gece kıyafetlerine işlenmiş olup motifleri Kütahya kına gecelerinde gergef ve
                kasnakta
                yapılmış kadın kıyafetleriyle 150-200-250-300 yıllık altın ve gümüş simle
                işlenmiş tarihi kıyafetler defilesi Kütahyalı manken kızlarımız tarafından gerçekleştirilmiştir.</p>


              <p>16 Haziran 2006 --> Kütahya Azot Sitesi salonunda Türk Müziği konseri.</p>


              <p>20 Ekim 2007 --> Kütahya Kültür Sarayı'nda Türk Müziği konseri.</p>


              <p>26 Nisan 2008 --> Polis Evi Salonu'nda derneğimizin kuruluşunun 10.yılının yemekli ve müzikli
                kutlaması</p>


              <p>10 Ekim 2008 --> Dumlupınar Üniversitesi Merkez Kampüs Konser Salonu'nda<br>Atatürk’ümüzün sevdiği
                aryalar, Türk
                Sanat Müziği eserleri ve türküleriyle, Kütahya türküleri konseri. Piyanist, tenor ve soprano
                sanatçılarının katılımıyla
                &nbsp;ve Kütahya Güzel Sanatlar Lisesi Korosu desteğiyle Atatürk’ümüzü anma gecesi</p>


              <p>27 Aralık 2008 --> Kütahya Kültür Sarayı'nda operet ve müzikaller sunumu</p>

              <p>2009'dan bu yana kesintisiz olarak --> ULUSLARARASI HİSARLI AHMET SEMPOZYUMLARI </p>

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