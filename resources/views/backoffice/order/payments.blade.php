@extends("layout.backoffice")
@section('content')
    <div class="row">
        <div class="col-md-1 m-3">
            <a href="{{route('backoffice.order.index')}}" type="button" class="btn btn-block bg-gradient-primary btn-sm">Back to Orders</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Payment</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form method="post" action="{{route('backoffice.order.payments.store', ['id' => $id])}}">
                        @csrf
                        <div class="form-group">
                            <label for="name">Price</label>
                            <input required type="text" class="form-control form-control-border border-width-2" id="name" name="price" placeholder="...">
                        </div>
                        <div class="form-group">
                            <label for="email">Description</label>
                            <textarea required type="text" class="form-control form-control-border border-width-2" id="email" name="description" placeholder="details..."></textarea>
                        </div>
                        <button class="btn btn-primary">Create</button>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
            @if($order->total_price > $totalPayment)
            <h6 class="font-weight-bold">Total Price:{{$order->total_price}}€ | Total Paid:{{$totalPayment}}€</h6>
            <strong>{{$order->total_price - $totalPayment}}€  euros left until the debt expires</strong>
            @else
                <h6 class="font-weight-bold">Payment Completed.</h6>
            @endif
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Gallery</h3>
                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>Price</th>
                            <th>Description</th>
                            <th>Date</th>
                            @if(request()->user()->role == 'ADMIN')
                            <th>Actions</th>
                            @endif
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($order->prices as $payment)
                        <tr>
                            <td>{{$payment->id}}</td>
                            <td>{{$payment->price}}€</td>
                            <td>{{$payment->description}}</td>
                            <td>{{$payment->created_at}}</td>
                            <td>
                                @if(request()->user()->role == 'ADMIN')
                                <form method="post" action="{{route('backoffice.order.payments.destroy', ['id' => $payment->id])}}" >
                                    @method("DELETE")
                                    @csrf
                                    <button onclick="return confirm('Are you sure ?')" type="submit" class="btn btn-danger rounded-0"><i class="nav-icon fa fa-trash"></i></button>
                                </form>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        @if($order->total_price <= $totalPayment)
        <div class="col-12">
            <form action="{{route('backoffice.order.status', ['id' => $order->id])}}" method="post">
                @csrf
                <button type="submit" class="btn btn-success">Complete Order</button>
            </form>

        </div>
        @endif
    </div>
@endsection
