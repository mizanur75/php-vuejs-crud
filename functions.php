<?php
	$db = new mysqli("localhost","root","","vue");
	if ($db->connect_error) {
		die("Could not connect to database");
	}

	$res = array('error'=>false);

	$action = 'read';

	if (isset($_GET['action'])) {
		$action = $_GET['action'];
	}

	if ($action == 'read') {
		$result = $db->query("select * from crud");
		$users = array();
		while ($row = $result->fetch_assoc()) {
			array_push($users, $row);
		}

		$res['users'] = $users;
	}
	if ($action == "create") {
		$name = $_POST["name"];
		$phone = $_POST["phone"];
		$email = $_POST["email"];

		$result = $db->query("insert into `crud`(`name`,`phone`,`email`)values('$name','$phone','$email')");
		if ($result) {
			$res['message'] = 'Successfully Added!';
		}else{
			$res['error'] = true;
			$res['message'] = 'Data can not inserted!';
		}
	}
	if ($action == 'update') {
		$id = $_POST['id'];
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];

		$result = $db->query("update crud set `name`='$name',`phone`='$phone',`email`='$email' where `id` = '$id'");
		if ($result) {
			$res['message'] = 'Successfully Updated!';
		}else{
			$res['error'] = true;
			$res['message'] = 'Data can not Updated!';
		}
	}
	if ($action == 'delete') {
		$id = $_POST['id'];
		$result = $db->query("delete from `crud` where `id` = '$id'");

		if ($result) {
			$res['message'] = 'Successfully Deleted!';
		}else{
			$res['error'] = true;
			$res['message'] = 'Data can not Deleted!';
		}
	}

	$db->close();

	header('Content-type: application/json');

	echo json_encode($res);
	die();
?>