@extends("layout.backoffice")
@section('content')
    <div class="row">
        <div class="col-md-1 m-3">
            <a href="{{route('backoffice.order.index')}}" type="button" class="btn btn-block bg-gradient-primary btn-sm">Back to Orders</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table table-striped">
                <tbody>
                <tr>
                    <th>ID</th>
                    <td>{{$order->id}}</td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td>{{$order->name}}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{$order->email}}</td>
                </tr>
                <tr>
                    <th>Phone</th>
                    <td>{{$order->phone}}</td>
                </tr>
                <tr>
                    <th>Total Price</th>
                    <td>{{$order->total_price}}€</td>
                </tr>
                <tr>
                    <th>Gallery Images</th>
                    <td>
                        @foreach($order->images as $img)
                            <a href="{{Storage::url($img->image)}}" target="_blank">
                            <img class="m-2"  width="300" src="{{Storage::url($img->image)}}" />
                            </a>
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>{{$order->status}}</td>
                </tr>
                </tbody>
            </table>

        </div>
    </div>
@endsection
