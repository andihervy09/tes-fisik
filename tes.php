<?php 
include 'function.php';
                      $query4 = query("SELECT round(benchmark.run20m / hasil.run20m * 100) as tes FROM benchmark AND hasil WHERE id_tes");
                      print($query4);
                       ?>
 ?>


	$a = 2.75;
	$b = 3.22;
	$c = 31;
	$d = 24;
	$jumlah1 = round($a/$b *100);
	$jumlah2 = round($d/$c *100);
	$rata = round($jumlah1+$jumlah2)/2;
	echo" $jumlah1 dan $jumlah2 ";
	echo "$rata%";

 
SELECT * FROM  atlet
INNER JOIN benchmark ON atlet.id_atlet = benchmark.id_atlet
INNER JOIN hasil ON atlet.id_atlet = hasil.id_atlet");


$id_atlett = 1;

$benchmark = 1;
$hasil = 2;

$result = '';

if ($id_atlett->status == 1) {
	$result = $benchmark * $hasil;
} else {
	$result = $benchmark / $hasil;
}
