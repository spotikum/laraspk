@extends('layout.app')

@section('content')
<form method="POST" action="/siswa">
  @method('post')
  @csrf
  <div class="container col-md-5 mt-5">
    <div class="container">
      <h1 class="display-4">SPK Penentuan Penjurusan Siswa SMA</h1>
    <div class="mb-3">
      <label for="nomor_induk" class="form-label">Nomor Induk Siswa</label>
      <input type="text" class="form-control" id="nomor_induk" placeholder="Nomor Induk Siswa">
    </div>
    <div class="mb-3">
      <label for="nama" class="form-label">Nama Siswa</label>
      <input type="text" class="form-control" id="nama" placeholder="Nama Siswa">
    </div>
    <div class="row">
      <label for="fisika" class="form-label">Masukan NIlai IPA</label>
      <div class="col-md-6 mb-3"> 
        <input type="text" class="form-control" id="fisika" placeholder="Fisika">
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control" id="kimia" placeholder="Kimia">
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control" id="matematika" placeholder="Matematika">
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control" id="biologi" placeholder="Biologi">
      </div>
      <label for="geografi" class="form-label mt-3">Masukan Nilai IPS</label>
      <div class="col-md-6 mb-3">
        <input type="text" class="form-control" id="geografi" placeholder="Geografi">
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control" id="sosiologi" placeholder="Sosiologi">
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control" id="antropologi" placeholder="Antropologi">
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control" id="ekonomi" placeholder="Ekonomi">
      </div>
      
      <div class="mb-3">
        <label for="alamat" class="form-label mt-3">Pilih Jurusuan</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" value="1" name="jurusan" id="flexCheckDefault1">
            <label class="form-check-label" for="flexCheckDefault1">
                IPA
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" value="2" name="jurusan" id="flexCheckDefault2">
            <label class="form-check-label" for="flexCheckDefault2">
                IPS
            </label>
        </div>
      <div class="mb-3">
        <label for="alamat" class="form-label mt-3">Pilih Jurusuan Rekomendasi Orang Tua</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" value="1" name="jurusan" id="flexCheckDefault1">
            <label class="form-check-label" for="flexCheckDefault1">
                IPA
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" value="2" name="jurusan" id="flexCheckDefault2">
            <label class="form-check-label" for="flexCheckDefault2">
                IPS
            </label>
        </div>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
  </form>
</div>



@endsection

