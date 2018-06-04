<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;


class BookServiceProvider extends ServiceProvider
{
     /**
     * 服务提供者加是否延迟加载.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * 注册服务提供者
     *
     * @return void
     */
    public function register()
    {
        
    }


    /**
     * 获取由提供者提供的服务.
     *
     * @return array
     */
    public function provides()
    {
        
    }
}
