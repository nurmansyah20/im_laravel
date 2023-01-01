@extends('layout.master')

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Laravel | Welcome</title>

@section('title')
    <b>Welcome !</b>
@endsection
@section('subtitle')
    Home
@endsection
@section('content')
    <h1>SELAMAT DATANG {{ $namaDepan }} {{ $namaBelakang }} </h1>
    <h2>Terima kasih telah bergabung di Sanberbook. Social Media kita bersama!</h2>
@endsection