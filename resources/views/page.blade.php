@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')

    <div class="container">
        @include('partials.content-page')
    </div>

    @include('partials.testimonials')
    
  @endwhile
@endsection
