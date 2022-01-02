<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;

use App\Speciality;
use App\Doctor;
use App\Disease;

use App\Package;

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
        Schema::defaultStringLength(191);

        $specialities =Speciality::all()->random(10);
        $doctors=Doctor::all()->random(10);
        $diseases=Disease::all();

        $packages=Package::latest()->take(6)->get();

        View::share('data',[$specialities,$doctors,$diseases,$packages]);
    }
}
