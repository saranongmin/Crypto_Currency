@extends('frontend.layouts.master')

@section('title', 'Crypto Compound')

@section('content')

 <main id="main">
<!-- ======= Hero Section ======= -->
 <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container">
      <div class="row justify-content-center">
       

      </div>
    </div>
 </section><!-- End Hero -->
   <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>SignUp for News Letter</h2>
</div>


  <div class="col-lg-6 mt-5 mt-lg-0">

    <form action="{{route('newsletters.store')}}" method="post">
              @csrf
              <div class="row">
                
               <div class="form-group mt-3">
               <label><b>Sign up for the Newsletter</b></label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="" required><br>
                </div>
            
             
             
              </div>
             
              <div class="text"><button type="submit" class="btn btn-primary">Subscribe Now</button></div>
            </form>

          </div>
 </div>

      </div>
    </section><!-- End Contact Section -->

 </main>
 @endsection