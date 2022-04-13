document.addEventListener('DOMContentLoaded', function(){
    /**
     * jQuery(function($) {}); добавлено для избежания конфликта
     */
    jQuery(function($) {
        /**
         *  Переменные переданные
         */
        var id_user    = wpMath123UAObj['id_user'],
            session_id = wpMath123UAObj['session_id'],
            url        = wpMath123UAObj['url'];


        if(id_user  !== false && session_id !== false) {

            /**
             * получаем меню
             * @type {Element | null}
             */
            let user_menu = document.querySelector('#user-menu');

            if (user_menu != null) {
                /**
                 * user_name - отображения имени пользователя
                 * user_mess - пункт меню с сообщениями
                 * user_bill - пункт меню с группами
                 * @type {(Element | null) | (any | null)}
                 */
                let user_name = user_menu.querySelector('#user_name_header_menu'),
                    user_mess = user_menu.querySelector('#message_header_menu'),
                    user_bill = user_menu.querySelector('#my_groups_header_menu');


                /**
                 * Подкачка данных с основного сайта
                 */
                $.ajax({
                    type: 'POST',
                    url: url + '/rest_api/index.php',
                    data: {
                        router: 'auth_id',
                        id_user: id_user,
                        session_id: session_id
                    },
                    success: function (html) {
                        console.log(session_id);
                        console.log(id_user);
                        console.log(html);
                        /**
                         * Object
                         * {
                                "access": true,
                                "parent": {
                                    "fam": "Пупкина",
                                    "name": "Клара",
                                    "surname": "Гедеоновна"
                                },
                                "info": {
                                    "message": "13",
                                    "bills": null,
                                    "progres": 0
                                }
                            }
                         */
                        if (html['access']) {
                            /**
                             * Заполняем ФИО
                             */
                            if (user_name != null) {
                                user_name.textContent = html['parent']['name'] + ' ' + html['parent']['surname'];
                            }

                            /**
                             * Если есть сообщения у пользователя отображаем колличество
                             */
                            if (user_mess != null) {
                                let mess_badje = user_mess.querySelector('.badge');
                                console.log(html['info']['message']);
                                if (mess_badje != null && html['info']['message'] > 0) {
                                    mess_badje.textContent = html['info']['message'];
                                    mess_badje.style.display = 'block';
                                } else {
                                    mess_badje.style.display = 'none';
                                }
                            }

                            /**
                             * Если есть не оплаченные счета
                             */
                            if (user_bill != null) {
                                let bill_badje = user_bill.querySelector('.badge');
                                console.log(html['info']['bills']);
                                if (bill_badje != null && html['info']['bills'] > 0) {
                                    bill_badje.textContent = html['info']['bills'];
                                    bill_badje.style.display = 'block';
                                } else {
                                    bill_badje.style.display = 'none';
                                }
                            }

                        } else {
                            /**
                             * Если авторизация не произошла или устарели куки
                             *
                             * @type {Element | null}
                             */

                            let fio = div_info.querySelector('.header-rigth-singin-fio'),
                                info = div_info.querySelector('.heder-rigth-singin-info'),
                                spiner = div_info.querySelector('.spiner_header'),
                                enter = div_info.querySelector('.header-rigth-login'),
                                user_menu = document.querySelector('.main-menu-user');
                            if (fio != null) {
                                fio.style.display = 'none';
                                info.style.display = 'none';
                                spiner.style.display = 'none';
                                user_menu.classList.remove('active');
                            }
                            if (enter != null) enter.style.display = 'block';
                        }

                    }, error: function (jqXHR, exception) {
                        view_errors(jqXHR, exception);
                    }
                });

            }
        }

        /**
         * Вывод ошибок
         */
        function view_errors(jqXHR, exception) {
            var msg = '';
            if (jqXHR.status === 0) {
                msg = 'Not connect.\n Verify Network.';
            } else if (jqXHR.status == 404) {
                msg = 'Requested page not found. [404]';
            } else if (jqXHR.status == 500) {
                msg = 'Internal Server Error [500].';
            } else if (exception === 'parsererror') {
                msg = 'Requested JSON parse failed.';
            } else if (exception === 'timeout') {
                msg = 'Time out error.';
            } else if (exception === 'abort') {
                msg = 'Ajax request aborted.';
            } else {
                msg = 'Uncaught Error.\n' + jqXHR.responseText;
            }
            console.log(msg);
        }

        /**
         * Спинер
         */
        function spiner_html() {
            return '<div class="spinner-border mt-3" role="status" >' +
                '<span class="visually-hidden">Загрузка...</span>' +
                '</div>';
        }

        document.addEventListener("DOMContentLoaded", function () {
            var scrollbar = document.body.clientWidth - window.innerWidth + 'px';
            console.log(scrollbar);
            document.querySelector('[href="#openModal"]').addEventListener('click', function () {
                document.body.style.overflow = 'hidden';
                document.querySelector('#openModal').style.marginLeft = scrollbar;
            });
            document.querySelector('[href="#close"]').addEventListener('click', function () {
                document.body.style.overflow = 'visible';
                document.querySelector('#openModal').style.marginLeft = '0px';
            });
        });

        /**
         * Открытие пунктов меню
         */
        document.addEventListener("DOMContentLoaded", function () {
            /*1) авешиваем слушателя на меню с инентификатором user-menu*/
            /*1.1) Скрываем все открытые меню*/
            /*2) Отслеживаем нажатие на верхнее меню*/
            /*3) если у верхнего меню есть под меню открываем его*/
            /*3.1) скрываем все другие меню */
            let menu_items = document.querySelectorAll('.menu-item')
        });

    });
});