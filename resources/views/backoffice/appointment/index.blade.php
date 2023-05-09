@extends("layout.backoffice")
@section('content')
    <div class="row">
        <div class="col-md-1 m-3">
            <a href="{{route('backoffice.appointment.create')}}" type="button" class="btn btn-block bg-gradient-primary btn-sm">Create Appointment</a>
        </div>
    </div>
    @livewire('appoinment',['appointments' => $appointments ])

@endsection
