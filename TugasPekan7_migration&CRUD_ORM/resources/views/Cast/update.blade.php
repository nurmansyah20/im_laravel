@extends('layout.master')

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>CRUD Cast | Update</title>

@section('title')
    <b>Halaman Update Cast</b>
@endsection
@section('subtitle')
    Update Data
@endsection
@section('content')

<form action="/cast/{{ $Cast->id }}" method="post">
    @csrf
    @method('put')
    <div class="form-group">
      <label for="exampleInputEmail1">Nama</label>
      <input type="text" class="form-control" value="{{ $Cast->nama }}" name="nama">
      @error('nama')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Umur</label>
      <input type="text" class="form-control" value="{{ $Cast->umur }}" name="umur">
      @error('umur')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Bio</label>
      <textarea name="bio" class="form-control" cols="10" rows="5">{{ $Cast->bio }}"</textarea>
      @error('bio')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection