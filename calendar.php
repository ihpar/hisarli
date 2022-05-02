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
            max-width: 3000px;
            overflow-x: scroll;
        }

        .cerceve {
            border-style: solid;
            border-width: 16px;
            border-color: #bbb;
            padding: 16px;
            width: -moz-fit-content;
            margin-left: auto;
            margin-right: auto;
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

    <style id="etkinliklertakvimi_10325_Styles">
        <!--
        table {
            mso-displayed-decimal-separator: "\,";
            mso-displayed-thousand-separator: "\.";
        }

        @page {
            margin: .75in .7in .75in .7in;
            mso-header-margin: .3in;
            mso-footer-margin: .3in;
            mso-page-orientation: landscape;
        }

        .font5 {
            color: black;
            font-size: 11.0pt;
            font-weight: 400;
            font-style: normal;
            text-decoration: none;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
        }

        .font6 {
            color: black;
            font-size: 11.0pt;
            font-weight: 400;
            font-style: normal;
            text-decoration: none;
            font-family: Corbel, sans-serif;
            mso-font-charset: 162;
        }

        .font7 {
            color: black;
            font-size: 10.0pt;
            font-weight: 400;
            font-style: normal;
            text-decoration: none;
            font-family: Corbel, sans-serif;
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
            color: #633F32;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
            text-align: left;
            vertical-align: middle;
            border: .5pt solid #B88472;
            white-space: normal;
            padding-left: 6px;
            mso-char-indent-count: 1;
        }

        .xl66 {
            mso-style-parent: style0;
            color: black;
            font-weight: 700;
            font-family: Corbel, sans-serif;
            mso-font-charset: 162;
            text-align: center;
            vertical-align: middle;
            border: .5pt solid #B88472;
            background: aqua;
            mso-pattern: black none;
            white-space: normal;
            padding-left: 6px;
            mso-char-indent-count: 1;
        }

        .xl67 {
            mso-style-parent: style16;
            color: #633F32;
            font-size: 12.0pt;
            font-weight: 700;
            font-family: Corbel, sans-serif;
            mso-font-charset: 162;
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

        .xl68 {
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

        .xl69 {
            mso-style-parent: style17;
            color: #633F32;
            font-size: 14.0pt;
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

        .xl70 {
            mso-style-parent: style0;
            color: black;
            font-weight: 700;
            font-family: Corbel, sans-serif;
            mso-font-charset: 162;
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

        .xl71 {
            mso-style-parent: style0;
            color: black;
            font-weight: 700;
            font-family: Corbel, sans-serif;
            mso-font-charset: 162;
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

        .xl72 {
            mso-style-parent: style0;
            color: black;
            font-weight: 700;
            font-family: Corbel, sans-serif;
            mso-font-charset: 162;
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

        .xl73 {
            mso-style-parent: style16;
            color: #633F32;
            font-size: 12.0pt;
            font-weight: 700;
            font-family: Corbel, sans-serif;
            mso-font-charset: 162;
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

        .xl74 {
            mso-style-parent: style0;
            color: #633F32;
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

        .xl75 {
            mso-style-parent: style0;
            color: black;
            font-weight: 700;
            font-family: Corbel, sans-serif;
            mso-font-charset: 162;
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

        .xl76 {
            mso-style-parent: style0;
            color: black;
            font-family: Corbel, sans-serif;
            mso-font-charset: 162;
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

        .xl77 {
            mso-style-parent: style0;
            color: black;
            font-weight: 700;
            font-family: Corbel, sans-serif;
            mso-font-charset: 162;
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

        .xl78 {
            mso-style-parent: style0;
            color: black;
            font-weight: 700;
            font-family: Corbel, sans-serif;
            mso-font-charset: 162;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid #B88472;
            border-right: .5pt solid #B88472;
            border-bottom: .5pt solid #B88472;
            border-left: none;
            background: aqua;
            mso-pattern: black none;
            white-space: normal;
            padding-left: 6px;
            mso-char-indent-count: 1;
        }

        .xl79 {
            mso-style-parent: style0;
            color: black;
            font-weight: 700;
            font-family: Corbel, sans-serif;
            mso-font-charset: 162;
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

        .xl80 {
            mso-style-parent: style0;
            color: black;
            font-weight: 700;
            font-family: Corbel, sans-serif;
            mso-font-charset: 162;
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

        .xl81 {
            mso-style-parent: style0;
            color: black;
            font-weight: 700;
            font-family: Corbel, sans-serif;
            mso-font-charset: 162;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid #B88472;
            border-right: .5pt solid #B88472;
            border-bottom: .5pt solid #B88472;
            border-left: none;
            background: yellow;
            mso-pattern: black none;
            white-space: normal;
            padding-left: 6px;
            mso-char-indent-count: 1;
        }

        .xl82 {
            mso-style-parent: style0;
            color: black;
            font-weight: 700;
            font-family: Corbel, sans-serif;
            mso-font-charset: 162;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid #B88472;
            border-right: .5pt solid #B88472;
            border-bottom: .5pt solid #B88472;
            border-left: none;
            background: #FF99FF;
            mso-pattern: black none;
            white-space: normal;
            padding-left: 6px;
            mso-char-indent-count: 1;
        }

        .xl83 {
            mso-style-parent: style0;
            color: black;
            font-weight: 700;
            font-family: Corbel, sans-serif;
            mso-font-charset: 162;
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

        .xl84 {
            mso-style-parent: style0;
            color: black;
            font-weight: 700;
            font-family: Corbel, sans-serif;
            mso-font-charset: 162;
            text-align: center;
            vertical-align: middle;
            border: .5pt solid #B88472;
            background: #FF99FF;
            mso-pattern: black none;
            white-space: normal;
            padding-left: 6px;
            mso-char-indent-count: 1;
        }

        .xl85 {
            mso-style-parent: style16;
            color: #633F32;
            font-size: 14.0pt;
            font-weight: 700;
            font-family: Corbel, sans-serif;
            mso-font-charset: 162;
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

        .xl86 {
            mso-style-parent: style16;
            color: #633F32;
            font-size: 14.0pt;
            font-weight: 700;
            font-family: Corbel, sans-serif;
            mso-font-charset: 162;
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

        .xl87 {
            mso-style-parent: style0;
            color: white;
            font-size: 16.0pt;
            font-weight: 700;
            font-family: Corbel, sans-serif;
            mso-font-charset: 162;
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

        .xl88 {
            mso-style-parent: style0;
            color: #633F32;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid #B88472;
            border-right: none;
            border-bottom: .5pt solid #B88472;
            border-left: .5pt solid #B88472;
            white-space: normal;
        }

        .xl89 {
            mso-style-parent: style0;
            color: #633F32;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid #B88472;
            border-right: .5pt solid #B88472;
            border-bottom: .5pt solid #B88472;
            border-left: none;
            white-space: normal;
        }

        .xl90 {
            mso-style-parent: style16;
            color: #633F32;
            font-size: 12.0pt;
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

        .xl91 {
            mso-style-parent: style16;
            color: #633F32;
            font-size: 12.0pt;
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

        .xl92 {
            mso-style-parent: style16;
            color: #633F32;
            font-size: 12.0pt;
            font-weight: 700;
            font-family: Corbel, sans-serif;
            mso-font-charset: 162;
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

        .xl93 {
            mso-style-parent: style16;
            color: #633F32;
            font-size: 12.0pt;
            font-weight: 700;
            font-family: Corbel, sans-serif;
            mso-font-charset: 162;
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

        .xl94 {
            mso-style-parent: style0;
            color: black;
            font-weight: 700;
            font-family: Corbel, sans-serif;
            mso-font-charset: 162;
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

        .xl95 {
            mso-style-parent: style0;
            color: black;
            font-weight: 700;
            font-family: Corbel, sans-serif;
            mso-font-charset: 162;
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

        .xl96 {
            mso-style-parent: style16;
            color: #633F32;
            font-size: 14.0pt;
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

        .xl97 {
            mso-style-parent: style16;
            color: #633F32;
            font-size: 14.0pt;
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

        .xl98 {
            mso-style-parent: style0;
            color: white;
            font-size: 16.0pt;
            font-weight: 700;
            font-family: Corbel, sans-serif;
            mso-font-charset: 162;
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

        .xl99 {
            mso-style-parent: style0;
            color: white;
            font-weight: 700;
            font-family: Corbel, sans-serif;
            mso-font-charset: 162;
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

        .xl100 {
            mso-style-parent: style0;
            color: white;
            font-weight: 700;
            font-family: Corbel, sans-serif;
            mso-font-charset: 162;
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

        .xl101 {
            mso-style-parent: style16;
            color: #633F32;
            font-size: 14.0pt;
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

        .xl102 {
            mso-style-parent: style0;
            color: black;
            font-weight: 700;
            font-family: Corbel, sans-serif;
            mso-font-charset: 162;
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

        .xl103 {
            mso-style-parent: style0;
            color: black;
            font-weight: 700;
            font-family: Corbel, sans-serif;
            mso-font-charset: 162;
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

        .xl104 {
            mso-style-parent: style0;
            color: black;
            font-weight: 700;
            font-family: Corbel, sans-serif;
            mso-font-charset: 162;
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

        .xl105 {
            mso-style-parent: style0;
            color: #633F32;
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

        .xl106 {
            mso-style-parent: style0;
            color: #633F32;
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

        .xl107 {
            mso-style-parent: style0;
            color: #633F32;
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

        .xl108 {
            mso-style-parent: style16;
            color: #633F32;
            font-size: 14.0pt;
            font-weight: 700;
            font-family: Corbel, sans-serif;
            mso-font-charset: 162;
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

        .xl109 {
            mso-style-parent: style0;
            color: #633F32;
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

        .xl110 {
            mso-style-parent: style0;
            color: #633F32;
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

        .xl111 {
            mso-style-parent: style0;
            color: #633F32;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: .5pt solid #B88472;
            border-right: .5pt solid #B88472;
            border-bottom: none;
            border-left: none;
            white-space: normal;
        }

        .xl112 {
            mso-style-parent: style0;
            color: #633F32;
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

        .xl113 {
            mso-style-parent: style0;
            color: #633F32;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            white-space: normal;
        }

        .xl114 {
            mso-style-parent: style0;
            color: #633F32;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: none;
            border-right: .5pt solid #B88472;
            border-bottom: none;
            border-left: none;
            white-space: normal;
        }

        .xl115 {
            mso-style-parent: style0;
            color: #633F32;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: none;
            border-right: none;
            border-bottom: .5pt solid #B88472;
            border-left: 1.5pt solid #B88472;
            white-space: normal;
        }

        .xl116 {
            mso-style-parent: style0;
            color: #633F32;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: none;
            border-right: none;
            border-bottom: .5pt solid #B88472;
            border-left: none;
            white-space: normal;
        }

        .xl117 {
            mso-style-parent: style0;
            color: #633F32;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: none;
            border-right: .5pt solid #B88472;
            border-bottom: .5pt solid #B88472;
            border-left: none;
            white-space: normal;
        }

        .xl118 {
            mso-style-parent: style0;
            color: #633F32;
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

        .xl119 {
            mso-style-parent: style0;
            color: #633F32;
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

        .xl120 {
            mso-style-parent: style0;
            color: #633F32;
            font-family: Corbel, sans-serif;
            mso-font-charset: 0;
            text-align: center;
            vertical-align: middle;
            border-top: none;
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

                        <table id="tbl-big" style='border-collapse:
 collapse;table-layout:fixed;width:2001pt'>
                            <col class=xl68 width=87 style='mso-width-source:userset;mso-width-alt:2773;
 width:65pt'>
                            <col class=xl64 width=248 style='mso-width-source:userset;mso-width-alt:7936;
 width:186pt'>
                            <col class=xl64 width=193 style='mso-width-source:userset;mso-width-alt:6186;
 width:145pt'>
                            <col class=xl64 width=212 style='mso-width-source:userset;mso-width-alt:6784;
 width:159pt'>
                            <col class=xl64 width=241 style='mso-width-source:userset;mso-width-alt:7722;
 width:181pt'>
                            <col class=xl64 width=228 style='mso-width-source:userset;mso-width-alt:7296;
 width:171pt'>
                            <col class=xl64 width=191 span=4 style='mso-width-source:userset;mso-width-alt:
 6101;width:143pt'>
                            <col class=xl64 width=211 span=2 style='mso-width-source:userset;mso-width-alt:
 6741;width:158pt'>
                            <col class=xl64 width=188 style='mso-width-source:userset;mso-width-alt:6016;
 width:141pt'>
                            <col class=xl64 width=87 style='mso-width-source:userset;mso-width-alt:2773;
 width:65pt'>
                            <tr height=92 style='mso-height-source:userset;height:69.0pt'>
                                <td height=92 class=xl68 width=87 style='height:69.0pt;width:65pt'></td>
                                <td class=xl85 width=248 style='width:186pt'>8 Haziran Çarşamba<br>
                                    Wednesday, 8 Juny
                                </td>
                                <td colspan=4 class=xl96 width=874 style='border-right:1.5pt solid #B88472;
  width:656pt'>9 Haziran Perşembe<br>
                                    Thursday, 9 Juny
                                </td>
                                <td colspan=4 class=xl101 width=764 style='border-right:1.5pt solid #B88472;
  border-left:none;width:572pt'>10 Haziran Cuma<br>
                                    Friday, 10 Juny
                                </td>
                                <td colspan=2 class=xl96 width=422 style='border-right:.5pt solid #B88472;
  width:316pt'>11 Haziran Cumartesi<br>
                                    Saturday, 11 Juny
                                </td>
                                <td class=xl86 width=188 style='width:141pt'>12 Haziran Pazar<br>
                                    Sunday, 12 Juny
                                </td>
                                <td class=xl68 width=87 style='width:65pt'></td>
                            </tr>
                            <tr height=36 style='mso-height-source:userset;height:27.0pt'>
                                <td height=36 class=xl69 width=87 style='height:27.0pt;width:65pt'>10:00</td>
                                <td class=xl74 width=248 style='border-top:none;border-left:none;width:186pt'>
                                    &nbsp;
                                </td>
                                <td colspan=4 class=xl98 width=874 style='border-right:1.5pt solid #B88472;
  width:656pt'>AÇILIŞ TÖRENİ
                                </td>
                                <td colspan=4 class=xl105 width=764 style='border-right:1.5pt solid #B88472;
  border-left:none;width:572pt'>&nbsp;
                                </td>
                                <td colspan=2 class=xl106 width=422 style='border-right:.5pt solid #B88472;
  width:316pt'>&nbsp;
                                </td>
                                <td class=xl65 width=188 style='border-top:none;border-left:none;width:141pt'>
                                    &nbsp;
                                </td>
                                <td class=xl69 width=87 style='border-left:none;width:65pt'>10:00</td>
                            </tr>
                            <tr height=224 style='mso-height-source:userset;height:168.0pt'>
                                <td height=224 class=xl69 width=87 style='height:168.0pt;border-top:none;
  width:65pt'>11:00
                                </td>
                                <td class=xl75 width=248 style='border-top:none;border-left:none;width:186pt'>
                                    KONSER<font
                                            class="font5"><br>
                                        PİYANO-KEMAN RESİTALİ<br>
                                        (çevrimiçi)<br>
                                        <br>
                                        Eda Delikçi / Keman<br>
                                        Senem Zeynep Ercan / Piyano</font></td>
                                <td class=xl82 width=193 style='border-top:none;width:145pt'>AÇILIŞ KONUŞMASI<font
                                            class="font6"><br>
                                        İhsan ÇİÇEK</font></td>
                                <td class=xl66 width=212 style='border-top:none;border-left:none;width:159pt'>
                                    KONSER<font
                                            class="font5"><br>
                                        KANUN / PİYANO AÇIKLAMALI KONSERİ<br>
                                        (Kütahya Ahmet Yakupoğlu Güzel Sanatlar<br>
                                        Lisesi)<br>
                                        <br>
                                        Deniz Tuncer / Piyano<br>
                                        Seda Tüfekçioğlu / Kanun</font></td>
                                <td colspan=2 class=xl71 width=469 style='border-right:1.5pt solid #B88472;
  border-left:none;width:352pt'>KONSER<font class="font5"><br>
                                        TÜRK HALK MÜZİĞİ KONSERİ<br>
                                        (Nafi Güral Fen Lisesi)<br>
                                        <br>
                                        İsa KAHRAMAN</font></td>
                                <td class=xl83 width=191 style='border-top:none;border-left:none;width:143pt'>
                                    KONFERANS<font
                                            class="font6"><br>
                                        Oksana Dobzhanskaya<br>
                                        <br>
                                    </font><font class="font7">The Sound Landscapes of Arctic</font><font
                                            class="font6"><br>
                                    </font></td>
                                <td class=xl66 width=191 style='border-top:none;border-left:none;width:143pt'>
                                    KONSER<font
                                            class="font5"><br>
                                        GİTAR RESİTALİ<br>
                                        (Ahmet Yakupoğlu Güzel Sanatlar Lisesi)<br>
                                        <br>
                                        FELİPE VARGAS MAGDALENO</font></td>
                                <td class=xl66 width=191 style='border-top:none;border-left:none;width:143pt'>
                                    KONSER<font
                                            class="font5"><br>
                                        AFYON CAKA YILDIZLARI KONSERİ<br>
                                        (Boğaziçi Şehir Koleji)<br>
                                        <br>
                                        Hazırlayanlar: Filiz Yıldız-Gülşah Tazegül</font></td>
                                <td class=xl80 width=191 style='border-top:none;border-left:none;width:143pt'>
                                    KONSER<font
                                            class="font5"><br>
                                        TÜRK HALK MÜZİĞİ KONSERİ<br>
                                        (Necip Fazıl Anadolu Lisesi)<br>
                                        <br>
                                        İsa KAHRAMAN</font></td>
                                <td colspan=2 class=xl72 width=422 style='border-right:.5pt solid #B88472;
  width:316pt'>KONSER<font class="font5"><br>
                                        İNCE SAZ EŞLİĞİNDE HİSARLI AHMET<br>
                                        TÜRKÜLERİ<br>
                                        (Çevrimiçi)<br>
                                        <br>
                                        Nihan Ozan Köroğlu/Ney<br>
                                        Gamze Nevra Köroğlu/Klasik kemençe<br>
                                        Sibel Karaman/Ritim Saz<br>
                                        Özkan Özkoç/Kanun<br>
                                        Melih Yenilmez/Ud<br>
                                        Derya Eroğlu/Solist</font></td>
                                <td class=xl84 width=188 style='border-top:none;border-left:none;width:141pt'>
                                    KONFERANS<font
                                            class="font6"><br>
                                        Abdurrahman Ekinci<br>
                                        <br>
                                    </font><font class="font7">Dört Mevsim Üç Yurt</font><font class="font6"><br>
                                    </font></td>
                                <td class=xl69 width=87 style='border-top:none;border-left:none;width:65pt'>11:00
                                </td>
                            </tr>
                            <tr height=152 style='mso-height-source:userset;height:114.0pt'>
                                <td height=152 class=xl69 width=87 style='height:114.0pt;border-top:none;
  width:65pt'>11:45
                                </td>
                                <td class=xl74 width=248 style='border-top:none;border-left:none;width:186pt'>
                                    &nbsp;
                                </td>
                                <td colspan=4 class=xl102 width=874 style='border-right:1.5pt solid #B88472;
  width:656pt'>PANEL<font class="font6"><br>
                                        Ban Junrong (chair)<br>
                                        Hang Su<br>
                                        Wan Zhongru<br>
                                        (çevrimiçi)<br>
                                        <br>
                                    </font><font class="font7">The Singer Controls the Timbre to Adapt to the
                                        Climate Change Expressed in the Lyrics</font></td>
                                <td colspan=4 rowspan=3 class=xl109 width=764 style='border-right:1.5pt solid #B88472;
  border-bottom:.5pt solid #B88472;width:572pt'>&nbsp;
                                </td>
                                <td colspan=3 rowspan=3 class=xl109 width=610 style='border-right:.5pt solid #B88472;
  border-bottom:.5pt solid #B88472;width:457pt'>&nbsp;
                                </td>
                                <td class=xl69 width=87 style='border-top:none;border-left:none;width:65pt'>11:45
                                </td>
                            </tr>
                            <tr height=128 style='height:96.0pt'>
                                <td height=128 class=xl69 width=87 style='height:96.0pt;border-top:none;
  width:65pt'>13:00
                                </td>
                                <td class=xl75 width=248 style='border-top:none;border-left:none;width:186pt'>
                                    KONSER<font
                                            class="font5"><br>
                                        DUO ÇOKAMAY<br>
                                        (çevrimiçi)<br>
                                        <br>
                                        Merve Çokamay / Flüt<br>
                                        Bahadır Çokamay / Piyano</font></td>
                                <td colspan=4 class=xl106 width=874 style='border-right:1.5pt solid #B88472;
  width:656pt'>&nbsp;
                                </td>
                                <td class=xl69 width=87 style='border-top:none;border-left:none;width:65pt'>13:00
                                </td>
                            </tr>
                            <tr height=144 style='mso-height-source:userset;height:108.75pt'>
                                <td height=144 class=xl69 width=87 style='height:108.75pt;border-top:none;
  width:65pt'>13:45
                                </td>
                                <td class=xl76 width=248 style='border-top:none;border-left:none;width:186pt'>
                                    &nbsp;
                                </td>
                                <td colspan=4 class=xl102 width=874 style='border-right:1.5pt solid #B88472;
  width:656pt'>PANEL<font class="font6"><br>
                                        Abdullah Akat (başkan)<br>
                                        Akın Oktav<br>
                                        Ali Tan<br>
                                        (çevrimiçi)<br>
                                        <br>
                                    </font><font class="font7">Ney ve Kemençe Yapımında Deneysel Ve Sayısal
                                        Modellemeye İlişkin Güncel Yaklaşımlar</font></td>
                                <td class=xl69 width=87 style='border-top:none;border-left:none;width:65pt'>13:45
                                </td>
                            </tr>
                            <tr height=223 style='mso-height-source:userset;height:167.25pt'>
                                <td height=223 class=xl69 width=87 style='height:167.25pt;border-top:none;
  width:65pt'>14:00
                                </td>
                                <td class=xl75 width=248 style='border-top:none;border-left:none;width:186pt'>
                                    KONSER<font
                                            class="font6"><br>
                                        KEMAN-PİYANO KONSERİ<br>
                                        (çevrimiçi)<br>
                                        <br>
                                        Yılmaz Lekesizgöz / Keman<br>
                                        Hale Vural/Piyano</font></td>
                                <td class=xl78 width=193 style='border-top:none;width:145pt'>KONSER<font
                                            class="font5"><br>
                                        PİYANO KONSERİ<br>
                                        (Kırdar Bilgiören Koleji)<br>
                                        <br>
                                        AKÜ Devlet Konservatuvarı Müzik Bölümü Piyano<br>
                                        ASD Öğrencileri</font></td>
                                <td class=xl66 width=212 style='border-top:none;border-left:none;width:159pt'>
                                    KONSER<font
                                            class="font5"><br>
                                        ÜÇ KEMAN KONSERİ<br>
                                        (Ahmet Yakupoğlu Güzel Sanatlar Lisesi)<br>
                                        <br>
                                        Şenol Aydın / Keman<br>
                                        Gülen Ege / Keman<br>
                                        Şeniz Aybulus / Keman</font></td>
                                <td class=xl66 width=241 style='border-top:none;border-left:none;width:181pt'>
                                    KONSER<font
                                            class="font5"><br>
                                        EMRE ÜNLENEN GİTAR RESİTALİ<br>
                                        (Kütahya Kent Ormanı-Sosyal Bilimler Lisesi)<br>
                                        <br>
                                        Deniz Tuncer / Piyano<br>
                                        Seda Tüfekçioğlu / Kanun</font></td>
                                <td class=xl75 width=228 style='border-top:none;border-left:none;width:171pt'>
                                    KONSER<font
                                            class="font5"><br>
                                        TÜRK SANAT MÜZİĞİ KONSERİ<br>
                                        (Sağlık Bilimleri Üniversitesi)<br>
                                        <br>
                                        AKÜ TSM Bölümü<br>
                                        Hazırlayan: Hakan Akdeniz-Erman Uysal</font></td>
                                <td colspan=4 class=xl104 width=764 style='border-right:1.5pt solid #B88472;
  border-left:none;width:572pt'>KONSER<font class="font5"><br>
                                        KIRDAR BİLGİÖREN KOLEJİ ÖĞRENCİLERİ<br>
                                        KONSERİ<br>
                                        (Kırdar Bilgiören Koleji)<br>
                                        <br>
                                        Hazırlayan: Rafet Kırdar</font></td>
                                <td class=xl72 width=211 style='border-top:none;width:158pt'>KONSER<font
                                            class="font5"><br>
                                        FARKLI ÖĞRENENLER “OTİZM VE MÜZİK”<br>
                                        KONSERİ<br>
                                        (Kütahya-BİLSEM)<br>
                                        <br>
                                        Batuhan Kil/Piyano ve Ud<br>
                                        Recep Ege Altıncıoğlu/Şan<br>
                                        Çağrıhan Atyıldız/Çello<br>
                                        Buğra Çankır/Piyano<br>
                                        Koral Erdeniz/Piyano</font></td>
                                <td class=xl71 width=211 style='border-top:none;width:158pt'>KONSER<font
                                            class="font5"><br>
                                        ARYA SU GÜLENÇ PİYANO RESİTALİ<br>
                                        (Çevrimiçi)</font></td>
                                <td class=xl71 width=188 style='border-top:none;width:141pt'>KONSER<font
                                            class="font5"><br>
                                        AYSEL GÖKÇE ÇAĞLAR PİYANO KONSERİ<br>
                                        (Çevrimiçi)</font></td>
                                <td class=xl69 width=87 style='border-top:none;width:65pt'>14:00</td>
                            </tr>
                            <tr height=139 style='mso-height-source:userset;height:104.25pt'>
                                <td height=139 class=xl69 width=87 style='height:104.25pt;border-top:none;
  width:65pt'>14:30
                                </td>
                                <td class=xl77 width=248 style='border-top:none;border-left:none;width:186pt'>
                                    &nbsp;
                                </td>
                                <td class=xl70 width=193 style='border-top:none;width:145pt'>&nbsp;</td>
                                <td class=xl70 width=212 style='border-top:none;width:159pt'>&nbsp;</td>
                                <td class=xl70 width=241 style='border-top:none;width:181pt'>&nbsp;</td>
                                <td class=xl79 width=228 style='border-top:none;width:171pt'>&nbsp;</td>
                                <td colspan=4 class=xl104 width=764 style='border-right:1.5pt solid #B88472;
  border-left:none;width:572pt'>KONSER<font class="font5"><br>
                                        TÜRK HALK MÜZİĞİ KONSERİ<br>
                                        (İl Milli Eğitim Müdürlüğü Beylerbeyi<br>
                                        Salonu)<br>
                                        <br>
                                        Veli Yöntem/Bağlama ve Kabak Kemane<br>
                                        Çiğdem Yöntem/Solo</font></td>
                                <td colspan=3 class=xl105 width=610 style='border-right:.5pt solid #B88472;
  border-left:none;width:457pt'>&nbsp;
                                </td>
                                <td class=xl69 width=87 style='border-top:none;border-left:none;width:65pt'>14:30
                                </td>
                            </tr>
                            <tr height=137 style='mso-height-source:userset;height:103.5pt'>
                                <td height=137 class=xl69 width=87 style='height:103.5pt;border-top:none;
  width:65pt'>16:00
                                </td>
                                <td class=xl75 width=248 style='border-top:none;border-left:none;width:186pt'>
                                    KONSER<font
                                            class="font6"><br>
                                        ALİ ERİM GİTAR RESİTALİ</font></td>
                                <td colspan=4 class=xl72 width=874 style='border-right:1.5pt solid #B88472;
  width:656pt'>AŞIK YOKSUL DERVİŞ<font class="font6"><br>
                                        (Dumlupınar Üniversitesi Fen Edebiyat Fakültesi)<br>
                                        <br>
                                        Hazırlayan: Doç. Dr. Erdal AKAY</font></td>
                                <td colspan=4 class=xl104 width=764 style='border-right:1.5pt solid #B88472;
  border-left:none;width:572pt'>KONSER<font class="font6"><br>
                                        KÜTAHYA KIR GEZEĞİ<br>
                                        (Regülatör)<br>
                                        <br>
                                        Mustafa Salün ve Arkadaşları</font></td>
                                <td class=xl78 width=211 style='border-top:none;width:158pt'>KONSER<font
                                            class="font6"><br>
                                        VİYOLA PİYANO KONSERİ<br>
                                        (Çevrimiçi)<br>
                                        <br>
                                        Bilgütay Kaan Öztürk/Viyola<br>
                                        İrem Yalçıner/Piyano</font></td>
                                <td colspan=2 class=xl88 width=399 style='border-right:.5pt solid #B88472;
  border-left:none;width:299pt'>&nbsp;
                                </td>
                                <td class=xl69 width=87 style='border-top:none;border-left:none;width:65pt'>16:00
                                </td>
                            </tr>
                            <tr height=189 style='mso-height-source:userset;height:142.5pt'>
                                <td height=189 class=xl69 width=87 style='height:142.5pt;border-top:none;
  width:65pt'>20:00
                                </td>
                                <td class=xl75 width=248 style='border-top:none;border-left:none;width:186pt'>
                                    KONSER<font
                                            class="font6"><br>
                                        ZEYBEKLER<br>
                                        (Hezar Dinari Kültür Merkezi)<br>
                                        <br>
                                        Mehmet Sevim</font></td>
                                <td colspan=4 class=xl72 width=874 style='border-right:1.5pt solid #B88472;
  width:656pt'>BAĞLAMA GİTAR İKİLİSİ<font class="font6"><br>
                                        (Hezar Dinari Kültür Merkezi)<br>
                                        <br>
                                        Sedat Çılgın/Bağlama<br>
                                        İlter Cebeci/Gitar</font></td>
                                <td colspan=4 class=xl104 width=764 style='border-right:1.5pt solid #B88472;
  border-left:none;width:572pt'>KONSER<font class="font6"><br>
                                        AFYON CAKA ORKESTRASI KONSERİ<br>
                                        (Hezar Dinari Kültür Merkezi)<br>
                                        <br>
                                        Hazırlayanlar: Filiz Yıldız-Gülşah Tazegül</font></td>
                                <td class=xl81 width=211 style='border-top:none;width:158pt'>PANEL<font
                                            class="font6"><br>
                                        Marisa Fonterrada (chair)<br>
                                        Andrea Cohen<br>
                                        Thiago Cury<br>
                                        (çevrimiçi)<br>
                                        <br>
                                    </font><font class="font7">Environmental Crises and Music: Can Art Pinpoint
                                        Global Solutions?<br>
                                    </font></td>
                                <td class=xl66 width=211 style='border-top:none;border-left:none;width:158pt'>
                                    KONSER<font
                                            class="font6"><br>
                                        SERDAR KASTELLİ NEFESLENİŞLER<br>
                                        (Hezar Dinari Kültür Merkezi)<br>
                                        <br>
                                        Bilgütay Kaan Öztürk/Viyola<br>
                                        İrem Yalçıner/Piyano</font></td>
                                <td class=xl87 width=188 style='border-top:none;border-left:none;width:141pt'>
                                    KAPANIŞ
                                    TÖRENİ
                                </td>
                                <td class=xl69 width=87 style='border-top:none;width:65pt'>20:00</td>
                            </tr>
                            <tr height=45 style='height:34.0pt'>
                                <td height=45 class=xl68 width=87 style='height:34.0pt;width:65pt'></td>
                                <td class=xl73 width=248 style='border-top:none;width:186pt'>8 Haziran
                                    Çarşamba<br>
                                    Wednesday, 8 Juny
                                </td>
                                <td colspan=4 class=xl90 width=874 style='border-right:1.5pt solid #B88472;
  width:656pt'>9 Haziran Perşembe<br>
                                    Thursday, 9 Juny
                                </td>
                                <td colspan=4 class=xl90 width=764 style='border-right:.5pt solid #B88472;
  width:572pt'>10 Haziran Cuma<br>
                                    Friday, 10 Juny
                                </td>
                                <td colspan=2 class=xl93 width=422 style='border-right:.5pt solid #B88472;
  border-left:none;width:316pt'>11 Haziran Cumartesi<br>
                                    Saturday, 11 Juny
                                </td>
                                <td class=xl67 width=188 style='border-top:none;width:141pt'>12 Haziran
                                    Pazar<br>
                                    Sunday, 12 Juny
                                </td>
                                <td class=xl64 width=87 style='width:65pt'></td>
                            </tr>
                            <![if supportMisalignedColumns]>
                            <tr height=0 style='display:none'>
                                <td width=87 style='width:65pt'></td>
                                <td width=248 style='width:186pt'></td>
                                <td width=193 style='width:145pt'></td>
                                <td width=212 style='width:159pt'></td>
                                <td width=241 style='width:181pt'></td>
                                <td width=228 style='width:171pt'></td>
                                <td width=191 style='width:143pt'></td>
                                <td width=191 style='width:143pt'></td>
                                <td width=191 style='width:143pt'></td>
                                <td width=191 style='width:143pt'></td>
                                <td width=211 style='width:158pt'></td>
                                <td width=211 style='width:158pt'></td>
                                <td width=188 style='width:141pt'></td>
                                <td width=87 style='width:65pt'></td>
                            </tr>
                            <![endif]>
                        </table>

                    </div>
                    <!-- eof pad 10 per -->
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
                tableExpanded = true;
            } else {
                bigTable.style.transform = "scale(" + scaleRatio + ")";
                tableWrapper.style.height = parseInt(scaleRatio * bigTable.offsetHeight) + "px";
                tableExpanded = false;
            }
        });
    })();

</script>
</body>

</html>