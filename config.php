<?php

$pluginName = 'LenonLeiteM5ExamplePlugin';
$bundleName = $pluginName . 'Bundle';
$pluginConfigName = 'Example of plugin to Mautic 5';
$pluginIntegrationDisplayName = $pluginConfigName;
$pluginConfigDescription = 'This plugin is simple example of plugin to Mautic 5';
$pluginConfigVersion = '1.0.0';
$pluginConfigAuthor = 'Lenon Leite';
$pluginComposerName = 'lenonleite/lenonleite-m5-example-plugin';
$pluginComposerDescription = $pluginConfigDescription;
$pluginComposerAuthorsEmail = 'lenonleite@gmail.com';
$pluginComposerLicense = 'GPL-3.0';
$pluginComposerAuthorsName = $pluginConfigAuthor;

return [
    'PLUGIN_NAME' => $pluginName,
    'PLUGIN_BUNDLE_NAME' => $bundleName,
    'PLUGIN_NAME_LOWCASE' => strtolower($pluginName),
    'PLUGIN_INTEGRATION_DISPLAY_NAME' => $pluginIntegrationDisplayName,
    'PLUGIN_CONFIG_NAME' => $pluginConfigAuthor,
    'PLUGIN_CONFIG_DESCRIPTION' => $pluginConfigDescription,
    'PLUGIN_CONFIG_VERSION' => $pluginConfigVersion,
    'PLUGIN_CONFIG_AUTHOR' => $pluginConfigAuthor,
    'PLUGIN_COMPOSER_NAME' => $pluginComposerName,
    'PLUGIN_COMPOSER_DESCRIPTION' => $pluginComposerDescription,
    'PLUGIN_COMPOSER_AUTHORS_EMAIL' => $pluginComposerAuthorsEmail,
    'PLUGIN_COMPOSER_LICENSE' => $pluginComposerLicense,
    'PLUGIN_COMPOSER_AUTHORS_NAME' => $pluginComposerAuthorsName,
];