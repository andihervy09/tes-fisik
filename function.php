<?php 
require 'koneksi.php';
//Fungsi Tambah Data
	function tambaha($data){ //Tambah Atlet
		global $connect;
		$id_cabor	= $data['id_cabor'];
		$nama = $data['nama'];
		$tmpt_lhr = $data['tmpt_lhr'];
		$tgl_lhr = $data['tgl_lhr'];
		$alamat = $data['alamat'];
		$id_level = $data['id_level'];
		
		$query = "INSERT INTO atlet VALUES('','$id_cabor','$nama','$tmpt_lhr','$tgl_lhr','$alamat','$id_level')";
		mysqli_query($connect, $query);
		return mysqli_affected_rows($connect);	

	}
	function tambahp($data){//Tambah Pelatih
		global $connect;
		$id_cabor = $data['id_cabor'];
		$nama = $data['nama'];
		$alamat = $data['alamat'];
		$tmpt_lhr = $data['tmpt_lhr'];
		$tgl_lhr = $data['tgl_lhr'];

		$query = "INSERT INTO pelatih VALUES('','$id_cabor','$nama','$alamat','$tmpt_lhr','$tgl_lhr')";
		mysqli_query($connect, $query);
		return mysqli_affected_rows($connect);	
		var_dump($query);
	}
	function tambahu($data){
		global $connect;
		$username = $data['username'];
		$password = md5('password');
		$nama = $data['nama'];
		$id_level = $data['id_level'];

		$query = "INSERT INTO user VALUES('', '$username', '$password', '$nama', '$id_level')";
		mysqli_query($connect, $query);
		return mysqli_affected_rows($connect);	
	}
	function benchmark($data){
		global $connect;
		$keterangan = $data['keterangan'];
		$tanggal = $data['tanggal'];
		$run20m = $data['run20m'];
		$shutle = $data['shutle'];
		$flexibility = $data['flexibility'];
		$jump_kaka = $data['jump_kaka'];
		$jump_kaki = $data['jump_kaki'];
		$situp = $data['situp'];
		$pushup = $data['pushup'];
		$bleep =$data['bleep'];

		$query = "INSERT INTO benchmark VALUES('','$keterangan', '$tanggal','$run20m', '$shutle', '$flexibility', '$jump_kaka', '$jump_kaki', '$situp', '$pushup', '$bleep')";
		var_dump($query);
		mysqli_query($connect, $query);
		return mysqli_affected_rows($connect);

	}
	function hasil($data){
		global $connect;
		$id_bench = $data['id_bench'];
		$id_atlet = $data['id_atlet'];
		$tanggal = $data['tanggal'];
		$run20m = $data['run20m'];
		$shutle = $data['shutle'];
		$flexibility = $data['flexibility'];
		$jump_kaka = $data['jump_kaka'];
		$jump_kaki = $data['jump_kaki'];
		$situp = $data['situp'];
		$pushup = $data['pushup'];
		$bleep =$data['bleep'];

		$query = "INSERT INTO hasil VALUES('','$id_bench','$id_atlet', '$tanggal','$run20m', '$shutle', '$flexibility', '$jump_kaka', '$jump_kaki', '$situp', '$pushup', '$bleep')";
		var_dump($query);
		mysqli_query($connect, $query);
		return mysqli_affected_rows($connect);

	}
	function tambah_prestasi($data){
		global $connect;
		$id_pelatih=$data['id_pelatih'];
		$tanggal = $data['tanggal'];
		$kejuaraan = $data['kejuaraan'];
		$medali = $data['medali'];

		$query  = "INSERT INTO prestasi VALUES('','$id_pelatih', '$tanggal', '$kejuaraan', '$medali')";
		var_dump($query);
		mysqli_query($connect, $query);
		return mysqli_affected_rows($connect);

	}

//Fungsi Hapus Data
	function hapusa($id){
			global $connect;
			mysqli_query($connect, "DELETE FROM atlet WHERE id_atlet = $id");
			return mysqli_affected_rows($connect);
		}
	function hapusp($id){
			global $connect;
			mysqli_query($connect, "DELETE FROM pelatih WHERE id_pelatih = $id");
			return mysqli_affected_rows($connect);
		}
	function hapusu($id){
			global $connect;
			mysqli_query($connect, "DELETE FROM user WHERE id_user = $id");
			return mysqli_affected_rows($connect);
		}
	function hapusb($id){
			global $connect;
			mysqli_query($connect, "DELETE FROM benchmark WHERE id_tes = $id");
			return mysqli_affected_rows($connect);
		}
	function hapush($id){
			global $connect;
			mysqli_query($connect, "DELETE FROM hasil WHERE id_tes = $id");
			return mysqli_affected_rows($connect);
		}
//Fungsi Edit Data
	function editp($data){
		global $connect;
		$id_pelatih = $data['id_pelatih'];
		$id_cabor = $data['id_cabor'];
		$nama = $data['nama'];
		$alamat = $data['alamat'];
		$tgl_lhr = $data['tgl_lhr'];
		$tmpt_lhr = $data['tmpt_lhr'];
		$cabor	= $data['cabor'];
		$prestasi = $data['prestasi'];

		$query = "UPDATE pelatih SET
						id_cabor = '$id_cabor', nama = '$nama', alamat = '$alamat', tgl_lhr ='$tgl_lhr', tmpt_lhr ='$tmpt_lhr', prestasi = '$prestasi'
					WHERE id_pelatih = $id_pelatih";
					var_dump($query);
				mysqli_query($connect, $query);
				return mysqli_affected_rows($connect);
	}
	function edita($data){
		global $connect;
		$id_atlet = $data['id_atlet'];
		$id_cabor	= $data['id_cabor'];
		$nama = $data['nama'];
		$tmpt_lhr = $data['tmpt_lhr'];
		$tgl_lhr = $data['tgl_lhr'];
		$alamat = $data['alamat'];

		$query = "UPDATE atlet SET
							id_cabor = '$id_cabor', nama = '$nama', tmpt_lhr = '$tmpt_lhr', tgl_lhr = '$tgl_lhr', alamat ='$alamat' 
					WHERE id_atlet = $id_atlet";
					var_dump($query);
					mysqli_query($connect, $query);
					return mysqli_affected_rows($connect);
	}
	function editu($data){
		global $connect;
		$id_user = $data['id_user'];
		$username = $data['username'];
		$password = md5('password');
		$nama = $data['nama'];
		$id_level = $data['id_level'];

		$query = "UPDATE user SET
								nama = '$nama', username = '$username', password = '$password', nama = '$nama', id_level = '$id_level'
				WHERE id_user = $id_user";
		mysqli_query($connect, $query);
		return mysqli_affected_rows($connect);
	}
	function editb($data){//edit benchmark
		global $connect;
		$id_tes = $data['id_tes'];
		$id_atlet = $data['id_atlet'];
		$tanggal = $data['tanggal'];
		$run20m = $data['run20m'];
		$shutle = $data['shutle'];
		$flexibility = $data['flexibility'];
		$jump_kaka = $data['jump_kaka'];
		$jump_kaki = $data['jump_kaki'];
		$situp = $data['situp'];
		$pushup = $data['pushup'];
		$bleep =$data['bleep'];

		$query = "UPDATE benchmark SET
									id_atlet = '$id_atlet', tanggal = '$tanggal', run20m = '$run20m', shutle = '$shutle', flexibility = '$flexibility', jump_kaka = '$jump_kaka', jump_kaki = '$jump_kaki', situp = '$situp', pushup = '$pushup', bleep = '$bleep'
				 WHERE id_tes = $id_tes";
		var_dump($query);
		mysqli_query($connect, $query);
		return mysqli_affected_rows($connect);

	}
	
	function edith($data){//edit hasil
		global $connect;
		$id_tes = $data['id_tes'];
		$id_atlet = $data['id_atlet'];
		$tanggal = $data['tanggal'];
		$run20m = $data['run20m'];
		$shutle = $data['shutle'];
		$flexibility = $data['flexibility'];
		$jump_kaka = $data['jump_kaka'];
		$jump_kaki = $data['jump_kaki'];
		$situp = $data['situp'];
		$pushup = $data['pushup'];
		$bleep =$data['bleep'];

		$query = "UPDATE hasil SET
									id_atlet = '$id_atlet', tanggal = '$tanggal', run20m = '$run20m', shutle = '$shutle', flexibility = '$flexibility', jump_kaka = '$jump_kaka', jump_kaki = '$jump_kaki', situp = '$situp', pushup = '$pushup', bleep = '$bleep'
				 WHERE id_tes = $id_tes";
		mysqli_query($connect, $query);
		return mysqli_affected_rows($connect);

	}
	//main system
	function run20m ($data){
		global $connect;
		$id_tes = $data['id_tes'];
		$id_atlet = $data['id_atlet'];
		$tanggal = $data['tanggal'];
		$run20m = $data['run20m'];

		$query1 = "SELECT run20m FROM benchmark WHERE id_tes = $id_tes";
		$query2 = "SELECT run20m FROM hasil WHERE id_tes = $id_tes";
		$hitung = round($query1 / $query2 * 100);
		var_dump($hitung);
		mysqli_query($connect, $hitung);
		return mysqli_affected_rows($connect);
	}

 ?>

