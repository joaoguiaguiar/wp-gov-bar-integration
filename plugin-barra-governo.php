<?php
/*
Plugin Name: Institutional Gov Bar
Plugin URI: https://github.com/joaoguiaguiar/plugin-gov-oficial
Description: Integração automática da Barra de Identidade Visual do Governo Federal.
Version: 1.0.0
Author: João Aguiar
Author URI: https://github.com/joaoguiaguiar
Text Domain: inst-barra-governo
License: GPL v2 or later
*/

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Insere o container e o script da barra oficial
 */
function inst_adicionar_barra_governo() {
    echo '<div id="barra-brasil"></div>';
    echo '<script defer src="https://barra.brasil.gov.br/barra_2.0.js"></script>';
}
add_action('wp_body_open', 'inst_adicionar_barra_governo');

/**
 * Garante o posicionamento correto via CSS
 */
function inst_estilo_barra_governo() {
    echo '<style id="inst-gov-bar-css">
        #barra-brasil {
            position: relative;
            z-index: 1000;
            display: block;
        }
        body {
            overflow-x: hidden;
        }
    </style>';
}
add_action('wp_head', 'inst_estilo_barra_governo');