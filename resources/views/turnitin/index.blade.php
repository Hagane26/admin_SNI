@extends('wrapper.layout')

@section('title',"Cek Turnitin")

@section('context')
    @include('wrapper.menus.navbar_turnitin')

    <div class="container-fluid">
            <div class="row align-items-start" style="margin-left:10%; margin-top: 20px; margin-right: 10%;">
                <div class="row">
                    @foreach ($data as $d)
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{ $d->name }}</h5>
                                <p class="card-text">{{ $d->desc }}</p>
                                <h4> Harga : {{ 'Rp ' . number_format($d->price, 0, ',', '.')}}</h4>
                                <form action="turnitin/order" method="post">
                                    @csrf
                                    <input type="hidden" value="{{ $d->id }}" name="product">
                                    <input type="submit" class="btn btn-primary" value="Pesan Sekarang" >
                                </form>
                            </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
@endsection
