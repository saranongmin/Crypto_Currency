@extends('frontend.layouts.master')

@section('title', 'Crypto Compound')

@section('content')

 <main id="main">
<!-- ======= Hero Section ======= -->
 <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-8">
          <h1>Crypto Governing Council</h1>
        <p>The Hedera Governing Council consists of up to 39 term-limited and highly diversified organizations and enterprises, reflecting up to 11 unique sectors, academia, and non-profits globally. Council members are committed to governing software changes, while bringing stability and continued decentralization to the public network.</p>
         <a href="{{route('councilcontacts.create')}}" class="get-started-btn" target="_blank">Request To Join </a> 
         
        </div>

      </div>
    </div>
 </section><!-- End Hero -->



 <!-- ======= Clients Section ======= -->
<section id="clients" class="clients">
      <div class="container">
<div class="section-title">
         
        </div>
        <div class="row no-gutters clients-wrap clearfix wow fadeInUp">
          @foreach($investors as $investor)
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              @if(file_exists(storage_path().'/app/public/investors/'.$investor->image ) && (!is_null($investor->image)))
            <img src="{{ asset('storage/investors/'.$investor->image) }}" alt="img" class="card-img-top">
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
          <h3>IBM</h3>
          <p>"We believe Hedera could help provide an interesting way to enhance and simplify the deployment of Hyperledger Fabric in the enterprise, making it easier for groups to build and grow their networks."</p>
        </div>

        <div class="row counters position-relative">

          <div class="col-lg-12 col-6 text-center">
            <p>JERRY CUOMO</p>
            <p>VICE PRESIDENT OF BLOCKCHAIN TECHNOLOGIES</p>
            <i class="fa fa-play-circle" style="color:white;font-size: 28px">&nbsp;Hear from the IBM</i>
          </div>

         

        </div>

      </div>
    </section><!-- End Counts Section -->

 <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">
        <div class="text-center title">
         <h2>A truly decentralized governance model</h2>
        <div class="row">
          <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <img src="{{asset('ui/frontend')}}/img/icons/ibm2.png" alt="">
              <h4><a href="">DIRECTION OF CODEBASE</a></h4>
              <p>The Hedera network achieves 10,000 HBAR cryptocurrency transactions per second, in a single shard and on-ledger, without compromising on network security or stability.</p>

            </div>
          </div>

          <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
<img src="{{asset('ui/frontend')}}/img/icons/ibm.png" alt="">              <h4><a href="">NO FORKING</a></h4>
              <p>Hashgraph consensus is incredibly lightweight, allowing for the cost per HBAR transaction to be very small — around $0.0001 USD. In combination with high throughput, micropayments using a token on Hedera, or hbars, is a practical reality.</p>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <img src="{{asset('ui/frontend')}}/img/icons/ibm3.png" alt="">
              <h4><a href="">INITIAL NETWORK NODES</a></h4>
              <p>Never wait for block confirmations again. HBAR transactions achieve finality, on-ledger, within three to five seconds. Be confident in payment settlements and offer modern digital experiences within your application.</p>
            </div>
          </div>
           <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <img src="{{asset('ui/frontend')}}/img/icons/ibm1.png" alt="">
              <h4><a href="">TERM LIMITS & EQUAL VOTE</a></h4>
              <p>Never wait for block confirmations again. HBAR transactions achieve finality, on-ledger, within three to five seconds. Be confident in payment settlements and offer modern digital experiences within your application.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->
    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="text-center title">
          <h3>DLA PIPER </h3>
          <p>"As we work to bring these kinds of technologies to our clients, we are pleased to join the Hedera Governing Council as an inaugural governing member, to help further shape the adoption of DLT across organizations and governments globally."
</p>
        </div>

        <div class="row counters position-relative">

          <div class="col-lg-12 col-6 text-center">
            <p>SCOTT THIEL</p>
            <p>PARTNER</p>
            <i class="fa fa-play-circle" style="color:white;font-size: 28px">&nbsp;Watch The Video</i>
          </div>

         

        </div>

      </div>
    </section><!-- End Counts Section -->

</main>
@endsection