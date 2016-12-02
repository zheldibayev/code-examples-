  <form role="form" method="post" class="login_form">
  <h3><strong>Форма для входа</strong></h3>
  <hr>
  <div class="form-group">
    <label for="exampleInputEmail1">Электронный адрес:</label>
    <input type="email" class="form-control" id="" name="email" placeholder="Электронный адрес" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Пароль:</label>
    <input type="password" class="form-control" id="" name="password" placeholder="Пароль" required>
  </div>
  <button type="submit" class="btn btn-info"><i class="fa fa-check-square-o"></i> Вход</button>
  <div class="pull-right"><a href="#add_member" data-toggle="modal"  type="submit" class="btn btn-info"><i class="fa fa-group"></i> Регистрация</a></div>
</form>
  <?php include('signup_modal.php'); ?>
  <script>
      jQuery(document).ready(function(){
          jQuery(".login_form").submit(function(e){
              e.preventDefault();
              var formData = jQuery(this).serialize();
              $.ajax({
                  type: "POST",
                  url: "login.php",
                  data: formData,
                  success: function(html){
                      if(html=='true')
                      {
                          window.location = 'home.php';

                      }
                        else if(html=='tr'){
                          window.location = 'aza.php';
                      }

                      else{
                          alert('Пожалуйста, проверьте имя пользователя и пароль');
                      }
                  }
              });
              return false;
          });
      });
  </script>

