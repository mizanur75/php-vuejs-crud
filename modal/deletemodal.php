<div class="modal" v-if="deleteModal">
	<div class="modal-container">
		<div class="modal-head">
			<div class="fleft">Are you sure?</div>
			<button class="fright btn btn-danger" @click="deleteModal=false">x</button>
			<div class="clear"></div>
		</div>
		<div class="modal-body">
			You are going to delete<h1> {{clickedUser.name}}</h1>

			<div style="margin-top: 50px;">
				<button class="fleft btn btn-danger" @click="deleteModal=false; deleteUser()">Yes</button>
				<button class="fright btn btn-success" @click="deleteModal=false;">No</button>
				<div class="clear"></div>
			</div>
		</div>
		
	</div>
</div>