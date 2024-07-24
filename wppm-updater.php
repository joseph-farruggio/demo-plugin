<?php

require __DIR__ . '/plugin-update-checker/plugin-update-checker.php';

use YahnisElsts\PluginUpdateChecker\v5\PucFactory;

function check_for_plugin_updates()
{
    PucFactory::buildUpdateChecker(
        'https://wppm.io/api/bundle/9c97b6ed-0869-4a68-ba42-9451f17a3227',
        __DIR__ . '/demo-plugin.php',
        'demo-plugin'
    );
}

add_action('plugins_loaded', 'check_for_plugin_updates');
