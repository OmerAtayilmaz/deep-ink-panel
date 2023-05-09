@extends("layout.backoffice")
@section('content')
    <div class="row">
        <div class="col-md-1 m-3">
             <a href="{{route('backoffice.order.create')}}" type="button" class="btn btn-block bg-gradient-primary btn-sm">Create Order</a>
        </div>
    </div>
    @livewire('order-component',['status' => 'ACTIVE'])
@endsection
