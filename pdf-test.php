<?php
require 'vendor/autoload.php';

use Dompdf\Dompdf;

$dompdf = new Dompdf();
$options = $dompdf->getOptions();

$contents = '
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Özet Şablonu</title>
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
            text-align: justify;
            text-indent: 0.5cm;
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
<h1 class="dark-text">Bu Bir Başlıktır</h1>
<div class="author-wrapper">
    <span class="author dark-text">Dr. Ali Veli</span>
    <span class="author">Sabancı Üniversitesi</span>
    <span class="author">aliveli@sabanci.com</span>
</div>
<div class="author-wrapper">
    <span class="author dark-text">Prof. Dr. Ayşe Fatma</span>
    <span class="author">Bolu Abant İzzet Baysal Üniversitesi</span>
    <span class="author">ayse.fatma@sabanci.com</span>
</div>
<h2 class="dark-text">Özet</h2>
<p>
    Lorem ipsum ıişçöüğ ÇÖİŞÜĞ*-0~â dolor sit amet, consectetur adipiscing elit. Nunc tempus lorem at orci
    faucibus auctor. Duis
    laoreet bibendum ante a suscipit. Mauris vestibulum at magna imperdiet gravida. Aenean sit amet luctus enim.
    Fusce interdum elit vel nulla posuere placerat. Aliquam ut finibus ligula. Aenean sagittis a mauris sed
    tincidunt. Pellentesque nec ex ligula. Vestibulum tempor cursus neque, eget tempus ipsum tempor sed. Aliquam
    ut libero purus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae;
    Mauris maximus maximus nisl eu interdum.
</p>
<p>
    Aliquam faucibus felis ut volutpat semper. Sed ac ornare risus. Praesent ipsum purus, consectetur vel diam
    at, finibus euismod arcu. Vestibulum porttitor interdum odio sit amet pretium. Vestibulum tristique gravida
    arcu, eget volutpat ante pulvinar id. Ut pulvinar vulputate lectus sit amet malesuada. Fusce fermentum,
    dolor eget feugiat viverra, dui ex gravida justo, sed viverra orci turpis a diam. Cras ornare facilisis
    ligula vel accumsan. Vivamus eu euismod tellus, id congue libero. Donec sit amet mi in libero hendrerit
    ultrices in at risus. Maecenas commodo sapien sit amet nisl volutpat mattis. Donec condimentum eleifend dui,
    vel tempor purus pellentesque eget.
</p>
<p>
    <span class="dark-text">Anahtar Kelimeler: </span>Kelime 1, Kelime 2, Kelime 3, Kelime 4.
</p>

<h1 class="dark-text">This is a Title</h1>
<div class="author-wrapper hidden">
    <span class="author dark-text">Dr. Ali Veli</span>
    <span class="author">Sabancı Üniversitesi</span>
    <span class="author">aliveli@sabanci.com</span>
</div>
<h2 class="dark-text">Abstract</h2>
<p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tempus lorem at orci
    faucibus auctor. Duis
    laoreet bibendum ante a suscipit. Mauris vestibulum at magna imperdiet gravida. Aenean sit amet luctus enim.
    Fusce interdum elit vel nulla posuere placerat. Aliquam ut finibus ligula. Aenean sagittis a mauris sed
    tincidunt. Pellentesque nec ex ligula. Vestibulum tempor cursus neque, eget tempus ipsum tempor sed. Aliquam
    ut libero purus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae;
    Mauris maximus maximus nisl eu interdum.
</p>
<p>
    Aliquam faucibus felis ut volutpat semper. Sed ac ornare risus. Praesent ipsum purus, consectetur vel diam
    at, finibus euismod arcu. Vestibulum porttitor interdum odio sit amet pretium. Vestibulum tristique gravida
    arcu, eget volutpat ante pulvinar id. Ut pulvinar vulputate lectus sit amet malesuada. Fusce fermentum,
    dolor eget feugiat viverra, dui ex gravida justo, sed viverra orci turpis a diam. Cras ornare facilisis
    ligula vel accumsan. Vivamus eu euismod tellus, id congue libero. Donec sit amet mi in libero hendrerit
    ultrices in at risus. Maecenas commodo sapien sit amet nisl volutpat mattis. Donec condimentum eleifend dui,
    vel tempor purus pellentesque eget.
</p>
<p>
    <span class="dark-text">Keywords: </span>Keyword 1, Keyword 2, Keyword 3, Keyword 4.
</p>

</body>
</html>
';

$dompdf->loadHtml($contents, "UTF-8");

$dompdf->setPaper('A4');
$dompdf->render();

$output = $dompdf->output();
$dir_path = "uploads/";
$file_name = "AAb_Test12.pdf";
file_put_contents($dir_path . $file_name, $output);
