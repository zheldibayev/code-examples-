<nav class="navbar navbar-default " role="navigation">
    <div class="container-fluid">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Переключить навигацию</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="#"><i class="fa fa-user"></i> <?php

                echo $name; if($name == 'Azamat Maratovich Zheldibayev') {
                    echo " Директор компани СтройСнаб Шымкент";
                }else {
                    echo " Менеджер компании СтройСнаб Шымкент";
                } ?></a>

        </div>


        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <form class="navbar-form navbar-right" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" Placeholder="поиск"  required>
                </div>
                <button type="submit" class="btn btn-info"><i class="fa fa-search"></i> поиск</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cog"></i> Аккаунт <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#change_profile_picture_modal" data-toggle="modal"><i class="fa fa-pencil"></i> Изменить фото</a></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out"></i> Выйти</a></li>

                    </ul>
                </li>
            </ul>
            <?php include('change_profile_picture_modal_dir.php'); ?>
        </div>
    </div>
</nav>