@extends('layouts.home')

@section('content')
<div class="container-fluid" style="border-radius: 30px">
    <div class="row align-items-center justify-content-center vh-100">
        <div class="col-lg-9">
            <div class="shadow p-3 mb-10 bg-body" style="border-radius: 30px">
                @if(!$history)
                <div class="text-center">
                    <img src="{{ asset('images/Nothing Found.png') }}" alt="" style="height: 4.5cm" />
                    <h3>You haven’t taken the test</h3>
                </div>
                @else
                <div>
                    <h1>Test Result</h1>
                    @foreach ($history as $hs)
                    {{-- <div class="card"> --}}
                        <li>
                            <a class="btn btn-danger" href="{{ route('user.hasil', ['id' => $hs->id]) }}">{{
                                $hs->created_at->format('d M Y') }}</a>
                        </li>
                        {{--
                    </div> --}}
                    @endforeach
                </div>
                @endif
                <div class="tombol">
                    <a href="{{ route('user.rekomendasi') }}" type="button" class="btn btn-lg btn-custom">
                        <img src="{{ asset('images/Face ID.png') }}" alt=""
                            style="height: 1.4cm; margin-left: -0.13cm" />
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection