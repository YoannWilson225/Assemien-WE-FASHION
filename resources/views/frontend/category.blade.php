@extends('layouts.front')

@section('title')
WE FASHION
@endsection

@section('content')
<div class="page-heading products-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="text-content">
            <h4>nouveautés</h4>
            <h2>CATEGORIE</h2>
          </div>
        </div>
      </div>
    </div>
</div>
<div class="latest-products">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>CATEGORIE</h2>
          </div>
        </div>
        @foreach ($category as $cate)
        <div class="col-md-4">
          <div class="product-item">
            <a href="{{url('view_category/'.$cate->slug)}}"><img src=" {{asset('assets/uploads/category/'.$cate->image)}} "</a>
            <div class="down-content">
              <a href="{{url('view_category/'.$cate->slug)}}"><h4>{{$cate->name}}</h4></a>
              <p>{{$cate->description}}</p>
            </div>
          </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
