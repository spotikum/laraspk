@extends('layout.app')

@section('content')

<div class="container col-md-3 mt-5">
  <div class="mb-3">
    <label for="nomor-induk-siswa" class="form-label">Nomor Induk Siswa</label>
    <input type="text" class="form-control" id="nomor-induk-siswa" placeholder="Nomor Induk Siswa">
  </div>
  <div class="mb-3">
    <label for="nama-siswa" class="form-label">Nama Siswa</label>
    <input type="text" class="form-control" id="nama-siswa" placeholder="Nama Siswa">
  </div>
</div>


{{-- <h1>Hello, world!</h1> --}}


@endsection