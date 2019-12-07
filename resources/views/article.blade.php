@extends('base')
@section('content')

<!--------------------------- main ------------------------------------>
    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">

                    <!-- Button trigger modal -->
                    <a href="{{route('article.create')}}" class="float-right btn btn-primary btn-sm">Add New Article </a>

                </div>
            </div>
            </br>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    @foreach ($article as $value)
                    <div class="card">
                        <div class="card-header">
                            <span class="float-left">{{$value->name_article}} </span>
                            <span class="float-right">In Category <a href="{{route('category.index')}}">{{$value->name_category}}</a></span> 
                        </div>

                        <div class="card-body">
                            <p>{{$value->konten}}</p>
                            <form action="{{route('category.destroy',$value->id_category)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm far fa-trash-alt float-right" type="submit">Delete</button>
                            </form>
                        </div>
                        <div class="card-footer"> 
                            <span class="float-left">created at {{$value->created_at}} </span>
                            <span class="float-right">update at {{$value->updated_at}}</span>
                        </div>
                    </div>
                    <br>
                    @endforeach
                </div>
            </div>
            </div>
        </div>
    </main>
    <!--------------------------- main ------------------------------------>

@endsection