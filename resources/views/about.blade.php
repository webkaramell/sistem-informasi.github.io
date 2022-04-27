@extends('layouts.main')

@section('container')
    <h1 class="mb-4 text-center">Profile Page</h1>
    <h5>Nama : {{ $name }}</h5>
    <h5 class="mb-4">Email : {{ $email }}</h5>
    <img src="img/{{ $image }}" alt="{{ $name }}" width="200" class="">
@endsection
