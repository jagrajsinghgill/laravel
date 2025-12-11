<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FollowIdeaStreams extends Component
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
        $ideaStreams = [
            [
                'name' => 'Breakfast ideas and whatever',
            ],
            [
                'name' => 'Quick book to read',
            ],
            [
                'name' => 'Inspiration for Art',
            ],
        ];
        return view('components.follow-idea-streams', compact('ideaStreams'));
    }
}
