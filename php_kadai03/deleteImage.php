<?php
include("dbConfig.php");

$targetDirectory = "images/";
$imageId = $_GET["id"];

if(!empty($imageId)){
    $sql = "SELECT filename FROM gs_bm_table WHERE id = ". $imageId;

    $sth = $pdo->prepare($sql);
    $sth->execute();
    $getImageName = $sth ->fetch();
}

$deleteImage = unlink($targetDirectory . $getImageName["filename"]);

if($deleteImage){
    $deleteRecord = $pdo->query("DELETE FROM gs_bm_table WHERE id = " .$imageId);

    if($deleteRecord){
        header("Location:" . "./index.php", true, 303);
        exit();
    }
}



?>