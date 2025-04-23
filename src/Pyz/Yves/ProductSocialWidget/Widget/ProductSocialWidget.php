<?php

namespace Pyz\Yves\ProductSocialWidget\Widget;

use Spryker\Yves\Kernel\Widget\AbstractWidget;
use Generated\Shared\Transfer\ProductViewTransfer;

class ProductSocialWidget extends AbstractWidget
{
    protected const PARAMETER_PRODUCT_NAME = "productName";
    protected const PARAMETER_PRODUCT_URL = "productUrl";
    protected const PARAMETER_SOCIALICONS = "socialIcons";

    /**
     * @param string $productName
     * @param string $productUrl
     * @param array<string> $socialIcons
     */

    public function __construct(string $productName, string $productUrl, array $socialIcons)
    {
        $this->addProductName($productName);
        $this->addProductUrl($productUrl);
        $this->addSocialIconsParameter($socialIcons);
    }


    /**
     * @return string
     */
    public static function getName(): string
    {

        return 'ProductSocialWidget';
    }

    /**
     * @return string
     */
    public static function getTemplate(): string
    {
        return '@ProductSocialWidget/views/product-social-widget/product-social-widget.twig';
    }


    public function addSocialIconsParameter(array $product): void
    {
        $this->addParameter(static::PARAMETER_SOCIALICONS, $product);
    }

    public function addProductName(string $product): void
    {
        $this->addParameter(static::PARAMETER_PRODUCT_NAME, $product);
    }

    public function addProductUrl(string $product): void
    {
        $this->addParameter(static::PARAMETER_PRODUCT_URL, $product);
    }

}

