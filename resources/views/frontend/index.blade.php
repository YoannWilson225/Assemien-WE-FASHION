@extends('layouts.front')

@section('title')
WE FASHION
@endsection
@section('content')
    @include('layouts.inc.slider')
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
    <div class="latest-products">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="section-heading">
                <h2>NOUVEAUTES</h2>
                <a href="products.html">Tous les articles  <i class="fa fa-angle-right"></i></a>
              </div>
            </div>
            @foreach ($featured_articles as $art)
            <div class="col-md-4">
              <div class="product-item">
                <a href="#"><img src=" {{asset('assets/uploads/articles/'.$art->image)}} " alt="Article image"></a>
                <div class="down-content">
                  <a href="#"><h4>{{$art->name}}</h4></a>
                  <h6>{{$art->original_price}} FCFA</h6>
                  <p>{{$art->description}}</p>
                </div>
              </div>
            </div>
            @endforeach
            <div class="col-md-12">
                <ul class="pages">
                  <li>{{$featured_articles->links()}}</li>
                </ul>
            </div> 
          </div>
        </div>
    </div>
@endsection
