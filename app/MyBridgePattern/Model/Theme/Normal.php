<?php

namespace MyBridgePattern\Model\Theme;

class Normal implements ThemeInterface
{
    public function apply($content)
    {
        return '&&&&' . $content . '&&&&' . PHP_EOL;
    }
}
