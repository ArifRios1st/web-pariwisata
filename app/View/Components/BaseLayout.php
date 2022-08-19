<?php

namespace App\View\Components;

use App\Models\Product;
use Illuminate\View\Component;

class BaseLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        $products = collect();
        return view('layouts.base',['products' => $products]);
    }
}
