<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 13/04/2022
 * Time: 15:38
 */
?>
<nav id="user-menu" migration_allowed="1" migrated="0" role="navigation" class="elementor-nav-menu--main elementor-nav-menu__container elementor-nav-menu--layout-horizontal e--pointer-underline e--animation-fade">
    <ul class="elementor-nav-menu" data-smartmenus-id="16498522835521367">
        <?php foreach ($menu_item_uuu as $item_uuu):?>
            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2120">
                <a id="<?=$item_uuu['id'];?>" href="<?=$item_uuu['link']?>" class="elementor-item" target="_blank"><?=$item_uuu['name']?></a>
            </li>
        <?php endforeach;?>
        <li class="menu-item-fio menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-4173">
            <a href="#" class="elementor-item has-submenu" id="sm-16498522835521367-1" aria-haspopup="true" aria-controls="sm-16498522835521367-2" aria-expanded="false">
                <i aria-hidden="true" class="fas fa-user"></i> <span id="user_name_header_menu">Пупкин Васько !</span><span class="sub-arrow"><i class="fas fa-caret-down"></i></span>
            </a>
            <ul class="sub-menu elementor-nav-menu--dropdown" id="sm-16498522835521367-2" role="group" aria-hidden="true" aria-labelledby="sm-16498522835521367-1" aria-expanded="false">
                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4437"><a href="<?=$url?>/lk" class="elementor-sub-item">мои данные</a></li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4431"><a href="<?=$url;?>/logoff" class="elementor-sub-item">Выход</a>
                </li>
            </ul>
        </li>
    </ul>
</nav>
