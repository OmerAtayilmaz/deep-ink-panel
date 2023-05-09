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
                    @if(!str_contains(request()->url(),'today'))
                        <h3 class="card-title">Appointments</h3>
                    @else
                        <h3 class="card-title">Today's Appointments</h3>
                    @endif

                </div>
                <!-- /.card-header -->

                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Date</th>
                            <th>Details</th>
                            <th>Updated_At</th>
                            <th>Created_At</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(count($appointmentList) > 0)
                        @foreach($appointmentList as $appointment)
                            <tr>
                                <td>{{$appointment->id}}</td>
                                <td>{{$appointment->name}}</td>
                                <td>{{$appointment->phone}}</td>
                                <td>{{$appointment->date}}</td>
                                <td>{{$appointment->details}}</td>
                                <td>{{$appointment->updated_at}}</td>
                                <td>{{$appointment->created_at}}</td>
                                <td>{{$appointment->status}}</td>
                                <td>
                                    <div class="btn-group">
                                        <a type="button" class="btn btn-warning"
                                           href="{{route('backoffice.appointment.edit',['id'=> $appointment->id])}}"
                                        ><i class="nav-icon fa fa-edit text-white"></i></a>
                                        @if(request()->user()->role == 'ADMIN')
                                            <form method="post" action="{{route('backoffice.appointment.destroy', ['id' => $appointment->id])}}" >
                                                @csrf
                                                <button type="submit" class="btn btn-danger rounded-0" onclick="return confirm('Are you sure ?')"><i class="nav-icon fa fa-trash"></i></button>
                                            </form>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        @else
                            <tr>
                                <td>KAYIT BULUNAMADI</td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
</div>
