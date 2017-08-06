<?php

namespace Riverslei\UEditor;

use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider;

class UEditorServiceProvider extends RouteServiceProvider
{


    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @param  \Illuminate\Routing\Router $router
     * @return void
     */
    public function boot(Router $router)
    {

        parent::boot($router);
        $viewPath = realpath(__DIR__ . '/../resources/views');
        $this->loadViewsFrom($viewPath, 'UEditor');
        $this->publishes([
            realpath(__DIR__ . '/../resources/views') => base_path('resources/views/vendor/UEditor'),
        ],'view');



        $this->publishes([
            realpath(__DIR__ . '/../resources/public') => public_path().'/laravel-ueditor',
        ], 'assets');


        $this->loadTranslationsFrom(realpath(__DIR__ . '/../resources/lang'), 'UEditor');


        //定义多语言
        //根据系统配置 取得 local
        $locale = str_replace('_', '-', strtolower(config('app.locale')));
        $file = "/laravel-ueditor/lang/$locale/$locale.js";
        $filePath = public_path().$file;

        if (!\File::exists($filePath)) {
            //Default is zh-cn
            $file = "/laravel-ueditor/lang/zh-cn/zh-cn.js";
        }
        \View::share('UeditorLangFile', $file);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        parent::register();
        $configPath =realpath(__DIR__ . '/../config/ueditor.php');
        $this->mergeConfigFrom($configPath, 'ueditor');
        $this->publishes([$configPath => config_path('ueditor.php')], 'config');

    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {


        $router = app('router');
        //need add auth
        $config = config('ueditor.core.route', []);
        $config['namespace'] = __NAMESPACE__;

        //定义路由
        $router->group($config, function ($router) {
            $router->any('/laravel-ueditor/server', 'Controller@server');
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {

    }

}