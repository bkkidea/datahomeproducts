<footer class="well">
      <div class="container">
        <div class="row">
          <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
            <h4 class="line3 center standart-h4title"><span>Navigation</span></h4>
            <ul class="footer-links">
              <li><a href="#">DATAHOME PRODUCTS</a></li>
              <li><a href="#">DATAHOME PRODUCTS</a></li>
              <li><a href="#">DATAHOME PRODUCTS</a></li>
              <li><a href="#">DATAHOME PRODUCTS</a></li>
              <li><a href="#">DATAHOME PRODUCTS</a></li>
            </ul>
          </div>
          <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
            <h4 class="line3 center standart-h4title"><span>Navigation</span></h4>
            <ul class="footer-links">
              <li><a href="#">DATAHOME PRODUCTS</a></li>
              <li><a href="#">DATAHOME PRODUCTS</a></li>
              <li><a href="#">DATAHOME PRODUCTS</a></li>
              <li><a href="#">DATAHOME PRODUCTS</a></li>
              <li><a href="#">DATAHOME PRODUCTS</a></li>
            </ul>
          </div>
          <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
            <h4 class="line3 center standart-h4title"><span>Navigation</span></h4>
            <ul class="footer-links">
              <li><a href="#">DATAHOME PRODUCTS</a></li>
              <li><a href="#">DATAHOME PRODUCTS</a></li>
              <li><a href="#">DATAHOME PRODUCTS</a></li>
              <li><a href="#">DATAHOME PRODUCTS</a></li>
              <li><a href="#">DATAHOME PRODUCTS</a></li>
            </ul>
          </div>
          <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
            <h4 class="line3 center standart-h4title"><span>Navigation</span></h4>
            <ul class="footer-links">
              <li><a href="#">DATAHOME PRODUCTS</a></li>
              <li><a href="#">DATAHOME PRODUCTS</a></li>
              <li><a href="#">DATAHOME PRODUCTS</a></li>
              <li><a href="#">DATAHOME PRODUCTS</a></li>
              <li><a href="#">DATAHOME PRODUCTS</a></li>
            </ul>
          </div>
        </div>
      </div>
      <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.js" type="text/javascript"></script>
      <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
      


      <script type="text/javascript">
        jQuery(function (jQuery) {
        		jQuery("#cat-navi").append("<select/>");
        		jQuery("#cat-navi select").addClass("form-control");
        		jQuery("<option />", {
        	        "selected": "selected",
        	        "value": "",
        	        "text": "Choose category"
        	    	}).appendTo("#cat-navi select");
        		jQuery("#cat-navi a").each(function () {
        				var el = jQuery(this);
        				var perfix = '';
        				switch (el.parents().length) {
        		            case (11):
        		                perfix = '-';
        		                break;
        		            case (13):
        		                perfix = '--';
        		                break;
        		            default:
        		                perfix = '';
        		                break;
        		        	}
        		        jQuery("<option />", {
        						"value": el.attr("href"),"text": perfix + el.text()
        		        	}).appendTo("#cat-navi select");
        			});
        		jQuery('#cat-navi select').change(function () {
        				window.location.href = this.value;
        			});
        	});
      </script>
    </footer>
    <?php wp_footer();?> 
  </body>
</html>