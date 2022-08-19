<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NavigationMenus extends Component
{
    /**
     * The component's listeners.
     *
     * @var array
     */
    protected $listeners = [
        'refresh-navigation-menus' => '$refresh',
    ];

    /**
     * Render the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('livewire.navigation-menus');
    }
}
