
<div id="contact-wrap">
  <h4 id="opt4" class="section-title section-title-offset"><span>Contact Title</span></h4>

  <div>
    <div class="col-md-6">
      <div class="eight columns alpha">
        <?php
          $contact_page_id = $ci['m_contact_page'];
          $post = get_post($contact_page_id);
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
</div><!-- contact-wrap -->

