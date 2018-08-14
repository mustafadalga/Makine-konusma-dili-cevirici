<?php 

if (isset($_POST['cumle']) && $_POST['cumle']!="") {
	$sonuc="";
	$cumle=$_POST["cumle"];
	for ($i=0; $i <strlen($cumle) ; $i++) 
	{ 
		$asci=ord($cumle[$i]);//karakterleri ascı koduna çevir.
		$sonuc=$sonuc.decbin($asci)." ";//ascıı kodunu 2'lik sisteme çevir.
	}
	echo $sonuc;
}


if (isset($_POST['ikiliksistem']) && $_POST['ikiliksistem']!="") {
$sonuc2="";
$karakterler=explode(" ", $_POST["ikiliksistem"]);//
for ($i=0; $i <count($karakterler); $i++) 
{ 
     $sonuc2.=chr(bindec($karakterler[$i]));//ikilik -> ascıı ->char karakter karşılığı
}
echo $sonuc2;
}
 ?>