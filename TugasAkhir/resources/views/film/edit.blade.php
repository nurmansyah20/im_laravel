@extends('layout.master')

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>CRUD Film | Update</title>

@section('title')
    <b>Halaman Update Film</b>
@endsection
@section('subtitle')
    Update Data Film
@endsection
@section('content')

<form action="/film/{{ $films->id }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="form-group">
      <label>Nama</label>
      <select name="genre_id" class="form-control" id="">
      <option value="">--Pilih Nama--</option>
      @forelse($genres as $item)
        @if($item->id === $films->genres_id)
        <option value="{{ $item->id }}" selected>{{ $item->nama }}</option>
        @else 
        <option value="{{ $item->id }}">{{ $item->nama }}</option>
        @endif
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
      <input type="text" class="form-control" value="{{ $films->judul }}" name="judul">
      @error('judul')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
        <label>Ringkasan</label>
        <textarea name="ringkasan" class="form-control" cols="3" rows="3">{{ $films ->ringkasan }}</textarea>
        @error('ringkasan')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
    <div class="form-group">
      <label>Tahun</label>
      <input type="number" class="form-control" value="{{ $films->tahun  }}" name="tahun">
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