@extends('home')
@section('content')
<div class="container">
<H1> Edit Profil </H1><br>
<form class="text-center border border-light p-5" action="{{ route('Update_Profil',$data ->id) }}" method="POST">
  <!-- 2 column grid layout with text inputs for the first and last names -->

{{ csrf_field() }}

  <!-- NIM input -->
  <div class="form-outline mb-4">
    <input type="text" id="form6Example3"  class="form-control" name="nim" value="{{$data->nim}}" />
    <label class="form-label" for="form6Example3">NIM</label>
  </div>

  <!-- Nama input -->
    <div class="form-outline mb-4">
    <input type="text" id="form6Example4" class="form-control" name="nama" value="{{$data->nama}}" />
    <label class="form-label" for="form6Example3">Nama Lengkap</label>
  </div>

  <!-- Angkatan input -->
    <div class="form-outline mb-4">
    <input type="text" id="form6Example4"  class="form-control" name="alamat" value="{{$data->alamat}}" />
    <label class="form-label" for="form6Example3">Alamat</label>
  </div>


  <div class="form-outline mb-4">
    <input type="text" id="form6Example6"  class="form-control" name="bidang_peminatan" value="{{$data->bidang_peminatan}}" />
    <label class="form-label" for="form6Example3">Bidang Peminatan</label>
  </div>

  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="text" id="form6Example6"  class="form-control" name="email" value="{{$data->email}}" />
    <label class="form-label" for="form6Example3">Email</label>
  </div>
  <!-- Number input -->
    <div class="form-outline mb-4">
    <input type="text" id="form6Example7"  class="form-control" name="telp" value="{{$data->telp}}" />
    <label class="form-label" for="form6Example3">Telp</label>
  </div>
  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4">Update Profil</button>
</form>
</div>
@endsection
