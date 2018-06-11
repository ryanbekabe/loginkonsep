<?php
session_start();
if(isset($_SESSION['ses1'])){
	$varses1 = $_SESSION['ses1'];
} else {
	$varses1 = 'Sesi 1 0';
}
	
if(isset($_SESSION['ses2'])){
	$varses2 = $_SESSION['ses2'];
} else {
	$varses2 = 'Sesi 2 0';
}
if(isset($_SESSION['ses3'])){
	$varses3 = $_SESSION['ses3'];
} else {
	$varses3 = 'Sesi 3 0';
}

echo $varses1.'<br/>';
echo $varses2.'<br/>';
echo $varses3.'<br/>';
echo 'Mendapatkan nilai dari sesi / $_SESSION';

/*
Pada page2.php ini, berarti sistem membaca sesi dari page1.php
yang memastikan apakah user sedang berada pada halaman login
dengan memasukkan data terlebih dahulu, atau tidak memasukkan
data terlebih dahulu.
*/
?>