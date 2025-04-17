<?
use Spryker\Yves\Kernel\Controller\AbstractController;
use Spryker\Yves\Kernel\View\View;

class AntelopeController extends AbstractController
{
    /**
     * @return \Spryker\Yves\Kernel\View\View
     */
    public function indexAction(): View
    {
        $antelopes = ['Dik-dik', 'Springbok', 'Impala'];

        return $this->view(
            ['antelopes' => $antelopes],
            [],
            '@AntelopePage/views/index/index.twig'
        );
    }
}
