
@extends('layout.master')

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>CRUD Film | Detail</title>

@section('title')
<b>Halaman Detail Film</b>
@endsection
@section('subtitle')
Data Detail
@endsection
@section('content')


  <div class="card">
    <img src="{{ asset('image/' . $films->poster) }}" class="card-img-top p-3" style="width:230px;height:275px;" alt="...">
    <div class="card-body">
      <h5><b>{{ $films->judul }}</b></h5>
      <p class="card-text">{{ $films->ringkasan }}</p>
      <a href="/film" class="btn btn-primary btn-block btn-sm">Kembali</a>
      
    </div>
  </div>
  
  <hr>
  
  @forelse($films->kritik as $item)
  <div class="card">
    <div class="card-header">
      <strong>{{ $item->user->name }}</strong>
    </div>
      <div class="card-body">
       <h4><strong>{{ $item->point }} point</strong></h4>
        <p class="card-text">{{ $item->content }}</p>
        {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
      </div>
    </div>
    @empty
      <h4>Tidak ada komentar</h4>
      
    @endforelse
    
    
    <hr>
    <div>
      <form action="/kritik/{{ $films->id }}" method="post">
        @csrf
        <select name="point" class="form-control" id="">
          <option value="">--Berikan Nilai--</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
        </select><br>

        <textarea name="content" class="form-control" id="" cols="30" rows="10" placeholder="isi komentar"></textarea><br>
        <input type="submit" class="btn btn-primary btn-block btn-sm" class="mt-2" value="Kirim">
      </form>

    </div>

@endsection