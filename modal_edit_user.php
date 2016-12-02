	<!-- Modal -->
		<div class="modal fade" id="<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Редактировать </h4>
			</div>
			<div class="modal-body">
				 <form role="form" class="login_form" method="post" action="update_user.php">
					<div class="form-group">
						<label for="exampleInputEmail1">Название</label>
						<input name="product_name" value="<?php echo $row['product_name']; ?>" type="text" class="form-control" id="exampleInputEmail1" placeholder="название" required>
                        <input name="id" value="<?php echo $row['id']; ?>" type="hidden" class="form-control" id="exampleInputEmail1" placeholder="Firstname" required>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Номер оплаты</label>
						<input name="number_payment" value="<?php echo $row['number_payment']; ?>" type="text" class="form-control" id="exampleInputPassword1" placeholder="номер платежа" required>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Клиент</label>
						<input name="client" value="<?php echo $row['client']; ?>" type="text" class="form-control" id="exampleInputPassword1" placeholder="Клиент" required>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Дата</label>
						<input name="date" value="<?php echo $row['date']; ?>" type="date" class="form-control" id="exampleInputPassword1" placeholder="Дата" required>
					</div>

                     <div class="form-group">
                         <label for="exampleInputPassword1">Сумма</label>
                         <input name="average" value="<?php echo $row['average']; ?>" type="text" class="form-control" id="exampleInputPassword1" placeholder="Сумма" required>
                     </div>

                     <div class="form-group">
                         <label for="exampleInputPassword1">Кредит</label>
                         <input name="credit" value="<?php echo $row['credit']; ?>" type="checkbox" class="form-control" id="exampleInputPassword1" placeholder="Комментарий" required>
                     </div>

                     <div class="form-group">
                         <label for="exampleInputPassword1">Коммент</label>
                         <input name="comment" value="<?php echo $row['comment']; ?>" type="text" class="form-control" id="exampleInputPassword1" placeholder="Комментарий" required>
                     </div>

				 <button  class="btn btn-success"><i class="fa fa-save"></i> Сохранить</button>
			</form>


			</div>
<div class="modal-footer">
				<button type="button" class="btn btn-info" data-dismiss="modal"><i class="fa fa-times"></i> Закрыть</button>

</div>
</div>
</div>
</div>