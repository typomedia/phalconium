<?php

class AboutController extends ControllerBase
{

    public function indexAction()
    {
 $robot = posts::findFirst(1);
        echo "The robot name is ", $robot->name, "\n";
        echo '<h1>Testtest</h1>';
    }

}

