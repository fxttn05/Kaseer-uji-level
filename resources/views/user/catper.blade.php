@extends('layouts.layout')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">catatan perjalanan</h4>
        </p>
        <div class="table-responsive">
<<<<<<< HEAD
          <table style="color: white;"class="table table-hover">
=======
          <table class="table table-hover-light">
>>>>>>> 890afa2d5fc7a9c01ab0913443840f51015f713a
            <thead>
              <tr>
                <th>Nama</th>
                <th>Tanggal</th>
                <th>Lokasi</th>
                <th>Waktu</th>
                <th>Suhu Tubuh</th>
              </tr>
            </thead>
            <tbody>
              @foreach($catatanPerjalanans as $row) 
              <tr>
                <td>{{$row->user->name}}</td>
                <td>{{$row->tanggal}}</td>
                <td>{{$row->lokasi}}</td>
                <td>{{$row->waktu}}</td>
                <td>{{$row->suhu_tubuh}} ℃</td>
              </tr>
              @endforeach
              
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection