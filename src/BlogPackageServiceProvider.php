<?php

namespace Jerickcm\Migration;

use Illuminate\Support\ServiceProvider;

class BlogPackageServiceProvider  extends ServiceProvider
{
    public function register()
    {
    }

    public function boot()
    {
        if ($this->app->runningInConsole()) {


            if (!class_exists('CreatePostsTable')) {
                $this->publishes([
                    __DIR__ . '/../database/migrations/create_posts_table.php.stub' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_posts_table.php'),

                ], 'migrations');
            }
        }
    }
}
