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
                    <span style='font-size:13px;font-family:"Times New Roman",serif;'>M&uuml;zik Eğitiminin Toplumun Adalet D&uuml;ş&uuml;ncesine Etkileri</span>
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
                          style='font-size:13px;font-family:  "Times New Roman",serif;'>AYŞEG&Uuml;L G&Ouml;KLEN</span></strong>
                  </p>
                </td>
                <td style="width: 283.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:  normal;text-align:justify;'>
                    <span style='font-size:13px;font-family:"Times New Roman",serif;'>T&uuml;rkiye&rsquo;de G&ouml;rme Engeli ve M&uuml;zik Ortak Alanında Yapılmış Lisans&uuml;st&uuml; Tezler</span>
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
                    <span style='font-size:13px;font-family:"Times New Roman",serif;'>Online Eğitim S&uuml;recinde Ses Eğitimcilerinin Yaşadıkları Sorunların M&uuml;zik Teknolojileri Uzmanları ile Değerlendirilmesi</span>
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
                          style='font-size:13px;font-family:  "Times New Roman",serif;'>DİVİN GEN&Ccedil;OĞLAN</span></strong>
                  </p>
                </td>
                <td style="width: 283.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:  normal;text-align:justify;'>
                    <span style='font-size:13px;font-family:"Times New Roman",serif;'>Erken D&ouml;nem Karşılaştırmalı M&uuml;zikoloji &Ccedil;alışmalarında Viyana Ekol&uuml;</span>
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
                    <strong><span style='font-size:13px;font-family:  "Times New Roman",serif;'>ECEM TUĞ&Ccedil;E AKBULUT</span></strong>
                  </p>
                </td>
                <td style="width: 283.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:  normal;text-align:justify;'>
                    <span style='font-size:13px;font-family:"Times New Roman",serif;'>Soğuk Savaş D&ouml;nemi Sovyetler-Azerbaycan-T&uuml;rkiye İlişkilerinin Gelişim S&uuml;recinde K&uuml;lt&uuml;r El&ccedil;isi Maestro Niyazi&rsquo;nin &Ouml;nemi</span>
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
                    <span style='font-size:13px;font-family:"Times New Roman",serif;'>Hubert Pernot ve Sakız&rsquo;ın Halk Ezgileri</span>
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
                    <span style='font-size:13px;font-family:"Times New Roman",serif;'>Erik Satie&rsquo;nin Piyano M&uuml;ziğindeki Esin Kaynakları ve Stilistik &Ouml;zellikler</span>
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
                    <span style='font-size:13px;font-family:"Times New Roman",serif;'>Piyano Master Classlarında Uzmanların Benzer ve Farklı Y&ouml;nleri</span>
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
                          style='font-size:13px;font-family:  "Times New Roman",serif;'>FATİH TAŞ</span></strong></p>
                </td>
                <td style="width: 283.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:2.1pt;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:justify;'>
                    <span style='font-family:"DIN Engschrift Std",sans-serif;color:black;'><span
                          style='font-size:13px;font-family:"Times New Roman",serif;'>Pandemi S&uuml;recinin Sahne Alan Canlı Performans M&uuml;zisyenlerine Etkisi</span></span>
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
                          style='font-size:13px;font-family:  "Times New Roman",serif;'>FİLİZ YILDIZ</span></strong></p>
                </td>
                <td style="width: 283.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;'>
                    <span style='font-size:13px;font-family:"Times New Roman",serif;color:black;'>Konservatuvar Solfej Dersi Eğitimcilerinin M&uuml;ziksel Okuma / Solfej &Ouml;ğretim Yaklaşımları</span>
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
                          style='font-size:13px;font-family:  "Times New Roman",serif;'>G&Ouml;KHAN ALTINBAŞ</span></strong>
                  </p>
                </td>
                <td style="width: 283.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:14.15pt;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:  0in;line-height:normal;text-align:justify;'>
                    <span style='font-size:13px;font-family:"Times New Roman",serif;'>Doğu Karadeniz Halk Dansları ve M&uuml;ziğine Toplumsal Cinsiyet ve Cinsellik &Ouml;zelinde Bir Bakış</span>
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
                    <strong><span style='font-size:13px;font-family:  "Times New Roman",serif;'>G&Ouml;ZDE ECE YAVAŞ &Ouml;ZT&Uuml;RK</span></strong>
                  </p>
                </td>
                <td style="width: 283.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:8.0pt;line-height:107%;margin:0in;text-align:justify;'>
                    <strong><span style="font-size:13px;color:black;">Paris Konservatuvarı&rsquo;nın Kurumsal Ekonomik Yapısı</span></strong>
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
                    <span style='font-size:13px;font-family:"Times New Roman",serif;'>Caz M&uuml;ziğinde Kolektif Doğa&ccedil;lama &Ouml;rneği Olarak &quot;Conduction&quot;</span>
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
                          style='font-size:13px;font-family:  "Times New Roman",serif;'>İDİL &Ouml;ZCAN&nbsp;</span></strong>
                  </p>
                </td>
                <td style="width: 283.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:  normal;text-align:justify;'>
                    <span style='font-size:13px;font-family:"Times New Roman",serif;'>Erken D&ouml;nem Karşılaştırmalı M&uuml;zikoloji &Ccedil;alışmalarında Berlin Ekol&uuml;</span>
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
                    <span style='font-size:13px;font-family:"Times New Roman",serif;'>Crumb&rsquo;ın G&ouml;rsel Nota Tasarımı: Fantasy Pieces After the Zodiac&nbsp;</span>
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
                          style='font-size:13px;font-family:  "Times New Roman",serif;'>İPEK AKANAY</span></strong></p>
                </td>
                <td style="width: 283.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:16px;font-family:"Helvetica Neue";margin-top:0in;margin-bottom:0in;color:black;border:none;text-align:justify;'>
                    <span style='font-size:13px;font-family:"Times New Roman",serif;'>Pandemide Klasik Batı M&uuml;ziği Alanında Yeni Medya Kullanımı</span>
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
                    <span style='font-size:13px;font-family:"Times New Roman",serif;'>Johann Sebastian Bach&rsquo;ın Klavye İ&ccedil;in Yazılan Eserlerinde &ldquo;Tempo&rdquo; Olgusu</span>
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
                    <span style='font-size:13px;font-family:"Times New Roman",serif;'>T&uuml;rk M&uuml;ziği &Ccedil;okseslendirme Alanında Yapılan Lisans&uuml;st&uuml; Tezler</span>
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
                    <span style="font-size:13px;">Davul İ&ccedil;in Tam Otomatik Bir Akort Sisteminin Tasarımı ve Optimizasyonu</span>
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
                    <span style="font-size:13px;">Ankara Halkevi Dergisi &Uuml;lk&uuml;&rsquo;de Yayınlanan Yazılar Işığında 1933-1950 Yılları Arasında T&uuml;rkiye&rsquo;de M&uuml;zik Yaşamı ve M&uuml;zik &Uuml;zerine Tartışmalar</span>
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
                          style='font-size:13px;font-family:  "Times New Roman",serif;'>RECEP EGE ALTINCIOĞLU</span></strong>
                  </p>
                </td>
                <td style="width: 283.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:8.0pt;line-height:107%;margin:0in;text-align:justify;'>
                    <span style="font-size:13px;">Sosyalleşme ve Akademik Başarı İlişkisi: İZOT İzmir Otizm Orkestrası ve Korosu &Ouml;rneği</span>
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
                          style='font-size:13px;font-family:  "Times New Roman",serif;'>SELİN KARANCI</span></strong>
                  </p>
                </td>
                <td style="width: 283.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:  normal;text-align:justify;'>
                    <span style='font-size:13px;font-family:"Times New Roman",serif;'>&Ccedil;ağdaş Solo Timpani Repertuvarında Mehter M&uuml;ziği Etkisi: Berry&rsquo;nin Mehteran &Ouml;rneği</span>
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
                          style='font-size:13px;font-family:  "Times New Roman",serif;'>SİYABEND RECEP BAYAT</span></strong>
                  </p>
                </td>
                <td style="width: 283.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:  normal;text-align:justify;'>
                    <span style='font-size:13px;font-family:"Times New Roman",serif;'>Ulusal Bir M&uuml;zik Eğitimi Programı Olan El Sistema&rsquo;nın T&uuml;m Y&ouml;nleriyle İncelenmesi</span>
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
                    <strong><span style='font-size:13px;font-family:  "Times New Roman",serif;'>UĞUR ASLAN&nbsp;</span></strong>
                  </p>
                </td>
                <td style="width: 283.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:  normal;text-align:justify;'>
                    <span style='font-size:13px;font-family:"Times New Roman",serif;'>Pharrell Williams&rsquo;in Happy &Ouml;rneğinde Metinlerarasilik ve Anametinsellik&nbsp;</span>
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
                    <strong><span style='font-size:13px;font-family:  "Times New Roman",serif;'>&Uuml;MİT &Ouml;ZT&Uuml;RK</span></strong>
                  </p>
                </td>
                <td style="width: 283.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:  normal;text-align:justify;'>
                    <span style='font-size:13px;font-family:"Times New Roman",serif;'>Pandemi S&uuml;recinde Afyonkarahisar İli M&uuml;zik &Ouml;ğretimi</span>
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
                    <strong><span style='font-size:13px;font-family:  "Times New Roman",serif;'>VELİ Y&Ouml;NTEM</span></strong>
                  </p>
                </td>
                <td style="width: 283.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                  <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:  normal;text-align:justify;'>
                    <span style='font-size:13px;font-family:"Times New Roman",serif;'>Kabak Kemane Eğitiminde &Ouml;zg&uuml;n Et&uuml;t ve Eser &Ccedil;alışmalarının Yeri ve &Ouml;nemi</span>
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
                          style='font-size:13px;font-family:  "Times New Roman",serif;'>ZEKİ BATUHAN PEHLİVAN</span></strong>
                  </p>
                </td>
                <td style="width: 283.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                  <h1 style='margin-top:0in;margin-right:1.7pt;margin-bottom:.0001pt;margin-left:  0in;text-indent:0in;font-size:19px;font-family:"Times New Roman",serif;font-weight:bold;text-align:justify;'>
                    <span style="font-size:13px;font-weight:normal;">M&uuml;zik Teknolojisinde Dinleyici Merkezli Yeni Bir Yaklaşım: Nesne Tabanlı Ses</span>
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