<?php
namespace LithiumDev\Swagger;


use Illuminate\Support\ServiceProvider;

class SwaggerServiceProvider extends ServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../../views', 'l5-swagger');
        $this->publishes([
            __DIR__ . '/../../config/config.php' => config_path('l5-swagger/config.php'),
            __DIR__ . '/../../public' => public_path('vendor/l5-swagger'),
            __DIR__ . '/../../views' => base_path('resources/views/vendor/l5-swagger'),
        ]);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../../config/config.php', 'l5-swagger.config'
        );

        require_once __DIR__ . '/routes.php';
    }

}
