<?php

namespace app\http\controllers;

use blink\core\Object;
use blink\view\View;

class IndexController extends Object
{
    public function sayHello()
    {
        return 'Hello world, Blink.';
    }

    public function view()
    {
        $view = app('view');
        return $view->render('index/view.php', ['name' => 'Blink', 'job' => 'php programmer']);
    }

    public function demo()
    {
        return 'nice job';
    }
}