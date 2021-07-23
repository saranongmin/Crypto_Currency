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
          
    <!-- ======= About Us Section ======= -->
    <section id="about" class="about"
     style="background-color: blue;
     height:30vh;">
      <div class="container">

        <div class="row content">
          <div class="col-lg-2"></div>
          <div class="col-lg-10 pt-4 pt-lg-0">
          
            <a href="#" class="btn-learn-more">Comparison</a>
                        <a href="#" class="btn-learn-more">Network Metrics</a>
            <a href="#" class="btn-learn-more">EcoSystem</a>
            <a href="#" class="btn-learn-more">Proxy Staking</a>
            <a href="#" class="btn-learn-more">FAQ</a>


          </div>

        </div>
  </div>
    </section><!-- End About Us Section -->
       <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">
        <div class="text-center title">

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <h4><a href="">Dual role of HBAR
</a></h4>
              <p>HBAR is the native cryptocurrency of the Hedera public network. Hbars are used to power decentralized applications and protect the network from malicious actors.
</p>
<a href="#" class="btn btn-primary" style="background-color: black">Read Paper</a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
<img src="{{asset('ui/frontend')}}/img/service1.jpg" alt="">              <h4><a href="">Network fuel
</a></h4>
              <p>Developers use hbars to pay for network services, such as transferring hbars, managing fungible and non-fungible tokens, and logging data. For each transaction submitted to the network, hbars are used to compensate network nodes for bandwidth, compute, and storage.

</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <img src="{{asset('ui/frontend')}}/img/service2.jpg" alt="">
              <h4><a href="">Network protection
</a></h4>
              <p>Hedera’s proof-of-stake public network uses hbars, which are staked or proxy staked (coming soon) to a network node, to weight votes on transactions when reaching consensus.<br><br>Weighted voting with hbars makes it difficult and expensive for a bad actor to maliciously affect consensus — it would require them to own and stake over one-third of the network’s total supply of HBAR, which will not be possible for the first 5 years.



</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->


 <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">
        <div class="text-center title">
         <h2>The HBAR Advantage</h2>
        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <img src="{{asset('ui/frontend')}}/img/service1.jpg" alt="">
              <h4><a href="">Incredible throughput

</a></h4>
              <p>The Hedera network achieves 10,000 HBAR cryptocurrency transactions per second, in a single shard and on-ledger, without compromising on network security or stability.</p>

            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
<img src="{{asset('ui/frontend')}}/img/service1.jpg" alt="">              <h4><a href="">Predictably low fees</a></h4>
              <p>Hashgraph consensus is incredibly lightweight, allowing for the cost per HBAR transaction to be very small — around $0.0001 USD. In combination with high throughput, micropayments using a token on Hedera, or hbars, is a practical reality.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <img src="{{asset('ui/frontend')}}/img/service2.jpg" alt="">
              <h4><a href="">Finality in seconds</a></h4>
              <p>Never wait for block confirmations again. HBAR transactions achieve finality, on-ledger, within three to five seconds. Be confident in payment settlements and offer modern digital experiences within your application.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

<!-- ======= Metrics Section ======= -->
    <section id="matrics" class="matrics section-bg" style="background-color:  #4d4dff">
      <div class="container">
        <div class="text-center title">
         <h2>Network Metrics</h2>
          <a href="#" class="get-started-btn scrollto">Dashboard</a><br><br>
        </div>

        <div class="row">
          <div class="col-lg-6 col-md-6" data-aos="fade-up">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-detail"></i></div>
              <h4 class="title"><a href="">Transactions</a></h4>
              <p>4,699,613</p>
              <p>PER DAY</p>
              
            </div>
          </div>
          <div class="col-lg-6 col-md-6" data-aos="fade-up">
            <div class="icon-box">
              <div class="icon"><i class='bx bx-slider-alt'></i></div>
              <h4 class="title"><a href="">Latency </a></h4>
             <p>5.17</p>
              <p>SECONDS TO FINALITY</p>
            </div>
          </div>
         <div class="col-lg-6 col-md-6" data-aos="fade-up">
            <div class="icon-box">
              <div class="icon"><i class='bi bi-bar-chart'></i></div>
              <h4 class="title"><a href="">ACCOUNTS</a></h4>
             <p>185,634</p>
              <p>ON MAINNET</p>
            </div>
          </div>
          <div class="col-lg-6 col-md-6" data-aos="fade-up">
            <div class="icon-box">
              <div class="icon"><i class='bx bxs-spreadsheet'></i></div>
              <h4 class="title"><a href="">API CALLS</a></h4>
             <p>2,830</p>
              <p>PER HBAR</p><br><br>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

  






<!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container">
        <div class="row">


  <div class="col-lg-4 col-md-6">

            <img src="{{asset('ui/frontend')}}/img/4.jpg" alt="" >
              
          </div>
          <div class="col-lg-4 col-md-6">
           
            <div class="box">

              <h3>Decentralized applications</h3>
                <hr>
              
              <p>
Applications and microservices that use a public ledger provide greater transparency and trust than ever before. This makes entirely new things possible, like a music streaming service paying artists directly or a disintermediated ad network that doesn't require audits. A fairer, more secure, digital future is being decentralized on Hedera. Make it yours.

</p>              <div class="btn-wrap">
                <a href="#" class="btn-buy" target="_blank">See Who's Building</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
  <img src="{{asset('ui/frontend')}}/img/3.jpg" alt="" style="margin-left:0px">
              
            
              </div>
          </div>
  </div>

      </div>
    </section><!-- End Pricing Section -->


<div class="Section" id="proxystaking"><div class="proxy">
  <div class="proxy-wrapper">
    <div class="proxy-left">
      <div class="proxy-left-graphic">
                        <img src="{{asset('ui/frontend')}}/img/1.jpg" alt="Hbar Proxy Mobile V2">
      </div>
      <div class="proxy-content">
        <h2 class="size--l light proxy-content-title">
          Proxy staking (coming soon)
        </h2>
        <span class="proxy-content-body">
          <p>Every node on Hedera’s proof-of-stake network has a weighted influence on consensus — that weight is proportional to the amount of hbars staked to a node. Proxy staking allows those who own hbars, but aren’t operating a node, to stake their hbars to someone else’s node. Earnings are split between the node operator and owners of the proxy staked hbars, earning the proxy staker a small share of transaction fees. When proxy staked, hbars are not locked-up or bonded, as is common in other networks, and proxy stakers retain the ability to transact their HBAR however they'd like.</p>
        </span>
        <a href="#" class="get-started-btn">Learn More</a>
               
              </div>
    </div>
    <div class="proxy-right">
      <div class="proxy-right-graphic">
                        <img src="{{asset('ui/frontend')}}/img/service1.jpg" alt="Hbar  Proxy  Hero 2X  Opacity  Right  Updated V2" style="height: 100%;">
      </div>
    </div>
  </div>

</div>
</div>

      <!-- ======= Faq Section ======= -->
    <section id="faq" class="faq">
      <div class="container">
        <div class="text-center title">
<h3><br><br>HBAR FAQ
</h3>
              <p>
                Found below are some of the most commonly asked questions about Hedera HBAR. Please visit our <a href="">full FAQ </a>for the entire list of questions.<br><br>


              </p>
          </div>
        <div class="row">

          <div class="col-lg-6">

            <div class="accordion-list">
             
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1" style="color:blue">What is the total supply of HBAR coins?</a>
 
                    <p>
                      Hedera has a fixed supply of 50 billion coins.


                    </p>
               
                  </div>
                

</div>
<div class="col-lg-6">

            <div class="accordion-list">
            
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed" style="color:blue">What are the official HBAR cryptocurrency denominations?</a>
 
                    <p>
                      gigabar 1 Gℏ = 1,000,000,000 ℏ<br>
megabar 1 Mℏ = 1,000,000 ℏ<br>
kilobar 1 kℏ = 1,000 ℏ<br>
hbar 1 ℏ = 1 ℏ<br>
millibar 1,000 mℏ = 1 ℏ<br>
microbar 1,000,000 μℏ = 1 ℏ<br>
tinybar 100,000,000 tℏ = 1 ℏ<br>
                    </p>
                  </div>
               
    </div>

<div class="col-lg-6">

            <div class="accordion-list">
             
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed" style="color:blue">On which exchanges is HBAR available?</a>
 
                    <p>
                      HBAR (ℏ) may be available for purchase by developers and users to build and utilise applications on the network at the exchanges and OTCs listed in the Buying Guide.


                    </p>
                  </div>
               
            </div>
      
            <div class="col-lg-6">
<div class="accordion-list">
              
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed" style="color:blue">What does the ℏ symbol represent?
</a>
 
                    <p>
                      Our Hedera Hashgraph corporate logo is a bold, uppercase HBAR (Ħ), but our currency symbol is a lower case, italicized HBAR (ℏ). The written way to express Hedera cryptocurrency is hbars, and is equivalent to writing US dollars. It can also be expressed as HBAR, which is equivalent to writing USD.




                    </p>
                  </div>
                

            </div>

      
</div>
      </div>
    </section><!-- End Faq Section -->

      <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 text-center text-lg-start">
            <h3>Subscribe to our Newsletter</h3>
            <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter" style="color:#fff;font-size:35px"></i></a>
        <a href="#" class="facebook"><i style="color:#fff;font-size:35px" class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i style="color:#fff;font-size:35px" class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i style="color:#fff;font-size:35px" class="bx bxl-discord"></i></a>
        <a href="#" class="linkedin"><i style="color:#fff;font-size:35px" class="bx bxl-linkedin"></i></a>
        <a href="#" class="linkedin"><i style="color:#fff;font-size:35px" class="bx bxl-medium"></i></a>
        <a href="#" class="linkedin"><i style="color:#fff;font-size:35px" class="bx bxl-reddit"></i></a>
        <a href="#" class="linkedin"><i style="color:#fff;font-size:35px" class="bx bxl-telegram"></i></a>
<a href="#" class="linkedin"><i style="color:#fff;font-size:35px" class="bx bxl-youtube"></i></a>
      </div>
          </div>
          <div class="col-lg-6 cta-btn-container text-center">
            <a class="cta-btn" href="{{route('newsletters.create')}}">Sign Up</a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->

      
</main>
@endsection