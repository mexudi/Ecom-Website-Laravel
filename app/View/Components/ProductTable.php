<?php

namespace App\View\Components;

use App\Models\Product;
use Illuminate\View\Component;

class ProductTable extends Component
{
    public $products,$message;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($message)
    {
        $this->products = Product::all();
        $this->message = $message;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.product-table');
    }
}
