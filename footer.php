<footer class="footer">
  <div class="container">
    <div class="col-lg-6 col-md-6 col-sm-6"  style="margin-bottom:25px">
      <?php wp_nav_menu( array('menu_id' => 'footer-nav')); ?>
    </div><!--button column div-->

    <div class="row">
      <div class="col-lg-4 col-lg-offset-1 col-md-4 col-md-offset-1 col-sm-6 col-xs-12">
        <div class="col-lg-12">
          <?php the_field('footer_hours',4)?>
        </div>    
      </div><!--column div-->
    </div><!--row div-->
  </div><!--container div-->
</footer>

<!--Social Media footer-->
<footer class="footer">
  <div class="social">
    <div class="container">
      <div class="row">
        <div class="col-lg-12" style="text-align: center;">
          <a href="<?php the_field('facebook',4)?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
          <a href="<?php the_field('twitter',4)?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
          <a href="<?php the_field('instagram',4)?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        </div><!--column div-->
      </div><!--row div-->
    </div><!--container-->
  </div><!--social div-->
</footer>

  <p>Copyright &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>		   
	<?php wp_footer(); ?>		



<!--End Document-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="http://malsup.github.com/jquery.cycle2.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.js"></script> 
	</body>
</html>
