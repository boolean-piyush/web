<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::share('pill' , ' &nbsp&nbsp<span class="badge badge-pill badge-danger">New</span>  ');

        View::share('date' , '<h3 class="text-center heading" ><-- Exam Dates --></h3> ');
        View::share('fees' , '<h3 class="text-center heading" ><-- Exam Fees --></h3> ');
        View::share('eligibility' , '<h3 class="text-center heading" ><-- Exam Eligibility --></h3> ');
        View::share('pattern' , '<h3 class="text-center heading" ><-- Exam Pattern --></h3> ');
        View::share('selection' , '<h3 class="text-center heading" >Selection Procedure</h3> ');
        View::share('vacancies' , '<h3 class="text-center heading" ><-- Total Vacancies --></h3> ');
        View::share('centers' , '<h3 class="text-center heading"><-- Exam Centers --></h3> ');
        View::share('links' , '<h3 class="text-center heading" ><-- Exam Links --></h3> ');

        Blade::directive('datetime', function ($expression) {
            return "<?php echo ($expression)->format('m/d/Y H:i'); ?>";
        });

        URL::forceScheme('https');
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
