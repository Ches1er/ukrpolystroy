<?php
$tradeMarksArr = ["Mapei","Sika","Scanmix","Esha"];
$tradeMarks = "Официальный дилер торговых марок: ";
for ($i=0;$i<count($tradeMarksArr);$i++){
    if ($i===count($tradeMarksArr)-1)$tradeMarks.=" ".$tradeMarksArr[$i];
    else $tradeMarks.=" ".$tradeMarksArr[$i].",";

}
?>

<header>
    <img src="images/logo.jpg" alt="ukrpolystroy_logo">
    <h1>Компания "Укполистрой"</h1>
    <h2><?=$tradeMarks?></h2>
</header>