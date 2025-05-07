@extends('layouts.app')

@section('title', 'Pengelolaan Karyawan')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Karyawan</h1>
    @if(!empty($dataKaryawan) && is_array($dataKaryawan))
        <ul class="list-group">
            @foreach($dataKaryawan as $karyawan)
                <li class="list-group-item">{{ $karyawan }}</li>
            @endforeach
        </ul>
    @else
        <div class="alert alert-warning">
            Belum ada data karyawan yang tersedia.
        </div>
    @endif
</div>
@endsection
