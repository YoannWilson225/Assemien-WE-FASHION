@extends('layouts.admin')


@section('content')

        <div class="card">
            <div class="card-header">
                <h1>Articles page</h1>
                <br>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Categaory</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Prix</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $articles as $item)

                        <tr>
                            <td> {{$item->id}} </td>
                            <td> {{$item->category->name}} </td>
                            <td> {{$item->name}} </td>
                            <td> {{$item->description}} </td>
                            <td> {{$item->original_price}} </td>
                            <td>
                                <img src=" {{asset('assets/uploads/articles/'.$item->image)}}" class="cate-image" alt="image here">
                            </td>
                            <td>
                               <a href="{{url('edit-article/'.$item->id)}}" class="btn btn-primary btn-5m">Edit</a>
                               <a href="{{url('delete-article/'.$item->id)}}"class="btn btn-danger btn-5m">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
@endsection
