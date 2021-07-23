@extends('frontend.layouts.master')

@section('title', 'Crypto Compound')

@section('content')
<main id="main">
<!-- ======= Hero Section ======= -->
 <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-8">
          <h1>Crypto Compound Blog
</h1>
       
        </div>

      </div>
    </div>
 </section><!-- End Hero -->

   <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">
        	@foreach($blogs as $blog)

          <div class="col-lg-3 entries">

            <article class="entry">

              <div class="entry-img">
 @if(file_exists(storage_path().'/app/public/blogs/'.$blog->image ) && (!is_null($blog->image)))
            <img src="{{ asset('storage/blogs/'.$blog->image) }}" alt="img" class="card-img-top">
            @else
            <img src="{{ asset('/default-avatar.png') }}">
           @endif              </div>

              <h2 class="entry-title">
                <a href="blog-single.html">{{$blog->title}}</a>
              </h2>


              <div class="entry-content">
                <p>
                 {{$blog->details}}
                </p>
                <div class="read-more">
                  <a href="{{ route('blog.details', $blog->id) }}">Read More</a>
                </div>
              </div>

            </article><!-- End blog entry -->
         

           

          </div><!-- End blog entries list -->
@endforeach

        
        </div>

      </div>
    </section><!-- End Blog Section -->
</main>
@endsection