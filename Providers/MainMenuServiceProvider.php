<?php


namespace App\Containers\PageSection\Page\Providers;

use App\Containers\PageSection\Page\Tasks\GetMeinMenuTask;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class MainMenuServiceProvider extends ServiceProvider
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
        //
        $this->MainMenu();
    }

    public function MainMenu()
    {
        View::composer('pageSection@page::layouts.header', function ($view){
            $view->with('navigation', app(GetMeinMenuTask::class)->run(1));
        });
    }
}
