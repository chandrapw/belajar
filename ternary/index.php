<h3>Coba ternary</h3>

<?php

$a = 'b';

echo empty($a) ? 'a' : "Benar";

echo '<br />';

//Simple nested/ternary if

$var = 3;
$t = ($var > 2 ? 'Var lebih besar' : 'Var lebih kecil'); // returns true
echo $t;
echo '<br />';

$score = 70;
$age = 23;
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
echo '<br />';
$variable = 3;
$nama = ($variable == 1 ? 'foo' : ($variable == 2 ? 'bar' : 'baz'));
echo $nama;


/*Jika hanya if saja tanpa else*/
echo '<br />';
$abc = 2;
$asd = ($abc == 1 ? 'benar' : $abc == null);
echo $asd;

echo '<br />';
echo 'Fungsi Shorthand';
echo '<br />';
echo '<br />';

for ($x=1; $x <= 5; $x++):
   echo $x;
   echo '<br />';
endfor;

echo '<br />';

$aray = [1,2,3,4];
foreach ($aray as $value):
   echo $value;
   echo '<br />';
endforeach;

echo '<br />';

class bob {

public function isDebug(){
    return true;
}

public function debug(){
        echo 'yes dice!!!';
    }
}


$bob = new bob(); 

($bob->isDebug()) && $bob->debug(); 