@extends('frontend.layouts.master')

@section('title', 'Crypto Compound')

@section('content')
<main id="main">
<!-- ======= Hero Section ======= -->
 <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-8">
          <h1>We’re building a trusted, secure, and empowered digital future for all</h1>
        </div>

      </div>
    </div>
 </section><!-- End Hero -->


 <!-- ======= Services Section ======= -->
    <section id="services" class="services" style="background-color: blue">
      <div class="container">
        <div class="text-center title">
         <h2 style="color: #fff">About Crypto Compound</h2>
         <p style="color: #fff;text-transform: none;">A public distributed ledger built on hashgraph consensus and a governing body, designed to power the next-generation of decentralized applications.</p>
<a href="{{route('buying-guide')}}" class="get-started-btn" target="_blank">Explore Open Roles</a>
<div class="col-lg-12">
	<?php echo '<br><br><br>';?>
	</div>
        <div class="row">
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <img src="{{asset('ui/frontend')}}/img/service1.jpg" alt="">
              <h4><a href="">15,000+ <br>
TESTNET DEVS

</a></h4>
            

            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
<img src="{{asset('ui/frontend')}}/img/service1.jpg" alt="">              <h4><a href="">$140m+ <br>
IN CAPITAL RAISED</a></h4>
              
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <img src="{{asset('ui/frontend')}}/img/icons/people.png" alt="">
              <h4><a href="">60+ <br>
EMPLOYEES</a></h4>
              
            </div>
          </div>
   
   <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <img src="{{asset('ui/frontend')}}/img/icons/asset-te.png" alt="">
              <h4><a href="">14 <br>
MAJOR CITIES</a></h4>
              
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->
     <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">
        <div class="text-center title">
         <h2>A mission-driven team
</h2>
<p style="text-transform: none;">Hedera is looking for curious and passionate individuals who are dedicated to learning and growing with us. We’re committed to building an inclusive team that values ideas over anything else.</p>


        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <img src="{{asset('ui/frontend')}}/img/icons/innovative.jpg" alt="">
              <h4><a href="">Innovative</a></h4>
              <p>The Hedera network achieves 10,000 HBAR cryptocurrency transactions per second, in a single shard and on-ledger, without compromising on network security or stability.</p>

            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
<img src="{{asset('ui/frontend')}}/img/icons/transparency.png" alt="">              <h4><a href="">Transparent</a></h4>
              <p>Hashgraph consensus is incredibly lightweight, allowing for the cost per HBAR transaction to be very small — around $0.0001 USD. In combination with high throughput, micropayments using a token on Hedera, or hbars, is a practical reality.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <img src="{{asset('ui/frontend')}}/img/icons/question.png" alt="">
              <h4><a href="">Curious</a></h4>
              <p>Never wait for block confirmations again. HBAR transactions achieve finality, on-ledger, within three to five seconds. Be confident in payment settlements and offer modern digital experiences within your application.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->
         
    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row content">
          <div class="col-lg-6 pt-4 pt-lg-0">
          	<iframe width="520" height="315"
src="https://www.youtube.com/embed/tgbNymZ7vqY">
</iframe>

          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
          <h2>Hear from our Team</h2>
          <hr>
          <p>Hear from our team members who share what makes working at Hedera Hashgraph worthwhile and gratifying. Help us revolutionize the next generation DLT / blockchain technology and work with the inventor of hashgraph, Hedera's Scientist, Dr. Leemon Baird.</p>
<a class="btn btn-primary">Next Video</a>

        


          </div>

        </div>
        <hr>

  </div>
    </section><!-- End About Us Section -->
     <!-- ======= Team Section ======= -->
    <section id="team">
      <div class="container wow fadeInUp">
        <div class="row">
          <div class="col-md-12">
            <div class="section-title">
            </div>
            <div class="section-title-divider"></div>
            
          </div>
        </div>

        <div class="row">
          
@foreach($teams as $team)
          <div class="col-md-3">
            <div class="member">
              <div class="pic">
@if(file_exists(storage_path().'/app/public/teams/'.$team->image ) && (!is_null($team->image)))
                    <img src="{{ asset('storage/teams/'.$team->image) }}" alt="img" class="card-img-top">
                                    @else
                                     <img src="{{ asset('/default-avatar.png') }}">
                                    @endif
               </div>
              <h4>{{$team->name}}</h4>
              <span>{{$team->position}}</span>
             
            </div>
          </div>
@endforeach
          
        </div>
      </div>
    </section><!-- End Team Section -->
     <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>Work at Crypto Compound</h3>
            <p>We’re building a trusted, secure, and empowered digital future for all. Come join us</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Explore Open Roles</a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->

    
</main>


@endsection