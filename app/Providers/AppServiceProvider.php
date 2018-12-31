<?php

namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use App\Billing\Stripe;
//use App;
class AppServiceProvider extends ServiceProvider
{
    //protected $defer = true;
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->share('test_var',200);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        /*$this->app->bind('Stripe', function(){
            return new Stripe(config('services.stripe.secret'));
        });*/

       // app()->bind('App\Billing\Stripe');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
       // return ['Stripe'];
    }
}
