<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 24/04/2022
 * Time: 19:23
 */
?>
<div class="elementor-widget-wrap elementor-element-populated" id="user-menu-artur">
    <?php foreach ($menu_item_uuu as $item_uuu):?>
    <div class="elementor-element elementor-element-artur-icon elementor-view-stacked elementor-widget__width-auto elementor-shape-circle elementor-widget elementor-widget-icon" data-id="603e3a8" data-element_type="widget" data-widget_type="icon.default">
        <div class="elementor-widget-container">
            <div class="elementor-icon-wrapper">
                <a id="<?=$item_uuu['id'];?>" class="elementor-icon" href="<?=$item_uuu['link']?>" title="<?=$item_uuu['title']?>">
                    <?=$item_uuu['icon'];?>
                    <?php if($item_uuu['new'] == true):?>
                        <span class="alert-point"></span>
                    <?php endif;?>
                </a>
            </div>
        </div>
    </div>
    <?php endforeach;?>
</div>
