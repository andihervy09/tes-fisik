<?php
	
	include 'function.php';
	$id = $_GET['id_user'];
	if (hapusu($id) > 0 ) {
			echo "<script>
				alert('Data berhasil dihapus');
				document.location.href= 'data_User.php'
				</script> ";
		}	
		else{
			echo "<script>
				alert('data gagal');
				document.location.href='data_User.php.
				</script>";
		}
 ?>