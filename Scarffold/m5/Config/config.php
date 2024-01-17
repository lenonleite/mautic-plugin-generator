<?php
return [
    'name'        => '##PLUGIN_CONFIG_NAME##',
    'description' => '##PLUGIN_CONFIG_DESCRIPTION##',
    'version'     => '##PLUGIN_CONFIG_VERSION##',
    'author'      => '##PLUGIN_CONFIG_AUTHOR##',
    'services'    => [
        'integrations' => [
            'mautic.integration.##PLUGIN_NAME_LOWCASE##' => [
                'class' => \MauticPlugin\##PLUGIN_NAME##Bundle\Integration\##PLUGIN_NAME##Integration::class,
                'tags'  => [
                    'mautic.integration',
                    'mautic.basic_integration',
                ],
            ],
            'mautic.integration.##PLUGIN_NAME_LOWCASE##.configuration' => [
                'class' => \MauticPlugin\##PLUGIN_NAME##Bundle\Integration\Support\ConfigSupport::class,
                'tags'  => [
                    'mautic.config_integration',
                ],
            ],
            'mautic.integration.##PLUGIN_NAME_LOWCASE##.config' => [
                'class' => \MauticPlugin\##PLUGIN_NAME##Bundle\Integration\Config::class,
                'tags'  => [
                    'mautic.integrations.helper',
                ],
            ],
        ],
    ],
];
