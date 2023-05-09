<?php

namespace App\Http\Livewire;

use App\Models\Appointment;
use Livewire\Component;

class Appoinment extends Component
{
    public $appointments;
    public $search;

    public function mount($appointments){
        $this->appointments = $appointments;
    }

    public function render(){

        $search = $this->search;
        $this->appointments = Appointment::where(function ($query) use ($search) {
        return $query->where('name', 'like', '%'.$search.'%')
        ->orWhere('details', 'like', '%'.$search.'%')
        ->orWhere('phone', 'like', '%'.$search.'%')
        ->orWhere('date', 'like', '%'.$search.'%');
    })
        ->orderBy('date')
        ->get();
        return view('livewire.appoinment',['search' => $this->search, 'appointmentList' => $this->appointments]);
    }
}
