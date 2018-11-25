<?php

namespace MyBridgePattern\Model\Project;

use MyBridgePattern\Model\Theme\ThemeInterface;

/**
 * A shop has a single product
 */
class Shop extends AbstractProject
{
    protected $product;

    public function __construct($product, ThemeInterface $theme)
    {
        parent::__construct($theme);
        $this->product = $product;
    }

    public function render()
    {
        echo $this->theme->apply(
            $this->product
        );
    }
}
