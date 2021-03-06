<?php

namespace Tests\Browser\DataBinding\AutoFill;

use Illuminate\Support\Facades\View;
use Livewire\Component as BaseComponent;

class Component extends BaseComponent
{
    public $foo = '';
    public $bar = '';

    public function render()
    {
        return View::file(__DIR__.'/view.blade.php');
    }
}
