<?php

namespace App\Providers;
use Illuminate\Support\Facades\View;

use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
         View::composer(
            ['welcome','frontend.classrooms','frontend.shop','frontend.cart','frontend.team','frontend.payments','frontend.contacts.create','frontend.blog','frontend.work','frontend.governance','frontend.tokenized-asset'],
            'App\Http\View\Composers\FrontendComposer'
        );
    }
}
