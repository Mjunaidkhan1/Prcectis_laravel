<?php

namespace App\View\Components;

use Illuminate\View\Component;

class header2 extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

     public $pageTitle;
    public function __construct($name)
    {
        $this->pageTitle = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.header2');
    }
}
