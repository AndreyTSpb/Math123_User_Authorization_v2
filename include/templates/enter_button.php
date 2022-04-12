<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 03/04/2022
 * Time: 10:57
 */
?>
<!-- Button trigger modal -->
<a href="#openModal" class="btn">
    <span>Вход</span>
</a>

<!-- Modal -->
<div id="openModal" class="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Вход</h3>
                <a href="#close" title="Close" class="close">×</a>
            </div>
            <div class="modal-body">
                <form id="form-register" action="<?=$url?>login">
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
            <div class="modal-footer">
                <button type="button" class="premium-modal-box-modal-lower-close" data-dismiss="premium-modal">Закрыть</button>
                <button form="form-register" type="submit" class="btn btn-success">Войти</button>
                <a href="<?=$url?>/reg" class="btn btn-primary">Регистрация</a>
            </div>
        </div>
    </div>
</div>