<?php

/*
Plugin Name: Chroma Keyer
Plugin URI: http://www.teleclinic.com
Description: Insert a video and remove its background by spezifying an RBG code as a filter.
Version: 1.01
Author: Junus Ergin
*/

require_once(dirname(__FILE__) . '/php/renderVideo.php');


function removeBackground($atts)
{
    wp_enqueue_style('teleclinic-files', plugin_dir_url(__FILE__) . 'css/style.css');
    wp_enqueue_script('teleclinic-files', plugin_dir_url(__FILE__) . 'js/removeBackground.js');

    $pull_quote_atts = shortcode_atts(array(
        'src' => '',
        'placeholder' => '',
        'max-r' => '0',
        'min-r' => '0',
        'max-g' => '0',
        'min-g' => '0',
        'max-b' => '0',
        'min-b' => '0',
        'height' => '720',
        'width' => '960',
        'preload' => 'none'
    ), $atts);


    ob_start();
    $instanceId = rand();
    $videoId = "chroma-video-" . $instanceId;
    render($pull_quote_atts['src'],
        $pull_quote_atts['placeholder'],
        $pull_quote_atts['height'],
        $pull_quote_atts['width'],
        $pull_quote_atts['min-r'],
        $pull_quote_atts['min-g'],
        $pull_quote_atts['min-b'],
        $pull_quote_atts['max-r'],
        $pull_quote_atts['max-g'],
        $pull_quote_atts['max-b'],
        $videoId,
        $instanceId,
        $pull_quote_atts['preload']
    );
    return ob_get_clean();
}


add_shortcode("chroma-keyer", "removeBackground");

?>