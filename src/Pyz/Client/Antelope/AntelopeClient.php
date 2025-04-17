<?php

namespace Pyz\Client\Antelope;

use Spryker\Client\Kernel\AbstractClient;

class AntelopeClient extends AbstractClient implements AntelopeClientInterface
{
    public function getAntelopes(): array
    {
        // Aqui você chama o Zed para buscar os dados
        return [
            ['name' => 'Antelope 1', 'color' => 'Brown', 'location' => 'Africa'],
            ['name' => 'Antelope 2', 'color' => 'Gray', 'location' => 'Asia'],
        ];
    }
}
