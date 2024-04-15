@extends('layouts.app')

@section('title', $title)

@section('content')
    <div class="section-container" id="main">
        <div class="container" style="padding-top: 55px;">
            <div class="row align-items-center" style="height: 150px">
                <div class="col-sm-12 text-center pt-2">
                    <img src="{{ asset('img/Logo-Bukan.png') }}" alt="Logo Bukan School Of Krav Maga">
                </div>
            </div>
        </div>
        <div class="container-fluid pt-5 px-0">
            <div class="banner-bg banner">

                <div class="overlay">
                    <div class="container container-overlay">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="container" style="height: 100%;">
                                    <div class="row" style="height: 50%">
                                        <div class="col-sm-12 text-right banner-title title-dojo">
                                            <h1 class="nowrap">Dojo Bukan</h1>
                                        </div>
                                    </div>
                                    <div class="row align-itens-top" style="height: 50%">
                                        <div class="col-sm-12 text-right banner-title">
                                            <h1 style="font-size: 118px">SETÚBAL</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="container" style="height: 100%;">
                                    <div class="row align-itens-center" style="height: 100%;">
                                        <div class="col-sm-12 title-logo">
                                            {{-- <img src="{{ asset('img/Logo-Bukan-White.png') }}" alt=""> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div id="carousel" class="carousel slide" data-bs-ride="carousel">
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
    </div>

    <div class="section-container" id="schedule">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h3>Hórario das aulas</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="container schedule-container">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Segunda</th>
                                    <th>Terça</th>
                                    <th>Quarta</th>
                                    <th>Quinta</th>
                                    <th>Sexta</th>
                                    <th>Sábado</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>9h30 - 10h30</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>Crianças</td>
                                </tr>
                                <tr>
                                    <td>10h35 - 11h35</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>Adultos</td>
                                </tr>
                                <tr>
                                    <td>11h40 - 12h40</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>Adultos</td>
                                </tr>
                                <tr>
                                    <td>16h20 - 17h20</td>
                                    <td></td>
                                    <td>Adultos</td>
                                    <td>Adultos</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>17h25 - 18h25</td>
                                    <td></td>
                                    <td>Adultos</td>
                                    <td>Adultos</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>18h30 - 19h30</td>
                                    <td>Crianças</td>
                                    <td>Crianças</td>
                                    <td>Crianças</td>
                                    <td>Crianças</td>
                                    <td>Crianças</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>19h35 - 20h35</td>
                                    <td>Adultos</td>
                                    <td>Adultos</td>
                                    <td>Adultos</td>
                                    <td>Adultos</td>
                                    <td>Adultos</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>20h40 - 21h40</td>
                                    <td>Adultos</td>
                                    <td>Adultos</td>
                                    <td>Adultos</td>
                                    <td>Adultos</td>
                                    <td>Adultos</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-container" id="contact">

        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div>
                        <h2>Contactos</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <h3>Fale Connosco</h3>
                    <form>
                        <div class="mb-3 row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="name">Nome</label>
                                    <input type="text" class="form-control" id="name" placeholder="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-group">
                                <label for="subject">Assunto</label>
                                <input type="text" class="form-control" id="subject" placeholder="">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-group">
                                <label for="message">Mensagem</label>
                                <textarea class="form-control" id="message" placeholder=""></textarea>
                            </div>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <div class="col-sm-6"></div>


                <div class="row"></div>

                <div class="row"></div>

            </div>


        </div>


    @endsection
