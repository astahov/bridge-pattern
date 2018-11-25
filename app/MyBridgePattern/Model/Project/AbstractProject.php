<?php

namespace MyBridgePattern\Model\Project;

use MyBridgePattern\Model\Theme\ThemeInterface;

abstract class AbstractProject implements ProjectInterface
{
    /**
     * @var ThemeInterface
     */
    protected $theme;

    /**
     * @param ThemeInterface $theme
     */
    public function __construct(ThemeInterface $theme)
    {
        $this->theme = $theme;
    }
}
