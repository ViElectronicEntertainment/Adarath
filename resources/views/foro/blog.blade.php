<<<<<<< HEAD
<?php
use Illuminate\Support\Facades\Auth;

// Obtiene el nombre del Usuario Autenticado
$user_name = Auth::user()->name; ?>

@extends('layouts.app')
@section('content')
<body class="template-page sidebar-collapse">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="{{ url('/home') }}" rel="tooltip" title="Tablero PAMI" data-placement="bottom">
                    PAMI - Blog
                </a>
                <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="{{ asset('images/blurred-image-1.jpg') }}">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <div class="dropdown">
                            <a href="" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" id="navbarDropdownMenuLink1"><i class="fa fa-user-o" aria-hidden="true"></i> <?php echo "$user_name" ?></a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink1">
                                <a class="dropdown-item" href="{{ url('/home') }}" rel="tooltip" title="Tablero PAMI" data-placement="bottom">
                                    <i class="fa fa-tachometer" aria-hidden="true"></i> Tablero
                                </a>
                                <a class="dropdown-item" href="{{ url('/profile') }}" rel="tooltip" title="Ir a mi Perfil PAMI" data-placement="bottom">
                                    <i class="fa fa-user" aria-hidden="true"></i> Mi Perfil
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}" rel="tooltip" title="Salir de PAMI" data-placement="bottom" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <i class="fa fa-power-off mr-1" aria-hidden="true"></i>Salir
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form></a>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="wrapper">
        <div class="page-header">
            <div class="page-header-image" data-parallax="true" style="background-image: url('{{ asset('images/scarlettpami.jpg') }}');">
            </div>
        </div>
        <!--Blog-->
        <div class="section">
            <div class="container-fluid">
                <h3 class="title text-center">Blog</h3>
                <br>
                <div class="row">
                    @foreach($posts as $post)
                    <div class="col-md-4">
                        <div class="card card-plain card-blog">
                            <div class="card-image">
                                <a href="{{ route('post', $post->slug) }}">
                                    <img class="img rounded img-raised" src="{{ $post->file }}">
                                </a>
                            </div>
                            <div class="card-body">
                                <h6 class="category text-info">{{ $post->slug }}</h6>
                                <h4 class="card-title">
                                    <a href="{{ route('post', $post->slug) }}">{{ $post->name }}</a>
                                </h4>
                                <p class="card-description">
                                    {{$post->body}}
                                    <a href="{{ route('post', $post->slug) }}"> Leer Más </a>
                                </p>
                                <div class="author">
                                        <img src="{{ asset('images/sergioveloza.jpg') }}" width="30px" height="30px" class="rounded-circle img-raised">
                                        <span>{{$post->user_id}}</span>
                                </div>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <nav aria-label="Page navigation">
                    <div class="mx-auto" style="width: 200px;">
                        <ul class="pagination pagination-primary">
                            <li class="page-item active">
                                {{ $posts->render() }}
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <footer class="footer">
            <div class="container">
                <nav>
                    <ul>
                        <li>
                            <a href="https://github.com/ViElectronicEntertainment/PAMI">PAMI 0.0.1</a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>, Diseñado y Programado con
                    <i class="fa fa-heart" style="color:red;"></i> por
                    <a href="http://www.blinteruniverse.com" target="_blank">Blinter Universe</a>
                </div>
            </div>
        </footer>
    </div>
</body>
@endsection
=======
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
>>>>>>> master