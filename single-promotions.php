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
              <h3 class="pro-name">ชื่อโปรโมชั่น : <?php echo get_post_meta($post->ID, 'pro_name', true); ?></h3>
              <div class="row data">
              <div class="col-md-6 built-type">ห้อง : <?php echo get_post_meta($post->ID, 'built_in_type', true); ?></div>
              <div class="col-md-6 size">พื้นที : <?php echo get_post_meta($post->ID, 'area', true); ?> ตร.ม.</div>
              <div class="col-md-6 price">ปกติ : <strike><?php echo get_post_meta($post->ID, 'regular_price', true); ?> บาท</strike></div>
              <div class="col-md-6 price2">ลดเหลือ :  <span class="reduce"><?php echo get_post_meta($post->ID, 'sale_price', true); ?> บาท</span></div>
              </div>
              <hr>
              <p>

              <?php
                global $more; // hack to use Read More in Pages
                $more = 0;
                the_content('<p class="serif">Read the rest of this page »</p>'); 
            ?>
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
    