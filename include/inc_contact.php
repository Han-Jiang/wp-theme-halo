
<div id="contact-wrap">
<section id="contact" class="container">
  <h4 id="opt4" class="section-title section-title-offset">
  <span>Contact</span></h4>

 <div class="container">

    <div class="row">
      <div class="contact col-md-6">
        <?php
          $contact_page_id = $ci['m_contact_page'];
          // $post = get_post(578);
          $post = get_post(2090);
          setup_postdata($post);
        ?>
        <h3><?php the_title(); ?></h3>
        <?php the_content(); ?>
      </div>
      <div class="col-md-6">
        <?php dynamic_sidebar('contact-sidebar'); ?>
      </div>
    </div>
  </div>

</section><!-- /clients -->
</div><!-- contact-wrap -->

