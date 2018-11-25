<?php

namespace MyBridgePattern\Model\Theme;

class Dark implements ThemeInterface
{
    public function apply($content)
    {
        return '<<<<' . $content . '>>>>' . PHP_EOL;
    }
}
