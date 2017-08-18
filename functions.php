<?php

function sumtel_scripts_styles() {

    $sumtel_theme_uri = get_template_directory_uri();
// Регистрирую стили
    wp_register_style( 'my_bootstrap_min_css', $sumtel_theme_uri . '/css/bootstrap.min.css', array(), '1.0', 'screen');
    wp_register_style( 'my_font_awesome', $sumtel_theme_uri . '/css/font-awesome.min.css');
    wp_register_style( 'my_pe_icon_7_stroke', $sumtel_theme_uri . '/fonts/icon-7-stroke/css/pe-icon-7-stroke.css');
    wp_register_style( 'my_animate', $sumtel_theme_uri . '/css/animate.css');
    wp_register_style( 'my_owl_theme', $sumtel_theme_uri . '/css/owl.theme.css');
    wp_register_style( 'my_owl_carousel', $sumtel_theme_uri . '/css/owl.carousel.css');
	wp_register_style( 'kladr_form_css', $sumtel_theme_uri . '/css/kladr/form.css', array(), '1.0', 'screen');
	wp_register_style( 'jq_kladr_css', $sumtel_theme_uri . '/css/kladr/jquery.kladr.min.css', array(), '1.0', 'screen');
    wp_register_style( 'my_style', $sumtel_theme_uri . '/css/css-index.css', array(), '1.0', 'screen');
    wp_register_style( 'my_sumtel', $sumtel_theme_uri . '/css/sumtel-spb.css', array(), '1.0', 'screen');
    wp_register_style( 'my_googlefont', 'http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic');


// Регистрирую скрипты в footer
	wp_register_script( 'my_jquery' , $sumtel_theme_uri . '/js/jquery-1.11.1.min.js' , array() , '1.4' , true );
	wp_register_script( 'my_countdown' , $sumtel_theme_uri . '/js/libs/jquery.countdown.js' , array() , '1.1' , true );
	wp_register_script( 'my_maskedinput' , $sumtel_theme_uri . '/js/libs/jquery.maskedinput-1.3.1.js' , array() , '1.1' , true );
//	wp_register_script( 'my_popups' , $sumtel_theme_uri . '/js/libs/popups.js' , array() , '1.1' , true );
    wp_register_script( 'my_bootstrap_min' , $sumtel_theme_uri . '/js/bootstrap.min.js' , array() , '1.1' , true );
    wp_register_script( 'my_custom' , $sumtel_theme_uri . '/js/custom.js' , array() , '1.1' , true );
    wp_register_script( 'my_jquery_sticky' , $sumtel_theme_uri . '/js/jquery.sticky.js' , array() , '1.1' , true );
    wp_register_script( 'my_wow_min' , $sumtel_theme_uri . '/js/wow.min.js' , array() , '1.1' , true );
    wp_register_script( 'my_owl_carousel_min' , $sumtel_theme_uri . '/js/owl.carousel.min.js' , array() , '1.1' , true );
//	wp_register_script( 'old_prolanding_func' , $sumtel_theme_uri . '/js/func.js' , array() , '1.1' , true );
	wp_register_script( 'kladr_jq' , $sumtel_theme_uri . '/js/libs/jquery.kladr.min.js' , array() , '1.1' , true );
	wp_register_script( 'kladr_form_jq' , $sumtel_theme_uri . '/js/kladr-form.js' , array() , '1.1' , true );
	wp_register_script( 'my_sumtel' , $sumtel_theme_uri . '/js/sumtel.spb.js' , array() , '1.2' , true );
	wp_register_script( 'wow_init_script' , $sumtel_theme_uri . '/js/wow.init.js' , array() , '1.4' , true );

// Подключаю стили
      wp_enqueue_style( 'my_bootstrap_min_css');
      wp_enqueue_style( 'my_font_awesome');
      wp_enqueue_style( 'my_pe_icon_7_stroke');
      wp_enqueue_style( 'my_animate');
      wp_enqueue_style( 'my_owl_theme');
      wp_enqueue_style( 'my_owl_carousel');
	  wp_enqueue_style( 'kladr_form_css');
	  wp_enqueue_style( 'jq_kladr_css');
      wp_enqueue_style( 'my_style');
      wp_enqueue_style( 'my_sumtel');
      wp_enqueue_style( 'my_googlefont');

//Подключаю скрипты
	wp_enqueue_script( 'my_jquery');
	wp_enqueue_script( 'my_countdown');
	wp_enqueue_script( 'my_maskedinput');
//	wp_enqueue_script( 'my_popups');
	wp_enqueue_script( 'my_bootstrap_min');
	wp_enqueue_script( 'my_custom');
	wp_enqueue_script( 'my_jquery_sticky');
	wp_enqueue_script( 'my_wow_min');
	wp_enqueue_script( 'my_owl_carousel_min');
//	wp_enqueue_script( 'old_prolanding_func');
	wp_enqueue_script( 'kladr_jq');
	wp_enqueue_script( 'kladr_form_jq');
	wp_enqueue_script( 'my_sumtel');
	wp_enqueue_script( 'wow_init_script');

}


// Создаем экшн в котором подключаем скрипты подключенные внутри функции sumtel_scripts_styles
add_action( 'wp_enqueue_scripts', 'sumtel_scripts_styles');



function ajax_form(){
    $street = $_REQUEST['street'];
    $building = $_REQUEST['building'];
	$family = $_REQUEST['family'];
	$phone = $_REQUEST['phone'];
    $response = '';
    $thm  = 'Заявка с Лендинга';
    $thm  = "=?utf-8?b?". base64_encode($thm) ."?=";
    $msg = "Улица: ".$street."<br/>
			Дом: ".$building."<br/>
			ФИО: ".$family."<br/>
			Телефон: ".$phone ."<br/>";
    $mail_to = 'superats@yandex.ru';
    $headers = "Content-Type: text/html; charset=utf-8\n";
    $headers .= 'From: Sumtel' . "\r\n";

// Отправляем почтовое сообщение

    if(mail($mail_to, $thm, $msg, $headers)){
        $response = 'Сообщение отправлено';
    }else
        $response = 'Ошибка при отправке';

// Сообщение о результате отправки почты

    if ( defined( 'DOING_AJAX' ) && DOING_AJAX ){
        echo $response;
        wp_die();
    }
}

add_action('wp_ajax_nopriv_ajax_order', 'ajax_form' );
add_action('wp_ajax_ajax_order', 'ajax_form' );

?>
