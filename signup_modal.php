<!-- Modal -->
		<div class="modal fade" id="add_member" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Создайте аккаунт</h4>
			</div>
			<div class="modal-body">
				 <form role="form" id="sign_up" class="login_form" method="post">
					<div class="form-group">
						<label for="exampleInputEmail1">Имя</label>
						<input name="firstname" type="text" class="form-control" id="exampleInputEmail1" placeholder="Имя" required>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Фамилия</label>
						<input name="lastname" type="text" class="form-control" id="exampleInputPassword1" placeholder="Фамилия" required>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Отчество</label>
						<input name="middlename" type="text" class="form-control" id="exampleInputPassword1" placeholder="Отчество" required>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Должность:</label>
						<select name="gender" class="form-control">
							<option></option>
							<option>manager</option>
							<option>director</option>
						</select>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Электронный адрес</label>
						<input name="email" type="email" class="form-control" id="exampleInputPassword1" placeholder="логин" required>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Пароль</label>
						<input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Пароль" required>
					</div>
				 <button  class="btn btn-success"><i class="fa fa-save"></i> Создать аккаунт</button>
			</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Закрыть</button>
				
			</div>
			</div>
			
		</div>
		</div>
		  								<script>
												jQuery(document).ready(function(){
												jQuery("#sign_up").submit(function(e){
														e.preventDefault();
														var formData = jQuery(this).serialize();
														$.ajax({
															type: "POST",
															url: "signup_save.php",
															data: formData,
															success: function(html){
															alert('Успешно зарегистрировались, пожалуйста войдите в систему');
															window.location = 'index.php';
															}
														});
														return false;
														});
										});
										</script>