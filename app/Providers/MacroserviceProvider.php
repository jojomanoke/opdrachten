<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Collective\Html\FormBuilder;

class MacroserviceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        FormBuilder::component('fullText', 'components.form.fullText', ['name', 'value', 'placeholder', 'attributes' => []]);
        FormBuilder::component('sub', 'components.form.submitbutton', ['class' => 'success','attributes' => []]);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
