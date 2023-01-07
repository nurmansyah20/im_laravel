@extends('layout.master')

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>CRUD Cast | Detail</title>

@section('title')
    <b>Halaman Detail Cast</b>
@endsection
@section('subtitle')
    Data Detail
@endsection
@section('content')

Nama : <b>{{$Cast->nama}}</b><br>
Umur : <b>{{$Cast->umur}}</b><br>
Bio  : <b>{{$Cast->bio}}</b><br>

@endsection