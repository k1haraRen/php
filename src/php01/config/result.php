<?php
$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
$sett = htmlspecialchars($_POST['sett'],ENT_QUOTES);
$number = htmlspecialchars($_POST['number'], ENT_QUOTES);
print "私の名前は、".$name."<br/>ご希望の商品は、".$sett."<br/>注文数は、".$number;