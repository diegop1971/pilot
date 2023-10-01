<?php

namespace App\View\Components\frontoffice;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class mainUsersNavBar extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.frontoffice.main-users-nav-bar');
    }
}
