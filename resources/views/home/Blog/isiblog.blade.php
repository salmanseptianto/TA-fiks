@extends('home.templates.index')

@section('page-content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ url('foto/home2.jpg') }}');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate mb-5 text-center">
                    <p class="breadcrumbs mb-0"><span class="mr-2">Home <i
                                class="fa fa-chevron-right"></i></span><span>Detail Blog <i
                                class="fa fa-chevron-right"></i></span></p>
                    <h2 class="mb-0 bread">Detail Blog</h2>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 mb-5 ftco-animate">
                    <a href="{{ asset('foto/' . $blog->foto) }}" class="image-popup prod-img-bg"><img
                            src="{{ asset('foto/' . $blog->foto) }}" class="img-fluid" alt="Colorlib Template"></a>
                </div>
                <div class="col-lg-9 product-details pl-md-6 ftco-animate">
                    <h1 class="text-bold text-uppercase text-">{{ $blog->judul }}</h1>
                    <p>{!! $blog->tanggal !!} </p>
                    <hr>
                    <p>{!! $blog->deskripsi !!} </p>
                </div>
            </div>
        </div>
    </section>
@endsection
