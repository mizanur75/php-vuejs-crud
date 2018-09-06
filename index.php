<?php
	//include('functions.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Crud With Vue</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	
	<div id="app">
		<div class="container">
			<h1 class="fleft">List of Users</h1>
			<button class="fright btn" @click="addModal=true"><h3>Add New</h3></button>
			<div class="clear"></div>
			<br>
			<hr>
			<p class="success" v-if="success" @click="success=false">{{success}}</p>
			<p class="error" v-if="error" @click="error=false">{{error}}</p>
			<div class="scroll">
				<table class="list">
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Phone</th>
						<th>Email</th>
						<th class="center">Action</th>
					</tr>
					<tr v-for="user in users">
						<td>{{user.id}}</td>
						<td>{{user.name}}</td>
						<td>{{user.phone}}</td>
						<td>{{user.email}}</td>
						<td class="center">
							<button class="btn btn-info" @click="editModal=true; select(user);">Edit</button>
							<button class="btn btn-danger" @click="deleteModal=true; select(user);">Delete</button>
						</td>
					</tr>
				</table>
			</div>
		</div>
		<?php include('modal/addmodal.php')?>
		<?php include('modal/editmodal.php')?>
		<?php include('modal/deletemodal.php')?>
	</div>
	<script src="js/axios.min.js"></script>
	<script src="js/vue.min.js"></script>
	<script src="js/functions.js"></script>
</body>
</html>