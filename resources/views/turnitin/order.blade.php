@extends('wrapper.layout')

@section('title',"Cek Turnitin")

@section('context')
    @include('wrapper.menus.navbar_turnitin')

    <div class="container-fluid">
            <div class="row align-items-start" style="margin-left:10%; margin-top: 20px;">
                <div class="col">
                    <div class="card" style="width: 900px">
                        <div class="card-body m-4">
                            <h4 class="card-title">Cek Plagiarisme Dokumen Anda</h4>
                            <p class="card-text">Layanan cek plagiarisme menggunakan Turnitin dengan hasil akurat dan cepat</p>
                            <form action="/turnitin/order-action" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col">
                                            <h4>Paket Terpilih</h4>
                                        </div>
                                        <div class="col">
                                            <h4>:</h4>
                                        </div>
                                        <div class="col">
                                            <h4>{{$data->name}}</h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Upload File:</label>
                                    <input class="form-control" type="file" id="formFile" name="file">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label fw-bold fs-5">Pilih filter yang diinginkan</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="opsi1">
                                        <label class="form-check-label" for="checkDefault">
                                            Kecualikan Kutipan
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="opsi2">
                                        <label class="form-check-label" for="checkChecked">
                                            Kecualikan Daftar Pustaka
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="opsi3">
                                        <label class="form-check-label" for="checkChecked">
                                            Kecualikan sumber yang kurang dari
                                            <select aria-label="Default select example">
                                                <option selected>0</option>
                                                <option value="1">1</option>
                                                <option value="5">5</option>
                                                <option value="10">10</option>
                                                <option value="20">20</option>
                                                <option value="50">50</option>
                                            </select>
                                            Kata.
                                        </label>
                                    </div>
                                </div>

                                <div class="mb-5">
                                    <label for="exampleInputEmail1" class="form-label fw-bold fs-5">Isi Nomor WhatsApp untuk mengirim hasilnya</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-whatsapp"></i></span>
                                        <input type="text" class="form-control" placeholder="628XXXXXXXXXX" aria-describedby="basic-addon1" name="wa">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col">
                                            <h3>Jumlah</h3>
                                        </div>
                                        <div class="col">
                                            <input type="hidden" value="{{ $data->price }}" name="jumlah">
                                            <h3 class="text-primary text-end">{{ 'Rp ' . number_format($data->price, 0, ',', '.')}}</h3>
                                        </div>
                                    </div>

                                    <div class="mt-3">
                                        <label for="referral" class="form-label">Kode Referral/Promo (Opsional)</label>
                                        <input type="text" class="form-control" id="referral" name="referral">
                                    </div>
                                </div>
                                <button type="submit" class="form-control bg-warning">
                                    <b class="bi bi-cart4 fs-5"> Pesan Sekarang</b>
                                </button>
                            </form>
                        </div>
                    </div>

                </div>
                <div class="col">
                    <div class="row">
                        <div class="col">
                            <div class="card" style="width:300px">
                                <div class="card-header bg-primary rounded-top">
                                    <h5 class="text-white">Tentang Layanan</h5>
                                </div>
                                <div class="card-body">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
