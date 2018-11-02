<?php

$DOCROOT = $_SERVER["DOCUMENT_ROOT"];
$page = @$_GET['page'];

//Set locale

/*putenv ("LC_ALL=uk_UK");
setlocale(LC_ALL,"uk-UA");
echo strftime("%H:%M:%S");*/

if ($page===NULL||$page === "shop"){
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

    //Contacts info

    $subsidiary = ["Dnepr","Kiev"];
    $phone = ["099 5605566","050 5605566"];
    $email = ["email@email.com","email2@email2.com"];

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