<?php
/**
 * Plugin Name: Happy Prompt
 * Description: A shortcode to inject happy prompts.
 * Version: 1.0
 * Author: Your Name
 */

function happy_prompt_shortcode($atts) {
    ob_start();
    include(plugin_dir_path(__FILE__) . 'form.php');
    return ob_get_clean();
}

add_shortcode('happy_prompt', 'happy_prompt_shortcode');

?>
