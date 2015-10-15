<h3>Coba nested</h3>

<?php

$a = true;

echo $a ? 'a' : "Benar";

echo '<br />';

//Simple nested/ternary if

$var = 3;
$t = ($var > 2 ? 'Var lebih besar' : 'Var lebih kecil'); // returns true
echo $t;
echo '<br />';

$score = 70;
$age = 10;
echo 'Tentang umur: ',
($age > 10 ? ($score < 80 ? 'behind 80' : 'above average 80') : ($score < 50 ? 'behind 50' : 'above average 50'));

echo '<br />';

if ($age > 10){
	if($score < 80){
		echo 'behind 80';
	} else {
		echo 'above average 80';
	}
} else{
	if($score < 50){
		echo 'behind 50';
	} else {
		echo 'above average 50';
	}
}

$nilai = 85;
echo '<br />';
echo 'nilai kamu : ';
$hasil = ($nilai != null ? ($nilai > 0 && $nilai < 40 ? 'E' : ($nilai > 40 && $nilai < 50 ? 'D' : 
($nilai > 50 && $nilai < 70 ? 'C' : ($nilai > 70 && $nilai <= 85 ? 'B' : 'A')))) : 'nilai kosong');
echo $hasil;


/*
penggunaan ternary
if($hasil){
	echo 'benar';
} else{
	echo 'salah';
}

echo ($hasil ? 'benar' : 'salah');


*/