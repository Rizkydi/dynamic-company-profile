<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SidebarMenuItem extends Component
{
    public $route;
    public $label;
    public $currentRoute;

    /**
     * Create a new component instance.
     */
    public function __construct($route, $label, $currentRoute)
    {
        //
        $this->route = $route;
        $this->label = $label;
        $this->currentRoute = $currentRoute;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.sidebar-menu-item', [
            'url' => route($this->route)
        ]);
    }
}
