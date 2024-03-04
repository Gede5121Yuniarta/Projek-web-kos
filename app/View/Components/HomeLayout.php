<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HomeLayout extends Component
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
    
    // hapus dan ubah sesuai modul
    // public function render(): View|Closure|string
    // {
    //     return view('components.home-layout');
    // }

    public function render()
    {
        return view('layouts.home-layout');
    }
}
