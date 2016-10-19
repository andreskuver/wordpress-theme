</div><!-- /.container -->

    <footer class="blog-footer">
      <div id="footerOuter">
        <div id="footerWrapper"> <span class="copy">Copyright © 2016 <a href="/">TerraLuxe</a></span> <span class="sepFooter">|</span> <a href="/about-us.aspx">About TerraLuxe</a> <span class="sepFooter">|</span> <a href="/privacy.aspx">Privacy Policy</a> <span class="sepFooter">|</span> <a href="/terms.aspx">Terms and Conditions</a> </div>
    </div>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <?php wp_footer();?>
    <script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/cufon-yui.js"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/jquery.cycle.all.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/Franklin_Gothic_Demi_Cond_400.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/Franklin_Gothic_Medium_Cond_400.font.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/TradeGothic_LT_CondEighteen_Regular_500.font.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/TradeGothic_LT_Regular_400.font.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/TradeGothic_LT_Bold_700.font.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/easy.paginate.js"></script>

    <script>
    $(document).ready(function() {
      Cufon.replace('.tlcr', { fontFamily: 'TradeGothic LT CondEighteen Regular', hover: true });
      Cufon.replace('.TradeGothic_LT_Regular', { fontFamily: 'TradeGothic LT Regular', hover: true });
      Cufon.replace('.fgmc, .faqpanel H4, #nav li a, #nav li .noAnchor', { fontFamily: 'Franklin Gothic Medium Cond', hover: true });
      Cufon.replace('.fgdc', { fontFamily: 'Franklin Gothic Demi Cond', hover: true });
      Cufon.replace('.TradeGothic_LT_bold, h2 , h3', { fontFamily: 'TradeGothic LT Bold', hover: true });
      
      $('.slider').cycle({
        timeout: 0,
        pager: '#thumbs',
        pagerAnchorBuilder: function(idx, slide){
                    return '#thumbs li:eq(' + idx + ')';
                  }
      });

      $('#nav > .hasdrop').each(function(){
        var menuItem = $(this).find('.trigger'),
          dropdown =  $(this).find('.dropdown');
        $(this).hover(function(){
          menuItem.addClass('active');
          Cufon.refresh('#nav li .noAnchor');
          dropdown.show();
        }, function(){
          menuItem.removeClass('active');
          Cufon.refresh('#nav li .noAnchor');
          dropdown.hide();
          
        });
      });
    });
    </script>
    <script type="text/javascript"> var vv_account_id = 'FGc47cD2g3'; var vv_BaseURL = (("https:" == document.location.protocol) ? "https://frontend.id-visitors.com/FrontEndWeb/" : "http://frontend.id-visitors.com/FrontEndWeb/");document.write(unescape("%3Cscript src='" + vv_BaseURL + "Scripts/liveVisit.js' type='text/javascript'%3E%3C/script%3E"));</script><script type="text/javascript"> try {document.write(unescape("%3Cscript src='" + new_url +"' type='text/javascript'%3E%3C/script%3E"));} catch( err ) {}</script>
  </body>
</html>