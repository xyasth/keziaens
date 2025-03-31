<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TicketCard extends Component
{
    public $name;
    public $title;
    public $image;
    public $description;
    public $link;

    public function __construct($name, $title, $image, $description, $link)
    {
        $this->name = $name;
        $this->title = $title;
        $this->image = $image;
        $this->description = $description;
        $this->link = $link;
    }

    public function render()
    {
        return view('components.ticket-card');
    }
}
