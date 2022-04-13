<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 03/04/2022
 * Time: 16:38
 */
?>
<!-- Меню н адесктопе -->
<nav id="user-menu" class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <?php foreach ($menu_item_ as $item):?>
                <li class="nav-item">
                    <a id="<?=$item['id'];?>" class="nav-link" aria-current="page" href="<?=$item['link']?>"><?=$item['name']?></a>
                </li>
                <?php endforeach;?>
            </ul>
            <div class="d-flex">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item mr-3">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user-alt"></i> <span id="user_name_header_menu">Пупкин Васько !</span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="<?=$url?>/lk">мои данные</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="<?=$url;?>/logoff">Выход</a></li>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</nav>
<!-- Меню для телефона -->
    <!-- User-mobile-menu-->
<?php if(isset($_COOKIE['id_user']) AND !empty((int)$_COOKIE['id_user']) AND isset($_COOKIE['session_id']) AND !empty($_COOKIE['session_id'])):?>
    <section class="slide-menu">
        <ul>
            <li class="d-sm-none"><a href="#" data-toggle="tooltip" data-placement="right" title="На Главную"><i class="fa fa-home" aria-hidden="true"></i></a></li>
            <li><a href="#" data-toggle="tooltip" data-placement="right" title="На Верх"><i class="fa fa-arrow-up" aria-hidden="true"></i></a></li>
            <li><a href="<?=$url?>/mydostigenija" data-toggle="tooltip" data-placement="right" title="мои достижения"><i class="fas fa-trophy"></i></a></li>
            <li><a href="<?=$url?>/myhomework" data-toggle="tooltip" data-placement="right" title="мои задания"><i class="fas fa-book"></i></a></li>
            <li><a href="<?=$url?>/messag" data-toggle="tooltip" data-placement="right" title="Мои Сообщения"><i class="fa fa-envelope-open" aria-hidden="true"></i></a></li>
            <li><a href="<?=$url?>/mygroups" data-toggle="tooltip" data-placement="right" title="Мои Группы"><i class="fa fa-graduation-cap" aria-hidden="true"></i></a></li>
            <li><a href="<?=$url?>/lk" data-toggle="tooltip" data-placement="right" title="Мои Данные"><i class="fa fa-id-card" aria-hidden="true"></i></a></li>
            <li><a href="<?=$url?>/logoff" data-toggle="tooltip" data-placement="right" title="Выход"><i class="fas fa-sign-out-alt"></i></a></li>
            <!--li>
                <a href="#" class="d-block d-sm-none"><i class="fa fa-sign-in" aria-hidden="true"></i> Вход</a>
            </li-->
        </ul>
    </section>
<?php else:?>
    <section class="slide-menu">
        <ul>
            <li class="d-sm-none"><a href="#" data-toggle="tooltip" data-placement="right" title="На Главную"><i class="fa fa-home" aria-hidden="true"></i></a></li>
            <li><a href="#" data-toggle="tooltip" data-placement="right" title="На Верх"><i class="fa fa-arrow-up" aria-hidden="true"></i></a></li>
            <li>
                <a href="<?=$url?>/login" class="d-block d-sm-none"><i class="fa fa-sign-in" aria-hidden="true"></i> Вход</a>
            </li>
        </ul>
    </section>
<?php endif;?>