@extends('layout.master')

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>CRUD Cast | Tambah</title>

@section('title')
    <b>Halaman Tambah Cast</b>
@endsection
@section('subtitle')
    Tambah Data
@endsection
@section('content')

<form action="/cast" method="post">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Nama</label>
      <input type="text" class="form-control" name="nama">
      @error('nama')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Umur</label>
      <input type="text" class="form-control" name="umur">
      @error('umur')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Bio</label>
      <textarea name="bio" class="form-control" cols="10" rows="5"></textarea>
      @error('bio')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection