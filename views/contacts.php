<?php
//Contacts info

$subsidiary = ["Dnepr","Kiev"];
$phone = ["099 5605566","050 5605566"];
$email = ["email@email.com","email2@email2.com"];
?>

<div class="contacts_content">
    <?php
    for ($i=0;$i<count($subsidiary);$i++): ?>
    <div class="contacts_unit">
        <p><?="Филиал: ".$subsidiary[$i]?></p>
        <p><?="Телефон: ".$phone[$i]?></p>
        <p><?="Электронная почта: ".$email[$i]?></p>
    </div>
    <?php endfor;?>
</div>