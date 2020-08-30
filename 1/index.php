<?php
$SUMMA= 34499;
$MAXPLATA = 5000;
//входные данные m=10 мес, процентная ставка $p=0,04, комиссия $k=500грн
$kmes =9;
$prozstavka =0.04;
$komis =500;
$Generalmesplata = 0;
$ki = mes($SUMMA, $MAXPLATA, $komis);
if ($ki>$kmes) { $kmes=$ki;}
for ($i = 1; $i <= $kmes; $i++) {

    $z = $SUMMA-round($SUMMA/$kmes)*$i;

    $Mesplata=round($SUMMA/$kmes)+$z*$prozstavka+$komis;
    $Generalmesplata = $Generalmesplata+$Mesplata;
        echo round($SUMMA / $kmes) . "  ", round($z * $prozstavka) . "  ", $komis . "  ", $Mesplata;
        echo "</br>";


}
function mes($SUMMA, $MAXPLATA, $komis){

    $ki = round((0.96*$SUMMA)/($MAXPLATA-$komis-0.04*$SUMMA));
    return $ki;
}
echo $Generalmesplata."</br>";
echo "</br>";
?>

<?php
$SUMMA= 34499;
$MAXPLATA = 5000;
//входные данные m=10 мес, процентная ставка $p=0,04, комиссия $k=500грн
$kmes =10;
$prozstavka =0.03;
$komis =1000;
$ki = mes1($SUMMA, $MAXPLATA, $komis);
$Generalmesplata = 0;
if ($ki>$kmes) { $kmes=$ki;}
for ($i = 1; $i <= $kmes; $i++) {

    $z = $SUMMA-round($SUMMA/$kmes)*$i;

    $Mesplata=round($SUMMA/$kmes)+$z*$prozstavka+$komis;
    $Generalmesplata = $Generalmesplata+$Mesplata;
    echo round($SUMMA / $kmes) . "  ", round($z * $prozstavka) . "  ", $komis . "  ", $Mesplata;

    echo "</br>";


}
function mes1($SUMMA, $MAXPLATA, $komis){

    $ki = round((0.96*$SUMMA)/($MAXPLATA-$komis-0.04*$SUMMA));
    return $ki;
}
echo $Generalmesplata."</br>";
echo "</br>";
?>

<?php
$SUMMA= 34499;
$MAXPLATA = 5000;
//входные данные m=10 мес, процентная ставка $p=0,04, комиссия $k=500грн
$kmes =8;
$prozstavka =0.02;
$komis =0;
$Generalmesplata = 0;
$openaccount = 6666;
$ki = mes2($SUMMA, $MAXPLATA, $komis);
if ($ki>$kmes) { $kmes=$ki;}
for ($i = 1; $i <= $kmes; $i++) {

    $z = $SUMMA-round($SUMMA/$kmes)*$i;

    $Mesplata=round($SUMMA/$kmes)+$z*$prozstavka+$komis;
    $Generalmesplata = $Generalmesplata+$Mesplata;
    echo round($SUMMA / $kmes) . "  ", round($z * $prozstavka) . "  ", $komis . "  ", $Mesplata;
    echo "</br>";


}
function mes2($SUMMA, $MAXPLATA, $komis){

    $ki = round((0.96*$SUMMA)/($MAXPLATA-$komis-0.04*$SUMMA));
    return $ki;
}
echo $Generalmesplata+$openaccount."</br>";
?>
