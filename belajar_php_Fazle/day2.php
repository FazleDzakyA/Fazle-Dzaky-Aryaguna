<h1>MATEMATIKA GUYS</h1>

<?php
$angka1 = "8.4";
$angka2 = "5";
$penjumlahan = $angka1 + $angka2;
$x = $angka1 * $angka2;
$bagi = $angka1 / $angka2;
$kurang = $angka1 - $angka2;

echo $angka1 . " + " . $angka2 . " = " . $penjumlahan ;
echo "<br> $angka1 x $angka2 = $x";
echo "<br> $angka1 : $angka2 = $bagi";
print "<br> $angka1 - $angka2 = $kurang";
echo "<br> $angka1<sup> $angka2 </sup> ="; //sup perpangkatan di html
echo pow($angka1,$angka2); //pow perpangkatan di php
echo "<br>";
print pow(8.4,5); //angka1 itu dasar, angka2 itu exponen / pangkatnya

?>