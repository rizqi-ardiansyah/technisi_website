<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
<<<<<<< HEAD

class AppServiceProvider extends ServiceProvider
{
=======
use Carbon\Carbon;

class AppServiceProvider extends ServiceProvider {
>>>>>>> 3abbe9a20101da6a35b2b6d345e4d6901f9c30cf
    /**
     * Register any application services.
     *
     * @return void
     */
<<<<<<< HEAD
    public function register()
    {
=======
    public function register() {
>>>>>>> 3abbe9a20101da6a35b2b6d345e4d6901f9c30cf
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
<<<<<<< HEAD
    public function boot()
    {
        //
=======
    public function boot() {
        config(['app.locale' => 'id']);
        Carbon::setLocale('id');
        date_default_timezone_set('Asia/Jakarta');
>>>>>>> 3abbe9a20101da6a35b2b6d345e4d6901f9c30cf
    }
}
