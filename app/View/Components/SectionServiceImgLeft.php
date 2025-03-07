<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SectionServiceImgLeft extends Component
{
    public $title;
    public $desc;
    public $image;
    public $href;
    public $btnLabel;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $desc, $image, $href, $btnLabel = "More Details")
    {
        $this->title = $title;
        $this->desc = $desc;
        $this->image = $image;
        $this->href = $href;
        $this->btnLabel = $btnLabel;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.section-service-img-left');
    }
}
