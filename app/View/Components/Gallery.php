<?php

namespace App\View\Components;

use App\Models\GalleryImage;
use Illuminate\View\Component;

class Gallery extends Component
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
        $images = GalleryImage::with('file')->get();
        return view('components.gallery', ['images' => $images]);
    }
}
