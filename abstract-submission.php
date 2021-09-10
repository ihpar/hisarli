<?php
session_start();

$is_secure = true;

$page_name = "abstract-submission";

$form_posted = false;
$form_result = "";

require_once "dbms/utils.php";

require_once "modules/header_prefixes.php";

require_once "langs/lang_global.php";

require_once "langs/lang_abstract-submission.php";

function is_null_or_empty_string($str): bool
{
    return (!isset($str) || trim($str) === '');
}

function generateRandomString($length = 10)
{
    return substr(str_shuffle(str_repeat($x = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length / strlen($x)))), 1, $length);
}

function filenameSanitizer($fileName)
{
    $dangerousCharacters = array(" ", '"', "'", "&", "/", "\\", "?", "#", ".", ",", ">", "<", "|", "~", "!");
    return str_replace($dangerousCharacters, '_', $fileName);
}

if ($_POST) {
    $form_posted = true;

    $upload_dir = "uploads/Abs_" . date("Y");
    if (!is_dir($upload_dir)) {
        mkdir($upload_dir);
    }
    $upload_dir = $upload_dir . "/";

    $name_surname = "";
    $institution = "";
    $email = "";
    $phone = "";
    $photo = "";
    $address = "";
    $cv = "";
    $paper = "";
    $abstract_title = "";
    $authors = "";
    $abstract = "";
    $keywords = "";

    $email_body = "";

    if (isset($_POST['txt-name-surname'])) {
        $name_surname = filter_var(trim($_POST['txt-name-surname']), FILTER_SANITIZE_STRING);
        $email_body .= "Ad Soyad: " . $name_surname . "<br>";
    }

    if (isset($_POST['txt-institution'])) {
        $institution = filter_var(trim($_POST['txt-institution']), FILTER_SANITIZE_STRING);
        $email_body .= "Kurum: " . $institution . "<br>";
    }

    if (isset($_POST['txt-email'])) {
        $email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['txt-email']);
        $email = filter_var(trim($email), FILTER_VALIDATE_EMAIL);
        $email_body .= "Email: " . $email . "<br>";
    }

    if (isset($_POST['txt-phone'])) {
        $phone = filter_var(trim($_POST['txt-phone']), FILTER_SANITIZE_STRING);
        $email_body .= "Telefon: " . $phone . "<br>";
    }

    $photo = $_FILES["fup-photo"]["name"];

    if (isset($_POST['txt-address'])) {
        $address = filter_var(trim($_POST['txt-address']), FILTER_SANITIZE_STRING);
        $email_body .= "Adres: " . $address . "<br>";
    }

    if (isset($_POST['txt-cv'])) {
        $cv = filter_var(trim($_POST['txt-cv']), FILTER_SANITIZE_STRING);
        $email_body .= "Özgeçmiş: " . $cv . "<br>";
    }

    $paper = $_FILES["fup-paper"]["name"];

    if (isset($_POST['txt-abstract-title'])) {
        $abstract_title = filter_var(trim($_POST['txt-abstract-title']), FILTER_SANITIZE_STRING);
        $email_body .= "Başlık: " . $abstract_title . "<br>";
    }

    if (isset($_POST['txt-abstract-authors'])) {
        $authors = filter_var(trim($_POST['txt-abstract-authors']), FILTER_SANITIZE_STRING);
        $email_body .= "Yazar(lar): " . $authors . "<br>";
    }

    if (isset($_POST['txt-abstract'])) {
        $abstract = filter_var(trim($_POST['txt-abstract']), FILTER_SANITIZE_STRING);
        $email_body .= "Özet: " . $abstract . "<br>";
    }

    if (isset($_POST['txt-abstract-keywords'])) {
        $keywords = filter_var(trim($_POST['txt-abstract-keywords']), FILTER_SANITIZE_STRING);
        $email_body .= "Anahtar Kelimeler: " . $keywords . "<br>";
    }

    if (!is_null_or_empty_string($name_surname) &&
        !is_null_or_empty_string($institution) &&
        !is_null_or_empty_string($email) &&
        !is_null_or_empty_string($phone) &&
        !is_null_or_empty_string($photo) &&
        !is_null_or_empty_string($address) &&
        !is_null_or_empty_string($cv) &&
        !is_null_or_empty_string($paper) &&
        !is_null_or_empty_string($abstract_title) &&
        !is_null_or_empty_string($authors) &&
        !is_null_or_empty_string($abstract) &&
        !is_null_or_empty_string($keywords)) {

        // photo
        $user_dir = $upload_dir . filenameSanitizer($name_surname);
        if (!is_dir($user_dir)) {
            mkdir($user_dir);
        }
        $user_dir = $user_dir . "/";

        $photo_base_name = basename($_FILES["fup-photo"]["name"]);
        $photo_target_file = $user_dir . $photo_base_name;
        while (file_exists($photo_target_file)) {
            $rand_str = generateRandomString(12);
            $photo_target_file = $user_dir . $rand_str . "-" . $photo_base_name;
        }
        if (move_uploaded_file($_FILES["fup-photo"]["tmp_name"], $photo_target_file)) {
            $photo = "OK";
            $photo_addr = "https://hisarliahmet.org/" . $photo_target_file;
            $email_body .= "Fotoğraf: <a href='" . $photo_addr . "'>" . $photo_addr . "</a><br>";
        }
        // eof photo

        // paper
        $paper_base_name = basename($_FILES["fup-paper"]["name"]);
        $paper_target_file = $user_dir . $paper_base_name;
        while (file_exists($paper_target_file)) {
            $rand_str = generateRandomString(12);
            $paper_target_file = $user_dir . $rand_str . "-" . $paper_base_name;
        }
        if (move_uploaded_file($_FILES["fup-paper"]["tmp_name"], $paper_target_file)) {
            $paper = "OK";
            $paper_addr = "https://hisarliahmet.org/" . $paper_target_file;
            $email_body .= "Çalışma Dosyası: <a href='" . $paper_addr . "'>" . $paper_addr . "</a><br>";
        }
        // eof paper

        $paper_dept_email = "abstracts@hisarliahmet.org";

        $headers = 'MIME-Version: 1.0' . "\r\n"
            . 'Content-type: text/html; charset=utf-8' . "\r\n"
            . 'From: ' . $email . "\r\n";

        // send mail
        if (mail($paper_dept_email, "Özet Gönderim Formu", $email_body, $headers)) {
            $form_result = $lang_abs_sub["tesekkurler"][$pref_lang] . " " . $name_surname . ". <br>" . $lang_abs_sub["iletilmistir"][$pref_lang];

            // notify sender back
            $headers = 'MIME-Version: 1.0' . "\r\n"
                . 'Content-type: text/html; charset=utf-8' . "\r\n"
                . 'From: ' . $paper_dept_email . "\r\n";

            $email_body = $lang_abs_sub["tesekkurler"][$pref_lang] . " " . $name_surname . ", <br>" .
                $lang_abs_sub["has_geri_bildirim_mesaji"][$pref_lang];

            $email_body = str_replace("{title}", $abstract_title, $email_body);

            mail($email, $lang_abs_sub["has_geri_bildirim_konusu"][$pref_lang], $email_body, $headers);

        } else {
            $form_result = $lang_abs_sub["beklenmedik_hata"][$pref_lang];
        }
        // eof mail
    } else {
        // required fields
        $form_result = $lang_abs_sub["form_eksik"][$pref_lang];
    }
}

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

        .row {
            display: flex;
            flex-direction: row;
        }

        .row .col-12 {
            box-sizing: border-box;
            width: 100%;
            padding-left: 16px;
            padding-right: 16px;
        }

        .row .col-6 {
            box-sizing: border-box;
            width: 50%;
            padding-left: 16px;
            padding-right: 16px;
        }

        .mdl-textfield {
            width: 100%;
        }

        input[type="text"],
        textarea.mdl-textfield__input {
            background-color: #f2f3f4;
            padding: 12px;
            margin: 0;
            box-sizing: border-box;
            color: inherit;
        }

        button.full-width {
            width: 100%;
        }

        input[type="file"] {
            opacity: 0;
            width: 0.1px;
            height: 0.1px;
        }

        #spn-photo-result,
        #spn-paper-result {
            margin-left: 12px;
            font-style: italic;
        }

        .photo-row,
        .paper-row {
            display: flex;
            flex-direction: row;
            align-items: center;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .spn-fup-error {
            color: rgb(213, 0, 0);
            position: absolute;
            font-size: 12px;
            margin-top: 60px;
            visibility: hidden;
            display: block;
        }

        .is-invalid .spn-fup-error {
            visibility: visible;
        }

        @media (max-width: 839px) {
            .row {
                display: flex;
                flex-direction: column;
            }

            .row .col-6 {
                width: 100%;
                padding-left: 16px;
                padding-right: 16px;
            }

            .sec-wrap {
                padding: 16px 0;
            }

            .pad-10-per {
                padding: 0 10px;
            }

            .row .col-12,
            .row .col-6 {
                padding-left: 0;
                padding-right: 0;
            }

            .photo-label,
            .paper-label {
                width: 100%;
                box-sizing: border-box;
            }

            #spn-photo-result,
            #spn-paper-result {
                margin: 16px 0 0 0;
                width: 100%;
            }

            .photo-row,
            .paper-row {
                flex-direction: column;
            }

            .spn-fup-error {
                margin-top: 72px;
                left: 0;
            }
        }

        #dv-contact-form-result {
            position: fixed;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.9);
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 111;
            opacity: 1;
            font-size: 24px;
            line-height: 150%;
            transition: opacity 800ms;
        }

        #dv-contact-form-result.fade-out {
            opacity: 0;
        }

        .dv-author-count {
            display: inline-block;
            color: #596e87;
            font-size: 16px;
            text-align: left;
            background-color: #eee;
            padding: 12px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            margin-right: 8px;
        }

        #spn-author-count {
            font-weight: bold;
        }

        fieldset {
            border: 1px solid #ccc;
            margin: 0;
            padding: 12px;
        }

        fieldset legend {
            color: #596e87;
            font-size: 16px;
            padding: 0 6px;
        }

        .dv-authors-wrapper fieldset {
            margin: 16px 0;
        }

        .hidden-author {
            display: none;
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

            <!-- Satir 1 Form -->
            <section class="pad-tb-24">
                <div class="pad-10-per">
                    <div class="cerceve">
                        <h3 class="center-text sec-h3"><?php echo($lang_abs_sub["bildiri_ozeti_gonderim_formu"][$pref_lang]); ?></h3>
                        <form action="abstract-submission.php" method="post" id="frm-abstract"
                              enctype="multipart/form-data">
                            <!-- Row -->
                            <div class="row">
                                <div class="col-6">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <input class="mdl-textfield__input" type="text" id="txt-name-surname"
                                               name="txt-name-surname"/>
                                        <label class="mdl-textfield__label" for="txt-name-surname">
                                            <?php echo($lang_abs_sub["ad_soyad"][$pref_lang]); ?>
                                        </label>
                                        <span class="mdl-textfield__error">
                                            <?php echo($lang_abs_sub["bos_birakilamaz"][$pref_lang]); ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <input class="mdl-textfield__input" type="text" id="txt-institution"
                                               name="txt-institution"/>
                                        <label class="mdl-textfield__label" for="txt-institution">
                                            <?php echo($lang_abs_sub["kurum"][$pref_lang]); ?>
                                        </label>
                                        <span class="mdl-textfield__error">
                                            <?php echo($lang_abs_sub["bos_birakilamaz"][$pref_lang]); ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- Row -->
                            <div class="row">
                                <div class="col-6">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <input class="mdl-textfield__input" type="text" id="txt-email"
                                               name="txt-email"/>
                                        <label class="mdl-textfield__label" for="txt-email">
                                            <?php echo($lang_abs_sub["email"][$pref_lang]); ?>
                                        </label>
                                        <span class="mdl-textfield__error">
                                            <?php echo($lang_abs_sub["bos_birakilamaz"][$pref_lang]); ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <input class="mdl-textfield__input" type="text" id="txt-phone"
                                               name="txt-phone"/>
                                        <label class="mdl-textfield__label" for="txt-phone">
                                            <?php echo($lang_abs_sub["telefon"][$pref_lang]); ?>
                                        </label>
                                        <span class="mdl-textfield__error">
                                            <?php echo($lang_abs_sub["bos_birakilamaz"][$pref_lang]); ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- Row -->
                            <div class="row">
                                <div class="col-12 photo-row" style="position: relative;">
                                    <label
                                            for="fup-photo"
                                            class="
                                            photo-label
                                            mdl-button mdl-js-button
                                            mdl-button--raised
                                            mdl-js-ripple-effect
                                            mdl-button--accent
                                    ">
                                        <?php echo($lang_abs_sub["fotograf_yukleyiniz"][$pref_lang]); ?>
                                    </label>
                                    <input type="file" id="fup-photo" name="fup-photo" tabindex="5"/>
                                    <span id="spn-photo-result">
                                        <?php echo($lang_abs_sub["fotograf_secilmedi"][$pref_lang]); ?>
                                    </span>
                                    <span class="spn-fup-error">
                                        <?php echo($lang_abs_sub["bos_birakilamaz"][$pref_lang]); ?>
                                    </span>
                                </div>
                            </div>
                            <!-- Row -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <textarea class="mdl-textfield__input" rows="3" id="txt-address"
                                                  name="txt-address"></textarea>
                                        <label class="mdl-textfield__label" for="txt-address">
                                            <?php echo($lang_abs_sub["adres"][$pref_lang]); ?>
                                        </label>
                                        <span class="mdl-textfield__error">
                                            <?php echo($lang_abs_sub["bos_birakilamaz"][$pref_lang]); ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- Row -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <textarea class="mdl-textfield__input" rows="3" id="txt-cv"
                                                  name="txt-cv"></textarea>
                                        <label class="mdl-textfield__label" for="txt-cv">
                                            <?php echo($lang_abs_sub["kisa_ozgecmis"][$pref_lang]); ?>
                                        </label>
                                        <span class="mdl-textfield__error">
                                            <?php echo($lang_abs_sub["bos_birakilamaz"][$pref_lang]); ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- Row -->
                            <!--
                            <div class="row">
                                <div class="col-12 paper-row" style="position: relative;">
                                    <label
                                            for="fup-paper"
                                            class="
                                            paper-label
                                            mdl-button mdl-js-button
                                            mdl-button--raised
                                            mdl-js-ripple-effect
                                            mdl-button--accent
                                    ">
                                        <?php echo($lang_abs_sub["ozet_yukleyiniz"][$pref_lang]); ?>
                                    </label>
                                    <input type="file" id="fup-paper" name="fup-paper"/>
                                    <span id="spn-paper-result">
                                        <?php echo($lang_abs_sub["ozet_secilmedi"][$pref_lang]); ?>
                                    </span>
                                    <span class="spn-fup-error">
                                        <?php echo($lang_abs_sub["bos_birakilamaz"][$pref_lang]); ?>
                                    </span>
                                </div>
                            </div>
                            -->

                            <!-- Türkçe Özet Başlığı -->
                            <?php if ($pref_lang == "tr") { ?>
                                <!-- Row -->
                                <div class="row">
                                    <div class="col-12">
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                            <input class="mdl-textfield__input" type="text" id="txt-abstract-title-tr"
                                                   name="txt-abstract-title-tr"/>
                                            <label class="mdl-textfield__label" for="txt-abstract-title-tr">
                                                <?php echo($lang_abs_sub["ozet_basligi_tr"][$pref_lang]); ?>
                                            </label>
                                            <span class="mdl-textfield__error">
                                            <?php echo($lang_abs_sub["bos_birakilamaz"][$pref_lang]); ?>
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                            <!-- Row -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <input class="mdl-textfield__input" type="text" id="txt-abstract-title"
                                               name="txt-abstract-title"/>
                                        <label class="mdl-textfield__label" for="txt-abstract-title">
                                            <?php echo(($pref_lang == "tr") ?
                                                $lang_abs_sub["ozet_basligi_en"][$pref_lang] : $lang_abs_sub["ozet_basligi"][$pref_lang]); ?>
                                        </label>
                                        <span class="mdl-textfield__error">
                                            <?php echo($lang_abs_sub["bos_birakilamaz"][$pref_lang]); ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- Row -->
                            <div class="row">
                                <div class="col-12">
                                    <div style="padding: 20px 0;">
                                        <div class="dv-author-count">
                                            <?php echo($lang_abs_sub["yazar_sayisi"][$pref_lang]); ?>
                                            <span id="spn-author-count">1</span>
                                        </div>
                                        <button type="button" id="btn-add-author"
                                                class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-js-ripple-effect mdl-button--colored">
                                            <i class="material-icons">add</i>
                                        </button>
                                        <button type="button" id="btn-remove-author"
                                                class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-js-ripple-effect mdl-button--colored">
                                            <i class="material-icons">remove</i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- Row -->
                            <div class="row">
                                <div class="col-12 dv-authors-wrapper">
                                    <?php
                                    $max_author_count = 6;

                                    for ($i = 1; $i <= $max_author_count; $i++) { ?>
                                        <!-- Author <?php echo($i); ?> -->
                                        <fieldset id="fs-author-<?php echo($i); ?>"
                                                  class="fs-author <?php echo(($i > 1) ? " hidden-author" : ''); ?>">
                                            <legend><?php echo($lang_abs_sub["yazar_indeksli"][$pref_lang] . " " . $i); ?></legend>
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                <input class="mdl-textfield__input" type="text"
                                                       id="txt-abstract-author-<?php echo($i); ?>"
                                                       name="txt-abstract-author-<?php echo($i); ?>"/>
                                                <label class="mdl-textfield__label"
                                                       for="txt-abstract-author-<?php echo($i); ?>">
                                                    <?php echo($lang_abs_sub["ad_soyad"][$pref_lang]); ?>
                                                </label>
                                                <span class="mdl-textfield__error">
                                            <?php echo($lang_abs_sub["bos_birakilamaz"][$pref_lang]); ?>
                                        </span>
                                            </div>

                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                <input class="mdl-textfield__input" type="text"
                                                       id="txt-abstract-author-institution-<?php echo($i); ?>"
                                                       name="txt-abstract-author-institution-<?php echo($i); ?>"/>
                                                <label class="mdl-textfield__label"
                                                       for="txt-abstract-author-institution-<?php echo($i); ?>">
                                                    <?php echo($lang_abs_sub["kurum"][$pref_lang]); ?>
                                                </label>
                                                <span class="mdl-textfield__error">
                                            <?php echo($lang_abs_sub["bos_birakilamaz"][$pref_lang]); ?>
                                        </span>
                                            </div>

                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                <input class="mdl-textfield__input" type="text"
                                                       id="txt-abstract-author-email-<?php echo($i); ?>"
                                                       name="txt-abstract-author-email-<?php echo($i); ?>"/>
                                                <label class="mdl-textfield__label"
                                                       for="txt-abstract-author-email-<?php echo($i); ?>">
                                                    <?php echo($lang_abs_sub["email"][$pref_lang]); ?>
                                                </label>
                                                <span class="mdl-textfield__error">
                                            <?php echo($lang_abs_sub["bos_birakilamaz"][$pref_lang]); ?>
                                        </span>
                                            </div>
                                        </fieldset>
                                    <?php } ?>
                                    <input type="hidden" id="txt-author-count" name="txt-author-count" value="1">
                                </div>
                            </div>

                            <!-- Türkçe Özet -->
                            <?php if ($pref_lang == "tr") { ?>
                                <!-- Row -->
                                <div class="row">
                                    <div class="col-12">
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <textarea class="mdl-textfield__input" rows="18" id="txt-abstract-tr"
                                                  name="txt-abstract-tr"></textarea>
                                            <label class="mdl-textfield__label" for="txt-abstract-tr">
                                                <?php echo($lang_abs_sub["ozet_metni_tr"][$pref_lang]); ?>
                                            </label>
                                            <span class="mdl-textfield__error">
                                            <?php echo($lang_abs_sub["bos_birakilamaz"][$pref_lang]); ?>
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                            <!-- Row -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <textarea class="mdl-textfield__input" rows="18" id="txt-abstract"
                                                  name="txt-abstract"></textarea>
                                        <label class="mdl-textfield__label" for="txt-abstract">
                                            <?php echo(($pref_lang == "tr") ?
                                                $lang_abs_sub["ozet_metni_en"][$pref_lang] : $lang_abs_sub["ozet_metni"][$pref_lang]); ?>
                                        </label>
                                        <span class="mdl-textfield__error">
                                            <?php echo($lang_abs_sub["bos_birakilamaz"][$pref_lang]); ?>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <!-- Türkçe Anahtar Kelimeler -->
                            <?php if ($pref_lang == "tr") { ?>
                                <!-- Row -->
                                <div class="row">
                                    <div class="col-12">
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                            <input class="mdl-textfield__input" type="text"
                                                   id="txt-abstract-keywords-tr"
                                                   name="txt-abstract-keywords-tr"/>
                                            <label class="mdl-textfield__label" for="txt-abstract-keywords-tr">
                                                <?php echo($lang_abs_sub["anahtar_kelimeler_tr"][$pref_lang]); ?>
                                            </label>
                                            <span class="mdl-textfield__error">
                                            <?php echo($lang_abs_sub["bos_birakilamaz"][$pref_lang]); ?>
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                            <!-- Row -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <input class="mdl-textfield__input" type="text" id="txt-abstract-keywords"
                                               name="txt-abstract-keywords"/>
                                        <label class="mdl-textfield__label" for="txt-abstract-keywords">
                                            <?php echo(($pref_lang == "tr") ?
                                                $lang_abs_sub["anahtar_kelimeler_en"][$pref_lang] : $lang_abs_sub["anahtar_kelimeler"][$pref_lang]); ?>
                                        </label>
                                        <span class="mdl-textfield__error">
                                            <?php echo($lang_abs_sub["bos_birakilamaz"][$pref_lang]); ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- Row -->
                            <div class="row" style="margin-top: 20px;">
                                <div class="col-12">
                                    <button
                                            id="btn-submit-form"
                                            name="btn-submit-form"
                                            type="submit"
                                            form="frm-abstract"
                                            class="
                                                  full-width
                                                  mdl-button mdl-js-button
                                                  mdl-button--raised
                                                  mdl-js-ripple-effect
                                                  mdl-button--accent
                                                "
                                    >
                                        <?php echo($lang_abs_sub["gonder"][$pref_lang]); ?>
                                    </button>
                                </div>
                            </div>
                            <!-- Row -->
                        </form>
                    </div>
                </div>
            </section>

            <!-- Eof Icerik -->
        </div>

        <!-- Footer -->
        <?php require_once("modules/footer.php"); ?>

    </div>
</div>

<?php if ($form_posted) { ?>
    <div id="dv-contact-form-result">
        <?php echo($form_result); ?>
    </div>
<?php } ?>

<script src="js/material.js"></script>
<script>
    let photoSelected = false;
    let paperSelected = false;
    let numAuthors = 1;

    function hideContactFormResult() {
        let contactFormResultDiv = document.querySelector('#dv-contact-form-result');
        setTimeout(() => {
            contactFormResultDiv.classList.add("fade-out");
            setTimeout(() => {
                contactFormResultDiv.remove();
            }, 1000);
        }, 3000);
    }

    (function () {
        // auto run

        // add - remove authors
        const hiddenAuthorCount = document.querySelector("#txt-author-count");
        const numAuthorSpan = document.querySelector("#spn-author-count");

        const btnAddAuthor = document.querySelector("#btn-add-author");
        btnAddAuthor.addEventListener('click', (e) => {
            if (numAuthors === 6) return;
            let nextAuthor = document.querySelectorAll(".hidden-author")[0];
            nextAuthor.classList.remove("hidden-author");
            numAuthors++;
            numAuthorSpan.innerHTML = numAuthors.toString();
            hiddenAuthorCount.value = numAuthors.toString();
        });

        const btnRemoveAuthor = document.querySelector("#btn-remove-author");
        btnRemoveAuthor.addEventListener('click', (e) => {
            if (numAuthors === 1) return;
            let lastAuthor = document.querySelectorAll(".fs-author")[numAuthors - 1];
            lastAuthor.classList.add("hidden-author");
            numAuthors--;
            numAuthorSpan.innerHTML = numAuthors.toString();
            hiddenAuthorCount.value = numAuthors.toString();
        });

        // photo upload
        const filePhoto = document.querySelector("#fup-photo");
        const filePhotoInfo = document.querySelector("#spn-photo-result");
        filePhoto.addEventListener("change", (e) => {
            const [file] = e.target.files;
            const {name: fileName, size} = file;
            const fileSize = (size / 1000).toFixed(2);
            filePhotoInfo.innerHTML = fileName + " - " + fileSize + "KB";
            photoSelected = true;
            filePhoto.parentNode.classList.remove("is-invalid");
        });

        // paper upload
        /*
        const fileAbstract = document.querySelector("#fup-paper");
        const fileAbstractInfo = document.querySelector("#spn-paper-result");
        fileAbstract.addEventListener("change", (e) => {
            const [file] = e.target.files;
            const {name: fileName, size} = file;
            const fileSize = (size / 1000).toFixed(2);
            fileAbstractInfo.innerHTML = fileName + " - " + fileSize + "KB";
            paperSelected = true;
            fileAbstract.parentNode.classList.remove("is-invalid");
        });
        */
        // submit section
        const btnSubmit = document.querySelector("#btn-submit-form");

        const txtNameSurname = document.querySelector("#txt-name-surname");
        const txtInstitution = document.querySelector("#txt-institution");
        const txtEmail = document.querySelector("#txt-email");
        const txtPhone = document.querySelector("#txt-phone");
        const txtAddress = document.querySelector("#txt-address");
        const txtCv = document.querySelector("#txt-cv");
        const txtAbstractTitle = document.querySelector("#txt-abstract-title");
        const txtAbstractAuthors = document.querySelector("#txt-abstract-authors");
        const txtAbstract = document.querySelector("#txt-abstract");
        const txtAbstractKeywords = document.querySelector("#txt-abstract-keywords");

        btnSubmit.addEventListener('click', (e) => {
            if (!txtNameSurname.value) {
                txtNameSurname.parentNode.classList.add("is-invalid");
                txtNameSurname.focus();
                e.preventDefault();
                return;
            }
            if (!txtInstitution.value) {
                txtInstitution.parentNode.classList.add("is-invalid");
                txtInstitution.focus();
                e.preventDefault();
                return;
            }
            if (!txtEmail.value) {
                txtEmail.parentNode.classList.add("is-invalid");
                txtEmail.focus();
                e.preventDefault();
                return;
            }
            if (!txtPhone.value) {
                txtPhone.parentNode.classList.add("is-invalid");
                txtPhone.focus();
                e.preventDefault();
                return;
            }

            if (!photoSelected) {
                filePhoto.parentNode.classList.add("is-invalid");
                filePhoto.focus();
                e.preventDefault();
                return;
            }

            if (!txtAddress.value) {
                txtAddress.parentNode.classList.add("is-invalid");
                txtAddress.focus();
                e.preventDefault();
                return;
            }

            if (!txtCv.value) {
                txtCv.parentNode.classList.add("is-invalid");
                txtCv.focus();
                e.preventDefault();
                return;
            }

            /*
            if (!paperSelected) {
                fileAbstract.parentNode.classList.add("is-invalid");
                fileAbstract.focus();
                e.preventDefault();
                return;
            }
            */

            if (!txtAbstractTitle.value) {
                txtAbstractTitle.parentNode.classList.add("is-invalid");
                txtAbstractTitle.focus();
                e.preventDefault();
                return;
            }

            if (!txtAbstractAuthors.value) {
                txtAbstractAuthors.parentNode.classList.add("is-invalid");
                txtAbstractAuthors.focus();
                e.preventDefault();
                return;
            }

            if (!txtAbstract.value) {
                txtAbstract.parentNode.classList.add("is-invalid");
                txtAbstract.focus();
                e.preventDefault();
                return;
            }

            if (!txtAbstractKeywords.value) {
                txtAbstractKeywords.parentNode.classList.add("is-invalid");
                txtAbstractKeywords.focus();
                e.preventDefault();
                return;
            }

            btnSubmit.innerText = "<?php echo($lang_abs_sub["gonderiliyor"][$pref_lang]); ?>";
        });

        const submissionForm = document.querySelector("#frm-abstract");
        submissionForm.addEventListener('submit', (e) => {
            btnSubmit.disabled = true;
        });

        // form post result
        <?php if ($form_posted) { ?>
        hideContactFormResult();
        <?php } ?>
        // end
    })();
</script>
</body>
</html>
