<?php
// $sipintar = 100;
// $lumayan = 81 ;
// $perlubelajar = 75;
// $kurangpintar = -10;
// if($sipintar <= 100 && $sipintar >= 89)
// {
//     echo "WAHHHA KERENN KAMUU DAPAT A..... = 97<strong>!!!!!!</strong>";
// }
// else if($sipintar <= 90 && $sipintar >= 79)
// {
//     echo "<br> Okelahh dapet B...= 81";
// }
// else if($sipintar <= 79 && $sipintar >= 70)
// {
//    echo "<br> Tingkatkan lagii yaaa nilai C = 75";
// }
// else if($sipintar <= 69 && $sipintar >= 0)
//     echo "D";
// else{
//     echo "<br> sipintar Wajib Di atas 0";
// }

// if($lumayan <= 100 && $lumayan >= 89)
// {
//     echo "WAHHHA KERENN KAMUU DAPAT A..... = 97<strong>!!!!!!</strong>";
// }
// else if($lumayan <= 90 && $lumayan >= 79)
// {
//     echo "<br> Okelahh dapet B...= 81";
// }
// else if($lumayan <= 79 && $lumayan >= 70)
// {
//    echo "<br> Tingkatkan lagii yaaa nilai C = 75";
// }
// else if($lumayan <= 69 && $lumayan >= 0)
//     echo "D";
// else{
//     echo "<br> sipintar Wajib Di atas 0";
// }

// if($perlubelajar <= 100 && $perlubelajar >= 89)
// {
//     echo "WAHHHA KERENN KAMUU DAPAT A..... = 97<strong>!!!!!!</strong>";
// }
// else if($perlubelajar <= 90 && $perlubelajar >= 79)
// {
//     echo "<br> Okelahh dapet B...= 81";
// }
// else if($perlubelajar <= 79 && $perlubelajar >= 70)
// {
//    echo "<br> Tingkatkan lagii yaaa nilai C = 75";
// }
// else if($perlubelajar <= 69 && $perlubelajar >= 0)
//     echo "D";
// else{
//     echo "<br> sipintar Wajib Di atas 0";
// }

// if($kurangpintar <= 100 && $kurangpintar >= 89)
// {
//     echo "WAHHHA KERENN KAMUU DAPAT A..... = 97<strong>!!!!!!</strong>";
// }
// else if($kurangpintar <= 90 && $kurangpintar >= 79)
// {
//     echo "<br> Okelahh dapet B...= 81";
// }
// else if($kurangpintar <= 79 && $kurangpintar >= 70)
// {
//    echo "<br> Tingkatkan lagii yaaa nilai C = 75";
// }
// else if($kurangpintar <= 69 && $kurangpintar >= 0)
//     echo "D";
// else{
//     echo "<br> sipintar Wajib Di atas 0";
// }

$jamSekarang = date("18"); 


if ($jamSekarang >= 0 && $jamSekarang < 4) {
    $waktu = "Dini Hari";
} elseif ($jamSekarang >= 4 && $jamSekarang < 10) {
    $waktu = "Pagi Hari";
} elseif ($jamSekarang >= 10 && $jamSekarang < 15) {
    $waktu = "Siang";
} elseif ($jamSekarang >= 15 && $jamSekarang < 18) {
    $waktu = "Sore";
} elseif ($jamSekarang >= 18 && $jamSekarang < 24) {
    $waktu = "Malam";
} else {
    $waktu = "MAKHLUK MANA ANDA";
}


echo "<br> <br> Sekarang adalah jam: $jamSekarang:00 <br> Waktu: $waktu";


// function sigma($nilai){
//     if($nilai <= 101 && $nilai >= 89)
//     {
//         echo "WAHHHA KERENN KAMUU DAPAT A.....<strong>97!!!!!!</strong>";
//     }
//     else if($nilai <= 90 && $nilai >= 79)
//     {
//         echo "B";
//     }
//     else if($nilai <= 79 && $nilai >= 70)
//     {
//         echo "C";
//     }
//     else if($nilai <= 69 && $nilai >= 0)
//         echo "D";
//     else{
//         echo "sipintar Wajib Di atas 0";
//     }
// }


// sigma($sipintar)


?>