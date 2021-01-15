<?php

namespace GithubPlentyTest\Providers;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

/**
 * Class GithubPlentyTestRouteServiceProvider
 * @package GithubPlentyTest\Providers
 */
class GithubPlentyTestRouteServiceProvider extends RouteServiceProvider
{
    /**
     * @param Router $router
     */
    public function map(Router $router)
    {
        $router->get('hello-world','GithubPlentyTest\Controllers\GithubPlentyTestController@getHelloWorldPage');
        $router->get('/','GithubPlentyTest\Controllers\GithubPlentyTestController@getSlash');
    }
}