<?php
	
	include 'function.php';
	$id = $_GET['id_pelatih'];
	if (hapusp($id) > 0 ) {
			echo "<script>
				alert('Data berhasil dihapus');
				document.location.href= 'data_pelatih.php'
				</script> ";
		}	
		else{
			echo "<script>
				alert('data gagal');
				document.location.href='data_pelatih.php.
				</script>";
		}
 ?>