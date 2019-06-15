@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')

    <section>
      <div class="container wow fadeInUp">
       
        <div class="row">
          <div class="col-lg-5">
              <h3 class="mb-4">Lighthouse Shell Island Tour</h3>
            <p>Visit an undisturbed barrier island. Who knows what Mother Nature has in store? A lighthouse, eagles, dolphins, maybe even a turtle. You will have one and a half hours to leisurely stroll an unspoiled beach, accessible only by boat. Peace and quiet galore! One of our most popular tours! </p>

            <ul>
              <li>4 Hours - Monday thru Saturday</li>
              <li>Tours departure times are scheduled around low tide</li>
            </ul>
              
          </div>
          <div class="col-lg-3 d-flex align-items-center">
            <div class="wrapper">
              <div class="rates">Rates:</div>
              Adults: $38.00<br>
              Children age 4-12: $15.00  <br>
              Children ages 3 and under: Free   <br>
              
              <a href="https://fareharbor.com/embeds/book/lowcountrytours/items/31936/calendar/2019/04/?full-items=yes&flow=12854 " target="_blank" class="btn btn-info mt-4 mb-4">Book Now <i class="fas fa-chevron-circle-right ml-1"></i></a>
            </div>
          </div>
          <div class="col-lg-4">
            <img src="@asset('images/tour-shell.jpg')" class="img-fluid rounded bt-img-shadow">
          </div>
        </div>
      </div>
    </section>

    <div class="line2"></div>

    <section>
      <div class="container wow fadeInUp">
        
        <div class="row">
          <div class="col-lg-5">
              <h3 class="mb-4">Plantation River Tour </h3>
            <p>Cruise up the peaceful rivers past Plantation Mansions, abandoned rice fields, majestic old oaks, and even a ghost story or two. Step into the past where Mother Nature hides her treasures.</p>

            <ul>
              <li>3 Hours - Monday thru Saturday</li>
              <li>Tours departure are scheduled around high tide</li>
            </ul>
              
          </div>
          <div class="col-lg-3 d-flex align-items-center">
            <div class="wrapper">
              <div class="rates">Rates:</div>
              Adults: $38.00<br>
              Children age 4-12: $15.00  <br>
              Children ages 3 and under: Free <br>
              
              <a href="https://fareharbor.com/embeds/book/lowcountrytours/items/31942/calendar/2019/04/?full-items=yes&flow=12854" target="_blank" class="btn btn-info mt-4 mb-4">Book Now <i class="fas fa-chevron-circle-right ml-1"></i></a>
            </div>
          </div>
          <div class="col-lg-4">
            <img src="@asset('images/tour2.jpg')" class="img-fluid rounded bt-img-shadow">
          </div>
        </div>
      </div>
    </section>

    <div class="line2"></div>

    <section>
      <div class="container wow fadeInUp">
        
        <div class="row">
          <div class="col-lg-8">
            <h3 class="mb-4">Sunset Eco Cruise</h3>
            <p>Sunset Cruises are simply the best! There is no better place to watch the South Carolina sunset other than from the deck of our boat on the historic Winyah Bay.<br>
                Sunset is a magical time in an estuary. When the winds calm down and the sun turns to gold and paints the sky with spectacular color. It is the time of Day the Dolphins are feeding and the Eagles are Returning to their nest.
                There is no way the fresh ocean air the wild life will not overtake you with a feeling of relaxation. Just sit back relax and enjoy what Nature has to offer.
                </p>

                <strong>What to expect: </strong><br>
                This slow paced cruise will have a few stories about Georgetown as we exit the Sampit River to the Winyah Bay. We will be on the look out for Alligators, Dolphins, Eagles, Osprey, Cormorant's & Turtles.
                We will offer a complimentary Fruit and Cheese platter, accompanied by a glass or two of champagne & soft drinks and water for our under age boaters
                There is a bathroom on the boat just in case you wondering<br><br>

                <strong>What to Bring:</strong><br>
                I.D.<br>
                Camera<br>
                Gratuities are Customary<br>
                
              
          </div>
          <div class="col-lg-4 d-none d-lg-block">
            <img src="@asset('images/tour3.jpg')" class="img-fluid rounded bt-img-shadow mb-4">
            <div class="rates">Rates:</div>
            Adults: $33.00<br>
            Children age 4-12: $15.00  <br>
            Children ages 3 and under: Free   <br>
            
            <a href="https://fareharbor.com/embeds/book/lowcountrytours/items/31936/calendar/2019/04/?full-items=yes&flow=12854 " target="_blank" class="btn btn-info mt-4 mb-4">Book Now <i class="fas fa-chevron-circle-right ml-1"></i></a>
          </div>
          <div class="col-lg-4 d-block d-lg-none">
            <div>
              <div class="rates">Rates:</div>
              Adults: $30.00<br>
              Children age 4-12: $15.00  <br>
              Children ages 3 and under: Free <br>
              
              <a href="https://fareharbor.com/embeds/book/lowcountrytours/items/44494/calendar/2019/04/?full-items=yes&flow=12854" target="_blank" class="btn btn-info mt-4 mb-4">Book Now <i class="fas fa-chevron-circle-right ml-1"></i></a>
            </div>    
            <img src="@asset('images/tour4.jpg')" class="img-fluid rounded bt-img-shadow mb-4">
          </div>
        </div>
      </div>
    </section>

    <div class="line2"></div>

    <section>
      <div class="container wow fadeInUp">
        
        <div class="row">
          <div class="col-lg-5">
            <h3 class="mb-4">Private Charters</h3>
            <p>Private Charters are available upon request. We frequently arrange custom tours for reunions, wedding parties, and other groups. Just let us know what you're looking for! </p>
              
          </div>
          <div class="col-lg-3 d-flex align-items-center">
            <div class="wrapper">
                Please <strong><a href="/contact-us">Contact Us</a></strong> for School Group & Group Tour Rates.<br>
              
              <a href="https://fareharbor.com/embeds/book/lowcountrytours/items/105146/calendar/2019/04/?full-items=yes&flow=12854 " target="_blank" class="btn btn-info mt-4 mb-4">Book Now <i class="fas fa-chevron-circle-right ml-1"></i></a>
            </div>
          </div>
          <div class="col-lg-4">
            <img src="@asset('images/tour3.jpg')" class="img-fluid rounded bt-img-shadow">
          </div>
        </div>
      </div>
    </section>

    @include('partials.testimonials')
    
  @endwhile
@endsection
