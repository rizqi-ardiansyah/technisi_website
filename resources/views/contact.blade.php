@extends('layouts.layout')
@section('main-content')
            <!-- Page Header Start -->
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>Contact Us</h2>
                        </div>
                        <div class="col-12">
                            <a href="">Home</a>
                            <a href="">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->


            <!-- Contact Start -->
            <div class="contact">
                <div class="container">
                    <div class="section-header">
                        <p>Contact Us</p>
                        <h2>Temukan Jawaban / Kirim Pesan</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="faqs">
                                <div id="accordion">
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="card-link collapsed" data-toggle="collapse" href="#collapseOne" aria-expanded="true">
                                                <span>1</span> Servis apa saja yang bisa dikerjakan?
                                            </a>
                                        </div>
                                        <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                            <div class="card-body">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="card-link" data-toggle="collapse" href="#collapseTwo">
                                                <span>2</span> Berapa lama proses perbaikan?
                                            </a>
                                        </div>
                                        <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                            <div class="card-body">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="card-link" data-toggle="collapse" href="#collapseThree">
                                                <span>3</span> Berapa biaya untuk servis?
                                            </a>
                                        </div>
                                        <div id="collapseThree" class="collapse" data-parent="#accordion">
                                            <div class="card-body">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="card-link" data-toggle="collapse" href="#collapseFour">
                                                <span>4</span> Bagaimana cara memesan servis?
                                            </a>
                                        </div>
                                        <div id="collapseFour" class="collapse" data-parent="#accordion">
                                            <div class="card-body">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="card-link" data-toggle="collapse" href="#collapseFour">
                                                <span>5</span> Kapan hari kerja untuk teknisi servis?
                                            </a>
                                        </div>
                                        <div id="collapseFour" class="collapse" data-parent="#accordion">
                                            <div class="card-body">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-form">
                                <form>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <input type="text" class="form-control" placeholder="Nama Anda" required="required" />
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input type="email" class="form-control" placeholder="Email Anda" required="required" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Subjek" required="required" />
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" rows="6" placeholder="Pesan" required="required" ></textarea>
                                    </div>
                                    <div><button class="btn" type="submit">Kirim Pesan</button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
