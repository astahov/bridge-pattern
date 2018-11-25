<?php

namespace MyBridgePattern\Model\Theme;

interface ThemeInterface
{
    /**
     * Applies current theme to the current project
     *
     * @param $content
     */
    public function apply($content);
}
