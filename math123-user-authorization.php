<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 11/05/2021
 * Time: 14:21
 */
/**
 * Plugin Name: Math123 User Authorization
 * Description: Плагин для проврки авторизации пользоваделя на пользовательской части сайта (user.math123,ru). Если пользователь авторизован то подтягиваются его личные данные и отображается меню (меню фиксируется по верхнему краю). [math123-user-auth-v2 url='http://user.math123.local/' menu='1'], шорт код принимает параметр url - адрес базового сайта (без параметров, параметры указаны уже в AJAX запросе), где проходит авторизация. Параметр menu=1 активирует меню пользователя для неавторизованного пользователя
 * Plugin URI: https://
 * Author: Andrey Tynyany
 * Version: 2.0.1
 * Author URI: http://tynyany.ru
 *
 * Text Domain: Math123 User Authorization V2
 *
 * @package Math123 User Authorization V2
 */

defined('ABSPATH') or die('No script kiddies please!');

define( 'WPM123UAV2_VERSION', '2.0.1' );

define( 'WPM123UAV2_REQUIRED_WP_VERSION', '5.5' );

define( 'WPM123UAV2_PLUGIN', __FILE__ );

define( 'WPM123UAV2_PLUGIN_BASENAME', plugin_basename( WPM123UAV2_PLUGIN ) );

define( 'WPM123UAV2_PLUGIN_NAME', trim( dirname( WPM123UAV2_PLUGIN_BASENAME ), '/' ) );

define( 'WPM123UAV2_PLUGIN_DIR', untrailingslashit( dirname( WPM123UAV2_PLUGIN ) ) );

define( 'WPM123UAV2_PLUGIN_URL',
    untrailingslashit( plugins_url( '', WPM123UAV2_PLUGIN ) )
);

$wp_math123_ua_v2_array = array();

add_shortcode('math123-user-auth-v2','wp_math123_ua_v2_start');

function wp_math123_ua_v2_start($atts){
    global $wp_math123_ua_v2_array;
    $wp_math123_ua_v2_array['url'] = $atts['url'];
    /**
     * Если передан флаг меню = 1 то откроем меню
     */
    if(isset($atts['menu']) AND $atts['menu'] == 1){
        $view_menu = true;
    }else{
        $view_menu = false;
    }
    /**
     * Подключили скрипт для обработки
     */
    add_action('wp_footer', 'wp_math123_ua_v2_script');

    if((isset($_COOKIE['id_user']) AND !empty((int)$_COOKIE['id_user']) AND isset($_COOKIE['session_id']) AND !empty($_COOKIE['session_id'])) OR $view_menu){
        echo wp_math123_ua_v2_login_html($atts['url']);
    }else{
        echo wp_math123_ua_no_v2_login_html($atts['url']);
    }
    //echo wp_math123_ua_v2_login_html($atts['url']);
}

/**
 * Если пользователь не авторизован выводим кнопку для входа,
 * и скрытую модалку в которой форма авторизации
 * $url - урл сайта, где проверка авторизации происходит
 */
function wp_math123_ua_no_v2_login_html($url){
    ob_start();
    include WPM123UAV2_PLUGIN_DIR."/include/templates/enter_button.php";
    $html = ob_get_contents();
    ob_end_clean();
    return $html;
}

/**
 * То что указываем в шапке если залогинен на базовом сайте
 */
function wp_math123_ua_v2_login_html($url){
    $new_mess = '<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">'.
                    '2'.
                    '<span class="visually-hidden">непрочитанные сообщения</span>'.
                 '</span>';
    $new_bill = '<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">'.
                    '1'.
                    '<span class="visually-hidden">непрочитанные сообщения</span>'.
                '</span>';
    $menu_item = array(
        array(
            'id'   => 'progress_header_menu',
            'link' => $url.'/mydostigenija',
            'name' => 'мои достижения'
        ),
        array(
            'id'   => 'homework_header_menu',
            'link' => $url.'/myhomework',
            'name' => 'мои задания'
        ),
        array(
            'id'   => 'message_header_menu',
            'link' => $url.'/messag',
            'name' => 'мои сообщения'.$new_mess
        ),
        array(
            'id'   => 'my_groups_header_menu',
            'link' => $url.'/mygroups',
            'name' => 'мои группы/оплаты'.$new_bill
        )
    );
    ob_start();
    include WPM123UAV2_PLUGIN_DIR."/include/templates/user_menu.php";
    $html = ob_get_contents();
    ob_end_clean();
    return $html;
}

/**
 * Подключение скриптов и стилей
 */
function wp_math123_ua_v2_script(){
    global $wp_math123_ua_v2_array;
    $js_data['url']     = $wp_math123_ua_v2_array['url'];
    $js_data['id_user'] = (isset($_COOKIE['id_user']))?(int)$_COOKIE['id_user']:false;
    $js_data['session_id'] = (isset($_COOKIE['session_id']))?$_COOKIE['session_id']:false;

    //$js_data['id_user'] = 3990;
    //$js_data['session_id'] = 'NbMAo181__1649404943';

    wp_register_style( 'math123_ua_v2_css', plugins_url( 'assets/style.css', __FILE__ ));

    wp_enqueue_style( 'math123_ua_v2_css');

    /**
     * регистрация скриптов
     */
    wp_register_script('math123_ua_v2_script', plugins_url( 'assets/script.js', __FILE__ ));

    /**
     * подключение скриптов
     */
    //wp_enqueue_script('yandexMapScript');
    wp_enqueue_script('math123_ua_v2_script');

    /**
     * Параматры для скрипта
     */
    wp_localize_script( 'math123_ua_v2_script', 'wpMath123UAObj', $js_data );
}