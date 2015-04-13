<?php namespace Matthis\Eventing;

use Illuminate\Support\ServiceProvider;
use Matthis\Eventing\Contracts\Dispatcher;

class EventingServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        return $this->app->bind(
            Dispatcher::class,
            LaravelDispatcher::class
        );
    }
}