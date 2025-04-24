<?php

namespace Pyz\Yves\KittyWidget\Widget;

use Spryker\Yves\Kernel\Widget\AbstractWidget;
use Spryker\Yves\Kernel\Dependency\Widget\WidgetInterface;

class KittyWidget extends AbstractWidget implements WidgetInterface
{
    public function __construct()
    {
        $this->addParameter('kitty', '🐱 Hello from KittyWidget!');
    }

    /**
     * @return string
     */
    public static function getName(): string
    {
        return 'KittyWidget';
    }

    /**
     * @return string
     */
    public static function getTemplate(): string
    {
        return '@KittyWidget/views/kitty-widget/kitty-widget.twig';

    }

}
