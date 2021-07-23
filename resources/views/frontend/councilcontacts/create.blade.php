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
          <h2>Request for Crypto Governing Council information</h2>
<p>Please complete the form below to request information about Hedera's Governing Council membership opportunities. If your organization qualifies, a member of the Hedera team will be reaching out soon.<br><br>
At a minimum, prospective members of the Hedera Governing Council are required to have at least $10 billion in market capitalization and be able to offer core industry expertise to Hedera’s governing body.

</p>
</div>


  <div class="col-lg-10 mt-5 mt-lg-0">

            <form action="{{route('councilcontacts.store')}}" method="post">
              @csrf
              <div class="row">
                <div class="form-group mt-3">
                  <input type="text" name="fname" class="form-control" id="fname" placeholder="First Name" required>
                </div>
                <div class="form-group mt-3">
                  <input type="text" name="lname" class="form-control" id="lname" placeholder=" Last Name" required>
                </div>
                
              </div>
              <div class="form-group mt-3">
                  <input type="text" name="company" class="form-control" id="company" placeholder="Company" required>
                </div>
                
              <div class="form-group mt-3">
                  <input type="email" class="form-control" name="email" id="email" placeholder=" Email Address" required>
                </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone " required>
              </div>
              
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="country" id="country" placeholder="Country" required>
              </div><br>
             
             
              <div class="text"><button type="submit" class="btn btn-primary">Submit Council Contact</button></div>
            </form>

          </div>
 </div>

      </div>
    </section><!-- End Contact Section -->

</main>
@endsection