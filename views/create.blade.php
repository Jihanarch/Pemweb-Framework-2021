@extends('home')
@section('content')
<div class="container">
<H1> Create New Siswa </H1><br>
<form class="text-center border border-light p-5" action="{{ route('store') }}" method="POST">
  <!-- 2 column grid layout with text inputs for the first and last names -->

{{ csrf_field() }}

  <!-- NIM input -->
    <input type="text" id="nim" name="nim" class="form-control" placeholder="NIM" />


  <!-- Nama input -->
    <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Lengkap" />

  <!-- Angkatan input -->
    <input type="number" id="angkatan" name="angkatan" class="form-control" placeholder="Angkatan" />


  <!-- Email input -->
    <input type="email" id="email" name="email" class="form-control" placeholder="Email" />
  <!-- Number input -->
    <input type="number" id="telp" name="telp" class="form-control" placeholder="Telp" />
  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4">Add New Siswa</button>
</form>
</div>
@endsection
