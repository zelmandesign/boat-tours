@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13328.82934170822!2d-79.2827805!3d33.3656527!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x83e7f0c90a12110b!2sCap&#39;n+Rod&#39;s+Lowcountry+Boat+Tours!5e0!3m2!1sen!2spl!4v1557271717421!5m2!1sen!2spl" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>

    <div class="container" style="margin-top: 75px" id="contact-us">
      <div class="row">
        <div class="col-md-7 mb-4">
          <h3>Let's Get in Touch</h3>
          <div class="line"></div>
          @include('partials.content-page')
        </div>
        <div class="col-md">
          <h3>Contact Info</h3>
          <div class="line"></div>
          <p class="mb-3">Boarding on the Harbor Walk behind the Town Clock & Rice Museum at 701 Front Street, Gorgetown, SC</p>
          <div class="row mb-1 mt-3">
            <div class="col-1"><i class="fas fa-mobile-alt"></i></div>
            <div class="col"><a href="tel:(843) 477-0287">(843) 477-0287</a></div>
          </div>
          <div class="row mb-1">
            <div class="col-1"><i class="fas fa-map-marker-alt"></i></div>
            <div class="col">701 Front St, Georgetown, SC 29440</div>
          </div>
          <div class="row mb-1">
            <div class="col-1"><i class="far fa-clock"></i></div>
            <div class="col">Monday-Sunday 7AM-7PM  </div>
          </div> 
          <div class="row mb-1 mt-3">
            <div class="col-1"><i class="fas fa-arrow-circle-right"></i></div>
            <div class="col"><a href="https://www.facebook.com/pages/category/Park/Tom-Yawkey-Wildlife-Center-411196945752700/" target="_blank">Tom Yawkey Wildlife Center</a> </div>
          </div>
          <div class="social mt-5">
            <a href="https://www.tripadvisor.com/Attraction_Review-g54245-d1551568-Reviews-Cap_n_Rod_s_Lowcountry_Plantation_Tours-Georgetown_South_Carolina.html" target="_blank"><i class="fab fa-tripadvisor"></i></a>
          <a href="https://www.facebook.com/CapnRodsTours/" target="_blank"><i class="fab fa-facebook ml-2"></i></a>
          <a href="https://www.yelp.com/biz/capn-rods-lowcountry-tours-georgetown" target="_blank"><i class="fab fa-yelp ml-2"></i></a>
          <a href="http://search.google.com/local/writereview?placeid=ChIJc_0czIQsAIkRCxESCsnw54M " target="_blank"><i class="fab fa-google ml-2"></i></a>
          </div>
        </div>
      </div>
        
    </div>

    @include('partials.testimonials')
    
  @endwhile
@endsection
