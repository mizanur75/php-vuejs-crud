<div class="modal" v-if="addModal">
	<div class="modal-container">
		<div class="modal-head">
			<div class="fleft">Add New</div>
			<button class="fright btn btn-danger" @click="addModal=false">x</button>
			<div class="clear"></div>
		</div>
		<div class="modal-body">
				<table class="form">
					<tr>
						<th>Name</th>
						<th>:</th>
						<td><input type="text" name="name" v-model="newUser.name"></td>
					</tr>
					<tr>
						<th>Phone</th>
						<th>:</th>
						<td><input type="text" name="phone" v-model="newUser.phone"></td>
					</tr>
					<tr>
						<th>Email</th>
						<th>:</th>
						<td><input type="text" name="emai" v-model="newUser.email"></td>
					</tr>
					<tr>
						<th></th>
						<th></th>
						<td class="right"><button class="btn btn-success" @click="addModal=false; addUser();">Save</button></td>
					</tr>
				</table>
		</div>
	</div>
</div>