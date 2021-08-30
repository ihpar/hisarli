<?php
session_start();

$is_secure = true;

$page_name = "youth-seminars";

require_once "dbms/utils.php";

require_once "modules/header_prefixes.php";

require_once "langs/lang_global.php";

require_once "langs/lang_youth-seminars-program.php";
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

      strong {
          font-weight: bold;
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
          <div class="cerceve" style="width: 744px; margin: 0 auto;">
            <h3 class="center-text sec-h3"><?php echo($lang_youth_sem["genclik_seminerleri-program"][$pref_lang]); ?></h3>
              <!-- Word table -->
              <table style="width:538.4pt;border-collapse:collapse;border:none; margin: 0 auto;">
                <tbody>
                <tr>
                  <td style="width: 33.3pt;border-top: 1pt solid rgb(91, 155, 213);border-bottom: 1pt solid rgb(91, 155, 213);border-left: 1pt solid rgb(91, 155, 213);border-image: initial;border-right: none;background: rgb(0, 176, 240);padding: 0in 5.4pt;vertical-align: top;">
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></strong>
                    </p>
                  </td>
                  <td colspan="2"
                      style="width: 505.1pt;border-top: 1pt solid rgb(91, 155, 213);border-right: 1pt solid rgb(91, 155, 213);border-bottom: 1pt solid rgb(91, 155, 213);border-image: initial;border-left: none;background: rgb(0, 176, 240);padding: 0in 5.4pt;vertical-align: top;">
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:150%;text-align:center;'>
                      <strong><span
                            style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;color:black;'>XI. ULUSLARARASI HİSARLI AHMET SEMPOZYUMU</span></strong>
                    </p>
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:150%;text-align:center;'>
                      <strong><span
                            style='font-size:29px;line-height:150%;font-family:"Times New Roman",serif;color:black;'>I. Ulusal Hisarlı Gen&ccedil;lik Seminerleri</span></strong>
                    </p>
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:150%;text-align:center;'>
                      <strong><span
                            style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;color:black;'>19 MAYIS 2021</span></strong>
                    </p>
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:150%;text-align:center;'>
                      <strong><span style="color:white;"><a href="https://hisarliahmet.org"><span
                                style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;color:black;text-decoration:none;'>https://hisarliahmet.org</span></a></span></strong>
                    </p>
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:150%;text-align:center;'>
                      <strong><span
                            style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;color:black;'>P R O G R A M</span></strong>
                    </p>
                  </td>
                </tr>
                <tr>
                  <td style="width: 33.3pt;border-right: 1pt solid rgb(156, 194, 229);border-bottom: 1pt solid rgb(156, 194, 229);border-left: 1pt solid rgb(156, 194, 229);border-image: initial;border-top: none;background: rgb(222, 234, 246);padding: 0in 5.4pt;vertical-align: top;">
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span
                            style='font-size:13px;font-family:"Times New Roman",serif;color:black;'>09.30</span></strong>
                    </p>
                  </td>
                  <td colspan="2"
                      style="width: 505.1pt;border-top: none;border-left: none;border-bottom: 1pt solid rgb(156, 194, 229);border-right: 1pt solid rgb(156, 194, 229);background: rgb(0, 176, 80);padding: 0in 5.4pt;vertical-align: top;">
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span style='font-size:16px;font-family:"Times New Roman",serif;color:black;'>A&Ccedil;ILIŞ</span></strong>
                    </p>
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span
                            style='font-size:19px;font-family:"Times New Roman",serif;color:#002060;'>Zoom</span></strong><span
                          style='font-size:19px;font-family:"Times New Roman",serif;color:#002060;background:#00B050;'>:</span><strong><span
                            style='font-size:16px;font-family:"Times New Roman",serif;color:white;background:#00B050;'>&nbsp;</span></strong><strong><span
                            style='font-size:16px;font-family:  "Times New Roman",serif;color:black;background:#00B050;'>Meeting ID:</span></strong><span
                          style='font-size:16px;font-family:"Times New Roman",serif;color:black;background:#00B050;'>&nbsp;475 639 4770 / <strong>Passcode:</strong> hisarlisym</span>
                    </p>
                  </td>
                </tr>
                <tr>
                  <td style="width: 33.3pt;border-right: 1pt solid rgb(156, 194, 229);border-bottom: 1pt solid rgb(156, 194, 229);border-left: 1pt solid rgb(156, 194, 229);border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span style='font-size:13px;font-family:"Times New Roman",serif;'>10.00</span></strong>
                    </p>
                  </td>
                  <td colspan="2"
                      style="width: 505.1pt;border-top: none;border-left: none;border-bottom: 1pt solid rgb(156, 194, 229);border-right: 1pt solid rgb(156, 194, 229);padding: 0in 5.4pt;vertical-align: top;">
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span
                            style='font-size:16px;font-family:"Times New Roman",serif;'>DAVETLİ KONUŞMACI</span></strong>
                    </p>
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span
                            style='font-size:16px;font-family:"Times New Roman",serif;'>Prof. Dr. Hakan CEVHER</span></strong>
                    </p>
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;background:white;'>
                      <span style='font-family:"Times New Roman",serif;color:#222222;'>Ege &Uuml;niversitesi Devlet T&uuml;rk Musikisi Konservatuvarı M&uuml;d&uuml;r&uuml;</span>
                    </p>
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;background:  white;'>
                      <span style='font-family:"Times New Roman",serif;color:#222222;'>&nbsp;</span></p>
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><em><span
                              style='font-size:18px;font-family:"Helvetica Neue";color:#222222;background:white;'>&ldquo;&Uuml;lkemiz Akademikleşme S&uuml;recinin M&uuml;ziksel İzd&uuml;ş&uuml;m&uuml;&rdquo;</span></em></strong>
                    </p>
                  </td>
                </tr>
                <tr>
                  <td style="width: 33.3pt;border-right: 1pt solid rgb(156, 194, 229);border-bottom: 1pt solid rgb(156, 194, 229);border-left: 1pt solid rgb(156, 194, 229);border-image: initial;border-top: none;background: rgb(222, 234, 246);padding: 0in 5.4pt;vertical-align: top;">
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span
                            style='font-size:13px;font-family:"Times New Roman",serif;color:black;'>10.45</span></strong>
                    </p>
                  </td>
                  <td colspan="2"
                      style="width: 505.1pt;border-top: none;border-left: none;border-bottom: 1pt solid rgb(156, 194, 229);border-right: 1pt solid rgb(156, 194, 229);background: red;padding: 0in 5.4pt;vertical-align: top;">
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span style='font-family:"Times New Roman",serif;color:black;'>ARA</span></strong></p>
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span style='font-family:"Times New Roman",serif;'>&nbsp;</span></strong></p>
                  </td>
                </tr>
                <tr>
                  <td rowspan="7"
                      style="width: 33.3pt;border-right: 1pt solid rgb(156, 194, 229);border-bottom: 1pt solid rgb(156, 194, 229);border-left: 1pt solid rgb(156, 194, 229);border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span style='font-size:13px;font-family:"Times New Roman",serif;'>&nbsp;</span></strong>
                    </p>
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span style='font-size:13px;font-family:"Times New Roman",serif;'>&nbsp;</span></strong>
                    </p>
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span style='font-size:13px;font-family:"Times New Roman",serif;'>&nbsp;</span></strong>
                    </p>
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span style='font-size:13px;font-family:"Times New Roman",serif;'>&nbsp;</span></strong>
                    </p>
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span style='font-size:13px;font-family:"Times New Roman",serif;'>&nbsp;</span></strong>
                    </p>
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span style='font-size:13px;font-family:"Times New Roman",serif;'>&nbsp;</span></strong>
                    </p>
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span style='font-size:13px;font-family:"Times New Roman",serif;'>&nbsp;</span></strong>
                    </p>
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span style='font-size:13px;font-family:"Times New Roman",serif;'>&nbsp;</span></strong>
                    </p>
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span style='font-size:13px;font-family:"Times New Roman",serif;'>&nbsp;</span></strong>
                    </p>
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span style='font-size:13px;font-family:"Times New Roman",serif;'>&nbsp;</span></strong>
                    </p>
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span style='font-size:13px;font-family:"Times New Roman",serif;'>11.00</span></strong>
                    </p>
                  </td>
                  <td style="width: 257.05pt;border-top: none;border-left: none;border-bottom: 1pt solid rgb(156, 194, 229);border-right: 1pt solid rgb(156, 194, 229);background: rgb(255, 192, 0);padding: 0in 5.4pt;vertical-align: top;">
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span style='font-family:"Times New Roman",serif;color:black;'>SALON I</span></strong>
                    </p>
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span style='font-family:"Times New Roman",serif;'>&nbsp;</span></strong></p>
                  </td>
                  <td style="width: 248.05pt;border-top: none;border-left: none;border-bottom: 1pt solid rgb(156, 194, 229);border-right: 1pt solid rgb(156, 194, 229);background: rgb(255, 192, 0);padding: 0in 5.4pt;vertical-align: top;">
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span style='font-family:"Times New Roman",serif;color:black;'>SALON II</span></strong>
                    </p>
                  </td>
                </tr>
                <tr>
                  <td style="width: 257.05pt;border-top: none;border-left: none;border-bottom: 1pt solid rgb(156, 194, 229);border-right: 1pt solid rgb(156, 194, 229);background: rgb(146, 208, 80);padding: 0in 5.4pt;vertical-align: top;">
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span
                            style='font-family:"Times New Roman",serif;color:#002060;'>Zoom:</span></strong><span
                          style='font-family:"Times New Roman",serif;color:#002060;'>&nbsp;</span><span
                          style='font-family:"Times New Roman",serif;color:#222222;background:#92D050;'>Meeting ID: 475 639 4770<br>&nbsp;Passcode: hisarlisym</span>
                    </p>
                  </td>
                  <td style="width: 248.05pt;border-top: none;border-left: none;border-bottom: 1pt solid rgb(156, 194, 229);border-right: 1pt solid rgb(156, 194, 229);background: rgb(146, 208, 80);padding: 0in 5.4pt;vertical-align: top;">
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span style='font-family:"Times New Roman",serif;color:#002060;'>Zoom<span
                              style="background:#92D050;">:</span></span></strong><span
                          style='font-family:"Times New Roman",serif;color:#222222;background:#92D050;'>&nbsp;Meeting ID: 849 324 7610<br>&nbsp;Passcode: hisarlisym</span>
                    </p>
                  </td>
                </tr>
                <tr>
                  <td style="width: 257.05pt;border-top: none;border-left: none;border-bottom: 1pt solid rgb(156, 194, 229);border-right: 1pt solid rgb(156, 194, 229);background: yellow;padding: 0in 5.4pt;vertical-align: top;">
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><em><span style='font-family:"Times New Roman",serif;color:black;'>Moderat&ouml;r: Uğur ASLAN</span></em></strong>
                    </p>
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><em><span style='font-family:"Times New Roman",serif;'>&nbsp;</span></em></strong></p>
                  </td>
                  <td style="width: 248.05pt;border-top: none;border-left: none;border-bottom: 1pt solid rgb(156, 194, 229);border-right: 1pt solid rgb(156, 194, 229);background: yellow;padding: 0in 5.4pt;vertical-align: top;">
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><em><span style='font-family:"Times New Roman",serif;color:black;'>Moderat&ouml;r: Nihan TAHTAİŞLEYEN</span></em></strong>
                    </p>
                  </td>
                </tr>
                <tr>
                  <td style="width: 257.05pt;border-top: none;border-left: none;border-bottom: 1pt solid rgb(156, 194, 229);border-right: 1pt solid rgb(156, 194, 229);background: rgb(222, 234, 246);padding: 0in 5.4pt;vertical-align: top;">
                    <p style='margin-right:14.15pt;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <span style='font-family:"Times New Roman",serif;color:black;'>Doğu Karadeniz Halk Dansları ve M&uuml;ziğine Toplumsal Cinsiyet ve Cinsellik &Ouml;zelinde Bir Bakış</span>
                    </p>
                    <p style='margin-right:0in;margin-left:0in;font-size:16px;font-family:"Times New Roman",serif;margin:0in;text-align:center;'>
                      <strong><span style="font-size:15px;color:black;">G&ouml;khan Altınbaş</span></strong><span
                          style="font-size:15px;color:black;">&nbsp;</span></p>
                  </td>
                  <td style="width: 248.05pt;border-top: none;border-left: none;border-bottom: 1pt solid rgb(156, 194, 229);border-right: 1pt solid rgb(156, 194, 229);background: rgb(222, 234, 246);padding: 0in 5.4pt;vertical-align: top;">
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <span style='font-family:"Times New Roman",serif;color:black;'>Erken D&ouml;nem Karşılaştırmalı M&uuml;zikoloji &Ccedil;alışmalarında Berlin Ekol&uuml;</span>
                    </p>
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span
                            style='font-family:"Times New Roman",serif;color:black;'>İdil &Ouml;zcan</span></strong>
                    </p>
                  </td>
                </tr>
                <tr>
                  <td style="width: 257.05pt;border-top: none;border-left: none;border-bottom: 1pt solid rgb(156, 194, 229);border-right: 1pt solid rgb(156, 194, 229);padding: 0in 5.4pt;vertical-align: top;">
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <span style='font-family:"Times New Roman",serif;'>Kabak Kemane Eğitiminde &Ouml;zg&uuml;n Et&uuml;t ve Eser &Ccedil;alışmalarının Yeri ve &Ouml;nemi</span>
                    </p>
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span style='font-family:"Times New Roman",serif;'>Veli Y&ouml;ntem</span></strong></p>
                  </td>
                  <td style="width: 248.05pt;border-top: none;border-left: none;border-bottom: 1pt solid rgb(156, 194, 229);border-right: 1pt solid rgb(156, 194, 229);padding: 0in 5.4pt;vertical-align: top;">
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                        <span
                            style='font-family:"Times New Roman",serif;'>Hubert Pernot ve Sakız&rsquo;ın Halk Ezgileri</span>
                    </p>
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span style='font-family:"Times New Roman",serif;'>Ela Alpman</span></strong></p>
                  </td>
                </tr>
                <tr>
                  <td style="width: 257.05pt;border-top: none;border-left: none;border-bottom: 1pt solid rgb(156, 194, 229);border-right: 1pt solid rgb(156, 194, 229);background: rgb(222, 234, 246);padding: 0in 5.4pt;vertical-align: top;">
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <span style='font-family:"Times New Roman",serif;color:black;'>T&uuml;rk M&uuml;ziği &Ccedil;okseslendirme Alanında Yapılan Lisans&uuml;st&uuml; Tezler</span>
                    </p>
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span
                            style='font-family:"Times New Roman",serif;color:black;'>Muzaffer Soner Yılmaz</span></strong>
                    </p>
                  </td>
                  <td style="width: 248.05pt;border-top: none;border-left: none;border-bottom: 1pt solid rgb(156, 194, 229);border-right: 1pt solid rgb(156, 194, 229);background: rgb(222, 234, 246);padding: 0in 5.4pt;vertical-align: top;">
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span
                            style="color:black;">Paris Konservatuvarı&rsquo;nın Kurumsal Ekonomik Yapısı</span></strong>
                    </p>
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span style='font-family:"Times New Roman",serif;color:black;'>G&ouml;zde Ece Yavaş &Ouml;zt&uuml;rk</span></strong>
                    </p>
                  </td>
                </tr>
                <tr>
                  <td style="width: 257.05pt;border-top: none;border-left: none;border-bottom: 1pt solid rgb(156, 194, 229);border-right: 1pt solid rgb(156, 194, 229);padding: 0in 5.4pt;height: 36.1pt;vertical-align: top;">
                    <p style='margin-right:0in;margin-left:0in;font-size:16px;font-family:"Times New Roman",serif;margin:0in;text-align:center;'>
                      <span style="font-size:15px;">Ankara Halkevi Dergisi &Uuml;lk&uuml;&rsquo;de Yayınlanan Yazılar Işığında 1933-1950 Yılları Arasında T&uuml;rkiye&rsquo;de M&uuml;zik Yaşamı ve M&uuml;zik &Uuml;zerine Tartışmalar</span>
                    </p>
                    <p style='margin-right:14.15pt;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span
                            style='font-family:"Times New Roman",serif;'>&Ouml;zg&uuml;n Arıt&uuml;rk</span></strong>
                    </p>
                  </td>
                  <td style="width: 248.05pt;border-top: none;border-left: none;border-bottom: 1pt solid rgb(156, 194, 229);border-right: 1pt solid rgb(156, 194, 229);padding: 0in 5.4pt;height: 36.1pt;vertical-align: top;">
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <span style='font-family:"Times New Roman",serif;'>Erken D&ouml;nem Karşılaştırmalı M&uuml;zikoloji &Ccedil;alışmalarında Viyana Ekol&uuml;</span>
                    </p>
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span
                            style='font-family:"Times New Roman",serif;'>Divin Gen&ccedil;oğlan</span></strong></p>
                  </td>
                </tr>
                <tr>
                  <td style="width: 33.3pt;border-right: 1pt solid rgb(156, 194, 229);border-bottom: 1pt solid rgb(156, 194, 229);border-left: 1pt solid rgb(156, 194, 229);border-image: initial;border-top: none;background: rgb(222, 234, 246);padding: 0in 5.4pt;vertical-align: top;">
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span
                            style='font-size:13px;font-family:"Times New Roman",serif;color:black;'>13.00</span></strong>
                    </p>
                  </td>
                  <td colspan="2"
                      style="width: 505.1pt;border-top: none;border-left: none;border-bottom: 1pt solid rgb(156, 194, 229);border-right: 1pt solid rgb(156, 194, 229);background: red;padding: 0in 5.4pt;vertical-align: top;">
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span style='font-family:"Times New Roman",serif;color:black;'>ARA</span></strong></p>
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span style='font-family:"Times New Roman",serif;'>&nbsp;</span></strong></p>
                  </td>
                </tr>
                <tr>
                  <td rowspan="5"
                      style="width: 33.3pt;border-right: 1pt solid rgb(156, 194, 229);border-bottom: 1pt solid rgb(156, 194, 229);border-left: 1pt solid rgb(156, 194, 229);border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span style='font-size:13px;font-family:"Times New Roman",serif;'>&nbsp;</span></strong>
                    </p>
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span style='font-size:13px;font-family:"Times New Roman",serif;'>&nbsp;</span></strong>
                    </p>
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span style='font-size:13px;font-family:"Times New Roman",serif;'>&nbsp;</span></strong>
                    </p>
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span style='font-size:13px;font-family:"Times New Roman",serif;'>&nbsp;</span></strong>
                    </p>
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span style='font-size:13px;font-family:"Times New Roman",serif;'>&nbsp;</span></strong>
                    </p>
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span style='font-size:13px;font-family:"Times New Roman",serif;'>&nbsp;</span></strong>
                    </p>
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span style='font-size:13px;font-family:"Times New Roman",serif;'>&nbsp;</span></strong>
                    </p>
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span style='font-size:13px;font-family:"Times New Roman",serif;'>&nbsp;</span></strong>
                    </p>
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span style='font-size:13px;font-family:"Times New Roman",serif;'>13.10</span></strong>
                    </p>
                  </td>
                  <td style="width: 257.05pt;border-top: none;border-left: none;border-bottom: 1pt solid rgb(156, 194, 229);border-right: 1pt solid rgb(156, 194, 229);background: yellow;padding: 0in 5.4pt;vertical-align: top;">
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;background:yellow;'>
                      <strong><em><span style='font-family:"Times New Roman",serif;color:black;'>Moderat&ouml;r:<span
                                style="background:yellow;">&nbsp;Veli Y&Ouml;NTEM</span></span></em></strong></p>
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;background:yellow;'>
                      <strong><em><span
                              style='font-family:"Times New Roman",serif;background:yellow;'>&nbsp;</span></em></strong>
                    </p>
                  </td>
                  <td style="width: 248.05pt;border-top: none;border-left: none;border-bottom: 1pt solid rgb(156, 194, 229);border-right: 1pt solid rgb(156, 194, 229);background: yellow;padding: 0in 5.4pt;vertical-align: top;">
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><em><span style='font-family:"Times New Roman",serif;color:black;'>Moderat&ouml;r: İsmail Hakkı PARLAK</span></em></strong>
                    </p>
                  </td>
                </tr>
                <tr>
                  <td style="width: 257.05pt;border-top: none;border-left: none;border-bottom: 1pt solid rgb(156, 194, 229);border-right: 1pt solid rgb(156, 194, 229);background: rgb(222, 234, 246);padding: 0in 5.4pt;vertical-align: top;">
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <span style='font-family:"Times New Roman",serif;color:black;'>Pandemi S&uuml;recinde Afyonkarahisar İli M&uuml;zik &Ouml;ğretimi</span><strong><span
                            style='font-family:"Times New Roman",serif;color:black;'>&nbsp;</span></strong></p>
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span
                            style='font-family:"Times New Roman",serif;color:black;'>&Uuml;mit &Ouml;zt&uuml;rk</span></strong>
                    </p>
                  </td>
                  <td style="width: 248.05pt;border-top: none;border-left: none;border-bottom: 1pt solid rgb(156, 194, 229);border-right: 1pt solid rgb(156, 194, 229);background: rgb(222, 234, 246);padding: 0in 5.4pt;vertical-align: top;">
                    <p style='margin-right:0in;margin-left:0in;font-size:16px;font-family:"Times New Roman",serif;margin-top:6.0pt;margin-bottom:6.0pt;text-align:center;margin:0in;'>
                      <span style="font-size:15px;color:black;">Davul İ&ccedil;in Tam Otomatik Bir Akort Sisteminin Tasarımı ve Optimizasyonu</span>
                    </p>
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span
                            style='font-family:"Times New Roman",serif;color:black;'>&Ouml;zg&uuml;n Arda Nural</span></strong>
                    </p>
                  </td>
                </tr>
                <tr>
                  <td style="width: 257.05pt;border-top: none;border-left: none;border-bottom: 1pt solid rgb(156, 194, 229);border-right: 1pt solid rgb(156, 194, 229);padding: 0in 5.4pt;vertical-align: top;">
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                        <span style='font-family:"DIN Engschrift Std",sans-serif;color:black;'><span
                              style='font-family:"Times New Roman",serif;color:windowtext;'>Pandemi S&uuml;recinin Sahne Alan Canlı Performans M&uuml;zisyenlerine Etkisi</span></span><strong><span
                            style='font-family:"Times New Roman",serif;'>&nbsp;</span></strong></p>
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span style='font-family:"Times New Roman",serif;'>Fatih Taş</span></strong></p>
                  </td>
                  <td style="width: 248.05pt;border-top: none;border-left: none;border-bottom: 1pt solid rgb(156, 194, 229);border-right: 1pt solid rgb(156, 194, 229);padding: 0in 5.4pt;vertical-align: top;">
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <span style='font-family:"Times New Roman",serif;'>Crumb&rsquo;ın G&ouml;rsel Nota Tasarımı: Fantasy Pieces After The Zodiac</span>
                    </p>
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span style='font-family:"Times New Roman",serif;'>Ilgın Uysal</span></strong></p>
                  </td>
                </tr>
                <tr>
                  <td style="width: 257.05pt;border-top: none;border-left: none;border-bottom: 1pt solid rgb(156, 194, 229);border-right: 1pt solid rgb(156, 194, 229);background: rgb(222, 234, 246);padding: 0in 5.4pt;vertical-align: top;">
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <span style='font-family:"Times New Roman",serif;color:black;'>Pandemide Klasik Batı M&uuml;ziği Alanında Yeni Medya Kullanımı</span><strong><span
                            style='font-family:"Times New Roman",serif;color:black;'>&nbsp;</span></strong></p>
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span
                            style='font-family:"Times New Roman",serif;color:black;'>İpek Akanay</span></strong></p>
                  </td>
                  <td style="width: 248.05pt;border-top: none;border-left: none;border-bottom: 1pt solid rgb(156, 194, 229);border-right: 1pt solid rgb(156, 194, 229);background: rgb(222, 234, 246);padding: 0in 5.4pt;vertical-align: top;">
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <span style='font-family:"Times New Roman",serif;color:black;'>Soğuk Savaş D&ouml;nemi Sovyetler-Azerbaycan-T&uuml;rkiye İlişkilerinin Gelişim S&uuml;recinde K&uuml;lt&uuml;r El&ccedil;isi Maestro Niyazi&rsquo;nin &Ouml;nemi</span>
                    </p>
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span
                            style='font-family:"Times New Roman",serif;color:black;'>Ecem Tuğ&ccedil;e Akbulut</span></strong>
                    </p>
                  </td>
                </tr>
                <tr>
                  <td style="width: 257.05pt;border-top: none;border-left: none;border-bottom: 1pt solid rgb(156, 194, 229);border-right: 1pt solid rgb(156, 194, 229);padding: 0in 5.4pt;vertical-align: top;">
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <span style='font-family:"Times New Roman",serif;'>Online Eğitim S&uuml;recinde Ses Eğitimcilerinin Yaşadıkları Sorunların M&uuml;zik Teknolojileri Uzmanları ile Değerlendirilmesi<strong>&nbsp;</strong></span>
                    </p>
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span style='font-family:"Times New Roman",serif;'>Canan Tezcan</span></strong></p>
                  </td>
                  <td style="width: 248.05pt;border-top: none;border-left: none;border-bottom: 1pt solid rgb(156, 194, 229);border-right: 1pt solid rgb(156, 194, 229);padding: 0in 5.4pt;vertical-align: top;">
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <span style='font-family:"Times New Roman",serif;'>Caz M&uuml;ziğinde Kolektif Doğa&ccedil;lama &Ouml;rneği Olarak &quot;Conduction&quot;</span>
                    </p>
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span style='font-family:"Times New Roman",serif;'>Hakan Kamalı</span></strong></p>
                  </td>
                </tr>
                <tr>
                  <td style="width: 33.3pt;border-right: 1pt solid rgb(156, 194, 229);border-bottom: 1pt solid rgb(156, 194, 229);border-left: 1pt solid rgb(156, 194, 229);border-image: initial;border-top: none;background: rgb(222, 234, 246);padding: 0in 5.4pt;height: 17.6pt;vertical-align: top;">
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span
                            style='font-size:13px;font-family:"Times New Roman",serif;color:black;'>15.10</span></strong>
                    </p>
                  </td>
                  <td colspan="2"
                      style="width: 505.1pt;border-top: none;border-left: none;border-bottom: 1pt solid rgb(156, 194, 229);border-right: 1pt solid rgb(156, 194, 229);background: red;padding: 0in 5.4pt;height: 17.6pt;vertical-align: top;">
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span style='font-family:"Times New Roman",serif;color:black;'>ARA</span></strong></p>
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span style='font-family:"Times New Roman",serif;'>&nbsp;</span></strong></p>
                  </td>
                </tr>
                <tr>
                  <td rowspan="4"
                      style="width: 33.3pt;border-right: 1pt solid rgb(156, 194, 229);border-bottom: 1pt solid rgb(156, 194, 229);border-left: 1pt solid rgb(156, 194, 229);border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span style='font-size:13px;font-family:"Times New Roman",serif;'>&nbsp;</span></strong>
                    </p>
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span style='font-size:13px;font-family:"Times New Roman",serif;'>&nbsp;</span></strong>
                    </p>
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span style='font-size:13px;font-family:"Times New Roman",serif;'>&nbsp;</span></strong>
                    </p>
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span style='font-size:13px;font-family:"Times New Roman",serif;'>&nbsp;</span></strong>
                    </p>
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;'>
                      <strong><span style='font-size:13px;font-family:"Times New Roman",serif;'>&nbsp;</span></strong>
                    </p>
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span style='font-size:13px;font-family:"Times New Roman",serif;'>15.20</span></strong>
                    </p>
                  </td>
                  <td style="width: 257.05pt;border-top: none;border-left: none;border-bottom: 1pt solid rgb(156, 194, 229);border-right: 1pt solid rgb(156, 194, 229);background: yellow;padding: 0in 5.4pt;vertical-align: top;">
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><em><span style='font-family:"Times New Roman",serif;color:black;'>Moderat&ouml;r: Selim TAN</span></em></strong>
                    </p>
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <em><span style='font-family:"Times New Roman",serif;'>&nbsp;</span></em></p>
                  </td>
                  <td style="width: 248.05pt;border-top: none;border-left: none;border-bottom: 1pt solid rgb(156, 194, 229);border-right: 1pt solid rgb(156, 194, 229);background: yellow;padding: 0in 5.4pt;vertical-align: top;">
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;background:yellow;'>
                      <strong><em><span style='font-family:"Times New Roman",serif;color:black;background:yellow;'>Moderat&ouml;r: Mustafa İlke ŞEN&nbsp;</span></em></strong>
                    </p>
                  </td>
                </tr>
                <tr>
                  <td style="width: 257.05pt;border-top: none;border-left: none;border-bottom: 1pt solid rgb(156, 194, 229);border-right: 1pt solid rgb(156, 194, 229);background: rgb(222, 234, 246);padding: 0in 5.4pt;vertical-align: top;">
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <span style='font-family:"Times New Roman",serif;color:black;'>Konservatuvar Solfej Dersi Eğitimcilerinin M&uuml;ziksel Okuma / Solfej &Ouml;ğretim Yaklaşımları</span>
                    </p>
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span
                            style='font-family:"Times New Roman",serif;color:black;'>Filiz Yıldız</span></strong><span
                          style='font-family:  "Times New Roman",serif;color:black;'>&nbsp;</span></p>
                  </td>
                  <td style="width: 248.05pt;border-top: none;border-left: none;border-bottom: 1pt solid rgb(156, 194, 229);border-right: 1pt solid rgb(156, 194, 229);background: rgb(222, 234, 246);padding: 0in 5.4pt;vertical-align: top;">
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <span style='font-family:"Times New Roman",serif;color:black;'>Erik Satie&rsquo;nin Piyano M&uuml;ziğindeki Esin Kaynakları ve Stilistik &Ouml;zellikler</span>
                    </p>
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span
                            style='font-family:"Times New Roman",serif;color:black;'>Emrah Ergene</span></strong></p>
                  </td>
                </tr>
                <tr>
                  <td style="width: 257.05pt;border-top: none;border-left: none;border-bottom: 1pt solid rgb(156, 194, 229);border-right: 1pt solid rgb(156, 194, 229);padding: 0in 5.4pt;vertical-align: top;">
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <span style='font-family:"Times New Roman",serif;'>How to Teach Music Effectively? Review of the Most Efficient Methods in Instrumental Pedagogy</span>
                    </p>
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span
                            style='font-family:"Times New Roman",serif;'>Marzena Maria Kızılay</span></strong><span
                          style='font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                  </td>
                  <td style="width: 248.05pt;border-top: none;border-left: none;border-bottom: 1pt solid rgb(156, 194, 229);border-right: 1pt solid rgb(156, 194, 229);padding: 0in 5.4pt;vertical-align: top;">
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <span style='font-family:"Times New Roman",serif;'>Johann Sebastian Bach&rsquo;ın Klavye İ&ccedil;in Yazılan Eserlerinde &ldquo;Tempo&rdquo; Olgusu</span>
                    </p>
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span style='font-family:"Times New Roman",serif;'>Mustafa Okan Kızılay</span></strong>
                    </p>
                  </td>
                </tr>
                <tr>
                  <td style="width: 257.05pt;border-top: none;border-left: none;border-bottom: 1pt solid rgb(156, 194, 229);border-right: 1pt solid rgb(156, 194, 229);background: rgb(222, 234, 246);padding: 0in 5.4pt;vertical-align: top;">
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <span style='font-family:"Times New Roman",serif;color:black;'>M&uuml;zik Eğitiminin Toplumun Adalet D&uuml;ş&uuml;ncesine Etkileri</span>
                    </p>
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span
                            style='font-family:"Times New Roman",serif;color:black;'>Aslı Canyakan</span></strong></p>
                  </td>
                  <td style="width: 248.05pt;border-top: none;border-left: none;border-bottom: 1pt solid rgb(156, 194, 229);border-right: 1pt solid rgb(156, 194, 229);background: rgb(222, 234, 246);padding: 0in 5.4pt;vertical-align: top;">
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <span style='font-family:"Times New Roman",serif;color:black;'>Piyano Master Classlarında Uzmanların Benzer ve Farklı Y&ouml;nleri</span>
                    </p>
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span
                            style='font-family:"Times New Roman",serif;color:black;'>Fakı Can Y&uuml;r&uuml;k</span></strong>
                    </p>
                  </td>
                </tr>
                <tr>
                  <td style="width: 33.3pt;border-right: 1pt solid rgb(156, 194, 229);border-bottom: 1pt solid rgb(156, 194, 229);border-left: 1pt solid rgb(156, 194, 229);border-image: initial;border-top: none;background: rgb(222, 234, 246);padding: 0in 5.4pt;vertical-align: top;">
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span
                            style='font-size:13px;font-family:"Times New Roman",serif;color:black;'>16.50</span></strong>
                    </p>
                  </td>
                  <td colspan="2"
                      style="width: 505.1pt;border-top: none;border-left: none;border-bottom: 1pt solid rgb(156, 194, 229);border-right: 1pt solid rgb(156, 194, 229);background: red;padding: 0in 5.4pt;vertical-align: top;">
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span style='font-family:"Times New Roman",serif;color:black;'>ARA</span></strong></p>
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span style='font-family:"Times New Roman",serif;'>&nbsp;</span></strong></p>
                  </td>
                </tr>
                <tr>
                  <td rowspan="4"
                      style="width: 33.3pt;border-right: 1pt solid rgb(156, 194, 229);border-bottom: 1pt solid rgb(156, 194, 229);border-left: 1pt solid rgb(156, 194, 229);border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span style='font-size:13px;font-family:"Times New Roman",serif;'>&nbsp;</span></strong>
                    </p>
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span style='font-size:13px;font-family:"Times New Roman",serif;'>&nbsp;</span></strong>
                    </p>
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span style='font-size:13px;font-family:"Times New Roman",serif;'>&nbsp;</span></strong>
                    </p>
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span style='font-size:13px;font-family:"Times New Roman",serif;'>&nbsp;</span></strong>
                    </p>
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span style='font-size:13px;font-family:"Times New Roman",serif;'>17.00</span></strong>
                    </p>
                  </td>
                  <td style="width: 257.05pt;border-top: none;border-left: none;border-bottom: 1pt solid rgb(156, 194, 229);border-right: 1pt solid rgb(156, 194, 229);background: yellow;padding: 0in 5.4pt;vertical-align: top;">
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><em><span style='font-family:"Times New Roman",serif;color:black;'>Moderat&ouml;r: Emrah ERGENE</span></em></strong>
                    </p>
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;background:yellow;'>
                      <strong><em><span style='font-family:"Times New Roman",serif;'>&nbsp;</span></em></strong></p>
                  </td>
                  <td style="width: 248.05pt;border-top: none;border-left: none;border-bottom: 1pt solid rgb(156, 194, 229);border-right: 1pt solid rgb(156, 194, 229);background: yellow;padding: 0in 5.4pt;vertical-align: top;">
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;background:yellow;'>
                      <strong><em><span style='font-family:"Times New Roman",serif;color:black;'>Moderat&ouml;r: G&ouml;khan ALTINBAŞ</span></em></strong>
                    </p>
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><em><span style='font-family:"Times New Roman",serif;'>&nbsp;</span></em></strong></p>
                  </td>
                </tr>
                <tr>
                  <td style="width: 257.05pt;border-top: none;border-left: none;border-bottom: 1pt solid rgb(156, 194, 229);border-right: 1pt solid rgb(156, 194, 229);padding: 0in 5.4pt;vertical-align: top;">
                    <h1 style='margin-top:0in;margin-right:1.7pt;margin-bottom:.0001pt;margin-left:0in;text-indent:0in;font-size:19px;font-family:"Times New Roman",serif;font-weight:bold;text-align:center;'>
                      <span style="font-size:15px;font-weight:normal;">M&uuml;zik&nbsp;Teknolojisinde&nbsp;Dinleyici Merkezli&nbsp;Yeni&nbsp;Bir&nbsp;Yaklaşım: Nesne&nbsp;Tabanlı&nbsp;Ses</span>
                    </h1>
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span style='font-family:"Times New Roman",serif;'>Zeki Batuhan Pehlivan</span></strong>
                    </p>
                  </td>
                  <td style="width: 248.05pt;border-top: none;border-left: none;border-bottom: 1pt solid rgb(156, 194, 229);border-right: 1pt solid rgb(156, 194, 229);padding: 0in 5.4pt;vertical-align: top;">
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <span style='font-family:"Times New Roman",serif;'>T&uuml;rkiye&rsquo;de G&ouml;rme Engeli ve M&uuml;zik Ortak Alanında Yapılan Lisans&uuml;st&uuml; Tezler</span>
                    </p>
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:8.0pt;line-height:107%;margin:0in;text-align:center;'>
                      <strong><span style="font-size:15px;">Ayşeg&uuml;l G&ouml;klen</span></strong><span
                          style="font-size:15px;">&nbsp;</span></p>
                  </td>
                </tr>
                <tr>
                  <td style="width: 257.05pt;border-top: none;border-left: none;border-bottom: 1pt solid rgb(156, 194, 229);border-right: 1pt solid rgb(156, 194, 229);background: rgb(222, 234, 246);padding: 0in 5.4pt;vertical-align: top;">
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <span style='font-family:"Times New Roman",serif;color:black;'>&Ccedil;ağdaş Solo Timpani Repertuvarında Mehter M&uuml;ziği Etkisi: Berry&rsquo;nin Mehteran &Ouml;rneği</span>
                    </p>
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span
                            style='font-family:"Times New Roman",serif;color:black;'>Selin Karancı</span></strong></p>
                  </td>
                  <td style="width: 248.05pt;border-top: none;border-left: none;border-bottom: 1pt solid rgb(156, 194, 229);border-right: 1pt solid rgb(156, 194, 229);background: rgb(222, 234, 246);padding: 0in 5.4pt;vertical-align: top;">
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:8.0pt;line-height:107%;margin:0in;text-align:center;'>
                      <span style="font-size:15px;color:black;">Sosyalleşme ve Akademik Başarı İlişkisi: İzot İzmir Otizm Orkestrası ve Korosu &Ouml;rneği</span>
                    </p>
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span
                            style='font-family:"Times New Roman",serif;color:black;'>Recep Ege Altıncıoğlu</span></strong>
                    </p>
                  </td>
                </tr>
                <tr>
                  <td style="width: 257.05pt;border-top: none;border-left: none;border-bottom: 1pt solid rgb(156, 194, 229);border-right: 1pt solid rgb(156, 194, 229);padding: 0in 5.4pt;vertical-align: top;">
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                        <span
                            style='font-family:"Times New Roman",serif;'>Pharrell Williams&rsquo;in <em>Happy&nbsp;</em>&Ouml;rneğinde Metinlerarasılık ve Anametinsellik</span>
                    </p>
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span style='font-family:"Times New Roman",serif;'>Uğur Aslan</span></strong></p>
                  </td>
                  <td style="width: 248.05pt;border-top: none;border-left: none;border-bottom: 1pt solid rgb(156, 194, 229);border-right: 1pt solid rgb(156, 194, 229);padding: 0in 5.4pt;vertical-align: top;">
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <span style='font-family:"Times New Roman",serif;'>Ulusal Bir M&uuml;zik Eğitimi Programı Olan El Sistema&rsquo;nın T&uuml;m Y&ouml;nleriyle İncelenmesi</span>
                    </p>
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span style='font-family:"Times New Roman",serif;'>Siyabend Recep Bayat</span></strong>
                    </p>
                  </td>
                </tr>
                <tr>
                  <td style="width: 33.3pt;border-right: 1pt solid rgb(156, 194, 229);border-bottom: 1pt solid rgb(156, 194, 229);border-left: 1pt solid rgb(156, 194, 229);border-image: initial;border-top: none;background: rgb(222, 234, 246);padding: 0in 5.4pt;vertical-align: top;">
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span
                            style='font-size:13px;font-family:"Times New Roman",serif;color:black;'>18.30</span></strong>
                    </p>
                  </td>
                  <td colspan="2"
                      style="width: 505.1pt;border-top: none;border-left: none;border-bottom: 1pt solid rgb(156, 194, 229);border-right: 1pt solid rgb(156, 194, 229);background: red;padding: 0in 5.4pt;vertical-align: top;">
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span style='font-family:"Times New Roman",serif;color:black;'>ARA</span></strong></p>
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <span style='font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                  </td>
                </tr>
                <tr>
                  <td style="width: 33.3pt;border-right: 1pt solid rgb(156, 194, 229);border-bottom: 1pt solid rgb(156, 194, 229);border-left: 1pt solid rgb(156, 194, 229);border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span style='font-size:13px;font-family:"Times New Roman",serif;'>18.40</span></strong>
                    </p>
                  </td>
                  <td colspan="2"
                      style="width: 505.1pt;border-top: none;border-left: none;border-bottom: 1pt solid rgb(156, 194, 229);border-right: 1pt solid rgb(156, 194, 229);background: rgb(0, 255, 204);padding: 0in 5.4pt;vertical-align: top;">
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span style='font-size:16px;font-family:"Times New Roman",serif;color:black;'>KAPANIŞ / DEĞERLENDİRME TOPLANTISI</span></strong>
                    </p>
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <strong><span
                            style='font-size:16px;font-family:"Times New Roman",serif;color:#1F3864;'>Zoom:</span></strong><span
                          style='font-size:16px;font-family:"Times New Roman",serif;color:#002060;'>&nbsp;</span><em><span
                            style='font-size:16px;font-family:  "Times New Roman",serif;color:black;'>Meeting ID:</span></em><span
                          style='font-size:16px;font-family:"Times New Roman",serif;color:black;'>&nbsp;475 639 4770</span>
                    </p>
                    <p style='margin-right:0in;margin-left:0in;font-size:15px;font-family:"Calibri",sans-serif;margin-top:0in;margin-bottom:0in;line-height:normal;text-align:center;'>
                      <em><span
                            style='font-size:16px;font-family:"Times New Roman",serif;color:black;'>Passcode:</span></em><span
                          style='font-size:16px;font-family:"Times New Roman",serif;color:black;'>&nbsp;hisarlisym</span>
                    </p>
                  </td>
                </tr>
                </tbody>
              </table>
              <!-- Eof word table -->
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