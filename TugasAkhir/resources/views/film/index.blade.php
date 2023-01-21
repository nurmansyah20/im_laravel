@extends('layout.master')

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>CRUD Film | Tampil</title>

@section('title')
    <b>Halaman Tampil Film</b>
@endsection
@section('subtitle')
    Data Pemain Film
@endsection
@section('content')

@auth
<a href="/film/create" class="btn btn-primary my-2">Tambah</a>
@endauth


<div class="row">
  @forelse($films as $item)
    <div class = "col-2">
      <div class="card">
        <img src="{{ asset('image/' . $item->poster) }}" class="card-img-top" alt="...">
        <div class="card-body">
        <h5><b>{{ $item->judul }}</b></h5>
        <small class="text-primary">{{ $item->Genre->nama }}</small>
          <p class="card-text">{{ Str::limit($item->ringkasan, 30) }}</p>
          <a href="/film/{{ $item->id }}" class="btn btn-info btn-block btn-sm">Selengkapnya</a>
          <div class ="row my-2">
            @auth
              
            <div class="col">
              <a href="/film/{{ $item->id }}/edit" class="btn btn-warning btn-block btn-sm">Edit</a>
            </div>
            <div class="col">
              <form action="film/{{ $item->id }}" method="post">
                @csrf
                @method('delete')
                <input type="submit" class="btn btn-danger btn-block btn-sm" value="Delete">
              </form>
            </div>
            
            @endauth
          </div>
        </div>
      </div>
    </div>
  @empty
    <h3>Data tidak ditemukan</h3>
  @endforelse

</div>

@endsection

