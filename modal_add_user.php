	<!-- Modal -->
		<div class="modal fade" id="add_user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Добавить информаци</h4>
			</div>
			<div class="modal-body">
				 <form role="form" class="login_form" method="post" action="save_user.php">
					<div class="form-group">
						<label for="exampleInputEmail1">Название продукта</label>
						<input name="product_name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Firstname" required>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Номер оплаты</label>
						<input name="number_payment" type="text" class="form-control" id="exampleInputPassword1" placeholder="Lastname" required>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Клиент</label>
						<input name="client" type="text" class="form-control" id="exampleInputPassword1" placeholder="Username" required>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Дата</label>
						<input name="date" type="date" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
					</div>
                     <div class="form-group">
                         <label for="exampleInputPassword1">Сумма</label>
                         <input name="average" type="text" class="form-control" id="exampleInputPassword1" placeholder="Username" required>
                     </div>

                     <div class="form-group">
                         <label for="exampleInputPassword1" >Кредит</label>
                         <input name="credit"  type="checkbox" class="form-control" id="exampleInputPassword1" >
                     </div>

                     <div class="form-group">
                         <label for="exampleInputPassword1">Примечание</label>
                         <input name="comment" type="text" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                     </div>
				 <button  class="btn btn-success"><i class="fa fa-save"></i> Сохранить</button>
			</form>


			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Закрыть</button>
				
			</div>
			</div>
			
		</div>
		</div>