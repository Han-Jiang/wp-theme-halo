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
        <p>Internetional School of Jinan University</p>
        <p>Designed and Created By <a href="<?php echo site_url().'/wp-admin/'?>"> Han </a></p>
        <ul class="footer-links">
          <li><a href="#">Chinese</a></li>
          <li class="muted">&middot;</li>
          <li><a href="#">Jinan University</a></li>
          <li class="muted">&middot;</li>
          <li><a href="#">Changelog</a></li>
        </ul>
        </center>>
      </footer>

  <?php wp_footer(); ?>

  </body>
</html>
