
@extends('layout.master')

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>CRUD Genre | Detail</title>

@section('title')
    <b>Halaman Detail Genre</b>
@endsection
@section('subtitle')
    Data Detail
@endsection
@section('content')

Nama : <b>{{$Genre->nama}}</b><br><br>

<div class="row">
    @forelse($Genre->film as $item)
        <div class="col-2">
            <div class="card">
                <img src="{{ asset('image/' . $item->poster) }}" class="card-img-top" alt="...">
                <div class="card-body">
                <h5><b>{{ $item->judul }}</b></h5>
                  <p class="card-text">{{ Str::limit($item->ringkasan, 30) }}</p>
                  <a href="/film/{{ $item->id }}" class="btn btn-info btn-block btn-sm">Selengkapnya</a>
                  
                </div>
              </div>
        </div>
        
    @empty
        
    @endforelse

</div>

<a href="/genre" class="btn btn-primary btn-sm">Kembali</a>


@endsection