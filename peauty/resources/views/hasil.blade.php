@extends('layouts.home')

@section('content')
<div class="container">
    <div class="row vh-100 justify-content-center align-items-center">
        <div class="card h-auto w-75 p-4">
            <div class="col-md-12">
                <h3>Jenis Kulit</h3>
                <li>{{ $jenis_kulit->nama }}</li>
                <p>{{ $jenis_kulit->tips }}</p>
                <hr>
                <h3>Kondisi Kulit</h3>
                <li>{{ $kondisi_kulit->nama }}</li>
                <p>{{ $kondisi_kulit->tips }}</p>

                <a href="{{ route('user.product', ['id' => $id]) }}" class="btn btn-danger">Rekomendasi produk</a>
            </div>
        </div>
    </div>
</div>
@endsection