<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

	</div><!-- #content -->


      <!-- Footer -->
      <footer id="colophon" class="site-footer page-footer font-small unique-color-dark" style="background-color: #243f7d;">

          <div style="background-color: #243f7d;">
            <div class="container">

              <!-- Grid row-->
              <div class="row py-4 d-flex align-items-end">

                <!-- Grid column -->
                <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                <a class="footer-brand" href="/">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png"
                    width="170" height="80" class="d-inline-block align-top" alt="High Engineering logo"/>
                </a>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-6 col-lg-7 text-center text-md-right">


                  <!--Linkedin -->
                  <a class="li-ic" href="https://www.linkedin.com/" target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-linkedin-in white-text">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/linkedin.png"
                        width="40" height="40" class="d-inline-block align-bottom" alt="linkedin icon"/>
                    </i>
                  </a>

                </div>
                <!-- Grid column -->

              </div>
              <!-- Grid row-->

            </div>
          </div>
          <hr id="ft-divider" class="accent-2 mb-4 mt-0 d--block mx-auto" style="width: 72%;">

          <!-- Footer Links -->
          <div class="container text-center text-md-left mt-5">

            <!-- Grid row -->
            <div class="row mt-3">

              <!-- Grid column -->
              <div class="col-md-6 col-lg-1 col-xl-2 mr-auto mb-4" id="ft-links">

                <!-- Links -->
                <p>
                  <a href="/products-overview/">Products</a>
                </p>
                <p>
                  <a href="/services-overview/">Services</a>
                </p>
                <p>
                  <a href="/applications-overview/">Applications</a>
                </p>
                <p>
                  <a href="/resources-overview/">Resources</a>
                </p>
                <p>
                  <a href="/about-overview/">About</a>
                </p>

              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-md-6 col-lg-5 col-xl-4 mr-auto mb-md-0 mb-4" id="ft-addy">

                <!-- Links -->
                <p>
                  <i class="fas fa-home"></i><a href="https://goo.gl/maps/FKwwZTMQtrw" target="_blank" rel="noopener noreferrer">1215 13th ST SE, Suite 213</a></p>
                <p>
                  <i class="fas fa-home"></i><a href="https://goo.gl/maps/FKwwZTMQtrw" target="_blank" rel="noopener noreferrer">Calgary, AB T2G 3J4</a></p>
                <p>
                  <i class="fas fa-phone"></i><a href="tel:403-287-0475">(403) 287 0475</a></p>
                <p>
                  <i class="fas fa-envelope"></i><a href="mailto:solutions@highengineering.com">solutions@highengineering.com</a></p>

              </div>
              <!-- Grid column -->

               <!-- Grid column -->
              <div class="col-md-12 col-lg-12 col-xl-6 ml-auto mb-4 d-xl-flex justify-content-end" id="ft-copyright">

                <!-- Content -->
                <!-- Copyright -->
                  <div class="footer-copyright text-center">© 2018 High Engineering Ltd. - All rights reserved.
                  </div>
                <!-- Copyright -->

              </div>
              <!-- Grid column -->

            </div>
            <!-- Grid row -->

          </div>
          <!-- Footer Links -->

        </footer>
        <!-- Footer --><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
