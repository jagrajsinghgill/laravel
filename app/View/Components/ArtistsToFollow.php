<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ArtistsToFollow extends Component
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
        $artists = [
            [
                'name' => 'Alessia',
                'image' => '/images/alessia.png',
            ],
            [
                'name' => 'Anne',
                'image' => '/images/anne.png',
            ],
            [
                'name' => 'Mr. Anderson',
                'image' => '/images/mr-anderson.png',
            ],
            [
                'name' => 'Michael',
                'image' => '/images/michael.png',
            ],
        ];
        return view('components.artists-to-follow', compact('artists'));
    }
}
