@extends('layouts.app')
@section('content')


<div class="container">
    <div class="card shadow product_data">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 border-right">
                    <img class="w-100" style="height: 350px" src="{{asset('storage/'.$product->image)}}" alt="">
                </div>
                <div class="col-md-8">
                    <h2 class="mb-0">
                        {{$product->title}}
                        <label style="font-size:16px;" class="float-end badge bg-danger trending_tag">{{$product->price == '1' ? 'Trending':''}}</label>

                    </h2>
                    <hr>

                    <label class="me-3">Original Price : <s>Rs {{$product->price}}</s></label>
                    <label class="fw-bold">Selling Price :Rs {{$product->price}}</label>
                    <p class="mt-3">
                        {!! Str::limit($product->description, 60) !!}
                    </p>
                    <hr>

                        <label class="badge bg-success">In Stock</label>
                   
                    <div class="row mt-2">
                        <div class="col-md-2">
                            <input type="hidden" value="{{ $product->id }}" class="prod_id">
                            <label for="Quantity">Quantity</label>
                            <div class="input-group text-center mb-3">
                                <button class="input-group-text decrement-btn">-</button>
                                <input type="text" value="1" class="form-control qty-input" name="quantity">
                                <button class="input-group-text increment-btn">+</button>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <br>
                            <button type="button" class="btn btn-success me-3 float-start">Add To Wishlist <i class="bi bi-heart"></i></button>
                            <button type="button" class="addToCartBtn btn btn-primary me-3 float-start">Add To Cart <i class="bi bi-cart"></i></button>
                        </div>
                    </div>


                </div>
            </div>
            <div class="col-md-12">
                <hr>
                <h3 class="fw-bold">Description :</h3>
                <p class="mt-3">{!!$product->description!!}</p>
            </div>
        </div>
        
    </div>
    
</div>
<script src="{{asset('frontend/js/jquery-3.6.1.min.js')}}"></script>
@endsection
