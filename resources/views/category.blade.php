@extends('base')
@section('content')

<!--------------------------- main ------------------------------------>
    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
                    Add New Category
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add New Category</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{route('category.store')}}" method="POST">
                            @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Category Name</label>
                                    <input type="text" name="name_category" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama kategori baru">
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            </br>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    @foreach ($category as $value)
                    <div class="card">
                        <div class="card-header">
                        <span>Id Category  </span>
                        <a href="">{{$value->id_category}}</a>
                        <span class="float-right">created at {{$value->created_at}} </span>
                        </div>

                        <div class="card-body">
                            <p>Name {{$value->name_category}}</p>
                            <form action="{{route('category.destroy',$value->id_category)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm far fa-trash-alt float-right" type="submit">Delete</button>
                            </form>
                        </div>
                        <div class="card-footer"> 
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