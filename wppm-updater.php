<?php

require __DIR__ . '/plugin-update-checker/plugin-update-checker.php';

use YahnisElsts\PluginUpdateChecker\v5\PucFactory;

function check_for_plugin_updates()
{
    PucFactory::buildUpdateChecker(
        'https://wppm.io/api/bundle/9c65c216-5068-41c3-8f80-311b31b67ce4',
        __DIR__ . '/',
        'demo-plugin'
    );
}

add_action('plugins_loaded', 'check_for_plugin_updates');
