  </div><!--/.row-->
</div><!--/.container-->


<style type="text/css">

/*-----------------------------------------------------------------------------------*
/* Footer
/*-----------------------------------------------------------------------------------*/
  .footer {
    text-align: center;
    padding: 0px 0;
/*    margin-top: 70px;*/
    border-top: 1px solid #e5e5e5;
    background-color: #333;
  }

  .footer-widget {
/*      width: 200px;*/
      padding: 10px 0;
      margin-right: 30px;
      margin-bottom: 30px;
      float: left;
  }

  .footer-widget a{
    color: #FFF;
  }
  .footer-widget a:hover{
    color: #F66;
    
  }
  .footer-widget ul{
    list-style: none;
  }
  .footer-widget li{
    margin-bottom: 7px;
    padding-bottom: 7px;
    border-bottom: 1px solid #EEE;
  }

  .footer-widget h4{
    margin-bottom: 20px;
    margin-top: 0px;
    font-size: 14px;
    color: #9D9D9D;
  }

  .remove-margin{
    margin-right: 0;
  }

</style>

  <!-- Footer
    ================================================== -->
    <footer class="footer">

        <div class="container">

          <div class="row">

              <div class="col-md-2 col-md-offset-2">
                  <div class= "footer-widget remove-margin">                 
                    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('First Footer Area') ) : ?><?php endif; ?>         
                  </div>
              </div>

              <div class="col-md-2">

                  <div class="footer-widget">
                      <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Second Footer Area') ) : ?><?php endif; ?>
                  </div>
                  <!-- END footer-widget -->   

              </div>

              <div class="col-md-2">

                    <div class="footer-widget">
                      <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Third Footer Area') ) : ?><?php endif; ?>
                    </div>
                    <!-- END footer-widget -->  

              </div>

              <div class="col-md-2">
    
                    <div class="footer-widget">   
                      <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Fourth Footer Area') ) : ?><?php endif; ?>
                    </div>
                    <!-- END footer-widget -->

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
          .footer-links li:first-child {
            padding-left: 0;
          }

        </style>

      <div class="container">
        <p>Internetional School of Jinan University</p>
        <p>Designed and Created By <a href="<?php echo site_url().'/wp-admin/'?>"> Han </a></p>
        <ul class="footer-links">
          <li><a href="#">Chinese</a></li>
          <li class="muted">&middot;</li>
          <li><a href="#">Jinan University</a></li>
          <li class="muted">&middot;</li>
          <li><a href="#">Changelog</a></li>
        </ul>
      </div>

    </footer>

  <?php wp_footer(); ?>

  </body>
</html>
