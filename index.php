<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shevchenko</title>
</head>
<body>
<div style="font-family: 'Courier New'">
    <?php

    $content = file('shevchenko.txt');
    $maxLength = max(array_map(function ($subarray) {
        return mb_strlen($subarray);
    }, $content));
    for ($i = 0; $i < $maxLength; $i++) {
        for ($j = 0; $j < count($content); $j++) {
            $char = mb_substr($content[$j], $i, 1);
//            var_dump($char);
            if ($char === ' ' || $char === '' || $char == "\r\n" || $char == "\n" || $char == "\r") {
                $char = '&nbsp;';
            }
            echo $char . '&nbsp;&nbsp;&nbsp;';
        }
        echo "\n<br>";
    }
    ?></div>
</body>
</html>
