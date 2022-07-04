@extends('layouts.front')

@section('title')
{{$category->name}}
@endsection

@section('content')
<div class="latest-products">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>{{$category->name}}</h2>
          </div>
        </div>
        @foreach ($articles as $art)
        <div class="col-md-4">
          <div class="product-item">
            <a href="{{url('category/'.$category->slug.'/'.$art->slug)}}"><img src=" {{asset('assets/uploads/articles/'.$art->image)}}" class="w-100" alt="Article image"></a>
            <div class="down-content">
              <a href="#"><h4>{{$art->name}}</h4></a>
              <h6>{{$art->original_price}} FCFA</h6>
              <p>{{$art->description}}</p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
</div>
@endsection


{{-- {{url('category/'.$category->slug.'/'.$art->slug)}} --}}
