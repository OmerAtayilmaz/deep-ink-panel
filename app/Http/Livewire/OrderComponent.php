<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Livewire\Component;

class OrderComponent extends Component
{
    public $search = '';
    public $status;

    public function mount($status){
        $this->status = $status;
    }
    public function render(){

        $search = $this->search;
        $this->orders = Order::where('status',$this->status)->where(function ($query) use ($search) {
            return $query->where('name', 'like', '%'.$search.'%')
                ->orWhere('email', 'like', '%'.$search.'%')
                ->orWhere('phone', 'like', '%'.$search.'%')
                ->orWhere('total_price', 'like', '%'.$search.'%')
                ->orWhere('notes', 'like', '%'.$search.'%');
        })
            ->orderBy('created_at',"desc")
            ->get();
        return view('livewire.order-component');
    }
}
