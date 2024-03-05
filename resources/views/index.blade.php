@extends('layouts.base')

@section('title', $title)

@section('content')
    <div class="container-fluid main-bg" style="height: 100vh;">
        <div class="row">
            <div class="col-md-7">
                <div class="container-md">
                    <div class="row">
                        <div class="col">
                            <div style="height:33vh;"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="signin-logo">
                                <img src="{{ asset('img/Logo-Bukan.png') }}" alt="Logo Bukan School Of Krav Maga"
                                    class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-5">
                <div class="row">
                    <div class="col">
                        <div style="height:15vh;"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="container-login">
                            <div class="container-md" style="height: 100%;">

                                <div class="row">
                                    <div class="col">
                                        <div class="login-form-title">
                                            <h2>Entrar</h2>
                                        </div>
                                            <div class="text-success text-center">
                                                <p>Inscrição realizada com sucesso!</p>
                                            </div>
                                        
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="login-form">
                                            <form action="" class="form" method="post">
                                                @csrf
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="E-mail">
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" class="form-control" placeholder="Palavra-passe">
                                                </div>
                                                <div class="form-group forgot">
                                                    <a href="">Esqueceste-te a palavra-passe?</a>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="submit-button">Entrar</button>
                                                </div>
                                                <div class="form-group">
                                                    <p>Ainda não estás inscrito? <a
                                                            href="">Inscrever-se</a>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="login-footer">
                                            <a href="">Horários</a>
                                            <a href="">Planos</a>
                                            <a href="">Fale conosco</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
