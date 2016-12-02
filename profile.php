<?php include('header.php'); ?>
<?php include('session.php'); ?>
  <body id="home">
  <?php  include('navbar.php');  ?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
				<div class="alert alert-info"><i class="fa fa-info"></i>  <strong>Добро пожаловать в информационную систему СтройСнаб-НС Шымкент </strong></div>
			</div>
			<div class="col-md-1"></div>
		</div>
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-2"><?php include('profile_sidebar.php'); ?></div>
			<div class="col-md-8">
						<div class="jumbotron">
										<ul class="nav nav-tabs">
										<li class="active"><a href="profile.php"><strong>Личная информация </strong></a></li>
										<!--<li><a href="educational_background.php"><strong>Образование</strong></a></li>-->
										<li><a href="eligibility.php"><strong>Работа</strong></a></li>
										<li><a href="employment_status.php"><strong>Должность</strong></a></li>
										</ul>
						<?php include('personal_info_panel.php'); ?>
						<?php include('profile_post.php'); ?>
						</div>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>
	<?php include('footer.php'); ?>
  </body>
</html>