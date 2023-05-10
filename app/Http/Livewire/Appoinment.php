<?php

namespace App\Http\Livewire;

use App\Models\Appointment;
use Livewire\Component;

class Appoinment extends Component
{
    public $appointments;
    public $search;

    public $start_date;
    public $end_date;

    public function mount($appointments){
        $this->appointments = $appointments;
    }

    public function render(){

        $search = $this->search;

        $appointments = Appointment::where(function ($query) use ($search) {
            return $query->where('name', 'like', '%'.$search.'%')
            ->orWhere('details', 'like', '%'.$search.'%')
            ->orWhere('phone', 'like', '%'.$search.'%')
            ->orWhere('date', 'like', '%'.$search.'%');
        });
        if($this->start_date)
            $appointments->where('date','>',$this->start_date);
        if($this->end_date)
            $appointments->where('date','<',$this->end_date);
       $this->appointments = $appointments->orderBy('date')
        ->get();

        return view('livewire.appoinment',['search' => $this->search, 'appointmentList' => $this->appointments]);
    }
}
