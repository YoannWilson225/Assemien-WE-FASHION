@extends('layouts.admin')


@section('content')

        <div class="card">
            <div class="card-header">
                <h4>Edit/Update Articles</h4>
            </div>
            <div class="card-body">
                <form action=" {{url ('update-article/'.$articles->id)}} " method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <select class="form-select">
                                <option value="">{{$articles->category->name}}</option>
                              </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Name</label>
                            <input type="text" class="form-control" value="{{$articles->name}}" name="name">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Slug</label>
                            <input type="text" class="form-control" value="{{$articles->slug}}" name="slug">
                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="">Description</label>
                            <textarea name="description" rows="3" class="form-control">{{$articles->description}}</textarea>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Original Price</label>
                            <input type="number" value="{{$articles->original_price}}" name="original_price">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Status</label>
                            <input type="checkbox" name="status" {{ $articles->status == "1" ? 'checked':'' }}>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">trending</label>
                            <input type="checkbox" name="trending" {{ $articles->trending == "1" ? 'checked':'' }}>
                        </div>

                        @if ($articles->image)
                            <img src={{ asset('assets/uploads/articles/'.$articles->image)}} class="img-responsive" alt="Article image">
                        @endif
                        <div class="col-md-12 mb-3">
                            <input type="file" name="image" class="form-control">
                        </div>
                        <div class="col-md-12 mb-3">
                           <button type="submit" class="btn btn-primary">Modifier</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
@endsection
