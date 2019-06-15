@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp

    <section id="main" class="d-flex justify-content-center align-items-center">
      <div class="text-center">
        <h1 class="text-uppercase">Boat Tours</h1>
        <hr>
        <h2>History, Mystery, & Legends..</h2>
        <a href="https://fareharbor.com/embeds/book/lowcountrytours/items/?flow=12854&full-items=yes" class="btn  btn-info btn-lg mt-4" target="_blank"><i class="far fa-check-circle mr-2"></i> Book Now</a>
      </div>
    </section>
    <section id="verbiage">
      <div class="container text-center">
          Each of Our Tours offers a relaxing, enjoyable, and educational re-introduction to the History, Mystery, & Legends of lives and times past. You will discover hidden treasures, forgotten pleasures, and even a ghost story or two.
          <hr>
      </div>
    </section>

    <section id="tours">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mb-4">
            <div class="card bg-dark text-white text-center wow fadeInUp">
              <img class="card-img" src="@asset('images/card1.jpg')" alt="Card image">
              <div class="card-img-overlay w-100 d-flex align-items-center justify-content-center">
                <div>
                  <h4 class="card-title mb-3">Lighthouse Shell Island Tour</h4>
                  <hr>
                  <p class="card-text"><a href="https://fareharbor.com/embeds/book/lowcountrytours/items/31936/calendar/2019/04/?full-items=yes&flow=12854 " target="_blank" class="btn btn-info">Book Now <i class="fas fa-chevron-circle-right ml-1"></i></a></p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-4">
            <div class="card bg-dark text-white text-center wow fadeInUp">
              <img class="card-img" src="@asset('images/card2.jpg')" alt="Card image">
              <div class="card-img-overlay w-100 d-flex align-items-center justify-content-center">
                <div>
                  <h4 class="card-title mb-3">Plantation River Tour</h4>
                  <hr>
                  <p class="card-text"><a href="https://fareharbor.com/embeds/book/lowcountrytours/items/31942/calendar/2019/04/?full-items=yes&flow=12854" target="_blank" class="btn btn-info">Book Now <i class="fas fa-chevron-circle-right ml-1"></i></a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-4">
            <div class="card bg-dark text-white text-center wow fadeInUp">
              <img class="card-img" src="@asset('images/card4.jpg')" alt="Card image">
              <div class="card-img-overlay w-100 d-flex align-items-center justify-content-center">
                <div>
                  <h4 class="card-title mb-3">Sunset Eco Cruise</h4>
                  <hr>
                  <p class="card-text"><a href="https://fareharbor.com/embeds/book/lowcountrytours/items/44494/calendar/2019/04/?full-items=yes&flow=12854" target="_blank" class="btn btn-info">Book Now <i class="fas fa-chevron-circle-right ml-1"></i></a></p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-4">
            <div class="card bg-dark text-white text-center wow fadeInUp">
              <img class="card-img" src="@asset('images/card3.jpg')" alt="Card image">
              <div class="card-img-overlay w-100 d-flex align-items-center justify-content-center">
                <div>
                  <h4 class="card-title mb-3">Private Charters</h4>
                  <hr>
                  <p class="card-text"><a href="https://fareharbor.com/embeds/book/lowcountrytours/items/105146/calendar/2019/04/?full-items=yes&flow=12854" target="_blank" class="btn btn-info">Book Now <i class="fas fa-chevron-circle-right ml-1"></i></a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="mid-verbiage">
      <div class="container">
          Visit an undisturbed barrier island. Who knows what Mother Nature has in store? A lighthouse, eagles, dolphins, maybe even a turtle. You Plantation will have one and a half hours to leisurely stroll an unspoiled beach, accessible only by boat. Peace and quiet galore! One of our most popular tours! 
          <hr>
          Step back in time with each Bend of the River, as you cruise past Rice Plantations - Cap'n Rod's Lowcountry Tours enjoy the dark waters of the Pee Dee Lowcountry. View majestic Rice Plantations, trunk gates and slave cabins, moss-laden oaks, all the while enjoying Mother Nature at her finest          
      </div>
    </section>

    @include('partials.testimonials')

  @endwhile
@endsection
