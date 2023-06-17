<?php

namespace App\Http\Livewire\Page;

use Livewire\Component;

class LogoutComponent extends Component
{
    public function handleLogout()
    {
        auth()->logout();
        return redirect(route("login"));
    }
    public function render()
    {
        return view('livewire.page.logout-component')->layout('App.auth');
    }
}
