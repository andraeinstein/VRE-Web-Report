<?php include('config.php'); ?>
<!DOCTYPE html>
<html>
<head>
<title>Menampilkan Data dengan MySQLi</title>
<style>
table {
margin: 0 auto;
border-collapse: collapse;	
}

tbody {
color: #000;
}

table th, table td {
padding: 5px 10px;
border: 1px solid #000000;
}

table th {
background: #CCC;
font: bold 14px Arial, Helvetica, sans-serif;
color:#333;
}

table tr {
font: normal 14px Tahoma, Geneva, sans-serif;
}
</style>
</head>
<body>
<table>
<tbody>
<tr>
	<th>Judul Buku</th>
    <th>Nama Pengarang</th>
</tr>
<?php
/*session_start();
if(empty($_SESSION['idmember'])){
	echo "<script>window.open('index.php','_self')</script>";
}
else{
	echo $_SESSION['idmember'];
}*/


$sql= "SELECT id_member, nama FROM member where nama like '%simpang%' ORDER BY nama ASC";
$hasil = $conn->query($sql);

if($hasil === false) {
	echo $conn->error;
} else {
	while($data = $hasil->fetch_array()){
		echo "<tr>";
		echo "<td>$data[id_member]</td>";
		echo "<td>$data[nama]</td>";
		echo "</tr>";
	}
}
?>
</tbody>
</table>
<a href='logout.php'>Logout</a>
</body>
</html>