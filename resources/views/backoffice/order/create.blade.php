@extends("layout.backoffice")
@section('content')
    <div class="row">
        <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Create Order</h3>
            </div>
            <!-- /.card-header -->


            <div class="card-body">
                <form action="{{route("backoffice.order.store")}}" method="POST">
                @csrf
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                <div class="form-group">
                    <label for="name">Name</label>
                    <input required type="text" class="form-control form-control-border border-width-2" id="name" name="name" placeholder="customer name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input required type="text" class="form-control form-control-border border-width-2" id="email" name="email" placeholder="customer email">
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input required type="text" class="form-control form-control-border border-width-2" id="phone" name="phone" placeholder="phone number">
                </div>
                <div class="form-group">
                    <label for="totalPrice">Total Price</label>
                    <input required type="text" class="form-control form-control-border border-width-2" id="totalPrice" name="totalPrice" placeholder="total price">
                </div>
                <div class="form-group">
                    <label for="details">Extra Details</label>
                    <textarea required type="text" class="form-control form-control-border border-width-2" id="details" name="details" placeholder="details..."></textarea>
                </div>
                <button class="btn btn-primary">Create Order</button>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
        </div>
    </div>
@endsection
