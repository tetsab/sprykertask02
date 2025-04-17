<?php

namespace Pyz\Yves\TrainingPage;

use Spryker\Yves\Kernel\AbstractBundleDependencyProvider;
use Spryker\Yves\Kernel\Container;

class TrainingPageDependencyProvider extends AbstractBundleDependencyProvider
{
    public const CLIENT_TRAINING = 'CLIENT_TRAINING';

    public function provideDependencies(Container $container): Container
    {
        $container = parent::provideDependencies($container);
        $container = $this->addTrainingClient($container);

        return $container;
    }

    protected function addTrainingClient(Container $container): Container
    {
        $container->set(static::CLIENT_TRAINING,
        function (Container $container) {
                return $container->getLocator()->training()->client();
            });
        return $container;
    }
}
