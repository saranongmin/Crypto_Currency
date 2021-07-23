@extends('frontend.layouts.master')

@section('title', 'Crypto Compound')

@section('content')

 <main id="main">
<!-- ======= Hero Section ======= -->
 <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-8">
          <h1>Crypto Compound(c)</h1>
        <p>Incredibly fast. Predictably low fees. Finality in seconds.</p>

         <a href="{{route('buying-guide')}}" class="get-started-btn" target="_blank">Crypto Compound Buying Guide</a> <a class="get-started-btn">Coin Economics Whitepaper</a>
        </div>

      </div>
    </div>
 </section><!-- End Hero -->

<!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <div class="section-title">
          <h2>Team</h2>
         
        </div>
        <div class="row">
          <div class="col-lg-6 order-2 order-lg-1">
            <h2>Mission</h2>
            
              <p>We are dedicated to building a trusted and secure online world that empowers you.<br>
                Where you can work, play, buy, sell, create and engage socially.

Where you have safety and privacy in your digital communities.

Where you are confident when interacting with others.

Where this digital future is available to all.

Hello future.

</p>
            
          </div>
          <div class="image col-lg-6 order-1 order-lg-2"> 
            <h2>Core Values</h2>
            <ul>
              <li>Integrity</li>
<li>We are truthful, trustworthy, and positive</li>
<li>Ethics</li>
<li>We do the right thing</li>
<li>Service</li>
<li>We make the world a better place</li>
<li>Excellence</li>
<li>We strive for the best in what we create and in what we do</li>
<li>Team work</li>
<li>We take care of each other and work together to change the world</li>
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->
    <!-- ======= Clients Section ======= -->
<section id="clients" class="clients">
      <div class="container">
<div class="section-title">
          <h2>Investors</h2>
         
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

    <!-- ======= Team Section ======= -->
    <section id="team">
      <div class="container wow fadeInUp">
        <div class="row">
          <div class="col-md-12">
            <div class="section-title">
              <h2>Leadership Team</h2>
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
    <!-- ======= Clients Section ======= -->
<section id="clients" class="clients">
      <div class="container">
<div class="section-title">
          <h2>Partners, system integrators, incubators, and accelerators
</h2>
         
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
  </main>
    @endsection