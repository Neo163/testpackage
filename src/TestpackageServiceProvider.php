<?php

namespace Neo163\Testpackage;

use Illuminate\Support\ServiceProvider;

class TestpackageServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Neo163\Testpackage\Controllers\Test\HelloWorldController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // 注册路由
        $this->loadRoutesFrom(__DIR__ . '/routes.php');
        // 数据迁移
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
        // 注册发布文件
        $this->registerPublishes();
    }

    /**
     * @description: 注册发布
     * @author: Neo
     * @return {*}
     */
    protected function registerPublishes()
    {
        $this->publishes([
            //发布配置文件
            __DIR__ . DIRECTORY_SEPARATOR . 'config' => config_path(),
        ]);
    }
}
