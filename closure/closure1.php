<?php

/**
 * Created by PhpStorm.
 * User: liuyibao
 * Date: 16-11-18
 * Time: 下午3:07
 */
Class HttpFounder
{
    private $routes = [];
    private $responseStatus = '200 OK';
    private $responseContentType = 'text/html';
    private $responseBody = '';

    public function addRoute($routePath, Closure $routeCallback)
    {
        $this->routes[$routePath] = $routeCallback->bindTo($this, self::class);
    }

    public function dispatch($currentPath)
    {
        foreach ($this->routes as $routePath => $callback) {
            if ($routePath == $currentPath) {
                $callback();
            }
        }

        header('HTTP/1.1 ' . $this->responseStatus);
        header('Content-type: ' . $this->responseContentType);
        header('Content-length: ' . mb_strlen($this->responseBody));
        echo $this->responseBody;
    }
}

$app = new HttpFounder();
$app->addRoute('/home', function () {
    $this->responseBody = 'This is home body.';
});
$app->addRoute('/account', function () {
    $this->responseBody = 'This is account body.';
});

$app->dispatch('/account');