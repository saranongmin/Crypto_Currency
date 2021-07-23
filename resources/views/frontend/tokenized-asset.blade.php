@extends('frontend.layouts.master')

@section('title', 'Crypto Compound')

@section('content')

 <main id="main">
<!-- ======= Hero Section ======= -->
 <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-8">
          <h1>Asset tokenization on Crypto</h1>
        <p>Native fungible and non-fungible assets on Hedera with performance, security, stability, and low, predictable fees.</p>
         <a href="#" class="get-started-btn">Start Building</a> 
         <a href="{{route('contacts.create')}}" class="get-started-btn">Contact Us</a>
        </div>

      </div>
    </div>
 </section><!-- End Hero -->
 <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 order-2 order-lg-1">
            <div class="icon-box mt-5 mt-lg-0">
              <h4>Digital assets like never before</h4>
              <p>Public distributed ledgers that offer asset tokenization often carry the burden of expensive and unpredictable fees, slow transaction speeds, and mutable complexity in smart contract configuration.</p>
            </div>            
          </div>
    <div class = "vertical" style="

            border-left: 3px solid black;
            height: 900px;
            position:absolute;
            left: 35%;
            "></div>

          <div class="col-lg-4 order-2 order-lg-1">
            <div class="icon-box mt-5 mt-lg-0">
            <img src="{{asset('ui/frontend')}}/img/icons/asset.png" style="width:120px;">
<br><br>
              <h4>HIGHLY CONFIGURABLE</h4>
              <p>Both hbars and Hedera Token Service issued tokens take seconds to settle, on par with the VISA network — this makes hbars, stablecoins, and other cryptocurrency transactions a viable option for commerce and finance.

</p>
<img src="{{asset('ui/frontend')}}/img/icons/asset2.png" style="width:120px;"><br><br>
              <h4>LOW AND PREDICTABLE FEES</h4>
              <p>Both hbars and Hedera Token Service issued tokens take seconds to settle, on par with the VISA network — this makes hbars, stablecoins, and other cryptocurrency transactions a viable option for commerce and finance.

</p>
<img src="{{asset('ui/frontend')}}/img/icons/asset3.png" style="width:120px;"><br><br>
              <h4>STRONG AND STABLE GOVERNANCE</h4>
              <p>Both hbars and Hedera Token Service issued tokens take seconds to settle, on par with the VISA network — this makes hbars, stablecoins, and other cryptocurrency transactions a viable option for commerce and finance.

</p>
            </div>
          </div>
          <div class="image col-lg-4 order-1 order-lg-2">
          <img src="{{asset('ui/frontend')}}/img/features.jpg">
        </div>
        </div>

      </div>
    </section><!-- End Features Section -->

     <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container">
        <div class="text-center title">
          <h3>You are in good company</h3>
</div>
        <div class="row no-gutters clients-wrap clearfix wow fadeInUp">
          @foreach($partners as $partner)
          <div class="col-lg-2 col-md-4 col-xs-6">
            <div class="client-logo">
              @if(file_exists(storage_path().'/app/public/partners/'.$partner->image ) && (!is_null($partner->image)))
                    <img src="{{ asset('storage/partners/'.$partner->image) }}" alt="img" class="card-img-top">
                                    @else
                                     <img src="{{ asset('/default-avatar.png') }}">
                                    @endif
            </div>
          </div>

        @endforeach

        

         

          

        </div>

      </div>
    </section><!-- End Clients Section -->

     <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="text-center title">
          <h3>eftpos</h3>
          
        </div>

        <div class="row counters position-relative">

          <div class="col-lg-12 text-center">
           
            <p>"The Hedera Token Service will provide developers and businesses unrivalled new ways to tokenize and issue assets of all types and getting the superior benefits of the underlying hashgraph consensus. We are actively looking at ways of leveraging the Token Service to implement our digital strategy."
</p>
<?php echo'<br><br>'; ?>
<p>ROB ALLEN<?php echo'<br><br>'; ?>
ENTREPRENEUR IN RESIDENCE</p>
          </div>

         

        </div>

      </div>
    </section><!-- End Counts Section -->
<div class="Section" id="proxystaking" 
style="background-color:#fff;"><div class="proxy">
  <div class="proxy-wrapper">
    <div class="proxy-left">
      <div class="proxy-left-graphic">
      <img src="{{asset('ui/frontend')}}/img/1.jpg" alt="Hbar Proxy Mobile V2">
      </div>
      <div class="proxy-content">
        <h2 class="size--l light proxy-content-title">
          The Hedera Token Service

        </h2>
        <span class="proxy-content-body">
<p>The Hedera Token Service is a network service built on the enterprise-grade Hedera public network. HTS allows for the creation and management of native fungible and non-fungible tokens with high performance, low fees, and optional compliance configurations. Applications and protocols are able to define their own unique token, presenting a new opportunity to establish true digital ownership and efficient markets.

</p>        </span>
        <a href="#" class="get-started-btn">Learn More</a>
               
              </div>
    </div>
    <div class="proxy-right">
      <div class="proxy-right-graphic">
                        <img src="{{asset('ui/frontend')}}/img/service3.png" alt="Hbar  Proxy  Hero 2X  Opacity  Right  Updated V2" style="height: 100%;">
      </div>
    </div>
  </div>

</div>
</div>

  <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 text-center text-lg-start">
            <h3>THE FUTURE OF TOKENIZATION</h3>
           <p>Learn more about tokenizing assets natively on Hedera Hashgraph with the Hedera Token Service</p>

          </div>
          <div class="col-lg-6 cta-btn-container text-center">
            <a class="cta-btn" href="#" target="_blank">Learn More</a>
            <a class="cta-btn" href="{{route('contact')}}" target="_blank">Contact Us</a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->

</main>
@endsection