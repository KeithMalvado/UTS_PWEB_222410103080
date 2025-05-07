@extends('layouts.app')

@section('title', 'Profil')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Profil Pengguna</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Nama Pengguna:</h5>
            <p class="card-text">{{ $username }}</p>
        </div>
    </div>
</div>
@endsection
