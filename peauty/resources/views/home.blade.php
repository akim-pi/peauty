@extends('layouts.home')

@section('content')
<div class="container-fluid" style="border-radius: 30px">
    <div class="row align-items-center justify-content-center vh-100">
        <div class="col-lg-9">
            <div class="shadow p-3 mb-10 bg-body" style="border-radius: 30px">
                <div class="text-center">
                    <img src="{{ asset('images/Nothing Found.png') }}" alt="" style="height: 4.5cm" />
                    <h3>You haven’t taken the test</h3>
                </div>
                <div class="tombol">
                    <button type="button" class="btn btn-lg btn-custom">
                        <img src="{{ asset('images/Face ID.png') }}" alt=""
                            style="height: 1.4cm; margin-left: -0.13cm" />
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection