<?php
	
	include 'function.php';
	$id = $_GET['id_atlet'];
	if (hapusa($id) > 0 ) {
			echo "<script>
				alert('Data berhasil dihapus');
				document.location.href= 'data_atlet.php'
				</script> ";
		}	
		else{
			echo "<script>
				alert('data gagal');
				document.location.href='data_atlet.php.
				</script>";
		}
 ?>