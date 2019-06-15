<header class="banner">
  <div class="container">
    <nav class="navbar navbar-expand-lg">
      <a class="navbar-brand" href="{{ home_url('/') }}"><img src="@asset('images/logo.png')"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars text-white"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'navbar-nav ml-auto']) !!}
        @endif
        <span class="navbar-text d-block d-md-none">
          <div class="social">
            <a href="" target="_blank"><i class="fab fa-tripadvisor"></i></a>
            <a href="" target="_blank"><i class="fab fa-facebook ml-2"></i></a>
            <a href="" target="_blank"><i class="fab fa-yelp ml-2"></i></a>
            <a href="" target="_blank"><i class="fab fa-google ml-2"></i></a>
          </div>
        </span>
      </div>
    </nav>
  </div>
</header>
