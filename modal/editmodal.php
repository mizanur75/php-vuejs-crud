<div class="modal" v-if="editModal">
	<div class="modal-container">
		<div class="modal-head">
			<div class="fleft">Edit</div>
			<button class="fright btn btn-danger" @click="editModal=false">x</button>
			<div class="clear"></div>
		</div>
		<div class="modal-body">
			<table class="form">
				<tr>
					<th>Name</th>
					<th>:</th>
					<td><input type="text" name="" v-model="clickedUser.name"></td>
				</tr>
				<tr>
					<th>Phone</th>
					<th>:</th>
					<td><input type="text" name="" v-model="clickedUser.phone"></td>
				</tr>
				<tr>
					<th>Email</th>
					<th>:</th>
					<td><input type="text" name="" v-model="clickedUser.email"></td>
				</tr>
				<tr>
					<th></th>
					<th></th>
					<td class="right"><button class="btn btn-info" @click="editModal=false; updateUser()">Update</button></td>
				</tr>
			</table>
		</div>
	</div>
</div>