  </div><!--/.row-->
</div><!--/.container-->

<!-- Footer
================================================== -->
        <div class="container-fluid">

          <div class="row">

              <div class="col-md-2 col-md-offset-2">

                    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('First Footer Area') ) : ?><?php endif; ?>         
                 
              </div>

              <div class="col-md-2">
              
                    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Second Footer Area') ) : ?><?php endif; ?>         
                 
              </div>

              <div class="col-md-2">
              
                    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Third Footer Area') ) : ?><?php endif; ?>         
                 
              </div>

              <div class="col-md-2">

                    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Fourth Footer Area') ) : ?><?php endif; ?>

              </div>

          </div>

        </div>

        <style type="text/css">

          .container p {
            margin-bottom: 0;
            color: #777;
          }
          .footer-links {
            margin: 10px 0;
          }
          .footer-links li {
            display: inline;
            padding: 0 2px;
          }
         /* .footer-links li:first-child {
            padding-left: 0;
          }*/

        </style>

      <footer>
        <center>

        <p>Designed and Created By <a href="<?php echo site_url().'/wp-admin/'?>"> Han Jiang</a></p>
        <ul class="footer-links">
          <li><a href="http://www.han.pm/resume-en.pdf" target="blank">Resume</a></li>
          <li class="muted">&middot;</li>
          <li><a href="#">About</a></li>
          <li class="muted">&middot;</li>
          <li><a href="#">Contact</a></li>
        </ul>
        </center>
      </footer>

      <div id="bottom"></div>

      <a href="#" id="btop"><?php _e('Back to Top', mustache); ?></a>

  <?php wp_footer(); ?>

  </body>
</html>
