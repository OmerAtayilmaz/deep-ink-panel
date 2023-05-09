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
                        <h3 class="card-title">Image</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form method="post" action="{{route('backoffice.order.image.store',['id' => $id])}}" enctype="multipart/form-data" >
                            @csrf
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input required type="file" class="form-control p-0 pt-1 px-1" id="image" name="image">
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea required rows="5" name="description" type="text" class="form-control form-control-border border-width-2" id="description" placeholder="details..."></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Create</button>
                        </form>
                    </div>
                    <!-- /.card-body -->
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
                            <th>Image</th>
                            <th>Description</th>
                            <th>Created At</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($order->images as $img)
                        <tr>
                            <td>
                                <img src="{{Storage::url($img->image)}}" width="250"  alt=""/>
                            </td>
                            <td>{{$img->text}}</td>
                            <td>{{$img->created_at}}</td>
                            <td>
                                <form method="post" action="{{route('backoffice.order.image.destroy', ['id' => $img->id])}}" >
                                    @method("DELETE")
                                    @csrf
                                    <button type="submit" onclick="return confirm('Are you sure ?')" class="btn btn-danger rounded-0"><i class="nav-icon fa fa-trash"></i></button>
                                </form>
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
@endsection
