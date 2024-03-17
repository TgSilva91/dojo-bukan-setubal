@extends('layouts.app')

@section('title', $title)

@section('content')
    <div class="container-fluid pt-5 px-0">
        <div class="banner-bg banner">

            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 banner-title">
                            <h1>
                                Dojo Bukan Setubal
                            </h1>
                        </div>
                        <div class="col-sm-6 banner-logo">
                            <img src="{{ asset('img/Logo-Bukan.png') }}" alt="Logo Bukan School Of Krav Maga">
                        </div>
                    </div>
                </div>
            </div>

            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('img/carousel/1.png') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/carousel/2.png') }}" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>



        </div>
    </div>
@endsection
