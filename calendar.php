<?php
session_start();

$is_secure = true;

$page_name = "template";

require_once "dbms/utils.php";

require_once "modules/header_prefixes.php";

require_once "langs/lang_global.php";

require_once "langs/lang_calendar.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once("modules/header_includes.php"); ?>
    <style type="text/css">
        .pad-10-per {
            padding: 0 10px;
            margin-left: auto;
            margin-right: auto;
            overflow: hidden;
        }

        .cerceve {
            border-style: solid;
            border-width: 16px;
            border-color: #bbb;
            padding: 16px;
            width: -moz-fit-content;
            margin-left: auto;
            margin-right: auto;
            overflow: auto;
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

    <style id="etkinliklertakvimi_8117_Styles">
        <!--
        table {
            mso-displayed-decimal-separator: "\,";
            mso-displayed-thousand-separator: "\.";
        }

        @page {
            margin: .39in 0in .39in 0in;
            mso-header-margin: 0in;
            mso-footer-margin: 0in;
            mso-page-orientation: landscape;
        }

        .font5 {
            color: black;
            font-size: 16.0pt;
            font-weight: 700;
            font-style: normal;
            text-decoration: none;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
        }

        .font6 {
            color: black;
            font-size: 16.0pt;
            font-weight: 400;
            font-style: normal;
            text-decoration: none;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
        }

        .font7 {
            color: windowtext;
            font-size: 16.0pt;
            font-weight: 400;
            font-style: normal;
            text-decoration: none;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
        }

        .font8 {
            color: windowtext;
            font-size: 16.0pt;
            font-weight: 700;
            font-style: normal;
            text-decoration: none;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
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

        .style16 {
            color: #44546A;
            font-size: 11.0pt;
            font-weight: 700;
            font-style: normal;
            text-decoration: none;
            font-family: Calibri, sans-serif;
            mso-font-charset: 162;
            border-top: none;
            border-right: none;
            border-bottom: 1.0pt solid #8EA9DB;
            border-left: none;
            mso-style-name: "Heading 3";
            mso-style-id: 18;
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

        .style17 {
            mso-number-format: "\[$-409\]h\:mm\\ AM\/PM\;\@";
            mso-protection: locked visible;
            mso-style-name: Zaman;
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

        .xl64 {
            mso-style-parent: style0;
            color: windowtext;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
            text-align: left;
            vertical-align: middle;
            white-space: normal;
            padding-left: 6px;
            mso-char-indent-count: 1;
        }

        .xl65 {
            mso-style-parent: style0;
            color: windowtext;
            font-size: 14.0pt;
            font-weight: 700;
            font-family: Corbel, sans-serif;
            mso-font-charset: 162;
            text-align: left;
            vertical-align: middle;
            white-space: normal;
            padding-left: 6px;
            mso-char-indent-count: 1;
        }

        .xl66 {
            mso-style-parent: style0;
            color: #633F32;
            font-size: 12.0pt;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
            text-align: left;
            vertical-align: middle;
            border-top: .5pt solid #B88472;
            border-right: .5pt solid #B88472;
            border-bottom: .5pt solid #B88472;
            border-left: 1.5pt solid #B88472;
            white-space: normal;
            padding-left: 6px;
            mso-char-indent-count: 1;
        }

        .xl67 {
            mso-style-parent: style0;
            color: black;
            font-size: 12.0pt;
            font-weight: 700;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid #B88472;
            border-right: .5pt solid #B88472;
            border-bottom: .5pt solid #B88472;
            border-left: 1.5pt solid #B88472;
            background: white;
            mso-pattern: black none;
            white-space: normal;
            padding-left: 6px;
            mso-char-indent-count: 1;
        }

        .xl68 {
            mso-style-parent: style0;
            color: black;
            font-size: 16.0pt;
            font-weight: 700;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid #B88472;
            border-right: 1.5pt solid #B88472;
            border-bottom: .5pt solid #B88472;
            border-left: .5pt solid #B88472;
            background: aqua;
            mso-pattern: black none;
            white-space: normal;
            padding-left: 6px;
            mso-char-indent-count: 1;
        }

        .xl69 {
            mso-style-parent: style0;
            color: black;
            font-size: 16.0pt;
            font-weight: 700;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border: .5pt solid #B88472;
            background: aqua;
            mso-pattern: black none;
            white-space: normal;
            padding-left: 6px;
            mso-char-indent-count: 1;
        }

        .xl70 {
            mso-style-parent: style0;
            color: black;
            font-size: 16.0pt;
            font-weight: 700;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid #B88472;
            border-right: none;
            border-bottom: .5pt solid #B88472;
            border-left: .5pt solid #B88472;
            background: aqua;
            mso-pattern: black none;
            white-space: normal;
        }

        .xl71 {
            mso-style-parent: style0;
            color: #633F32;
            font-size: 16.0pt;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
            text-align: left;
            vertical-align: middle;
            border-top: .5pt solid #B88472;
            border-right: 1.5pt solid #B88472;
            border-bottom: .5pt solid #B88472;
            border-left: .5pt solid #B88472;
            white-space: normal;
            padding-left: 6px;
            mso-char-indent-count: 1;
        }

        .xl72 {
            mso-style-parent: style16;
            color: #633F32;
            font-size: 18.0pt;
            font-weight: 700;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid #B88472;
            border-right: 1.5pt solid #B88472;
            border-bottom: .5pt solid #B88472;
            border-left: .5pt solid #B88472;
            background: #ECF0F4;
            mso-pattern: black none;
            white-space: normal;
            padding-left: 6px;
            mso-char-indent-count: 1;
        }

        .xl73 {
            mso-style-parent: style0;
            color: #633F32;
            font-size: 18.0pt;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
            text-align: left;
            vertical-align: middle;
            border-top: .5pt solid #B88472;
            border-right: 1.5pt solid #B88472;
            border-bottom: .5pt solid #B88472;
            border-left: .5pt solid #B88472;
            white-space: normal;
            padding-left: 6px;
            mso-char-indent-count: 1;
        }

        .xl74 {
            mso-style-parent: style16;
            color: #633F32;
            font-size: 18.0pt;
            font-weight: 700;
            font-family: Corbel, sans-serif;
            mso-font-charset: 162;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid #B88472;
            border-right: .5pt solid #B88472;
            border-bottom: .5pt solid #B88472;
            border-left: 1.5pt solid #B88472;
            background: #ECF0F4;
            mso-pattern: black none;
            white-space: normal;
            padding-left: 6px;
            mso-char-indent-count: 1;
        }

        .xl75 {
            mso-style-parent: style0;
            color: black;
            font-size: 16.0pt;
            font-weight: 700;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid #B88472;
            border-right: none;
            border-bottom: .5pt solid #B88472;
            border-left: 1.5pt solid #B88472;
            background: aqua;
            mso-pattern: black none;
            white-space: normal;
        }

        .xl76 {
            mso-style-parent: style0;
            color: black;
            font-size: 16.0pt;
            font-weight: 700;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid #B88472;
            border-right: 1.5pt solid #B88472;
            border-bottom: .5pt solid #B88472;
            border-left: .5pt solid #B88472;
            background: aqua;
            mso-pattern: black none;
            white-space: normal;
        }

        .xl77 {
            mso-style-parent: style0;
            color: #633F32;
            font-size: 16.0pt;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
            text-align: left;
            vertical-align: middle;
            border-top: .5pt solid #B88472;
            border-right: none;
            border-bottom: .5pt solid #B88472;
            border-left: none;
            white-space: normal;
            padding-left: 6px;
            mso-char-indent-count: 1;
        }

        .xl78 {
            mso-style-parent: style0;
            color: black;
            font-size: 16.0pt;
            font-weight: 700;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
            vertical-align: middle;
            border-top: .5pt solid #B88472;
            border-right: none;
            border-bottom: .5pt solid #B88472;
            border-left: none;
            background: white;
            mso-pattern: black none;
            white-space: normal;
        }

        .xl79 {
            mso-style-parent: style0;
            color: black;
            font-size: 16.0pt;
            font-weight: 700;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid #B88472;
            border-right: none;
            border-bottom: .5pt solid #B88472;
            border-left: none;
            background: white;
            mso-pattern: black none;
            white-space: normal;
        }

        .xl80 {
            mso-style-parent: style0;
            color: black;
            font-size: 16.0pt;
            font-weight: 700;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
            vertical-align: middle;
            border-top: .5pt solid #B88472;
            border-right: 1.5pt solid #B88472;
            border-bottom: .5pt solid #B88472;
            border-left: none;
            background: white;
            mso-pattern: black none;
            white-space: normal;
        }

        .xl81 {
            mso-style-parent: style0;
            color: black;
            font-size: 16.0pt;
            font-weight: 700;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid #B88472;
            border-right: .5pt solid #B88472;
            border-bottom: .5pt solid #B88472;
            border-left: 1.5pt solid #B88472;
            background: #FF99FF;
            mso-pattern: black none;
            white-space: normal;
            padding-left: 6px;
            mso-char-indent-count: 1;
        }

        .xl82 {
            mso-style-parent: style0;
            color: #633F32;
            font-size: 16.0pt;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid #B88472;
            border-right: .5pt solid #B88472;
            border-bottom: none;
            border-left: 1.5pt solid #B88472;
            white-space: normal;
        }

        .xl83 {
            mso-style-parent: style0;
            color: black;
            font-size: 16.0pt;
            font-weight: 700;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid #B88472;
            border-right: .5pt solid #B88472;
            border-bottom: .5pt solid #B88472;
            border-left: 1.5pt solid #B88472;
            background: aqua;
            mso-pattern: black none;
            white-space: normal;
        }

        .xl84 {
            mso-style-parent: style0;
            color: black;
            font-size: 16.0pt;
            font-weight: 700;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid #B88472;
            border-right: 1.5pt solid #B88472;
            border-bottom: .5pt solid #B88472;
            border-left: .5pt solid #B88472;
            background: white;
            mso-pattern: black none;
            white-space: normal;
            padding-left: 6px;
            mso-char-indent-count: 1;
        }

        .xl85 {
            mso-style-parent: style0;
            color: black;
            font-size: 16.0pt;
            font-weight: 700;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid #B88472;
            border-right: none;
            border-bottom: .5pt solid #B88472;
            border-left: none;
            background: white;
            mso-pattern: black none;
            white-space: normal;
            padding-left: 6px;
            mso-char-indent-count: 1;
        }

        .xl86 {
            mso-style-parent: style0;
            color: black;
            font-size: 16.0pt;
            font-weight: 700;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid #B88472;
            border-right: 1.5pt solid #B88472;
            border-bottom: .5pt solid #B88472;
            border-left: none;
            background: white;
            mso-pattern: black none;
            white-space: normal;
            padding-left: 6px;
            mso-char-indent-count: 1;
        }

        .xl87 {
            mso-style-parent: style0;
            color: #633F32;
            font-size: 16.0pt;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
            vertical-align: middle;
            border-top: .5pt solid #B88472;
            border-right: .5pt solid #B88472;
            border-bottom: .5pt solid #B88472;
            border-left: 1.5pt solid #B88472;
            white-space: normal;
        }

        .xl88 {
            mso-style-parent: style0;
            color: white;
            font-size: 16.0pt;
            font-weight: 700;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid #B88472;
            border-right: none;
            border-bottom: .5pt solid #B88472;
            border-left: .5pt solid #B88472;
            background: red;
            mso-pattern: black none;
            white-space: normal;
        }

        .xl89 {
            mso-style-parent: style0;
            color: black;
            font-size: 16.0pt;
            font-weight: 700;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid #B88472;
            border-right: none;
            border-bottom: .5pt solid #B88472;
            border-left: 1.5pt solid #B88472;
            background: white;
            mso-pattern: black none;
            white-space: normal;
        }

        .xl90 {
            mso-style-parent: style0;
            color: black;
            font-size: 16.0pt;
            font-weight: 700;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid #B88472;
            border-right: 1.5pt solid #B88472;
            border-bottom: .5pt solid #B88472;
            border-left: none;
            background: white;
            mso-pattern: black none;
            white-space: normal;
        }

        .xl91 {
            mso-style-parent: style0;
            color: white;
            font-size: 16.0pt;
            font-weight: 700;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid #B88472;
            border-right: none;
            border-bottom: .5pt solid #B88472;
            border-left: none;
            background: white;
            mso-pattern: black none;
            white-space: normal;
        }

        .xl92 {
            mso-style-parent: style0;
            color: windowtext;
            font-size: 16.0pt;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
            vertical-align: middle;
            border-top: none;
            border-right: .5pt solid #B88472;
            border-bottom: none;
            border-left: none;
            white-space: normal;
        }

        .xl93 {
            mso-style-parent: style16;
            color: #633F32;
            font-size: 18.0pt;
            font-weight: 700;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid #B88472;
            border-right: .5pt solid #B88472;
            border-bottom: .5pt solid #B88472;
            border-left: none;
            background: #ECF0F4;
            mso-pattern: black none;
            white-space: normal;
            padding-left: 6px;
            mso-char-indent-count: 1;
        }

        .xl94 {
            mso-style-parent: style17;
            color: #633F32;
            font-size: 18.0pt;
            font-weight: 700;
            font-family: Corbel, sans-serif;
            mso-font-charset: 162;
            mso-number-format: "hh\:mm\;\@";
            text-align: center;
            vertical-align: middle;
            border: .5pt solid #B88472;
            background: #FEF8E4;
            mso-pattern: black none;
            white-space: normal;
            padding-left: 6px;
            mso-char-indent-count: 1;
        }

        .xl95 {
            mso-style-parent: style0;
            color: windowtext;
            font-size: 16.0pt;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid #B88472;
            border-right: none;
            border-bottom: .5pt solid #B88472;
            border-left: .5pt solid #B88472;
            background: #C6E0B4;
            mso-pattern: black none;
            white-space: normal;
        }

        .xl96 {
            mso-style-parent: style0;
            color: windowtext;
            font-size: 16.0pt;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid #B88472;
            border-right: none;
            border-bottom: .5pt solid #B88472;
            border-left: none;
            background: #C6E0B4;
            mso-pattern: black none;
            white-space: normal;
        }

        .xl97 {
            mso-style-parent: style0;
            color: windowtext;
            font-size: 16.0pt;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid #B88472;
            border-right: .5pt solid #B88472;
            border-bottom: .5pt solid #B88472;
            border-left: none;
            background: #C6E0B4;
            mso-pattern: black none;
            white-space: normal;
        }

        .xl98 {
            mso-style-parent: style0;
            color: windowtext;
            font-size: 16.0pt;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid #B88472;
            border-right: none;
            border-bottom: .5pt solid #B88472;
            border-left: .5pt solid #B88472;
            background: #B4C6E7;
            mso-pattern: black none;
            white-space: normal;
        }

        .xl99 {
            mso-style-parent: style0;
            color: windowtext;
            font-size: 16.0pt;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid #B88472;
            border-right: none;
            border-bottom: .5pt solid #B88472;
            border-left: none;
            background: #B4C6E7;
            mso-pattern: black none;
            white-space: normal;
        }

        .xl100 {
            mso-style-parent: style0;
            color: windowtext;
            font-size: 16.0pt;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid #B88472;
            border-right: .5pt solid #B88472;
            border-bottom: .5pt solid #B88472;
            border-left: none;
            background: #B4C6E7;
            mso-pattern: black none;
            white-space: normal;
        }

        .xl101 {
            mso-style-parent: style0;
            color: black;
            font-size: 16.0pt;
            font-weight: 700;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid #B88472;
            border-right: none;
            border-bottom: .5pt solid #B88472;
            border-left: 1.5pt solid #B88472;
            background: #FF99FF;
            mso-pattern: black none;
            white-space: normal;
        }

        .xl102 {
            mso-style-parent: style0;
            color: black;
            font-size: 16.0pt;
            font-weight: 700;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid #B88472;
            border-right: none;
            border-bottom: .5pt solid #B88472;
            border-left: none;
            background: #FF99FF;
            mso-pattern: black none;
            white-space: normal;
        }

        .xl103 {
            mso-style-parent: style0;
            color: black;
            font-size: 16.0pt;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid #B88472;
            border-right: none;
            border-bottom: .5pt solid #B88472;
            border-left: none;
            background: aqua;
            mso-pattern: black none;
            white-space: normal;
        }

        .xl104 {
            mso-style-parent: style0;
            color: black;
            font-size: 16.0pt;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid #B88472;
            border-right: 1.5pt solid #B88472;
            border-bottom: .5pt solid #B88472;
            border-left: none;
            background: aqua;
            mso-pattern: black none;
            white-space: normal;
        }

        .xl105 {
            mso-style-parent: style0;
            color: black;
            font-size: 16.0pt;
            font-weight: 700;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid #B88472;
            border-right: .5pt solid #B88472;
            border-bottom: .5pt solid #B88472;
            border-left: 1.5pt solid #B88472;
            background: yellow;
            mso-pattern: black none;
            white-space: normal;
        }

        .xl106 {
            mso-style-parent: style0;
            color: black;
            font-size: 16.0pt;
            font-weight: 700;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border: .5pt solid #B88472;
            background: yellow;
            mso-pattern: black none;
            white-space: normal;
        }

        .xl107 {
            mso-style-parent: style0;
            color: black;
            font-size: 16.0pt;
            font-weight: 700;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border: .5pt solid #B88472;
            background: aqua;
            mso-pattern: black none;
            white-space: normal;
        }

        .xl108 {
            mso-style-parent: style16;
            color: #633F32;
            font-size: 18.0pt;
            font-weight: 700;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid #B88472;
            border-right: none;
            border-bottom: .5pt solid #B88472;
            border-left: 1.5pt solid #B88472;
            background: #ECF0F4;
            mso-pattern: black none;
            white-space: normal;
        }

        .xl109 {
            mso-style-parent: style16;
            color: #633F32;
            font-size: 18.0pt;
            font-weight: 700;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid #B88472;
            border-right: none;
            border-bottom: .5pt solid #B88472;
            border-left: none;
            background: #ECF0F4;
            mso-pattern: black none;
            white-space: normal;
        }

        .xl110 {
            mso-style-parent: style16;
            color: #633F32;
            font-size: 18.0pt;
            font-weight: 700;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid #B88472;
            border-right: 1.5pt solid #B88472;
            border-bottom: .5pt solid #B88472;
            border-left: none;
            background: #ECF0F4;
            mso-pattern: black none;
            white-space: normal;
        }

        .xl111 {
            mso-style-parent: style0;
            color: black;
            font-size: 16.0pt;
            font-weight: 700;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid #B88472;
            border-right: none;
            border-bottom: .5pt solid #B88472;
            border-left: none;
            background: aqua;
            mso-pattern: black none;
            white-space: normal;
        }

        .xl112 {
            mso-style-parent: style0;
            color: black;
            font-size: 16.0pt;
            font-weight: 700;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid #B88472;
            border-right: 1.5pt solid #B88472;
            border-bottom: .5pt solid #B88472;
            border-left: none;
            background: aqua;
            mso-pattern: black none;
            white-space: normal;
        }

        .xl113 {
            mso-style-parent: style0;
            color: black;
            font-size: 16.0pt;
            font-weight: 700;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid #B88472;
            border-right: none;
            border-bottom: .5pt solid #B88472;
            border-left: none;
            background: yellow;
            mso-pattern: black none;
            white-space: normal;
        }

        .xl114 {
            mso-style-parent: style0;
            color: black;
            font-size: 16.0pt;
            font-weight: 700;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid #B88472;
            border-right: 1.5pt solid #B88472;
            border-bottom: .5pt solid #B88472;
            border-left: none;
            background: yellow;
            mso-pattern: black none;
            white-space: normal;
        }

        .xl115 {
            mso-style-parent: style0;
            color: black;
            font-size: 16.0pt;
            font-weight: 700;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid #B88472;
            border-right: none;
            border-bottom: none;
            border-left: 1.5pt solid #B88472;
            background: #FF99FF;
            mso-pattern: black none;
            white-space: normal;
        }

        .xl116 {
            mso-style-parent: style0;
            color: black;
            font-size: 16.0pt;
            font-weight: 700;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid #B88472;
            border-right: none;
            border-bottom: none;
            border-left: none;
            background: #FF99FF;
            mso-pattern: black none;
            white-space: normal;
        }

        .xl117 {
            mso-style-parent: style0;
            color: #633F32;
            font-size: 16.0pt;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid #B88472;
            border-right: none;
            border-bottom: none;
            border-left: 1.5pt solid #B88472;
            white-space: normal;
        }

        .xl118 {
            mso-style-parent: style0;
            color: #633F32;
            font-size: 16.0pt;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid #B88472;
            border-right: none;
            border-bottom: none;
            border-left: none;
            white-space: normal;
        }

        .xl119 {
            mso-style-parent: style0;
            color: #633F32;
            font-size: 16.0pt;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid #B88472;
            border-right: 1.5pt solid #B88472;
            border-bottom: none;
            border-left: none;
            white-space: normal;
        }

        .xl120 {
            mso-style-parent: style0;
            color: #633F32;
            font-size: 16.0pt;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: none;
            border-right: none;
            border-bottom: none;
            border-left: 1.5pt solid #B88472;
            white-space: normal;
        }

        .xl121 {
            mso-style-parent: style0;
            color: #633F32;
            font-size: 16.0pt;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: none;
            border-right: 1.5pt solid #B88472;
            border-bottom: none;
            border-left: none;
            white-space: normal;
        }

        .xl122 {
            mso-style-parent: style0;
            color: black;
            font-size: 16.0pt;
            font-weight: 700;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid #B88472;
            border-right: none;
            border-bottom: .5pt solid #B88472;
            border-left: .5pt solid #B88472;
            background: #F4B084;
            mso-pattern: black none;
            white-space: normal;
        }

        .xl123 {
            mso-style-parent: style0;
            color: black;
            font-size: 16.0pt;
            font-weight: 700;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid #B88472;
            border-right: 1.5pt solid #B88472;
            border-bottom: .5pt solid #B88472;
            border-left: none;
            background: #F4B084;
            mso-pattern: black none;
            white-space: normal;
        }

        .xl124 {
            mso-style-parent: style16;
            color: #633F32;
            font-size: 18.0pt;
            font-weight: 700;
            font-family: Corbel, sans-serif;
            mso-font-charset: 162;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid #B88472;
            border-right: none;
            border-bottom: .5pt solid #B88472;
            border-left: 1.5pt solid #B88472;
            background: #ECF0F4;
            mso-pattern: black none;
            white-space: normal;
        }

        .xl125 {
            mso-style-parent: style16;
            color: #633F32;
            font-size: 18.0pt;
            font-weight: 700;
            font-family: Corbel, sans-serif;
            mso-font-charset: 162;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid #B88472;
            border-right: none;
            border-bottom: .5pt solid #B88472;
            border-left: none;
            background: #ECF0F4;
            mso-pattern: black none;
            white-space: normal;
        }

        .xl126 {
            mso-style-parent: style16;
            color: #633F32;
            font-size: 18.0pt;
            font-weight: 700;
            font-family: Corbel, sans-serif;
            mso-font-charset: 162;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid #B88472;
            border-right: 1.5pt solid #B88472;
            border-bottom: .5pt solid #B88472;
            border-left: none;
            background: #ECF0F4;
            mso-pattern: black none;
            white-space: normal;
        }

        .xl127 {
            mso-style-parent: style16;
            color: #633F32;
            font-size: 18.0pt;
            font-weight: 700;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid #B88472;
            border-right: .5pt solid #B88472;
            border-bottom: .5pt solid #B88472;
            border-left: none;
            background: #ECF0F4;
            mso-pattern: black none;
            white-space: normal;
        }

        .xl128 {
            mso-style-parent: style16;
            color: #633F32;
            font-size: 18.0pt;
            font-weight: 700;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid #B88472;
            border-right: none;
            border-bottom: .5pt solid #B88472;
            border-left: .5pt solid #B88472;
            background: #ECF0F4;
            mso-pattern: black none;
            white-space: normal;
        }

        .xl129 {
            mso-style-parent: style0;
            color: white;
            font-size: 18.0pt;
            font-weight: 700;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid #B88472;
            border-right: none;
            border-bottom: .5pt solid #B88472;
            border-left: 1.5pt solid #B88472;
            background: red;
            mso-pattern: black none;
            white-space: normal;
        }

        .xl130 {
            mso-style-parent: style0;
            color: white;
            font-size: 18.0pt;
            font-weight: 700;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid #B88472;
            border-right: none;
            border-bottom: .5pt solid #B88472;
            border-left: none;
            background: red;
            mso-pattern: black none;
            white-space: normal;
        }

        .xl131 {
            mso-style-parent: style0;
            color: white;
            font-size: 18.0pt;
            font-weight: 700;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid #B88472;
            border-right: 1.5pt solid #B88472;
            border-bottom: .5pt solid #B88472;
            border-left: none;
            background: red;
            mso-pattern: black none;
            white-space: normal;
        }

        .xl132 {
            mso-style-parent: style0;
            color: black;
            font-size: 16.0pt;
            font-weight: 700;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid #B88472;
            border-right: none;
            border-bottom: .5pt solid #B88472;
            border-left: 1.5pt solid #B88472;
            background: yellow;
            mso-pattern: black none;
            white-space: normal;
        }

        .xl133 {
            mso-style-parent: style0;
            color: black;
            font-size: 16.0pt;
            font-weight: 700;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid #B88472;
            border-right: .5pt solid #B88472;
            border-bottom: .5pt solid #B88472;
            border-left: none;
            background: #FF99FF;
            mso-pattern: black none;
            white-space: normal;
        }

        .xl134 {
            mso-style-parent: style0;
            color: #633F32;
            font-size: 16.0pt;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid #B88472;
            border-right: none;
            border-bottom: .5pt solid #B88472;
            border-left: 1.5pt solid #B88472;
            white-space: normal;
        }

        .xl135 {
            mso-style-parent: style0;
            color: #633F32;
            font-size: 16.0pt;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid #B88472;
            border-right: 1.5pt solid #B88472;
            border-bottom: .5pt solid #B88472;
            border-left: none;
            white-space: normal;
        }

        .xl136 {
            mso-style-parent: style0;
            color: black;
            font-size: 16.0pt;
            font-weight: 700;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid #B88472;
            border-right: .5pt solid #B88472;
            border-bottom: .5pt solid #B88472;
            border-left: none;
            background: aqua;
            mso-pattern: black none;
            white-space: normal;
        }

        .xl137 {
            mso-style-parent: style0;
            color: #633F32;
            font-size: 12.0pt;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid #B88472;
            border-right: none;
            border-bottom: .5pt solid #B88472;
            border-left: 1.5pt solid #B88472;
            white-space: normal;
        }

        .xl138 {
            mso-style-parent: style0;
            color: #633F32;
            font-size: 12.0pt;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid #B88472;
            border-right: none;
            border-bottom: .5pt solid #B88472;
            border-left: none;
            white-space: normal;
        }

        .xl139 {
            mso-style-parent: style0;
            color: #633F32;
            font-size: 12.0pt;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid #B88472;
            border-right: 1.5pt solid #B88472;
            border-bottom: .5pt solid #B88472;
            border-left: none;
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
                <h3 class="center-text sec-h3"><?php echo($lang_calendar["takvim"][$pref_lang]); ?></h3>
                <div class="cerceve">
                    <div class="pad-10-per">

                        <table id="tbl-big" style='border-collapse: collapse;table-layout:fixed;width:3250pt'>
                            <col class=xl65 width=100 style='mso-width-source:userset;mso-width-alt:3200;
 width:75pt'>
                            <col class=xl64 width=347 style='mso-width-source:userset;mso-width-alt:11093;
 width:260pt'>
                            <col class=xl64 width=313 style='mso-width-source:userset;mso-width-alt:10026;
 width:235pt'>
                            <col class=xl64 width=305 style='mso-width-source:userset;mso-width-alt:9770;
 width:229pt'>
                            <col class=xl64 width=476 style='mso-width-source:userset;mso-width-alt:15232;
 width:357pt'>
                            <col class=xl64 width=348 style='mso-width-source:userset;mso-width-alt:11136;
 width:261pt'>
                            <col class=xl64 width=268 style='mso-width-source:userset;mso-width-alt:8576;
 width:201pt'>
                            <col class=xl64 width=271 style='mso-width-source:userset;mso-width-alt:8661;
 width:203pt'>
                            <col class=xl64 width=276 style='mso-width-source:userset;mso-width-alt:8832;
 width:207pt'>
                            <col class=xl64 width=259 style='mso-width-source:userset;mso-width-alt:8277;
 width:194pt'>
                            <col class=xl64 width=249 style='mso-width-source:userset;mso-width-alt:7978;
 width:187pt'>
                            <col class=xl64 width=300 style='mso-width-source:userset;mso-width-alt:9600;
 width:225pt'>
                            <col class=xl64 width=232 style='mso-width-source:userset;mso-width-alt:7424;
 width:174pt'>
                            <col class=xl64 width=468 style='mso-width-source:userset;mso-width-alt:14976;
 width:351pt'>
                            <col class=xl64 width=121 style='mso-width-source:userset;mso-width-alt:3882;
 width:91pt'>
                            <tr height=67 style='mso-height-source:userset;height:50.0pt'>
                                <td height=67 class=xl65 width=100 style='height:50.0pt;width:75pt'></td>
                                <td class=xl72 width=347 style='width:260pt'>8 Haziran ??ar??amba<br>
                                    Wednesday, 8 Juny
                                </td>
                                <td colspan=4 class=xl108 width=1442 style='border-right:1.5pt solid #B88472;
  border-left:none;width:1082pt'>9 Haziran Per??embe<br>
                                    Thursday, 9 Juny
                                </td>
                                <td colspan=5 class=xl124 width=1323 style='border-right:1.5pt solid #B88472;
  border-left:none;width:992pt'>10 Haziran Cuma<br>
                                    Friday, 10 Juny
                                </td>
                                <td colspan=2 class=xl125 width=532 style='width:399pt'>11 Haziran
                                    Cumartesi<br>
                                    Saturday, 11 Juny
                                </td>
                                <td class=xl74 width=468 style='width:351pt'>12 Haziran Pazar<br>
                                    Sunday, 12 Juny
                                </td>
                                <td class=xl65 width=121 style='width:91pt'></td>
                            </tr>
                            <tr height=67 style='mso-height-source:userset;height:50.5pt'>
                                <td height=67 class=xl94 width=100 style='height:50.5pt;width:75pt'>10:00</td>
                                <td class=xl73 width=347 style='border-top:none;border-left:none;width:260pt'>&nbsp;
                                </td>
                                <td colspan=4 class=xl129 width=1442 style='border-right:1.5pt solid #B88472;
  border-left:none;width:1082pt'>A??ILI?? T??REN?? / OPENING CEREMONY
                                </td>
                                <td colspan=5 class=xl137 width=1323 style='border-right:1.5pt solid #B88472;
  border-left:none;width:992pt'>&nbsp;
                                </td>
                                <td colspan=2 class=xl138 width=532 style='width:399pt'>&nbsp;</td>
                                <td class=xl66 width=468 style='border-top:none;width:351pt'>&nbsp;</td>
                                <td class=xl94 width=121 style='border-left:none;width:91pt'>10:00</td>
                            </tr>
                            <tr height=460 style='mso-height-source:userset;height:345.0pt'>
                                <td height=460 class=xl94 width=100 style='height:345.0pt;border-top:none;
  width:75pt'>11:00
                                </td>
                                <td class=xl68 width=347 style='border-top:none;border-left:none;width:260pt'>KONSER
                                    / CONCERT<br>
                                    <font class="font6">P??YANO-KEMAN RES??TAL?? /<br>
                                        PIANO-VIOLIN RECITAL<br>
                                        <br>
                                        (??evrimi??i / online)<br>
                                        <br>
                                        Eda Delik??i - Keman/Violin<br>
                                        Senem Zeynep Ercan - Piyano/Piano</font></td>
                                <td colspan=2 class=xl101 width=618 style='border-right:.5pt solid #B88472;
  border-left:none;width:464pt'>A??ILI?? KONU??MASI / KEYNOTE SPEECH<font
                                            class="font6"><br>
                                        ??hsan ??????EK</font></td>
                                <td class=xl69 width=476 style='border-top:none;border-left:none;width:357pt'>KONSER
                                    / CONCERT<br>
                                    <font class="font6">KANUN-P??YANO A??IKLAMALI KONSER /<br>
                                        <span style='mso-spacerun:yes'>??</span>QANUN-PIANO EXPLAINED CONCERT<br>
                                        <br>
                                        ( Ahmet Yakupo??lu G??zel Sanatlar Lisesi / <br>
                                        <span style='mso-spacerun:yes'>??</span>Ahmet Yakupo??lu Fine Arts High
                                        School)<br>
                                        <br>
                                        Deniz Tuncer<span style='mso-spacerun:yes'>?? </span>- Piyano/Piano<br>
                                        Seda T??fek??io??lu - Kanun/Qanun</font></td>
                                <td class=xl70 width=348 style='border-top:none;border-left:none;width:261pt'>KONSER
                                    / CONCERT<br>
                                    <font class="font6">T??RK HALK M??Z?????? /<br>
                                        <span style='mso-spacerun:yes'>??</span>TURKISH FOLK MUSIC <br>
                                        <br>
                                        (Nafi G??ral Fen Lisesi / Nafi G??ral Science High School)<br>
                                        <br>
                                        ??sa KAHRAMAN</font></td>
                                <td class=xl75 width=268 style='border-top:none;width:201pt'>KONSER /
                                    CONCERT<br>
                                    <font class="font6">G??TAR RES??TAL?? / <br>
                                        GUITAR RECITAL<br>
                                        <br>
                                        (Ahmet Yakupo??lu G??zel Sanatlar Lisesi / Ahmet Yakupo??lu Fine Arts High
                                        School)<br>
                                        <br>
                                        FEL??PE VARGAS MAGDALENO</font></td>
                                <td class=xl69 width=271 style='border-top:none;width:203pt'>KONSER /
                                    CONCERT<br>
                                    <font class="font6">BA??LAMA G??TAR ??K??L??S?? / BAGLAMA-GUITAR DUO<br>
                                        <br>
                                        (Aslanapa ??l??e Milli E??itim M??d??rl?????? / Aslanapa District Directorate of
                                        National Education)<br>
                                        <br>
                                        Sedat ????lg??n-Ba??lama/Baglama<br>
                                        ??lter Cebeci-Gitar/Guitar</font></td>
                                <td class=xl69 width=276 style='border-top:none;border-left:none;width:207pt'>KONSER
                                    / CONCERT<br>
                                    <font class="font6">AFYON CAKA YILDIZLARI /<br>
                                        <span style='mso-spacerun:yes'>??</span>AFYON CAKA STARS<br>
                                        <br>
                                        (Bo??azi??i ??ehir Koleji / Bo??azi??i City College)<br>
                                        <br>
                                        Haz??rlayanlar/Prepeared by: Filiz Y??ld??z-G??l??ah Tazeg??l</font></td>
                                <td class=xl69 width=259 style='border-top:none;border-left:none;width:194pt'>KONSER
                                    / CONCERT<br>
                                    <font class="font6">AL?? ER??M G??TAR RES??TAL?? / AL?? ER??M GUITAR RECITAL<br>
                                        <br>
                                        (K??rdar Bilgi??ren Koleji / K??rdar Bilgi??ren College)</font></td>
                                <td class=xl76 width=249 style='border-top:none;border-left:none;width:187pt'>KONSER
                                    / CONCERT<br>
                                    <font class="font6">T??RK HALK M??Z?????? / TURKISH FOLK MUSIC<br>
                                        <br>
                                        (Necip Faz??l Anadolu Lisesi / Necip Faz??l Anatolian High School)<br>
                                        <br>
                                        ??sa KAHRAMAN</font></td>
                                <td colspan=2 class=xl111 width=532 style='width:399pt'>KONSER /
                                    CONCERT<br>
                                    <font class="font6">??NCE SAZ E??L??????NDE H??SARLI AHMET T??RK??LER?? /<br>
                                        <span style='mso-spacerun:yes'>??</span>HISARLI AHMET FOLK SONGS<br>
                                        <br>
                                        (??evrimi??i / online)<br>
                                        <br>
                                        Derya Ero??lu - Solist/Soloist<br>
                                        Erhan Zetero??lu - Ba??lama/Baglama<br>
                                        Gamze Nevra K??ro??lu - Klasik Kemen??e/Kemence<br>
                                        Halil Alt??nk??pr?? - Kanun/Qanun<br>
                                        Melih Yenilmez - Ud/Oud<br>
                                        Nihat Ozan K??ro??lu / Ney<br>
                                        Selim ??enel / Tambur<br>
                                        Sibel Karaman / Rythm</font></td>
                                <td class=xl67 width=468 style='border-top:none;width:351pt'>&nbsp;</td>
                                <td class=xl94 width=121 style='border-top:none;border-left:none;width:91pt'>11:00</td>
                            </tr>
                            <tr height=229 style='mso-height-source:userset;height:172.5pt'>
                                <td height=229 class=xl94 width=100 style='height:172.5pt;border-top:none;
  width:75pt'>11:45
                                </td>
                                <td class=xl71 width=347 style='border-top:none;border-left:none;width:260pt'>&nbsp;
                                </td>
                                <td class=xl77 width=313 style='border-top:none;width:235pt'>&nbsp;</td>
                                <td class=xl78 width=305 style='border-top:none;width:229pt'>&nbsp;</td>
                                <td class=xl79 width=476 style='border-top:none;width:357pt'>&nbsp;</td>
                                <td class=xl80 width=348 style='border-top:none;width:261pt'>&nbsp;</td>
                                <td colspan=5 class=xl113 width=1323 style='border-right:1.5pt solid #B88472;
  width:992pt'>PANEL<br>
                                    <font class="font6">Ban Junrong (chair)<br>
                                        Hang Su<br>
                                        Wan Zhongru<br>
                                        <br>
                                        (??evrimi??i / online)<br>
                                        <br>
                                        The Singer Controls the Timbre to Adapt to the Climate Change Expressed in
                                        the Lyrics</font></td>
                                <td colspan=2 class=xl115 width=532 style='border-left:none;width:399pt'>KONFERANS
                                    / CONFERENCE<font class="font6"><br>
                                        Oksana Dobzhanskaya<br>
                                        <br>
                                        The Sound Landscapes of Arctic<br>
                                    </font></td>
                                <td class=xl81 width=468 style='border-top:none;width:351pt'>KONFERANS /
                                    CONFERENCE<font class="font6"><br>
                                        Abdurrahman Ekinci<br>
                                        <br>
                                        D??rt Mevsim ???? Yurt / Four Seasons Three Countries<br>
                                    </font></td>
                                <td class=xl94 width=121 style='border-top:none;border-left:none;width:91pt'>11:45</td>
                            </tr>
                            <tr height=276 style='mso-height-source:userset;height:207.0pt'>
                                <td height=276 class=xl94 width=100 style='height:207.0pt;border-top:none;
  width:75pt'>13:00
                                </td>
                                <td class=xl68 width=347 style='border-top:none;border-left:none;width:260pt'>KONSER
                                    / CONCERT<br>
                                    <font class="font6">DUO ??OKAMAY<br>
                                    </font><font class="font5"><br>
                                    </font><font class="font6">(??evrimi??i / online)<br>
                                        <br>
                                        Merve ??okamay - Fl??t/Flute<br>
                                        Bahad??r ??okamay - Piyano/Piano</font></td>
                                <td colspan=4 class=xl132 width=1442 style='border-right:1.5pt solid #B88472;
  border-left:none;width:1082pt'>PANEL<br>
                                    <font class="font6">Abdullah Akat (ba??kan / chair)<br>
                                        Ak??n Oktav<br>
                                        Ali Tan<br>
                                        <br>
                                        (??evrimi??i / online)<br>
                                        <br>
                                        Ney ve Kemen??e Yap??m??nda Deneysel ve Say??sal Modellemeye ??li??kin G??ncel
                                        Yakla????mlar /<br>
                                        Current Approaches to Experimental and Numerical Modeling in Ney and
                                        Kemenche Making</font></td>
                                <td colspan=5 class=xl117 width=1323 style='border-right:1.5pt solid #B88472;
  border-left:none;width:992pt'>&nbsp;
                                </td>
                                <td colspan=2 class=xl120 width=532 style='border-right:1.5pt solid #B88472;
  border-left:none;width:399pt'>&nbsp;
                                </td>
                                <td class=xl82 width=468 style='border-top:none;border-left:none;width:351pt'>&nbsp;
                                </td>
                                <td class=xl94 width=121 style='border-top:none;border-left:none;width:91pt'>13:00</td>
                            </tr>
                            <tr height=417 style='mso-height-source:userset;height:313.5pt'>
                                <td height=417 class=xl94 width=100 style='height:313.5pt;border-top:none;
  width:75pt'>14:00
                                </td>
                                <td class=xl68 width=347 style='border-top:none;border-left:none;width:260pt'>KONSER
                                    / CONCERT<br>
                                    <font class="font6">KEMAN-P??YANO /VIOLIN-PIANO<br>
                                        ( Ahmet Yakupo??lu G??zel Sanatlar Lisesi / Ahmet Yakupo??lu Fine Arts High
                                        School)<br>
                                        <br>
                                        Y??lmaz Lekesizg??z - Keman/Violin<br>
                                        Hale Vural - Piyano/Piano</font></td>
                                <td class=xl75 width=313 style='border-top:none;border-left:none;width:235pt'>KONSER
                                    / CONCERT<br>
                                    <font class="font6">P??YANO/PIANO<br>
                                        <br>
                                        (K??rdar Bilgi??ren Koleji / K??rdar Bilgi??ren College)<br>
                                        <br>
                                        AK?? Devlet Konservatuvar?? M??zik B??l??m?? Piyano ASD ????rencileri / Students of
                                        Piano Department of AKU State Conservatory</font></td>
                                <td class=xl69 width=305 style='border-top:none;width:229pt'>KONSER /
                                    CONCERT<br>
                                    <font class="font6">???? KEMAN / THREE VIOLINS<br>
                                        <br>
                                        (Ahmet Yakupo??lu G??zel Sanatlar Lisesi /<span style='mso-spacerun:yes'>??
  </span>Ahmet Yakupo??lu Fine Arts High School)<br>
                                        <br>
                                        ??enol Ayd??n - Keman/Violin<br>
                                        G??len Ege Serter- Keman/Violin<br>
                                        ??eniz Serter- Keman/Violin</font></td>
                                <td class=xl69 width=476 style='border-top:none;border-left:none;width:357pt'>KONSER
                                    / CONCERT<br>
                                    <font class="font6">EMRE ??NLENEN G??TAR RES??TAL?? / <br>
                                        EMRE ??NLENEN GUITAR RECITAL<br>
                                        <br>
                                        (Aysel-Selahattin Erkasap Sosyal Bilimler Lisesi, Kent Orman?? / K??tahya
                                        City Forest, Aysel-Selahattin Erkasap Social Sciences High School)</font></td>
                                <td class=xl68 width=348 style='border-top:none;border-left:none;width:261pt'>KONSER
                                    / CONCERT<br>
                                    <font class="font6">T??RK SANAT M??Z?????? / <br>
                                        TURKISH ART MUSIC<br>
                                        <br>
                                        (K??tahya Sa??l??k Bilimleri ??niversitesi / K??tahya Health Sciences
                                        University)<br>
                                        <br>
                                        AK?? TSM B??l??m?? / Turkish Art Music Department of AKU State
                                        Conservatory<br>
                                        <br>
                                        Haz??rlayan / Prepeared by: Hakan Akdeniz- Memduh Erman Saydam</font></td>
                                <td colspan=3 class=xl75 width=815 style='border-left:none;width:611pt'>KONSER
                                    / CONCERT<br>
                                    <font class="font6">KIRDAR B??LG????REN KOLEJ?? ????RENC??LER?? /<br>
                                        STUDENTS of KIRDAR B??LG????REN COLLEGE<br>
                                        <br>
                                        (K??rdar Bilgi??ren Koleji / K??rdar Bilgi??ren College)<br>
                                        <br>
                                        Haz??rlayan/Prepeared by: Rafet K??rdar</font></td>
                                <td colspan=2 class=xl122 width=508 style='border-right:1.5pt solid #B88472;
  width:381pt'>S??YLE???? / CONVERSATION<br>
                                    <font class="font6">4 ELEMENT ve M??Z??K: Hava, Su, Toprak, Ate?? /<br>
                                        4 ELEMENT AND MUSI: Air, Water, Earth, Fire<br>
                                        <br>
                                        (K??tahya Ahmet Yakupo??lu G??zel Sanatlar Lisesi Resim B??l??m?? / K??tahya Ahmet
                                        Yakupo??lu Fine Arts High School Painting Department)<br>
                                        <br>
                                        Hakan Y??lmaz</font></td>
                                <td colspan=2 class=xl75 width=532 style='border-right:1.5pt solid #B88472;
  border-left:none;width:399pt'>KONSER / CONCERT<br>
                                    <font class="font6">FARKLI ????RENENLER ???OT??ZM ve M??Z??K??? / <br>
                                        DIFFERENT LEARNERS ???AUTISM AND MUSIC???<br>
                                        <span style='mso-spacerun:yes'>??</span><br>
                                        (K??tahya-B??LSEM)<br>
                                        <br>
                                        Haz??rlayan / Prepeared by: Didem Karaba??<br>
                                        <br>
                                        Batuhan Kil - Piyano ve Ud/Piano and Lute<br>
                                        Recep Ege Alt??nc??o??lu - ??an/Vocal<br>
                                        ??a??r??han Aty??ld??z - ??ello/Cello<br>
                                        Bu??ra ??ank??r - Piyano/Piano<br>
                                        Koral Erdeniz - Piyano/Piano</font></td>
                                <td class=xl83 width=468 style='border-left:none;width:351pt'>KONSER /
                                    CONCERT<br>
                                    <font class="font6">AYSEL G??K??E ??A??LAR P??YANO RES??TAL??: &quot;Ku??lar&quot;
                                        / AYSEL G??K??E ??A??LAR PIANO RECITAL: &quot;Birds&quot;<br>
                                        <br>
                                        (??evrimi??i / online)</font></td>
                                <td class=xl94 width=121 style='border-top:none;border-left:none;width:91pt'>14:00</td>
                            </tr>
                            <tr height=264 style='mso-height-source:userset;height:198.0pt'>
                                <td height=264 class=xl94 width=100 style='height:198.0pt;border-top:none;
  width:75pt'>14:30
                                </td>
                                <td class=xl84 width=347 style='border-top:none;border-left:none;width:260pt'>&nbsp;
                                </td>
                                <td class=xl85 width=313 style='border-top:none;width:235pt'>&nbsp;</td>
                                <td class=xl85 width=305 style='border-top:none;width:229pt'>&nbsp;</td>
                                <td class=xl85 width=476 style='border-top:none;width:357pt'>&nbsp;</td>
                                <td class=xl86 width=348 style='border-top:none;width:261pt'>&nbsp;</td>
                                <td colspan=5 class=xl75 width=1323 style='border-right:1.5pt solid #B88472;
  border-left:none;width:992pt'>KONSER / CONCERT<br>
                                    <font class="font6">T??RK HALK M??Z?????? / TURKISH FOLK SONG<br>
                                        <br>
                                        (K??tahya ??l Milli E??itim M??d??rl?????? Beylerbeyi Salonu / Beylerbeyi Hall of
                                        K??tahya Provincial Directorate of National<br>
                                        Education)<br>
                                        <br>
                                        Veli Y??ntem<span style='mso-spacerun:yes'>?? </span>- Kabak Kemane<br>
                                        ??i??dem Y??ndem - Ba??lama ve Solist / Baglama and Soloist</font></td>
                                <td colspan=2 class=xl134 width=532 style='border-right:1.5pt solid #B88472;
  border-left:none;width:399pt'>&nbsp;
                                </td>
                                <td class=xl87 width=468 style='border-top:none;border-left:none;width:351pt'>&nbsp;
                                </td>
                                <td class=xl94 width=121 style='border-top:none;border-left:none;width:91pt'>14:30</td>
                            </tr>
                            <tr height=232 style='mso-height-source:userset;height:174.75pt'>
                                <td height=232 class=xl94 width=100 style='height:174.75pt;border-top:none;
  width:75pt'>16:00
                                </td>
                                <td class=xl68 width=347 style='border-top:none;border-left:none;width:260pt'>KONSER
                                    / CONCERT<br>
                                    <font class="font6">AL?? ER??M G??TAR RES??TAL??</font><font class="font5"> </font><font
                                            class="font6">/ <br>
                                        AL?? ER??M GU??TAR RECITAL</font></td>
                                <td colspan=4 class=xl75 width=1442 style='border-right:1.5pt solid #B88472;
  border-left:none;width:1082pt'>KONSER / CONCERT<br>
                                    <font class="font6">A??IK YOKSUL DERV????<br>
                                        <br>
                                        (Dumlup??nar ??niversitesi Fen Edebiyat Fak??ltesi / Dumlup??nar University
                                        Science Literature Department)<br>
                                        <br>
                                        Haz??rlayan / Prepeared by Erdal AKAY</font></td>
                                <td colspan=5 class=xl75 width=1323 style='border-right:1.5pt solid #B88472;
  border-left:none;width:992pt'>KONSER / CONCERT<br>
                                    <font class="font6">K??TAHYA KIR GEZE???? / K??TAHYA PRAIRE WALKING<br>
                                        <br>
                                        (Reg??lat??r / Regulator)<br>
                                        <br>
                                        Mustafa Sal??n ve Arkada??lar?? / Mustafa Sal??n and His Friends</font></td>
                                <td colspan=2 class=xl75 width=532 style='border-right:.5pt solid #B88472;
  border-left:none;width:399pt'>KONSER / CONCERT<br>
                                    <font class="font6">V??YOLA-P??YANO / VIOLA-PIANO<br>
                                        <br>
                                        (??evrimi??i / online)<br>
                                        <br>
                                        Bilg??tay Kaan ??zt??rk - Viyola/Viola<br>
                                        ??rem Yal????ner - Piyano/Piano</font></td>
                                <td class=xl88 width=468 style='border-top:none;border-left:none;width:351pt'>KAPANI??
                                    T??REN?? / CLOSING CEREMONY
                                </td>
                                <td class=xl94 width=121 style='border-top:none;width:91pt'>16:00</td>
                            </tr>
                            <tr height=493 style='mso-height-source:userset;height:370.5pt'>
                                <td height=493 class=xl94 width=100 style='height:370.5pt;border-top:none;
  width:75pt'>18:00
                                </td>
                                <td class=xl68 width=347 style='border-top:none;border-left:none;width:260pt'>KONSER
                                    / CONCERT<br>
                                    <font class="font6">SONRA?: ???DO??A VE GELECEK ??ZER??NE YEN?? M??Z??KLER??? /
                                        AFTER?: &quot;NEW MUSIC ON NATURE AND THE FUTURE<br>
                                        (??evrimi??i / online)<br>
                                        <br>
                                        Ankara M??zik ve G??zel Sanatlar ??niversitesi, ??SF, Yeni M??zik Toplulu??u /
                                        Ankara Music and Fine Arts University ??SF, New Music Association<br>
                                        <br>
                                        Haz??rlayan / Prepeared by: Erberk ERYILMAZ</font></td>
                                <td class=xl89 width=313 style='border-top:none;border-left:none;width:235pt'>&nbsp;
                                </td>
                                <td class=xl79 width=305 style='border-top:none;width:229pt'>&nbsp;</td>
                                <td class=xl79 width=476 style='border-top:none;width:357pt'>&nbsp;</td>
                                <td class=xl90 width=348 style='border-top:none;width:261pt'>&nbsp;</td>
                                <td colspan=5 class=xl75 width=1323 style='border-right:1.5pt solid #B88472;
  border-left:none;width:992pt'>KONSER / CONCERT<br>
                                    <font class="font6">ARYA SU G??LEN?? P??YANO RES??TAL?? / ARYA SU G??LEN?? PIANO
                                        RECITAL<br>
                                        <br>
                                        (B??LSEM)</font></td>
                                <td class=xl89 width=300 style='border-top:none;border-left:none;width:225pt'>&nbsp;
                                </td>
                                <td class=xl79 width=232 style='border-top:none;width:174pt'>&nbsp;</td>
                                <td class=xl91 width=468 style='border-top:none;width:351pt'>&nbsp;</td>
                                <td class=xl94 width=121 style='border-top:none;width:91pt'>18:00</td>
                            </tr>
                            <tr height=332 style='mso-height-source:userset;height:249.75pt'>
                                <td height=332 class=xl94 width=100 style='height:249.75pt;border-top:none;
  width:75pt'>20:00
                                </td>
                                <td class=xl68 width=347 style='border-top:none;border-left:none;width:260pt'>KONSER
                                    / CONCERT<br>
                                    <font class="font6">ZEYBEKLER / ZEIBEKS<br>
                                        <br>
                                        (Hezar Dinari K??lt??r Merkezi / Hezar Dinari Culture Centre)<br>
                                        <br>
                                        Mehmet Sevim</font></td>
                                <td colspan=2 class=xl101 width=618 style='border-left:none;width:464pt'>KONFERANS
                                    / CONFERENCE<font class="font6"><br>
                                        Aaron S. Allen<br>
                                        <br>
                                        Global Ecomusicologies<br>
                                    </font></td>
                                <td colspan=2 class=xl103 width=824 style='border-right:1.5pt solid #B88472;
  width:618pt'><font class="font5">KONSER / CONCERT</font><font class="font6"><br>
                                        BA??LAMA G??TAR ??K??L??S?? / BAGLAMA-GUITAR DUO<br>
                                        <br>
                                        (Hezar Dinari K??lt??r Merkezi / Hezar Dinari Culture Centre)<br>
                                        <br>
                                        Sedat ????lg??n - Ba??lama/Baglama<br>
                                        ??lter Cebeci - Gitar/Guitar</font></td>
                                <td colspan=3 class=xl105 width=815 style='border-left:none;width:611pt'>PANEL<br>
                                    <font class="font6">Marisa Fonterrada (chair)<br>
                                        Andrea Cohen<br>
                                        Thiago Cury<br>
                                        <br>
                                        (??evrimi??i / online)<br>
                                        <br>
                                        Environmental Crises and Music: Can Art Pinpoint Global Solutions?</font></td>
                                <td colspan=2 class=xl107 width=508 style='border-right:1.5pt solid #B88472;
  border-left:none;width:381pt'>KONSER / CONCERT<br>
                                    <font class="font6">AFYON KOCATEPE ??N??VERS??TES?? ??OCUK ve GEN??L??K ORKESTRASI
                                        / AFYONKOCATEPE UNIVERSITY CHILDREN<br>
                                        AND YOUTH ORCHESTRA CONCERT<br>
                                        <br>
                                        (Hezar Dinari K??lt??r Merkezi / Hezar Dinari Culture Centre)<br>
                                        <br>
                                        Haz??rlayanlar/Prepeared by: Filiz Y??ld??z-G??l??ah Tazeg??l</font></td>
                                <td colspan=2 class=xl75 width=532 style='border-right:1.5pt solid #B88472;
  border-left:none;width:399pt'>KONSER / CONCERT<br>
                                    <font class="font6">SERDAR KASTELL??: NEFESLEN????LER / BREATHINGS<br>
                                        <br>
                                        (Hezar Dinari K??lt??r Merkezi / Hezar Dinari Culture Centre)</font></td>
                                <td class=xl83 width=468 style='border-top:none;border-left:none;width:351pt'>KONSER
                                    / CONCERT<br>
                                    <font class="font6">SEMPOZYUM KAPANI?? ??ZEL KONSER?? / <br>
                                        SYMPOSIUM CLOSING SPECIAL CONCERT<br>
                                        <br>
                                        (Hezar Dinari K??lt??r Merkezi / Hezar Dinari Culture Centre )<br>
                                        <br>
                                        K??tahya Ahmet Yakupo??lu G??zel Sanatlar Lisesi / K??tahya Ahmet Yakupo??lu
                                        Fine Arts High School<span style='mso-spacerun:yes'>??</span></font></td>
                                <td class=xl94 width=121 style='border-top:none;border-left:none;width:91pt'>20:00</td>
                            </tr>
                            <tr height=61 style='mso-height-source:userset;height:46.5pt'>
                                <td height=61 class=xl65 width=100 style='height:46.5pt;width:75pt'></td>
                                <td class=xl72 width=347 style='border-top:none;width:260pt'>8 Haziran
                                    ??ar??amba<br>
                                    Wednesday, 8 Juny
                                </td>
                                <td colspan=4 class=xl108 width=1442 style='border-right:1.5pt solid #B88472;
  border-left:none;width:1082pt'>9 Haziran Per??embe<br>
                                    Thursday, 9 Juny
                                </td>
                                <td colspan=5 class=xl109 width=1323 style='border-right:.5pt solid #B88472;
  width:992pt'>10 Haziran Cuma<br>
                                    Friday, 10 Juny
                                </td>
                                <td colspan=2 class=xl128 width=532 style='border-right:.5pt solid #B88472;
  border-left:none;width:399pt'>11 Haziran Cumartesi<br>
                                    Saturday, 11 Juny
                                </td>
                                <td class=xl93 width=468 style='border-top:none;width:351pt'>12 Haziran
                                    Pazar<br>
                                    Sunday, 12 Juny
                                </td>
                                <td class=xl64 width=121 style='width:91pt'></td>
                            </tr>
                            <tr height=124 style='mso-height-source:userset;height:93.5pt'>
                                <td height=124 class=xl65 width=100 style='height:93.5pt;width:75pt'></td>
                                <td class=xl92 width=347 style='width:260pt'>&nbsp;</td>
                                <td colspan=12 class=xl95 width=3765 style='border-right:.5pt solid #B88472;
  border-left:none;width:2824pt'><font class="font8"><span
                                                style='mso-spacerun:yes'>??</span>SERG?? / EXHIBITION</font><font
                                            class="font7"><br>
                                        <br>
                                        Haz??rlayan/Prepeared by: Duygu Kahraman</font></td>
                                <td class=xl64 width=121 style='width:91pt'></td>
                            </tr>
                            <tr height=197 style='mso-height-source:userset;height:148.5pt'>
                                <td height=197 class=xl65 width=100 style='height:148.5pt;width:75pt'></td>
                                <td class=xl92 width=347 style='width:260pt'>&nbsp;</td>
                                <td colspan=12 class=xl98 width=3765 style='border-right:.5pt solid #B88472;
  border-left:none;width:2824pt'><font class="font8">AT??LYE ??ALI??MASI SERG??S?? /
                                        WORKSHOP's<span style='mso-spacerun:yes'>?? </span>EXHIBITION</font><font
                                            class="font7"><br>
                                        SES HEYKELLER?? /<span style='mso-spacerun:yes'>?? </span>SOUND
                                        SCULPTURES<br>
                                        <br>
                                        (At??lye ??al????mas??/Workshop: 30 May??s/May - 9 Haziran/June)<br>
                                        <br>
                                        Haz??rlayanlar/Prepeared by:: ??zg??r Turan &amp; Ferhan K??z??ltepe</font></td>
                                <td class=xl64 width=121 style='width:91pt'></td>
                            </tr>
                            <![if supportMisalignedColumns]>
                            <tr height=0 style='display:none'>
                                <td width=100 style='width:75pt'></td>
                                <td width=347 style='width:260pt'></td>
                                <td width=313 style='width:235pt'></td>
                                <td width=305 style='width:229pt'></td>
                                <td width=476 style='width:357pt'></td>
                                <td width=348 style='width:261pt'></td>
                                <td width=268 style='width:201pt'></td>
                                <td width=271 style='width:203pt'></td>
                                <td width=276 style='width:207pt'></td>
                                <td width=259 style='width:194pt'></td>
                                <td width=249 style='width:187pt'></td>
                                <td width=300 style='width:225pt'></td>
                                <td width=232 style='width:174pt'></td>
                                <td width=468 style='width:351pt'></td>
                                <td width=121 style='width:91pt'></td>
                            </tr>
                            <![endif]>
                        </table>


                    </div>
                    <!-- eof pad 10 per -->
                </div>
            </section>

            <!-- Eof Icerik -->
        </div>

        <!-- Footer -->
        <?php require_once("modules/footer.php"); ?>

    </div>
</div>

<script type="text/javascript">
    (function () {
        const bigTable = document.querySelector("#tbl-big");
        const bigTableWidth = bigTable.offsetWidth;

        const tableWrapper = document.querySelector(".pad-10-per");
        const tableWrapperWidth = tableWrapper.offsetWidth;
        const tableWrapperHeight = tableWrapper.offsetHeight;

        const scaleRatio = tableWrapperWidth / bigTableWidth;
        bigTable.style.transformOrigin = "0% 0% 0px";
        bigTable.style.transform = "scale(" + scaleRatio + ")";

        tableWrapper.style.height = parseInt(scaleRatio * bigTable.offsetHeight) + "px";

        let tableExpanded = false;

        bigTable.addEventListener("click", function (e) {
            if (!tableExpanded) {
                bigTable.style.transform = "scale(1)";
                tableWrapper.style.height = parseInt(bigTable.offsetHeight) + "px";
                tableWrapper.style.width = parseInt(bigTable.offsetWidth) + "px";
                tableExpanded = true;
            } else {
                bigTable.style.transform = "scale(" + scaleRatio + ")";
                tableWrapper.style.height = parseInt(scaleRatio * bigTable.offsetHeight) + "px";
                tableWrapper.style.width = "100%";
                tableExpanded = false;
            }
        });
    })();
</script>
</body>

</html>