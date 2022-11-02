<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Button extends Component
{

    /**
    * @var string  name of the color using the tailwind-css documentation
    */
    public $color;

    /**
    * @var string  text displayed inside the button
    */
    public $text;

    /**
    * @var string  destination link
    */
    public $link;


    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($color , $text , $link)
    {
        $this->color = $color;
        $this->text = $text;
        $this->link = $link;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.button');
    }
}
