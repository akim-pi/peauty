@extends('layouts.home')

@section('content')
<div class="container">
    <div class="row vh-100 justify-content-center align-items-center">
        <div class="card h-auto w-75 p-4">
            <div class="col-md-12">
                <h3>Jenis Kulit</h3>
                {{-- <li>{{ $jenis_kulit->nama }}</li> --}}
                @foreach ($product_jenis as $pr)
                <div class="col-md-3">
                    <div class="card p-4">
                        {{ $pr->nama }}
                        <div class="card-link">
                            <a href="{{ $pr->tokopedia }}">Tokped</a>
                            <a href="{{ $pr->shopee }}">Shopee</a>
                            <a href="{{ $pr->lazada }}">Lazada</a>
                        </div>
                    </div>
                </div>
                @endforeach
                <hr>
                <h3>Kondisi Kulit</h3>
                @foreach ($product_kondisi as $pr)
                <div class="col-md-3">
                    <div class="card p-4">
                        {{ $pr->nama }}
                        <div class="card-link">
                            <a href="{{ $pr->tokopedia }}">Tokped</a>
                            <a href="{{ $pr->shopee }}">Shopee</a>
                            <a href="{{ $pr->lazada }}">Lazada</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection