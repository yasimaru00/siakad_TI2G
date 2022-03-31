@extends('layout.app')
 
@section('content')
 
<div class="container mt-5">
 
 <div class="row justify-content-center align-items-center">
 <div class="card" style="width: 24rem;">
 <div class="card-header">
 Edit Mahasiswa
 </div>
 <div class="card-body">
 @if ($errors->any())
 <div class="alert alert-danger">
 <strong>Ups!</strong> Ada beberapa masalah dengan inputan Anda.<br><br>
 <ul>
 @foreach ($errors->all() as $error)
 <li>{{ $error }}</li>
 @endforeach
 </ul>
 </div>
 @endif
 <form method="post" action="{{ route('mahasiswa.update', $mahasiswa->nim) }}" id="myForm">
 @csrf
 @method('PUT')
 <div class="form-group">
 <label for="nim">Nim</label> 
 <input type="text" name="nim" class="form-control" id="nim" value="{{ $mahasiswa->nim }}" aria-describedby="Nim" > 
 </div>
 <div class="form-group">
 <label for="nama">Nama</label> 
 <input type="text" name="nama" class="form-control" id="nama" value="{{ $mahasiswa->nama }}" aria-describedby="Nama" > 
 </div>
 <div class="form-group">
 <label for="kelas">Kelas</label> 
 <input type="text" name="kelas" class="form-control" id="kelas" value="{{ $mahasiswa->kelas }}" aria-describedby="Kelas" > 
 </div>
 <div class="form-group">
 <label for="jurusan">Jurusan</label> 
 <input type="text" name="jurusan" class="form-control" id="jurusan" value="{{ $mahasiswa->jurusan }}" aria-describedby="Jurusan" > 
 </div>
 <button type="submit" class="btn btn-primary">Submit</button>
 </form>
 </div>
 </div>
 </div>
</div>
@endsection