
<?php include('header.php'); ?>
<?php include('session.php'); ?>
<body id="home">
<?php  include('navbar.php');  ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="alert alert-info"><i class="fa fa-info"></i> Добро пожаловать в информационную систему СтройСнаб-НС Шымкент</div>
        </div>
        <div class="col-md-1"></div>
    </div>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-2"><?php include('sidebar.php'); ?></div>
        <div class="col-md-8">
            <div class="jumbotron">


                <div class="alert alert-success"><i class="fa fa-group"></i> Панель менеджера компании СтройСнаб Шымкент</div>

                <a class="btn btn-danger" style="cursor: pointer; " href="home.php " > <i class="glyphicon glyphicon-home"></i> Назад </a>

                <div><i class="glyphicon glyphicon-asterisk"></i> <strong>Вся информация о клиенте</strong>


                <ul> <li>
                    <?php

                    $id = $_GET['id'];

                    $query = $conn->query("select * from sales WHERE id=$id") or die(mysql_error());


                    while ($row = $query->fetch()) {



                        ?>

                        <ul style="padding-left: position: relative;">
                            <li > Название продукта: <label><?php echo $row['product_name'];?></label> </li>
                            <li> Счет оплаты: <label><?php echo $row['number_payment'];?></label></li>
                            <li> Клиент: <label><?php echo $row['client'];?></label></li>
                            <li> Дата: <label><?php echo $row['date'];?></label></li>
                            <li> Сумма: <label><?php echo $row['average'];?></label></li>
                            <li> Примечание: <label><?php echo $row['comment'];?></label></li>

                            <li> Доп.инфо: <label><?php echo $row['dop_info'];?></label></li>

                        </ul>



                        <?php }   ?> </li>
                </ul>

            </div>
        </div>
    </div>

    <?php include('footer.php'); ?>
</body>
</html>

