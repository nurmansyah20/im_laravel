@extends('layout.master')

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>CRUD Genre | Update</title>

@section('title')
    <b>Halaman Update Genre</b>
@endsection
@section('subtitle')
    Update Data Genre
@endsection
@section('content')

<form action="/genre/{{ $Genre->id }}" method="post">
    @csrf
    @method('put')
    <div class="form-group">
      <label>Nama</label>
      <input type="text" class="form-control" value="{{ $Genre->nama }}" name="nama">
      @error('nama')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection