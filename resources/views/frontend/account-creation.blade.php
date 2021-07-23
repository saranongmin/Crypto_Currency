@extends('frontend.layouts.master')

@section('title', 'Crypto Compound')

@section('content')

 <main id="main">
<!-- ======= Hero Section ======= -->
 <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-8">
          <h1>Wallets and exchanges</h1>
        <p>*Purchase, sell, and manage HBAR cryptocurrency using the known wallets and exchanges found below.
</p>
         <a href="#" class="get-started-btn">Crypto Compound Overview</a> 
         <a href="{{route('buying-guide')}}" class="get-started-btn">Buying Guide</a>
        </div>

      </div>
    </div>
 </section><!-- End Hero -->

 <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
          	<h4>SOFTWARE</h4>
            <div class="box recommended">

              <h3><i class="bi bi-app"></i>Ledger</h3>
                <hr>
              <h4>Nano S And X</h4>
              <p>
Ledger Nano S and X are hardware wallets that are used for the storage and transactions of popular cryptocurrencies.</p>
              <div class="btn-wrap">
                <a href="#" class="btn-buy" target="_blank">Learn More</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
          	          	<h4>SOFTWARE</h4>

            <div class="box recommended">
              <h3><i class="bi bi-app"></i>Atomic Wallet</h3>
<hr style="height:3px; border:none; color:rgb(60,90,180); background-color:rgb(60,90,180);">
              <h4>Desktop and Mobile Wallet</h4>
             <p>Atomic Wallet is a decentralized multi-currency wallet with built-in atomic swaps.</p>
              <div class="btn-wrap">
                <a href="#" class="btn-buy" target="_blank">Create Account</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
             <h4>SOFTWARE</h4>
         <div class="box recommended">
              <h3><i class="bi bi-app"></i>BRD</h3>
              <hr>
              <h4>Mobile Wallet</h4>
              <p>BRD is a simple and secure onramp to hbar. In your BRD app, a wallet is created for the hbar you own.</p>
             
              <div class="btn-wrap">
                <a href="#" class="btn-buy" target="_blank">Create Account</a>
              </div>
            </div>
          </div>

  <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
             <h4>SOFTWARE</h4>
         <div class="box recommended">
              <h3><i class="bi bi-app"></i>BRD</h3>
              <hr>
              <h4>Mobile Wallet</h4>
              <p>BRD is a simple and secure onramp to hbar. In your BRD app, a wallet is created for the hbar you own.</p>
             
              <div class="btn-wrap">
                <a href="#" class="btn-buy" target="_blank">Create Account</a>
              </div>
            </div>
          </div>


        </div>

      </div>
    </section><!-- End Pricing Section -->

    

  <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 text-center text-lg-start">
            <h3>Get Featured</h3>
           <p>Register your wallet with Hedera for a chance to be featured on this page.
</p>

          </div>
          <div class="col-lg-6 cta-btn-container text-center">
            <a class="cta-btn" href="{{route('wallets.create')}}" target="_blank">Submit Wallet</a>
            
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->
 </main>
 @endsection