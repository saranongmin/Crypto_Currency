
<!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-lg-10 d-flex align-items-center justify-content-lg-between">
          <h1 class="logo me-auto me-lg-0"><a href="{{route('welcome')}}">Crypto Compound</a></h1>
          <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
              <li><a class="nav-link scrollto active" href="#hero">Network</a></li>
              <li class="dropdown"><a href="#"><span>Use Cases</span><i class="bi bi-chevron-down"></i></a>
             <ul>
                  <li><a href="{{route('payments')}}">
                    <img src="{{asset('ui/frontend')}}/img/icons/payment.png" alt="Payments"  class="alignnone size-full wp-image-156">Payments</a>
                    </li>
  <li><a href="#">
   <img src="{{asset('ui/frontend')}}/img/icons/heart.png" alt="WALLETS" class="alignnone size-full wp-image-156">
               Healthcare</a>
             </li>
              <li><a href="#">
   <img src="{{asset('ui/frontend')}}/img/icons/identity.jpg" alt="identity" class="alignnone size-full wp-image-156">
               Identity</a>
             </li>
              <li><a href="{{route('tokenized-asset')}}">
   <img src="{{asset('ui/frontend')}}/img/icons/asset-te.png" alt="WALLETS" class="alignnone size-full wp-image-156">
               Tokenized Assets</a>
             </li>
              <li><a href="#">
   <img src="{{asset('ui/frontend')}}/img/icons/fraud.png" alt="WALLETS" class="alignnone size-full wp-image-156">
               Fraud Mitigation</a>
              </li>
              <li><a href="#">
   <img src="{{asset('ui/frontend')}}/img/icons/compliance.png" alt="WALLETS" class="alignnone size-full wp-image-156">
               Data Compliance</a>
             </li>
              </ul>

              </li>
              <li class="dropdown"><a href="#"><span>HBAR</span><i class="bi bi-chevron-down"></i></a>
                <ul>
      <li><a href="{{route('welcome')}}">Overview</a></li>
              <li><a href="{{route('account-creation')}}">Account Creation</a></li>

  <li><a href="{{route('buying-guide')}}">Wallets & Exchanges</a>
             </li>
              </ul>
              </li>

             
              <li class="dropdown"><a href="#"><span>About</span><i class="bi-chevron-down"></i></a>
             <ul>
              <li><a href="{{route('team')}}">Team</a></li>
              <li><a href="{{route('blog')}}">Blog</a></li>
             <li><a href="{{route('work')}}">Careers</a></li>

             </ul>

              </li>
        <li><a class="nav-link scrollto" href="{{route('governance')}}">Governance</a></li>

              <li><a class="nav-link scrollto" href="{{route('register')}}">Class Room</a></li>
              
              <li class=" dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false"
                    >
                        <span class="badge badge-pill badge-dark">
                            <i class="fa fa-shopping-cart"> Cart</i> {{ \Cart::getTotalQuantity()}}
                        </span>
                    </a>

                    
                        <ul class="list-group" style="margin: 20px;">
                            <li>@include('frontend.layouts.partials.cart-drop')</li>
                        </ul>

                    
                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->

            
          <a href="{{route('get-started')}}" class="get-started-btn scrollto">Get Started</a>
          
        </div>
      </div>

    </div>
  </header><!-- End Header -->