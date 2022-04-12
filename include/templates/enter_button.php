<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 03/04/2022
 * Time: 10:57
 */
?>
<div class="container premium-modal-box-container" data-settings="{&quot;trigger&quot;:&quot;button&quot;}">
    <!-- Button trigger modal -->
    <div class="premium-modal-trigger-container">
        <button id="btn-enter-user" data-toggle="premium-modal" data-target="#premium-modal-enter" type="button" class="premium-modal-trigger-btn premium-btn-lg">
            <span>Вход</span>
        </button>
    </div>

    <!-- Modal -->
    <div id="premium-modal-enter" class="premium-modal-box-modal" role="dialog" style="display: none;">
        <div class="premium-modal-box-modal-dialog animated fadeInDown animated-fast" data-delay-animation="" data-modal-animation="fadeInDown animated-fast" style="opacity: 1;">
            <div class="premium-modal-box-modal-header">
                <h3 class="premium-modal-box-modal-title">Вход</h3>
                <div class="premium-modal-box-close-button-container">
                    <button type="button" class="premium-modal-box-modal-close" data-dismiss="premium-modal">×</button>
                </div>
            </div>
            <div class="premium-modal-box-modal-body">
                <form id="form-register" action="<?=$url?>/login">
                    <div class="mb-3 text-left">
                        <label for="phoneUser" class="form-label">Телефон</label>
                        <input name="loginLogi" type="phone" class="form-control" id="phoneUser" aria-describedby="phoneUser">
                        <div id="phoneUser" class="form-text text-left">Введите телефон указанный при регистрации</div>
                    </div>
                    <div class="mb-3 text-left">
                        <label for="passwordUser" class="form-label">Пароль</label>
                        <input name="loginPass" type="password" class="form-control" id="passwordUser">
                    </div>
                </form>
            </div>
            <div class="premium-modal-box-modal-footer">
                <button type="button" class="premium-modal-box-modal-lower-close" data-dismiss="premium-modal">Закрыть</button>
                <button form="form-register" type="submit" class="btn btn-success">Войти</button>
                <a href="<?=$url?>/reg" class="btn btn-primary">Регистрация</a>
            </div>
        </div>
    </div>
</div>