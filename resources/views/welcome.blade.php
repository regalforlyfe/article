@extends('base')
@section('content')

<main class="py-4">
    <div class="content">
        <div class="title">Welcome</div>
    </div>
    </br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                    <div class="card content">
                        <h5><a>Saya Ahmad Rifal</a></h5>
                        <h5><a>Dari Jurusan Komputer dan Sistem Informasi</a></h5>
                        <h5><a>Ini adalah CRUD sederhana yang saya buat</a></h5>
                    </div>
                    </br>
                    <div class="content">
                        <h1><a class="navbar-brand" href="{{route('article.index')}}">Mari kita mulai !</a></h1>
                        
                    </div>
            </div>
        </div>    
    </div>
</main>

@endsection