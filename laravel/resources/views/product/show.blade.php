@extends('layout.master')

@section('content')

    <div class="container" >
        <div class="container" style="width: 100%; display: flex; flex-direction: column; align-items: center; margin-bottom: 100px">
            <div class="card" style="width: 18rem; border: 2px solid deepskyblue; background-color: honeydew; ">
                <img src="/images/products/{{ $product->image }}" class="card-img-top" alt="...">
                <div class="card-body" style="background-color: #53c5ec;">
                    <h5 class="card-title">{{$product->title}}</h5>
                    <p class="card-text">{{$product->text}}</p>
                    <a href="{{ route('product.index') }}" class="btn btn-primary">Вернуться</a>
                </div>
            </div>
        </div>
    </div>

@endsection
