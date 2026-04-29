<?php
echo 1;
echo "<br>";
for ($i = 1; $i <= 100; $i++) {
    echo $i . " ";
}
?>

<?php
echo "<br>";
echo "<br>";
echo 2;
echo "<br>";
for ($i = 1; $i <= 50; $i++) {
    echo $i . " ";
}
for ($i = 1; $i <= 50; $i++) {
    echo "hodně" . " ";
}
?>

<?php
echo "<br>";
echo "<br>";
echo 3;
echo "<br>";
echo "<br>";
for ($i = 0; $i <= 100; $i +=2) {
    echo $i . " ";
}
?>

<?php
echo "<br>";
echo "<br>";
echo 4;
echo "<br>";
echo "<br>";
for ($i = 0; $i <= 100; $i +=3) {
    echo $i . " ";
}
?>

<?php
echo "<br>";
echo "<br>";
echo 5;
echo "<br>";
echo "<br>";
for ($i = 1; $i <= 100; $i +=1) {
    if($i%3 == 0){
        echo "BUM ";
        if($i%5 == 0){
        echo "PRÁSK";
}
}
elseif($i%5 == 0){
    echo "PRÁSK";
}
else continue;
echo "<br>";
}
?>

<?php
echo "<br>";
echo "<br>";
echo 6;
echo "<br>";
echo "<br>";
$zvirata = ["a", "b", "c", "d", "e", "f", "g", "h"];
for ($i = 0; $i <= 7; $i +=1) {
    echo $zvirata[$i] . " ";
}
?>

<?php
echo "<br>";
echo "<br>";
echo 7;
echo "<br>";
echo "<br>";
$zvirata = ["asfsfs", "bsfsfsf", "csf", "sfsfsfd", "esdsd", "fsdsd", "gs", "hdd"];
for ($i = 0; $i <= 7; $i +=1) {
    if(strlen($zvirata[$i])>5){
        echo strtoupper($zvirata[$i]) . " ";
    }
    else echo $zvirata[$i] . " ";
}
?>


<?php
echo "<br>";
echo "<br>";
echo 8;
echo "<br>";
echo "<br>";
$jmeno = "Petr";
$vek = 44;
echo "Ahoj, jmenuji se ". $jmeno ." a je mi ". $vek ." let.";

?>

<?php
echo "<br>";
echo "<br>";
echo 9;
echo "<br>";
echo "<br>";
echo rand(1, 6);
?>

<?php
echo "<br>";
echo "<br>";
echo 9;
echo "<br>";
echo "<br>";

$podmet = ["Věc ", "Žena ", "Veverka ", "Ovce ", "Sklenice "];
$prisudek = ["skládá ", "kreslí ", "pojídá ", "matlá ", "staví "];
$predmet = ["strom", "krávu", "terasu", "megaměsto", "apokalypsu"];

echo $podmet[rand(0, 4)] . $prisudek[rand(0, 4)] . $predmet[rand(0, 4)];
?>
