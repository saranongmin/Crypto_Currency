 @extends('frontend.layouts.master')

@section('title', 'Crypto Compound')

@section('content')

 <main id="main">
<!-- ======= Hero Section ======= -->
 <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-8">
          <h1>Payments on Crypto
</h1>
        <p>Enable secure, real-time, and cost-effective payments in hbars, or your own stablecoin or cryptocurrency.
</p>
         <a href="#" class="get-started-btn">Start Building</a> 
         <a href="{{route('contacts.create')}}" class="get-started-btn">Contact Us</a>
        </div>

      </div>
    </div>
 </section><!-- End Hero -->
<!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Learn how Hedera can help transform your business</h2>
        </div>
      </div>

      <div>
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="ri-map-pin-line"></i>
                <h4>Location:</h4>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>

              <div class="email">
                <i class="ri-mail-line"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="ri-phone-line"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55s</p>
              </div>

            </div>

          </div>
<div class="col-lg-8 mt-5 mt-lg-0">
<form action="{{route('contacts.store')}}" method="post">
              @csrf

              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="fname" class="form-control" id="fname" placeholder="First Name" required>
                </div>
                 <div class="col-md-6 form-group">
                  <input type="text" name="lname" class="form-control" id="lname" placeholder="Last Name" required><br>
                </div>
                <div class="col-md-12 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Work Email Address" required>
                </div>
              </div>
              <div class="col-md-12 form-group mt-3">
                <input type="text" class="form-control" name="company" id="company" placeholder="Company" required>
              </div>
            
              <div class="my-3">
               
              </div>
              <div class="text-center"><button type="submit" class="btn btn-primary">Send Message</button></div>
            </form>
                      </div>

        </div>

      </div>
    </section><!-- End Contact Section -->



    <!-- ======= Clients Section ======= -->
<section id="clients" class="clients">
      <div class="container">
<div class="section-title">
          <h2>Hedera is owned and governed by the world’s leading organizations
</h2>
         
        </div>
        <div class="row no-gutters clients-wrap clearfix wow fadeInUp">

         @foreach($investors as $investor)
          <div class="col-lg-2 col-md-4 col-xs-6">
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
    </section><!-- End Clients Section --
    </main>
    @endsection