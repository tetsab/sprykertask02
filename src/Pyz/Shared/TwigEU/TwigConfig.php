<?php

namespace Pyz\Shared\TwigEU;
use \Spryker\Shared\Twig\TwigConfig as SprykerConfig;
class TwigConfig extends  SprykerConfig
{

    public function getYvesThemeName(): string
    {
       return 'default'; // theme color
    }
}