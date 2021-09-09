@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('styles')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{url('AdminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
@endsection

@section('styles')
<!-- DataTables -->
<link rel="stylesheet" href="{{url('AdminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
@endsection

@section('javascripts')
<!-- DataTables -->
<script src="{{url('AdminLTE/plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{url('AdminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
<script> 
    $ ( function () {
        $('#datatable').DataTable();
    })
</script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Daftar Jadwal</h3>
                        </div>    
                    <div class="card-body">
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap" id="datatable">
                                <thead>
                                <tr>
                                    <th> No </th>
                                    <th> Nama </th>
                                    <th> Layanan </th>
                                    <th> Jadwal </th>
                                    <th> Antrian </th>
                                    <th> No Tlp </th>
                                </tr>
                                </thead>
                                <form action="/home/search" method="get">
                                    @csrf
                                    <label for="name"> Filter Berdasarkan Nama : </label>
                                    <input type="text" name="name" class="form-control col-sm-4" value="{{ app('request')->input('name') }}"
                                    placeholder="Filter Berdasarkan Nama">                                
                                    <label for="filter-satuan"> Filter Berdasarkan Jadwal : </label>
                                    {{-- <input id="datepicker1" class="form-control col-sm-4" type="text" name="book_date" placeholder="Pilih jadwal"> --}}
                                    <input id="datepicker1" class="form-control col-sm-4" type="text" name="book_date" value="{{ app('request')->input('book_date') }}" placeholder="Pilih jadwal">
                                    {{-- <input class="form-control col-sm-4" type="date" name="book_date" id="dateofbirth"> --}}
                                    <label for="nama">Filter Berdasarkan Layanan :</label>
                                    <select class="form-control col-sm-4" id="inputGroupSelect02 " name="service">
                                        <option selected disabled>Choose...</option>
                                        <option value="Penerbitan KTP" {{ app('request')->input('service') == 'Penerbitan KTP' ? 'selected' : '' }}>Penerbitan KTP</option>
                                        <option value="Penerbitan KK" {{ app('request')->input('service') == 'Penerbitan KK' ? 'selected' : '' }}>Penerbitan KK</option>
                                    </select>
                                    <br>
                                    <input class="btn btn-primary" type="submit" value="Search"> 
                                </form>
                                <br/> <br/>
                                <tbody>
                                    @foreach ($schedule as $index => $s)
                                    <tr>
                                        <td>{{ $index +1 }}</td>
                                        <td>{{ $s->name }}</td>
                                        <td>{{ $s->service }}</td>
                                        <td>{{ $s->book_date }}</td>
                                        <td>{{ $s->queue }}</td>
                                        <td>{{ $s->phone_number }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
  <link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/smoothness/jquery-ui.css" rel="stylesheet" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
  <script>
    $(document).ready(function(){      //Add this line (and it's closing line)
        var $dp1 = $("#datepicker1");
      $dp1.datepicker({
        changeYear: true,
        changeMonth: true,
        // minDate:0,
        dateFormat: "yy-m-dd",
        yearRange: "-100:+20",
        changeMonth: true,
        numberOfMonths: 1,  
        beforeShowDay: $.datepicker.noWeekends
     });
    });
  </script>    
@stop