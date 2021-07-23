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
 <div class="container">
  
    <br><br>
    <h2>DELIVERY METHOD</h2>
  
    <hr>
  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
     

        {{--  Coupon start --}}
   <div class="coupon_fr" >

    <div class="coupon_in">
      
  
<div class="row">
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample1">
      <div class="card card-body">
        <form method="post" action="">
          {{csrf_field()}}
          <input type="text" name="coupon_code" class="form-control" placeholder="CODES ARE CASE-SENSITIVE">
          <p style="font-size: 12px; color: grey;">Casing & hyphens need to be exact</p>
          
          <button type="submit" class="btn btn-dark btn-lg btn-block">Apply <i class="fa fa-arrow-right" style="margin-left: 35px;"></i></button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
</div>
        <h4 style="font-weight: 600; font-size: 22px; margin-left: 9px;">ORDER SUMMARY:</h4>

  {{--  Coupon end --}}
      <div class="cart_needhelp">
      <h4>NEED HELP?</h4>
     
      <p><a href="{{route('contacts.create')}}" style="color: #000;">Contact Us</a></p>
      </div>
        <div class="cart_sidebar2">
    <h4>ACCEPTED PAYMENT METHODS</h4>
    <img src="https://www.adidas.com/on/demandware.static/-/Sites-adidas-US-Library/en_US/dw88ec105e/us_payment_methods.png" width="300px">

  
    </div>
    </div>
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">YOUR ADDRESS</h4>

      @if(count($errors) > 0)
          <div class="alert alert-danger">
            <ul>
              @foreach($errors->all() as $error)
                  <li>{{$error}}</li>
              @endforeach
            </ul>
          </div>
      @endif

      <form id="payment-form" action="{{route('checkout.store')}}" method="post">
        {{csrf_field()}}
        <div class="row">
        
        </div>

        <div class="mb-3">
          <label for="username">Name</label>
         
            <input type="text" name="name" class="form-control" id="username" placeholder="" >
            <div class="invalid-feedback" style="width: 100%;">
              Your username is required.
            </div>
          
        </div>

        <div class="mb-3">
          <label for="email">Email <span class="text-muted">(Optional)</span></label>
          <input type="email" name="email" class="form-control" id="email" value="{{ auth()->user()->email }}" >
          <div class="invalid-feedback">
            Please enter a valid email address for shipping updates.
          </div>
        </div>

        <div class="mb-3">
          <label for="address">Address</label>
          <input type="text" name="address" class="form-control" id="address" placeholder="1234 Main St" >
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div>

      

        <div class="row">
          
          <div class="col-md-4 mb-3">
            <label for="country">State</label>
                <input type="text" name="province" class="form-control">
            <div class="invalid-feedback">
              Please select a valid state.
            </div>
          </div>
          <div class="col-md-5 mb-3">
            <label for="country">City</label>
                <input type="text" name="city" class="form-control">
            <div class="invalid-feedback">
              Please select a valid city.
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="zip">Zip</label>
            <input type="text" name="postalcode" class="form-control" id="zip" placeholder="" >
            <div class="invalid-feedback">
              Zip code required.
            </div>
          </div>
        </div>
  {{--       <hr class="mb-4">
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="same-address">
          <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
        </div>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="save-info">
          <label class="custom-control-label" for="save-info">Save this information for next time</label>
        </div> --}}
        <hr class="mb-4">

        <h4 class="mb-3">Payment</h4>

     {{--    <div class="d-block my-3">
          <div class="custom-control custom-radio">
            <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
            <label class="custom-control-label" for="credit">Credit card</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="debit">Debit card</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="paypal">PayPal</label>
          </div>
        </div> --}}
        <div class="row">
          <div class="col-md-12 mb-3">
            <label for="cc-name">Name on card</label>
            <input type="text" class="form-control" name="name_on_card" id="cc-name" placeholder="" >
            <small class="text-muted">Full name as displayed on card</small>
            <div class="invalid-feedback">
              Name on card is required
            </div>

          </div>

      <div class="col-md-12">
        <label for="card-element">
      Credit or debit card
    </label>
    <div id="card-element">
      <!-- A Stripe Element will be inserted here. -->
    </div>

    <!-- Used to display form errors. -->
    <div id="card-errors" role="alert"></div>
      </div>
        
        </div>
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit" id="complete-order">Checkout</button>
      </form>
    </div>
  </div>
  @endsection