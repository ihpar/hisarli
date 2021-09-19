<?php
require 'vendor/autoload.php';

use Dompdf\Dompdf;

function createPDF($form_params)
{
    $dompdf = new Dompdf();

    $author_section = "";

    foreach ($form_params["authors"] as $author) {
        $author_section .= '
        <div class="author-wrapper">
            <span class="author dark-text">' . $author["name"] . '</span>
            <span class="author">' . $author["institution"] . '</span>
            <span class="author">' . $author["email"] . '</span>
        </div>
    ';
    }

    $submission_lang = $form_params["submission_lang"];

    if ($submission_lang == "tr") {
        $tr_title = '<h1 class="dark-text">' . $form_params["abstract_title_tr"] . '</h1>';
        $tr_abstract = '<p>' . str_replace(PHP_EOL, "</p><p>", $form_params["abstract_tr"]) . '</p>';
        $tr_keywords = '<p><span class="dark-text">Anahtar Kelimeler: </span>' . $form_params["keywords_tr"] . '</p>';
    }

    $en_title = '<h1 class="dark-text">' . $form_params["abstract_title_en"] . '</h1>';
    $en_abstract = '<p>' . str_replace(PHP_EOL, "</p><p>", $form_params["abstract_en"]) . '</p>';
    $en_keywords = '<p><span class="dark-text">Keywords: </span>' . $form_params["keywords_en"] . '</p>';

    $html = '
    <!DOCTYPE html>
    <html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>HAS Abstract</title>
        <style>
            html {
                margin: 2.5cm;
            }
    
            body {
                font-family: DejaVu Sans;
                font-size: 12pt;
            }
    
            .dark-text {
                font-weight: bold;
            }
    
            h1 {
                font-size: 14pt;
                text-align: center;
            }
    
            h2 {
                font-size: 12pt;
                text-align: left;
            }
    
            p {
                text-indent: 0.5cm;
                text-align: justify;
                display: block;
            }
    
            .author-wrapper {
                text-align: center;
                margin-bottom: 12pt;
            }
    
            .author {
                text-align: center;
                display: block;
                width: 100%;
            }
    
            .hidden {
                display: none;
            }
        </style>
    </head>
    <body>
    ';

    if ($submission_lang == "tr") {
        $html .= $tr_title;
        $html .= $author_section;
        $html .= '<h2 class="dark-text">Özet</h2>';
        $html .= $tr_abstract;
        $html .= $tr_keywords;

        $html .= $en_title;
        $html .= '<h2 class="dark-text">Abstract</h2>';
        $html .= $en_abstract;
        $html .= $en_keywords;
    } else {
        $html .= $en_title;
        $html .= $author_section;
        $html .= '<h2 class="dark-text">Abstract</h2>';
        $html .= $en_abstract;
        $html .= $en_keywords;
    }

    $html .= '</body>
            </html>';

    $dompdf->loadHtml($html, "UTF-8");

    $dompdf->setPaper('A4');
    $dompdf->render();

    return $dompdf->output();
}
