<?php get_header(); ?>
<div class="row main-content">
        
		<?php get_template_part('sidebar'); ?>
        <!--CONTENT -->
       <div class="col-xs-12 col-sm-8 col-sm-8 col-lg-8">
          <!-- top article-->
          <div style="margin-bottom:-30px;" class="panel panel-default">
            <div style="padding-top:0px;" class="datahome-product panel-body">
            <?php if (have_posts()) : while (have_posts()) : the_post();?>
              <h2 id="post-<?php the_ID(); ?>"><?php the_title();?></h2>
              <hr>
              <p>
              <?php
                global $more; // hack to use Read More in Pages
                $more = 0;
                the_content('<p class="serif">Read the rest of this page »</p>'); ?>
            </p>
            </div>
          </div>
         

        </div>
        </div>
        <!-- end of col-xs-12 col-sm-4 col-sm-4 col-lg-4 (center) -->
        <?php endwhile; endif; ?>

     
</div>
<!--  end of row main-content -->
<?php get_footer(); ?>
    