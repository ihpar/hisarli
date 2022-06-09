<?php
session_start();

$is_secure = true;

$page_name = "program";

require_once "dbms/utils.php";

require_once "modules/header_prefixes.php";

require_once "langs/lang_global.php";

require_once "langs/lang_program.php";
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

    <style id="12thHisarliAhmetPROGRAM_8638_Styles">
        <!--
        table {
            mso-displayed-decimal-separator: "\,";
            mso-displayed-thousand-separator: "\.";
        }

        @page {
            margin: 0in 0in 0in 0in;
            mso-header-margin: 0in;
            mso-footer-margin: 0in;
            mso-horizontal-page-align: center;
            mso-vertical-page-align: center;
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
            font-size: 10.0pt;
            font-weight: 700;
            font-style: normal;
            text-decoration: none;
            font-family: Arial, sans-serif;
            mso-font-charset: 162;
        }

        .font7 {
            color: black;
            font-size: 10.0pt;
            font-weight: 700;
            font-style: normal;
            text-decoration: none;
            font-family: Calibri, sans-serif;
            mso-font-charset: 162;
        }

        .font8 {
            color: black;
            font-size: 9.0pt;
            font-weight: 400;
            font-style: normal;
            text-decoration: none;
            font-family: Arial, sans-serif;
            mso-font-charset: 162;
        }

        .font9 {
            color: black;
            font-size: 11.0pt;
            font-weight: 700;
            font-style: italic;
            text-decoration: none;
            font-family: Arial, sans-serif;
            mso-font-charset: 162;
        }

        .font10 {
            color: black;
            font-size: 11.0pt;
            font-weight: 400;
            font-style: italic;
            text-decoration: none;
            font-family: Arial, sans-serif;
            mso-font-charset: 162;
        }

        .font11 {
            color: black;
            font-size: 11.0pt;
            font-weight: 700;
            font-style: normal;
            text-decoration: none;
            font-family: Arial, sans-serif;
            mso-font-charset: 162;
        }

        .font12 {
            color: black;
            font-size: 10.0pt;
            font-weight: 400;
            font-style: normal;
            text-decoration: none;
            font-family: Calibri, sans-serif;
            mso-font-charset: 0;
        }

        .font13 {
            color: black;
            font-size: 10.0pt;
            font-weight: 700;
            font-style: normal;
            text-decoration: none;
            font-family: Calibri, sans-serif;
            mso-font-charset: 0;
        }

        .font14 {
            color: black;
            font-size: 9.0pt;
            font-weight: 700;
            font-style: normal;
            text-decoration: none;
            font-family: Calibri;
            mso-generic-font-family: auto;
            mso-font-charset: 162;
        }

        .font15 {
            color: black;
            font-size: 9.0pt;
            font-weight: 400;
            font-style: normal;
            text-decoration: none;
            font-family: Calibri, sans-serif;
            mso-font-charset: 0;
        }

        .font16 {
            color: black;
            font-size: 11.0pt;
            font-weight: 400;
            font-style: normal;
            text-decoration: none;
            font-family: Calibri, sans-serif;
            mso-font-charset: 0;
        }

        .font17 {
            color: black;
            font-size: 10.0pt;
            font-weight: 400;
            font-style: normal;
            text-decoration: none;
            font-family: Arial, sans-serif;
            mso-font-charset: 0;
        }

        .font18 {
            color: #C00000;
            font-size: 10.0pt;
            font-weight: 400;
            font-style: normal;
            text-decoration: none;
            font-family: Arial, sans-serif;
            mso-font-charset: 0;
        }

        .font19 {
            color: black;
            font-size: 11.0pt;
            font-weight: 700;
            font-style: normal;
            text-decoration: none;
            font-family: Calibri, sans-serif;
            mso-font-charset: 0;
        }

        .font20 {
            color: #C00000;
            font-size: 11.0pt;
            font-weight: 400;
            font-style: normal;
            text-decoration: none;
            font-family: Calibri, sans-serif;
            mso-font-charset: 0;
        }

        .font21 {
            color: #C00000;
            font-size: 10.0pt;
            font-weight: 700;
            font-style: normal;
            text-decoration: none;
            font-family: Arial, sans-serif;
            mso-font-charset: 162;
        }

        .font22 {
            color: black;
            font-size: 9.0pt;
            font-weight: 700;
            font-style: normal;
            text-decoration: none;
            font-family: Calibri, sans-serif;
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

        .xl63 {
            mso-style-parent: style0;
            font-size: 9.0pt;
            font-weight: 700;
            font-family: Arial, sans-serif;
            mso-font-charset: 162;
            text-align: center;
            vertical-align: middle;
            white-space: normal;
        }

        .xl64 {
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

        .xl65 {
            mso-style-parent: style0;
            text-align: center;
        }

        .xl66 {
            mso-style-parent: style0;
            font-size: 9.0pt;
            font-weight: 700;
            font-family: Arial, sans-serif;
            mso-font-charset: 162;
            text-align: center;
            vertical-align: middle;
            border-top: none;
            border-right: none;
            border-bottom: .5pt solid windowtext;
            border-left: none;
            white-space: normal;
        }

        .xl67 {
            mso-style-parent: style0;
            font-size: 10.0pt;
            font-weight: 700;
            font-family: Arial, sans-serif;
            mso-font-charset: 162;
            mso-number-format: "Short Time";
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid windowtext;
            border-right: none;
            border-bottom: .5pt solid windowtext;
            border-left: .5pt solid windowtext;
            background: #A9D08E;
            mso-pattern: black none;
            white-space: normal;
        }

        .xl68 {
            mso-style-parent: style0;
            font-size: 10.0pt;
            font-family: Calibri, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid windowtext;
            border-right: none;
            border-bottom: .5pt solid black;
            border-left: 1.0pt solid windowtext;
            white-space: normal;
        }

        .xl69 {
            mso-style-parent: style0;
            font-size: 10.0pt;
            font-family: Calibri, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid windowtext;
            border-right: 1.0pt solid windowtext;
            border-bottom: .5pt solid black;
            border-left: .5pt solid black;
            white-space: normal;
        }

        .xl70 {
            mso-style-parent: style0;
            font-size: 10.0pt;
            font-family: Calibri, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid black;
            border-right: none;
            border-bottom: .5pt solid black;
            border-left: 1.0pt solid windowtext;
            white-space: normal;
        }

        .xl71 {
            mso-style-parent: style0;
            font-size: 10.0pt;
            font-family: Calibri, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid black;
            border-right: 1.0pt solid windowtext;
            border-bottom: .5pt solid black;
            border-left: .5pt solid black;
            background: white;
            mso-pattern: black none;
            white-space: normal;
        }

        .xl72 {
            mso-style-parent: style0;
            font-size: 10.0pt;
            font-family: Calibri, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid black;
            border-right: none;
            border-bottom: .5pt solid black;
            border-left: 1.0pt solid windowtext;
            background: white;
            mso-pattern: black none;
            white-space: normal;
        }

        .xl73 {
            mso-style-parent: style0;
            font-size: 10.0pt;
            font-family: Calibri, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid black;
            border-right: 1.0pt solid windowtext;
            border-bottom: .5pt solid black;
            border-left: .5pt solid black;
            white-space: normal;
        }

        .xl74 {
            mso-style-parent: style0;
            font-size: 10.0pt;
            font-family: Calibri, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: none;
            border-right: none;
            border-bottom: none;
            border-left: 1.0pt solid windowtext;
            white-space: normal;
        }

        .xl75 {
            mso-style-parent: style0;
            font-size: 10.0pt;
            font-family: Calibri, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: none;
            border-right: 1.0pt solid windowtext;
            border-bottom: .5pt solid windowtext;
            border-left: .5pt solid black;
            background: white;
            mso-pattern: black none;
            white-space: normal;
        }

        .xl76 {
            mso-style-parent: style0;
            font-size: 10.0pt;
            font-family: Arial, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid windowtext;
            border-right: none;
            border-bottom: none;
            border-left: 1.0pt solid windowtext;
            background: #D4EDF4;
            mso-pattern: black none;
            white-space: normal;
        }

        .xl77 {
            mso-style-parent: style0;
            font-size: 10.0pt;
            font-family: Arial, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid windowtext;
            border-right: 1.0pt solid windowtext;
            border-bottom: none;
            border-left: .5pt solid black;
            background: #D4EDF4;
            mso-pattern: black none;
            white-space: normal;
        }

        .xl78 {
            mso-style-parent: style0;
            font-size: 10.0pt;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid windowtext;
            border-right: .5pt solid black;
            border-bottom: .5pt solid black;
            border-left: 1.0pt solid windowtext;
            white-space: normal;
        }

        .xl79 {
            mso-style-parent: style0;
            font-size: 10.0pt;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid black;
            border-right: .5pt solid black;
            border-bottom: .5pt solid black;
            border-left: 1.0pt solid windowtext;
            white-space: normal;
        }

        .xl80 {
            mso-style-parent: style0;
            font-size: 10.0pt;
            font-family: Calibri, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid black;
            border-right: .5pt solid black;
            border-bottom: .5pt solid black;
            border-left: 1.0pt solid windowtext;
            white-space: normal;
        }

        .xl81 {
            mso-style-parent: style0;
            font-size: 10.0pt;
            font-family: Calibri, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: none;
            border-right: .5pt solid black;
            border-bottom: .5pt solid windowtext;
            border-left: 1.0pt solid windowtext;
            white-space: normal;
        }

        .xl82 {
            mso-style-parent: style0;
            font-size: 10.0pt;
            font-family: Calibri, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: none;
            border-right: 1.0pt solid windowtext;
            border-bottom: .5pt solid windowtext;
            border-left: .5pt solid black;
            white-space: normal;
        }

        .xl83 {
            mso-style-parent: style0;
            font-size: 10.0pt;
            font-family: Calibri, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: none;
            border-right: none;
            border-bottom: .5pt solid black;
            border-left: 1.0pt solid windowtext;
            white-space: normal;
        }

        .xl84 {
            mso-style-parent: style0;
            font-size: 10.0pt;
            font-family: Calibri, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: none;
            border-right: 1.0pt solid windowtext;
            border-bottom: .5pt solid black;
            border-left: .5pt solid black;
            white-space: normal;
        }

        .xl85 {
            mso-style-parent: style0;
            font-size: 10.0pt;
            font-family: Calibri, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: none;
            border-right: none;
            border-bottom: .5pt solid #D9D9D9;
            border-left: 1.0pt solid windowtext;
            background: white;
            mso-pattern: black none;
            white-space: normal;
        }

        .xl86 {
            mso-style-parent: style0;
            font-size: 10.0pt;
            font-weight: 700;
            font-family: Arial, sans-serif;
            mso-font-charset: 162;
            mso-number-format: "Short Time";
            vertical-align: middle;
            border-top: .5pt solid windowtext;
            border-right: none;
            border-bottom: none;
            border-left: none;
            background: #A9D08E;
            mso-pattern: black none;
            white-space: normal;
        }

        .xl87 {
            mso-style-parent: style0;
            font-size: 10.0pt;
            font-weight: 700;
            font-family: Arial, sans-serif;
            mso-font-charset: 162;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid windowtext;
            border-right: .5pt solid black;
            border-bottom: none;
            border-left: 1.0pt solid windowtext;
            background: #D4EDF4;
            mso-pattern: black none;
            white-space: normal;
        }

        .xl88 {
            mso-style-parent: style0;
            font-size: 10.0pt;
            font-weight: 700;
            font-family: Arial, sans-serif;
            mso-font-charset: 162;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid windowtext;
            border-right: 1.0pt solid windowtext;
            border-bottom: none;
            border-left: none;
            background: #D4EDF4;
            mso-pattern: black none;
            white-space: normal;
        }

        .xl89 {
            mso-style-parent: style0;
            font-size: 10.0pt;
            font-weight: 700;
            font-family: Arial, sans-serif;
            mso-font-charset: 162;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid windowtext;
            border-right: none;
            border-bottom: none;
            border-left: 1.0pt solid windowtext;
            background: #D4EDF4;
            mso-pattern: black none;
            white-space: normal;
        }

        .xl90 {
            mso-style-parent: style0;
            font-size: 10.0pt;
            font-weight: 700;
            font-family: Arial, sans-serif;
            mso-font-charset: 162;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid windowtext;
            border-right: 1.0pt solid windowtext;
            border-bottom: none;
            border-left: .5pt solid black;
            background: #D4EDF4;
            mso-pattern: black none;
            white-space: normal;
        }

        .xl91 {
            mso-style-parent: style0;
            font-size: 9.0pt;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid windowtext;
            border-right: none;
            border-bottom: .5pt solid windowtext;
            border-left: 1.0pt solid windowtext;
            background: #FFD966;
            mso-pattern: black none;
            white-space: normal;
        }

        .xl92 {
            mso-style-parent: style0;
            font-size: 9.0pt;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid windowtext;
            border-right: 1.0pt solid windowtext;
            border-bottom: .5pt solid windowtext;
            border-left: .5pt solid black;
            background: #FFD966;
            mso-pattern: black none;
            white-space: normal;
        }

        .xl93 {
            mso-style-parent: style0;
            color: white;
            font-size: 10.0pt;
            font-weight: 700;
            text-align: center;
            vertical-align: top;
            border-top: .5pt solid windowtext;
            border-right: 1.0pt solid windowtext;
            border-bottom: .5pt solid windowtext;
            border-left: none;
            background: black;
            mso-pattern: black none;
            white-space: normal;
        }

        .xl94 {
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
            background: black;
            mso-pattern: black none;
            white-space: normal;
        }

        .xl95 {
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
            border-left: none;
            background: #FFD966;
            mso-pattern: black none;
            white-space: normal;
        }

        .xl96 {
            mso-style-parent: style0;
            font-size: 10.0pt;
            font-family: Calibri, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid windowtext;
            border-right: 1.0pt solid windowtext;
            border-bottom: .5pt solid windowtext;
            border-left: none;
            background: white;
            mso-pattern: black none;
            white-space: normal;
        }

        .xl97 {
            mso-style-parent: style0;
            font-weight: 700;
            font-family: Arial, sans-serif;
            mso-font-charset: 162;
            text-align: center;
            vertical-align: middle;
            border-top: 1.0pt solid windowtext;
            border-right: 1.5pt solid windowtext;
            border-bottom: .5pt solid windowtext;
            border-left: 1.0pt solid windowtext;
            background: #A9D08E;
            mso-pattern: black none;
            white-space: normal;
        }

        .xl98 {
            mso-style-parent: style0;
            font-weight: 700;
            font-family: Arial, sans-serif;
            mso-font-charset: 162;
            text-align: center;
            vertical-align: middle;
            border-top: 1.0pt solid windowtext;
            border-right: 1.0pt solid windowtext;
            border-bottom: .5pt solid windowtext;
            border-left: none;
            background: #A9D08E;
            mso-pattern: black none;
            white-space: normal;
        }

        .xl99 {
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

        .xl100 {
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
            border-left: none;
            background: red;
            mso-pattern: black none;
            white-space: normal;
        }

        .xl101 {
            mso-style-parent: style0;
            color: white;
            font-size: 10.0pt;
            font-weight: 700;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid windowtext;
            border-right: 1.0pt solid windowtext;
            border-bottom: .5pt solid windowtext;
            border-left: 1.0pt solid windowtext;
            background: black;
            mso-pattern: black none;
            white-space: normal;
        }

        .xl102 {
            mso-style-parent: style0;
            font-size: 10.0pt;
            font-family: Calibri, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid windowtext;
            border-right: none;
            border-bottom: .5pt solid windowtext;
            border-left: 1.0pt solid windowtext;
            background: white;
            mso-pattern: black none;
            white-space: normal;
        }

        .xl103 {
            mso-style-parent: style0;
            font-size: 10.0pt;
            font-weight: 700;
            font-family: Arial, sans-serif;
            mso-font-charset: 162;
            mso-number-format: "Short Time";
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid windowtext;
            border-right: 1.0pt solid windowtext;
            border-bottom: none;
            border-left: none;
            background: #A9D08E;
            mso-pattern: black none;
            white-space: normal;
        }

        .xl104 {
            mso-style-parent: style0;
            font-size: 10.0pt;
            font-weight: 700;
            font-family: Arial, sans-serif;
            mso-font-charset: 162;
            mso-number-format: "Short Time";
            text-align: center;
            vertical-align: middle;
            border-top: none;
            border-right: 1.0pt solid windowtext;
            border-bottom: none;
            border-left: none;
            background: #A9D08E;
            mso-pattern: black none;
            white-space: normal;
        }

        .xl105 {
            mso-style-parent: style0;
            font-size: 9.0pt;
            font-weight: 700;
            font-family: Calibri, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid windowtext;
            border-right: 1.0pt solid windowtext;
            border-bottom: .5pt solid windowtext;
            border-left: none;
            background: #FFD966;
            mso-pattern: black none;
            white-space: normal;
        }

        .xl106 {
            mso-style-parent: style0;
            font-size: 10.0pt;
            font-family: Calibri, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid windowtext;
            border-right: none;
            border-bottom: 1.0pt solid windowtext;
            border-left: 1.0pt solid windowtext;
            background: white;
            mso-pattern: black none;
            white-space: normal;
        }

        .xl107 {
            mso-style-parent: style0;
            font-size: 10.0pt;
            font-family: Calibri, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid windowtext;
            border-right: 1.0pt solid windowtext;
            border-bottom: 1.0pt solid windowtext;
            border-left: none;
            background: white;
            mso-pattern: black none;
            white-space: normal;
        }

        .xl108 {
            mso-style-parent: style0;
            color: black;
            font-family: Calibri, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid black;
            border-right: none;
            border-bottom: .5pt solid black;
            border-left: 1.0pt solid windowtext;
            background: #E2EFDA;
            mso-pattern: black none;
            white-space: normal;
        }

        .xl109 {
            mso-style-parent: style0;
            color: black;
            font-family: Calibri, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid black;
            border-right: 1.0pt solid windowtext;
            border-bottom: .5pt solid black;
            border-left: none;
            background: #E2EFDA;
            mso-pattern: black none;
            white-space: normal;
        }

        .xl110 {
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
            background: black;
            mso-pattern: black none;
            white-space: normal;
        }

        .xl111 {
            mso-style-parent: style0;
            font-size: 10.0pt;
            font-weight: 700;
            font-family: Arial, sans-serif;
            mso-font-charset: 162;
            mso-number-format: "Short Time";
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid windowtext;
            border-right: none;
            border-bottom: none;
            border-left: .5pt solid windowtext;
            background: #A9D08E;
            mso-pattern: black none;
            white-space: normal;
        }

        .xl112 {
            mso-style-parent: style0;
            font-size: 10.0pt;
            font-weight: 700;
            font-family: Arial, sans-serif;
            mso-font-charset: 162;
            mso-number-format: "Short Time";
            text-align: center;
            vertical-align: middle;
            border-top: none;
            border-right: none;
            border-bottom: none;
            border-left: .5pt solid windowtext;
            background: #A9D08E;
            mso-pattern: black none;
            white-space: normal;
        }

        .xl113 {
            mso-style-parent: style0;
            font-size: 10.0pt;
            font-weight: 700;
            font-family: Arial, sans-serif;
            mso-font-charset: 162;
            mso-number-format: "Short Time";
            text-align: center;
            vertical-align: middle;
            border-top: none;
            border-right: none;
            border-bottom: .5pt solid windowtext;
            border-left: .5pt solid windowtext;
            background: #A9D08E;
            mso-pattern: black none;
            white-space: normal;
        }

        .xl114 {
            mso-style-parent: style0;
            font-size: 9.0pt;
            font-weight: 700;
            font-family: Arial, sans-serif;
            mso-font-charset: 162;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid windowtext;
            border-right: none;
            border-bottom: .5pt solid windowtext;
            border-left: 1.0pt solid windowtext;
            background: #FFD966;
            mso-pattern: black none;
            white-space: normal;
        }

        -->
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
                    <h3 class="center-text sec-h3"><?php echo($lang_program["program"][$pref_lang]); ?></h3>
                    <!--<p style="text-align: center;">
                <?php echo($lang_program["program_detay"][$pref_lang]); ?>
            </p>-->
                    <div style="width: 100%; display: flex; justify-content: center;">


                        <table border=0 cellpadding=0 cellspacing=0 width=802 style='border-collapse:
 collapse;table-layout:fixed;width:601pt'>
                            <col class=xl65 width=55 style='mso-width-source:userset;mso-width-alt:1749;
 width:41pt'>
                            <col width=375 style='mso-width-source:userset;mso-width-alt:11989;width:281pt'>
                            <col width=372 style='mso-width-source:userset;mso-width-alt:11904;width:279pt'>
                            <tr height=121 style='mso-height-source:userset;height:91.5pt'>
                                <td height=121 class=xl63 width=55 style='height:91.5pt;width:41pt'></td>
                                <td colspan=2 class=xl97 width=747 style='border-right:1.0pt solid black;
  width:560pt'>12. ULUSLARARASI HİSARLI AHMET SEMPOZYUMU <br>
                                    <font class="font10">The 12th International Hisarlı Ahmet Symposium<br>
                                    </font><font class="font9">&quot;Müzik ve İklim&quot;</font><font
                                            class="font10"> / </font><font class="font9">&quot;Music and
                                        Climate&quot;</font><font
                                            class="font11"><br>
                                        9-10-11-12 HAZİRAN/JUNE 2022<br>
                                        www.hisarliahmet.org<br>
                                        P R O G R A M</font></td>
                            </tr>
                            <tr height=21 style='height:16.0pt'>
                                <td height=21 class=xl66 width=55 style='height:16.0pt;width:41pt'>&nbsp;</td>
                                <td colspan=2 class=xl99 width=747 style='border-right:1.0pt solid black;
  width:560pt'>11 HAZİRAN CUMARTESİ / SATURDAY 11 JUNE
                                </td>
                            </tr>
                            <tr height=24 style='mso-height-source:userset;height:18.0pt'>
                                <td rowspan=12 height=404 class=xl111 width=55 style='border-bottom:.5pt solid black;
  height:306.0pt;border-top:none;width:41pt'>10:00
                                </td>
                                <td class=xl87 width=375 style='border-top:none;width:281pt'>Zoom: <font
                                            class="font21">444 333 1743 </font><font class="font6">Passcode:</font><font
                                            class="font21"> hisarlisym</font></td>
                                <td class=xl88 width=372 style='border-top:none;width:279pt'>Zoom: <font
                                            class="font21">588 817 9390 </font><font class="font6">Passcode:</font><font
                                            class="font21"> hisarlisym</font></td>
                            </tr>
                            <tr height=31 style='mso-height-source:userset;height:23.25pt'>
                                <td height=31 class=xl64 width=375 style='height:23.25pt;width:281pt'>OTURUM
                                    16 / SESSION 16<br>
                                    <font class="font8">Oturum Bşk./Chair:</font><font class="font5"> Junrong
                                        Ban</font></td>
                                <td class=xl64 width=372 style='border-left:none;width:279pt'>OTURUM 17 /
                                    SESSION 17<br>
                                    <font class="font8">Oturum Bşk./Chair:</font><font class="font5"><span
                                                style='mso-spacerun:yes'>  </span>Gülnihal Gül</font></td>
                            </tr>
                            <tr height=60 style='height:45.0pt'>
                                <td height=60 class=xl68 width=375 style='height:45.0pt;border-top:none;
  width:281pt'>Cataclysm in Pianistic Expressiveness: the Case of Astrophysical
                                    Frescoes in Sound Form / <font class="font13">Marcus Siqueira - Lilian
                                        Tonella Tüzün</font></td>
                                <td class=xl69 width=372 style='border-top:none;width:279pt'>Telli Çalgı
                                    Yapımında Ağaç Malzeme Temelli Kompozit Yapıların İncelenmesi: Double Top Ses
                                    Tablası Tekniği ve Karbon Fiber Destekli Balkon Tasarımı / <font
                                            class="font13">Emir Değirmenli<span style='mso-spacerun:yes'> </span></font>
                                </td>
                            </tr>
                            <tr height=40 style='height:30.0pt'>
                                <td height=40 class=xl70 width=375 style='height:30.0pt;border-top:none;
  width:281pt'>Saving Soil by Singing Soil<span
                                            style='mso-spacerun:yes'>                                                                          
  </span><font class="font13">Mehmet Ercan</font></td>
                                <td class=xl71 width=372 style='border-top:none;width:279pt'>Müzikte
                                    Sürdürülebilirlik: Arp Çalgısının İki Yüzü<span
                                            style='mso-spacerun:yes'>                                   </span><font
                                            class="font13"><span style='mso-spacerun:yes'> </span>Gözde Ece Yavaş Öztürk</font>
                                </td>
                            </tr>
                            <tr height=40 style='height:30.0pt'>
                                <td height=40 class=xl72 width=375 style='height:30.0pt;border-top:none;
  width:281pt'>Music and Surrounding World<span
                                            style='mso-spacerun:yes'>                                                           
  </span><font class="font13"><span style='mso-spacerun:yes'> </span>Malgorzata
                                        Zarebinska - Piotr Grodecki<span style='mso-spacerun:yes'> </span></font></td>
                                <td class=xl73 width=372 style='border-top:none;width:279pt'>Çalgı Yapımında
                                    Çevre Dostu Biyokompozit Malzemelerin Kullanımı <font class="font13">Özgür
                                        Turan</font><font class="font12"><span
                                                style='mso-spacerun:yes'>                                                                       </span></font>
                                </td>
                            </tr>
                            <tr height=40 style='height:30.0pt'>
                                <td height=40 class=xl74 width=375 style='height:30.0pt;width:281pt'>A
                                    Quartet at the Intersection of Death Metal and Environmental Issues: Gojira /
                                    <font class="font13">İsmail Hakkı Parlak<span
                                                style='mso-spacerun:yes'>      </span></font></td>
                                <td class=xl75 width=372 style='width:279pt'>Piyano Yapımında Sürdürülebilir
                                    Çevre Bilinci: Steinway &amp; Sons / <font class="font13">Sezer Dinçer</font></td>
                            </tr>
                            <tr height=17 style='mso-height-source:userset;height:13.5pt'>
                                <td colspan=2 height=17 class=xl89 width=747 style='border-right:1.0pt solid black;
  height:13.5pt;width:560pt'>Zoom: <font class="font21">930 8731 7549<span
                                                style='mso-spacerun:yes'>  </span></font><font class="font6"><span
                                                style='mso-spacerun:yes'> </span>Passcode:</font><font class="font21">
                                        hisarlisym</font></td>
                            </tr>
                            <tr height=32 style='mso-height-source:userset;height:24.0pt'>
                                <td colspan=2 height=32 class=xl114 width=747 style='border-right:1.0pt solid black;
  height:24.0pt;width:560pt'>OTURUM 18 / SESSION 18<br>
                                    <font class="font8">Oturum Bşk./Chair:</font><font class="font5"> Onur
                                        Dülger</font></td>
                            </tr>
                            <tr height=32 style='mso-height-source:userset;height:24.75pt'>
                                <td colspan=2 height=32 class=xl102 width=747 style='border-right:1.0pt solid black;
  height:24.75pt;width:560pt'>Doğadan İlham Alan Besteci Claude Debussy ve
                                    Kardaki Adımlar Adlı Prelüdünün Analizi /<font class="font13"> İpek
                                        Akanay<span style='mso-spacerun:yes'> </span></font></td>
                            </tr>
                            <tr height=32 style='mso-height-source:userset;height:24.75pt'>
                                <td colspan=2 height=32 class=xl102 width=747 style='border-right:1.0pt solid black;
  height:24.75pt;width:560pt'>İklim Değişikliği ve Müzik İlişkisi: Efe
                                    Çalımlı'nın Yeryüzünden Şarkılar Adlı Solo Piyano Yapıtı Üzerine Bir İnceleme
                                    / <font class="font13">İpek Akanay<span style='mso-spacerun:yes'> </span></font>
                                </td>
                            </tr>
                            <tr height=32 style='mso-height-source:userset;height:24.75pt'>
                                <td colspan=2 height=32 class=xl102 width=747 style='border-right:1.0pt solid black;
  height:24.75pt;width:560pt'>Peter Tschaikowsky'nin Opus 37 Mevsimler Temalı
                                    Piyano Eserlerinin Tonal ve Metrik Zaman Açısından İncelenmesi / <font
                                            class="font13">Levent Ünlü</font></td>
                            </tr>
                            <tr height=24 style='mso-height-source:userset;height:18.0pt'>
                                <td colspan=2 height=24 class=xl102 width=747 style='border-right:1.0pt solid black;
  height:18.0pt;width:560pt'>Igor Stravinsky'nin Bahar Ayini Bale Süiti İle
                                    Müziğin Hafızadaki Yer Ve Mekân İlişkisi / <font class="font13">Hüseyin Onur
                                        Üzülmez</font></td>
                            </tr>
                            <tr height=16 style='mso-height-source:userset;height:12.75pt'>
                                <td height=16 class=xl67 width=55 style='height:12.75pt;border-top:none;
  width:41pt'>11:30
                                </td>
                                <td colspan=2 class=xl101 width=747 style='width:560pt'>ARA / BREAK</td>
                            </tr>
                            <tr height=76 style='mso-height-source:userset;height:57.75pt'>
                                <td height=76 class=xl67 width=55 style='height:57.75pt;border-top:none;
  width:41pt'>11:45
                                </td>
                                <td colspan=2 class=xl108 width=747 style='border-right:1.0pt solid black;
  width:560pt'><font class="font19">DAVETLİ KONUŞMACI / KEYNOTE SPEAKER<br>
                                    </font><font class="font16"><span style='mso-spacerun:yes'> </span>Zoom:
                                    </font><font
                                            class="font20">444 333 1743</font><font class="font16">
                                        Passcode: </font><font
                                            class="font20">hisarlisym</font><font class="font19"><br>
                                        The Sound Landscapes of Arctic<br>
                                        Oksana Dobzhanskaya </font><font class="font16">(Arctic State Institute of
                                        Culture and Arts, Russia)<span style='mso-spacerun:yes'>    </span></font></td>
                            </tr>
                            <tr height=16 style='mso-height-source:userset;height:12.0pt'>
                                <td height=16 class=xl67 width=55 style='height:12.0pt;border-top:none;
  width:41pt'>12:45
                                </td>
                                <td colspan=2 class=xl110 width=747 style='border-right:1.0pt solid black;
  width:560pt'>ÖĞLE YEMEĞİ / LUNCH
                                </td>
                            </tr>
                            <tr height=20 style='height:15.0pt'>
                                <td rowspan=12 height=428 class=xl111 width=55 style='border-bottom:.5pt solid black;
  height:321.5pt;border-top:none;width:41pt'>13:30
                                </td>
                                <td class=xl89 width=375 style='border-top:none;width:281pt'>Zoom: <font
                                            class="font21">444 333 1743 </font><font class="font6">Passcode:</font><font
                                            class="font21"> hisarlisym</font></td>
                                <td class=xl90 width=372 style='border-top:none;width:279pt'>Zoom: <font
                                            class="font21">588 817 9390 </font><font class="font6">Passcode:</font><font
                                            class="font21"> hisarlisym</font></td>
                            </tr>
                            <tr height=33 style='mso-height-source:userset;height:25.25pt'>
                                <td height=33 class=xl64 width=375 style='height:25.25pt;width:281pt'>OTURUM
                                    19 / SESSION 19<br>
                                    <font class="font8">Oturum Bşk./Chair:</font><font class="font5">
                                        Malgorzata Zarebinska</font></td>
                                <td class=xl64 width=372 style='border-left:none;width:279pt'>OTURUM 20 /
                                    SESSION 20<br>
                                    <font class="font8">Oturum Bşk./Chair:</font><font class="font5"> Erhan
                                        Tekin</font></td>
                            </tr>
                            <tr height=60 style='height:45.0pt'>
                                <td height=60 class=xl78 width=375 style='height:45.0pt;border-top:none;
  width:281pt'>Afyonkarahisar Termal Kaplıcalarında Rahatlatıcı Müzikler 'Bir
                                    Soundscape Çalışması' / <font class="font7">Sergen Sağdıç<span
                                                style='mso-spacerun:yes'> </span></font></td>
                                <td class=xl69 width=372 style='border-top:none;border-left:none;width:279pt'>Güzel
                                    Sanatlar Eğitimi Öğretmen Adaylarının Öz Duyarlık, Çevresel Duyarlılık ve
                                    Küresel İklim Değişikliğine Yönelik Farkındalık Düzeylerinin İncelenmesi / <font
                                            class="font13">B. Ustaoğlu - Seda Eden Ünlü</font><font class="font12"><span
                                                style='mso-spacerun:yes'>                                                              </span></font>
                                </td>
                            </tr>
                            <tr height=60 style='height:45.0pt'>
                                <td height=60 class=xl79 width=375 style='height:45.0pt;border-top:none;
  width:281pt'>Göçebe Türk Kültüründe Müzik ve Çalgılar Üzerine Bir
                                    İnceleme<span style='mso-spacerun:yes'>  </span><font class="font7">Muzaffer
                                        Soner Yılmaz</font></td>
                                <td class=xl73 width=372 style='border-top:none;border-left:none;width:279pt'>Müzik
                                    Eğitiminde Çevre Eğitimi ve İklim Değişikliğine Yönelik Öğretim
                                    Programlarının İncelenmesi<span
                                            style='mso-spacerun:yes'>                                                                             
  </span>S<font class="font13">elin Özdemir - Derya Kıraç Sabzehzar</font></td>
                            </tr>
                            <tr height=40 style='height:30.0pt'>
                                <td height=40 class=xl80 width=375 style='height:30.0pt;border-top:none;
  width:281pt'>Müzik Performansında Bellek ve Ezber İlişkisi<span
                                            style='mso-spacerun:yes'>             </span><font class="font13"><span
                                                style='mso-spacerun:yes'>                        </span>NihanYağışan</font>
                                </td>
                                <td class=xl73 width=372 style='border-top:none;border-left:none;width:279pt'>Küresel
                                    Değişimin Yarattığı Mental Sorunlar Ve Piyano Eğitiminin İyileşme Sürecindeki
                                    Olumlu Etkileri / <font class="font13">Çağdaş Alapınar Gençay </font><font
                                            class="font12"><span style='mso-spacerun:yes'>     </span></font></td>
                            </tr>
                            <tr height=40 style='height:30.0pt'>
                                <td height=40 class=xl81 width=375 style='height:30.0pt;width:281pt'>Küresel
                                    Salgınn Sektöre Yansıması: Müzik Emekçileri ne Diyor?<font class="font13">Mert
                                        Ergül - Şevval Satıcı - Ahmet Serkan Ece<span
                                                style='mso-spacerun:yes'> </span></font></td>
                                <td class=xl82 width=372 style='border-left:none;width:279pt'>Konservatuvar
                                    Eğitiminde İklim Değişikliğine Yönelik Farkındalık Temalı Öğrenci
                                    Etkinlikleri / <font class="font13">Şafak Ceyhan<span
                                                style='mso-spacerun:yes'> </span></font></td>
                            </tr>
                            <tr height=16 style='mso-height-source:userset;height:12.0pt'>
                                <td colspan=2 height=16 class=xl89 width=747 style='border-right:1.0pt solid black;
  height:12.0pt;width:560pt'><span style='mso-spacerun:yes'> </span>Zoom: <font
                                            class="font21">930 8731 7549<span style='mso-spacerun:yes'>   </span></font><font
                                            class="font6"><span style='mso-spacerun:yes'> </span>Passcode:</font><font
                                            class="font21"> hisarlisym</font></td>
                            </tr>
                            <tr height=32 style='mso-height-source:userset;height:24.0pt'>
                                <td colspan=2 height=32 class=xl114 width=747 style='border-right:1.0pt solid black;
  height:24.0pt;width:560pt'>OTURUM 21 / SESSION 21<br>
                                    <font class="font8">Oturum Bşk./Chair:</font><font class="font5"> İlknur
                                        Özal Göncü</font></td>
                            </tr>
                            <tr height=32 style='mso-height-source:userset;height:24.0pt'>
                                <td colspan=2 height=32 class=xl102 width=747 style='border-right:1.0pt solid black;
  height:24.0pt;width:560pt'>Çocuklarda Müzik Eğitimi Yoluyla İklim ve Çevre
                                    Bilinci Oluşturma / <font class="font13">Özlem Doğan<span
                                                style='mso-spacerun:yes'> </span></font></td>
                            </tr>
                            <tr height=20 style='mso-height-source:userset;height:15.0pt'>
                                <td colspan=2 height=20 class=xl102 width=747 style='border-right:1.0pt solid black;
  height:15.0pt;width:560pt'>İklim Bilinci Oluşturmada Öğrenci Çabaları 'Kara
                                    Deniz ve Gökyüzü Üzerine Şiirler Şarkılar'/<font class="font13"> Özcan
                                        Aksu<span style='mso-spacerun:yes'> </span></font></td>
                            </tr>
                            <tr height=35 style='mso-height-source:userset;height:26.25pt'>
                                <td colspan=2 height=35 class=xl102 width=747 style='border-right:1.0pt solid black;
  height:26.25pt;width:560pt'>Eğitim Bilişim Ağı Platformu Müzik Dersi
                                    Materyallerinin 'Sürdürülebilir Çevre Eğitimi' Bağlamında İncelenmesi<span
                                            style='mso-spacerun:yes'>                                                  
  </span><font class="font13">Ayşegül Göklen - SezerDinçer</font></td>
                            </tr>
                            <tr height=40 style='mso-height-source:userset;height:30.0pt'>
                                <td colspan=2 height=40 class=xl102 width=747 style='border-right:1.0pt solid black;
  height:30.0pt;width:560pt'>Güzel Sanatlar Liseleri Koro Şeflerinin Yıllık
                                    Dağar Oluşturma Ölçütleri: Güneydoğu Anadolu Bölgesi Örneği / <font
                                            class="font13">Goncagül İşler</font></td>
                            </tr>
                            <tr height=16 style='mso-height-source:userset;height:12.0pt'>
                                <td height=16 class=xl86 width=55 style='height:12.0pt;border-top:none;
  width:41pt'>15.00
                                </td>
                                <td colspan=2 class=xl94 width=747 style='width:560pt'>ARA / BREAK</td>
                            </tr>
                            <tr height=16 style='mso-height-source:userset;height:12.75pt'>
                                <td rowspan=13 height=470 class=xl103 width=55 style='height:354.0pt;
  width:41pt'>15.30
                                </td>
                                <td class=xl76 width=375 style='border-top:none;border-left:none;width:281pt'><span
                                            style='mso-spacerun:yes'> </span>Zoom: <font class="font18">444 333
                                        1743 </font><font
                                            class="font17">Passcode:</font><font class="font18"> hisarlisym</font></td>
                                <td class=xl77 width=372 style='border-top:none;width:279pt'><span
                                            style='mso-spacerun:yes'> </span>Zoom: <font class="font18">588 817
                                        9390 </font><font
                                            class="font17">Passcode:</font><font class="font18"> hisarlisym</font></td>
                            </tr>
                            <tr height=35 style='mso-height-source:userset;height:26.25pt'>
                                <td height=35 class=xl91 width=375 style='height:26.25pt;border-left:none;
  width:281pt'><font class="font22">Oturum 13 / Session 13</font><font
                                            class="font15"><br>
                                        Oturum Bşk./Chair: </font><font class="font14">Oksana Dobzhanskaya</font></td>
                                <td class=xl92 width=372 style='width:279pt'><font class="font22">Oturum 14 /
                                        Session 14</font><font class="font15"><br>
                                        Oturum Bşk./Chair: </font><font class="font14">Ayten Kaplan</font></td>
                            </tr>
                            <tr height=60 style='height:45.0pt'>
                                <td height=60 class=xl68 width=375 style='height:45.0pt;border-top:none;
  border-left:none;width:281pt'>Voices of Birds and Animals in the Arctic Sound
                                    Landscape (Using Yukaghir Musical Folklore as an Example)<span
                                            style='mso-spacerun:yes'>                                                                     
  </span><font class="font13">Tatiana Ignatieva - Yuri Sheikin</font></td>
                                <td class=xl69 width=372 style='border-top:none;width:279pt'>Hâzâ Mecmuâ-i
                                    Sâz ü Söz İçinde Bûselik Faslındaki Eserlerin 18. ve 19.yy Bûselik Makam
                                    Seyirleri ile Karşılaştırılması/ <font class="font13">Oğuz Karakaya - Elif
                                        Yıldırım Afacan</font></td>
                            </tr>
                            <tr height=60 style='height:45.0pt'>
                                <td height=60 class=xl70 width=375 style='height:45.0pt;border-top:none;
  border-left:none;width:281pt'>Aeolophones in the System of Musical
                                    Instruments and Sound Instruments of the Sakha / <font class="font13">Varvara
                                        Dyakonova</font></td>
                                <td class=xl73 width=372 style='border-top:none;width:279pt'>Hafıza, Mekân ve
                                    Müzik Perspektifinde Hamparsum Müzik Yazısı ve Mevlevihane Olgusunun
                                    Sosyo-Kültürel Çözümlemesi/ <font class="font13">Z. Tülin Değirmenci - Turan
                                        Sağer<span style='mso-spacerun:yes'> </span></font></td>
                            </tr>
                            <tr height=56 style='mso-height-source:userset;height:42.0pt'>
                                <td height=56 class=xl83 width=375 style='height:42.0pt;border-left:none;
  width:281pt'>Historical Audio Records Reviving the Ancient Knowledge About
                                    The Unity of A Man With The Animal World<span
                                            style='mso-spacerun:yes'>                                              
  </span><font class="font13">Aigerim Baribayeva</font></td>
                                <td class=xl84 width=372 style='width:279pt'>İnsan, Doğa ve Kültür İlişkisi
                                    Bağlamında Türkülerde &quot;Mevsim&quot; Sembolizmi / <font class="font13">Hüseyin
                                        Yücebağ</font></td>
                            </tr>
                            <tr height=56 style='mso-height-source:userset;height:42.0pt'>
                                <td height=56 class=xl70 width=375 style='height:42.0pt;border-top:none;
  border-left:none;width:281pt'>The Interdisciplinary Conversation Between
                                    Music and Climate: How Three Composers Demonstrate the Seasonal Changes / <font
                                            class="font13">Kailang Zhan<span style='mso-spacerun:yes'> </span></font>
                                </td>
                                <td class=xl73 width=372 style='border-top:none;width:279pt'>Malatya
                                    Türkülerinin Coğrafi Öğeler Yönünden Analizi<span
                                            style='mso-spacerun:yes'>                      </span><font class="font13">Ersan
                                        Çiftçi - Özgür Sakalıuzun<span style='mso-spacerun:yes'> </span></font></td>
                            </tr>
                            <tr height=55 style='mso-height-source:userset;height:41.25pt'>
                                <td height=55 class=xl85 width=375 style='height:41.25pt;border-left:none;
  width:281pt'>A Pesna of the Nature<span
                                            style='mso-spacerun:yes'>                                                           
  </span><font class="font13"><span
                                                style='mso-spacerun:yes'>                         </span>Berkant Gençkal<span
                                                style='mso-spacerun:yes'> </span></font></td>
                                <td class=xl82 width=372 style='width:279pt'>Tarihin Sonik Kalıntılarına
                                    İşitsel Peyzaj Perspektifinden Bir Bakış Malatya 'Arslantepe Höyüğü'
                                    Örneklemi<span
                                            style='mso-spacerun:yes'>                                            </span><font
                                            class="font13">Mehmet Kurtuluş - Mehmet Emin Şen - Can Paşa</font></td>
                            </tr>
                            <tr height=20 style='mso-height-source:userset;height:15.0pt'>
                                <td colspan=2 height=20 class=xl89 width=747 style='border-right:1.0pt solid black;
  height:15.0pt;border-left:none;width:560pt'>Zoom: <font class="font21">930
                                        8731 7549<span style='mso-spacerun:yes'>   </span></font><font
                                            class="font6"><span
                                                style='mso-spacerun:yes'> </span>Passcode:</font><font class="font21">
                                        hisarlisym</font></td>
                            </tr>
                            <tr height=32 style='mso-height-source:userset;height:24.75pt'>
                                <td colspan=2 height=32 class=xl91 width=747 style='border-right:1.0pt solid black;
  height:24.75pt;border-left:none;width:560pt'><font class="font22">Oturum 15 /
                                        Session 15</font><font class="font15"><br>
                                        Oturum Bşk./Chair: </font><font class="font14">Cenk Güray</font></td>
                            </tr>
                            <tr height=20 style='mso-height-source:userset;height:15.0pt'>
                                <td colspan=2 height=20 class=xl102 width=747 style='border-right:1.0pt solid black;
  height:15.0pt;border-left:none;width:560pt'>Endülüs Müziğinde Göç ve İklim
                                    Etkisi /<font class="font13"> Adil Koray Barut<span
                                                style='mso-spacerun:yes'> </span></font></td>
                            </tr>
                            <tr height=20 style='mso-height-source:userset;height:15.0pt'>
                                <td colspan=2 height=20 class=xl102 width=747 style='border-right:1.0pt solid black;
  height:15.0pt;border-left:none;width:560pt'>Mario Castelnuovo ve Göç / <font
                                            class="font13">Baturhan Bayram<span style='mso-spacerun:yes'> </span></font>
                                </td>
                            </tr>
                            <tr height=20 style='height:15.0pt'>
                                <td colspan=2 height=20 class=xl102 width=747 style='border-right:1.0pt solid black;
  height:15.0pt;border-left:none;width:560pt'>Göç Unsurunun Müzik Üzerindeki
                                    Etkileri: Âşık Deryâmî /<font class="font13"> Deniz Beyhan - Sertan
                                        Demir<span style='mso-spacerun:yes'> </span></font></td>
                            </tr>
                            <tr height=20 style='mso-height-source:userset;height:15.0pt'>
                                <td colspan=2 height=20 class=xl106 width=747 style='border-right:1.0pt solid black;
  height:15.0pt;border-left:none;width:560pt'>Uyum mu, Uyumsuzluk mu? / <font
                                            class="font13">Selin Oyan Küpeli<span
                                                style='mso-spacerun:yes'> </span></font></td>
                            </tr>
                            <![if supportMisalignedColumns]>
                            <tr height=0 style='display:none'>
                                <td width=55 style='width:41pt'></td>
                                <td width=375 style='width:281pt'></td>
                                <td width=372 style='width:279pt'></td>
                            </tr>
                            <![endif]>
                        </table>


                    </div>
                    <!-- Eof word table -->
                </div>
            </section>

        </div>


        <!-- Eof Icerik -->

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