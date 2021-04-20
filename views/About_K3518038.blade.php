@extends('home')
@section('content')
@if(session('successMsg'))
<div class="alert alert-success" role="alert">
	session(successMsg)
</div>
@endif

<div class="container">
<br>
<H1> Profil</H1>
<br>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nim</th>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
      <th scope="col">Bidang peminatan</th>
      <th scope="col">Email</th>
      <th scope="col">Telp</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($datas as $a)
    <tr>
      <th scope="row">{{$a->id}}</th>
      <td>{{$a->nim}}</td>
      <td>{{$a->nama}}</td>
      <td>{{$a->alamat}}</td>
      <td>{{$a->bidang_peminatan}}</td>
      <td>{{$a->email}}</td>
      <td>{{$a->telp}}</td>
      <td><a class="btn btn-raised btn-primary btn-sm" href="{{route('Edit_Profil',$a->id)}}"> Edit</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection