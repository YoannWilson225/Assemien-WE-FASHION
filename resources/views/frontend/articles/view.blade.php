@extends('layouts.front')

@section('title', $articles->name)

@section('content')
<section class="section" id="product">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
            <div class="left-images">
                <img src="{{asset ('assets/uploads/articles/'.$articles->image)}}" alt="" >
            </div>
        </div>
        <div class="col-lg-4">
            <div class="right-content">
                <h4>{{$articles->name}}</h4>
                <span class="price">{{$articles->original_price}} FCFA</span>
                <ul class="stars">
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                </ul>
                <div class="quote">
                    <i class="fa fa-quote-left"></i><p>{{$articles->description}}</p>
                </div>
                <div class="quantity-content">
                    <div class="right-content">
                        <div class="sizes mt-5">
                            <h6 class="text-uppercase">Size</h6> <label class="radio"> <input type="radio" name="size" value="S" checked> <span>S</span> </label> <label class="radio"> <input type="radio" name="size" value="M"> <span>M</span> </label> <label class="radio"> <input type="radio" name="size" value="L"> <span>L</span> </label> <label class="radio"> <input type="radio" name="size" value="XL"> <span>XL</span> </label> <label class="radio"> <input type="radio" name="size" value="XXL"> <span>XXL</span> </label>
                        </div>
                    </div>
                </div>
                <div class="total">
                    <div class="main-border-button"><a href="#">Acheter</a></div>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>
@endsection

