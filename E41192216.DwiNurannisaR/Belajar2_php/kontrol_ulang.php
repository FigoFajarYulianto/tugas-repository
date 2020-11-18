<?php
$nilai=80;
echo "CONTOH IF ELSE <br>";
if($nilai>80) {echo "Selamat Anda mendapatkan grade A <br>";}
elseif (($nilai >=70) AND ($nilai <=80)) {echo "Nilai Anda mendapat $nilai <br>";}
else {echo "Maaf Anda belum dapat grade A <br>";};

echo "CONTOH SWITCH <br>";
switch($nilai) {
    case 100 :echo "Nilai yang dipilih 100 <br>";
    break;
    case 90 :echo "Nilai yang dipilih 90 <br>";
    break;
    default : echo "Maaf anda coba lagi <br>";

}   echo "CONTOH FOR <br>";

for($i=-5;$i>=-1;$i--) {
    echo "Looping FOR ke : " .$i. "<br>";   
}
echo "CONTOH WHILE <br>";
$j=1;
while($j<=5) {
    echo "Looping While ke : ".$j."<br>";
    $j++;
}
?>