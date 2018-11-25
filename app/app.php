<?php

use MyBridgePattern\Model\Project\Blog;
use MyBridgePattern\Model\Project\Shop;
use MyBridgePattern\Model\Theme\Dark;
use MyBridgePattern\Model\Theme\Normal;

$project = new Blog('How to create a Hello World application', new Normal());
$project->render();

$project = new Shop('Samsung Phone', new Dark());
$project->render();
