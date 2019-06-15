<section id="testimonials">
  <div class="container">
    <h3 class="text-center">What are people saying about Captain Rods?</h3>

    <div id="testimonial-carousel" class="carousel slide" data-ride="carousel">
      <?php if( have_rows('testimonials', 'options') ): $i = 0; ?>
        <ol class="carousel-indicators">
          <?php while ( have_rows('testimonials', 'options') ): the_row(); ?>
            <li data-target="#testimonial-carousel" data-slide-to="<?php echo $i; ?>" class="<?php if($i == 0) echo 'active'; ?>"></li>
          <?php $i++; endwhile; ?>  
        </ol>
      <?php endif; ?>
      <div class="carousel-inner">
        <?php if( have_rows('testimonials', 'options') ): ?>
          <?php while( have_rows('testimonials', 'options') ): the_row(); ?>
            <div class="carousel-item">
              <div class="carousel-caption">
                <span class="text-warning"><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i></span><br>
                <div class="mt-2 mb-2 text">"<?php echo get_sub_field('text'); ?>"</div>
                <div class="text-right"><strong>-- <?php echo get_sub_field('name'); ?></strong></div>
              </div>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
      <a class="carousel-control-prev" href="#testimonial-carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#testimonial-carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</section>