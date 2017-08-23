<footer class="footer">
  <div class="container">
    <div class="col-lg-6 col-md-6 col-sm-6"  style="margin-bottom:25px">
      <?php wp_nav_menu( array('menu_id' => 'footer-nav')); ?>
      <a href="http://www.wholehealthmn.com/about.html"><button type="button" class="btn"><i class="fa fa-stethoscope" aria-hidden="true"></i>  About Whole Health</button></a>
      <a href="http://www.wholehealthmn.com/meet-us.html"><button type="button" class="btn"><i class="fa fa-user" aria-hidden="true"></i>  Meet Us</button></a>
      <a href="http://www.wholehealthmn.com/patients.html"><button type="button" class="btn"><i class="fa fa-plus-square" aria-hidden="true"></i>  New Patients</button></a>
      <a href="http://www.wholehealthmn.com/services.html"><button type="button" class="btn"><i class="fa fa-medkit" aria-hidden="true"></i>  Services</button></a>
      <a href="http://www.wholehealthmn.com/blog.html"><button type="button" class="btn"><i class="fa fa-pencil" aria-hidden="true"></i>  Blog</button></a>
      <a href="http://www.wholehealthmn.com/contact.html"><button type="button" class="btn"><i class="fa fa-phone" aria-hidden="true"></i>  Contact Us</button></a>
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


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script>
<!--End Document-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="http://malsup.github.com/jquery.cycle2.js"></script>  
	</body>
</html>
