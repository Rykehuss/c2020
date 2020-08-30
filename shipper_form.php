<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="form.css">
    <title>New Shipper</title>
</head>
<body>
<form action="shipper.php" method="post">
    <legend>Add new Shipper</legend>
    <label for="name">Name</label>
    <input type="text" name="name" id="name">
    <label for="phone">Phone</label>
    <input type="text" name="phone" id="phone">
    <button type="submit">Add</button>
</form>
<?php
require_once 'db.php';

$db = new db();
$count = $db->count('shippers');
?>
<h1>Shippers total: <? echo $count ?></h1>
</body>
</html>