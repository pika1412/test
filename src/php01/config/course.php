<?php
$company = htmlspecialchars($_POST['company'], ENT_QUOTES);

$set = htmlspecialchars($_POST['set'], ENT_QUOTES);

$set = htmlspecialchars($_POST['number'], ENT_QUOTES);

print "お名前は" . $company . "ですね<br />";
print "ご希望商品は" . $set . "ですね<br />";
print "注文数は" . $number . "ですね";