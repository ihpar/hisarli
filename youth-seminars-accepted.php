<?php
session_start();

$is_secure = true;

$page_name = "schedule";

require_once "dbms/utils.php";

require_once "modules/header_prefixes.php";

require_once "langs/lang_global.php";

require_once "langs/lang_youth-seminars-accepted.php";
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
        <div class="pad-10-per" style="overflow-x: auto;">
          <div class="cerceve" style="width: 630px; margin: 0 auto;">
            <h3 class="center-text sec-h3"><?php echo($lang_youth_seminars_accepted["kabul edilenler"][$pref_lang]); ?></h3>
            <!-- Word table -->
            <table style="width:460.2pt;border-collapse:collapse;border:none;margin: 0 auto;">
              <tbody>
              <tr>
                <td style="width: 22.8pt;border: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;'>
                    <strong><span style='font-size:13px;font-family:  "Times New Roman",serif;'>1</span></strong></p>
                </td>
                <td style="width: 154.15pt;border-top: 1pt solid windowtext;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-image: initial;border-left: none;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;'>
                    <strong><span
                          style='font-size:13px;font-family:  "Times New Roman",serif;'>ASLI CANYAKAN</span></strong>
                  </p>
                </td>
                <td style="width: 283.25pt;border-top: 1pt solid windowtext;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-image: initial;border-left: none;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:  normal;text-align:justify;'>
                    <span style='font-size:13px;font-family:"Times New Roman",serif;'>M&uuml;zik E??itiminin Toplumun Adalet D&uuml;??&uuml;ncesine Etkileri</span>
                  </p>
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:  normal;text-align:justify;'>
                    <span style='font-size:13px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                </td>
              </tr>
              <tr>
                <td style="width: 22.8pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;'>
                    <strong><span style='font-size:13px;font-family:  "Times New Roman",serif;'>2</span></strong></p>
                </td>
                <td style="width: 154.15pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;'>
                    <strong><span
                          style='font-size:13px;font-family:  "Times New Roman",serif;'>AY??EG&Uuml;L G&Ouml;KLEN</span></strong>
                  </p>
                </td>
                <td style="width: 283.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:  normal;text-align:justify;'>
                    <span style='font-size:13px;font-family:"Times New Roman",serif;'>T&uuml;rkiye&rsquo;de G&ouml;rme Engeli ve M&uuml;zik Ortak Alan??nda Yap??lm???? Lisans&uuml;st&uuml; Tezler</span>
                  </p>
                </td>
              </tr>
              <tr>
                <td style="width: 22.8pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;'>
                    <strong><span style='font-size:13px;font-family:  "Times New Roman",serif;'>3</span></strong></p>
                </td>
                <td style="width: 154.15pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;'>
                    <strong><span
                          style='font-size:13px;font-family:  "Times New Roman",serif;'>CANAN TEZCAN</span></strong></p>
                </td>
                <td style="width: 283.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:  normal;text-align:justify;'>
                    <span style='font-size:13px;font-family:"Times New Roman",serif;'>Online E??itim S&uuml;recinde Ses E??itimcilerinin Ya??ad??klar?? Sorunlar??n M&uuml;zik Teknolojileri Uzmanlar?? ile De??erlendirilmesi</span>
                  </p>
                </td>
              </tr>
              <tr>
                <td style="width: 22.8pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;'>
                    <strong><span style='font-size:13px;font-family:  "Times New Roman",serif;'>4</span></strong></p>
                </td>
                <td style="width: 154.15pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;'>
                    <strong><span
                          style='font-size:13px;font-family:  "Times New Roman",serif;'>D??V??N GEN&Ccedil;O??LAN</span></strong>
                  </p>
                </td>
                <td style="width: 283.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:  normal;text-align:justify;'>
                    <span style='font-size:13px;font-family:"Times New Roman",serif;'>Erken D&ouml;nem Kar????la??t??rmal?? M&uuml;zikoloji &Ccedil;al????malar??nda Viyana Ekol&uuml;</span>
                  </p>
                </td>
              </tr>
              <tr>
                <td style="width: 22.8pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;'>
                    <strong><span style='font-size:13px;font-family:  "Times New Roman",serif;'>5</span></strong></p>
                </td>
                <td style="width: 154.15pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;'>
                    <strong><span style='font-size:13px;font-family:  "Times New Roman",serif;'>ECEM TU??&Ccedil;E AKBULUT</span></strong>
                  </p>
                </td>
                <td style="width: 283.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:  normal;text-align:justify;'>
                    <span style='font-size:13px;font-family:"Times New Roman",serif;'>So??uk Sava?? D&ouml;nemi Sovyetler-Azerbaycan-T&uuml;rkiye ??li??kilerinin Geli??im S&uuml;recinde K&uuml;lt&uuml;r El&ccedil;isi Maestro Niyazi&rsquo;nin &Ouml;nemi</span>
                  </p>
                </td>
              </tr>
              <tr>
                <td style="width: 22.8pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;'>
                    <strong><span style='font-size:13px;font-family:  "Times New Roman",serif;'>6</span></strong></p>
                </td>
                <td style="width: 154.15pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;'>
                    <strong><span
                          style='font-size:13px;font-family:  "Times New Roman",serif;'>ELA ALPMAN</span></strong></p>
                </td>
                <td style="width: 283.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:  normal;text-align:justify;'>
                    <span style='font-size:13px;font-family:"Times New Roman",serif;'>Hubert Pernot ve Sak??z&rsquo;??n Halk Ezgileri</span>
                  </p>
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:  normal;text-align:justify;'>
                    <span style='font-size:13px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                </td>
              </tr>
              <tr>
                <td style="width: 22.8pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;'>
                    <strong><span style='font-size:13px;font-family:  "Times New Roman",serif;'>7</span></strong></p>
                </td>
                <td style="width: 154.15pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;'>
                    <strong><span
                          style='font-size:13px;font-family:  "Times New Roman",serif;'>EMRAH ERGENE</span></strong></p>
                </td>
                <td style="width: 283.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:  normal;text-align:justify;'>
                    <span style='font-size:13px;font-family:"Times New Roman",serif;'>Erik Satie&rsquo;nin Piyano M&uuml;zi??indeki Esin Kaynaklar?? ve Stilistik &Ouml;zellikler</span>
                  </p>
                </td>
              </tr>
              <tr>
                <td style="width: 22.8pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;'>
                    <strong><span style='font-size:13px;font-family:  "Times New Roman",serif;'>8</span></strong></p>
                </td>
                <td style="width: 154.15pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;'>
                    <strong><span
                          style='font-size:13px;font-family:  "Times New Roman",serif;'>FAKI CAN Y&Uuml;R&Uuml;K</span></strong>
                  </p>
                </td>
                <td style="width: 283.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:  normal;text-align:justify;'>
                    <span style='font-size:13px;font-family:"Times New Roman",serif;'>Piyano Master Classlar??nda Uzmanlar??n Benzer ve Farkl?? Y&ouml;nleri</span>
                  </p>
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:  normal;text-align:justify;'>
                    <span style='font-size:13px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                </td>
              </tr>
              <tr>
                <td style="width: 22.8pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;'>
                    <strong><span style='font-size:13px;font-family:  "Times New Roman",serif;'>9</span></strong></p>
                </td>
                <td style="width: 154.15pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;'>
                    <strong><span
                          style='font-size:13px;font-family:  "Times New Roman",serif;'>FAT??H TA??</span></strong></p>
                </td>
                <td style="width: 283.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:2.1pt;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:justify;'>
                    <span style='font-family:"DIN Engschrift Std",sans-serif;color:black;'><span
                          style='font-size:13px;font-family:"Times New Roman",serif;'>Pandemi S&uuml;recinin Sahne Alan Canl?? Performans M&uuml;zisyenlerine Etkisi</span></span>
                  </p>
                </td>
              </tr>
              <tr>
                <td style="width: 22.8pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;'>
                    <strong><span style='font-size:13px;font-family:  "Times New Roman",serif;'>10</span></strong></p>
                </td>
                <td style="width: 154.15pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;'>
                    <strong><span
                          style='font-size:13px;font-family:  "Times New Roman",serif;'>F??L??Z YILDIZ</span></strong></p>
                </td>
                <td style="width: 283.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;'>
                    <span style='font-size:13px;font-family:"Times New Roman",serif;color:black;'>Konservatuvar Solfej Dersi E??itimcilerinin M&uuml;ziksel Okuma / Solfej &Ouml;??retim Yakla????mlar??</span>
                  </p>
                </td>
              </tr>
              <tr>
                <td style="width: 22.8pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;'>
                    <strong><span style='font-size:13px;font-family:  "Times New Roman",serif;'>11</span></strong></p>
                </td>
                <td style="width: 154.15pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;'>
                    <strong><span
                          style='font-size:13px;font-family:  "Times New Roman",serif;'>G&Ouml;KHAN ALTINBA??</span></strong>
                  </p>
                </td>
                <td style="width: 283.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:14.15pt;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:  0in;line-height:normal;text-align:justify;'>
                    <span style='font-size:13px;font-family:"Times New Roman",serif;'>Do??u Karadeniz Halk Danslar?? ve M&uuml;zi??ine Toplumsal Cinsiyet ve Cinsellik &Ouml;zelinde Bir Bak????</span>
                  </p>
                </td>
              </tr>
              <tr>
                <td style="width: 22.8pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;'>
                    <strong><span style='font-size:13px;font-family:  "Times New Roman",serif;'>12</span></strong></p>
                </td>
                <td style="width: 154.15pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;'>
                    <strong><span style='font-size:13px;font-family:  "Times New Roman",serif;'>G&Ouml;ZDE ECE YAVA?? &Ouml;ZT&Uuml;RK</span></strong>
                  </p>
                </td>
                <td style="width: 283.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:8.0pt;line-height:107%;margin:0in;text-align:justify;'>
                    <strong><span style="font-size:13px;color:black;">Paris Konservatuvar??&rsquo;n??n Kurumsal Ekonomik Yap??s??</span></strong>
                  </p>
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:  normal;text-align:justify;'>
                    <span style='font-size:13px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                </td>
              </tr>
              <tr>
                <td style="width: 22.8pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;'>
                    <strong><span style='font-size:13px;font-family:  "Times New Roman",serif;'>13</span></strong></p>
                </td>
                <td style="width: 154.15pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;'>
                    <strong><span
                          style='font-size:13px;font-family:  "Times New Roman",serif;'>HAKAN KAMALI</span></strong></p>
                </td>
                <td style="width: 283.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:  normal;text-align:justify;'>
                    <span style='font-size:13px;font-family:"Times New Roman",serif;'>Caz M&uuml;zi??inde Kolektif Do??a&ccedil;lama &Ouml;rne??i Olarak &quot;Conduction&quot;</span>
                  </p>
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:  normal;text-align:justify;'>
                    <span style='font-size:13px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                </td>
              </tr>
              <tr>
                <td style="width: 22.8pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;'>
                    <strong><span style='font-size:13px;font-family:  "Times New Roman",serif;'>14</span></strong></p>
                </td>
                <td style="width: 154.15pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;'>
                    <strong><span
                          style='font-size:13px;font-family:  "Times New Roman",serif;'>??D??L &Ouml;ZCAN&nbsp;</span></strong>
                  </p>
                </td>
                <td style="width: 283.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:  normal;text-align:justify;'>
                    <span style='font-size:13px;font-family:"Times New Roman",serif;'>Erken D&ouml;nem Kar????la??t??rmal?? M&uuml;zikoloji &Ccedil;al????malar??nda Berlin Ekol&uuml;</span>
                  </p>
                </td>
              </tr>
              <tr>
                <td style="width: 22.8pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;'>
                    <strong><span style='font-size:13px;font-family:  "Times New Roman",serif;'>15</span></strong></p>
                </td>
                <td style="width: 154.15pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;'>
                    <strong><span
                          style='font-size:13px;font-family:  "Times New Roman",serif;'>ILGIN UYSAL</span></strong></p>
                </td>
                <td style="width: 283.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:  normal;text-align:justify;'>
                    <span style='font-size:13px;font-family:"Times New Roman",serif;'>Crumb&rsquo;??n G&ouml;rsel Nota Tasar??m??: Fantasy Pieces After the Zodiac&nbsp;</span>
                  </p>
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:  normal;text-align:justify;'>
                    <span style='font-size:13px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                </td>
              </tr>
              <tr>
                <td style="width: 22.8pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;'>
                    <strong><span style='font-size:13px;font-family:  "Times New Roman",serif;'>16</span></strong></p>
                </td>
                <td style="width: 154.15pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;'>
                    <strong><span
                          style='font-size:13px;font-family:  "Times New Roman",serif;'>??PEK AKANAY</span></strong></p>
                </td>
                <td style="width: 283.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:16px;font-family:"Helvetica Neue";margin-top:0in;margin-bottom:0in;color:black;border:none;text-align:justify;'>
                    <span style='font-size:13px;font-family:"Times New Roman",serif;'>Pandemide Klasik Bat?? M&uuml;zi??i Alan??nda Yeni Medya Kullan??m??</span>
                  </p>
                  <p style='margin-right:0in;margin-left:0in;font-size:16px;font-family:"Helvetica Neue";margin-top:0in;margin-bottom:0in;color:black;border:none;text-align:justify;'>
                    <span style='font-size:13px;font-family:"Times New Roman",serif;color:windowtext;'>&nbsp;</span>
                  </p>
                </td>
              </tr>
              <tr>
                <td style="width: 22.8pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;'>
                    <strong><span style='font-size:13px;font-family:  "Times New Roman",serif;'>17</span></strong></p>
                </td>
                <td style="width: 154.15pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;'>
                    <strong><span
                          style='font-size:13px;font-family:  "Times New Roman",serif;'>MARZENA MARIA KIZILAY</span></strong>
                  </p>
                </td>
                <td style="width: 283.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:  normal;text-align:justify;'>
                    <span style='font-size:13px;font-family:"Times New Roman",serif;'>How to Teach Music Effectively? Review of the Most Efficient Methods in Instrumental Pedagogy.</span>
                  </p>
                </td>
              </tr>
              <tr>
                <td style="width: 22.8pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;'>
                    <strong><span style='font-size:13px;font-family:  "Times New Roman",serif;'>18</span></strong></p>
                </td>
                <td style="width: 154.15pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;'>
                    <strong><span
                          style='font-size:13px;font-family:  "Times New Roman",serif;'>MUSTAFA OKAN KIZILAY</span></strong>
                  </p>
                </td>
                <td style="width: 283.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:  normal;text-align:justify;'>
                    <span style='font-size:13px;font-family:"Times New Roman",serif;'>Johann Sebastian Bach&rsquo;??n Klavye ??&ccedil;in Yaz??lan Eserlerinde &ldquo;Tempo&rdquo; Olgusu</span>
                  </p>
                </td>
              </tr>
              <tr>
                <td style="width: 22.8pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;'>
                    <strong><span style='font-size:13px;font-family:  "Times New Roman",serif;'>19</span></strong></p>
                </td>
                <td style="width: 154.15pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;'>
                    <strong><span
                          style='font-size:13px;font-family:  "Times New Roman",serif;'>MUZAFFER SONER YILMAZ</span></strong>
                  </p>
                </td>
                <td style="width: 283.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:  normal;text-align:justify;'>
                    <span style='font-size:13px;font-family:"Times New Roman",serif;'>T&uuml;rk M&uuml;zi??i &Ccedil;okseslendirme Alan??nda Yap??lan Lisans&uuml;st&uuml; Tezler</span>
                  </p>
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:  normal;text-align:justify;'>
                    <span style='font-size:13px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                </td>
              </tr>
              <tr>
                <td style="width: 22.8pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;'>
                    <strong><span style='font-size:13px;font-family:  "Times New Roman",serif;'>20</span></strong></p>
                </td>
                <td style="width: 154.15pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;'>
                    <strong><span style='font-size:13px;font-family:  "Times New Roman",serif;'>&Ouml;ZG&Uuml;N ARDA NURAL</span></strong>
                  </p>
                </td>
                <td style="width: 283.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:16px;font-family:"Times New Roman",serif;margin-top:6.0pt;margin-bottom:6.0pt;text-align:justify;margin:0in;'>
                    <span style="font-size:13px;">Davul ??&ccedil;in Tam Otomatik Bir Akort Sisteminin Tasar??m?? ve Optimizasyonu</span>
                  </p>
                </td>
              </tr>
              <tr>
                <td style="width: 22.8pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;'>
                    <strong><span style='font-size:13px;font-family:  "Times New Roman",serif;'>21</span></strong></p>
                </td>
                <td style="width: 154.15pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;'>
                    <strong><span style='font-size:13px;font-family:  "Times New Roman",serif;'>&Ouml;ZG&Uuml;N ARIT&Uuml;RK</span></strong>
                  </p>
                </td>
                <td style="width: 283.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:16px;font-family:"Times New Roman",serif;margin:0in;text-align:justify;'>
                    <span style="font-size:13px;">Ankara Halkevi Dergisi &Uuml;lk&uuml;&rsquo;de Yay??nlanan Yaz??lar I????????nda 1933-1950 Y??llar?? Aras??nda T&uuml;rkiye&rsquo;de M&uuml;zik Ya??am?? ve M&uuml;zik &Uuml;zerine Tart????malar</span>
                  </p>
                </td>
              </tr>
              <tr>
                <td style="width: 22.8pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;'>
                    <strong><span style='font-size:13px;font-family:  "Times New Roman",serif;'>22</span></strong></p>
                </td>
                <td style="width: 154.15pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;'>
                    <strong><span
                          style='font-size:13px;font-family:  "Times New Roman",serif;'>RECEP EGE ALTINCIO??LU</span></strong>
                  </p>
                </td>
                <td style="width: 283.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:8.0pt;line-height:107%;margin:0in;text-align:justify;'>
                    <span style="font-size:13px;">Sosyalle??me ve Akademik Ba??ar?? ??li??kisi: ??ZOT ??zmir Otizm Orkestras?? ve Korosu &Ouml;rne??i</span>
                  </p>
                </td>
              </tr>
              <tr>
                <td style="width: 22.8pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;'>
                    <strong><span style='font-size:13px;font-family:  "Times New Roman",serif;'>23</span></strong></p>
                </td>
                <td style="width: 154.15pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;'>
                    <strong><span
                          style='font-size:13px;font-family:  "Times New Roman",serif;'>SEL??N KARANCI</span></strong>
                  </p>
                </td>
                <td style="width: 283.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:  normal;text-align:justify;'>
                    <span style='font-size:13px;font-family:"Times New Roman",serif;'>&Ccedil;a??da?? Solo Timpani Repertuvar??nda Mehter M&uuml;zi??i Etkisi: Berry&rsquo;nin Mehteran &Ouml;rne??i</span>
                  </p>
                </td>
              </tr>
              <tr>
                <td style="width: 22.8pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;'>
                    <strong><span style='font-size:13px;font-family:  "Times New Roman",serif;'>24</span></strong></p>
                </td>
                <td style="width: 154.15pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;'>
                    <strong><span
                          style='font-size:13px;font-family:  "Times New Roman",serif;'>S??YABEND RECEP BAYAT</span></strong>
                  </p>
                </td>
                <td style="width: 283.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:  normal;text-align:justify;'>
                    <span style='font-size:13px;font-family:"Times New Roman",serif;'>Ulusal Bir M&uuml;zik E??itimi Program?? Olan El Sistema&rsquo;n??n T&uuml;m Y&ouml;nleriyle ??ncelenmesi</span>
                  </p>
                </td>
              </tr>
              <tr>
                <td style="width: 22.8pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;'>
                    <strong><span style='font-size:13px;font-family:  "Times New Roman",serif;'>25</span></strong></p>
                </td>
                <td style="width: 154.15pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;'>
                    <strong><span style='font-size:13px;font-family:  "Times New Roman",serif;'>U??UR ASLAN&nbsp;</span></strong>
                  </p>
                </td>
                <td style="width: 283.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:  normal;text-align:justify;'>
                    <span style='font-size:13px;font-family:"Times New Roman",serif;'>Pharrell Williams&rsquo;in Happy &Ouml;rne??inde Metinlerarasilik ve Anametinsellik&nbsp;</span>
                  </p>
                </td>
              </tr>
              <tr>
                <td style="width: 22.8pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;'>
                    <strong><span style='font-size:13px;font-family:  "Times New Roman",serif;'>26</span></strong></p>
                </td>
                <td style="width: 154.15pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;'>
                    <strong><span style='font-size:13px;font-family:  "Times New Roman",serif;'>&Uuml;M??T &Ouml;ZT&Uuml;RK</span></strong>
                  </p>
                </td>
                <td style="width: 283.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:  normal;text-align:justify;'>
                    <span style='font-size:13px;font-family:"Times New Roman",serif;'>Pandemi S&uuml;recinde Afyonkarahisar ??li M&uuml;zik &Ouml;??retimi</span>
                  </p>
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:  normal;text-align:justify;'>
                    <span style='font-size:13px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                </td>
              </tr>
              <tr>
                <td style="width: 22.8pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;'>
                    <strong><span style='font-size:13px;font-family:  "Times New Roman",serif;'>27</span></strong></p>
                </td>
                <td style="width: 154.15pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;'>
                    <strong><span style='font-size:13px;font-family:  "Times New Roman",serif;'>VEL?? Y&Ouml;NTEM</span></strong>
                  </p>
                </td>
                <td style="width: 283.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:  normal;text-align:justify;'>
                    <span style='font-size:13px;font-family:"Times New Roman",serif;'>Kabak Kemane E??itiminde &Ouml;zg&uuml;n Et&uuml;t ve Eser &Ccedil;al????malar??n??n Yeri ve &Ouml;nemi</span>
                  </p>
                </td>
              </tr>
              <tr>
                <td style="width: 22.8pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;'>
                    <strong><span style='font-size:13px;font-family:  "Times New Roman",serif;'>28</span></strong></p>
                </td>
                <td style="width: 154.15pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;'>
                    <strong><span
                          style='font-size:13px;font-family:  "Times New Roman",serif;'>ZEK?? BATUHAN PEHL??VAN</span></strong>
                  </p>
                </td>
                <td style="width: 283.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                  <h1 style='margin-top:0in;margin-right:1.7pt;margin-bottom:.0001pt;margin-left:  0in;text-indent:0in;font-size:19px;font-family:"Times New Roman",serif;font-weight:bold;text-align:justify;'>
                    <span style="font-size:13px;font-weight:normal;">M&uuml;zik Teknolojisinde Dinleyici Merkezli Yeni Bir Yakla????m: Nesne Tabanl?? Ses</span>
                  </h1>
                </td>
              </tr>
              </tbody>
            </table>
          </div>
        </div>
      </section>
      <!-- Eof word table -->
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