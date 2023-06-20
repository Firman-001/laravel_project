<?php

namespace App\Http\Livewire\Page;

use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        return view('App.inc.menu')->layout('App.app');
    }
}
