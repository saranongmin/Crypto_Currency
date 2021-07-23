
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
          <h2>Your wallet displayed on Hedera.com
</h2>
<p>Hedera displays known HBAR cryptocurrency wallets with varying functionality on its website, including hardware, software, custodial, and traditional offerings. Register your wallet below for a chance to be featured.</p>
</div>


  <div class="col-lg-10 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="fname" class="form-control" id="fname" placeholder="Your First Name" required>
                </div>
                <div class="col-md-6 form-group">
                  <input type="text" name="lname" class="form-control" id="lname" placeholder="Your Last Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder=" Email Address" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="company_name" id="company_name" placeholder="Company Name" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="short_desc" rows="5" placeholder="SHORT DESCRIPTION OF YOUR WALLET" required></textarea>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="website" id="website" placeholder="Website" required>
              </div><div class="form-group mt-3">
                <input type="file" class="form-control" name="logo" id="logo" placeholder="HIGH-RES LOGO URL *" required>
              </div>
             
              <div class="text"><button type="submit">Submit</button></div>
            </form>

          </div>
 </div>

      </div>
    </section><!-- End Contact Section -->

 </main>
 @endsection