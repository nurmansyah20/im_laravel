@extends('layout.master')

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>CRUD Genre | Create</title>

@section('title')
    <b>Halaman Create Genre</b>
@endsection
@section('subtitle')
    Data table Genre
@endsection
@section('content')

<form action="/genre" method="post">
  @csrf
  <div class="form-group">
    <label>Nama</label>
    <input type="text" class="form-control" name="nama">
    @error('nama')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
      
      <button type="submit" class="btn btn-primary">Submit</button>
  </table>
@endsection

