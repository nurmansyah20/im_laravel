@extends('layout.master')
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel | Pendaftaran</title>
@section('title')
    <b>Halaman Pendaftaran</b>
@endsection
@section('subtitle')
    Daftar
@endsection
@section('content')
    <h2>Buat Account Baru!</h2>
    <form action="/welcome" method="post">
        @csrf
        <label>First name:</label><br>
        <input type="text" name="fname"><br>

        <label>Last name:</label><br>
        <input type="text" name="lname"><br>

        <label>Gender:</label><br>
        <input type="radio" name="gender">Male<br>
        <input type="radio" name="gender">Female<br>
        <input type="radio" name="gender">Other<br>

        <label>Nationality:</label><br>
        <select name="nationality">
            <option value="">Indonesian</option>
            <option value="">United Kingdom</option>
            <option value="">Malaysia</option>
            <option value="">Thailand</option>
        </select><br><br>

        <label>Language Spoken:</label><br>
        <input type="checkbox" name="languagespoken">Bahasa Indonesia<br>
        <input type="checkbox" name="languagespoken">English<br>
        <input type="checkbox" name="languagespoken">Other<br>

        <label>Bio:</label><br>
        <textarea cols="50" rows="5"></textarea><br><br>

        <input type="submit" value="Sign Up">
    </form>
@endsection
