@extends('layout.app')

@section('content')
<form method="POST" action="/buku/{{ $buku->id }}">
  @method('post')
  @csrf
  <div class="container col-md-3 mt-5">
    <div class="mb-3">
      <label for="nomor-induk-siswa" class="form-label">Nomor Induk Siswa</label>
      <input type="text" class="form-control" id="nomor-induk-siswa" placeholder="Nomor Induk Siswa">
    </div>
    <div class="mb-3">
      <label for="nama-siswa" class="form-label">Nama Siswa</label>
      <input type="text" class="form-control" id="nama-siswa" placeholder="Nama Siswa">
    </div>
    <div class="col-md-6">
      <label for="fisika" class="form-label">Fisika</label>
      <input type="text" class="form-control" id="fisika">
    </div>
    <div class="col-md-6">
      <label for="kimia" class="form-label">Kimia</label>
      <input type="text" class="form-control" id="kimia">
    </div>
    <div class="col-md-6">
      <label for="matematika" class="form-label">Matematika</label>
      <input type="text" class="form-control" id="matematika">
    </div>
    <div class="col-md-6">
      <label for="biologi" class="form-label">Biologi</label>
      <input type="text" class="form-control" id="biologi">
    </div>
    <div class="col-md-6">
      <label for="geografi" class="form-label">Geografi</label>
      <input type="text" class="form-control" id="geografi">
    </div>
    <div class="col-md-6">
      <label for="sosiologi" class="form-label">Sosiologi</label>
      <input type="text" class="form-control" id="sosiologi">
    </div>
    <div class="col-md-6">
      <label for="antropologi" class="form-label">Antropologi</label>
      <input type="text" class="form-control" id="antropologi">
    </div>
    <div class="col-md-6">
      <label for="ekonomi" class="form-label">Ekonomi</label>
      <input type="text" class="form-control" id="ekonomi">
    </div>
    
    <div class="mb-3">
      <label for="alamat" class="form-label">Pilih Jurusuan</label>
      <div class="form-check">
          <input class="form-check-input" type="radio" value="1" name="jurusan[]" id="flexCheckDefault1">
          <label class="form-check-label" for="flexCheckDefault1">
              IPA
          </label>
      </div>
      <div class="form-check">
          <input class="form-check-input" type="radio" value="2" name="jurusan[]" id="flexCheckDefault2">
          <label class="form-check-label" for="flexCheckDefault2">
              IPS
          </label>
      </div>
    </div>
      
    <button type="submit" class="btn btn-primary">Submit aku dong</button>
  </div>
  </form>
</div>



@endsection