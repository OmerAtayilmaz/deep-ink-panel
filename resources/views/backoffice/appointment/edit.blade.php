@extends("layout.backoffice")
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">Update Appointment</h3>
                </div>
                <!-- /.card-header -->

                <div class="card-body">
                    <form action="{{route("backoffice.appointment.update",['id' => $appointment->id])}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input value="{{$appointment->name}}" required type="text" class="form-control form-control-border border-width-2" id="name" name="name" placeholder="customer name">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input  value="{{$appointment->phone}}"   required type="text" class="form-control form-control-border border-width-2" id="phone" name="phone" placeholder="phone number">
                        </div>
                        <div class="form-group">
                            <label>Date and time:</label>
                            <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                                <input   type="text" class="form-control datetimepicker-input" data-target="#reservationdatetime" name="date">
                                <div class="input-group-append" data-target="#reservationdatetime" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="details">Extra Details</label>
                            <textarea required type="text" class="form-control form-control-border border-width-2" id="details" name="details" placeholder="details..."> {{$appointment->details}}</textarea>
                        </div>
                        <button class="btn btn-secondary">Update</button>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>

@endsection
@section("bottom-scripts")
    <script>
        $(function () {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })

            //Datemask dd/mm/yyyy
            $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
            //Datemask2 mm/dd/yyyy
            $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
            //Money Euro
            $('[data-mask]').inputmask()

            //Date picker
            $('#reservationdate').datetimepicker({
                format: 'L'
            });

            //Date and time picker
            $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' }, date:"{{$appointment->date}}" });

            //Date range picker
            $('#reservation').daterangepicker()
            //Date range picker with time picker
            $('#reservationtime').daterangepicker({
                timePicker: true,
                timePickerIncrement: 30,
                locale: {
                    format: 'MM/DD/YYYY hh:mm A'
                }
            })
            //Date range as a button
            $('#daterange-btn').daterangepicker(
                {
                    ranges   : {
                        'Today'       : [moment(), moment()],
                        'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month'  : [moment().startOf('month'), moment().endOf('month')],
                        'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                    },
                    startDate: moment().subtract(29, 'days'),
                    endDate  : moment()
                },
                function (start, end) {
                    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
                }
            )

            //Timepicker
            $('#timepicker').datetimepicker({
                format: 'LT'
            })

            //Bootstrap Duallistbox
            $('.duallistbox').bootstrapDualListbox()

            //Colorpicker
            $('.my-colorpicker1').colorpicker()
            //color picker with addon
            $('.my-colorpicker2').colorpicker()

            $('.my-colorpicker2').on('colorpickerChange', function(event) {
                $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
            })

            $("input[data-bootstrap-switch]").each(function(){
                $(this).bootstrapSwitch('state', $(this).prop('checked'));
            })

        })


    </script>
@endsection
