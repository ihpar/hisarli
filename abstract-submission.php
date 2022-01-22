<?php
session_start();

$is_secure = true;

$page_name = "abstract-submission";

$form_posted = false;
$submission_succeeded = false;
$form_result = "";

require_once "dbms/utils.php";

require_once "modules/header_prefixes.php";

require_once "langs/lang_global.php";

require_once "langs/lang_abstract-submission.php";

require_once "utils/pdf_manager.php";

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

function getNWords($sentence, $count)
{
    preg_match("/(?:\w+(?:\W+|$)){0,$count}/", $sentence, $matches);
    return $matches[0];
}

function trStrcmp($a, $b)
{
    $lcases = array('a', 'b', 'c', 'ç', 'd', 'e', 'f', 'g', 'ğ', 'h', 'ı', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'ö', 'p', 'q', 'r', 's', 'ş', 't', 'u', 'ü', 'w', 'v', 'y', 'z');
    $ucases = array('A', 'B', 'C', 'Ç', 'D', 'E', 'F', 'G', 'Ğ', 'H', 'I', 'İ', 'J', 'K', 'L', 'M', 'N', 'O', 'Ö', 'P', 'Q', 'R', 'S', 'Ş', 'T', 'U', 'Ü', 'W', 'V', 'Y', 'Z');
    $am = mb_strlen($a, 'UTF-8');
    $bm = mb_strlen($b, 'UTF-8');
    $maxlen = $am > $bm ? $bm : $am;
    for ($ai = 0; $ai < $maxlen; $ai++) {
        $aa = mb_substr($a, $ai, 1, 'UTF-8');
        $ba = mb_substr($b, $ai, 1, 'UTF-8');
        if ($aa != $ba) {
            $apos = in_array($aa, $lcases) ? array_search($aa, $lcases) : array_search($aa, $ucases);
            $bpos = in_array($ba, $lcases) ? array_search($ba, $lcases) : array_search($ba, $ucases);
            if ($apos !== $bpos) {
                return $apos > $bpos ? 1 : -1;
            }
        }
    }
    return 0;
}

function createAbstractPDF($form_params)
{
    $submissionPaperPDF = createPDF($form_params);
    $upload_dir = "uploads/Abs_12th";
    if (!is_dir($upload_dir)) {
        mkdir($upload_dir);
    }
    $upload_dir = $upload_dir . "/";

    $today = date("d_m_Y");
    $upload_dir .= $today;
    if (!is_dir($upload_dir)) {
        mkdir($upload_dir);
    }
    $upload_dir = $upload_dir . "/";

    $user_dir = $upload_dir . filenameSanitizer($form_params["name_surname"]);
    if (!is_dir($user_dir)) {
        mkdir($user_dir);
    }
    $user_dir = $user_dir . "/";

    $paper_short_title = getNWords($form_params["abstract_title_en"], 2);
    $paper_short_title = filenameSanitizer($paper_short_title);
    $paper_file_name = $paper_short_title . ".pdf";
    $paper_target_file = $user_dir . $paper_file_name;
    while (file_exists($paper_target_file)) {
        $rand_str = generateRandomString(12);
        $paper_target_file = $user_dir . $rand_str . "-" . $paper_file_name;
    }
    file_put_contents($paper_target_file, $submissionPaperPDF);

    return $paper_target_file;
}

function sendSubmissionEmails($paper_location, $form_params)
{
    global $form_result;
    global $submission_succeeded;
    global $lang_abs_sub;
    global $pref_lang;

    $paper_dept_email = "abstracts@hisarliahmet.org";

    $abstract_title = $form_params["abstract_title_" . $form_params["submission_lang"]];

    $email_body = "BAŞLIK: " . $abstract_title . "<br>";
    $email_body .= "Kategori: " . $form_params["subcategory"] . "<br><br>";
    $email_body .= "YAZAR(LAR):<br>";
    foreach ($form_params["authors"] as $author) {
        $email_body .= "Yazar: " . $author["name"] . "<br>";
        $email_body .= "Kurum: " . $author["institution"] . "<br>";
        $email_body .= "Email: " . $author["email"] . "<br>";
        $email_body .= "Özgeçmiş: " . $author["resume"] . "<br><br>";
    }

    $email_body .= "İLETİŞİM BİLGİLERİ:<br>";
    $email_body .= "Gönderen: " . $form_params["name_surname"] . "<br>";
    $email_body .= "Email: " . $form_params["email"] . "<br>";
    $email_body .= "Tel: " . $form_params["phone"] . "<br>";
    $email_body .= "Adres: " . $form_params["address"] . "<br><br>";
    $email_body .= "Açıklamalar (varsa): " . $form_params["comments"] . "<br>";
    $email_body .= "Özet Dosyası: " . '<a href=https://hisarliahmet.org/' . $paper_location . '>https://hisarliahmet.org/' . $paper_location . '</a><br><br>';
    $email_body .= "  - İyi çalışmalar";

    $headers = 'MIME-Version: 1.0' . "\r\n"
        . 'Content-type: text/html; charset=utf-8' . "\r\n"
        . 'From: ' . $form_params["email"] . "\r\n";


    if (mail($paper_dept_email, "Özet Gönderim Formu", $email_body, $headers)) {

        $post_result_message = $lang_abs_sub["tesekkurler"][$pref_lang] . " " .
            $form_params["name_surname"] . ". <br>" .
            $lang_abs_sub["iletilmistir"][$pref_lang];

        $form_result = $post_result_message;
        $submission_succeeded = true;

        // notify sender back
        $headers = 'MIME-Version: 1.0' . "\r\n"
            . 'Content-type: text/html; charset=utf-8' . "\r\n"
            . 'From: ' . $paper_dept_email . "\r\n";

        $email_body = $lang_abs_sub["tesekkurler"][$pref_lang] . " " .
            $form_params["name_surname"] . ", <br>" .
            $lang_abs_sub["has_geri_bildirim_mesaji"][$pref_lang];

        $email_body = str_replace("{title}", $abstract_title, $email_body);

        mail($form_params["email"], $lang_abs_sub["has_geri_bildirim_konusu"][$pref_lang], $email_body, $headers);
    }
}

function createSubmission($form_params)
{
    $paper_location = createAbstractPDF($form_params);
    sendSubmissionEmails($paper_location, $form_params);
}

function processPost($post_obj): bool
{
    global $form_result;
    global $lang_abs_sub;
    global $pref_lang;

    $authors = [];
    $subcategory = "0";
    $submission_lang = "";

    $abstract_title_tr = "";
    $abstract_tr = "";
    $keywords_tr = "";
    $abstract_title_en = "";
    $abstract_en = "";
    $keywords_en = "";

    $name_surname = "";
    $email = "";
    $phone = "";
    $address = "";

    $comments = "";

    $has_missing_fields = false;
    $missing_fields_message = $lang_abs_sub["form_eksik"][$pref_lang];

    // process authors
    if (isset($post_obj["txt-author-count"])) {
        $num_authors = intval(filter_var(trim($post_obj["txt-author-count"]), FILTER_SANITIZE_STRING));
        if ($num_authors < 1 || $num_authors > 10) {
            $has_missing_fields = true;
        }

        if ($has_missing_fields) {
            $form_result = $missing_fields_message;
            return false;
        }

        for ($i = 1; $i <= $num_authors; $i++) {
            $author = [];

            if (isset($post_obj["txt-abstract-author-" . $i])) {
                $author["name"] = filter_var(trim($post_obj["txt-abstract-author-" . $i]), FILTER_SANITIZE_STRING);
            } else {
                $has_missing_fields = true;
            }

            if (isset($post_obj["txt-abstract-author-institution-" . $i])) {
                $author["institution"] = filter_var(trim($post_obj["txt-abstract-author-institution-" . $i]), FILTER_SANITIZE_STRING);
            } else {
                $has_missing_fields = true;
            }

            if (isset($post_obj["txt-abstract-author-email-" . $i])) {
                $author["email"] = filter_var(trim($post_obj["txt-abstract-author-email-" . $i]), FILTER_SANITIZE_STRING);
            } else {
                $has_missing_fields = true;
            }

            if (isset($post_obj["txt-cv-" . $i])) {
                $author["resume"] = filter_var(trim($post_obj["txt-cv-" . $i]), FILTER_SANITIZE_STRING);
            } else {
                $has_missing_fields = true;
            }

            if ($has_missing_fields) {
                $form_result = $missing_fields_message;
                return false;
            }
            array_push($authors, $author);
        }
    }

    // get subcategory
    if (isset($post_obj["sel-sub-category"])) {
        $subcategory = $post_obj["sel-sub-category"];
    } else {
        $has_missing_fields = true;
    }
    if ($subcategory == "0") {
        $has_missing_fields = true;
    }

    // get form lang
    if (isset($post_obj["txt-lang"])) {
        $submission_lang = $post_obj["txt-lang"];
    } else {
        $has_missing_fields = true;
    }

    // Turkce ozet data
    if ($submission_lang == "tr") {
        if (isset($post_obj["txt-abstract-title-tr"])) {
            $abstract_title_tr = filter_var(trim($post_obj["txt-abstract-title-tr"]), FILTER_SANITIZE_STRING);
        } else {
            $has_missing_fields = true;
        }

        if (isset($post_obj["txt-abstract-tr"])) {
            $abstract_tr = filter_var(trim($post_obj["txt-abstract-tr"]), FILTER_SANITIZE_STRING);
        } else {
            $has_missing_fields = true;
        }

        if (isset($post_obj["txt-abstract-keywords-tr"])) {
            $keywords_tr = filter_var(trim($post_obj["txt-abstract-keywords-tr"]), FILTER_SANITIZE_STRING);
        } else {
            $has_missing_fields = true;
        }
    }

    // En ozet
    if (isset($post_obj["txt-abstract-title"])) {
        $abstract_title_en = filter_var(trim($post_obj["txt-abstract-title"]), FILTER_SANITIZE_STRING);
    } else {
        $has_missing_fields = true;
    }

    if (isset($post_obj["txt-abstract"])) {
        $abstract_en = filter_var(trim($post_obj["txt-abstract"]), FILTER_SANITIZE_STRING);
    } else {
        $has_missing_fields = true;
    }

    if (isset($post_obj["txt-abstract-keywords"])) {
        $keywords_en = filter_var(trim($post_obj["txt-abstract-keywords"]), FILTER_SANITIZE_STRING);
    } else {
        $has_missing_fields = true;
    }

    if ($has_missing_fields) {
        $form_result = $missing_fields_message;
        return false;
    }

    // corresponding author
    if (isset($post_obj["txt-corresponding-author-name"])) {
        $name_surname = filter_var(trim($post_obj["txt-corresponding-author-name"]), FILTER_SANITIZE_STRING);
    } else {
        $has_missing_fields = true;
    }

    if (isset($post_obj["txt-corresponding-author-email"])) {
        $email = filter_var(trim($post_obj["txt-corresponding-author-email"]), FILTER_SANITIZE_STRING);
    } else {
        $has_missing_fields = true;
    }

    if (isset($post_obj["txt-corresponding-author-phone"])) {
        $phone = filter_var(trim($post_obj["txt-corresponding-author-phone"]), FILTER_SANITIZE_STRING);
    } else {
        $has_missing_fields = true;
    }

    if (isset($post_obj["txt-corresponding-author-address"])) {
        $address = filter_var(trim($post_obj["txt-corresponding-author-address"]), FILTER_SANITIZE_STRING);
    } else {
        $has_missing_fields = true;
    }

    if (isset($post_obj["txt-comments"])) {
        $comments = filter_var(trim($post_obj["txt-comments"]), FILTER_SANITIZE_STRING);
    }

    if ($has_missing_fields) {
        $form_result = $missing_fields_message;
        return false;
    }

    createSubmission([
        "authors" => $authors,
        "subcategory" => $subcategory,
        "submission_lang" => $submission_lang,
        "abstract_title_tr" => $abstract_title_tr,
        "abstract_tr" => $abstract_tr,
        "keywords_tr" => $keywords_tr,
        "abstract_title_en" => $abstract_title_en,
        "abstract_en" => $abstract_en,
        "keywords_en" => $keywords_en,
        "name_surname" => $name_surname,
        "email" => $email,
        "phone" => $phone,
        "address" => $address,
        "comments" => $comments
    ]);
    return true;
}

if ($_POST) {
    $form_posted = true;
    processPost($_POST);
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

        input[type="file"] {
            opacity: 0;
            width: 0.1px;
            height: 0.1px;
        }

        .full-width {
            width: 100%;
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

            .pad-10-per {
                padding: 0 10px;
            }

            .row .col-12,
            .row .col-6 {
                padding-left: 0;
                padding-right: 0;
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
            padding: 16px;
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
            margin: 12px 0;
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

        select {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            width: 100%;
            padding: 11px 25px 11px 11px;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
            font-size: 16px;
            background: #f2f3f4;
            -moz-border-radius: 0;
            -webkit-border-radius: 0;
            border-radius: 0;
            border: 1px solid #cccccc;
            cursor: pointer;
        }

        .select-container {
            position: relative;
            display: inline;
        }

        .select-container:after {
            content: "";
            width: 0;
            height: 0;
            position: absolute;
            pointer-events: none;
        }

        .select-container:after {
            border-left: 5px solid transparent;
            border-right: 5px solid transparent;
            top: 8px;
            right: 15px;
            border-top: 8px solid black;
            opacity: 0.5;
        }

        select::-ms-expand {
            display: none;
        }

        .hidden-author {
            display: none;
        }

        .spn-additional-info {
            font-size: 14px;
            font-style: italic;
            display: inline-block;
            margin: 4px 0;
        }

        .mdl-textfield__label {
            top: 0;
            font-size: 16px;
        }

        .mdl-textfield--floating-label.is-focused .mdl-textfield__label, .mdl-textfield--floating-label.is-dirty .mdl-textfield__label, .mdl-textfield--floating-label.has-placeholder .mdl-textfield__label {
            font-size: 16px;
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
                            <!-- Row Yazar Sayisi -->
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
                            <!-- Row Yazarlar -->
                            <div class="row">
                                <div class="col-12 dv-authors-wrapper">
                                    <?php
                                    $max_author_count = 10;

                                    for ($i = 1; $i <= $max_author_count; $i++) { ?>
                                        <!-- Author <?php echo($i); ?> -->
                                        <fieldset id="fs-author-<?php echo($i); ?>"
                                                  class="fs-author <?php echo(($i > 1) ? " hidden-author" : ''); ?>">
                                            <legend><?php echo($lang_abs_sub["yazar_indeksli"][$pref_lang] . " " . $i); ?></legend>
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                <input class="mdl-textfield__input" type="text"
                                                       id="txt-abstract-author-<?php echo($i); ?>"
                                                       name="txt-abstract-author-<?php echo($i); ?>"
                                                />
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
                                                       name="txt-abstract-author-institution-<?php echo($i); ?>"
                                                />
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
                                                       name="txt-abstract-author-email-<?php echo($i); ?>"
                                                />
                                                <label class="mdl-textfield__label"
                                                       for="txt-abstract-author-email-<?php echo($i); ?>">
                                                    <?php echo($lang_abs_sub["email"][$pref_lang]); ?>
                                                </label>
                                                <span class="mdl-textfield__error">
                                                    <?php echo($lang_abs_sub["bos_birakilamaz"][$pref_lang]); ?>
                                                </span>
                                            </div>

                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                <textarea class="mdl-textfield__input" rows="3"
                                                          id="txt-cv-<?php echo($i); ?>"
                                                          name="txt-cv-<?php echo($i); ?>"></textarea>
                                                <label class="mdl-textfield__label" for="txt-cv-<?php echo($i); ?>">
                                                    <?php echo($lang_abs_sub["kisa_ozgecmis"][$pref_lang]); ?>
                                                </label>
                                                <span class="mdl-textfield__error" id="spn-cv-error-<?php echo($i); ?>">
                                                    <?php echo($lang_abs_sub["bos_birakilamaz"][$pref_lang]); ?>
                                                </span>
                                            </div>
                                            <span class="spn-additional-info">
                                                <?php echo($lang_abs_sub["oturumlarda_tanitilmak"][$pref_lang]); ?>
                                            </span>

                                        </fieldset>
                                    <?php } ?>
                                </div>
                            </div>
                            <!-- Alt Başlık -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <label class="mdl-textfield__label" for="sel-sub-category" style="top: -1px;">
                                            <?php echo($lang_abs_sub["bildirinin_kapsadigi_altbaslik"][$pref_lang]); ?>
                                        </label>
                                        <div class="select-container">
                                            <select id="sel-sub-category" name="sel-sub-category" class="sel-form">
                                                <option value="0"><?php echo($lang_abs_sub["seciniz"][$pref_lang]); ?></option>
                                                <?php
                                                require_once "langs/lang_index.php";
                                                $sub_categories = unserialize(serialize($lang_index["alt_basliklar_liste"][$pref_lang]));
                                                usort($sub_categories, 'trStrcmp');
                                                //sort($sub_categories);
                                                foreach ($sub_categories as $sub_category) {
                                                    echo("<option>$sub_category</option>");
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <span class="mdl-textfield__error">
                                            <?php echo($lang_abs_sub["altbaslik_seciniz"][$pref_lang]); ?>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <!-- Türkçe Özet Başlığı -->
                            <?php if ($pref_lang == "tr") { ?>
                                <!-- Row -->
                                <div class="row">
                                    <div class="col-12">
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                            <input class="mdl-textfield__input" type="text" id="txt-abstract-title-tr"
                                                   name="txt-abstract-title-tr"
                                            />
                                            <label class="mdl-textfield__label" for="txt-abstract-title-tr">
                                                <?php echo($lang_abs_sub["ozet_basligi_tr"][$pref_lang]); ?>
                                            </label>
                                            <span class="mdl-textfield__error">
                                        <?php echo($lang_abs_sub["bos_birakilamaz"][$pref_lang]); ?>
                                    </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Türkçe Özet -->
                                <div class="row">
                                    <div class="col-12">
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <textarea class="mdl-textfield__input" rows="18" id="txt-abstract-tr"
                                                  name="txt-abstract-tr"></textarea>
                                            <label class="mdl-textfield__label" for="txt-abstract-tr">
                                                <?php echo($lang_abs_sub["ozet_metni_tr"][$pref_lang]); ?>
                                            </label>
                                            <span class="mdl-textfield__error" id="spn-abstract-error-tr">
                                                <?php echo($lang_abs_sub["bos_birakilamaz"][$pref_lang]); ?>
                                            </span>
                                        </div>
                                    </div>
                                    <!--
                                    <span class="spn-additional-info">
                                        <?php echo($lang_abs_sub["metin_yazim"][$pref_lang]); ?>
                                    </span>
                                    -->
                                </div>
                                <!-- Türkçe Anahtar Kelimeler -->
                                <div class="row">
                                    <div class="col-12">
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                            <input class="mdl-textfield__input" type="text"
                                                   id="txt-abstract-keywords-tr"
                                                   name="txt-abstract-keywords-tr"
                                            />
                                            <label class="mdl-textfield__label" for="txt-abstract-keywords-tr">
                                                <?php echo($lang_abs_sub["anahtar_kelimeler_tr"][$pref_lang]); ?>
                                            </label>
                                            <span class="mdl-textfield__error" id="spn-keyword-error-tr">
                                                <?php echo($lang_abs_sub["bos_birakilamaz"][$pref_lang]); ?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                            <!-- En Ozet Basligi-->
                            <div class="row">
                                <div class="col-12">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <input class="mdl-textfield__input" type="text" id="txt-abstract-title"
                                               name="txt-abstract-title"
                                        />
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
                            <!-- En Ozet-->
                            <div class="row">
                                <div class="col-12">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <textarea class="mdl-textfield__input" rows="18" id="txt-abstract"
                                                  name="txt-abstract"></textarea>
                                        <label class="mdl-textfield__label" for="txt-abstract">
                                            <?php echo(($pref_lang == "tr") ?
                                                $lang_abs_sub["ozet_metni_en"][$pref_lang] : $lang_abs_sub["ozet_metni"][$pref_lang]); ?>
                                        </label>
                                        <span class="mdl-textfield__error" id="spn-abstract-error-en">
                                            <?php echo($lang_abs_sub["bos_birakilamaz"][$pref_lang]); ?>
                                        </span>
                                    </div>
                                    <!--
                                    <span class="spn-additional-info">
                                        <?php echo($lang_abs_sub["metin_yazim"][$pref_lang]); ?>
                                    </span>
                                    -->
                                </div>
                            </div>
                            <!-- En Anahtar Kelimeler -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <input class="mdl-textfield__input" type="text" id="txt-abstract-keywords"
                                               name="txt-abstract-keywords"
                                        />
                                        <label class="mdl-textfield__label" for="txt-abstract-keywords">
                                            <?php echo(($pref_lang == "tr") ?
                                                $lang_abs_sub["anahtar_kelimeler_en"][$pref_lang] : $lang_abs_sub["anahtar_kelimeler"][$pref_lang]); ?>
                                        </label>
                                        <span class="mdl-textfield__error" id="spn-keyword-error-en">
                                            <?php echo($lang_abs_sub["bos_birakilamaz"][$pref_lang]); ?>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <!-- Corresponding Author -->
                            <div class="row">
                                <div class="col-12">

                                    <fieldset>
                                        <legend><?php echo($lang_abs_sub["iletisim_kurulacak_yazar"][$pref_lang]); ?></legend>
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                            <input class="mdl-textfield__input" type="text"
                                                   id="txt-corresponding-author-name"
                                                   name="txt-corresponding-author-name"
                                            />
                                            <label class="mdl-textfield__label" for="txt-corresponding-author-name">
                                                <?php echo($lang_abs_sub["ad_soyad"][$pref_lang]); ?>
                                            </label>
                                            <span class="mdl-textfield__error">
                                                <?php echo($lang_abs_sub["bos_birakilamaz"][$pref_lang]); ?>
                                            </span>
                                        </div>

                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                            <input class="mdl-textfield__input" type="text"
                                                   id="txt-corresponding-author-email"
                                                   name="txt-corresponding-author-email"
                                            />
                                            <label class="mdl-textfield__label" for="txt-corresponding-author-email">
                                                <?php echo($lang_abs_sub["email"][$pref_lang]); ?>
                                            </label>
                                            <span class="mdl-textfield__error">
                                                <?php echo($lang_abs_sub["bos_birakilamaz"][$pref_lang]); ?>
                                            </span>
                                        </div>

                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                            <input class="mdl-textfield__input" type="text"
                                                   id="txt-corresponding-author-phone"
                                                   name="txt-corresponding-author-phone"
                                            />
                                            <label class="mdl-textfield__label" for="txt-corresponding-author-phone">
                                                <?php echo($lang_abs_sub["telefon"][$pref_lang]); ?>
                                            </label>
                                            <span class="mdl-textfield__error">
                                                <?php echo($lang_abs_sub["bos_birakilamaz"][$pref_lang]); ?>
                                            </span>
                                        </div>

                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                            <textarea class="mdl-textfield__input" rows="3"
                                                      id="txt-corresponding-author-address"
                                                      name="txt-corresponding-author-address"></textarea>
                                            <label class="mdl-textfield__label" for="txt-corresponding-author-address">
                                                <?php echo($lang_abs_sub["adres"][$pref_lang]); ?>
                                            </label>
                                            <span class="mdl-textfield__error">
                                                <?php echo($lang_abs_sub["bos_birakilamaz"][$pref_lang]); ?>
                                            </span>
                                        </div>
                                        <span class="spn-additional-info">
                                            <?php echo($lang_abs_sub["olasi_belge"][$pref_lang]); ?>
                                        </span>


                                    </fieldset>

                                </div>
                            </div>

                            <!-- En Açıklama/Talep -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <textarea class="mdl-textfield__input" rows="3" id="txt-comments"
                                                  name="txt-comments"></textarea>
                                        <label class="mdl-textfield__label" for="txt-comments">
                                            <?php echo($lang_abs_sub["aciklama"][$pref_lang]); ?>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- Row Gonder -->
                            <div class="row" style="margin-top: 20px;">
                                <div class="col-12">
                                    <input type="hidden" id="txt-author-count" name="txt-author-count" value="1">
                                    <input type="hidden" id="txt-lang" name="txt-lang"
                                           value="<?php echo($pref_lang); ?>">
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
        <div>
            <span style="display: block;">
                <?php echo($form_result); ?>
            </span>
            <?php if ($submission_succeeded) { ?>
                <a style="display: block; margin-top: 16px;"
                   class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"
                   href="index.php">
                    <?php echo($lang_abs_sub["ana_sayfaya_don"][$pref_lang]); ?>
                </a>
            <?php } ?>
        </div>
    </div>
<?php } ?>

<script src="js/material.js"></script>
<script>
    function hideContactFormResult() {
        let contactFormResultDiv = document.querySelector('#dv-contact-form-result');
        setTimeout(() => {
            contactFormResultDiv.classList.add("fade-out");
            setTimeout(() => {
                contactFormResultDiv.remove();
            }, 1000);
        }, 4000);
    }

    (function () {
        // auto run
        let numAuthors = 1;
        const lang = "<?php echo($pref_lang); ?>";
        const requiredText = "<?php echo($lang_abs_sub["bos_birakilamaz"][$pref_lang]); ?>";
        const exceeds100Text = "<?php echo($lang_abs_sub["ozgecmis_limiti"][$pref_lang]); ?>";
        const min100Text = "<?php echo($lang_abs_sub["min_100_words"][$pref_lang]); ?>";
        const max300Text = "<?php echo($lang_abs_sub["max_300_words"][$pref_lang]); ?>";
        const keywordCountErrorText = "<?php echo($lang_abs_sub["anahtar_kelime_sayisi_hata"][$pref_lang]); ?>";

        // add - remove authors
        const hiddenAuthorCount = document.querySelector("#txt-author-count");
        const numAuthorSpan = document.querySelector("#spn-author-count");

        const btnAddAuthor = document.querySelector("#btn-add-author");
        btnAddAuthor.addEventListener('click', (e) => {
            if (numAuthors === <?php echo($max_author_count); ?>) return;
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


        // submit section
        const btnSubmit = document.querySelector("#btn-submit-form");

        const selSubcategory = document.querySelector("#sel-sub-category");
        const txtAbstractTitle = document.querySelector("#txt-abstract-title");
        const txtAbstract = document.querySelector("#txt-abstract");
        const txtAbstractKeywords = document.querySelector("#txt-abstract-keywords");

        const txtNameSurname = document.querySelector("#txt-corresponding-author-name");
        const txtEmail = document.querySelector("#txt-corresponding-author-email");
        const txtPhone = document.querySelector("#txt-corresponding-author-phone");
        const txtAddress = document.querySelector("#txt-corresponding-author-address");

        selSubcategory.addEventListener('change', (e) => {
            if (selSubcategory.value !== "0") {
                selSubcategory.parentNode.classList.remove("is-invalid");
            }
        });

        txtAbstract.addEventListener("paste", (e) => {
            e.preventDefault();
            e.stopPropagation();
            let pastedText = (e.clipboardData || window.clipboardData).getData("text");
            pastedText = pastedText.replace(/(\r\n|\n|\r)/gm, " ");
            pastedText = pastedText.replace(/\s+/g, " ");
            let oldText = txtAbstract.value.trim();
            if (oldText) {
                pastedText = oldText + " " + pastedText;
            }
            setTimeout(function () {
                txtAbstract.value = pastedText;
            }, 20);
        });

        let txtAbstractTr = null;
        if (lang === "tr") {
            txtAbstractTr = document.querySelector("#txt-abstract-tr");
            txtAbstractTr.addEventListener("paste", (e) => {
                e.preventDefault();
                e.stopPropagation();
                let pastedText = (e.clipboardData || window.clipboardData).getData("text");
                pastedText = pastedText.replace(/(\r\n|\n|\r)/gm, " ");
                pastedText = pastedText.replace(/\s+/g, " ");
                let oldText = txtAbstractTr.value.trim();
                if (oldText) {
                    pastedText = oldText + " " + pastedText;
                }
                setTimeout(function () {
                    txtAbstractTr.value = pastedText;
                }, 20);
            });
        }

        const submissionForm = document.querySelector("#frm-abstract");
        submissionForm.addEventListener('submit', (e) => {
            // check authors
            let authors = [];
            for (let i = 0; i < numAuthors; i++) {
                let author = {
                    "name": "",
                    "institution": "",
                    "email": "",
                    "resume": ""
                }
                let idx = (i + 1).toString();
                let txtName = document.querySelector("#txt-abstract-author-" + idx);
                let name = txtName.value.trim();
                if (!name) {
                    txtName.parentNode.classList.add("is-invalid");
                    txtName.focus();
                    e.preventDefault();
                    return false;
                }
                author.name = name;

                let txtInstitution = document.querySelector("#txt-abstract-author-institution-" + idx);
                let institution = txtInstitution.value.trim();
                if (!institution) {
                    txtInstitution.parentNode.classList.add("is-invalid");
                    txtInstitution.focus();
                    e.preventDefault();
                    return false;
                }
                author.institution = institution;

                let txtEmail = document.querySelector("#txt-abstract-author-email-" + idx);
                let email = txtEmail.value.trim();
                if (!email) {
                    txtEmail.parentNode.classList.add("is-invalid");
                    txtEmail.focus();
                    e.preventDefault();
                    return false;
                }
                author.email = email;

                let txtResume = document.querySelector("#txt-cv-" + idx);
                let resume = txtResume.value.trim();
                if (!resume) {
                    let spnError = document.querySelector("#spn-cv-error-" + idx);
                    spnError.innerHTML = requiredText;
                    txtResume.parentNode.classList.add("is-invalid");
                    txtResume.focus();
                    e.preventDefault();
                    return false;
                }

                if (resume.split(" ").length > 100) {
                    let spnError = document.querySelector("#spn-cv-error-" + idx);
                    spnError.innerHTML = exceeds100Text;
                    txtResume.parentNode.classList.add("is-invalid");
                    txtResume.focus();
                    e.preventDefault();
                    return false;
                }

                author.resume = resume;

                authors.push(author);
            }

            // check subcategory
            if (selSubcategory.value === "0") {
                selSubcategory.parentNode.classList.add("is-invalid");
                selSubcategory.focus();
                e.preventDefault();
                return false;
            }

            // Turkce ozet bilgileri
            if (lang === "tr") {
                let txtAbstractTitleTr = document.querySelector("#txt-abstract-title-tr");
                let abstractTitleTr = txtAbstractTitleTr.value.trim();
                if (!abstractTitleTr) {
                    txtAbstractTitleTr.parentNode.classList.add("is-invalid");
                    txtAbstractTitleTr.focus();
                    e.preventDefault();
                    return false;
                }

                let spnAbstractErrorTr = document.querySelector("#spn-abstract-error-tr");
                let abstractTr = txtAbstractTr.value.trim();

                if (!abstractTr) {
                    spnAbstractErrorTr.innerHTML = requiredText;
                    txtAbstractTr.parentNode.classList.add("is-invalid");
                    txtAbstractTr.focus();
                    e.preventDefault();
                    return false;
                }

                let abstractTrLen = abstractTr.split(" ").length;

                if (abstractTrLen < 100 || abstractTrLen > 300) {
                    if (abstractTrLen < 100) {
                        spnAbstractErrorTr.innerHTML = min100Text;
                    }
                    if (abstractTrLen > 300) {
                        spnAbstractErrorTr.innerHTML = max300Text;
                    }
                    txtAbstractTr.parentNode.classList.add("is-invalid");
                    txtAbstractTr.focus();
                    e.preventDefault();
                    return false;
                }

                let txtAbstractKeywordsTr = document.querySelector("#txt-abstract-keywords-tr");
                let abstractKeywordsTr = txtAbstractKeywordsTr.value.trim();
                let abstractErrorSpanTR = document.querySelector("#spn-keyword-error-tr");
                if (!abstractKeywordsTr) {
                    abstractErrorSpanTR.innerHTML = requiredText;
                    txtAbstractKeywordsTr.parentNode.classList.add("is-invalid");
                    txtAbstractKeywordsTr.focus();
                    e.preventDefault();
                    return false;
                }
                let keywordCountTr = abstractKeywordsTr.split(",").length;
                if (keywordCountTr < 3 || keywordCountTr > 5) {
                    abstractErrorSpanTR.innerHTML = keywordCountErrorText;
                    txtAbstractKeywordsTr.parentNode.classList.add("is-invalid");
                    txtAbstractKeywordsTr.focus();
                    e.preventDefault();
                    return false;
                }
            }

            // Eng abstract data
            if (!txtAbstractTitle.value.trim()) {
                txtAbstractTitle.parentNode.classList.add("is-invalid");
                txtAbstractTitle.focus();
                e.preventDefault();
                return false;
            }

            let spnAbstractErrorEn = document.querySelector("#spn-abstract-error-en");
            let abstractEn = txtAbstract.value.trim();
            if (!abstractEn) {
                spnAbstractErrorEn.innerHTML = requiredText;
                txtAbstract.parentNode.classList.add("is-invalid");
                txtAbstract.focus();
                e.preventDefault();
                return false;
            }

            let abstractEnLen = abstractEn.split(" ").length;

            if (abstractEnLen < 100 || abstractEnLen > 300) {
                if (abstractEnLen < 100) {
                    spnAbstractErrorEn.innerHTML = min100Text;
                }
                if (abstractEnLen > 300) {
                    spnAbstractErrorEn.innerHTML = max300Text;
                }
                txtAbstract.parentNode.classList.add("is-invalid");
                txtAbstract.focus();
                e.preventDefault();
                return false;
            }

            let abstractErrorSpanEn = document.querySelector("#spn-keyword-error-en");
            let abstractKeywordsEn = txtAbstractKeywords.value.trim();
            if (!abstractKeywordsEn) {
                abstractErrorSpanEn.innerHTML = requiredText;
                txtAbstractKeywords.parentNode.classList.add("is-invalid");
                txtAbstractKeywords.focus();
                e.preventDefault();
                return false;
            }

            let keywordCountEn = abstractKeywordsEn.split(",").length;
            if (keywordCountEn < 3 || keywordCountEn > 5) {
                abstractErrorSpanEn.innerHTML = keywordCountErrorText;
                txtAbstractKeywords.parentNode.classList.add("is-invalid");
                txtAbstractKeywords.focus();
                e.preventDefault();
                return false;
            }

            // Corresponding author
            if (!txtNameSurname.value.trim()) {
                txtNameSurname.parentNode.classList.add("is-invalid");
                txtNameSurname.focus();
                e.preventDefault();
                return false;
            }

            if (!txtEmail.value.trim()) {
                txtEmail.parentNode.classList.add("is-invalid");
                txtEmail.focus();
                e.preventDefault();
                return false;
            }

            if (!txtPhone.value.trim()) {
                txtPhone.parentNode.classList.add("is-invalid");
                txtPhone.focus();
                e.preventDefault();
                return false;
            }

            if (!txtAddress.value.trim()) {
                txtAddress.parentNode.classList.add("is-invalid");
                txtAddress.focus();
                e.preventDefault();
                return false;
            }

            btnSubmit.innerText = "<?php echo($lang_abs_sub["gonderiliyor"][$pref_lang]); ?>";
            btnSubmit.disabled = true;
        });

        // form post result
        <?php if ($form_posted && !$submission_succeeded) { ?>
        hideContactFormResult();
        <?php } ?>
        // end
    })();
</script>
</body>
</html>
