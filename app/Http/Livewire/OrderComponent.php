<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Livewire\Component;

class OrderComponent extends Component
{
    public $search = '';
    public $status;

    public $start_date;
    public $end_date;
    public function mount($status){
        $this->status = $status;
    }
    public function render(){

        $search = $this->search;
        $orders = Order::where('status',$this->status)->where(function ($query) use ($search) {
            return $query->where('name', 'like', '%'.$search.'%')
                ->orWhere('email', 'like', '%'.$search.'%')
                ->orWhere('phone', 'like', '%'.$search.'%')
                ->orWhere('total_price', 'like', '%'.$search.'%')
                ->orWhere('notes', 'like', '%'.$search.'%');
        });
        if($this->start_date)
              $orders->where('created_at','>',$this->start_date);
        if($this->end_date)
            $orders->where('created_at','<',$this->end_date);
     $this->orders = $orders->orderBy('updated_at')
           ->get();
        return view('livewire.order-component');
    }
}
