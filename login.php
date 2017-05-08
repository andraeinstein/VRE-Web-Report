<?php
include ('config.php');

session_start();
$idmember = $_POST['idmember'];
$pin = $_POST['pin'];	

$query = "select id_member, nama from member where id_member=?  and pin=?";
$stmt=$conn->prepare($query);
$stmt->bind_param("ss",$idmember,$pin);
$stmt->execute();
$stmt->store_result();
if($stmt->num_rows>0){
		$_SESSION['idmember']=$idmember;
		echo "ok";
	}
	else{
		echo 'false';
	}



// $query = "select id_member, nama from member where id_member='" . $idmember . "' and pin='" . $pin . "'";
// $run_query = mysqli_query($conn,$query);
// $cekuser = mysqli_num_rows($run_query);
// if($cekuser>0){
// 		$_SESSION['idmember']=$idmember;
// 		echo "ok";
// 	}
// 	else{
// 		echo 'false';
// 	}
?>