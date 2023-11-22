<?php
	
	include 'function.php';
	$id = $_GET['id_tes'];
	if (hapusb($id) > 0 ) {
			echo "<script>
				alert('Data berhasil dihapus');
				document.location.href= 'benchmark.php'
				</script> ";
		}	
		else{
			echo "<script>
				alert('data gagal');
				document.location.href='benchmark.php.
				</script>";
		}
 ?>