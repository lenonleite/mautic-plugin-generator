<?php
declare(strict_types=1);

namespace MauticPlugin\##PLUGIN_NAME##Bundle\Integration;

use Mautic\IntegrationsBundle\Integration\BasicIntegration;
use Mautic\IntegrationsBundle\Integration\ConfigurationTrait;
use Mautic\IntegrationsBundle\Integration\Interfaces\BasicInterface;

class ##PLUGIN_NAME##Integration extends BasicIntegration implements BasicInterface
{
    use ConfigurationTrait;

    public const INTEGRATION_NAME = '##PLUGIN_NAME_LOWCASE##';
    public const DISPLAY_NAME     = '##PLUGIN_INTEGRATION_DISPLAY_NAME##';

    public function getName(): string
    {
        return self::INTEGRATION_NAME;
    }

    public function getDisplayName(): string
    {
        return self::DISPLAY_NAME;
    }

    public function getIcon(): string
    {
        return 'plugins/##PLUGIN_NAME##Bundle/Assets/img/icon.png';
    }
}