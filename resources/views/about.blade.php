<<<<<<< HEAD
@extends ('layouts.main')

@section('container')
    <h1> Halaman About</h1>
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
    <img src="img/{{ $image }}" alt="{{ $name }}" width="300"   class="img-thumbnail rounded-circle">
=======
@extends('layouts.main')

@section('container')
<h1>About</h1>
<h3>{{ $name }}</h3>
<p> {{ $email }}</p>
<img src="img/{{ $image }}" alt="{{ $name }}" width="200">

>>>>>>> 819727428d8df42e2c9c7c832dc09ed41e724601
@endsection