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
 </section><!-- End Hero -->
    <div class="container" style="margin-top: 80px">
        
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-7">
                        <h4>Available Courses In Our Classroom</h4>
                    </div>
                </div>
                <hr>
                <div class="row">
                    @foreach($products as $pro)
                        <div class="col-lg-3">
                            <div class="card" style="margin-bottom: 20px; height: auto;">

                                <div class="card-body">
                                    <a href=""><h6 class="card-title">{{ $pro->name }}</h6></a>
                                    <p>{{$pro->description}}</p>
                                    <p>${{ $pro->price }}</p>
                                    <form action="{{ route('cart.store') }}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" value="{{ $pro->id }}" id="id" name="id">
                                        <input type="hidden" value="{{ $pro->name }}" id="name" name="name">
                                        <input type="hidden" value="{{ $pro->price }}" id="price" name="price">
                                        <input type="hidden" value="{{ $pro->image_path }}" id="img" name="img">
                                        <input type="hidden" value="{{ $pro->slug }}" id="slug" name="slug">
                                        <input type="hidden" value="1" id="quantity" name="quantity">
                                        <div class="card-footer" style="background-color: white;">
                                              <div class="row">
                                      <button class="btn btn btn-success" class="tooltip-test" title="add to cart">
                                  <i class="fa fa-shopping-cart"></i> Add to cart
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</main>
@endsection