<?php

require_once 'db.php';

$source = $_POST;

$name = $source['name'] ? $source['name'] : 'Unknown';
$phone = $source['phone'] ? $source['phone'] : 'Unknown';;

$db = new db();
$db->insert('shippers', [
    'ShipperName' => "'".$name."'",
    'Phone' => "'".$phone."'"
]);
header('Location: shipper_form.php');