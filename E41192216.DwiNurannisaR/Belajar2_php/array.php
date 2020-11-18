<?php
$punakawan = array("Semar","Gareng","Petruk","Bagong");
echo $punakawan[0]; //hasilnya Semar
echo "<br>";
echo $punakawan[3]; //hasilnya Bagong
echo $punakawan[2];
$punakawan[1]="Semar";
$punakawan[2]="Gareng";
$punakawan[3]="Petruk";
$punakawan[4]="Bagong";
echo $punakawan[3]; //hasilnya Petruk
for($i=4;$i>=0;$i--) {
    echo "Hasil Perulangan : " .$punakawan[$i]. "<br>";  
} 
$j=1;
while($j<=4) {
    echo "Hasil Perulangan : ".$punakawan[$j]."<br>";
    $j++;
}
?>