@extends('layout.master')

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>CRUD Film | Create</title>

@section('title')
    <b>Halaman Create Film</b>
@endsection
@section('subtitle')
    Create Data Film
@endsection
@section('content')

<form action="/film" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label>Nama</label>
      <select name="genre_id" class="form-control" id="">
      <option value="">--Pilih Nama--</option>
      @forelse($genres as $item)
          <option value="{{ $item->id }}">{{ $item->nama }}</option>
      @empty
          <option value="">Data Tidak Ditemukan</option>
      @endforelse
      @error('genre_id')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </select>
  </div>

    <div class="form-group">
      <label>Judul</label>
      <input type="text" class="form-control" name="judul">
      @error('judul')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
        <label>Ringkasan</label>
        <textarea name="ringkasan" class="form-control" cols="3" rows="3"></textarea>
        @error('ringkasan')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
    <div class="form-group">
      <label>Tahun</label>
      <input type="number" class="form-control" name="tahun">
      @error('tahun')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
        <label>Poster</label>
        <input type="file" class="form-control" name="poster">
        @error('poster')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      
       
      
    
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection