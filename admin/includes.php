<?php

include "../lib/get.php";
include "../lib/json.php";
//include "../markhtml/markhtml.php";

$config = $json->re ($fileio->getfile ("../config.json"));
$blogname = $config['name'];
$blogdc = $config['land'];

$post = array();
$posttit = array();
$posttag = array();
for ($i = 1; $i <= $config['post']; $i ++)
{
  $post[$i] = $fileio->getfile ("../post/$i");
  $posttit[$i] = $fileio->getline ("../tit/$i", 1);
  $posttag[$i] = $fileio->getline ("../tag/$i", 1);
}

?>
