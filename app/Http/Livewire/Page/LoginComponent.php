<?php

namespace App\Http\Livewire\Page;

use Livewire\Component;

class LoginComponent extends Component
{
    public function render()
    {
        return view('livewire.page.login-component')->layout('app.app');
    }
}
