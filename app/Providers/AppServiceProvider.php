<?php

namespace App\Providers;

use App\Models\Settings;
use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;
use NascentAfrica\Jetstrap\JetstrapFacade;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Carbon::setLocale(config('app.locale'));
        date_default_timezone_set(config('app.timezone'));
        JetstrapFacade::useAdminLte3();
        Blade::directive('currency', function ( $expression ) { return "Rp. <?php echo number_format($expression,0,',','.'); ?>"; });
        Settings::chargeConfig();
    }
}
