<?php

namespace Pyz\Client\Antelope;

use Spryker\Client\Kernel\AbstractClient;

class AntelopeClient extends AbstractClient implements AntelopeClientInterface
{
    public function getAntelopes(): array
    {

        return [
            ['name' => 'Antelope 1', 'color' => 'Brown', 'location' => 'Africa'],
            ['name' => 'Antelope 2', 'color' => 'Gray', 'location' => 'Asia'],
        ];
    }
}
