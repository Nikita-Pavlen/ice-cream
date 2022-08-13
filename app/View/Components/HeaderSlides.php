<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\HeaderSlide;

class HeaderSlides extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $slides = HeaderSlide::all();
        return view('components.header-slides', ['slides' => $slides]);
    }
}
