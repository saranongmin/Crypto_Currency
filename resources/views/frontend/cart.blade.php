@extends('frontend.layouts.master')

@section('title', 'Crypto Compound')
@section('content')
<main>
    <!-- ======= Hero Section ======= -->
 <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-8">
          <h1>Wallets and exchanges</h1>
        <p>*Purchase, sell, and manage HBAR cryptocurrency using the known wallets and exchanges found below.
</p>
         <a href="#" class="get-started-btn">Crypto Compound Overview</a> 
        </div>

      </div>
    </div>
 </section>
 <!-- End Hero -->
     <div class="container" style="margin-top: 80px">
        
        @if(session()->has('success_msg'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session()->get('success_msg') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        @endif
        @if(session()->has('alert_msg'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{ session()->get('alert_msg') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        @endif
        @if(count($errors) > 0)
            @foreach($errors0>all() as $error)
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ $error }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
            @endforeach
        @endif
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <br>
                @if(\Cart::getTotalQuantity()>0)
                    <h4>{{ \Cart::getTotalQuantity()}} Course(s) In Your Cart</h4><br>
                @else
                    <h4>No Course(s) In Your Cart</h4><br>
                    <a href="{{route('shop')}}" class="btn btn-success">Continue Shopping</a>
                @endif

                @foreach($cartCollection as $item)
                    <div class="row">
                        
                        <div class="col-lg-5">
                            <p>
                                <b><a href="/shop/{{ $item->attributes->slug }}">{{ $item->name }}</a></b><br>
                                <b>Price: </b>${{ $item->price }}<br>
                                <b>Sub Total: </b>${{ \Cart::get($item->id)->getPriceSum() }}<br>
                                {{--                                <b>With Discount: </b>${{ \Cart::get($item->id)->getPriceSumWithConditions() }}--}}
                            </p>
                        </div>
                        <div class="col-lg-4">
                            <div class="row">
                                <form action="{{ route('cart.update') }}" method="POST">
                                    {{ csrf_field() }}
                                    <div class="form-group row">
                                        <input type="hidden" value="{{ $item->id}}" id="id" name="id">
            <input type="number" class="form-control form-control-sm" value="{{ $item->quantity }}"
                 id="quantity" name="quantity" style="width: 50px; margin-right: 10px;">
        <button class="btn btn-primary" style="width: 50px; margin-right: 10px;"><i class="fa fa-edit"></i></button>
                                    </div>
                                </form>
            
                            </div>
                        </div>
                        <div class="col-lg-4">
                             <form action="{{ route('cart.remove') }}" method="POST">
                          {{ csrf_field() }}
                Remove Item Button
 <input type="hidden" value="{{ $item->id }}" id="id" name="id">
            <button class="btn btn-danger" style="width: 50px; margin-right: 50px;"><i class="fa fa-trash"></i></button>
                                </form>
                        </div>
                    </div>
                    <hr>
                @endforeach
                @if(count($cartCollection)>0)
                    <form action="{{ route('cart.clear') }}" method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" value="{{ $item->id }}" id="id" name="id">
                        <button class="btn btn-success">Clear Cart</button>
                    </form>
                @endif
            </div>
            @if(count($cartCollection)>0)
                <div class="col-lg-5">
                    <div class="card">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><b>Total: </b>${{ \Cart::getTotal() }}</li>
                        </ul>
                    </div>
                    <br><a href="{{route('shop')}}" class="btn btn-dark">Continue Shopping</a>
                    <a href="{{route('checkout')}}" class="btn btn-success">Proceed To Checkout</a>
                </div>
            @endif
        </div>
        <br><br>
    </div>
</main>
@endsection