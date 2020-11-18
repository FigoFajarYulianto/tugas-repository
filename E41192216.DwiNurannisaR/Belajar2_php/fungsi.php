<?php
echo "MEMBUAT FUNGSI <br>";
function berhasil($nilai)
{
    
     echo "SELAMAT ANDA BERHASIL dengan nilai ".$nilai;
}
function gagal()
{
    echo "MAAF ANDA GAGAL";
}
$nilai = 90;
if ($nilai>=70)
{ berhasil($nilai); }
else {gagal(); };
echo "<br>";
echo "FUNGSI DENGAN PARAMETER<br>";
function jumlah($a,$b)//fungsi dengan 2 parameter
{ return $a+$b; }//nilai kembali (return value)
$nilai1=10;
$nilai2=15;
echo jumlah($nilai1,$nilai2);//passing parameter
echo "<br>";
echo "FUNGSI BAWAAN<br>";
$sekarang = getdate();
print_r($sekarang);// hasilnya berapa array
echo "<br>";//hasil elemen untuk menampilkan tanggal
echo "Sekarang Tanggal :".$sekarang["mday"];
?>
