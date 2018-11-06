<?php

define("DOCROOT",$_SERVER["DOCUMENT_ROOT"]);
$page = @$_GET['page'];
include DOCROOT."/functions.inc";

$_ROUTES = [
    "shop" => "main.shop",
    "specialoffers" => "main.specialoffers",
    "news" => "main.news",
    "contacts" => "main.contacts",
];

if(!isset($_ROUTES[$page])){
    $logicfile = "main";
    $pagefile = "error";
}
else {
    $files = explode(".",$_ROUTES[$page]);
    $logicfile = $files[0];
    $pagefile = $files[1];
}

loadPage($logicfile,$pagefile);


/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 01.11.2018
 * Time: 10:52
 */