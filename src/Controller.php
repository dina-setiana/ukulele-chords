<?php

namespace App;

class Controller
{
    public string $layout = 'master';

    public function setLayout(string $layout)
    {
        $this->layout = $layout;
    }

    public function render(string $view, array $params = [])
    {
        return Application::$app->router->renderView($view, $params);
    }
}
