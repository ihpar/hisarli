<?php
session_start();

$is_secure = true;

$page_name = "schedule";

require_once "dbms/utils.php";

require_once "modules/header_prefixes.php";

require_once "langs/lang_global.php";

require_once "langs/lang_schedule.php";
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

      table {
          mso-displayed-decimal-separator: "\,";
          mso-displayed-thousand-separator: "\.";
      }

      @page {
          margin: 0in 0in 0in 0in;
          mso-header-margin: 0in;
          mso-footer-margin: 0in;
          mso-horizontal-page-align: center;
      }

      .font5 {
          color: black;
          font-size: 9.0pt;
          font-weight: 700;
          font-style: normal;
          text-decoration: none;
          font-family: Arial, sans-serif;
          mso-font-charset: 162;
      }

      .font6 {
          color: black;
          font-size: 12.0pt;
          font-weight: 700;
          font-style: normal;
          text-decoration: none;
          font-family: Arial, sans-serif;
          mso-font-charset: 162;
      }

      .font7 {
          color: black;
          font-size: 12.0pt;
          font-weight: 400;
          font-style: normal;
          text-decoration: none;
          font-family: Arial, sans-serif;
          mso-font-charset: 162;
      }

      .font8 {
          color: black;
          font-size: 10.0pt;
          font-weight: 700;
          font-style: normal;
          text-decoration: none;
          font-family: Arial, sans-serif;
          mso-font-charset: 162;
      }

      .font9 {
          color: black;
          font-size: 10.0pt;
          font-weight: 400;
          font-style: normal;
          text-decoration: none;
          font-family: Arial, sans-serif;
          mso-font-charset: 162;
      }

      .font10 {
          color: black;
          font-size: 10.0pt;
          font-weight: 400;
          font-style: normal;
          text-decoration: none;
          font-family: Calibri, sans-serif;
          mso-font-charset: 162;
      }

      .font11 {
          color: black;
          font-size: 10.0pt;
          font-weight: 700;
          font-style: normal;
          text-decoration: none;
          font-family: Calibri, sans-serif;
          mso-font-charset: 162;
      }

      .font12 {
          color: black;
          font-size: 9.0pt;
          font-weight: 400;
          font-style: normal;
          text-decoration: none;
          font-family: Arial, sans-serif;
          mso-font-charset: 162;
      }

      .font13 {
          color: black;
          font-size: 14.0pt;
          font-weight: 700;
          font-style: normal;
          text-decoration: none;
          font-family: Arial, sans-serif;
          mso-font-charset: 162;
      }

      .font14 {
          color: black;
          font-size: 12.0pt;
          font-weight: 400;
          font-style: italic;
          text-decoration: none;
          font-family: Arial, sans-serif;
          mso-font-charset: 162;
      }

      .font15 {
          color: black;
          font-size: 11.0pt;
          font-weight: 700;
          font-style: italic;
          text-decoration: none;
          font-family: Arial, sans-serif;
          mso-font-charset: 162;
      }

      .font16 {
          color: black;
          font-size: 11.0pt;
          font-weight: 400;
          font-style: italic;
          text-decoration: none;
          font-family: Arial, sans-serif;
          mso-font-charset: 162;
      }

      .font17 {
          color: windowtext;
          font-size: 10.0pt;
          font-weight: 400;
          font-style: normal;
          text-decoration: none;
          font-family: Calibri, sans-serif;
          mso-font-charset: 162;
      }

      .font18 {
          color: windowtext;
          font-size: 10.0pt;
          font-weight: 700;
          font-style: normal;
          text-decoration: none;
          font-family: Calibri, sans-serif;
          mso-font-charset: 162;
      }

      .font19 {
          color: black;
          font-size: 9.0pt;
          font-weight: 400;
          font-style: italic;
          text-decoration: none;
          font-family: Arial, sans-serif;
          mso-font-charset: 162;
      }

      .font20 {
          color: black;
          font-size: 9.0pt;
          font-weight: 700;
          font-style: normal;
          text-decoration: underline;
          text-underline-style: single;
          font-family: Arial, sans-serif;
          mso-font-charset: 162;
      }

      .font21 {
          color: black;
          font-size: 9.0pt;
          font-weight: 400;
          font-style: normal;
          text-decoration: underline;
          text-underline-style: single;
          font-family: Arial, sans-serif;
          mso-font-charset: 162;
      }

      .font22 {
          color: red;
          font-size: 10.0pt;
          font-weight: 700;
          font-style: normal;
          text-decoration: none;
          font-family: Arial, sans-serif;
          mso-font-charset: 162;
      }

      .font23 {
          color: windowtext;
          font-size: 10.0pt;
          font-weight: 700;
          font-style: normal;
          text-decoration: none;
          font-family: Arial, sans-serif;
          mso-font-charset: 162;
      }

      tr {
          mso-height-source: auto;
      }

      col {
          mso-width-source: auto;
      }

      br {
          mso-data-placement: same-cell;
      }

      .style0 {
          mso-number-format: General;
          text-align: general;
          vertical-align: bottom;
          white-space: nowrap;
          mso-rotate: 0;
          mso-background-source: auto;
          mso-pattern: auto;
          color: black;
          font-size: 11.0pt;
          font-weight: 400;
          font-style: normal;
          text-decoration: none;
          font-family: Calibri, sans-serif;
          mso-font-charset: 162;
          border: none;
          mso-protection: locked visible;
          mso-style-name: Normal;
          mso-style-id: 0;
      }

      td {
          mso-style-parent: style0;
          padding-top: 1px;
          padding-right: 1px;
          padding-left: 1px;
          mso-ignore: padding;
          color: black;
          font-size: 11.0pt;
          font-weight: 400;
          font-style: normal;
          text-decoration: none;
          font-family: Calibri, sans-serif;
          mso-font-charset: 162;
          mso-number-format: General;
          text-align: general;
          vertical-align: bottom;
          border: none;
          mso-background-source: auto;
          mso-pattern: auto;
          mso-protection: locked visible;
          white-space: nowrap;
          mso-rotate: 0;
      }

      .xl65 {
          mso-style-parent: style0;
          font-weight: 700;
          mso-number-format: "Short Time";
          border-top: .5pt solid windowtext;
          border-right: none;
          border-bottom: .5pt solid windowtext;
          border-left: .5pt solid windowtext;
      }

      .xl66 {
          mso-style-parent: style0;
          font-weight: 700;
          border-top: .5pt solid windowtext;
          border-right: none;
          border-bottom: .5pt solid windowtext;
          border-left: .5pt solid windowtext;
      }

      .xl67 {
          mso-style-parent: style0;
          font-weight: 700;
          vertical-align: middle;
          border-top: .5pt solid windowtext;
          border-right: none;
          border-bottom: .5pt solid windowtext;
          border-left: .5pt solid windowtext;
      }

      .xl68 {
          mso-style-parent: style0;
          font-size: 12.0pt;
          font-weight: 700;
          font-family: Arial, sans-serif;
          mso-font-charset: 162;
          text-align: center;
          vertical-align: middle;
          border-top: .5pt solid windowtext;
          border-right: 1.0pt solid windowtext;
          border-bottom: .5pt solid windowtext;
          border-left: 1.0pt solid windowtext;
          background: red;
          mso-pattern: black none;
          white-space: normal;
      }

      .xl69 {
          mso-style-parent: style0;
          font-size: 9.0pt;
          font-weight: 700;
          font-family: Arial, sans-serif;
          mso-font-charset: 162;
          text-align: center;
          vertical-align: middle;
          border-top: .5pt solid windowtext;
          border-right: 1.0pt solid windowtext;
          border-bottom: .5pt solid windowtext;
          border-left: 1.0pt solid windowtext;
          background: #FFD966;
          mso-pattern: black none;
          white-space: normal;
      }

      .xl70 {
          mso-style-parent: style0;
          font-size: 10.0pt;
          text-align: center;
          vertical-align: top;
          border-top: .5pt solid windowtext;
          border-right: 1.0pt solid windowtext;
          border-bottom: .5pt solid windowtext;
          border-left: 1.0pt solid windowtext;
          background: white;
          mso-pattern: black none;
          white-space: normal;
      }

      .xl71 {
          mso-style-parent: style0;
          font-size: 10.0pt;
          text-align: center;
          vertical-align: middle;
          border-top: .5pt solid windowtext;
          border-right: 1.0pt solid windowtext;
          border-bottom: .5pt solid windowtext;
          border-left: 1.0pt solid windowtext;
          background: white;
          mso-pattern: black none;
          white-space: normal;
      }

      .xl72 {
          mso-style-parent: style0;
          font-weight: 700;
          text-align: center;
          vertical-align: middle;
          border-top: .5pt solid windowtext;
          border-right: none;
          border-bottom: .5pt solid windowtext;
          border-left: .5pt solid windowtext;
      }

      .xl73 {
          mso-style-parent: style0;
          font-weight: 700;
          mso-number-format: "Short Time";
          text-align: center;
          vertical-align: middle;
          border-top: .5pt solid windowtext;
          border-right: none;
          border-bottom: .5pt solid windowtext;
          border-left: .5pt solid windowtext;
      }

      .xl74 {
          mso-style-parent: style0;
          color: windowtext;
          font-size: 10.0pt;
          text-align: center;
          vertical-align: top;
          border-top: .5pt solid windowtext;
          border-right: 1.0pt solid windowtext;
          border-bottom: .5pt solid windowtext;
          border-left: 1.0pt solid windowtext;
          background: white;
          mso-pattern: black none;
          white-space: normal;
      }

      .xl75 {
          mso-style-parent: style0;
          font-weight: 700;
          mso-number-format: "Short Time";
          text-align: center;
          vertical-align: middle;
          border-top: .5pt solid windowtext;
          border-right: none;
          border-bottom: .5pt solid windowtext;
          border-left: .5pt solid windowtext;
          white-space: normal;
      }

      .xl76 {
          mso-style-parent: style0;
          font-weight: 700;
          text-align: center;
          vertical-align: middle;
          border-top: none;
          border-right: 1.0pt solid windowtext;
          border-bottom: .5pt solid windowtext;
          border-left: none;
          white-space: normal;
      }

      .xl77 {
          mso-style-parent: style0;
          font-weight: 700;
          text-align: center;
          vertical-align: middle;
          border-top: none;
          border-right: 1.0pt solid windowtext;
          border-bottom: none;
          border-left: none;
          white-space: normal;
      }

      .xl78 {
          mso-style-parent: style0;
          font-weight: 700;
          mso-number-format: "Short Time";
          text-align: center;
          vertical-align: middle;
          border-top: .5pt solid windowtext;
          border-right: 1.0pt solid windowtext;
          border-bottom: .5pt solid windowtext;
          border-left: .5pt solid windowtext;
          white-space: normal;
      }

      .xl79 {
          mso-style-parent: style0;
          color: red;
          font-size: 10.0pt;
          font-weight: 700;
          font-family: Arial, sans-serif;
          mso-font-charset: 162;
          text-align: center;
          vertical-align: middle;
          border-top: .5pt solid windowtext;
          border-right: 1.0pt solid windowtext;
          border-bottom: .5pt solid windowtext;
          border-left: 1.0pt solid windowtext;
          background: #DFDFDF;
          mso-pattern: black none;
          white-space: normal;
      }

      .xl80 {
          mso-style-parent: style0;
          font-weight: 700;
          mso-number-format: "Short Time";
          text-align: center;
          vertical-align: middle;
          border-top: .5pt solid windowtext;
          border-right: 1.0pt solid windowtext;
          border-bottom: none;
          border-left: .5pt solid windowtext;
          white-space: normal;
      }

      .xl81 {
          mso-style-parent: style0;
          color: white;
          font-size: 10.0pt;
          font-weight: 700;
          text-align: center;
          vertical-align: top;
          border-top: .5pt solid windowtext;
          border-right: 1.0pt solid windowtext;
          border-bottom: .5pt solid windowtext;
          border-left: 1.0pt solid windowtext;
          background: #595959;
          mso-pattern: black none;
          white-space: normal;
      }

      .xl82 {
          mso-style-parent: style0;
          font-size: 10.0pt;
          text-align: center;
          vertical-align: top;
          border-top: .5pt solid windowtext;
          border-right: 1.0pt solid windowtext;
          border-bottom: .5pt solid windowtext;
          border-left: 1.0pt solid windowtext;
          background: #595959;
          mso-pattern: black none;
          white-space: normal;
      }

      .xl83 {
          mso-style-parent: style0;
          font-size: 9.0pt;
          font-weight: 700;
          font-family: Arial, sans-serif;
          mso-font-charset: 162;
          text-align: center;
          vertical-align: middle;
          border-top: .5pt solid windowtext;
          border-right: 1.0pt solid windowtext;
          border-bottom: .5pt solid windowtext;
          border-left: 1.0pt solid windowtext;
          background: #CCFF99;
          mso-pattern: black none;
          white-space: normal;
      }

      .xl84 {
          mso-style-parent: style0;
          color: #00B0F0;
          font-size: 9.0pt;
          font-weight: 700;
          font-family: Arial, sans-serif;
          mso-font-charset: 162;
          text-align: center;
          vertical-align: middle;
          border-top: .5pt solid windowtext;
          border-right: 1.0pt solid windowtext;
          border-bottom: 1.0pt solid windowtext;
          border-left: 1.0pt solid windowtext;
          background: #C00000;
          mso-pattern: black none;
          white-space: normal;
      }

      .xl85 {
          mso-style-parent: style0;
          font-size: 9.0pt;
          font-weight: 700;
          font-family: Arial, sans-serif;
          mso-font-charset: 162;
          text-align: center;
          vertical-align: middle;
          border-top: .5pt solid windowtext;
          border-right: 1.0pt solid windowtext;
          border-bottom: 1.0pt solid windowtext;
          border-left: 1.0pt solid windowtext;
          background: #C00000;
          mso-pattern: black none;
          white-space: normal;
      }

      .xl86 {
          mso-style-parent: style0;
          font-size: 12.0pt;
          font-weight: 700;
          font-family: Arial, sans-serif;
          mso-font-charset: 162;
          text-align: center;
          vertical-align: middle;
          border-top: 1.0pt solid windowtext;
          border-right: 1.0pt solid windowtext;
          border-bottom: .5pt solid windowtext;
          border-left: 1.0pt solid windowtext;
          background: red;
          mso-pattern: black none;
          white-space: normal;
      }

      .xl87 {
          mso-style-parent: style0;
          font-weight: 700;
          mso-number-format: "Short Time";
          text-align: center;
          vertical-align: middle;
          border-top: none;
          border-right: 1.0pt solid windowtext;
          border-bottom: none;
          border-left: .5pt solid windowtext;
          white-space: normal;
      }

      .xl88 {
          mso-style-parent: style0;
          font-weight: 700;
          mso-number-format: "Short Time";
          text-align: center;
          vertical-align: middle;
          border-top: none;
          border-right: 1.0pt solid windowtext;
          border-bottom: .5pt solid windowtext;
          border-left: .5pt solid windowtext;
          white-space: normal;
      }

      .xl89 {
          mso-style-parent: style0;
          font-weight: 700;
          mso-number-format: "Short Time";
          text-align: center;
          vertical-align: middle;
          border-top: .5pt solid windowtext;
          border-right: 1.0pt solid windowtext;
          border-bottom: none;
          border-left: .5pt solid windowtext;
      }

      .xl90 {
          mso-style-parent: style0;
          font-weight: 700;
          mso-number-format: "Short Time";
          text-align: center;
          vertical-align: middle;
          border-top: none;
          border-right: 1.0pt solid windowtext;
          border-bottom: none;
          border-left: .5pt solid windowtext;
      }

      .xl91 {
          mso-style-parent: style0;
          font-weight: 700;
          mso-number-format: "Short Time";
          text-align: center;
          vertical-align: middle;
          border-top: none;
          border-right: 1.0pt solid windowtext;
          border-bottom: .5pt solid windowtext;
          border-left: .5pt solid windowtext;
      }

      .xl92 {
          mso-style-parent: style0;
          font-size: 9.0pt;
          font-weight: 700;
          font-family: Arial, sans-serif;
          mso-font-charset: 162;
          text-align: center;
          vertical-align: middle;
          border-top: .5pt solid windowtext;
          border-right: 1.0pt solid windowtext;
          border-bottom: 1.0pt solid windowtext;
          border-left: 1.0pt solid windowtext;
          background: #CCFF99;
          mso-pattern: black none;
          white-space: normal;
      }

      .xl93 {
          mso-style-parent: style0;
          font-size: 9.0pt;
          font-weight: 700;
          font-family: Arial, sans-serif;
          mso-font-charset: 162;
          text-align: center;
          vertical-align: middle;
          border-top: .5pt solid windowtext;
          border-right: 1.5pt solid windowtext;
          border-bottom: 1.0pt solid windowtext;
          border-left: 1.0pt solid windowtext;
          background: #CCFF99;
          mso-pattern: black none;
          white-space: normal;
      }

      .xl94 {
          mso-style-parent: style0;
          font-size: 9.0pt;
          font-weight: 700;
          font-family: Arial, sans-serif;
          mso-font-charset: 162;
          text-align: center;
          vertical-align: middle;
          border-top: .5pt solid windowtext;
          border-right: 1.0pt solid windowtext;
          border-bottom: 1.0pt solid windowtext;
          border-left: 1.5pt solid windowtext;
          background: #CCFF99;
          mso-pattern: black none;
          white-space: normal;
      }

      .xl95 {
          mso-style-parent: style0;
          font-size: 12.0pt;
          font-weight: 700;
          font-family: Arial, sans-serif;
          mso-font-charset: 162;
          text-align: center;
          vertical-align: top;
          border-top: 1.0pt solid windowtext;
          border-right: 1.5pt solid windowtext;
          border-bottom: .5pt solid windowtext;
          border-left: 1.0pt solid windowtext;
          background: #D0CECE;
          mso-pattern: black none;
          white-space: normal;
      }

      .xl96 {
          mso-style-parent: style0;
          font-size: 12.0pt;
          font-weight: 700;
          font-family: Arial, sans-serif;
          mso-font-charset: 162;
          text-align: center;
          vertical-align: top;
          border-top: 1.0pt solid windowtext;
          border-right: 1.0pt solid windowtext;
          border-bottom: .5pt solid windowtext;
          border-left: 1.5pt solid windowtext;
          background: #D0CECE;
          mso-pattern: black none;
          white-space: normal;
      }

      .xl97 {
          mso-style-parent: style0;
          font-size: 12.0pt;
          font-weight: 700;
          font-family: Arial, sans-serif;
          mso-font-charset: 162;
          text-align: center;
          vertical-align: middle;
          border-top: .5pt solid windowtext;
          border-right: 1.5pt solid windowtext;
          border-bottom: .5pt solid windowtext;
          border-left: 1.0pt solid windowtext;
          background: red;
          mso-pattern: black none;
          white-space: normal;
      }

      .xl98 {
          mso-style-parent: style0;
          font-size: 12.0pt;
          font-weight: 700;
          font-family: Arial, sans-serif;
          mso-font-charset: 162;
          text-align: center;
          vertical-align: middle;
          border-top: .5pt solid windowtext;
          border-right: 1.0pt solid windowtext;
          border-bottom: .5pt solid windowtext;
          border-left: 1.5pt solid windowtext;
          background: red;
          mso-pattern: black none;
          white-space: normal;
      }

      .xl99 {
          mso-style-parent: style0;
          font-size: 10.0pt;
          font-weight: 700;
          font-family: Arial, sans-serif;
          mso-font-charset: 162;
          text-align: center;
          vertical-align: middle;
          border-top: .5pt solid windowtext;
          border-right: 1.5pt solid windowtext;
          border-bottom: .5pt solid windowtext;
          border-left: 1.0pt solid windowtext;
          background: #BDD7EE;
          mso-pattern: black none;
          white-space: normal;
      }

      .xl100 {
          mso-style-parent: style0;
          font-size: 10.0pt;
          font-weight: 700;
          font-family: Arial, sans-serif;
          mso-font-charset: 162;
          text-align: center;
          vertical-align: middle;
          border-top: .5pt solid windowtext;
          border-right: 1.0pt solid windowtext;
          border-bottom: .5pt solid windowtext;
          border-left: 1.5pt solid windowtext;
          background: #BDD7EE;
          mso-pattern: black none;
          white-space: normal;
      }

      .xl101 {
          mso-style-parent: style0;
          font-size: 9.0pt;
          font-weight: 700;
          font-family: Arial, sans-serif;
          mso-font-charset: 162;
          text-align: center;
          vertical-align: middle;
          border-top: .5pt solid windowtext;
          border-right: 1.5pt solid windowtext;
          border-bottom: .5pt solid windowtext;
          border-left: 1.0pt solid windowtext;
          background: #CCFF99;
          mso-pattern: black none;
          white-space: normal;
      }

      .xl102 {
          mso-style-parent: style0;
          font-size: 9.0pt;
          font-weight: 700;
          font-family: Arial, sans-serif;
          mso-font-charset: 162;
          text-align: center;
          vertical-align: middle;
          border-top: .5pt solid windowtext;
          border-right: 1.0pt solid windowtext;
          border-bottom: .5pt solid windowtext;
          border-left: 1.5pt solid windowtext;
          background: #CCFF99;
          mso-pattern: black none;
          white-space: normal;
      }

      .xl103 {
          mso-style-parent: style0;
          color: white;
          font-size: 10.0pt;
          font-weight: 700;
          text-align: center;
          vertical-align: top;
          border-top: .5pt solid windowtext;
          border-right: 1.5pt solid windowtext;
          border-bottom: .5pt solid windowtext;
          border-left: 1.0pt solid windowtext;
          background: #595959;
          mso-pattern: black none;
          white-space: normal;
      }

      .xl104 {
          mso-style-parent: style0;
          font-size: 10.0pt;
          text-align: center;
          vertical-align: top;
          border-top: .5pt solid windowtext;
          border-right: 1.0pt solid windowtext;
          border-bottom: .5pt solid windowtext;
          border-left: 1.5pt solid windowtext;
          background: #595959;
          mso-pattern: black none;
          white-space: normal;
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
          <div class="cerceve" style="width: 815px; margin: 0 auto;">
            <h3 class="center-text sec-h3"><?php echo($lang_schedule["program"][$pref_lang]); ?></h3>
            <!--A??a????daki bilgiler Microsoft Excel'in Web Sayfas?? Olarak Yay??mlama
            sihirbaz?? taraf??ndan olu??turuldu.-->
            <!--Ayn?? ????e Excel'den yeniden yay??mlan??rsa, DIV etiketleri aras??ndaki
            bilgilerin t??m?? de??i??tirilecek.-->
            <!----------------------------->
            <!--EXCEL WEB SAYFASI OLARAK YAYIMLA S??H??RBAZI ??IKTI BA??LANGICI-->
            <!----------------------------->

            <div id="HisarliProgramWEB_208">
              <table border="0" cellpadding="0" cellspacing="0" width="807"
                     style="border-collapse:collapse;table-layout:fixed;width:605pt; margin: 0 auto;">
                <col width=44 style='mso-width-source:userset;mso-width-alt:1408;width:33pt'>
                <col width=380 style='mso-width-source:userset;mso-width-alt:12160;width:285pt'>
                <col width=383 style='mso-width-source:userset;mso-width-alt:12245;width:287pt'>
                <tr height=95 style='mso-height-source:userset;height:71.0pt'>
                  <td height=95 class=xl77 width=44 style='height:71.0pt;width:33pt'>&nbsp;</td>
                  <td colspan=2 class=xl95 width=763 style='border-right:1.0pt solid black;
  border-left:none;width:572pt'><font class="font13">11. ULUSLARARASI H??SARLI
                      AHMET SEMPOZYUMU </font><font class="font6"><br>
                    </font><font class="font14">The 11th International Hisarl?? Ahmet
                      Symposium<br>
                    </font><font class="font15">&quot;M??zikte Yeni Y??nelimler&quot;</font><font
                        class="font16"> / </font><font class="font15">&quot;New Tendencies in
                      Music&quot;</font><font class="font6"><br>
                      3-4-5-6 HAZ??RAN/JUNE 2021<br>
                    </font></td>
                </tr>
                <tr height=25 style='mso-height-source:userset;height:19.25pt'>
                  <td height=25 class=xl76 width=44 style='height:19.25pt;width:33pt'>&nbsp;</td>
                  <td colspan=2 class=xl97 width=763 style='border-right:1.0pt solid black;
  border-left:none;width:572pt'>3 HAZ??RAN PER??EMBE / THURSDAY 3 JUNE
                  </td>
                </tr>
                <tr height=43 style='mso-height-source:userset;height:32.25pt'>
                  <td height=43 class=xl78 width=44 style='height:32.25pt;border-top:none;
  width:33pt'>10:00
                  </td>
                  <td colspan=2 class=xl99 width=763 style='border-right:1.0pt solid black;
  border-left:none;width:572pt'>A??ILI?? / <font class="font9">OPENING CEREMONY</font><font
                        class="font8"><br>
                    </font><font class="font23">ZOOM--&gt; ID:</font><font class="font22"> 475
                      639 4770<span style='mso-spacerun:yes'>?? </span></font><font
                        class="font23">Passcode:</font><font
                        class="font22"> hisarlisym</font></td>
                </tr>
                <tr height=67 style='mso-height-source:userset;height:50.5pt'>
                  <td height=67 class=xl75 width=44 style='height:50.5pt;border-top:none;
  width:33pt'>11:30
                  </td>
                  <td colspan=2 class=xl101 width=763 style='border-right:1.0pt solid black;
  width:572pt'><font class="font20">Davetli Konu??mac?? / </font><font
                        class="font21">Key-Note Speaker</font><font class="font5"><br>
                    </font><font class="font8">TURAN SA??ER - </font><font class="font9">Y??ld??z
                      Teknik ??niversitesi</font><font class="font8"><br>
                    </font><font class="font5">&quot;</font><font class="font19">E??itim ve
                      Etkinlikleriyle Pandemi D??neminde Sanatta Yeni Y??nelimler</font><font
                        class="font5">&quot;<br>
                    </font><font class="font23">ZOOM--&gt; ID:</font><font class="font22"> 475
                      639 4770<span style='mso-spacerun:yes'>?? </span></font><font
                        class="font23">Passcode:</font><font
                        class="font22"> hisarlisym</font></td>
                </tr>
                <tr height=19 style='mso-height-source:userset;height:14.25pt'>
                  <td height=19 class=xl75 width=44 style='height:14.25pt;border-top:none;
  width:33pt'>12:30
                  </td>
                  <td colspan=2 class=xl103 width=763 style='border-right:1.0pt solid black;
  width:572pt'>ARA / BREAK
                  </td>
                </tr>
                <tr height=21 style='mso-height-source:userset;height:16.75pt'>
                  <td rowspan=7 height=250 class=xl80 width=44 style='border-bottom:.5pt solid black;
  height:189.5pt;border-top:none;width:33pt'>13:00
                  </td>
                  <td class=xl68 width=380 style='border-top:none;border-left:none;width:285pt'>SALON
                    I / ROOM I
                  </td>
                  <td class=xl68 width=383 style='border-top:none;border-left:none;width:287pt'>SALON
                    II / ROOM II
                  </td>
                </tr>
                <tr height=33 style='mso-height-source:userset;height:25.75pt'>
                  <td height=33 class=xl79 width=380 style='height:25.75pt;border-top:none;
  border-left:none;width:285pt'><font class="font23">ZOOM--&gt; ID:</font><font
                        class="font22"> 475 639 4770<span style='mso-spacerun:yes'>?? </span></font><font
                        class="font23">Passcode:</font><font class="font22"> hisarlisym</font></td>
                  <td class=xl79 width=383 style='border-top:none;border-left:none;width:287pt'><font
                        class="font23">ZOOM--&gt; ID: </font><font class="font22">849 324 7610<span
                          style='mso-spacerun:yes'>?? </span></font><font class="font23">Passcode:</font><font
                        class="font22"> hisarlisym</font></td>
                </tr>
                <tr height=36 style='mso-height-source:userset;height:27.0pt'>
                  <td height=36 class=xl69 width=380 style='height:27.0pt;border-top:none;
  border-left:none;width:285pt'>OTURUM 1 / SESSION 1<br>
                    <font class="font12">Oturum B??k./Chair:</font><font class="font5"> A. Bar????
                      ??EREZC??O??LU</font></td>
                  <td class=xl69 width=383 style='border-top:none;border-left:none;width:287pt'>OTURUM
                    2 / SESSION 2<br>
                    <font class="font12">Oturum B??k./Chair:</font><font class="font5"> Song??l
                      KARAHASANO??LU</font></td>
                </tr>
                <tr height=40 style='height:30.0pt'>
                  <td height=40 class=xl70 width=380 style='height:30.0pt;border-top:none;
  border-left:none;width:285pt'>Pop??ler M??zik Pratiklerinde Yeni Y??nelimler
                    ??er??evesinde Eurovision???da De??i??im/<font class="font11">Buket Gen??</font></td>
                  <td class=xl70 width=383 style='border-top:none;border-left:none;width:287pt'>??evrimi??i
                    M??zik E??itiminde ????retim Y??nt. ve Gelece??in M??zik E??itiminde Tekl. Yeri/<font
                        class="font11">A. Canyakan- E.F. T??rkmen</font></td>
                </tr>
                <tr height=40 style='height:30.0pt'>
                  <td height=40 class=xl71 width=380 style='height:30.0pt;border-top:none;
  border-left:none;width:285pt'>M??zik End??strisinde Yap??sal De??i??imler<br>
                    <font class="font11">Hatice Selen Tekin</font></td>
                  <td class=xl70 width=383 style='border-top:none;border-left:none;width:287pt'>E-Yar????malar:
                    Dijitalle??en D??nyada Klasik M??zik Yar????malar??/<font class="font11">Emrah
                      Ergene</font></td>
                </tr>
                <tr height=40 style='height:30.0pt'>
                  <td height=40 class=xl70 width=380 style='height:30.0pt;border-top:none;
  border-left:none;width:285pt'>Dijitalle??me Yoluyla M??zik End??strisindeki
                    De??i??im<br>
                    <font class="font11">Resul Ba????</font></td>
                  <td class=xl70 width=383 style='border-top:none;border-left:none;width:287pt'>T??rk
                    M??zi??i Us??lleri ????retiminde<br>
                    Dijital ????retim Materyali Kullan??m?? / <font class="font11">S. V. Kopar</font></td>
                </tr>
                <tr height=40 style='height:30.0pt'>
                  <td height=40 class=xl70 width=380 style='height:30.0pt;border-top:none;
  border-left:none;width:285pt'><font class="font17">Kad??n Kimli??inin Temsili
                      Ba??lam??nda<br>
                      J-Rock???a Genel Bir Bak????</font><font class="font10">/</font><font
                        class="font11">Cenk Celasin</font></td>
                  <td class=xl70 width=383 style='border-top:none;border-left:none;width:287pt'>Orkestral
                    M??zikte Yeni T??n??lar: ???Geleneksel ??alg?? Topluluklar?? ve ???Kemen??e Kuartet???/<font
                        class="font11">G??zde ??olako??lu Sar??</font></td>
                </tr>
                <tr height=20 style='height:15.0pt'>
                  <td height=20 class=xl75 width=44 style='height:15.0pt;border-top:none;
  width:33pt'>14:30
                  </td>
                  <td colspan=2 class=xl81 width=763 style='width:572pt'>ARA / BREAK</td>
                </tr>
                <tr height=33 style='mso-height-source:userset;height:25.25pt'>
                  <td rowspan=5 height=232 class=xl80 width=44 style='border-bottom:.5pt solid black;
  height:174.75pt;border-top:none;width:33pt'>14:45
                  </td>
                  <td class=xl69 width=380 style='border-top:none;border-left:none;width:285pt'>OTURUM
                    3 / SESSION 3<br>
                    <font class="font12">Oturum B??k./Chair:</font><font class="font5"> Zafer
                      KURTASLAN</font></td>
                  <td class=xl69 width=383 style='border-top:none;border-left:none;width:287pt'>OTURUM
                    4 / SESSION 4<br>
                    <font class="font12">Oturum B??k./Chair:</font><font class="font5"> Cenk
                      G??RAY</font></td>
                </tr>
                <tr height=59 style='mso-height-source:userset;height:44.5pt'>
                  <td height=59 class=xl70 width=380 style='height:44.5pt;border-top:none;
  border-left:none;width:285pt'>Kodaly Yakl. AK?? ??ocuk Korolar??ndaki
                    Koristlerin M??zikal Gel??. Katk??lar??n??n ??alg?? E??itimcilerinin G??r????lerine G??re
                    De??erlendirilmesi/<font class="font11">E.F.T??rkmen</font></td>
                  <td class=xl70 width=383 style='border-top:none;border-left:none;width:287pt'>Pe??rev
                    ve ??ark?? Formunun<br>
                    Us??l ??cras??nda G??r??len De??i??iklikler<br>
                    <font class="font11">Erkan Kanat</font></td>
                </tr>
                <tr height=60 style='height:45.0pt'>
                  <td height=60 class=xl70 width=380 style='height:45.0pt;border-top:none;
  border-left:none;width:285pt'>M??zik E??itiminde Halk T??rk??lerinin ??nemi ve
                    Okul M??zi??i ????in Yeni T??rk??ler<br>
                    <font class="font11">E.F. T??rkmen-??. Y??ntem</font></td>
                  <td class=xl70 width=383 style='border-top:none;border-left:none;width:287pt'>T??rk
                    M??zi??inde Besteleme Tekniklerinde<br>
                    D??nemsel De??i??imler: Neoklasik D??nemden Romantik D??neme Karc????ar Makam?? / <font
                        class="font11">B. Yetim- ??. Adar</font></td>
                </tr>
                <tr height=40 style='height:30.0pt'>
                  <td height=40 class=xl70 width=380 style='height:30.0pt;border-top:none;
  border-left:none;width:285pt'>M??zik Analizinde Yeni Bir Yakla????m:<br>
                    M??zikal G??stergebilim / <font class="font11">??pek Akanay</font></td>
                  <td class=xl71 width=383 style='border-top:none;border-left:none;width:287pt'>T??rk
                    M??zi??i Ses E??itimi Dersine Sistematik Bir Yakla????m<br>
                    <font class="font11">Derya Ero??lu</font></td>
                </tr>
                <tr height=40 style='height:30.0pt'>
                  <td height=40 class=xl71 width=380 style='height:30.0pt;border-top:none;
  border-left:none;width:285pt'>G??stergebilim ve Opera -The Handmaid???s Tale
                    <br>
                    <font class="font11">Elif Aktu??- M.A. Kazanc??o??lu</font></td>
                  <td class=xl71 width=383 style='border-top:none;border-left:none;width:287pt'>T??rk
                    M??zi??i Solfeji E??itiminde Yeni Bir Yakla????m<br>
                    <font class="font11">Hanefi ??zbek-Volkan Gidi??</font></td>
                </tr>
                <tr height=20 style='height:15.0pt'>
                  <td height=20 class=xl65 align=right style='height:15.0pt;border-top:none'>16:15</td>
                  <td colspan=2 class=xl81 width=763 style='width:572pt'>ARA / BREAK</td>
                </tr>
                <tr height=35 style='height:26.0pt'>
                  <td rowspan=5 height=215 class=xl89 style='border-bottom:.5pt solid black;
  height:161.0pt;border-top:none'>16:30
                  </td>
                  <td class=xl69 width=380 style='border-top:none;border-left:none;width:285pt'>OTURUM
                    5 / SESSION 5<br>
                    <font class="font12">Oturum B??k./Chair:</font><font class="font5"> Merve
                      EKEN K??????KAKSOY</font></td>
                  <td class=xl69 width=383 style='border-top:none;border-left:none;width:287pt'>OTURUM
                    6 / SESSION 6<br>
                    <font class="font12">Oturum B??k./Chair:</font><font class="font5"> Elif
                      AKTU??</font></td>
                </tr>
                <tr height=60 style='height:45.0pt'>
                  <td height=60 class=xl70 width=380 style='height:45.0pt;border-top:none;
  border-left:none;width:285pt'>Makam??n Yeniden Yorumlanmas?? Ba??lam??nda Makam
                    M??zi??inde ???Ezgi Odakl????? Yeni Yakla????mlar<br>
                    <font class="font11">??. Yamansoy-Cenk G??ray</font></td>
                  <td class=xl70 width=383 style='border-top:none;border-left:none;width:287pt'>Klasik
                    Gitar ??al??m Tekni??ine<br>
                    Metodolojik Kapsamda Yeni Bir Yakla????m<br>
                    <font class="font11">H. D. Karaduman</font></td>
                </tr>
                <tr height=40 style='height:30.0pt'>
                  <td height=40 class=xl70 width=380 style='height:30.0pt;border-top:none;
  border-left:none;width:285pt'>Derin ????renme A??lar??yla T??rk M??zi??i???nde
                    Otomatik Tan??lama Sistemlerine Bir Bak????/<font class="font11">??a??r?? ??en</font></td>
                  <td class=xl70 width=383 style='border-top:none;border-left:none;width:287pt'>Gitar??n
                    Dahil Oldu??u Yeni Oda M??zi??i Grup ??rne??i: Villa-Lobos???un Sexteto Mistico
                    ??al????mas??/<font class="font11">A. Koray Barut</font></td>
                </tr>
                <tr height=40 style='height:30.0pt'>
                  <td height=40 class=xl70 width=380 style='height:30.0pt;border-top:none;
  border-left:none;width:285pt'>Derin ????renme Tabanl?? Otomatik TMMBestecisi
                    ????in Grafiksel Kullan??c?? Aray??z??/<font class="font11">??.H.Parlak-Y. ??ebi-C.
                      I????khan</font></td>
                  <td class=xl70 width=383 style='border-top:none;border-left:none;width:287pt'>??a??da??
                    M??zikte Kullan??lan Yeni Klarnet ??al??m Teknikleri<br>
                    <font class="font11">Ay??eg??l Ergene</font></td>
                </tr>
                <tr height=40 style='height:30.0pt'>
                  <td height=40 class=xl70 width=380 style='height:30.0pt;border-top:none;
  border-left:none;width:285pt'>Makamsal Soy K??t?????? ve Tasnif Modeli
                    ??zerinden<br>
                    Neva Makam?? Tahlili/<font class="font11">Peter Salvucci</font></td>
                  <td class=xl70 width=383 style='border-top:none;border-left:none;width:287pt'>Toru
                    Takemitsu???nun ???Voice??? Eseri ??zerinden Geni??letilmi?? Fl??t Tekniklerine Bir
                    Bak????/<font class="font11">M.??okamay</font></td>
                </tr>
                <tr height=20 style='height:15.0pt'>
                  <td height=20 class=xl66 style='height:15.0pt;border-top:none'>18.00</td>
                  <td colspan=2 class=xl81 width=763 style='width:572pt'>ARA / BREAK</td>
                </tr>
                <tr height=65 style='mso-height-source:userset;height:49.25pt'>
                  <td height=65 class=xl67 style='height:49.25pt;border-top:none'>19.00</td>
                  <td colspan=2 class=xl93 width=763 style='border-right:1.0pt solid black;
  width:572pt'><font class="font20">Davetli Konu??mac?? / </font><font
                        class="font21">Key-note Speaker</font><font class="font5"><br>
                    </font><font class="font8">JOHN RINK - </font><font class="font9">University
                      of Cambridge</font><font class="font8"><br>
                    </font><font class="font12">&quot;</font><font class="font9"> </font><font
                        class="font19">'Informed Listening??? in Action</font><font class="font9"> </font><font
                        class="font12">&quot;<br>
                    </font><font class="font23">ZOOM--&gt; ID:</font><font class="font22"> 475
                      639 4770<span style='mso-spacerun:yes'>?? </span></font><font
                        class="font23">Passcode:</font><font
                        class="font22"> hisarlisym</font></td>
                </tr>
                <tr height=21 style='height:16.0pt'>
                  <td height=21 style='height:16.0pt'></td>
                  <td colspan=2 style='mso-ignore:colspan'></td>
                </tr>
                <tr height=21 style='height:16.0pt'>
                  <td height=21 class=xl76 width=44 style='height:16.0pt;width:33pt'>&nbsp;</td>
                  <td colspan=2 class=xl86 width=763 style='border-left:none;width:572pt'>4
                    HAZ??RAN CUMA / <font class="font7">FRIDAY 4 JUNE</font></td>
                </tr>
                <tr height=23 style='height:17.0pt'>
                  <td rowspan=7 height=238 class=xl80 width=44 style='border-bottom:.5pt solid black;
  height:178.0pt;border-top:none;width:33pt'>10:00
                  </td>
                  <td class=xl68 width=380 style='border-top:none;border-left:none;width:285pt'>SALON
                    I / ROOM I
                  </td>
                  <td class=xl68 width=383 style='border-top:none;border-left:none;width:287pt'>SALON
                    II / ROOM II
                  </td>
                </tr>
                <tr height=20 style='height:15.0pt'>
                  <td height=20 class=xl79 width=380 style='height:15.0pt;border-top:none;
  border-left:none;width:285pt'><font class="font23">ZOOM--&gt; ID:</font><font
                        class="font22"> 475 639 4770<span style='mso-spacerun:yes'>?? </span></font><font
                        class="font23">Passcode:</font><font class="font22"> hisarlisym</font></td>
                  <td class=xl79 width=383 style='border-top:none;border-left:none;width:287pt'><font
                        class="font23">ZOOM--&gt; ID: </font><font class="font22">849 324 7610<span
                          style='mso-spacerun:yes'>?? </span></font><font class="font23">Passcode:</font><font
                        class="font22"> hisarlisym</font></td>
                </tr>
                <tr height=35 style='height:26.0pt'>
                  <td height=35 class=xl69 width=380 style='height:26.0pt;border-top:none;
  border-left:none;width:285pt'>OTURUM 7 / SESSION 7<br>
                    <font class="font12">Oturum B??k./Chair:</font><font class="font5"> U??ur
                      T??RKMEN</font></td>
                  <td class=xl69 width=383 style='border-top:none;border-left:none;width:287pt'>OTURUM
                    8 / SESSION 8<br>
                    <font class="font12">Oturum B??k./Chair:</font><font class="font5"> Cihan
                      I??IKHAN</font></td>
                </tr>
                <tr height=40 style='height:30.0pt'>
                  <td height=40 class=xl70 width=380 style='height:30.0pt;border-top:none;
  border-left:none;width:285pt'>??zel ????retim Kurumlar??nda M??zik Derslerindeki
                    Yeni Y??nelimlerin ??ncelenmesi/<font class="font11">??lknur ??zal G??nc??</font></td>
                  <td class=xl70 width=383 style='border-top:none;border-left:none;width:287pt'>M??zikte
                    End??striyel E??ilimler ve End??strinin E??ilimleri<br>
                    <font class="font11">Onur Karabiber</font></td>
                </tr>
                <tr height=40 style='height:30.0pt'>
                  <td height=40 class=xl70 width=380 style='height:30.0pt;border-top:none;
  border-left:none;width:285pt'>Pandemi S??recinde Otizmli Bireylerin M??zik
                    Arac??l??????yla Sosyalle??mesi/<font class="font11">R.E. Alt??nc??o??lu-O. Berrak??ay</font></td>
                  <td class=xl70 width=383 style='border-top:none;border-left:none;width:287pt'>Dijitalle??en
                    M??zik Sekt??r??n??n Yeni Akt??rleri Olarak YouTube M??zik Sahn.ve Elapro Sahne
                    ??rne??i / <font class="font11">K. Demirel</font></td>
                </tr>
                <tr height=40 style='height:30.0pt'>
                  <td height=40 class=xl70 width=380 style='height:30.0pt;border-top:none;
  border-left:none;width:285pt'>??zel E??itim ????retmenlerinin Pedagojik M??zik
                    Terapi Tekniklerini Uygulama Durumlar??/<font class="font11">Burak Sa????rkaya</font></td>
                  <td class=xl70 width=383 style='border-top:none;border-left:none;width:287pt'>Profesyonel
                    Dj???lerin Kar????la??t??klar?? Problemler ve Yeni Ba??layanlara Tavsiyeleri/<font
                        class="font11">Y. Kesendere-Seyhan Canyakan</font></td>
                </tr>
                <tr height=40 style='height:30.0pt'>
                  <td height=40 class=xl70 width=380 style='height:30.0pt;border-top:none;
  border-left:none;width:285pt'>M??zik ????rt. ve ????retmen Adaylar??n??n M??zik
                    Yetene??i Olan ??zel Gereksinimli ??ocuklara ??li??kin Alg./<font class="font11">B.
                      Aytemur-S. Sipahi</font></td>
                  <td class=xl70 width=383 style='border-top:none;border-left:none;width:287pt'>Canl??
                    M??zik Performanslar??nda Kullan??lan Sanal Enstr??manlar??n ??ncelenmesi/<font
                        class="font11">T. Y??nsel-S. Canyakan</font></td>
                </tr>
                <tr height=20 style='height:15.0pt'>
                  <td height=20 class=xl75 width=44 style='height:15.0pt;border-top:none;
  width:33pt'>11:30
                  </td>
                  <td colspan=2 class=xl81 width=763 style='width:572pt'>ARA / BREAK</td>
                </tr>
                <tr height=89 style='mso-height-source:userset;height:67.0pt'>
                  <td height=89 class=xl75 width=44 style='height:67.0pt;border-top:none;
  width:33pt'>11:45
                  </td>
                  <td colspan=2 class=xl83 width=763 style='width:572pt'><font class="font20">Davetli
                      Konu??mac?? / </font><font class="font21">Key-note Speaker</font><font
                        class="font5"><br>
                    </font><font class="font8">MEL??K ERTU??RUL BAYRAKTARKATAL - </font><font
                        class="font9">Ba??kent ??niversitesi</font><font class="font8"><br>
                    </font><font class="font12">&quot;Makam??n Yap??ta???? ve ??okseslilik&quot;</font><font
                        class="font5"><br>
                    </font><font class="font23">ZOOM--&gt; ID:</font><font class="font22"> 475
                      639 4770<span style='mso-spacerun:yes'>?? </span></font><font
                        class="font23">Passcode:</font><font
                        class="font22"> hisarlisym</font></td>
                </tr>
                <tr height=20 style='height:15.0pt'>
                  <td height=20 class=xl75 width=44 style='height:15.0pt;border-top:none;
  width:33pt'>12:45
                  </td>
                  <td colspan=2 class=xl81 width=763 style='width:572pt'>ARA / BREAK</td>
                </tr>
                <tr height=20 style='height:15.0pt'>
                  <td height=20 class=xl80 width=44 style='height:15.0pt;border-top:none;
  width:33pt'>&nbsp;
                  </td>
                  <td class=xl79 width=380 style='border-top:none;border-left:none;width:285pt'><font
                        class="font23">ZOOM--&gt; ID:</font><font class="font22"> 475 639 4770<span
                          style='mso-spacerun:yes'>?? </span></font><font class="font23">Passcode:</font><font
                        class="font22"> hisarlisym</font></td>
                  <td class=xl79 width=383 style='border-top:none;border-left:none;width:287pt'><font
                        class="font23">ZOOM--&gt; ID: </font><font class="font22">849 324 7610<span
                          style='mso-spacerun:yes'>?? </span></font><font class="font23">Passcode:</font><font
                        class="font22"> hisarlisym</font></td>
                </tr>
                <tr height=35 style='height:26.0pt'>
                  <td rowspan=5 height=195 class=xl87 width=44 style='border-bottom:.5pt solid black;
  height:146.0pt;width:33pt'>13:00
                  </td>
                  <td class=xl69 width=380 style='border-top:none;border-left:none;width:285pt'>OTURUM
                    9 / SESSION 9<br>
                    <font class="font12">Oturum B??k./Chair:</font><font class="font5"> A. Bar????
                      ??EREZC??O??LU</font></td>
                  <td class=xl69 width=383 style='border-top:none;border-left:none;width:287pt'>OTURUM
                    10 / SESSION 10 (<font class="font19">English</font><font class="font5">)<br>
                    </font><font class="font12">Oturum B??k./Chair:</font><font class="font5">
                      Peter SNAPPER</font></td>
                </tr>
                <tr height=40 style='height:30.0pt'>
                  <td height=40 class=xl70 width=380 style='height:30.0pt;border-top:none;
  border-left:none;width:285pt'>Ama??, Bi??im, Mod Ba??lam??nda<br>
                    M??zi??i Dinlemek ve Kognitif Etkiler/<font class="font11">F??rat Kutluk</font></td>
                  <td class=xl71 width=383 style='border-top:none;border-left:none;width:287pt'>Three
                    Case Studies in Piano Pedagogy<br>
                    <font class="font11">Celeste M. Watson-Bethany Cothern</font></td>
                </tr>
                <tr height=40 style='height:30.0pt'>
                  <td height=40 class=xl70 width=380 style='height:30.0pt;border-top:none;
  border-left:none;width:285pt'>???Ba??lant??sall??k??? M??zik Bilim Y??ntemini
                    Etkileyecek Mi?<br>
                    <font class="font11">Ahu K??ksal</font></td>
                  <td class=xl70 width=383 style='border-top:none;border-left:none;width:287pt'>The
                    V??sual Factor in Instrumental Mus??c<br>
                    <font class="font11">Zar??bi??ska Grodecki</font></td>
                </tr>
                <tr height=40 style='height:30.0pt'>
                  <td height=40 class=xl70 width=380 style='height:30.0pt;border-top:none;
  border-left:none;width:285pt'>Bat?? M??zi??inin Krizi ve Felsefe<br>
                    <font class="font11">Suat Soner Eren??zl??</font></td>
                  <td class=xl70 width=383 style='border-top:none;border-left:none;width:287pt'>Music
                    as a Language???Music Learning Theory, How.../<font class="font11">Scarlette
                      Kerr-Shane Kerr</font></td>
                </tr>
                <tr height=40 style='height:30.0pt'>
                  <td height=40 class=xl70 width=380 style='height:30.0pt;border-top:none;
  border-left:none;width:285pt'>Enstalasyon Sanat?? Olarak Opera<br>
                    <font class="font11">Elif Aktu??-M.A. Kazanc??o??lu</font></td>
                  <td class=xl70 width=383 style='border-top:none;border-left:none;width:287pt'>Strategies
                    for Preparing Students to Face Different Perf. Settings: Impl. Basic Princ.
                    of the Lister-Sink M./<font class="font11">A. A. Cu??llar</font></td>
                </tr>
                <tr height=20 style='height:15.0pt'>
                  <td height=20 class=xl75 width=44 style='height:15.0pt;border-top:none;
  width:33pt'>14:30
                  </td>
                  <td colspan=2 class=xl81 width=763 style='width:572pt'>ARA / BREAK</td>
                </tr>
                <tr height=35 style='height:26.0pt'>
                  <td rowspan=5 height=195 class=xl80 width=44 style='border-bottom:.5pt solid black;
  height:146.0pt;border-top:none;width:33pt'>14:45
                  </td>
                  <td class=xl69 width=380 style='border-top:none;border-left:none;width:285pt'>OTURUM
                    11 / SESSION 11<br>
                    <font class="font12">Oturum B??k./Chair:</font><font class="font5"> B??lent
                      ALANER</font></td>
                  <td class=xl69 width=383 style='border-top:none;border-left:none;width:287pt'>OTURUM
                    12 / SESSION 12 (<font class="font19">English</font><font class="font5">)<br>
                    </font><font class="font12">Oturum B??k./Chair:</font><font class="font5">
                      L. M. Tonella T??Z??N</font></td>
                </tr>
                <tr height=40 style='height:30.0pt'>
                  <td height=40 class=xl70 width=380 style='height:30.0pt;border-top:none;
  border-left:none;width:285pt'>T??rkiye???de Ger??ekle??tirilen Halk M??zi??i
                    Derlemelerine ??li??kin Tarihsel Kaynaklar ??zerine Bir ??nc./ <font
                        class="font11">B.K??se-A. Akat</font></td>
                  <td class=xl71 width=383 style='border-top:none;border-left:none;width:287pt'>A
                    Presentation on Non-playing Related Injury of Pianists<br>
                    <font class="font11">H.Wendy Wang-Anni Wang</font></td>
                </tr>
                <tr height=40 style='height:30.0pt'>
                  <td height=40 class=xl70 width=380 style='height:30.0pt;border-top:none;
  border-left:none;width:285pt'>M??zik Ar??ivcili??inde Yeni Yakl.ve G??ncel Uyg.
                    ??zerine Bir De??erl./<font class="font11">??zg??n Arda Nural-Abdullah Akat</font></td>
                  <td class=xl70 width=383 style='border-top:none;border-left:none;width:287pt'>Playing-Related
                    Injuries: How We Can Move Forward Seeing Beyond Stat. and Break The Cycle/<font
                        class="font11">E. C. ??st??nel</font></td>
                </tr>
                <tr height=40 style='height:30.0pt'>
                  <td height=40 class=xl70 width=380 style='height:30.0pt;border-top:none;
  border-left:none;width:285pt'>M??zik M??zeleri ????in 3d ??alg?? Modelleme ve
                    Art??r??lm???? Ger??eklik Uyg.: ??. Alimo??lu M??zik M??zesi ??rn./<font class="font11">S.
                      Canyakan</font></td>
                  <td class=xl70 width=383 style='border-top:none;border-left:none;width:287pt'>Foundations
                    of the Lister-Sink Method:Developing Injury-Preventive Approach to the Keyb./<font
                        class="font11">C. M. Watson-B.Cothern</font></td>
                </tr>
                <tr height=40 style='height:30.0pt'>
                  <td height=40 class=xl70 width=380 style='height:30.0pt;border-top:none;
  border-left:none;width:285pt'>Bir Bestecinin K??lavuzu: K??t??phane M??zi??i<br>
                    <font class="font11">Fatih Ta??-Seyhan Canyakan</font></td>
                  <td class=xl70 width=383 style='border-top:none;border-left:none;width:287pt'>Hypermobility
                    (a.k.a. ???double-jointedness???) and Its Impact on the Developing Pianist/<font
                        class="font11">B. Cothern-C. Watson</font></td>
                </tr>
                <tr height=20 style='height:15.0pt'>
                  <td height=20 class=xl65 align=right style='height:15.0pt;border-top:none'>16:15</td>
                  <td colspan=2 class=xl81 width=763 style='width:572pt'>ARA / BREAK</td>
                </tr>
                <tr height=35 style='height:26.0pt'>
                  <td rowspan=5 height=215 class=xl89 style='border-bottom:.5pt solid black;
  height:161.0pt;border-top:none'>16:30
                  </td>
                  <td class=xl69 width=380 style='border-top:none;border-left:none;width:285pt'>OTURUM
                    13 / SESSION 13<br>
                    <font class="font12">Oturum B??k./Chair:</font><font class="font5"> Zeki
                      NACAK??I</font></td>
                  <td class=xl69 width=383 style='border-top:none;border-left:none;width:287pt'>OTURUM
                    14 / SESSION 14 (<font class="font19">English</font><font class="font5">)<br>
                    </font><font class="font12">Oturum B??k./Chair:</font><font class="font5">
                      Abdullah AKAT<span style='mso-spacerun:yes'>??</span></font></td>
                </tr>
                <tr height=40 style='height:30.0pt'>
                  <td height=40 class=xl70 width=380 style='height:30.0pt;border-top:none;
  border-left:none;width:285pt'>T??rkiye???de Kar???? K??lt??rel Kimli??in Yeni Bir
                    ??fade Alan?? Olarak Psychedelic Trance Etkinlikleri/<font class="font11">U??ur
                      Cihat Sakarya</font></td>
                  <td class=xl70 width=383 style='border-top:none;border-left:none;width:287pt'>The
                    Music Listening Habits From Conv. Media to New Media with ???Uses and
                    Gratifications??? Approach/<font class="font11">G. Alt??nba??</font></td>
                </tr>
                <tr height=40 style='height:30.0pt'>
                  <td height=40 class=xl70 width=380 style='height:30.0pt;border-top:none;
  border-left:none;width:285pt'>K??lt??r Patronaj?? Ba??lam??nda ??alg??c?? Mektebi
                    Roman Orkestras?? ve ???Roman A????l??m?????/<font class="font11">Bur??e U. ??uhadar</font></td>
                  <td class=xl70 width=383 style='border-top:none;border-left:none;width:287pt'>A
                    Tune Against Sil.: The Role of Iranian W. in Qajar Era as Mus., the case of
                    Ostad Mina and Ostad Zohre/<font class="font11">H. L. Korul</font></td>
                </tr>
                <tr height=60 style='height:45.0pt'>
                  <td height=60 class=xl70 width=380 style='height:45.0pt;border-top:none;
  border-left:none;width:285pt'>Hem??erilik Derneklerinde K??lt??rel Belle??in ve
                    K??lt??rel Kimli??in Yeniden ??retimi: Narl??dere Tokatl??lar Yardm. ve Dayn. Dern.
                    ??rne??i / <font class="font11">Ata Sa????ro??lu</font></td>
                  <td class=xl70 width=383 style='border-top:none;border-left:none;width:287pt'>Interpretation
                    and Invention of Urban Folk Songs from Vranje: Past of (National) Intangible
                    Cultural Heritage<br>
                    <font class="font11">Marija Dumni?? Vilotijevi??</font></td>
                </tr>
                <tr height=40 style='height:30.0pt'>
                  <td height=40 class=xl71 width=380 style='height:30.0pt;border-top:none;
  border-left:none;width:285pt'>Adana ??linde Ya??ayan Z Ku??a????n??n M??zikal
                    Be??enileri<br>
                    <font class="font11">??zge A????kg??z-Timur Vural</font></td>
                  <td class=xl70 width=383 style='border-top:none;border-left:none;width:287pt'>Ethnomusicological
                    Archiving in the 21st Century: Some Thoughts<span style='mso-spacerun:yes'>??
  </span>on Ethical Issues/<font class="font11">Hande Sa??lam</font></td>
                </tr>
                <tr height=20 style='height:15.0pt'>
                  <td height=20 class=xl66 style='height:15.0pt;border-top:none'>18.00</td>
                  <td colspan=2 class=xl81 width=763 style='width:572pt'>ARA / BREAK</td>
                </tr>
                <tr height=92 style='mso-height-source:userset;height:69.0pt'>
                  <td height=92 class=xl72 style='height:69.0pt;border-top:none'>19.00</td>
                  <td colspan=2 class=xl92 width=763 style='width:572pt'><font class="font20">Davetli
                      Konu??mac?? / </font><font class="font21">Key-Note Speaker</font><font
                        class="font5"><br>
                    </font><font class="font8">NADJA WALLASZKOVITS - </font><font class="font9">State
                      Academy of Fine Arts Stuttgart</font><font class="font8"><br>
                    </font><font class="font9">&quot;</font><font class="font19">Archiving our
                      Musical Cultural Heritage: New Technologies and Trends in Preservation and
                      Access</font><font class="font9">&quot;</font><font class="font5"><br>
                    </font><font class="font23">ZOOM--&gt; ID:</font><font class="font22"> 475
                      639 4770<span style='mso-spacerun:yes'>?? </span></font><font
                        class="font23">Passcode:</font><font
                        class="font22"> hisarlisym</font></td>
                </tr>
                <tr height=21 style='height:16.0pt'>
                  <td height=21 style='height:16.0pt'></td>
                  <td colspan=2 style='mso-ignore:colspan'></td>
                </tr>
                <tr height=21 style='height:16.0pt'>
                  <td height=21 class=xl76 width=44 style='height:16.0pt;width:33pt'>&nbsp;</td>
                  <td colspan=2 class=xl86 width=763 style='border-left:none;width:572pt'>5
                    HAZ??RAN CUMARTES?? / <font class="font7">SATURDAY 5 JUNE</font></td>
                </tr>
                <tr height=23 style='height:17.0pt'>
                  <td rowspan=7 height=258 class=xl80 width=44 style='border-bottom:.5pt solid black;
  height:193.0pt;border-top:none;width:33pt'>10:00
                  </td>
                  <td class=xl68 width=380 style='border-top:none;border-left:none;width:285pt'>SALON
                    I / ROOM I
                  </td>
                  <td class=xl68 width=383 style='border-top:none;border-left:none;width:287pt'>SALON
                    II / ROOM II
                  </td>
                </tr>
                <tr height=20 style='height:15.0pt'>
                  <td height=20 class=xl79 width=380 style='height:15.0pt;border-top:none;
  border-left:none;width:285pt'><font class="font23">ZOOM--&gt; ID:</font><font
                        class="font22"> 475 639 4770<span style='mso-spacerun:yes'>?? </span></font><font
                        class="font23">Passcode:</font><font class="font22"> hisarlisym</font></td>
                  <td class=xl79 width=383 style='border-top:none;border-left:none;width:287pt'><font
                        class="font23">ZOOM--&gt; ID: </font><font class="font22">849 324 7610<span
                          style='mso-spacerun:yes'>?? </span></font><font class="font23">Passcode:</font><font
                        class="font22"> hisarlisym</font></td>
                </tr>
                <tr height=35 style='height:26.0pt'>
                  <td height=35 class=xl69 width=380 style='height:26.0pt;border-top:none;
  border-left:none;width:285pt'>OTURUM 15 / SESSION 15<br>
                    <font class="font12">Oturum B??k./Chair:</font><font class="font5"> Emel F.
                      T??RKMEN</font></td>
                  <td class=xl69 width=383 style='border-top:none;border-left:none;width:287pt'>OTURUM
                    16 / SESSION 16<br>
                    <font class="font12">Oturum B??k./Chair:</font><font class="font5"> Ay??eg??l
                      ERGENE</font></td>
                </tr>
                <tr height=40 style='height:30.0pt'>
                  <td height=40 class=xl70 width=380 style='height:30.0pt;border-top:none;
  border-left:none;width:285pt'>T??rkiye???deki ??niv. M??zik Alan?? D??????ndaki Progr.
                    Yap??lm???? M??zik ile ??li??kili Lisans??st?? Tezl. ??ncl. / <font class="font11">Ebru
                      ??en</font></td>
                  <td class=xl70 width=383 style='border-top:none;border-left:none;width:287pt'>Hindemith???in
                    ???E??g??d??ml?? Uygulama??? Kuram?? ??zerine<br>
                    <font class="font11">Selin Oyan</font></td>
                </tr>
                <tr height=40 style='height:30.0pt'>
                  <td height=40 class=xl70 width=380 style='height:30.0pt;border-top:none;
  border-left:none;width:285pt'>T??rkiye???deki M??zik Okullar??nda T??rk<br>
                    M??zi??i E??itiminin Gereklili??i/<font class="font11">O??uzhan Balc??</font></td>
                  <td class=xl70 width=383 style='border-top:none;border-left:none;width:287pt'>Yeni
                    M??zikte Dizisel Malzemenin Kullan??m??<br>
                    <font class="font11">Bahad??r ??okamay</font></td>
                </tr>
                <tr height=40 style='height:30.0pt'>
                  <td height=40 class=xl70 width=380 style='height:30.0pt;border-top:none;
  border-left:none;width:285pt'>Kurulu??undan G??n??m??ze GSL M??zik B??l??m?? ????retim
                    Programlar??/<font class="font11">O.Zahal-E.G??rp??nar-B. Ertekin</font></td>
                  <td class=xl70 width=383 style='border-top:none;border-left:none;width:287pt'>Brahms
                    Eserinde Bir Tema Tekrar??n??n Yorumlanmas??: <br>
                    Geli??me ??ncesi mi, Geli??me Ba??lang??c?? m???/<font class="font11">G.Ko??aslan</font></td>
                </tr>
                <tr height=60 style='height:45.0pt'>
                  <td height=60 class=xl70 width=380 style='height:45.0pt;border-top:none;
  border-left:none;width:285pt'>G??zel Sanatlar Liseleri Orkestra ve ??alg??
                    Topluluklar?? Ders Kitaplar??n??n Kar????la??t??r??lmal?? Analizi<br>
                    <font class="font11">B. Ertekin-E. F. Danac??-E. G??rp??nar-O. Zahal</font></td>
                  <td class=xl71 width=383 style='border-top:none;border-left:none;width:287pt'>3-
                    2- 1- ??mza!<br>
                    <font class="font11">T??rev Berki</font></td>
                </tr>
                <tr height=20 style='height:15.0pt'>
                  <td height=20 class=xl75 width=44 style='height:15.0pt;border-top:none;
  width:33pt'>11:30
                  </td>
                  <td colspan=2 class=xl81 width=763 style='width:572pt'>ARA / BREAK</td>
                </tr>
                <tr height=80 style='mso-height-source:userset;height:60.0pt'>
                  <td height=80 class=xl75 width=44 style='height:60.0pt;border-top:none;
  width:33pt'>11:45
                  </td>
                  <td colspan=2 class=xl83 width=763 style='width:572pt'><font class="font20">Davetli
                      Konu??mac?? / </font><font class="font21">Key-note Speaker</font><font
                        class="font5"><br>
                    </font><font class="font8">RUH?? AYANG??L - </font><font class="font9">??stanbul
                      Teknik ??niversitesi<br>
                    </font><font class="font12">&quot;T??rk M??zi??i Modernle??me S??recinde ??ki
                      ??zerk ??rg??tlenme Modeli: ATMOK ve TUMAC&quot;</font><font class="font5"><br>
                    </font><font class="font23">ZOOM--&gt; ID:</font><font class="font22"> 475
                      639 4770<span style='mso-spacerun:yes'>?? </span></font><font
                        class="font23">Passcode:</font><font
                        class="font22"> hisarlisym</font></td>
                </tr>
                <tr height=20 style='height:15.0pt'>
                  <td height=20 class=xl75 width=44 style='height:15.0pt;border-top:none;
  width:33pt'>12:45
                  </td>
                  <td colspan=2 class=xl81 width=763 style='width:572pt'>ARA / BREAK</td>
                </tr>
                <tr height=20 style='height:15.0pt'>
                  <td rowspan=6 height=235 class=xl80 width=44 style='border-bottom:.5pt solid black;
  height:176.0pt;border-top:none;width:33pt'>13:00
                  </td>
                  <td class=xl79 width=380 style='border-top:none;border-left:none;width:285pt'>ZOOM--&gt;
                    ID: 475 639 4770<span style='mso-spacerun:yes'>?? </span>Passcode: hisarlisym
                  </td>
                  <td class=xl79 width=383 style='border-top:none;border-left:none;width:287pt'><font
                        class="font23">ZOOM--&gt; ID: </font><font class="font22">849 324 7610<span
                          style='mso-spacerun:yes'>?? </span></font><font class="font23">Passcode:</font><font
                        class="font22"> hisarlisym</font></td>
                </tr>
                <tr height=35 style='height:26.0pt'>
                  <td height=35 class=xl69 width=380 style='height:26.0pt;border-top:none;
  border-left:none;width:285pt'>OTURUM 17 / SESSION 17<br>
                    <font class="font12">Oturum B??k./Chair:</font><font class="font5"> Ayten
                      KAPLAN</font></td>
                  <td class=xl69 width=383 style='border-top:none;border-left:none;width:287pt'>OTURUM
                    18 / SESSION 18 (<font class="font19">English</font><font class="font5">)<br>
                    </font><font class="font12">Oturum B??k./Chair:</font><font class="font5">
                      Mehmet Can ??ZER</font></td>
                </tr>
                <tr height=40 style='height:30.0pt'>
                  <td height=40 class=xl70 width=380 style='height:30.0pt;border-top:none;
  border-left:none;width:285pt'>Zoom??zikoloji Penceresinden K??lt??r Olarak
                    M??zik<br>
                    <font class="font11">Ali Keles</font></td>
                  <td class=xl71 width=383 style='border-top:none;border-left:none;width:287pt'>The
                    Affects in the Black Paintings by Willy Corr??a de Oliveira/<font
                        class="font11">L. M. T. T??z??n</font></td>
                </tr>
                <tr height=40 style='height:30.0pt'>
                  <td height=40 class=xl70 width=380 style='height:30.0pt;border-top:none;
  border-left:none;width:285pt'>Heterotopya Olarak M??zik Performanslar??:<br>
                    Shpongle Grubu ??rne??i/<font class="font11">A. B. ??erezcio??lu</font></td>
                  <td class=xl70 width=383 style='border-top:none;border-left:none;width:287pt'>The
                    Biggest Challenges Of The Contemporary Classical Music In The 21th Century/<font
                        class="font11">Marzena Maria K??z??lay</font></td>
                </tr>
                <tr height=60 style='height:45.0pt'>
                  <td height=60 class=xl71 width=380 style='height:45.0pt;border-top:none;
  border-left:none;width:285pt'>??okk??lt??rl?? ve Ulus??tesi Bir Uzam Olarak
                    M??tareke Y??llar?? ??stanbul???unda Caz/ <font class="font11">Selim Tan</font></td>
                  <td class=xl74 width=383 style='border-top:none;border-left:none;width:287pt'>Motor
                    Skill Development During Musical Training: How Biomechanics and Sports
                    Pedagogy can Inform Music Instruction/<font class="font18">Scarlette
                      Kerr-Ekin Ustunel</font></td>
                </tr>
                <tr height=40 style='height:30.0pt'>
                  <td height=40 class=xl71 width=380 style='height:30.0pt;border-top:none;
  border-left:none;width:285pt'>Bir Orta ??a?? Estampie'sinde Modal Yap??<br>
                    <font class="font11">Serkan ??z??ifci</font></td>
                  <td class=xl71 width=383 style='border-top:none;border-left:none;width:287pt'>A
                    Review on ???The Twelve Lesson Course in A New Approach to Violin Playing??? by
                    Kato Havas/<font class="font11">G. G. K??l????</font></td>
                </tr>
                <tr height=20 style='height:15.0pt'>
                  <td height=20 class=xl75 width=44 style='height:15.0pt;border-top:none;
  width:33pt'>14:30
                  </td>
                  <td colspan=2 class=xl81 width=763 style='width:572pt'>ARA / BREAK</td>
                </tr>
                <tr height=35 style='height:26.0pt'>
                  <td rowspan=5 height=195 class=xl80 width=44 style='border-bottom:.5pt solid black;
  height:146.0pt;border-top:none;width:33pt'>14:45
                  </td>
                  <td class=xl69 width=380 style='border-top:none;border-left:none;width:285pt'>OTURUM
                    19 / SESSION 19<br>
                    <font class="font12">Oturum B??k./Chair:</font><font class="font5"> B??lent
                      ALANER</font></td>
                  <td class=xl69 width=383 style='border-top:none;border-left:none;width:287pt'>OTURUM
                    20 / SESSION 20<br>
                    <font class="font12">Oturum B??k./Chair:</font><font class="font5"> Bahad??r
                      ??OKAMAY</font></td>
                </tr>
                <tr height=40 style='height:30.0pt'>
                  <td height=40 class=xl70 width=380 style='height:30.0pt;border-top:none;
  border-left:none;width:285pt'>Konsv. ????r. Grafik Notasyon Yol. Do??a??lama Oyun
                    E??itimine Y??nelik G??r????lerinin Betimlenmesi / <font class="font11">S.
                      Co??kuner-C. ??zhan</font></td>
                  <td class=xl74 width=383 style='border-top:none;border-left:none;width:287pt'>Yeni
                    M??zi??in Felsefi Temelleri<br>
                    <font class="font18">G??rkem Aytimur</font></td>
                </tr>
                <tr height=40 style='height:30.0pt'>
                  <td height=40 class=xl70 width=380 style='height:30.0pt;border-top:none;
  border-left:none;width:285pt'>K??tip: T??rk M??zi??i i??in ??zelle??mi?? Nota Yaz??m
                    Uygulamas??<br>
                    <font class="font11">??.H.Parlak-Y. ??ebi-C. I????khan-Y.??zt??fek??i</font></td>
                  <td class=xl70 width=383 style='border-top:none;border-left:none;width:287pt'>21.
                    Y??zy??lda Piyanoda Yeni Etki Aray??????:<br>
                    Crumb'??n Makrokosmos IV/<font class="font11">Ilg??n Uysal-L. M. T. T??z??n</font></td>
                </tr>
                <tr height=40 style='height:30.0pt'>
                  <td height=40 class=xl70 width=380 style='height:30.0pt;border-top:none;
  border-left:none;width:285pt'>T??rk M??zi??inde ??ntihal ??l????m??<br>
                    <font class="font11">C. I????khan-M. Y. ??zt??fek??i-??.H.Parlak</font></td>
                  <td class=xl74 width=383 style='border-top:none;border-left:none;width:287pt'>M??zik
                    Pratiklerinde Mek??n:<br>
                    Konser Gelene??inin 21. Y??zy??ldaki De??i??imi/<font class="font18">??zge Cesur</font></td>
                </tr>
                <tr height=40 style='height:30.0pt'>
                  <td height=40 class=xl70 width=380 style='height:30.0pt;border-top:none;
  border-left:none;width:285pt'>T??rk Musikisi Nazariyat??nda<br>
                    Modern Sonras?? E??ilimler/<font class="font11">S.C. ????plak-S. Karahasano??lu</font></td>
                  <td class=xl70 width=383 style='border-top:none;border-left:none;width:287pt'>Bir
                    Sonlanma Analizi Modeli ??nerisi<br>
                    <font class="font11">Giray Ko??aslan-T??rev Berki</font></td>
                </tr>
                <tr height=20 style='height:15.0pt'>
                  <td height=20 class=xl73 style='height:15.0pt;border-top:none'>16:15</td>
                  <td colspan=2 class=xl81 width=763 style='width:572pt'>ARA / BREAK</td>
                </tr>
                <tr height=35 style='height:26.0pt'>
                  <td rowspan=5 height=175 class=xl89 style='border-bottom:.5pt solid black;
  height:131.0pt;border-top:none'>16:30
                  </td>
                  <td class=xl69 width=380 style='border-top:none;border-left:none;width:285pt'>OTURUM
                    21 / SESSION 21<br>
                    <font class="font12">Oturum B??k./Chair:</font><font class="font5"> Hanefi
                      ??ZBEK</font></td>
                  <td class=xl69 width=383 style='border-top:none;border-left:none;width:287pt'>OTURUM
                    22 / SESSION 22<br>
                    <font class="font12">Oturum B??k./Chair:</font><font class="font5"> Hatice
                      Selen TEK??N</font></td>
                </tr>
                <tr height=40 style='height:30.0pt'>
                  <td height=40 class=xl70 width=380 style='height:30.0pt;border-top:none;
  border-left:none;width:285pt'>T??rkiye???de Geleneksel ve Tamamlay??c??
                    T??pta<br>
                    M??zi??in Yeri / <font class="font11">Ayten Kaplan</font></td>
                  <td class=xl70 width=383 style='border-top:none;border-left:none;width:287pt'>M??zik
                    ????retme ve ????renme S??recinde Ya??anan Zorluklara Y??nelik Nitel Bir ??al????ma/<font
                        class="font11">Y. Kuzgun</font></td>
                </tr>
                <tr height=40 style='height:30.0pt'>
                  <td height=40 class=xl70 width=380 style='height:30.0pt;border-top:none;
  border-left:none;width:285pt'>Koklear ??mplantl?? Bireylerde M??z. Davr.
                    Kazand??r??lmas??: Edimsel Bir Model ??nerisi/<font class="font11">B. A.
                      Urugeri-??. Y. Y??kselsin<span style='mso-spacerun:yes'>??</span></font></td>
                  <td class=xl71 width=383 style='border-top:none;border-left:none;width:287pt'>Dijital
                    ??a??da M??zik E??itimi ve Yenilenen M??zik E??itimcisi<br>
                    <font class="font11">Murat G??k</font></td>
                </tr>
                <tr height=40 style='height:30.0pt'>
                  <td height=40 class=xl70 width=380 style='height:30.0pt;border-top:none;
  border-left:none;width:285pt'>Ses Terapisinin Ses Bzkl. Tedavisindeki Etk. ve
                    Tedavide Ba??ar??y?? Etk. Fakt./<font class="font11">A. T??z??ner-E. Sakl??ca</font></td>
                  <td class=xl70 width=383 style='border-top:none;border-left:none;width:287pt'>Mesleki
                    Sanat E??itimi Veren Kurumlar??n Sosyal Medya Ba??lam??nda De??erlendirilmesi/<font
                        class="font11">Alper Akg??l</font></td>
                </tr>
                <tr height=20 style='height:15.0pt'>
                  <td height=20 class=xl70 width=380 style='height:15.0pt;border-top:none;
  border-left:none;width:285pt'>Ses E??itimine Y??nelik Youtube Videolar??n??n
                    ??ncl./<font class="font11">K. Aksen</font></td>
                  <td class=xl70 width=383 style='border-top:none;border-left:none;width:287pt'>Postmodern
                    Bir ??r??n: Video Klip/<font class="font11">Canan Aykent</font></td>
                </tr>
                <tr height=20 style='height:15.0pt'>
                  <td height=20 class=xl72 style='height:15.0pt;border-top:none'>18.00</td>
                  <td colspan=2 class=xl81 width=763 style='width:572pt'>ARA / BREAK</td>
                </tr>
                <tr height=75 style='mso-height-source:userset;height:56.0pt'>
                  <td height=75 class=xl72 style='height:56.0pt;border-top:none'>19.00</td>
                  <td colspan=2 class=xl92 width=763 style='width:572pt'><font class="font20">Davetli
                      Konu??mac?? / </font><font class="font21">Key-note Speaker</font><font
                        class="font5"><br>
                    </font><font class="font8">JOHANNES KRETZ - </font><font class="font9">University
                      of Music and Performing Arts Vienna</font><font class="font8"><br>
                    </font><font class="font12">&quot;</font><font class="font19">Composing
                      Today, Moving from Model of a Lonesome Genius to Activism and Artistic
                      Research</font><font class="font12">&quot;<br>
                    </font><font class="font23">ZOOM--&gt; ID:</font><font class="font22"> 475
                      639 4770<span style='mso-spacerun:yes'>?? </span></font><font class="font23">Passcode:
                    </font><font class="font22">hisarlisym</font></td>
                </tr>
                <tr height=21 style='height:16.0pt'>
                  <td height=21 style='height:16.0pt'></td>
                  <td colspan=2 style='mso-ignore:colspan'></td>
                </tr>
                <tr height=21 style='height:16.0pt'>
                  <td height=21 class=xl76 width=44 style='height:16.0pt;width:33pt'>&nbsp;</td>
                  <td colspan=2 class=xl86 width=763 style='border-left:none;width:572pt'>6
                    HAZ??RAN PAZAR / SUNDAY 6 JUNE
                  </td>
                </tr>
                <tr height=23 style='height:17.0pt'>
                  <td rowspan=7 height=298 class=xl80 width=44 style='border-bottom:.5pt solid black;
  height:223.0pt;border-top:none;width:33pt'>10:00
                  </td>
                  <td class=xl68 width=380 style='border-top:none;border-left:none;width:285pt'>SALON
                    I / ROOM I
                  </td>
                  <td class=xl68 width=383 style='border-top:none;border-left:none;width:287pt'>SALON
                    II / ROOM II
                  </td>
                </tr>
                <tr height=20 style='height:15.0pt'>
                  <td height=20 class=xl79 width=380 style='height:15.0pt;border-top:none;
  border-left:none;width:285pt'><font class="font23">ZOOM--&gt; ID:</font><font
                        class="font22"> 475 639 4770<span style='mso-spacerun:yes'>?? </span></font><font
                        class="font23">Passcode:</font><font class="font22"> hisarlisym</font></td>
                  <td class=xl79 width=383 style='border-top:none;border-left:none;width:287pt'><font
                        class="font23">ZOOM--&gt; ID: </font><font class="font22">849 324 7610<span
                          style='mso-spacerun:yes'>?? </span></font><font class="font23">Passcode:</font><font
                        class="font22"> hisarlisym</font></td>
                </tr>
                <tr height=35 style='height:26.0pt'>
                  <td height=35 class=xl69 width=380 style='height:26.0pt;border-top:none;
  border-left:none;width:285pt'>OTURUM 23 / SESSION 23<br>
                    <font class="font12">Oturum B??k./Chair:</font><font class="font5"> ??a??han
                      ADAR</font></td>
                  <td class=xl69 width=383 style='border-top:none;border-left:none;width:287pt'>OTURUM
                    24 / SESSION 24<br>
                    <font class="font12">Oturum B??k./Chair:</font><font class="font5"> Arda
                      EDEN</font></td>
                </tr>
                <tr height=60 style='height:45.0pt'>
                  <td height=60 class=xl70 width=380 style='height:45.0pt;border-top:none;
  border-left:none;width:285pt'>Gelene??in Muhafazas?? ve Modernist Ba??lamda
                    Yeniden<br>
                    ??cad??: Rauf Yekta'n??n Tezlerinde Yerel ve Yerel ??tesi<br>
                    Dinamiklerin Analizi / <font class="font11">Eren G??????k</font></td>
                  <td class=xl71 width=383 style='border-top:none;border-left:none;width:287pt'>Kud??m
                    ??alg??s??na Pratik Bir Akord Mekanizmas?? Geli??tirme ??al????mas??/<font
                        class="font11">Selin Karanc??</font></td>
                </tr>
                <tr height=40 style='height:30.0pt'>
                  <td height=40 class=xl70 width=380 style='height:30.0pt;border-top:none;
  border-left:none;width:285pt'>Osmanl??/T??rk m??kam m??zi??i tarihinde<br>
                    yenilik??i bir k??lt??rel fig??r: Ali Ufki Bey/<font class="font11">??. Altun
                      ??ney</font></td>
                  <td class=xl70 width=383 style='border-top:none;border-left:none;width:287pt'>MIDI
                    Teknolojisinin Sa??lad?????? Olanaklarla Alternatif Ses Sistemlerinin Kullan??m??:
                    Sevish ??rne??i/<font class="font11">R. Ta??ar</font></td>
                </tr>
                <tr height=60 style='height:45.0pt'>
                  <td height=60 class=xl71 width=380 style='height:45.0pt;border-top:none;
  border-left:none;width:285pt'>M??zikolojide Kad??n Ara??t??rmalar??: Bestekar ve
                    Tanburi Dilhayat Kalfa???n??n M??zik Tarihimizdeki Yeri/<font class="font11">??.
                      E. ??ak</font></td>
                  <td class=xl70 width=383 style='border-top:none;border-left:none;width:287pt'>Uzaktan
                    E??itim S??recinde M??zik Dersinde Kullan??lan WEB 2.0 Ara??lar??n??n ????rencilerin
                    Derse Olan Tutumlar??n??n ??ncelenmesi / <font class="font11">Muzaffer Orhan</font></td>
                </tr>
                <tr height=60 style='height:45.0pt'>
                  <td height=60 class=xl71 width=380 style='height:45.0pt;border-top:none;
  border-left:none;width:285pt'>T??rk M??sik??si Tarihinde D??nemlendirme
                    Sorunu<br>
                    <font class="font11">G??nay G??nayd??n-Cenk G??ray</font></td>
                  <td class=xl70 width=383 style='border-top:none;border-left:none;width:287pt'>??a??da??
                    Piyano Eserlerinin Konservatuvar ????rencileri Taraf??ndan Seslendirilme
                    S??kl??????<br>
                    <font class="font11">Mustafa Okan K??z??lay</font></td>
                </tr>
                <tr height=20 style='height:15.0pt'>
                  <td height=20 class=xl75 width=44 style='height:15.0pt;border-top:none;
  width:33pt'>11:30
                  </td>
                  <td colspan=2 class=xl81 width=763 style='width:572pt'>ARA / BREAK</td>
                </tr>
                <tr height=35 style='height:26.0pt'>
                  <td rowspan=5 height=195 class=xl87 width=44 style='border-bottom:.5pt solid black;
  height:146.0pt;width:33pt'>11:45
                  </td>
                  <td class=xl69 width=380 style='border-top:none;border-left:none;width:285pt'>OTURUM
                    25 / SESSION 25<br>
                    <font class="font12">Oturum B??k./Chair:</font><font class="font5"> T??rev
                      BERK??</font></td>
                  <td class=xl69 width=383 style='border-top:none;border-left:none;width:287pt'>OTURUM
                    26 / SESSION 26 (<font class="font19">English</font><font class="font5">)<br>
                      Oturum B??k./Chair: Mehmet Can ??ZER<span style='mso-spacerun:yes'>??</span></font></td>
                </tr>
                <tr height=40 style='height:30.0pt'>
                  <td height=40 class=xl70 width=380 style='height:30.0pt;border-top:none;
  border-left:none;width:285pt'>Kar????la??t??rmal?? Bir M??zik Performans?? Analizi
                    ??rne??i:<br>
                    ??ostakovi??, Op. 107/III/<font class="font11">Senem Hazal Ak??n</font></td>
                  <td class=xl74 width=383 style='border-top:none;border-left:none;width:287pt'><font
                        class="font17">Rhythm didactics aspects around Chronos and Kairos<br>
                    </font><font class="font18">Marcus Siqueira</font></td>
                </tr>
                <tr height=40 style='height:30.0pt'>
                  <td height=40 class=xl71 width=380 style='height:30.0pt;border-top:none;
  border-left:none;width:285pt'>Arvo P??rt???in Tintinnabuli Tekni??i ??zerine Bir
                    ??nceleme<br>
                    <font class="font11">Hasan Ceylan-G.G. Demireriden</font></td>
                  <td class=xl71 width=383 style='border-top:none;border-left:none;width:287pt'>From
                    Figured Bass to Shantytok: Music Theory on Social Media/<font class="font11">Nevin
                      ??ahin</font></td>
                </tr>
                <tr height=40 style='height:30.0pt'>
                  <td height=40 class=xl71 width=380 style='height:30.0pt;border-top:none;
  border-left:none;width:285pt'>Semih Korucu Bestesinde<br>
                    Haiku ??iirinin Kullan??m?? ve Etkileri/<font class="font11">M. E. G. Sar??kaya</font></td>
                  <td class=xl70 width=383 style='border-top:none;border-left:none;width:287pt'>Data
                    Sonification as an Electroacoustic Composition Method/<font class="font11">Ali
                      Serkan Sevilgen-Arda Eden</font></td>
                </tr>
                <tr height=40 style='height:30.0pt'>
                  <td height=40 class=xl71 width=380 style='height:30.0pt;border-top:none;
  border-left:none;width:285pt'>Mahir ??etiz???in Sabah Sabah Eserinde<br>
                    Makam Kullan??m??n??n ??ncelenmesi / <font class="font11">G. E. Yava??</font></td>
                  <td class=xl70 width=383 style='border-top:none;border-left:none;width:287pt'>&nbsp;</td>
                </tr>
                <tr height=20 style='height:15.0pt'>
                  <td height=20 class=xl75 width=44 style='height:15.0pt;border-top:none;
  width:33pt'>13:15
                  </td>
                  <td colspan=2 class=xl81 width=763 style='width:572pt'>ARA / BREAK</td>
                </tr>
                <tr height=35 style='height:26.0pt'>
                  <td rowspan=5 height=275 class=xl80 width=44 style='border-bottom:.5pt solid black;
  height:206.0pt;border-top:none;width:33pt'>13:30
                  </td>
                  <td class=xl69 width=380 style='border-top:none;border-left:none;width:285pt'>OTURUM
                    27 / SESSION 27<br>
                    <font class="font12">Oturum B??k./Chair:</font><font class="font5"> G??zde
                      ??olako??lu SARI</font></td>
                  <td class=xl69 width=383 style='border-top:none;border-left:none;width:287pt'>OTURUM
                    28 / SESSION 28<br>
                    <font class="font12">Oturum B??k./Chair:</font><font class="font5"> M. E.
                      BAYRAKTARKATAL</font></td>
                </tr>
                <tr height=60 style='height:45.0pt'>
                  <td height=60 class=xl70 width=380 style='height:45.0pt;border-top:none;
  border-left:none;width:285pt'>Asdik A??a???n??n ???Z??lf??ne Dil-Besteler, Z??lf-??
                    Reri??an??n Kadar??? A????r Aksak Hicaz ??ark??s??n??n Eser Kimli??i ??zerinden G??fte Ve
                    Makam Analizi / <font class="font11">Y.Akta??-B.Yetim-C. Torun</font></td>
                  <td class=xl71 width=383 style='border-top:none;border-left:none;width:287pt'>K??rdi
                    Makam??n??n Yap??sal ??zelliklerine Ezgi ??ekirdekleri Y??ntemi ile Yeni Bir Bak????
                    / <font class="font11">M.A. Budak-C. G??ray</font></td>
                </tr>
                <tr height=60 style='height:45.0pt'>
                  <td height=60 class=xl70 width=380 style='height:45.0pt;border-top:none;
  border-left:none;width:285pt'>Asdik A??a'n??n &quot;Z??lf??ne-Dil Besteler,
                    Z??lf-?? Peri??an??n Kadar&quot; Hicaz ??ark??s??n??n Devlet Korusu Ar??ivindeki
                    Versiyonlar??n??n Teknik Analizi / <font class="font11">Y. Akta??-??. ??elikel</font></td>
                  <td class=xl71 width=383 style='border-top:none;border-left:none;width:287pt'>Flamenko
                    M??zi??i ve Bozlaklar??n Ezgisel ??ekirdek Tabanl?? Makam Modeli ile Kar????l??kl??
                    ??ncelenmesi<br>
                    <font class="font11">??ule Y??ld??z-Cenk G??ray</font></td>
                </tr>
                <tr height=60 style='height:45.0pt'>
                  <td height=60 class=xl71 width=380 style='height:45.0pt;border-top:none;
  border-left:none;width:285pt'>Me??kin Bile??enlerindeki Fonksiyonel D??n??????m??n
                    Klasik T??rk M??zi??i Vokal ??cr??c??l????a Etkileri / <font class="font11">??. ??.
                      Tuncel</font></td>
                  <td class=xl70 width=383 style='border-top:none;border-left:none;width:287pt'>T.
                    M. ??alg?? E??itiminde Geln. Formlar??n D??????nda Kon??erto veya Kon??ertino gibi
                    Formlar??n Tan??t??m ve ??cra Durumunun Belirlenmesi ??zerine Bir Ara??t. / <font
                        class="font11">O??uz Karakaya</font></td>
                </tr>
                <tr height=60 style='height:45.0pt'>
                  <td height=60 class=xl70 width=380 style='height:45.0pt;border-top:none;
  border-left:none;width:285pt'>Kl??sik TM S??zl?? Eserlerine Y??nelik Yeni Bir
                    Analiz Y??nt. ve <br>
                    Y??nt. M??sik??mize Kazand??rd??klar??: Abd??lk??dir Mer??g?????ye <br>
                    Atfedilen H??seyn?? K??r??n Rest. ??rn./<font class="font11">S. T. Oter</font></td>
                  <td class=xl71 width=383 style='border-top:none;border-left:none;width:287pt'>Hanefi
                    ??zbek Saz Eserlerinin E??itim M??zi??i Bestecili??i Perspektifinde ??ncelenmesi / <font
                        class="font11">U.T??rkmen-??.Bildik</font></td>
                </tr>
                <tr height=20 style='height:15.0pt'>
                  <td height=20 class=xl75 width=44 style='height:15.0pt;border-top:none;
  width:33pt'>15:00
                  </td>
                  <td colspan=2 class=xl81 width=763 style='width:572pt'>ARA / BREAK</td>
                </tr>
                <tr height=57 style='mso-height-source:userset;height:43.0pt'>
                  <td height=57 class=xl72 style='height:43.0pt;border-top:none'>15.15</td>
                  <td colspan=2 class=xl83 width=763 style='width:572pt'>Kapan???? /
                    Closing<br>
                    <font class="font23">ZOOM--&gt; ID:</font><font class="font22"> 475 639
                      4770<span style='mso-spacerun:yes'>?? </span></font><font class="font23">Passcode:</font><font
                        class="font22"> hisarlisym</font></td>
                </tr>
                <tr height=21 style='height:16.0pt'>
                  <td height=21 class=xl72 style='height:16.0pt;border-top:none'>16.00</td>
                  <td colspan=2 class=xl84 width=763 style='width:572pt'>Y??r??tme Kurulu
                    Toplant??s?? / Executive Committee Meeting
                  </td>
                </tr>
                <![if supportMisalignedColumns]>
                <tr height=0 style='display:none'>
                  <td width=44 style='width:33pt'></td>
                  <td width=380 style='width:285pt'></td>
                  <td width=383 style='width:287pt'></td>
                </tr>
                <![endif]>
              </table>
            </div>

          </div>
        </div>
      </section>
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