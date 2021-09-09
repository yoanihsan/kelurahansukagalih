@extends('layouts.main-app')

@section('content')
  <main id="main">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                &nbsp;
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
            </div>
            <div class="col-md-12">
                <form action="/schedule-service/create" method="post">
                    {{ csrf_field() }}
                    <input class="form-control" type="hidden" name="service" value="Penerbitan KK">
                    <input class="form-control" type="hidden" name="service_id" value="2">
                    <div class="form-group">
                      <label for="nama">Kategori <span style="color: red">*</span></label>
                      <select class="custom-select" id="inputGroupSelect02 " name="category">
                        <option selected disabled selected>Choose...</option>
                        <option value="Perubahan (Kelahiran)">Perubahan (Kelahiran)</option>
                        <option value="Perubahan (Kematian/Pindah/Biodata)">Perubahan (Kematian/Pindah/Biodata)</option>
                        <option value="Perubahan (Menumpang)">Perubahan (Menumpang)</option>
                      </select>
                    </div>
                    <div class="form-group">
                        <label for="nama">Jadwal <span style="color: red">*</span></label>
                        <input id="datepicker1" class="form-control" type="text" name="book_date" required value="" placeholder="Pilih jadwal">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama <span style="color: red">*</span></label>
                        <input type="text" name="name" class="form-control" id="exampleFormControlInput1" aria-describedby="emailHelp" placeholder="Nama">
                    </div>
                    <div class="form-group">
                      <label for="nama">No Handphone <span style="color: red">*</span></label>
                      <input type="number" pattern="[0-9]*" name="phone_number" class="form-control" id="exampleFormControlInput1" aria-describedby="emailHelp" placeholder="No Handphone">
                  </div>
                    {{-- Jadwal <div class="form-group">
                            <div class='input-group date' id='datetimepicker'>
                            <input type='text' name='book_date' class="form-control" />
                            <span class="input-group-addon">
                              <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                            </div>
                        </div> --}}
                        <a href="/" class="btn btn-secondary" stype="reset" style="float: right">Cancel</a>
                        <input class="btn btn-primary mr-1" type="submit" value="Submit" style="float: right">
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                &nbsp;
            </div>
        </div>
    </div>

    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
          <div class="row">
            <div class="col-lg-12 pt-4 pt-lg-0 content" data-aos="fade-right">
              <h4>Persyaratan</h4>
              <ul>
                <li><i class="icofont-check-circled"></i> Surat Pengantar RT/RW</li>
                <li><i class="icofont-check-circled"></i> Foto Copy Kartu Keluarga Lama</li>
                <li><i class="icofont-check-circled"></i> Foto Copy Kutipan Kutipan Akta Kelahiran</li>
                <li><i class="icofont-check-circled"></i> Akta Cerai (Khusus Kematian/Pindah/Biodata)</li>
                <li><i class="icofont-check-circled"></i> Akta Kawin (Khusus Kematian/Pindah/Biodata)</li>
                <li><i class="icofont-check-circled"></i> Akta Kematian (Khusus Kematian/Pindah/Biodata)</li>
                <li><i class="icofont-check-circled"></i> Surat Keterangan Pindah Datang (Khusus Perpindahan)</li>
              </ul>
              <p>
                Harap lengkapi persyaratan sebelum datang ke Kelurahan.
              </p>
            </div>
          </div>
      </div>
    </section>

    
  </main><!-- End #main -->
@endsection

@section('javascripts')
  {{-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> --}}
  {{-- <link rel="stylesheet" href="//resources/demos/style.css"> --}}
  {{-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> --}}
  {{-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> --}}
  {{-- <script> --}}
  {{-- $( function() { --}}
    {{-- $( "#datepicker1" ).datepicker(); --}}
  {{-- } ); --}}
  {{-- </script> --}}
  <link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/smoothness/jquery-ui.css" rel="stylesheet" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
  <script>
    $(document).ready(function(){      //Add this line (and it's closing line)
        var $dp1 = $("#datepicker1");
      $dp1.datepicker({
        changeYear: true,
        changeMonth: true,
        minDate:0,
        dateFormat: "yy-m-dd",
        yearRange: "-100:+20",
        changeMonth: true,
        numberOfMonths: 1,  
        beforeShowDay: $.datepicker.noWeekends
     });
    });
  </script>    
  @stop