<?php

/*
 * Include Wodby settings if required.
 */
isset($_SERVER['WODBY_ENVIRONMENT_TYPE'], $_SERVER['CONF_DIR']) && include_once $_SERVER['CONF_DIR'] . '/wodby.settings.php';

// Set the Config Sync directory to be outside the drupal root
$settings['config_sync_directory'] = realpath(DRUPAL_ROOT . '/../config/sync/');

/*
 * Include settings based in the environment.
 */
$ENV_TYPE = isset($_SERVER['WODBY_ENVIRONMENT_TYPE']) ? $_SERVER['WODBY_ENVIRONMENT_TYPE'] : 'local';
$filename = __DIR__ . "/settings.ramsalt.{$ENV_TYPE}.php";
file_exists($filename) && include $filename;
