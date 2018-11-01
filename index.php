<?php

$DOCROOT = $_SERVER["DOCUMENT_ROOT"];
$page = @$_GET['page'];

if ($page===NULL || $page === "main"){
    $contentFile=$DOCROOT."/pages/main.php";
}
elseif ($page === "shop"){
    $contentFile=$DOCROOT."/pages/shop.php";
}
elseif ($page === "specialoffers"){
    $contentFile=$DOCROOT."/pages/specialoffers.php";
}
elseif($page === "news"){
    $contentFile=$DOCROOT."/pages/news.php";
}
elseif ($page === "contacts"){
    $contentFile=$DOCROOT."/pages/contacts.php";
}
else $contentFile=$DOCROOT."/pages/404.php";

$headerFile = "templates/header.php";
$navigationFile = "templates/navigation.php";
$footerFile = "templates/footer.php";
include "templates/default.php";


/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 01.11.2018
 * Time: 10:52
 */