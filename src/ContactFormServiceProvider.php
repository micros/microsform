<?php
// MyVendor\contactform\src\ContactFormServiceProvider.php
namespace Micros\Microsform;

use Illuminate\Support\ServiceProvider;

class ContactFormServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'Microsform');
        $this->loadMigrationsFrom(__DIR__ . '/Database/migrations');
    }
    public function register()
    {
        // Pendiente
    }
}
