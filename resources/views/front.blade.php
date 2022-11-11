@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h1>Daftar Buku</h1>
        @foreach ($data as $dt)
        <div class="col-3 mt-2">
            <div class="card ms-3" style="width: 18rem; height: 315px;">
                <img src="{{ asset('storage/'. $dt->cover) }}" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title">{{ $dt->judul }}</h5>
                    <h5 class="card-text">{{ $dt->pernerbit }}</h5>
                    <p class="card-text">{{ $dt->sinopsis }}</p>
                </div>
            </div>

        </div>
        @endforeach
    </div>
</div>
@endsection
