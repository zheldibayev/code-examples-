<!-- Modal -->
		<div class="modal fade" id="eligibility_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Обновить личную информацию</h4>
			</div>
			<div class="modal-body">
				 <form  id="es" class="login_form" method="post" action="eligibility_Save.php">
				 		<div class="row">
							<div class="col-xs-12"><label> Дата работы </label></div>
						</div>
						<div class="row">
							<div class="col-xs-6"><label> От </label></div>
							<div class="col-xs-6"><label> До </label></div>
						</div>

						<div class="row">
							<div class="col-xs-6">
								<input value="<?php echo $row['esf1']; ?>" name="esf1"  type="text" class="form-control" >
							</div>
							<div class="col-xs-6">
								<input value="<?php echo $row['esf2']; ?>" name="esf2"  type="text" class="form-control" >
							</div>
						</div>
						<div class="row">
							<div class="col-xs-6"><label>Должность</label></div>
							<div class="col-xs-6"><label>Отдел/Агентство/Офис/Компания</label></div>
						</div>
						<div class="row">
							<div class="col-xs-6">
									<input name="esf3" value="<?php echo $row['esf4']; ?>" type="text" class="form-control" >
							</div>
							<div class="col-xs-6">
									<input name="esf4" value="<?php echo $row['esf4']; ?>" type="text" class="form-control" >
							</div>
						</div>
						<div class="row">
							<div class="col-xs-6"><label>Адрес</label></div>
							<div class="col-xs-6"><label>Месячная зарплата</label></div>
						</div>
						<div class="row">
							<div class="col-xs-6">
									<input name="esf5" value="<?php echo $row['esf5']; ?>" type="text" class="form-control" >
							</div>
							<div class="col-xs-6">
									<input name="esf6" value="<?php echo $row['esf6']; ?>" type="text" class="form-control" >
							</div>
						</div>
						<div class="row">

							<div class="col-xs-4"><label>Гос.учреждение</label></div>
						</div>
						<div class="row">


							<div class="col-xs-4">
									<select name="esf9" class="form-control" >
										<option><?php echo $row['esf9']; ?></option>
										<option>да</option>
										<option>нет</option>
									</select>
							</div>
						</div>
						
					<div class="row">
					<div class="col-xs-12">
					<br>
						<button type="submit" name="save_eligibility"  class="btn btn-success"><i class="fa fa-save"></i> Обновить информацию</button>
					</div>				 
					</div>				 
			</form>
			</div>
			<div class="modal-footer">
				<button type="submit"  class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Закрыть</button>
				
			</div>
			</div>
			
		</div>
		</div>
	
		  								<script>
	 											jQuery(document).ready(function(){
												jQuery("#es").submit(function(e){
														e.preventDefault();
														var formData = jQuery(this).serialize();
														$.ajax({
															type: "POST",
															url: "es_save.php",
															data: formData,
															success: function(html){
															alert('Занятость Успешно Обновлено');
															window.location = '	employment_status.php';
															}
														});
														return false;
														});
										}); 
										</script>