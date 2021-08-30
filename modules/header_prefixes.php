<?php

if (!$is_secure) {
    exit(0);
}

$force_https = true;

header('Content-Type: text/html; charset=UTF-8');

/*
if($force_https) {
    if ($_SERVER["HTTPS"] != "on") {
        header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
        exit();
    }
}
*/

if (isset($_GET["lang"])) {
    $lang = $_GET["lang"];
    $accept_langs = ["tr", "en"];
    $lang = in_array($lang, $accept_langs) ? $lang : "en";
    $_SESSION["lang"] = $lang;
}

if (!isset($_SESSION["lang"])) {
    $lang = "en";
    if (isset($_SERVER["HTTP_ACCEPT_LANGUAGE"])) {
        $lang = substr($_SERVER["HTTP_ACCEPT_LANGUAGE"], 0, 2);
    }
    $accept_langs = ["tr", "en"];
    $lang = in_array($lang, $accept_langs) ? $lang : "en";
    $_SESSION["lang"] = $lang;
}

$pref_lang = $_SESSION["lang"];

if (!isset($_SESSION["sec_key"])) {
    $_SESSION["sec_key"] = sha1(uniqid());
}

?>