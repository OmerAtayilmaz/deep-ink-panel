<div>
    <div class="input-group input-group-sm mb-3" style="width: 100%;">
        <input wire:model="search" type="text" name="table_search" class="form-control float-right" placeholder="Search">
        <div class="input-group-append">
            <button type="submit" class="btn btn-default">
                <i class="fas fa-search"></i>
            </button>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Orders</h3>
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
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Total Price</th>
                            <th>Gallery</th>
                            <th>Payments</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $order)
                            <tr>
                                <td>{{$order->id}}</td>
                                <td>{{$order->name}}</td>
                                <td>{{$order->email}}</td>
                                <td>{{$order->phone}}</td>
                                <td>{{$order->total_price}}€</td>
                                <td>
                                    <a  class="border px-3 pt-3 pb-1 border-primary" href="{{route("backoffice.order.image.index",['id' => $order->id])}}"><i class="nav-icon far fa-image fa-2x"></i></a>
                                </td>
                                <td>
                                    <a class="border px-3 pt-3 pb-1 border-primary" href="{{route("backoffice.order.payments",['id' => $order->id])}}"><i class=" nav-icon fa fa-euro-sign fa-2x"></i></a>
                                </td>
                                <td>{{$order->status}}</td>
                                <td>
                                    <div class="btn-group">
                                        <a type="button" class="btn btn-info"
                                           href="{{route('backoffice.order.show',['id'=> $order->id])}}"
                                        >Details</a>
                                        <a type="button" class="btn btn-warning"
                                           href="{{route('backoffice.order.edit',['id'=> $order->id])}}"
                                        ><i class="nav-icon fa fa-edit text-white"></i></a>
                                        @if(request()->user()->role == 'ADMIN')
                                            <form method="post" action="{{route('backoffice.order.destroy', ['id' => $order->id])}}" >
                                                @csrf
                                                <button type="submit" class="btn btn-danger rounded-0" onclick="return confirm('Are you sure ?')"><i class="nav-icon fa fa-trash"></i></button>
                                            </form>
                                        @endif
                                    </div>
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
    </div>
</div>
