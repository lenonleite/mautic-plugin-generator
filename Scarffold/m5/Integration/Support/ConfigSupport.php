<?php

declare(strict_types=1);

namespace MauticPlugin\##PLUGIN_NAME##Bundle\Integration\Support;

use Mautic\IntegrationsBundle\Integration\DefaultConfigFormTrait;
use Mautic\IntegrationsBundle\Integration\Interfaces\ConfigFormInterface;
use MauticPlugin\##PLUGIN_NAME##Bundle\Integration\##PLUGIN_NAME##Integration;

class ConfigSupport extends ##PLUGIN_NAME##Integration implements ConfigFormInterface
{
    use DefaultConfigFormTrait;
}
