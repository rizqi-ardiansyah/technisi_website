@extends('layouts.layout')
<head>
        <link rel="stylesheet" href="css/ord.css">
</head>
@section('main-content')
                <div class="container d-flex justify-content-center mt-100 my-3">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="container">
                                    <h6>TEKNISI</h6>
                                    <div class="row">
                                        <div class="col-xs-6" style="padding-top: 1vh;">
                                            <ul type="none">
                                                <pre>
                                                <li> Nama       : Mohammad Arifin </li>
                                                <li> Telepon    : 081890324618 </li>
                                                </pre>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal body -->
                                <div class="modal-body">
                                    <div class="container">
                                        <h6 class="text-dark">PELANGGAN</h6>
                                        <div class="row">
                                            <div class="col-xs-6" style="padding-top: 1vh;">
                                                <ul type="none">
                                                    <pre>
                                                    <li>Nama    : Hendra Kusuma</li>
                                                    <li>Alamat  : Jalan Dahlia No 5 Malang</li>
                                                    <li>Telepon : 082793125890</li>
                                                    </pre>
                                                </ul>
                                            </div>
                                        </div>
                                        <h6>DETAIL PEMESANAN</h6>
                                        <div class="row">
                                            <div class="col-xs-6" style="padding-top: 1vh;">
                                                <ul type="none">
                                                    <pre>
                                                    <li class="left">Order number       : 123A</li>
                                                    <li class="left">Jenis Kerusakan    : Freon pada AC bocor</li>
                                                    <li class="left">Tanggal Perbaikan  : 08 April 2022</li>
                                                    <li class="left">Biaya Jasa         : Rp 80.000,00</li>
                                                    <li class="left">Biaya Transport    : Rp 10.000,00</li>
                                                    <li class="left">Total              : Rp 90.000,00</li>
                                                    <li class="left">Jenis Pembayaran   : Cash</li>
                                                    </pre>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary">SELESAI </button>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection

