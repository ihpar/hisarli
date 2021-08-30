<?php
session_start();
require_once "../dbms/class.db.php";
require_once "../dbms/utils.php";
require_once "ResizeImage.php";

if (!Utils::isLoggedIn()) die("wrong call");

if (Utils::isEmpty($_POST["key"]) || Utils::isEmpty($_SESSION["sec_key"]) || $_SESSION["sec_key"] != $_POST["key"]) die("wrong call");

$db = DB::getInstance();

$targetDir = $db->filter($_POST["targetDir"]);

$filePrefix = $db->filter($_POST["filePrefix"]);

$ds = DIRECTORY_SEPARATOR;

$storeFolder = '..' . $ds . 'img' . $ds . $targetDir;

if (!empty($_FILES)) {
    $result = array("res" => "OK");
    try {
        $tempFile = $_FILES['file']['tmp_name'];

        $targetPath = dirname(__FILE__) . $ds . $storeFolder . $ds;

        $fileExt = "." . pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);

        $uniqueFileName = "no";

        while (true) {
            $uniqueFileName = uniqid($filePrefix, true) . $fileExt;
            if (!file_exists($targetPath . $uniqueFileName)) break;
        }

        $targetFile = $targetPath . $uniqueFileName;

        move_uploaded_file($tempFile, $targetFile);

        $resize = new ResizeImage($targetFile);
        $resize->resizeTo(200, 200, 'maxHeight');
        $resize->saveImage($targetFile);


        $result = array(
            "res" => "OK",
            "imageUrl" => $uniqueFileName
        );

    } catch (Exception $e) {
        $result = array("res" => "exception:" . $e->getMessage());
    }

    echo json_encode($result);
}