<?php

namespace Pyz\Yves\AntelopePage\Plugin\Router;

use Spryker\Yves\Router\Plugin\RouteProvider\AbstractRouteProviderPlugin;
use Spryker\Yves\Router\Route\RouteCollection;
use Spryker\Yves\Router\Route\Route;

class AntelopePageRouteProviderPlugin extends AbstractRouteProviderPlugin
{
    public const ROUTE_NAME_ANTELOPE = 'antelope_page_index';

    /**
     * @param \Spryker\Yves\Router\Route\RouteCollection $routeCollection
     *
     * @return \Spryker\Yves\Router\Route\RouteCollection
     */
    public function addRoutes(RouteCollection $routeCollection): RouteCollection
    {
        $routeCollection->add(static::ROUTE_NAME_ANTELOPE, new Route(
            '/antelopes',
            [
                'module' => 'AntelopePage',
                'controller' => 'Antelope',
                'action' => 'index',
            ]
        ));

        return $routeCollection;
    }
}
