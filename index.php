<?php

define("DOCROOT",$_SERVER["DOCUMENT_ROOT"]);
$page = @$_GET['page'];
include DOCROOT."/functions.inc";


if ($page===NULL||$page === "shop"){
    $logicfile="main";
    $pagefile = "shop";
}
elseif ($page === "specialoffers"){
    $logicfile="main";
    $pagefile = "specialoffers";
}
elseif($page === "news"){
    $logicfile="main";
    $pagefile = "news";
}
elseif ($page === "contacts") {
    $logicfile = "main";
    $pagefile = "contacts";
}
else{
    $logicfile = "404";
    $pagefile = "error";
    }

loadPage($logicfile,$pagefile);


/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 01.11.2018
 * Time: 10:52
 */