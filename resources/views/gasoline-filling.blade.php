@extends('layouts.dashboard-dark-layout')
@section('title','Pengisian BBM | Fuel Manager')

<!-- daterange picker -->
<link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
<!-- Tempusdominus Bootstrap 4 -->
<link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

@section('content')

<!-- general form elements -->
<div class="card card-info bg-secondary">
    <div class="card-header">
    <h3 class="card-title">Form Pengisian BBM</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form>
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Nama  Vendor</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Vendor">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Volume BBM Diterima</label>
                <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Volume">
            </div>

            <!-- Date -->
            <div class="form-group">
                <label>Tanggal Pengisian :</label>
                <div class="input-group date" id="reservationdate" data-target-input="nearest">
                    <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                    <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                </div>
            </div>

            <!-- Date and time -->
            <div class="form-group">
                <label>Date and time:</label>
                <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                    <input type="text" class="form-control datetimepicker-input" data-target="#reservationdatetime"/>
                    <div class="input-group-append" data-target="#reservationdatetime" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                </div>
            </div>
            <!-- /.form group -->

            <!-- Time Picker -->
            <div class="bootstrap-timepicker">
                <div class="form-group">
                <label>Waktu pengisian :</label>

                <div class="input-group date" id="timepicker" data-target-input="nearest">
                    <input type="text" class="form-control datetimepicker-input" data-target="#timepicker"/>
                    <div class="input-group-append" data-target="#timepicker" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="far fa-clock"></i></div>
                    </div>
                    </div>
                <!-- /.input group -->
                </div>
                <!-- /.form group -->
            </div>
            <!-- /.time picker -->

            <div class="form-group">
                <label for="exampleInputFile">Invoice</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Kepadatan</label>
                <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Volume">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Suhu</label>
                <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Volume">
            </div>

            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-info">Submit</button>
        </div>
    </form>
</div>
<!-- /.card -->

@endsection





@section('scripts')
<!-- date-range-picker -->
<script src="../../plugins/daterangepicker/daterangepicker.js"></script>
<!-- InputMask -->
<script src="../../plugins/moment/moment.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script>
    $(function(){
        //Date picker
        $('#reservationdate').datetimepicker({
            format: 'L'
        });

        //Date and time picker
        $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

        //Timepicker
        $('#timepicker').datetimepicker({
        format: 'LT'
        })

    })
</script>

@endsection


