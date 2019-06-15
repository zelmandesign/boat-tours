<footer class="content-info">
  <div class="container pb-4">
    @php dynamic_sidebar('sidebar-footer') @endphp
    <div class="row">
      <div class="col-md">
        <a href="{{ home_url('/') }}"><img src="@asset('images/logo.png')"></a>    
        <div class="social mt-3">
          <a href="https://www.tripadvisor.com/Attraction_Review-g54245-d1551568-Reviews-Cap_n_Rod_s_Lowcountry_Plantation_Tours-Georgetown_South_Carolina.html" target="_blank"><i class="fab fa-tripadvisor"></i></a>
          <a href="https://www.facebook.com/CapnRodsTours/" target="_blank"><i class="fab fa-facebook ml-2"></i></a>
          <a href="https://www.yelp.com/biz/capn-rods-lowcountry-tours-georgetown" target="_blank"><i class="fab fa-yelp ml-2"></i></a>
          <a href="http://search.google.com/local/writereview?placeid=ChIJc_0czIQsAIkRCxESCsnw54M " target="_blank"><i class="fab fa-google ml-2"></i></a>
        </div>
      </div>
      <div class="col-md mb-4">
        <div class="row mb-1 mt-3">
          <div class="col-1 d-none d-md-block"><i class="fas fa-mobile-alt"></i></div>
          <div class="col">(843) 477-0287</div>
        </div>
        <div class="row mb-1">
          <div class="col-1 d-none d-md-block"><i class="fas fa-map-marker-alt"></i></div>
          <div class="col">701 Front St, Georgetown, SC 29440</div>
        </div>
        <div class="row mb-1">
          <div class="col-1 d-none d-md-block"><i class="far fa-clock"></i></div>
          <div class="col">Monday-Sunday 7AM-7PM  </div>
        </div> 
        <div class="row mb-1 mt-3">
          <div class="col-1 d-none d-md-block"><i class="fas fa-arrow-circle-right"></i></div>
          <div class="col"><a href="https://www.facebook.com/pages/category/Park/Tom-Yawkey-Wildlife-Center-411196945752700/" target="_blank">Tom Yawkey Wildlife Center</a> </div>
        </div>
      </div>
      <div class="col-md mb-4 bt-img">
        <a href="http://boat-tours.test/app/uploads/2019/05/Hobcaw_Barony_Tours.pdf" target="_blank"><img class="img-fluid bt-img-shadow" src="@asset('images/icon_hobcawbarony.gif')" alt=""></a>
      </div>
    </div>
  </div>
  <div class="copy">
    Copyright <i class="far fa-copyright"></i> <a href="{{ home_url('/') }}"><?php echo bloginfo('name'); ?></a> <?php echo date("Y"); ?>
  </div>
</footer>
