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
            <!--Aşağıdaki bilgiler Microsoft Excel'in Web Sayfası Olarak Yayımlama
            sihirbazı tarafından oluşturuldu.-->
            <!--Aynı öğe Excel'den yeniden yayımlanırsa, DIV etiketleri arasındaki
            bilgilerin tümü değiştirilecek.-->
            <!----------------------------->
            <!--EXCEL WEB SAYFASI OLARAK YAYIMLA SİHİRBAZI ÇIKTI BAŞLANGICI-->
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
  border-left:none;width:572pt'><font class="font13">11. ULUSLARARASI HİSARLI
                      AHMET SEMPOZYUMU </font><font class="font6"><br>
                    </font><font class="font14">The 11th International Hisarlı Ahmet
                      Symposium<br>
                    </font><font class="font15">&quot;Müzikte Yeni Yönelimler&quot;</font><font
                        class="font16"> / </font><font class="font15">&quot;New Tendencies in
                      Music&quot;</font><font class="font6"><br>
                      3-4-5-6 HAZİRAN/JUNE 2021<br>
                    </font></td>
                </tr>
                <tr height=25 style='mso-height-source:userset;height:19.25pt'>
                  <td height=25 class=xl76 width=44 style='height:19.25pt;width:33pt'>&nbsp;</td>
                  <td colspan=2 class=xl97 width=763 style='border-right:1.0pt solid black;
  border-left:none;width:572pt'>3 HAZİRAN PERŞEMBE / THURSDAY 3 JUNE
                  </td>
                </tr>
                <tr height=43 style='mso-height-source:userset;height:32.25pt'>
                  <td height=43 class=xl78 width=44 style='height:32.25pt;border-top:none;
  width:33pt'>10:00
                  </td>
                  <td colspan=2 class=xl99 width=763 style='border-right:1.0pt solid black;
  border-left:none;width:572pt'>AÇILIŞ / <font class="font9">OPENING CEREMONY</font><font
                        class="font8"><br>
                    </font><font class="font23">ZOOM--&gt; ID:</font><font class="font22"> 475
                      639 4770<span style='mso-spacerun:yes'>  </span></font><font
                        class="font23">Passcode:</font><font
                        class="font22"> hisarlisym</font></td>
                </tr>
                <tr height=67 style='mso-height-source:userset;height:50.5pt'>
                  <td height=67 class=xl75 width=44 style='height:50.5pt;border-top:none;
  width:33pt'>11:30
                  </td>
                  <td colspan=2 class=xl101 width=763 style='border-right:1.0pt solid black;
  width:572pt'><font class="font20">Davetli Konuşmacı / </font><font
                        class="font21">Key-Note Speaker</font><font class="font5"><br>
                    </font><font class="font8">TURAN SAĞER - </font><font class="font9">Yıldız
                      Teknik Üniversitesi</font><font class="font8"><br>
                    </font><font class="font5">&quot;</font><font class="font19">Eğitim ve
                      Etkinlikleriyle Pandemi Döneminde Sanatta Yeni Yönelimler</font><font
                        class="font5">&quot;<br>
                    </font><font class="font23">ZOOM--&gt; ID:</font><font class="font22"> 475
                      639 4770<span style='mso-spacerun:yes'>  </span></font><font
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
                        class="font22"> 475 639 4770<span style='mso-spacerun:yes'>  </span></font><font
                        class="font23">Passcode:</font><font class="font22"> hisarlisym</font></td>
                  <td class=xl79 width=383 style='border-top:none;border-left:none;width:287pt'><font
                        class="font23">ZOOM--&gt; ID: </font><font class="font22">849 324 7610<span
                          style='mso-spacerun:yes'>  </span></font><font class="font23">Passcode:</font><font
                        class="font22"> hisarlisym</font></td>
                </tr>
                <tr height=36 style='mso-height-source:userset;height:27.0pt'>
                  <td height=36 class=xl69 width=380 style='height:27.0pt;border-top:none;
  border-left:none;width:285pt'>OTURUM 1 / SESSION 1<br>
                    <font class="font12">Oturum Bşk./Chair:</font><font class="font5"> A. Barış
                      ÇEREZCİOĞLU</font></td>
                  <td class=xl69 width=383 style='border-top:none;border-left:none;width:287pt'>OTURUM
                    2 / SESSION 2<br>
                    <font class="font12">Oturum Bşk./Chair:</font><font class="font5"> Songül
                      KARAHASANOĞLU</font></td>
                </tr>
                <tr height=40 style='height:30.0pt'>
                  <td height=40 class=xl70 width=380 style='height:30.0pt;border-top:none;
  border-left:none;width:285pt'>Popüler Müzik Pratiklerinde Yeni Yönelimler
                    Çerçevesinde Eurovision’da Değişim/<font class="font11">Buket Genç</font></td>
                  <td class=xl70 width=383 style='border-top:none;border-left:none;width:287pt'>Çevrimiçi
                    Müzik Eğitiminde Öğretim Yönt. ve Geleceğin Müzik Eğitiminde Tekl. Yeri/<font
                        class="font11">A. Canyakan- E.F. Türkmen</font></td>
                </tr>
                <tr height=40 style='height:30.0pt'>
                  <td height=40 class=xl71 width=380 style='height:30.0pt;border-top:none;
  border-left:none;width:285pt'>Müzik Endüstrisinde Yapısal Değişimler<br>
                    <font class="font11">Hatice Selen Tekin</font></td>
                  <td class=xl70 width=383 style='border-top:none;border-left:none;width:287pt'>E-Yarışmalar:
                    Dijitalleşen Dünyada Klasik Müzik Yarışmaları/<font class="font11">Emrah
                      Ergene</font></td>
                </tr>
                <tr height=40 style='height:30.0pt'>
                  <td height=40 class=xl70 width=380 style='height:30.0pt;border-top:none;
  border-left:none;width:285pt'>Dijitalleşme Yoluyla Müzik Endüstrisindeki
                    Değişim<br>
                    <font class="font11">Resul Bağı</font></td>
                  <td class=xl70 width=383 style='border-top:none;border-left:none;width:287pt'>Türk
                    Müziği Usûlleri Öğretiminde<br>
                    Dijital Öğretim Materyali Kullanımı / <font class="font11">S. V. Kopar</font></td>
                </tr>
                <tr height=40 style='height:30.0pt'>
                  <td height=40 class=xl70 width=380 style='height:30.0pt;border-top:none;
  border-left:none;width:285pt'><font class="font17">Kadın Kimliğinin Temsili
                      Bağlamında<br>
                      J-Rock’a Genel Bir Bakış</font><font class="font10">/</font><font
                        class="font11">Cenk Celasin</font></td>
                  <td class=xl70 width=383 style='border-top:none;border-left:none;width:287pt'>Orkestral
                    Müzikte Yeni Tınılar: ‘Geleneksel Çalgı Toplulukları ve ‘Kemençe Kuartet’/<font
                        class="font11">Gözde Çolakoğlu Sarı</font></td>
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
                    <font class="font12">Oturum Bşk./Chair:</font><font class="font5"> Zafer
                      KURTASLAN</font></td>
                  <td class=xl69 width=383 style='border-top:none;border-left:none;width:287pt'>OTURUM
                    4 / SESSION 4<br>
                    <font class="font12">Oturum Bşk./Chair:</font><font class="font5"> Cenk
                      GÜRAY</font></td>
                </tr>
                <tr height=59 style='mso-height-source:userset;height:44.5pt'>
                  <td height=59 class=xl70 width=380 style='height:44.5pt;border-top:none;
  border-left:none;width:285pt'>Kodaly Yakl. AKÜ Çocuk Korolarındaki
                    Koristlerin Müzikal Gelş. Katkılarının Çalgı Eğitimcilerinin Görüşlerine Göre
                    Değerlendirilmesi/<font class="font11">E.F.Türkmen</font></td>
                  <td class=xl70 width=383 style='border-top:none;border-left:none;width:287pt'>Peşrev
                    ve Şarkı Formunun<br>
                    Usûl İcrasında Görülen Değişiklikler<br>
                    <font class="font11">Erkan Kanat</font></td>
                </tr>
                <tr height=60 style='height:45.0pt'>
                  <td height=60 class=xl70 width=380 style='height:45.0pt;border-top:none;
  border-left:none;width:285pt'>Müzik Eğitiminde Halk Türkülerinin Önemi ve
                    Okul Müziği İçin Yeni Türküler<br>
                    <font class="font11">E.F. Türkmen-Ç. Yöntem</font></td>
                  <td class=xl70 width=383 style='border-top:none;border-left:none;width:287pt'>Türk
                    Müziğinde Besteleme Tekniklerinde<br>
                    Dönemsel Değişimler: Neoklasik Dönemden Romantik Döneme Karcığar Makamı / <font
                        class="font11">B. Yetim- Ç. Adar</font></td>
                </tr>
                <tr height=40 style='height:30.0pt'>
                  <td height=40 class=xl70 width=380 style='height:30.0pt;border-top:none;
  border-left:none;width:285pt'>Müzik Analizinde Yeni Bir Yaklaşım:<br>
                    Müzikal Göstergebilim / <font class="font11">İpek Akanay</font></td>
                  <td class=xl71 width=383 style='border-top:none;border-left:none;width:287pt'>Türk
                    Müziği Ses Eğitimi Dersine Sistematik Bir Yaklaşım<br>
                    <font class="font11">Derya Eroğlu</font></td>
                </tr>
                <tr height=40 style='height:30.0pt'>
                  <td height=40 class=xl71 width=380 style='height:30.0pt;border-top:none;
  border-left:none;width:285pt'>Göstergebilim ve Opera -The Handmaid’s Tale
                    <br>
                    <font class="font11">Elif Aktuğ- M.A. Kazancıoğlu</font></td>
                  <td class=xl71 width=383 style='border-top:none;border-left:none;width:287pt'>Türk
                    Müziği Solfeji Eğitiminde Yeni Bir Yaklaşım<br>
                    <font class="font11">Hanefi Özbek-Volkan Gidiş</font></td>
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
                    <font class="font12">Oturum Bşk./Chair:</font><font class="font5"> Merve
                      EKEN KÜÇÜKAKSOY</font></td>
                  <td class=xl69 width=383 style='border-top:none;border-left:none;width:287pt'>OTURUM
                    6 / SESSION 6<br>
                    <font class="font12">Oturum Bşk./Chair:</font><font class="font5"> Elif
                      AKTUĞ</font></td>
                </tr>
                <tr height=60 style='height:45.0pt'>
                  <td height=60 class=xl70 width=380 style='height:45.0pt;border-top:none;
  border-left:none;width:285pt'>Makamın Yeniden Yorumlanması Bağlamında Makam
                    Müziğinde “Ezgi Odaklı” Yeni Yaklaşımlar<br>
                    <font class="font11">İ. Yamansoy-Cenk Güray</font></td>
                  <td class=xl70 width=383 style='border-top:none;border-left:none;width:287pt'>Klasik
                    Gitar Çalım Tekniğine<br>
                    Metodolojik Kapsamda Yeni Bir Yaklaşım<br>
                    <font class="font11">H. D. Karaduman</font></td>
                </tr>
                <tr height=40 style='height:30.0pt'>
                  <td height=40 class=xl70 width=380 style='height:30.0pt;border-top:none;
  border-left:none;width:285pt'>Derin Öğrenme Ağlarıyla Türk Müziği’nde
                    Otomatik Tanılama Sistemlerine Bir Bakış/<font class="font11">Çağrı Şen</font></td>
                  <td class=xl70 width=383 style='border-top:none;border-left:none;width:287pt'>Gitarın
                    Dahil Olduğu Yeni Oda Müziği Grup Örneği: Villa-Lobos’un Sexteto Mistico
                    Çalışması/<font class="font11">A. Koray Barut</font></td>
                </tr>
                <tr height=40 style='height:30.0pt'>
                  <td height=40 class=xl70 width=380 style='height:30.0pt;border-top:none;
  border-left:none;width:285pt'>Derin Öğrenme Tabanlı Otomatik TMMBestecisi
                    İçin Grafiksel Kullanıcı Arayüzü/<font class="font11">İ.H.Parlak-Y. Çebi-C.
                      Işıkhan</font></td>
                  <td class=xl70 width=383 style='border-top:none;border-left:none;width:287pt'>Çağdaş
                    Müzikte Kullanılan Yeni Klarnet Çalım Teknikleri<br>
                    <font class="font11">Ayşegül Ergene</font></td>
                </tr>
                <tr height=40 style='height:30.0pt'>
                  <td height=40 class=xl70 width=380 style='height:30.0pt;border-top:none;
  border-left:none;width:285pt'>Makamsal Soy Kütüğü ve Tasnif Modeli
                    Üzerinden<br>
                    Neva Makamı Tahlili/<font class="font11">Peter Salvucci</font></td>
                  <td class=xl70 width=383 style='border-top:none;border-left:none;width:287pt'>Toru
                    Takemitsu’nun “Voice” Eseri Üzerinden Genişletilmiş Flüt Tekniklerine Bir
                    Bakış/<font class="font11">M.Çokamay</font></td>
                </tr>
                <tr height=20 style='height:15.0pt'>
                  <td height=20 class=xl66 style='height:15.0pt;border-top:none'>18.00</td>
                  <td colspan=2 class=xl81 width=763 style='width:572pt'>ARA / BREAK</td>
                </tr>
                <tr height=65 style='mso-height-source:userset;height:49.25pt'>
                  <td height=65 class=xl67 style='height:49.25pt;border-top:none'>19.00</td>
                  <td colspan=2 class=xl93 width=763 style='border-right:1.0pt solid black;
  width:572pt'><font class="font20">Davetli Konuşmacı / </font><font
                        class="font21">Key-note Speaker</font><font class="font5"><br>
                    </font><font class="font8">JOHN RINK - </font><font class="font9">University
                      of Cambridge</font><font class="font8"><br>
                    </font><font class="font12">&quot;</font><font class="font9"> </font><font
                        class="font19">'Informed Listening’ in Action</font><font class="font9"> </font><font
                        class="font12">&quot;<br>
                    </font><font class="font23">ZOOM--&gt; ID:</font><font class="font22"> 475
                      639 4770<span style='mso-spacerun:yes'>  </span></font><font
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
                    HAZİRAN CUMA / <font class="font7">FRIDAY 4 JUNE</font></td>
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
                        class="font22"> 475 639 4770<span style='mso-spacerun:yes'>  </span></font><font
                        class="font23">Passcode:</font><font class="font22"> hisarlisym</font></td>
                  <td class=xl79 width=383 style='border-top:none;border-left:none;width:287pt'><font
                        class="font23">ZOOM--&gt; ID: </font><font class="font22">849 324 7610<span
                          style='mso-spacerun:yes'>  </span></font><font class="font23">Passcode:</font><font
                        class="font22"> hisarlisym</font></td>
                </tr>
                <tr height=35 style='height:26.0pt'>
                  <td height=35 class=xl69 width=380 style='height:26.0pt;border-top:none;
  border-left:none;width:285pt'>OTURUM 7 / SESSION 7<br>
                    <font class="font12">Oturum Bşk./Chair:</font><font class="font5"> Uğur
                      TÜRKMEN</font></td>
                  <td class=xl69 width=383 style='border-top:none;border-left:none;width:287pt'>OTURUM
                    8 / SESSION 8<br>
                    <font class="font12">Oturum Bşk./Chair:</font><font class="font5"> Cihan
                      IŞIKHAN</font></td>
                </tr>
                <tr height=40 style='height:30.0pt'>
                  <td height=40 class=xl70 width=380 style='height:30.0pt;border-top:none;
  border-left:none;width:285pt'>Özel Öğretim Kurumlarında Müzik Derslerindeki
                    Yeni Yönelimlerin İncelenmesi/<font class="font11">İlknur Özal Göncü</font></td>
                  <td class=xl70 width=383 style='border-top:none;border-left:none;width:287pt'>Müzikte
                    Endüstriyel Eğilimler ve Endüstrinin Eğilimleri<br>
                    <font class="font11">Onur Karabiber</font></td>
                </tr>
                <tr height=40 style='height:30.0pt'>
                  <td height=40 class=xl70 width=380 style='height:30.0pt;border-top:none;
  border-left:none;width:285pt'>Pandemi Sürecinde Otizmli Bireylerin Müzik
                    Aracılığıyla Sosyalleşmesi/<font class="font11">R.E. Altıncıoğlu-O. Berrakçay</font></td>
                  <td class=xl70 width=383 style='border-top:none;border-left:none;width:287pt'>Dijitalleşen
                    Müzik Sektörünün Yeni Aktörleri Olarak YouTube Müzik Sahn.ve Elapro Sahne
                    Örneği / <font class="font11">K. Demirel</font></td>
                </tr>
                <tr height=40 style='height:30.0pt'>
                  <td height=40 class=xl70 width=380 style='height:30.0pt;border-top:none;
  border-left:none;width:285pt'>Özel Eğitim Öğretmenlerinin Pedagojik Müzik
                    Terapi Tekniklerini Uygulama Durumları/<font class="font11">Burak Sağırkaya</font></td>
                  <td class=xl70 width=383 style='border-top:none;border-left:none;width:287pt'>Profesyonel
                    Dj’lerin Karşılaştıkları Problemler ve Yeni Başlayanlara Tavsiyeleri/<font
                        class="font11">Y. Kesendere-Seyhan Canyakan</font></td>
                </tr>
                <tr height=40 style='height:30.0pt'>
                  <td height=40 class=xl70 width=380 style='height:30.0pt;border-top:none;
  border-left:none;width:285pt'>Müzik Öğrt. ve Öğretmen Adaylarının Müzik
                    Yeteneği Olan Özel Gereksinimli Çocuklara İlişkin Alg./<font class="font11">B.
                      Aytemur-S. Sipahi</font></td>
                  <td class=xl70 width=383 style='border-top:none;border-left:none;width:287pt'>Canlı
                    Müzik Performanslarında Kullanılan Sanal Enstrümanların İncelenmesi/<font
                        class="font11">T. Yönsel-S. Canyakan</font></td>
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
                      Konuşmacı / </font><font class="font21">Key-note Speaker</font><font
                        class="font5"><br>
                    </font><font class="font8">MELİK ERTUĞRUL BAYRAKTARKATAL - </font><font
                        class="font9">Başkent Üniversitesi</font><font class="font8"><br>
                    </font><font class="font12">&quot;Makamın Yapıtaşı ve Çokseslilik&quot;</font><font
                        class="font5"><br>
                    </font><font class="font23">ZOOM--&gt; ID:</font><font class="font22"> 475
                      639 4770<span style='mso-spacerun:yes'>  </span></font><font
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
                          style='mso-spacerun:yes'>  </span></font><font class="font23">Passcode:</font><font
                        class="font22"> hisarlisym</font></td>
                  <td class=xl79 width=383 style='border-top:none;border-left:none;width:287pt'><font
                        class="font23">ZOOM--&gt; ID: </font><font class="font22">849 324 7610<span
                          style='mso-spacerun:yes'>  </span></font><font class="font23">Passcode:</font><font
                        class="font22"> hisarlisym</font></td>
                </tr>
                <tr height=35 style='height:26.0pt'>
                  <td rowspan=5 height=195 class=xl87 width=44 style='border-bottom:.5pt solid black;
  height:146.0pt;width:33pt'>13:00
                  </td>
                  <td class=xl69 width=380 style='border-top:none;border-left:none;width:285pt'>OTURUM
                    9 / SESSION 9<br>
                    <font class="font12">Oturum Bşk./Chair:</font><font class="font5"> A. Barış
                      ÇEREZCİOĞLU</font></td>
                  <td class=xl69 width=383 style='border-top:none;border-left:none;width:287pt'>OTURUM
                    10 / SESSION 10 (<font class="font19">English</font><font class="font5">)<br>
                    </font><font class="font12">Oturum Bşk./Chair:</font><font class="font5">
                      Peter SNAPPER</font></td>
                </tr>
                <tr height=40 style='height:30.0pt'>
                  <td height=40 class=xl70 width=380 style='height:30.0pt;border-top:none;
  border-left:none;width:285pt'>Amaç, Biçim, Mod Bağlamında<br>
                    Müziği Dinlemek ve Kognitif Etkiler/<font class="font11">Fırat Kutluk</font></td>
                  <td class=xl71 width=383 style='border-top:none;border-left:none;width:287pt'>Three
                    Case Studies in Piano Pedagogy<br>
                    <font class="font11">Celeste M. Watson-Bethany Cothern</font></td>
                </tr>
                <tr height=40 style='height:30.0pt'>
                  <td height=40 class=xl70 width=380 style='height:30.0pt;border-top:none;
  border-left:none;width:285pt'>“Bağlantısallık” Müzik Bilim Yöntemini
                    Etkileyecek Mi?<br>
                    <font class="font11">Ahu Köksal</font></td>
                  <td class=xl70 width=383 style='border-top:none;border-left:none;width:287pt'>The
                    Vısual Factor in Instrumental Musıc<br>
                    <font class="font11">Zarębińska Grodecki</font></td>
                </tr>
                <tr height=40 style='height:30.0pt'>
                  <td height=40 class=xl70 width=380 style='height:30.0pt;border-top:none;
  border-left:none;width:285pt'>Batı Müziğinin Krizi ve Felsefe<br>
                    <font class="font11">Suat Soner Erenözlü</font></td>
                  <td class=xl70 width=383 style='border-top:none;border-left:none;width:287pt'>Music
                    as a Language—Music Learning Theory, How.../<font class="font11">Scarlette
                      Kerr-Shane Kerr</font></td>
                </tr>
                <tr height=40 style='height:30.0pt'>
                  <td height=40 class=xl70 width=380 style='height:30.0pt;border-top:none;
  border-left:none;width:285pt'>Enstalasyon Sanatı Olarak Opera<br>
                    <font class="font11">Elif Aktuğ-M.A. Kazancıoğlu</font></td>
                  <td class=xl70 width=383 style='border-top:none;border-left:none;width:287pt'>Strategies
                    for Preparing Students to Face Different Perf. Settings: Impl. Basic Princ.
                    of the Lister-Sink M./<font class="font11">A. A. Cuéllar</font></td>
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
                    <font class="font12">Oturum Bşk./Chair:</font><font class="font5"> Bülent
                      ALANER</font></td>
                  <td class=xl69 width=383 style='border-top:none;border-left:none;width:287pt'>OTURUM
                    12 / SESSION 12 (<font class="font19">English</font><font class="font5">)<br>
                    </font><font class="font12">Oturum Bşk./Chair:</font><font class="font5">
                      L. M. Tonella TÜZÜN</font></td>
                </tr>
                <tr height=40 style='height:30.0pt'>
                  <td height=40 class=xl70 width=380 style='height:30.0pt;border-top:none;
  border-left:none;width:285pt'>Türkiye’de Gerçekleştirilen Halk Müziği
                    Derlemelerine İlişkin Tarihsel Kaynaklar Üzerine Bir İnc./ <font
                        class="font11">B.Köse-A. Akat</font></td>
                  <td class=xl71 width=383 style='border-top:none;border-left:none;width:287pt'>A
                    Presentation on Non-playing Related Injury of Pianists<br>
                    <font class="font11">H.Wendy Wang-Anni Wang</font></td>
                </tr>
                <tr height=40 style='height:30.0pt'>
                  <td height=40 class=xl70 width=380 style='height:30.0pt;border-top:none;
  border-left:none;width:285pt'>Müzik Arşivciliğinde Yeni Yakl.ve Güncel Uyg.
                    Üzerine Bir Değerl./<font class="font11">Özgün Arda Nural-Abdullah Akat</font></td>
                  <td class=xl70 width=383 style='border-top:none;border-left:none;width:287pt'>Playing-Related
                    Injuries: How We Can Move Forward Seeing Beyond Stat. and Break The Cycle/<font
                        class="font11">E. C. Üstünel</font></td>
                </tr>
                <tr height=40 style='height:30.0pt'>
                  <td height=40 class=xl70 width=380 style='height:30.0pt;border-top:none;
  border-left:none;width:285pt'>Müzik Müzeleri İçin 3d Çalgı Modelleme ve
                    Artırılmış Gerçeklik Uyg.: İ. Alimoğlu Müzik Müzesi Örn./<font class="font11">S.
                      Canyakan</font></td>
                  <td class=xl70 width=383 style='border-top:none;border-left:none;width:287pt'>Foundations
                    of the Lister-Sink Method:Developing Injury-Preventive Approach to the Keyb./<font
                        class="font11">C. M. Watson-B.Cothern</font></td>
                </tr>
                <tr height=40 style='height:30.0pt'>
                  <td height=40 class=xl70 width=380 style='height:30.0pt;border-top:none;
  border-left:none;width:285pt'>Bir Bestecinin Kılavuzu: Kütüphane Müziği<br>
                    <font class="font11">Fatih Taş-Seyhan Canyakan</font></td>
                  <td class=xl70 width=383 style='border-top:none;border-left:none;width:287pt'>Hypermobility
                    (a.k.a. “double-jointedness”) and Its Impact on the Developing Pianist/<font
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
                    <font class="font12">Oturum Bşk./Chair:</font><font class="font5"> Zeki
                      NACAKÇI</font></td>
                  <td class=xl69 width=383 style='border-top:none;border-left:none;width:287pt'>OTURUM
                    14 / SESSION 14 (<font class="font19">English</font><font class="font5">)<br>
                    </font><font class="font12">Oturum Bşk./Chair:</font><font class="font5">
                      Abdullah AKAT<span style='mso-spacerun:yes'> </span></font></td>
                </tr>
                <tr height=40 style='height:30.0pt'>
                  <td height=40 class=xl70 width=380 style='height:30.0pt;border-top:none;
  border-left:none;width:285pt'>Türkiye’de Karşı Kültürel Kimliğin Yeni Bir
                    İfade Alanı Olarak Psychedelic Trance Etkinlikleri/<font class="font11">Uğur
                      Cihat Sakarya</font></td>
                  <td class=xl70 width=383 style='border-top:none;border-left:none;width:287pt'>The
                    Music Listening Habits From Conv. Media to New Media with “Uses and
                    Gratifications” Approach/<font class="font11">G. Altınbaş</font></td>
                </tr>
                <tr height=40 style='height:30.0pt'>
                  <td height=40 class=xl70 width=380 style='height:30.0pt;border-top:none;
  border-left:none;width:285pt'>Kültür Patronajı Bağlamında Çalgıcı Mektebi
                    Roman Orkestrası ve “Roman Açılımı”/<font class="font11">Burçe U. Çuhadar</font></td>
                  <td class=xl70 width=383 style='border-top:none;border-left:none;width:287pt'>A
                    Tune Against Sil.: The Role of Iranian W. in Qajar Era as Mus., the case of
                    Ostad Mina and Ostad Zohre/<font class="font11">H. L. Korul</font></td>
                </tr>
                <tr height=60 style='height:45.0pt'>
                  <td height=60 class=xl70 width=380 style='height:45.0pt;border-top:none;
  border-left:none;width:285pt'>Hemşerilik Derneklerinde Kültürel Belleğin ve
                    Kültürel Kimliğin Yeniden Üretimi: Narlıdere Tokatlılar Yardm. ve Dayn. Dern.
                    Örneği / <font class="font11">Ata Sağıroğlu</font></td>
                  <td class=xl70 width=383 style='border-top:none;border-left:none;width:287pt'>Interpretation
                    and Invention of Urban Folk Songs from Vranje: Past of (National) Intangible
                    Cultural Heritage<br>
                    <font class="font11">Marija Dumnić Vilotijević</font></td>
                </tr>
                <tr height=40 style='height:30.0pt'>
                  <td height=40 class=xl71 width=380 style='height:30.0pt;border-top:none;
  border-left:none;width:285pt'>Adana İlinde Yaşayan Z Kuşağının Müzikal
                    Beğenileri<br>
                    <font class="font11">Özge Açıkgöz-Timur Vural</font></td>
                  <td class=xl70 width=383 style='border-top:none;border-left:none;width:287pt'>Ethnomusicological
                    Archiving in the 21st Century: Some Thoughts<span style='mso-spacerun:yes'> 
  </span>on Ethical Issues/<font class="font11">Hande Sağlam</font></td>
                </tr>
                <tr height=20 style='height:15.0pt'>
                  <td height=20 class=xl66 style='height:15.0pt;border-top:none'>18.00</td>
                  <td colspan=2 class=xl81 width=763 style='width:572pt'>ARA / BREAK</td>
                </tr>
                <tr height=92 style='mso-height-source:userset;height:69.0pt'>
                  <td height=92 class=xl72 style='height:69.0pt;border-top:none'>19.00</td>
                  <td colspan=2 class=xl92 width=763 style='width:572pt'><font class="font20">Davetli
                      Konuşmacı / </font><font class="font21">Key-Note Speaker</font><font
                        class="font5"><br>
                    </font><font class="font8">NADJA WALLASZKOVITS - </font><font class="font9">State
                      Academy of Fine Arts Stuttgart</font><font class="font8"><br>
                    </font><font class="font9">&quot;</font><font class="font19">Archiving our
                      Musical Cultural Heritage: New Technologies and Trends in Preservation and
                      Access</font><font class="font9">&quot;</font><font class="font5"><br>
                    </font><font class="font23">ZOOM--&gt; ID:</font><font class="font22"> 475
                      639 4770<span style='mso-spacerun:yes'>  </span></font><font
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
                    HAZİRAN CUMARTESİ / <font class="font7">SATURDAY 5 JUNE</font></td>
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
                        class="font22"> 475 639 4770<span style='mso-spacerun:yes'>  </span></font><font
                        class="font23">Passcode:</font><font class="font22"> hisarlisym</font></td>
                  <td class=xl79 width=383 style='border-top:none;border-left:none;width:287pt'><font
                        class="font23">ZOOM--&gt; ID: </font><font class="font22">849 324 7610<span
                          style='mso-spacerun:yes'>  </span></font><font class="font23">Passcode:</font><font
                        class="font22"> hisarlisym</font></td>
                </tr>
                <tr height=35 style='height:26.0pt'>
                  <td height=35 class=xl69 width=380 style='height:26.0pt;border-top:none;
  border-left:none;width:285pt'>OTURUM 15 / SESSION 15<br>
                    <font class="font12">Oturum Bşk./Chair:</font><font class="font5"> Emel F.
                      TÜRKMEN</font></td>
                  <td class=xl69 width=383 style='border-top:none;border-left:none;width:287pt'>OTURUM
                    16 / SESSION 16<br>
                    <font class="font12">Oturum Bşk./Chair:</font><font class="font5"> Ayşegül
                      ERGENE</font></td>
                </tr>
                <tr height=40 style='height:30.0pt'>
                  <td height=40 class=xl70 width=380 style='height:30.0pt;border-top:none;
  border-left:none;width:285pt'>Türkiye’deki Üniv. Müzik Alanı Dışındaki Progr.
                    Yapılmış Müzik ile İlişkili Lisansüstü Tezl. İncl. / <font class="font11">Ebru
                      Şen</font></td>
                  <td class=xl70 width=383 style='border-top:none;border-left:none;width:287pt'>Hindemith’in
                    ‘Eşgüdümlü Uygulama’ Kuramı Üzerine<br>
                    <font class="font11">Selin Oyan</font></td>
                </tr>
                <tr height=40 style='height:30.0pt'>
                  <td height=40 class=xl70 width=380 style='height:30.0pt;border-top:none;
  border-left:none;width:285pt'>Türkiye’deki Müzik Okullarında Türk<br>
                    Müziği Eğitiminin Gerekliliği/<font class="font11">Oğuzhan Balcı</font></td>
                  <td class=xl70 width=383 style='border-top:none;border-left:none;width:287pt'>Yeni
                    Müzikte Dizisel Malzemenin Kullanımı<br>
                    <font class="font11">Bahadır Çokamay</font></td>
                </tr>
                <tr height=40 style='height:30.0pt'>
                  <td height=40 class=xl70 width=380 style='height:30.0pt;border-top:none;
  border-left:none;width:285pt'>Kuruluşundan Günümüze GSL Müzik Bölümü Öğretim
                    Programları/<font class="font11">O.Zahal-E.Gürpınar-B. Ertekin</font></td>
                  <td class=xl70 width=383 style='border-top:none;border-left:none;width:287pt'>Brahms
                    Eserinde Bir Tema Tekrarının Yorumlanması: <br>
                    Gelişme Öncesi mi, Gelişme Başlangıcı mı?/<font class="font11">G.Koçaslan</font></td>
                </tr>
                <tr height=60 style='height:45.0pt'>
                  <td height=60 class=xl70 width=380 style='height:45.0pt;border-top:none;
  border-left:none;width:285pt'>Güzel Sanatlar Liseleri Orkestra ve Çalgı
                    Toplulukları Ders Kitaplarının Karşılaştırılmalı Analizi<br>
                    <font class="font11">B. Ertekin-E. F. Danacı-E. Gürpınar-O. Zahal</font></td>
                  <td class=xl71 width=383 style='border-top:none;border-left:none;width:287pt'>3-
                    2- 1- İmza!<br>
                    <font class="font11">Türev Berki</font></td>
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
                      Konuşmacı / </font><font class="font21">Key-note Speaker</font><font
                        class="font5"><br>
                    </font><font class="font8">RUHİ AYANGİL - </font><font class="font9">İstanbul
                      Teknik Üniversitesi<br>
                    </font><font class="font12">&quot;Türk Müziği Modernleşme Sürecinde İki
                      Özerk Örgütlenme Modeli: ATMOK ve TUMAC&quot;</font><font class="font5"><br>
                    </font><font class="font23">ZOOM--&gt; ID:</font><font class="font22"> 475
                      639 4770<span style='mso-spacerun:yes'>  </span></font><font
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
                    ID: 475 639 4770<span style='mso-spacerun:yes'>  </span>Passcode: hisarlisym
                  </td>
                  <td class=xl79 width=383 style='border-top:none;border-left:none;width:287pt'><font
                        class="font23">ZOOM--&gt; ID: </font><font class="font22">849 324 7610<span
                          style='mso-spacerun:yes'>  </span></font><font class="font23">Passcode:</font><font
                        class="font22"> hisarlisym</font></td>
                </tr>
                <tr height=35 style='height:26.0pt'>
                  <td height=35 class=xl69 width=380 style='height:26.0pt;border-top:none;
  border-left:none;width:285pt'>OTURUM 17 / SESSION 17<br>
                    <font class="font12">Oturum Bşk./Chair:</font><font class="font5"> Ayten
                      KAPLAN</font></td>
                  <td class=xl69 width=383 style='border-top:none;border-left:none;width:287pt'>OTURUM
                    18 / SESSION 18 (<font class="font19">English</font><font class="font5">)<br>
                    </font><font class="font12">Oturum Bşk./Chair:</font><font class="font5">
                      Mehmet Can ÖZER</font></td>
                </tr>
                <tr height=40 style='height:30.0pt'>
                  <td height=40 class=xl70 width=380 style='height:30.0pt;border-top:none;
  border-left:none;width:285pt'>Zoomüzikoloji Penceresinden Kültür Olarak
                    Müzik<br>
                    <font class="font11">Ali Keles</font></td>
                  <td class=xl71 width=383 style='border-top:none;border-left:none;width:287pt'>The
                    Affects in the Black Paintings by Willy Corrêa de Oliveira/<font
                        class="font11">L. M. T. Tüzün</font></td>
                </tr>
                <tr height=40 style='height:30.0pt'>
                  <td height=40 class=xl70 width=380 style='height:30.0pt;border-top:none;
  border-left:none;width:285pt'>Heterotopya Olarak Müzik Performansları:<br>
                    Shpongle Grubu Örneği/<font class="font11">A. B. Çerezcioğlu</font></td>
                  <td class=xl70 width=383 style='border-top:none;border-left:none;width:287pt'>The
                    Biggest Challenges Of The Contemporary Classical Music In The 21th Century/<font
                        class="font11">Marzena Maria Kızılay</font></td>
                </tr>
                <tr height=60 style='height:45.0pt'>
                  <td height=60 class=xl71 width=380 style='height:45.0pt;border-top:none;
  border-left:none;width:285pt'>Çokkültürlü ve Ulusötesi Bir Uzam Olarak
                    Mütareke Yılları İstanbul’unda Caz/ <font class="font11">Selim Tan</font></td>
                  <td class=xl74 width=383 style='border-top:none;border-left:none;width:287pt'>Motor
                    Skill Development During Musical Training: How Biomechanics and Sports
                    Pedagogy can Inform Music Instruction/<font class="font18">Scarlette
                      Kerr-Ekin Ustunel</font></td>
                </tr>
                <tr height=40 style='height:30.0pt'>
                  <td height=40 class=xl71 width=380 style='height:30.0pt;border-top:none;
  border-left:none;width:285pt'>Bir Orta Çağ Estampie'sinde Modal Yapı<br>
                    <font class="font11">Serkan Özçifci</font></td>
                  <td class=xl71 width=383 style='border-top:none;border-left:none;width:287pt'>A
                    Review on “The Twelve Lesson Course in A New Approach to Violin Playing” by
                    Kato Havas/<font class="font11">G. G. Kılıç</font></td>
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
                    <font class="font12">Oturum Bşk./Chair:</font><font class="font5"> Bülent
                      ALANER</font></td>
                  <td class=xl69 width=383 style='border-top:none;border-left:none;width:287pt'>OTURUM
                    20 / SESSION 20<br>
                    <font class="font12">Oturum Bşk./Chair:</font><font class="font5"> Bahadır
                      ÇOKAMAY</font></td>
                </tr>
                <tr height=40 style='height:30.0pt'>
                  <td height=40 class=xl70 width=380 style='height:30.0pt;border-top:none;
  border-left:none;width:285pt'>Konsv. Öğr. Grafik Notasyon Yol. Doğaçlama Oyun
                    Eğitimine Yönelik Görüşlerinin Betimlenmesi / <font class="font11">S.
                      Coşkuner-C. Özhan</font></td>
                  <td class=xl74 width=383 style='border-top:none;border-left:none;width:287pt'>Yeni
                    Müziğin Felsefi Temelleri<br>
                    <font class="font18">Görkem Aytimur</font></td>
                </tr>
                <tr height=40 style='height:30.0pt'>
                  <td height=40 class=xl70 width=380 style='height:30.0pt;border-top:none;
  border-left:none;width:285pt'>Kâtip: Türk Müziği için Özelleşmiş Nota Yazım
                    Uygulaması<br>
                    <font class="font11">İ.H.Parlak-Y. Çebi-C. Işıkhan-Y.Öztüfekçi</font></td>
                  <td class=xl70 width=383 style='border-top:none;border-left:none;width:287pt'>21.
                    Yüzyılda Piyanoda Yeni Etki Arayışı:<br>
                    Crumb'ın Makrokosmos IV/<font class="font11">Ilgın Uysal-L. M. T. Tüzün</font></td>
                </tr>
                <tr height=40 style='height:30.0pt'>
                  <td height=40 class=xl70 width=380 style='height:30.0pt;border-top:none;
  border-left:none;width:285pt'>Türk Müziğinde İntihal Ölçümü<br>
                    <font class="font11">C. Işıkhan-M. Y. Öztüfekçi-İ.H.Parlak</font></td>
                  <td class=xl74 width=383 style='border-top:none;border-left:none;width:287pt'>Müzik
                    Pratiklerinde Mekân:<br>
                    Konser Geleneğinin 21. Yüzyıldaki Değişimi/<font class="font18">Özge Cesur</font></td>
                </tr>
                <tr height=40 style='height:30.0pt'>
                  <td height=40 class=xl70 width=380 style='height:30.0pt;border-top:none;
  border-left:none;width:285pt'>Türk Musikisi Nazariyatında<br>
                    Modern Sonrası Eğilimler/<font class="font11">S.C. Çıplak-S. Karahasanoğlu</font></td>
                  <td class=xl70 width=383 style='border-top:none;border-left:none;width:287pt'>Bir
                    Sonlanma Analizi Modeli Önerisi<br>
                    <font class="font11">Giray Koçaslan-Türev Berki</font></td>
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
                    <font class="font12">Oturum Bşk./Chair:</font><font class="font5"> Hanefi
                      ÖZBEK</font></td>
                  <td class=xl69 width=383 style='border-top:none;border-left:none;width:287pt'>OTURUM
                    22 / SESSION 22<br>
                    <font class="font12">Oturum Bşk./Chair:</font><font class="font5"> Hatice
                      Selen TEKİN</font></td>
                </tr>
                <tr height=40 style='height:30.0pt'>
                  <td height=40 class=xl70 width=380 style='height:30.0pt;border-top:none;
  border-left:none;width:285pt'>Türkiye’de Geleneksel ve Tamamlayıcı
                    Tıpta<br>
                    Müziğin Yeri / <font class="font11">Ayten Kaplan</font></td>
                  <td class=xl70 width=383 style='border-top:none;border-left:none;width:287pt'>Müzik
                    Öğretme ve Öğrenme Sürecinde Yaşanan Zorluklara Yönelik Nitel Bir Çalışma/<font
                        class="font11">Y. Kuzgun</font></td>
                </tr>
                <tr height=40 style='height:30.0pt'>
                  <td height=40 class=xl70 width=380 style='height:30.0pt;border-top:none;
  border-left:none;width:285pt'>Koklear İmplantlı Bireylerde Müz. Davr.
                    Kazandırılması: Edimsel Bir Model Önerisi/<font class="font11">B. A.
                      Urugeri-İ. Y. Yükselsin<span style='mso-spacerun:yes'> </span></font></td>
                  <td class=xl71 width=383 style='border-top:none;border-left:none;width:287pt'>Dijital
                    Çağda Müzik Eğitimi ve Yenilenen Müzik Eğitimcisi<br>
                    <font class="font11">Murat Gök</font></td>
                </tr>
                <tr height=40 style='height:30.0pt'>
                  <td height=40 class=xl70 width=380 style='height:30.0pt;border-top:none;
  border-left:none;width:285pt'>Ses Terapisinin Ses Bzkl. Tedavisindeki Etk. ve
                    Tedavide Başarıyı Etk. Fakt./<font class="font11">A. Tüzüner-E. Saklıca</font></td>
                  <td class=xl70 width=383 style='border-top:none;border-left:none;width:287pt'>Mesleki
                    Sanat Eğitimi Veren Kurumların Sosyal Medya Bağlamında Değerlendirilmesi/<font
                        class="font11">Alper Akgül</font></td>
                </tr>
                <tr height=20 style='height:15.0pt'>
                  <td height=20 class=xl70 width=380 style='height:15.0pt;border-top:none;
  border-left:none;width:285pt'>Ses Eğitimine Yönelik Youtube Videolarının
                    İncl./<font class="font11">K. Aksen</font></td>
                  <td class=xl70 width=383 style='border-top:none;border-left:none;width:287pt'>Postmodern
                    Bir Ürün: Video Klip/<font class="font11">Canan Aykent</font></td>
                </tr>
                <tr height=20 style='height:15.0pt'>
                  <td height=20 class=xl72 style='height:15.0pt;border-top:none'>18.00</td>
                  <td colspan=2 class=xl81 width=763 style='width:572pt'>ARA / BREAK</td>
                </tr>
                <tr height=75 style='mso-height-source:userset;height:56.0pt'>
                  <td height=75 class=xl72 style='height:56.0pt;border-top:none'>19.00</td>
                  <td colspan=2 class=xl92 width=763 style='width:572pt'><font class="font20">Davetli
                      Konuşmacı / </font><font class="font21">Key-note Speaker</font><font
                        class="font5"><br>
                    </font><font class="font8">JOHANNES KRETZ - </font><font class="font9">University
                      of Music and Performing Arts Vienna</font><font class="font8"><br>
                    </font><font class="font12">&quot;</font><font class="font19">Composing
                      Today, Moving from Model of a Lonesome Genius to Activism and Artistic
                      Research</font><font class="font12">&quot;<br>
                    </font><font class="font23">ZOOM--&gt; ID:</font><font class="font22"> 475
                      639 4770<span style='mso-spacerun:yes'>  </span></font><font class="font23">Passcode:
                    </font><font class="font22">hisarlisym</font></td>
                </tr>
                <tr height=21 style='height:16.0pt'>
                  <td height=21 style='height:16.0pt'></td>
                  <td colspan=2 style='mso-ignore:colspan'></td>
                </tr>
                <tr height=21 style='height:16.0pt'>
                  <td height=21 class=xl76 width=44 style='height:16.0pt;width:33pt'>&nbsp;</td>
                  <td colspan=2 class=xl86 width=763 style='border-left:none;width:572pt'>6
                    HAZİRAN PAZAR / SUNDAY 6 JUNE
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
                        class="font22"> 475 639 4770<span style='mso-spacerun:yes'>  </span></font><font
                        class="font23">Passcode:</font><font class="font22"> hisarlisym</font></td>
                  <td class=xl79 width=383 style='border-top:none;border-left:none;width:287pt'><font
                        class="font23">ZOOM--&gt; ID: </font><font class="font22">849 324 7610<span
                          style='mso-spacerun:yes'>  </span></font><font class="font23">Passcode:</font><font
                        class="font22"> hisarlisym</font></td>
                </tr>
                <tr height=35 style='height:26.0pt'>
                  <td height=35 class=xl69 width=380 style='height:26.0pt;border-top:none;
  border-left:none;width:285pt'>OTURUM 23 / SESSION 23<br>
                    <font class="font12">Oturum Bşk./Chair:</font><font class="font5"> Çağhan
                      ADAR</font></td>
                  <td class=xl69 width=383 style='border-top:none;border-left:none;width:287pt'>OTURUM
                    24 / SESSION 24<br>
                    <font class="font12">Oturum Bşk./Chair:</font><font class="font5"> Arda
                      EDEN</font></td>
                </tr>
                <tr height=60 style='height:45.0pt'>
                  <td height=60 class=xl70 width=380 style='height:45.0pt;border-top:none;
  border-left:none;width:285pt'>Geleneğin Muhafazası ve Modernist Bağlamda
                    Yeniden<br>
                    İcadı: Rauf Yekta'nın Tezlerinde Yerel ve Yerel Ötesi<br>
                    Dinamiklerin Analizi / <font class="font11">Eren Göçük</font></td>
                  <td class=xl71 width=383 style='border-top:none;border-left:none;width:287pt'>Kudüm
                    Çalgısına Pratik Bir Akord Mekanizması Geliştirme Çalışması/<font
                        class="font11">Selin Karancı</font></td>
                </tr>
                <tr height=40 style='height:30.0pt'>
                  <td height=40 class=xl70 width=380 style='height:30.0pt;border-top:none;
  border-left:none;width:285pt'>Osmanlı/Türk mâkam müziği tarihinde<br>
                    yenilikçi bir kültürel figür: Ali Ufki Bey/<font class="font11">Ş. Altun
                      Öney</font></td>
                  <td class=xl70 width=383 style='border-top:none;border-left:none;width:287pt'>MIDI
                    Teknolojisinin Sağladığı Olanaklarla Alternatif Ses Sistemlerinin Kullanımı:
                    Sevish Örneği/<font class="font11">R. Taşar</font></td>
                </tr>
                <tr height=60 style='height:45.0pt'>
                  <td height=60 class=xl71 width=380 style='height:45.0pt;border-top:none;
  border-left:none;width:285pt'>Müzikolojide Kadın Araştırmaları: Bestekar ve
                    Tanburi Dilhayat Kalfa’nın Müzik Tarihimizdeki Yeri/<font class="font11">Ş.
                      E. Çak</font></td>
                  <td class=xl70 width=383 style='border-top:none;border-left:none;width:287pt'>Uzaktan
                    Eğitim Sürecinde Müzik Dersinde Kullanılan WEB 2.0 Araçlarının Öğrencilerin
                    Derse Olan Tutumlarının İncelenmesi / <font class="font11">Muzaffer Orhan</font></td>
                </tr>
                <tr height=60 style='height:45.0pt'>
                  <td height=60 class=xl71 width=380 style='height:45.0pt;border-top:none;
  border-left:none;width:285pt'>Türk Mûsikîsi Tarihinde Dönemlendirme
                    Sorunu<br>
                    <font class="font11">Günay Günaydın-Cenk Güray</font></td>
                  <td class=xl70 width=383 style='border-top:none;border-left:none;width:287pt'>Çağdaş
                    Piyano Eserlerinin Konservatuvar Öğrencileri Tarafından Seslendirilme
                    Sıklığı<br>
                    <font class="font11">Mustafa Okan Kızılay</font></td>
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
                    <font class="font12">Oturum Bşk./Chair:</font><font class="font5"> Türev
                      BERKİ</font></td>
                  <td class=xl69 width=383 style='border-top:none;border-left:none;width:287pt'>OTURUM
                    26 / SESSION 26 (<font class="font19">English</font><font class="font5">)<br>
                      Oturum Bşk./Chair: Mehmet Can ÖZER<span style='mso-spacerun:yes'> </span></font></td>
                </tr>
                <tr height=40 style='height:30.0pt'>
                  <td height=40 class=xl70 width=380 style='height:30.0pt;border-top:none;
  border-left:none;width:285pt'>Karşılaştırmalı Bir Müzik Performansı Analizi
                    Örneği:<br>
                    Şostakoviç, Op. 107/III/<font class="font11">Senem Hazal Akın</font></td>
                  <td class=xl74 width=383 style='border-top:none;border-left:none;width:287pt'><font
                        class="font17">Rhythm didactics aspects around Chronos and Kairos<br>
                    </font><font class="font18">Marcus Siqueira</font></td>
                </tr>
                <tr height=40 style='height:30.0pt'>
                  <td height=40 class=xl71 width=380 style='height:30.0pt;border-top:none;
  border-left:none;width:285pt'>Arvo Pärt’in Tintinnabuli Tekniği Üzerine Bir
                    İnceleme<br>
                    <font class="font11">Hasan Ceylan-G.G. Demireriden</font></td>
                  <td class=xl71 width=383 style='border-top:none;border-left:none;width:287pt'>From
                    Figured Bass to Shantytok: Music Theory on Social Media/<font class="font11">Nevin
                      Şahin</font></td>
                </tr>
                <tr height=40 style='height:30.0pt'>
                  <td height=40 class=xl71 width=380 style='height:30.0pt;border-top:none;
  border-left:none;width:285pt'>Semih Korucu Bestesinde<br>
                    Haiku Şiirinin Kullanımı ve Etkileri/<font class="font11">M. E. G. Sarıkaya</font></td>
                  <td class=xl70 width=383 style='border-top:none;border-left:none;width:287pt'>Data
                    Sonification as an Electroacoustic Composition Method/<font class="font11">Ali
                      Serkan Sevilgen-Arda Eden</font></td>
                </tr>
                <tr height=40 style='height:30.0pt'>
                  <td height=40 class=xl71 width=380 style='height:30.0pt;border-top:none;
  border-left:none;width:285pt'>Mahir Çetiz’in Sabah Sabah Eserinde<br>
                    Makam Kullanımının İncelenmesi / <font class="font11">G. E. Yavaş</font></td>
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
                    <font class="font12">Oturum Bşk./Chair:</font><font class="font5"> Gözde
                      Çolakoğlu SARI</font></td>
                  <td class=xl69 width=383 style='border-top:none;border-left:none;width:287pt'>OTURUM
                    28 / SESSION 28<br>
                    <font class="font12">Oturum Bşk./Chair:</font><font class="font5"> M. E.
                      BAYRAKTARKATAL</font></td>
                </tr>
                <tr height=60 style='height:45.0pt'>
                  <td height=60 class=xl70 width=380 style='height:45.0pt;border-top:none;
  border-left:none;width:285pt'>Asdik Ağa’nın “Zülfüne Dil-Besteler, Zülf-ü
                    Rerişanın Kadar” Ağır Aksak Hicaz Şarkısının Eser Kimliği Üzerinden Güfte Ve
                    Makam Analizi / <font class="font11">Y.Aktaş-B.Yetim-C. Torun</font></td>
                  <td class=xl71 width=383 style='border-top:none;border-left:none;width:287pt'>Kürdi
                    Makamının Yapısal Özelliklerine Ezgi Çekirdekleri Yöntemi ile Yeni Bir Bakış
                    / <font class="font11">M.A. Budak-C. Güray</font></td>
                </tr>
                <tr height=60 style='height:45.0pt'>
                  <td height=60 class=xl70 width=380 style='height:45.0pt;border-top:none;
  border-left:none;width:285pt'>Asdik Ağa'nın &quot;Zülfüne-Dil Besteler,
                    Zülf-ü Perişanın Kadar&quot; Hicaz Şarkısının Devlet Korusu Arşivindeki
                    Versiyonlarının Teknik Analizi / <font class="font11">Y. Aktaş-İ. Çelikel</font></td>
                  <td class=xl71 width=383 style='border-top:none;border-left:none;width:287pt'>Flamenko
                    Müziği ve Bozlakların Ezgisel Çekirdek Tabanlı Makam Modeli ile Karşılıklı
                    İncelenmesi<br>
                    <font class="font11">Şule Yıldız-Cenk Güray</font></td>
                </tr>
                <tr height=60 style='height:45.0pt'>
                  <td height=60 class=xl71 width=380 style='height:45.0pt;border-top:none;
  border-left:none;width:285pt'>Meşkin Bileşenlerindeki Fonksiyonel Dönüşümün
                    Klasik Türk Müziği Vokal İcrâcılığa Etkileri / <font class="font11">Ö. Ş.
                      Tuncel</font></td>
                  <td class=xl70 width=383 style='border-top:none;border-left:none;width:287pt'>T.
                    M. Çalgı Eğitiminde Geln. Formların Dışında Konçerto veya Konçertino gibi
                    Formların Tanıtım ve İcra Durumunun Belirlenmesi Üzerine Bir Araşt. / <font
                        class="font11">Oğuz Karakaya</font></td>
                </tr>
                <tr height=60 style='height:45.0pt'>
                  <td height=60 class=xl70 width=380 style='height:45.0pt;border-top:none;
  border-left:none;width:285pt'>Klâsik TM Sözlü Eserlerine Yönelik Yeni Bir
                    Analiz Yönt. ve <br>
                    Yönt. Mûsikîmize Kazandırdıkları: Abdülkâdir Merâgî’ye <br>
                    Atfedilen Hüseynî Kârın Rest. Örn./<font class="font11">S. T. Oter</font></td>
                  <td class=xl71 width=383 style='border-top:none;border-left:none;width:287pt'>Hanefi
                    Özbek Saz Eserlerinin Eğitim Müziği Besteciliği Perspektifinde İncelenmesi / <font
                        class="font11">U.Türkmen-Ö.Bildik</font></td>
                </tr>
                <tr height=20 style='height:15.0pt'>
                  <td height=20 class=xl75 width=44 style='height:15.0pt;border-top:none;
  width:33pt'>15:00
                  </td>
                  <td colspan=2 class=xl81 width=763 style='width:572pt'>ARA / BREAK</td>
                </tr>
                <tr height=57 style='mso-height-source:userset;height:43.0pt'>
                  <td height=57 class=xl72 style='height:43.0pt;border-top:none'>15.15</td>
                  <td colspan=2 class=xl83 width=763 style='width:572pt'>Kapanış /
                    Closing<br>
                    <font class="font23">ZOOM--&gt; ID:</font><font class="font22"> 475 639
                      4770<span style='mso-spacerun:yes'>  </span></font><font class="font23">Passcode:</font><font
                        class="font22"> hisarlisym</font></td>
                </tr>
                <tr height=21 style='height:16.0pt'>
                  <td height=21 class=xl72 style='height:16.0pt;border-top:none'>16.00</td>
                  <td colspan=2 class=xl84 width=763 style='width:572pt'>Yürütme Kurulu
                    Toplantısı / Executive Committee Meeting
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