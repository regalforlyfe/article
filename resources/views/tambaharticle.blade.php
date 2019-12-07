@extends('base')
@section('content')

 <!-- Modal -->
 <main class="py-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <span>Add New Category </span>
                    </div>
                    <div class="card-body">
                        <form action="{{route('article.store')}}" method="POST">
                            @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Category Name</label>
                                    <select name="name_category" class="form-control" id="exampleInputEmail1">
                                        @foreach($category as $value)
                                        <option value="{{$value->id_category}}">{{$value->name_category}}</option>
                                        @endforeach
                                    </select>
                                    </br>
                                    <label for="exampleInputEmail1">Article Name</label>
                                    <input type="text" name="name_article" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama article baru">
                                    </br>
                                    <label for="exampleInputEmail1">Content</label>
                                    <textarea rows="3" type="text" name="konten" class="form-control" placeholder="Masukan isi article"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection