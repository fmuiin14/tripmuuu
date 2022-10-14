@extends('layouts.app')

@section('title')
    Pergi Liburan Dengan Jaminan Kepuasan Pelanggan — tripMuuu
@endsection

@section('content')
    <!-- header start -->
    <header class="text-center">
        <h1>Kunjungi Tempat Indah Di Dunia <br> Hanya Dari Perangkat Anda</h1>
        <p class="mt-3">Dapatkan pengalaman liburan terbaik <br> bersama dengan rekan kepercayaan kami</p>
        <a href="#popular" class="btn btn-get-started px-4 mt-4">Mulai Mencari</a>
    </header>
    <!-- header end -->

    <!-- main start -->
    <main>
        <!-- stats start -->
        <div class="container">
            <section class="section-stats row justify-content-center" id="stats">
                <div class="col-3 col-md-2 stats-detail">
                    <h2>20rb</h2>
                    <p>Member</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>12</h2>
                    <p>Negara</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>3rb</h2>
                    <p>Hotel</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>120</h2>
                    <p>Rekanan</p>
                </div>
            </section>
        </div>
        <!-- stats end -->

        <!-- populer start -->
        <section class="section-popular" id="popular">
            <div class="container">
                <div class="row">
                    <div class="col text-center section-popular-heading">
                        <h2>Wisata Populer</h2>
                        <p>Tempat yang belum pernah
                            <br>
                            kamu kunjungi sebelumnya
                        </p>
                    </div>
                </div>
            </div>
        </section>


        <section class="section-popular-content" id="popularContent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    @foreach ($items as $item)

                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="card-travel text-center d-flex flex-column"
                        style="background-image: url('{{ $item->galleries->count() ? Storage::url($item->galleries->first()->image) : '' }}');">
                                <div class="travel-country">{{$item->location}}</div>
                                <div class="travel-location">{{$item->title}}</div>
                                <div class="travel-button mt-auto">
                                    <a href="{{ route('detail', $item->slug) }}" class="btn btn-travel-details px-4">
                                        Lihat Detail
                                    </a>
                                </div>
                            </div>
                        </div>

                    @endforeach
                </div>
            </div>
        </section>

        <section class="section-networks">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h2>Jaringan Kami</h2>
                        <p>
                            Perusahaan yang pernah mempercayakan
                            <br>
                            liburannya bersama kami
                        </p>
                    </div>
                    <div class="col-md-2 text-center">
                        <img src="frontend/images/partner1.png" alt="Logo Partner" class="img-partner">
                    </div>
                    <div class="col-md-2 text-center">
                        <img src="frontend/images/partner2.jpg" alt="Logo Partner" class="img-partner">
                    </div>
                    <div class="col-md-2 text-center">
                        <img src="frontend/images/partner3.png" alt="Logo Partner" class="img-partner">
                    </div>
                    <div class="col-md-2 text-center">
                        <img src="frontend/images/partner4.png" alt="Logo Partner" class="img-partner">
                    </div>
                </div>
            </div>
        </section>

        <section class="section-testimonial-heading" id="testimonialHeading">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h2>Kata Mereka</h2>
                        <p>
                            Testimoni yang di berikan
                            <br>
                            setelah menggunakan jasa kami
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section-testimonial-content" id="testimonialContent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="frontend/images/testi1.jpg" alt="User" class="mb-4 rounded-circle">
                                <h3 class="mb-4">Fathul Muiin</h3>
                                <p class="testimonial">
                                    " It was glarious and I could not stop to say wohooo for every single moment.
                                    Dankeeeeee "
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Ubud
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="frontend/images/testi2.jpg" alt="User" class="mb-4 rounded-circle">
                                <h3 class="mb-4">Dejay Soda</h3>
                                <p class="testimonial">
                                    " The trip was amazing and I saw something beautiful in that island that makes me
                                    want to learn more "
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Nusa Penida
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="frontend/images/testi3.jpg" alt="User" class="mb-4 rounded-circle">
                                <h3 class="mb-4">Pevita Pearce</h3>
                                <p class="testimonial">
                                    " I loved it when the waves was shaking harder -- I was scared too "
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Karimun Jawa
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">
                            Saya Butuh Bantuan
                        </a>
                    <a href="{{ route('register') }}" class="btn btn-get-started px-4 mt-4 mx-1">
                        Mulai Mencari
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- main end -->
@endsection
