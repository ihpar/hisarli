<?php
require 'vendor/autoload.php';

use Dompdf\Dompdf;

$dompdf = new Dompdf();
$options = $dompdf->getOptions();
$options->setDefaultFont('Times New Roman');
$dompdf->setOptions($options);

$contents = '<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Özet Şablonu</title>
    <style>
        html {
            margin: 2.5cm;
            font-family: "Times New Roman";
            font-size: 12pt;
        }

        h1 {
            font-size: 14pt;
        }
    </style>
</head>
<body>
<div class="contents">
    <h1>Bu Bir Başlıktır!</h1>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tempus lorem at orci faucibus auctor. Duis
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
        Proin non vehicula quam. Fusce quis dui non nulla posuere sodales. Pellentesque habitant morbi tristique
        senectus et netus et malesuada fames ac turpis egestas. Phasellus ut auctor nunc. Etiam tempor scelerisque
        lectus sit amet sagittis. Nam non vulputate libero. Cras sit amet mauris condimentum, commodo elit eu,
        aliquam leo. Aenean elementum ac eros ac pellentesque. Nullam sagittis sapien libero, dignissim euismod arcu
        volutpat at. In dapibus justo et odio condimentum, vitae sagittis tortor posuere. Aenean sed posuere nisi,
        non pharetra quam. Nam tempus magna eu ornare sodales. Sed elit ligula, pharetra in mi vel, tincidunt
        gravida enim.
    </p>
    <p>
        Suspendisse potenti. Nunc vitae tortor id nisi ultrices elementum. Proin id purus et lectus finibus pretium.
        Phasellus interdum venenatis dui in volutpat. Donec semper tempus lectus, eu ultrices augue vehicula at.
        Quisque maximus vehicula sagittis. Maecenas posuere dui ante, a vulputate nulla interdum id. Nunc vehicula
        semper enim. Pellentesque ornare ullamcorper nunc a ornare. Vivamus nec leo in magna suscipit sollicitudin
        tristique sit amet justo. Ut venenatis, enim quis pharetra accumsan, metus ante molestie tortor, at iaculis
        velit purus et est.
    </p>
    <p>
        Nunc a porttitor justo. Nullam interdum, sapien eu aliquam pharetra, lacus risus imperdiet eros, id lacinia
        eros erat ac elit. Duis non ex augue. Duis vel orci non libero consectetur aliquet non et mauris. Nunc
        consequat neque nisi, non laoreet felis sollicitudin vitae. Duis eleifend ornare dui, vel tincidunt mi. In
        pretium nisi nisi, in mollis erat interdum ac. Nullam quis blandit mi. Nullam mattis at metus egestas
        fermentum. Nunc in dolor non ligula consectetur bibendum vitae vel purus. Nunc lorem sapien, interdum in
        neque eu, facilisis commodo nibh. Integer sed eros eget odio semper dignissim. Morbi porttitor tempor ipsum,
        eget tincidunt orci porta non. Nam vel placerat erat, quis rutrum massa. Donec mollis ex quis velit auctor
        pharetra. Phasellus ornare porta venenatis.
    </p>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tempus lorem at orci faucibus auctor. Duis
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
        Proin non vehicula quam. Fusce quis dui non nulla posuere sodales. Pellentesque habitant morbi tristique
        senectus et netus et malesuada fames ac turpis egestas. Phasellus ut auctor nunc. Etiam tempor scelerisque
        lectus sit amet sagittis. Nam non vulputate libero. Cras sit amet mauris condimentum, commodo elit eu,
        aliquam leo. Aenean elementum ac eros ac pellentesque. Nullam sagittis sapien libero, dignissim euismod arcu
        volutpat at. In dapibus justo et odio condimentum, vitae sagittis tortor posuere. Aenean sed posuere nisi,
        non pharetra quam. Nam tempus magna eu ornare sodales. Sed elit ligula, pharetra in mi vel, tincidunt
        gravida enim.
    </p>
    <p>
        Suspendisse potenti. Nunc vitae tortor id nisi ultrices elementum. Proin id purus et lectus finibus pretium.
        Phasellus interdum venenatis dui in volutpat. Donec semper tempus lectus, eu ultrices augue vehicula at.
        Quisque maximus vehicula sagittis. Maecenas posuere dui ante, a vulputate nulla interdum id. Nunc vehicula
        semper enim. Pellentesque ornare ullamcorper nunc a ornare. Vivamus nec leo in magna suscipit sollicitudin
        tristique sit amet justo. Ut venenatis, enim quis pharetra accumsan, metus ante molestie tortor, at iaculis
        velit purus et est.
    </p>
    <p>
        Nunc a porttitor justo. Nullam interdum, sapien eu aliquam pharetra, lacus risus imperdiet eros, id lacinia
        eros erat ac elit. Duis non ex augue. Duis vel orci non libero consectetur aliquet non et mauris. Nunc
        consequat neque nisi, non laoreet felis sollicitudin vitae. Duis eleifend ornare dui, vel tincidunt mi. In
        pretium nisi nisi, in mollis erat interdum ac. Nullam quis blandit mi. Nullam mattis at metus egestas
        fermentum. Nunc in dolor non ligula consectetur bibendum vitae vel purus. Nunc lorem sapien, interdum in
        neque eu, facilisis commodo nibh. Integer sed eros eget odio semper dignissim. Morbi porttitor tempor ipsum,
        eget tincidunt orci porta non. Nam vel placerat erat, quis rutrum massa. Donec mollis ex quis velit auctor
        pharetra. Phasellus ornare porta venenatis.
    </p>
</div>
</body>
</html>';

$dompdf->loadHtml($contents);

$dompdf->setPaper('A4');
$dompdf->render();
// $dompdf->stream();
$output = $dompdf->output();
$dir_path = "uploads/";
$file_name = "AAb_Test2.pdf";
file_put_contents($dir_path . $file_name, $output);
