<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use DateTime;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index()
    {
        $appointments = Appointment::orderBy('date')->get();
        return view('backoffice.appointment.index',[
            'appointments' => $appointments
        ]);
    }

    public function today_appointments(){
        $appointments = Appointment::whereDate('date',today())->get();
        return view('backoffice.appointment.index',[
            'appointments' => $appointments
        ]);
    }

    public function create()
    {
        return view('backoffice.appointment.create');
    }

    public function store(Request $request){
        // Validate the form data

        $validatedData = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'date' => 'required'
        ]);

        // Create a new appointment with the validated data
        $appointment = new Appointment();
        $appointment->name = $request->name;
        $date = DateTime::createFromFormat('m/d/Y h:i A', $request->date);
        $appointment->date = $date->format('Y-m-d H:i:s');
        $appointment->phone = $request->phone;
        $appointment->details = $request->details;
        $appointment->save();

        // Redirect back to the create appointment form with a success message
        return redirect()->route('backoffice.appointment.index')->with('success', 'Appointment created successfully!');

    }
    public function edit(Request $request, $id){
        $appointment = Appointment::find($id);
        return view('backoffice.appointment.edit',[
            'appointment' => $appointment
        ]);
    }

    public function update(Request $request, $id){

        $validatedData = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'date' => 'required'
        ]);


        // Create a new appointment with the validated data
        $appointment = Appointment::find($id);
        $appointment->name = $request->name;
        $date = DateTime::createFromFormat('m/d/Y h:i A', $request->date);
        $appointment->date = $date->format('Y-m-d H:i:s');
        $appointment->phone = $request->phone;
        $appointment->details = $request->details;
        $appointment->save();

        // Redirect back to the create appointment form with a success message
        return redirect()->route('backoffice.appointment.index')->with('success', 'Appointment updated successfully!');
    }


    public function destroy($id){
        $appointment = Appointment::find($id);
        $appointment->delete();
        return redirect()->route('backoffice.appointment.index')->with('success', 'Appointment deleted successfully!');
    }
}
