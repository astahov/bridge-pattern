<?php

namespace MyBridgePattern\Model\Project;

use MyBridgePattern\Model\Theme\ThemeInterface;

/**
 * A blog has a single post
 */
class Blog extends AbstractProject
{
    protected $post;

    public function __construct($post, ThemeInterface $theme)
    {
        parent::__construct($theme);
        $this->post = $post;
    }

    public function render()
    {
        echo $this->theme->apply(
            $this->post
        );
    }
}
