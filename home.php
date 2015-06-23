<?php get_header(); ?>
<div class="row main-content">
        
        <?php get_template_part('home-c-left'); ?>

        <!--CONTENT -->
        <div class="col-xs-12 col-sm-4 col-sm-4 col-lg-4">
          <!-- top article-->
          <div class="panel panel-default">
            <div style="padding-top:0px;" class="panel-body">
              <h2>ผู้ให้บริการตกแต่งคอนโดครบวงจร(home.php)</h2>
              <hr>
              <div id="MyCarousel" class="carousel side">
                <ol class="carousel-indicators">
                  <li data-target="#MyCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#MyCarousel" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="item active"><img alt="First slide" src="<?php echo get_template_directory_uri(); ?>/images/Supalai-Wellington.jpg" class="img-responsive"></div>
                  <div class="item"><img alt="First slide" src="<?php echo get_template_directory_uri(); ?>/images/blogpost3.jpg" class="img-responsive"></div>
                </div><a href="#MyCarousel" data-slide="prev" class="left carousel-control"><span class="icon-prev"></span></a><a href="#MyCarousel" data-slide="next" class="right carousel-control"><span class="icon-next"></span></a>
              </div>
              <h3><a href="#">Supalai Wellington II - ศุภาลัย</a></h3>
              <p>ด้วยรูปแบบโครงการ ภายใต้แนวคิด Modern English Style ที่นำจุดเด่นของการออกแบบสถาปัตยกรรมแนวอังกฤษสมัยใหม่ ที่แสดงให้เห็นภาพลักษณ์ความหรูหรา, สง่างาม, อบอุ่น แต่ยังคงเอกลักษณ์ในสไตล์อังกฤษที่งดงามและโดดเด่น ท่ามกลางธรรมชาติที่รื่นรมย์</p>
              <p><a href="#" class="btn btn-info"> Vuew detail</a></p>
            </div>
          </div>
          <!--article-->
          <div class="panel panel-default">
            <div class="panel-body"><img src="<?php echo get_template_directory_uri(); ?>/images/blogpost6.jpg" alt="post image" class="img-responsive">
              <h3><a href="#">Standart post with corousel images</a></h3>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
              <p><a href="#" class="btn btn-info"> Vuew detail</a></p>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-body">
              <h3><a href="#">Standart post with corousel images</a></h3>
              <p class="clearfix"><i class="fa-icon-comment"></i><a href="#">3 Comments |</a><i class="fa-icon-share"></i><a href="#">39 shares |</a><i class="fa-icon-user"></i><a href="#"> Admin | Tages :  </a><a href="#"><span class="label label-info">Bootstraptor</span></a><a href="#"><span class="label label-info">Bootstrap</span></a><a href="#"><span class="label label-info">UI</span></a><a href="#"><span class="label label-info">growth</span></a></p>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
              <p><a href="#" class="btn btn-info"> Vuew detail</a></p>
            </div>
          </div>
        </div>
        <!-- end of col-xs-12 col-sm-4 col-sm-4 col-lg-4 (center) -->

        <?php get_template_part('home-c-right'); ?>
     
</div>
<!--  end of row main-content -->
<?php get_footer(); ?>
    