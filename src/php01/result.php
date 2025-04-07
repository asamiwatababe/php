<?php
$mu_name = htmlspecialchars($_POST['my_name'], ENT_QUOTES);
$choices = htmlspecialchars($_POST['choices'], ENT_QUOTES);
$number = htmlspecialchars($_POST['number'], ENT_QUOTES);

print "私の名前は、" . $mu_name. "<br>";
print "ご希望の商品は、、" . $choices. "<br>";
print "御注文数は、" . $number. "<br>";