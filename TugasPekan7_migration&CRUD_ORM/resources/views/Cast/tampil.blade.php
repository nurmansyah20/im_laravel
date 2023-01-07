@extends('layout.master')

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>CRUD Cast | Tampil</title>

@section('title')
    <b>Halaman Tampil Cast</b>
@endsection
@section('subtitle')
    Data Pemain Film
@endsection
@section('content')

<a href="/cast/create" class="btn btn-primary my-2">Tambah</a>

<table cl ass="table" class="table table-bordered table-striped dataTable">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Umur</th>
        <th scope="col">Bio</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
      <tbody>
        @forelse($casts as $key => $item)
        <tr>
          <td>{{$key + 1}}</td>
          <td>{{$item->nama}}</td>
          <td>{{$item->umur}}</td>
          <td>{{$item->bio}}</td>
          <td>
            <form action="/cast/{{ $item->id }}" method="post">
              @csrf
              @method('delete')
              <a href="/cast/{{ $item->id }}" class="btn btn-info btn-sm">Detail</a>
              <a href="/cast/{{ $item->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
              <input type="submit" class="btn btn-danger sm" value="Delete">
            </form>
          </td>
        </tr>
        @empty
        <tr>
          <td>Data tidak ditemukan</td>
        </tr>
          
        @endforelse
      </tbody>
    
  </table>
@endsection

