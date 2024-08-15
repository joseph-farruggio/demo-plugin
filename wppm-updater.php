<?php

require __DIR__ . '/plugin-update-checker/plugin-update-checker.php';

use YahnisElsts\PluginUpdateChecker\v5\PucFactory;

function check_for_plugin_updates()
{
    PucFactory::buildUpdateChecker(
        'https://wppm.io/api/bundle/9cc5d7b5-4ddc-4d99-961b-a258319f29c8',
        __DIR__ . '/demo-plugin.php',
        'demo-plugin'
    );
}

add_action('plugins_loaded', 'check_for_plugin_updates');
