@extends('home')
@section('content')
<div class="container">
<H1> Create New Siswa </H1><br>
<form class="text-center border border-light p-5" action="{{ route('update',$mahasiswa->id) }}" method="POST">
  <!-- 2 column grid layout with text inputs for the first and last names -->

{{ csrf_field() }}

  <!-- NIM input -->
  <div class="form-outline mb-4">
    <input type="text" id="form6Example3"  class="form-control" name="nim" value="{{$mahasiswa->nim}}" />
    <label class="form-label" for="form6Example3">NIM</label>
  </div>

  <!-- Nama input -->
    <div class="form-outline mb-4">
    <input type="text" id="form6Example4" class="form-control" name="nama" value="{{$mahasiswa->nama}}" />
    <label class="form-label" for="form6Example3">Nama Lengkap</label>
  </div>

  <!-- Angkatan input -->
    <div class="form-outline mb-4">
    <input type="text" id="form6Example4"  class="form-control" name="angkatan" value="{{$mahasiswa->angkatan}}" />
    <label class="form-label" for="form6Example3">Angkatan</label>
  </div>


  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="text" id="form6Example6"  class="form-control" name="email" value="{{$mahasiswa->email}}" />
    <label class="form-label" for="form6Example3">Email</label>
  </div>
  <!-- Number input -->
    <div class="form-outline mb-4">
    <input type="text" id="form6Example7"  class="form-control" name="telp" value="{{$mahasiswa->telp}}" />
    <label class="form-label" for="form6Example3">Telp</label>
  </div>
  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4">Update Siswa</button>
</form>
</div>
@endsection
