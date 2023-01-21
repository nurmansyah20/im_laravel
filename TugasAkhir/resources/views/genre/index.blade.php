@extends('layout.master')

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>CRUD Genre | Tampil</title>

@section('title')
    <b>Halaman Tampil Genre</b>
@endsection
@section('subtitle')
    Data Pemain Film
@endsection
@section('content')

<a href="/genre/create" class="btn btn-primary my-2">Tambah</a>

<table class="table" class="table table-bordered table-striped dataTable">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
      <tbody>
        @forelse($genres as $key => $item)
        <tr>
          <td>{{$key + 1}}</td>
          <td>{{$item->nama}}</td>
          
          <td>
            <form action="/genre/{{ $item->id }}" method="post">
              @csrf
              @method('delete')
              <a href="/genre/{{ $item->id }}" class="btn btn-info btn-sm">Detail</a>
              <a href="/genre/{{ $item->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
              <input type="submit" class="btn btn-danger btn-sm" value="Delete">
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

