<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>

<div class="page-header d-flex justify-content-center align-items-center" style="background-image: url('<?php echo $backgroundImg[0]; ?>');">
  <h1 class="text-white display-3">{!! App::title() !!}</h1>
</div>
