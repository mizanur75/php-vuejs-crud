var app = new Vue({
	el: "#app",
	data: {
		addModal: false,
		editModal: false,
		deleteModal: false,
		success: "",
		error: "",
		users: [],
		newUser: {name:'',phone:'',email:''},
		clickedUser: {}
	},
	mounted: function(){
		this.getAllUsers();
	},
	methods:{
		getAllUsers: function(){
			axios.get("http://localhost/php_vue_crud/functions.php?action=read").then(function(response){
				if (response.data.error) {
					app.error = response.data.message;
				}else{
					app.users = response.data.users;
				}
			});
		},
		addUser: function(){
			var formData = app.toFormData(app.newUser);
			axios.post("http://localhost/php_vue_crud/functions.php?action=create",formData).then(function(response){
				app.newUser = {name:'',phone:'',email:''};
				if (response.data.error) {
					app.error = response.data.message;
				}else{
					app.success = response.data.message;
					app.getAllUsers();
				}
			});
		},
		updateUser: function(){
			var formData = app.toFormData(app.clickedUser);
			axios.post("http://localhost/php_vue_crud/functions.php?action=update",formData).then(function(response){
				app.clickedUser = {};
				if (response.data.error) {
					app.error = response.data.message;
				}else{
					app.success = response.data.message;
					app.getAllUsers();
				}
			});
		},
		deleteUser: function(){
			var formData = app.toFormData(app.clickedUser);
			axios.post("http://localhost/php_vue_crud/functions.php?action=delete",formData).then(function(response){
				app.clickedUser = {};
				if (response.data.error) {
					app.error = response.data.message;
				}else{
					app.success = response.data.message;
					app.getAllUsers();
				}
			});
		},
		toFormData: function(obj){
			var form_data = new FormData();
			for(var key in obj){
				form_data.append(key, obj[key]);
			}
			return form_data;
		},
		select: function(user){
			app.clickedUser = user;
		}
	}
});