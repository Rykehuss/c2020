<?php
$str1 = "Подвійні 'лапки'";
$str2 = 'Одинарні "лапки"';
echo $str1;
echo '<br>';
echo $str2;
echo '<br>';
$var = 2;
echo 'Змінні у одинарних лапках не виводяться - $var';
echo '<br>';
echo "Змінні у подвійних лапках виводяться - $var";
echo '<br>';
echo "І так також виводяться виводяться - {$var}";
echo '<br>';

$heredoc = <<<"EOT"
Багато всякого
тексту,
можна з \n
переносами \n
і підстановка також працює - {$var}
EOT;

echo $heredoc;
echo '<br>';

$nowdoc = <<<'EOT'
Багато всякого
тексту,
можна з 
переносами
але підстановка не працює - {$var}
EOT;

echo $nowdoc;

echo "dfvifudv".$var."hbieirvb";