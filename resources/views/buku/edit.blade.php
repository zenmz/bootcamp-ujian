@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <form action="{{ route('buku.update', $buku->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label class="form-label">isbn</label>
                    <input type="text" class="form-control" name="isbn" value="{{ $buku->isbn }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">judul</label>
                    <input type="text" class="form-control" name="judul" value="{{ $buku->judul }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">sinopsis</label>
                    <input type="text" class="form-control" name="sinopsis" value="{{ $buku->sinopsis }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">penerbit</label>
                    <input type="text" class="form-control" name="pernerbit" value="{{ $buku->pernerbit }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">cover</label>
                    <img src="{{ asset('storage/'.$buku->cover) }}" alt="" width="100px">
                    <input class="form-control" type="file" name="cover">
                </div>
                <div class="mb-3">
                    <label class="form-label">Kategori</label>
                    <select class="form-select" aria-label="Default select example" name="kategori_id">
                        <option selected>Open this select menu</option>
                        @foreach ($kategori as $kt)
                        <option value="{{ $kt->id }}" @selected($buku->kategori_id==$kt->id)>{{ $kt->nama }}</option>
                        @endforeach
                    </select>
                </div>
                @if (Auth::user()->role == 'admin')
                <div class="mb-3">
                    <label class="form-label">status</label>
                    <select class="form-select" aria-label="Default select example" name="status">
                        <option selected>Open this select menu</option>
                        <option value="aktif" @selected($buku->status=='aktif')>aktif</option>
                        <option value="tdk" @selected($buku->status=='tdk')>tdk</option>
                    </select>
                </div>
                @endif

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
</div>
@endsection
