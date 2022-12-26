<?php

namespace App\View\Components\customer;

use Illuminate\View\Component;
use App\Models\Customer;

class inline extends Component
{
    /**
     * Customer.
     * 
     * @var Customer
     */
    public $customer;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Customer $customer)
    {
        $this->customer = $customer;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.customer.inline');
    }
}
