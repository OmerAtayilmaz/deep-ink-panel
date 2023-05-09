@extends("layout.backoffice")
@section('content')
    <div class="row">
        <div class="col-md-1 m-3">
            <a href="{{route('backoffice.order.index')}}" type="button" class="btn btn-block bg-gradient-info btn-sm">Back to Orders</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Update Order</h3>
                </div>
                <!-- /.card-header -->

                <div class="card-body">
                    <form action="{{route("backoffice.order.update",['id' => $order->id ])}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input required type="text" value="{{$order->name}}" class="form-control form-control-border border-width-2" id="name" name="name" placeholder="customer name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input required type="text" value="{{$order->email}}" class="form-control form-control-border border-width-2" id="email" name="email" placeholder="customer email">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input required type="text" value="{{$order->phone}}"  class="form-control form-control-border border-width-2" id="phone" name="phone" placeholder="phone number">
                        </div>
                        <div class="form-group">
                            <label for="totalPrice">Total Price</label>
                            <input required type="text"  value="{{$order->total_price}}" class="form-control form-control-border border-width-2" id="totalPrice" name="totalPrice" placeholder="total price">
                        </div>
                        <div class="form-group">
                            <label for="details">Extra Details</label>
                            <textarea required type="text" class="form-control form-control-border border-width-2" id="details" name="details" placeholder="details...">{{$order->notes}}</textarea>
                        </div>
                        <button class="btn btn-info">Update Order</button>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
@endsection
