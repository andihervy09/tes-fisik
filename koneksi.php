<?php 

$connect = mysqli_connect('localhost','root','','fisik1');
		function query($query ) {
			global $connect;
			$result = mysqli_query($connect, $query);
			$rows = [];
			while ($row = mysqli_fetch_assoc($result)){
				$rows[] = $row;
			}
			return $rows;
		}

 ?>