<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 03/04/2022
 * Time: 10:57
 */
?>
<!-- Button trigger modal -->
<a href="#openModal" class="btn-artur">
    <span class="elementor-button-text">Личный кабинет</span>
</a>

<!-- Modal -->
<div id="openModal" class="modal premium-modal-box-modal premium-in">
    <div class="modal-dialog premium-modal-box-modal-dialog">
        <div class="modal-content premium-modal-box-modal-dialog">
            <div class="modal-header premium-modal-box-modal-header">
                <h3 class="modal-title">Личный кабинет</h3>
                <a href="#close" title="Close" class="close">×</a>
            </div>
            <div class="modal-body premium-modal-box-modal-body">
                <form id="form-register" class="elementor-form" action="<?=$url?>/login" method="post">
                    <div class="elementor-form-fields-wrapper elementor-labels-above">
                        <div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-name elementor-col-100 text-left">
                            <label for="phoneUser" class="elementor-field-label">Телефон</label>
                            <input name="loginLogi" type="phone" class="elementor-field elementor-size-xs  elementor-field-textual" id="phoneUser" aria-describedby="phoneUser" required>
                        </div>
                        <div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-name elementor-col-100 text-left">
                            <label for="passwordUser" class="elementor-field-label">Пароль</label>
                            <input name="loginPass" type="password" class="elementor-field elementor-size-xs  elementor-field-textual" id="passwordUser" required>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer premium-modal-box-modal-footer">
                <button form="form-register" type="submit" name="loginSub" class="elementor-button elementor-size-xs">
                    <span class="elementor-align-icon-left elementor-button-icon">
									<i aria-hidden="true" class="fas fa-sign-in-alt"></i>&shy;
                    </span>
                    <span class="elementor-button-text">Войти</span>
                </button>
                <a href="<?=$url?>/reg" class="elementor-button-link elementor-button elementor-size-xs">Регистрация</a>
            </div>
        </div>
    </div>
</div>