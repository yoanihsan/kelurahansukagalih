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
              @foreach($schedule as $s)
                <h2 style="text-align: center"><b>Terima Kasih</b></h2>
                <br>
                <p style="text-align: center">Jadwal telah berhasil dibuat.</p>
                <p style="text-align: center"><b>No Antrian : {{ $s->queue }}</b></p>
                <p style="text-align: center">Silahkan datang ke Kelurahan pada <b>{{ $s->book_date }}</b> dengan membawa berkas yang dibutuhkan.</p>
              @endforeach
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                &nbsp;
            </div>
        </div>
    </div>
    
  </main><!-- End #main -->
@endsection