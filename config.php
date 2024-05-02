<?php

$pluginName = 'LeuchtfeuerCompanyPoints';
$bundleName = $pluginName . 'Bundle';
$pluginConfigName = 'Company Points by Leuchtfeuer';
$pluginIntegrationDisplayName = $pluginConfigName;
$pluginConfigDescription = 'Massively enhanced Company-based Scoring';
$pluginConfigVersion = '1.0.0';
$pluginConfigAuthor = 'Leuchtfeuer Digital Marketing GmbH';
$pluginComposerName = 'leuchtfeuer/mautic-companypoints-bundle';
$pluginComposerDescription = $pluginConfigDescription;
$pluginComposerAuthorsEmail = 'mautic-plugins@Leuchtfeuer.com';
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