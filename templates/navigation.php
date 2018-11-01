<?php
$menuUnits = ["Строительные материалы","Акции","Новости","Контакты"];
$menuUnitsLinks = ["/?page=shop","/?page=specialoffers","/?page=news","/?page=contacts"];
?>

<nav>
    <ul>
        <?php for ($i=0;$i<count($menuUnits);$i++): ?>
        <li><a href="<?=$menuUnitsLinks[$i]?>"><?=$menuUnits[$i]?></a></li>
        <?php endfor; ?>
    </ul>
</nav>